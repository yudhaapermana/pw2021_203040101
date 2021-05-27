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
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../css/styledetail.css">
	<title>Detail</title>
	<style>

	</style>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 ">
				<div class="card my-4 border-1">
					<div class="card-body">
						<div class="row justify-content-around">
							<div class="col-lg-7 col-md-7 col-sm-12" style="width: auto;">
								<div class="foto text-center m-auto">
									<img src="../assets/img/sepatu/<?= $sepatu["gambar"]; ?>" class="img-fluid">
								</div>
							</div>
							<div class="col-lg-4 col-md-5 col-sm-12 col-12 my-auto" style="width: auto;">
								<div class="detail mt-3" style="width: auto;">
									<p class="nama text-uppercase mb-2" style="width: fit-content;"><?= $sepatu["nama"]; ?></p>
									<hr class="mt-1">
									<div class="detail2">
										<p class="text-capitalize"><?= $sepatu["jenis"]; ?></p>
										<p class="text-capitalize"><?= $sepatu["brand"]; ?></p>
										<p class="text-capitalize">Rp. <?= $sepatu["harga"]; ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<a href="../index.php"> <button class="btn btn-primary btn-sm">Kembali</button></a>
	</div>
</body>

</html>