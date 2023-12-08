<?php
// render halaman menjadi jshon
header('Content-Type: application/json');

require '../config/app.php';

// menerima input
$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];

// validasi data

if ($nama == null) {
    echo json_encode(['pesan' => 'Nama barang tidak boleh kosong']);
    exit;
}

// query tambah data
$query = "INSERT INTO barang VALUES (null, '$nama', '$jumlah', '$harga', CURRENT_TIMESTAMP())";
mysqli_query($db, $query);

// check status data
if ($query) {
    echo json_encode(['pesan' => 'Data barang berhasil ditambahkan']);
} else {
    echo json_encode(['pesan' => 'Data barang gagal ditambahkan']);
}
