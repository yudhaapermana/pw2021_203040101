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
    <title>Latihan4b_203040101</title>
    <style>
        .container {
            font-family: courier new, sans-serif;
        }

    </style>
</head>
<body>
    <div class="container">
        <table class="table table-bordered text-center my-4">
            <thead class="table-danger" style="text-align: center; font-size: 20px;">
                <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">PICTURE</th>
                    <th scope="col">NAME</th>
                    <th scope="col">TYPE</th>
                    <th scope="col">BRAND</th>
                    <th scope="col">PRICE</th>
                </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
            <?php foreach ($sepatu as $spt) : ?>
                <tr style="font-size: 14px;" >
                    <td style="font-weight: bold;"><?= $i ?></td>
                    <td><img src="assets/img/<?= $spt["gambar"]; ?>"></td>
                    <td style="font-size: 18px; font-weight: bold; text-align: left;"><?= $spt["nama"]; ?></td>
                    <td><?= $spt["jenis"]; ?></td>
                    <td><?= $spt["brand"]; ?></td>
                    <td><?= $spt["harga"]; ?></td>
                </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>