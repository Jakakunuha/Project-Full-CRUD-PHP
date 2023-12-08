<?php

session_start();

// membatasi halaman sebelum login
if (!isset($_SESSION['login'])) {
    echo "<script>
            alert('Silahkan Login Dulu'); 
            document.location.href = 'login.php';
    </script>";
    exit;
}

// membatasi halaman sesuai user login / hak akses
if ($_SESSION["level"] != 1 and $_SESSION["level"] != 2) {
    echo "<script>
            alert('Perhatian anda tidak punya hak akses');
            document.location.href = 'mahasiswa.php';
    </script>";
    exit;
}

$title = 'Daftar Barang';
include 'layout/header.php';
$data_barang = select("SELECT * FROM barang ORDER BY id_barang DESC");
?>

<div class="container mt-5">
    <h1><i class="fas fa-synagogue"></i> Data Barang</h1>
    <hr>
    <a href="tambah-barang.php" class="btn btn-primary mb-1" ><i class="fas fa-plus-circle"></i> Tambah</a>
    <a href="download-excel-barang.php" class="btn btn-success mb-2" ><i class="fas fa-file-excel"></i> Download Excel</a>
    <a href="download-cetak-pdf-mahasiswa.php" class="btn btn-danger mb-2"  target="_blank"><i class="fas fa-file-pdf"  ></i> Download Barcode Pdf</a>
    <table class="table table-bordered table-striped mt-3" id="table">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Barcode</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data_barang as $barang) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $barang['nama']; ?></td>
                    <td><?= $barang['jumlah']; ?></td>
                    <td>Rp. <?= number_format($barang['harga'], 0, ',', '.'); ?></td>
                    <td class="text-center">
                        <img alt="barcode" src="barcode.php?codeType=Code128&size=15&text=<?= $barang['barcode']; ?>&print=true" />
                    </td>
                    <td><?= date('d/m/y | h:i:s', strtotime($barang['tanggal'])); ?></td>
                    <td width="20%" class="text-center">
                        <a href="ubah-barang.php?id_barang=<?= $barang['id_barang']; ?>" class="btn btn-primary"><i class="fas fa-edit"></i> Ubah</a>
                        <a href="hapus-barang.php?id_barang=<?= $barang['id_barang']; ?>" class="btn btn-danger" onclick="return confirm('Yakin Data Benar Dihapus?');"><i class="fas fa-trash-alt"></i> Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php
include 'layout/footer.php';
?>
