<?php

session_start();
// membatasi halaman sebelum login
if (!isset($_SESSION['login'])) {
    echo "<script>
            // alert('Silahkan Login Dulu');
            document.location.href = 'login.php';
    </script>";
    exit;
}

// membatasi halaman sesuai user login / hak akses
if ($_SESSION["level"] != 1 and $_SESSION["level"] != 3  ) {
    echo "<script>
            alert('Perhatian anda tidak punya hak akses');
            document.location.href = 'crud-modal.php';
    </script>";
    exit;
}

require 'config/app.php';

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$activeWorksheet = $spreadsheet->getActiveSheet();
$activeWorksheet->setCellValue('A1', 'No');
$activeWorksheet->setCellValue('B1', 'Nama');
$activeWorksheet->setCellValue('C1', 'Jumlah');
$activeWorksheet->setCellValue('D1', 'Harga');
$activeWorksheet->setCellValue('E1', 'Barcode');
$activeWorksheet->setCellValue('F1', 'Tanggal');

$data_barang = select("SELECT * FROM barang");

$no = 1;
$start = 2;

foreach ($data_barang as $barang) {
    $activeWorksheet->setCellValue('A' . $start, $no++);
    $activeWorksheet->setCellValue('B' . $start, $barang['nama'])->getColumnDimension('B')->setAutoSize(true);
    $activeWorksheet->setCellValue('C' . $start, $barang['jumlah'])->getColumnDimension('C')->setAutoSize(true);
    $activeWorksheet->setCellValue('D' . $start, $barang['harga'])->getColumnDimension('D')->setAutoSize(true);
    $activeWorksheet->setCellValue('E' . $start, $barang['barcode'])->getColumnDimension('E')->setAutoSize(true);
    $activeWorksheet->setCellValue('F' . $start, $barang['tanggal'])->getColumnDimension('F')->setAutoSize(true);
    $start++;
}

// tabel border
$styleArray = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
];

$border = $start - 1;
$activeWorksheet->getStyle('A1:F' .$border)->applyFromArray($styleArray);

$writer = new Xlsx($spreadsheet);
$writer->save('Laporan data barang.xlsx');
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheet.sheet');
header('Content-Disposition: attachment;filename="Laporan data barang.xlsx"');
readfile('Laporan data barang.xlsx');
unlink('Laporan data barang.xlsx');
exit;