<?php
require 'functions.php';
$id = $_GET['id'];
$spt = query("SELECT * FROM sepatu WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
	if (ubah($_POST) > 0) {
		echo "<script>alert('Data Berhasil diubah!');
		document.location.href = 'admin.php';
		</script>";
	} else {
		echo "<script>alert('Data Gagal diubah!');
		document.location.href = 'admin.php';
		</script>";
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>Ubah Data</title>
</head>

<body>
	<div class="container">
		<form action="" method="post" class="form-tambah">
			<input type="hidden" name="id" id="id" value="<?= $spt['id']; ?>">
			<h4 class="text-center">Form Ubah Data Sepatu</h4>
			<div class="isi-tambah">
				<div class="row mb-3">
					<label for="gambar" class="col-sm-3 col-form-label">Gambar</label>
					<div class="col">
						<input type="text" class="form-control" name="gambar" id="gambar" required value="<?= $spt['gambar']; ?>">
					</div>
				</div>
				<div class="row mb-3">
					<label for="nama" class="col-sm-3 col-form-label">Nama</label>
					<div class="col">
						<input type="text" name="nama" class="form-control" id="nama" required value="<?= $spt['nama']; ?>">
					</div>
				</div>
				<div class="row mb-3">
					<label class="col" for="jenis">Jenis</label>
					<div class="col-sm-9">
						<select name="jenis" id="jenis" required value="<?= $spt['jenis']; ?>">
							<option value="Indoor">Indoor</option>
							<option value="Outdoor">Outdoor</option>
						</select>
					</div>
				</div>
				<div class="row mb-3">
					<label for="brand" class="col-sm-3 col-form-label">Merek</label>
					<div class="col">
						<input type="text" class="form-control" name="brand" id="brand" required value="<?= $spt['brand']; ?>">
					</div>
				</div>
				<div class="row mb-3">
					<label for="harga" class="col-sm-3 col-form-label">Harga</label>
					<div class="col">
						<input type="text" placeholder="Rp.100.000" class="form-control" name="harga" id="harga" required value="<?= $spt['harga']; ?>">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<button class=" btn btn-outline-dark" type="submit" name="ubah">Ubah Data!</button>
					<button class="btn btn-outline-info" type="submit">
						<a href="../index.php">Kembali</a>
					</button>
				</div>
			</div>
		</form>
	</div>
</body>

</html>