<?php 
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
	<link rel="stylesheet" type="text/css" href="style.css">	
	<title>Tambah Data</title>
</head>
<body>
	<div class="container">
		<h3>Form Tambah Data Sepatu</h3>
		<form action="" method="post">
			<ul>
				<li>
					<label for="gambar">Gambar :</label><br>
					<input type="text" name="gambar" id="gambar" required><br>
				</li>
				<li>
					<label for="nama">Nama Sepatu :</label><br>
					<input type="text" name="nama" id="nama" required><br>
				</li>
				<li>
					<label for="jenis">Jenis Sepatu :</label><br>
					<select name="jenis" id="jenis" required>
						<option value="Indoor">Indoor</option>
						<option value="Outdoor">Outdoor</option>
					</select>
				</li>
				<li>
					<label for="brand">Merk Sepatu :</label><br>
					<input type="text" name="brand" id="brand" required><br>
				</li>
				<li>
					<label for="harga">Harga Sepatu :</label><br>
					<input type="text" placeholder="Rp.100.000" name="harga" id="harga" required>
				</li>
				<br>
				<button type="submit" name="tambah">Tambah Data!</button>
				<button type="submit">
					<a href="../index.php">Kembali</a>
				</button>
			</ul>
		</form>
	</div>
</body>
</html>