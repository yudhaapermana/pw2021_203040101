<?php

session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';
$sepatu = query("SELECT * FROM sepatu");

if (isset($_POST['cari'])) {
    $sepatu = cari($_POST['keyword']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/styleadmin.css">
    <title>Admin</title>
</head>

<body>
    <nav class="navbar navbar-dark fixed-top bg-light">
        <div class="container-fluid">
            <form action="" method="post" class="d-flex">
                <input type="text" name="keyword" autofocus class="keyword form-control" size="25" placeholder="Cari....." style="font-size: 13px;">
                <button class="btn btn-outline-primary tombol-cari" type="submit" name="cari">Cari!</button>
            </form>
            <a href="logout.php"><i class="fa fa-sign-out fa-1x" aria-hidden="true" style="color: black;"></i></a>
        </div>
    </nav>

    <div class="container">
        <a href="tambah.php"><button class="btn btn-light border border-dark" style="font-weight: bold;  font-family: Helvetica, sans-serif;">Tambah Data</button></a>
        <table class="table table-bordered text-center my-3">
            <thead class="table-danger" style="font-size: 16px;  font-family: 'Roboto Mono', monospace;">
                <tr class="text-uppercase">
                    <th scope="col">No.</th>
                    <th scope="col" style="width: 170px">Opsi</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama</th>
                    <th scope="col">jenis</th>
                    <th scope="col">merek</th>
                    <th scope="col">harga</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($sepatu)) : ?>
                    <tr>
                        <td colspan="7">
                            <p class="text-center" style="font-size: 25px; font-style:italic;">Data tidak ditemukan</p>
                        </td>
                    </tr>
                <?php endif; ?>
                <?php $i = 1; ?>
                <?php foreach ($sepatu as $spt) : ?>
                    <tr style="font-size: 14px;">
                        <td style="font-weight: bold;"><?= $i ?></td>
                        <td class="align-middle">
                            <a href="ubah.php?id=<?= $spt['id'] ?>"><button type="button" class="btn btn-primary">Ubah</button></a>
                            <a href="hapus.php?id=<?= $spt['id'] ?>" onclick="return confirm('Yakin akan dihapus??')"><button type="button" class="btn btn-danger">Hapus</button></a>
                        </td>
                        <td><img src="../assets/img/sepatu/<?= $spt["gambar"]; ?>" class="gambar"></td>
                        <td class="nama align-middle text-uppercase"><?= $spt["nama"]; ?></td>
                        <td class="align-middle text-capitalize"><?= $spt["jenis"]; ?></td>
                        <td class="align-middle text-capitalize"><?= $spt["brand"]; ?></td>
                        <td class="align-middle text-capitalize"><?= $spt["harga"]; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="../js/script1.js"></script>
</body>

</html>