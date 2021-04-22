<?php 

require 'functions.php';

$sepatu = query("SELECT * FROM sepatu");

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>Admin</title>
</head>
<body>
	<div class="container">
        <table class="table table-bordered text-center my-4">
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
            <?php $i = 1; ?>
            <?php foreach ($sepatu as $spt) : ?>
                <tr style="font-size: 14px;" >
                    <td style="font-weight: bold;"><?= $i ?></td>
                    <td class="align-middle">
                    	<a href=""><button type="button" class="btn btn-outline-primary">Ubah</button></a>
                    	<a href=""><button type="button" class="btn btn-outline-danger">Hapus</button></a>
                    </td>
                    <td><img src="../assets/img/<?= $spt["gambar"]; ?>" class="gambar"></td>
                    <td class="nama align-middle text-uppercase"><?= $spt["nama"]; ?></td>
                    <td class="align-middle"><?= $spt["jenis"]; ?></td>
                    <td class="align-middle"><?= $spt["brand"]; ?></td>
                    <td class="align-middle"><?= $spt["harga"]; ?></td>
                </tr>
            	<?php $i++; ?>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>