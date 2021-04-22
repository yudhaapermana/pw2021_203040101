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
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Ubah Data</title>
</head>
<body>
	<div class="container">
		<h3>Form Ubah Data Sepatu</h3>
		<form action="" method="post">
			<input type="hidden" name="id" id="id" value="<?= $spt['id']; ?>">
			<ul>
				<li>
					<label for="gambar">Gambar :</label><br>
					<input type="text" name="gambar" id="gambar" required value="<?= $spt['gambar']; ?>"><br>
				</li>
				<li>
					<label for="nama">Nama Sepatu :</label><br>
					<input type="text" name="nama" id="nama" required value="<?= $spt['nama']; ?>"><br>
				</li>
				<li>
					<label for="jenis">Jenis Sepatu :</label><br>
					<select name="jenis" id="jenis" required value="<?= $spt['jenis']; ?>">
						<option value="Indoor">Indoor</option>
						<option value="Outdoor">Outdoor</option>
					</select>
				</li>
				<li>
					<label for="brand">Merk Sepatu :</label><br>
					<input type="text" name="brand" id="brand" required value="<?= $spt['brand']; ?>"><br>
				</li>
				<li>
					<label for="harga">Harga Sepatu :</label><br>
					<input type="text" name="harga" id="harga" required value="<?= $spt['harga']; ?>">
				</li>
				<br>
				<button type="submit" name="ubah">Ubah Data!</button>
				<button type="submit">
					<a href="index.php">Kembali</a>
				</button>
			</ul>
		</form>
	</div>
</body>
</html>

