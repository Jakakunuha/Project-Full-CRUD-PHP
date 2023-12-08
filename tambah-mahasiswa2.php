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

$title = 'Tambah Mahasiswa';

include 'layout/header.php';

// check apakah tombol tambah di tekan
if (isset($_POST['tambah'])) {
    if (create_mahasiswa($_POST) > 0) {
        echo "<script>
        alert('Data Mahasiswa Berhasil Ditambahkan');
        document.location.href = 'mahasiswa.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Mahasiswa Gagal Ditambahkan');
        document.location.href = 'mahasiswa.php';
        </script>";
    }
}
?>

<div class="container mt-5">
    <h1><i class="fas fa-user-edit"></i> Tambah Mahasiswa</h1>
    <hr>
    <form action="" method="post" enctype="multipart/form-data">
        <!-- harus di tambahkan untuk upluod file data enctype="multipart/form-data -->
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Mahasiswa</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Mahasiswa" required>
        </div>

        <div class="row">
            <div class="mb-3 col-6">
                <label for="prodi" class="form-label">Program Studi</label>
                <select name="prodi" id="prodi" class="form-control" required>
                    <option value="">-- Pilih Prodi --</option>
                    <option value="Informatika">Informatika</option>
                    <option value="Pendidikan Teknologi dan Informasi">Pendidikan Teknologi dan Informasi</option>
                    <option value="Matematika">Matematika</option>
                    <option value="Sains Pertanian">Sains Pertanian</option>
                </select>
            </div>
            <div class="mb-3 col-6">
                <label for="jk" class="form-label">Jenis Kelamin</label>
                <select name="jk" id="jk" class="form-control" required>
                    <option value="">-- Pilih Jenis Kelamin --</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="telepon" class="form-label">Telepon</label>
                <input type="number" class="form-control" id="telepon" name="telepon" placeholder="Telepon" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea name="alamat" id="alamat"></textarea>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="email" required>
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" class="form-control" id="foto" name="foto" placeholder="foto" onchange="previewImg()">

                <img src="" alt="" class="img-thumbnail img-preview mt-2" width="100px">
            </div>

        </div>


        <button type="submit" name="tambah" class="btn btn-primary ms-2" style="float: right;">Tambah</button>
        <a href="index.php" class="btn btn-secondary ms-2" style="float: right;">Kembali</a>
    </form>

    <!-- Preview Image -->
    <script>
        function previewImg() {
            const foto = document.querySelector('#foto');
            const imgPreview = document.querySelector('.img-preview');

            const fileFoto = new FileReader();
            fileFoto.readAsDataURL(foto.files[0]);

            fileFoto.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }
    </script>

    <?php
    include 'layout/footer.php';
    ?>