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
$activeWorksheet->setCellValue('A1', 'NO');
$activeWorksheet->setCellValue('B1', 'Nama');
$activeWorksheet->setCellValue('C1', 'Program Studi');
$activeWorksheet->setCellValue('D1', 'Jenis Kelamin');
$activeWorksheet->setCellValue('E1', 'Telepon');
$activeWorksheet->setCellValue('F1', 'Email');
$activeWorksheet->setCellValue('G1', 'Foto');

$data_mahasiswa = select("SELECT * FROM mahasiswa");

$no = 1;
$start = 2;

foreach ($data_mahasiswa as $mahasiswa) {
    $activeWorksheet->setCellValue('A' . $start, $no++);
    $activeWorksheet->setCellValue('B' . $start, $mahasiswa['nama'])->getColumnDimension('B')->setAutoSize(true);
    $activeWorksheet->setCellValue('C' . $start, $mahasiswa['prodi'])->getColumnDimension('C')->setAutoSize(true);
    $activeWorksheet->setCellValue('D' . $start, $mahasiswa['jk'])->getColumnDimension('D')->setAutoSize(true);
    $activeWorksheet->setCellValue('E' . $start, $mahasiswa['telepon'])->getColumnDimension('E')->setAutoSize(true);
    $activeWorksheet->setCellValue('F' . $start, $mahasiswa['email'])->getColumnDimension('F')->setAutoSize(true);
    $activeWorksheet->setCellValue('G' . $start, 'http://localhost/crud_php/assets/img/' . $mahasiswa['foto'])->getColumnDimension('G')->setAutoSize(true);
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
$activeWorksheet->getStyle('A1:G' .$border)->applyFromArray($styleArray);

$writer = new Xlsx($spreadsheet);
$writer->save('Laporan data mahasiswa.xlsx');
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheet.sheet');
header('Content-Disposition: attachment;filename="Laporan data mahasiswa.xlsx"');
readfile('Laporan data mahasiswa.xlsx');
unlink('Laporan data mahasiswa.xlsx');
exit;