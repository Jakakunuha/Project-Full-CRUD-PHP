<?php
require __DIR__ . '/vendor/autoload.php';
require 'config/app.php';

use Spipu\Html2Pdf\Html2Pdf;

$data_barang = select("SELECT * FROM barang");

// atur ukuran gambar
$content .= '<style type="text/css">
.gambar {
    width: 50px;
}
</style>';

$content .= '
<page>
<table border="1" align="center">
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Jumlah</th>
    <th>Harga</th>
    <th>Barcode</th>
    <th>Tanggal</th>
</tr>';

$no = 1;
foreach ($data_barang as $barang) {
    $content .='
    <tr>
        <td>'.$no++.'</td>
        <td>'.$barang['nama'].'</td>
        <td>'.$barang['jumlah'].'</td>
        <td>'.$barang['harga'].'</td>
        <td>'.$barang['barcode'].'</td>
        <td>'.$barang['tanggal'].'</td>
    </tr>';
}

$content .= '
</table>
</page>';


$html2pdf = new Html2Pdf();
$html2pdf->writeHTML($content);
ob_start();
$html2pdf->output('Laporan-cetak-mahasiswa.pdf');
