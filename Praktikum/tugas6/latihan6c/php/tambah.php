<?php
session_start();
if (!isset($_SESSION["username"])) {
	header("Location: login.php");
	exit;
}
require 'functions.php';

if (isset($_POST['tambah'])) {
	if (tambah($_POST) > 0) {
		echo "<script>alert('Data Berhasil ditambahkan!');
		document.location.href = 'admin.php';
		</script>";
	} else {
		echo "<script>alert('Data Gagal ditambahkan!');
		document.location.href = 'admin.php';
		</script>";
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
	<title>Tambah Data</title>
</head>

<body>
	<div class="container">
		<form action="" method="post" class="form-tambah">
			<h4 class="text-center">Form Tambah Data Sepatu</h4>
			<div class="isi-tambah">
				<div class="row mb-3">
					<label for="gambar" class="col-sm-3 col-form-label">Gambar</label>
					<div class="col">
						<input type="text" class="form-control" name="gambar" id="gambar" required>
					</div>
				</div>
				<div class="row mb-3">
					<label for="nama" class="col-sm-3 col-form-label">Nama</label>
					<div class="col">
						<input type="text" name="nama" class="form-control" id="nama" required>
					</div>
				</div>
				<div class="row mb-3">
					<label class="col" for="jenis">Jenis</label>
					<div class="col-sm-9">
						<select name="jenis" id="jenis" required>
							<option value="Indoor">Indoor</option>
							<option value="Outdoor">Outdoor</option>
						</select>
					</div>
				</div>
				<div class="row mb-3">
					<label for="brand" class="col-sm-3 col-form-label">Merek</label>
					<div class="col">
						<input type="text" class="form-control" name="brand" id="brand" required>
					</div>
				</div>
				<div class="row mb-3">
					<label for="harga" class="col-sm-3 col-form-label">Harga</label>
					<div class="col">
						<input type="text" placeholder="Rp.100.000" class="form-control" name="harga" id="harga" required>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<button class=" btn btn-outline-dark" type="submit" name="tambah">Tambah Data!</button>
					<button class="btn btn-outline-info" type="submit">
						<a href="../index.php">Kembali</a>
					</button>
				</div>
			</div>
		</form>
	</div>
</body>

</html>