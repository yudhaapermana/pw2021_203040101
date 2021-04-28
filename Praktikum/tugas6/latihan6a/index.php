<?php
// Yudha Permana
// 203040101
// Shift Kamis 08.00 - 09.00
?>

<?php

require 'php/functions.php';

if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $sepatu = query("SELECT * FROM sepatu WHERE 
        nama LIKE '%$keyword%' OR 
        jenis LIKE '%$keyword%' OR 
        brand LIKE '%%keyword%' OR 
        harga LIKE '%$keyword%' ");
} else {
    $sepatu = query("SELECT * FROM sepatu");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styleindex.css">
    <title>Halaman Utama</title>
</head>

<body>
    <div class="container my-4">
        <form action="" method="get">
            <input type="text" name="keyword" autofocus>
            <button class="btn btn-outline-primary" type="submit" name="cari">Cari!</button>
        </form>
        <?php if (empty($sepatu)) : ?>
            <h3>Data tidak ditemukan</h3>
        <?php else : ?>
            <h3 class="text-center">DAFTAR SEPATU</h3>
            <div class="row">
                <?php foreach ($sepatu as $spt) : ?>
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="assets/img/<?= $spt["gambar"]; ?>" class="gambar card-img-top" style="width: 200px;">
                            <div class="card-body text-center">
                                <h5 class="card-title text-uppercase "><?= $spt["nama"]; ?></h5>
                                <button class="btn btn-outline-info"><a href="php/detail.php?id=<?= $spt['id'] ?>" style="text-decoration: none;">Detail</a></button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <a href="php/login.php">
            <button class="btn btn-primary mt-3">Masuk ke halaman Admin</button>
        </a>
    </div>
</body>

</html>