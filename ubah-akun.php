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

$title = 'Daftar Akun';
include 'layout/header.php';

//mengambil id_barang dari url
$id_akun = (int)$_GET['id_akun'];

$akun = select("SELECT * FROM akun WHERE id_akun = $id_akun")[0];


//jika tombol ubah di tekan maka jalankan scrip berikut
if (isset($_POST['ubah'])) {
    if (update_akun($_POST) > 0) {
        echo "<script>
        alert('Data Akun Berhasil Diubah');
        document.location.href = 'akun.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Akun Gagal Diubah');
        document.location.href = 'akun.php';
        </script>";
    }
}

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><i class="fas fa-plus-circle"></i>Ubah Akun</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="akun.php">View Akun</a></li>
                        <li class="breadcrumb-item active">Ubah Akun</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Modal Ubah -->
    <?php foreach ($data_akun as $akun) : ?>
        <div class="modal fade" id="modalUbah<?= $akun['id_akun']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-success text-white">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="fas fa-user-edit"></i> Ubah Akun</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-body">
                            <!-- Main content -->
                            <section class="content">
                                <div class="container-fluid">
                                    <form action="" method="post">
                                        <input type="hidden" name="id_akun" value="<?= $akun['id_akun']; ?>">
                                        <div class="mb-3">
                                            <label for="nama">Nama</label>
                                            <input type="text" name="nama" id="nama" class="form-control" required value="<?= $akun['nama']; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="username">Username</label>
                                            <input type="text" name="username" id="username" class="form-control" required value="<?= $akun['username']; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" id="email" class="form-control" required value="<?= $akun['email']; ?>">
                                        </div>

                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <textarea name="alamat" id="alamat"><?= $akun['alamat']; ?></textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label for="password">Password <small>Masukkan Password Terbaru</small></label>
                                            <input type="password" name="password" id="password" class="form-control" required minlength="6">
                                        </div>
                                        <?php if ($_SESSION['level'] == 1) : ?>
                                            <div class="mb-3">
                                                <label for="level">Level</label>
                                                <select name="level" id="level" class="form-control" required>
                                                    <?php $level = $akun['level']; ?>
                                                    <option value="1" <?= $level == '1' ? 'selected' : null ?>>Admin</option>
                                                    <option value="2" <?= $level == '2' ? 'selected' : null ?>>Operator Barang</option>
                                                    <option value="3" <?= $level == '3' ? 'selected' : null ?>>Operator Mahasiswa</option>
                                                </select>
                                            </div>
                                        <?php else : ?>
                                            <input type="hidden" name="level" value="<?= $akun['level']; ?>">
                                        <?php endif; ?>

                                </div>
                        </div>
                        <div class="modal-footer">
                            <a href="akun.php" class="btn btn-secondary ms-2" style="float: right;">Kembali</a>
                            <button type="submit" name="ubah" class="btn btn-success">Ubah</button>
                        </div>
                        </form>

                    </div>
                </div>
                </section>
                <!-- /.content -->
            </div>
        </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
    <button type="submit" name="ubah" class="btn btn-success">Ubah</button>
</div>
</form>
<?php endforeach; ?>
<?php
include 'layout/footer.php';
?>