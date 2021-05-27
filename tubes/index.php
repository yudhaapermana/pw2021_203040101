<?php
// Yudha Permana
// 203040101
// Shift Kamis 08.00 - 09.00
?>

<?php

require 'php/functions.php';
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
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styleindex.css">
    <title>Halaman Utama</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-light">
        <div class="container-fluid">
            <form action="" method="post" class="d-flex my-1">
                <input type=" text" name="keyword" autofocus class="keyword form-control" placeholder="Cari....." size="25" style="font-size: 13px;">
                <button class="btn btn-dark tombol-cari" type="submit" name="cari">Cari!</button>
            </form>
            <a href="php/login.php" style="color: black; font-size: 14px; font-family:Arial, Helvetica, sans-serif; text-decoration: none;">Admin <i class="fa fa-sign-in fa-1x" aria-hidden="true" style="color: black; font-size: 19px;"></i></a>
        </div>
    </nav>


    <div class="container">
        <div class="col-lg-12">
            <h3 class="text-center">DAFTAR SEPATU</h3>
        </div>
        <?php if (empty($sepatu)) : ?>
            <p class="text-center" style="font-size: 25px; font-style:italic;">Data tidak ditemukan</p>
        <?php endif; ?>
        <div class="row mx-auto py-3">
            <?php foreach ($sepatu as $spt) : ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                    <div class="card rounded-1 my-2" style="width: auto; height: auto;">
                        <div class="card-body" style="width: auto;">
                            <a href=" php/detail.php?id=<?= $spt['id'] ?>">
                                <img src="assets/img/sepatu/<?= $spt["gambar"]; ?>" class="gambar mb-1 card-img-top">
                            </a>
                            <hr>
                            <a href=" php/detail.php?id=<?= $spt['id'] ?>" style="text-decoration: none; color: black;">
                                <h5 class="card-title text-uppercase mt-2"><?= $spt["nama"]; ?></h5>
                            </a>
                            <p class="harga text-capitalize pb-0">Rp. <?= $spt["harga"]; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


    <script src="js/script.js"></script>
</body>

</html>