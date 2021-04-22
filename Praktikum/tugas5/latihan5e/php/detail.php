<?php 
	
	if (!isset($_GET['id'])) {
		header("location: ../index.php");
		exit;
	}

	require 'functions.php';

	$id = $_GET['id'];

	$sepatu = query("SELECT * FROM sepatu WHERE id = $id")[0];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
 	<title>Detail</title>
 	<style>
 		.keterangan {
 			font-family: courier new, sans-serif;
 			font-size: 20px;
 			margin: 45px 0;
 		}
 		.keterangan .nama {
 			font-size: 22px;
 			font-weight: bold;
 		}
 		.detail {
 			border:3px solid black;
 			border-radius: 5px;
 		}
 		.tombol {
 			border:1px solid black;
 			border-radius: 3px;
 		}
 		.tombol:hover {
 			font-size: 18px;
 		}
 	</style>
 </head>
 <body>
 	<div class="container">
 		<div class="detail row justify-content-around my-4">
	 		<div class="col-4 my-4">
	 			<img src="../assets/img/<?= $sepatu["gambar"]; ?>" alt="">
	 		</div>
	 		<div class=" keterangan col-4">
	 			<p class="nama"><?= $sepatu["nama"]; ?></p>
	 			<p><?= $sepatu["jenis"]; ?></p>
	 			<p><?= $sepatu["brand"]; ?></p>
	 			<p><?= $sepatu["harga"]; ?></p>
	 		</div>
 		</div>
 		<button class="tombol"><a href="../index.php">Kembali</a></button>
 	</div>
 </body>
 </html>