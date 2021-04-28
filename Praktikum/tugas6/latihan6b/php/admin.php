<?php

require 'functions.php';

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
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    <title>Admin</title>
</head>

<body>
    <div class="container">
        <div class="add">
            <a href="tambah.php"><button class="btn btn-outline-dark my-2">Tambah Data</button></a>
        </div>
        <div class="logout">
            <a href="logout.php"><button class="btn btn-outline-dark">Logout</button></a>
        </div>
        <form action="" method="get">
            <input type="text" name="keyword" autofocus>
            <button class="btn btn-outline-primary" type="submit" name="cari">Cari!</button>
        </form>
        <table class="table table-bordered text-center my-3">
            <thead class="table-danger" style="font-size: 19px;">
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
                            <h1>Data tidak ditemukan</h1>
                        </td>
                    </tr>
                <?php else : ?>
                    <?php $i = 1; ?>
                    <?php foreach ($sepatu as $spt) : ?>
                        <tr style="font-size: 14px;">
                            <td style="font-weight: bold;"><?= $i ?></td>
                            <td class="align-middle">
                                <a href="ubah.php?id=<?= $spt['id'] ?>"><button type="button" class="btn btn-primary">Ubah</button></a>
                                <a href="hapus.php?id=<?= $spt['id'] ?>" onclick="return confirm('Yakin akan dihapus??')"><button type="button" class="btn btn-danger">Hapus</button></a>
                            </td>
                            <td><img src="../assets/img/<?= $spt["gambar"]; ?>" class="gambar"></td>
                            <td class="nama align-middle text-uppercase"><?= $spt["nama"]; ?></td>
                            <td class="align-middle text-capitalize"><?= $spt["jenis"]; ?></td>
                            <td class="align-middle text-capitalize"><?= $spt["brand"]; ?></td>
                            <td class="align-middle text-capitalize"><?= $spt["harga"]; ?></td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>

</html>