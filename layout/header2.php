<?php
include 'config/app.php';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container">
                <a class="navbar-brand text-white" href="#">CRUD PHP</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <?php if ($_SESSION["level"] == 1 or $_SESSION["level"] == 2) : ?>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="index.php">Barang</a>
                            </li>
                        <?php endif ?>
                        <?php if ($_SESSION["level"] == 1 or $_SESSION["level"] == 3) : ?>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="mahasiswa.php">Mahasiswa</a>
                        </li>
                        <?php endif ?>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="crud-modal.php">Akun</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="logout.php" onclick="return confirm('Yakin ingin keluar.?')">Keluar</a>
                        </li>

                    </ul>
                </div>
                <a class="navbar-brand text-white" href="#"><?= $_SESSION['nama']; ?></a>
                <!-- <li class="nav-item">
                    <a class="nav-link text-white" href="logout.php">Keluar</a>
                </li> -->
            </div>
        </nav>
    </div>