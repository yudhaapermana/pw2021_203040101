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
    <title>Latihan4c_203040101</title>
    <style>
        .container {
            margin-top: 30px;
        }
        h3 {
            font-weight: bold;
            margin-bottom: 38px;
            margin-top: 25px;
            text-align: center;
        }
        .nama {
            font-family: courier new, sans-serif;
            font-size: 16px;
        }
        a:hover {
            font-size: 18px;
        }

    </style>
</head>
<body>
    <div class="container">
         <form action="" method="get">
            <input type="text" name="keyword" autofocus>
            <button type="submit" name="cari">Cari!</button>
        </form>
        <?php if (empty($sepatu)) : ?>
            <h3>Data tidak ditemukan</h3>
        <?php else : ?>
            <h3>Daftar Nama Sepatu</h3>
            <?php foreach ($sepatu as $spt) : ?>
                <p class="nama">
                    <a href="php/detail.php?id=<?= $spt['id']?>">
                        <?= $spt["nama"] ?>
                    </a>
                </p>
            <?php endforeach; ?>
        <?php endif; ?>
        <a href="php/admin.php">
            <button>Masuk ke halaman Admin</button>
        </a>
    </div>
</body>
</html>