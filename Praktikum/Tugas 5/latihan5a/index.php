<?php
// Yudha Permana
// 203040101
// Shift Kamis 08.00 - 09.00
 ?>

<?php
    require 'php/functions.php';

    $sepatu = query("SELECT * FROM sepatu");
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
        h3 {
            font-weight: bold;
            margin-bottom: 38px;
            margin-top: 35px;
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
        <h3>Daftar Nama Sepatu</h3>
        <?php foreach ($sepatu as $spt) : ?>
            <p class="nama">
                <a href="php/detail.php?id=<?= $spt['id']?>">
                    <?= $spt["nama"] ?>
                </a>
            </p>
        <?php endforeach; ?> 
    </div>
</body>
</html>