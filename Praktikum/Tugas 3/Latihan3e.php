<?php
// Yudha Permana
// 203040101
// Shift Kamis 08.00 - 09.00
?>

<?php
    $sepatu = [
        [
            "gambar" => "sepatu1.png",
            "nama" => "PREDATOR 20.3",
            "jenis" => "Indoor",
            "brand" => "Adidas",
            "harga" => "Rp. 900.000",
        ],
        [
            "gambar" => "sepatu2.png",
            "nama" => "GOLETTO VII",
            "jenis" => "Indoor",
            "brand" => "Adidas",
            "harga" => "Rp. 600.000",
        ],
        [
            "gambar" => "sepatu3.png",
            "nama" => "GOLETTO VII",
            "jenis" => "Outdoor",
            "brand" => "Adidas",
            "harga" => "Rp. 500.000",
        ],
        [
            "gambar" => "sepatu4.png",
            "nama" => "COPA 20.3",
            "jenis" => "Outdoor",
            "brand" => "Adidas",
            "harga" => "Rp. 400.000",
        ],
        [
            "gambar" => "sepatu5.png",
            "nama" => "NIKE PHANTOM GT CLUB IC",
            "jenis" => "Indoor",
            "brand" => "Nike",
            "harga" => "Rp. 799.000",
        ],
        [
            "gambar" => "sepatu6.png",
            "nama" => "NIKE PHANTOM SCORPION ACADEMY IC",
            "jenis" => "Indoor",
            "brand" => "Nike",
            "harga" => "Rp. 1.379.000",
        ],
        [
            "gambar" => "sepatu7.png",
            "nama" => "NIKE MERCURIAL DREAM SPEED SUPERFLY 8 ACADEMY MG",
            "jenis" => "Outdoor",
            "brand" => "Nike",
            "harga" => "Rp. 1.429.000",
        ],
        [
            "gambar" => "sepatu8.png",
            "nama" => "CATALYST QUIVER FG",
            "jenis" => "Outdoor",
            "brand" => "Ortuseight",
            "harga" => "Rp. 499.000",
        ],
        [
            "gambar" => "sepatu9.png",
            "nama" => "SWERVO HYDRA ELITE IN-MIDNIGHT",
            "jenis" => "Indoor",
            "brand" => "Specs",
            "harga" => "Rp. 749.800",
        ],
        [
            "gambar" => "sepatu10.png",
            "nama" => "ACCELERATOR SATU ELITE IN-BLACK/SILVER ",
            "jenis" => "Indoor",
            "brand" => "Specs",
            "harga" => "Rp. 799.800",
        ],
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Latihan3e_203040101</title>
    <style>
        body {
            font-family: courier new, sans-serif;
        }
    </style>
</head>
<body>

    <table class="table table-bordered">
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
            <tr>
                <td style="text-align: center; font-weight: bold;"><?= $i ?></td>
                <td style="text-align: center;"><img src="image/<?= $spt["gambar"]; ?>"></td>
                <td><?= $spt["nama"]; ?></td>
                <td><?= $spt["jenis"]; ?></td>
                <td><?= $spt["brand"]; ?></td>
                <td><?= $spt["harga"]; ?></td>   
            </tr>
        <?php $i++; ?>
        <?php endforeach ?>
        </tbody>
    </table>

</body>
</html>

