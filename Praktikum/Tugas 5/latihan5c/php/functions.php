<?php 

function koneksi()
{
	$conn = mysqli_connect("localhost", "root", "");
	mysqli_select_db($conn, "pw_tubes_203040101");

	return $conn;
}

function query($sql)
{
	$conn = koneksi();
	$result = mysqli_query($conn, "$sql");
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data) 
{
	$conn = koneksi();

	$gambar = htmlspecialchars($data['gambar']);
	$nama = htmlspecialchars($data['nama']);
	$jenis = htmlspecialchars($data['jenis']);
	$brand = htmlspecialchars($data['brand']);
	$harga = htmlspecialchars($data['harga']);

	$query = "INSERT INTO sepatu
				VALUES ('', 'gambar', 'nama', 'jenis', 'brand', 'harga')";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus($id)
{
	$conn = koneksi();
	mysqli_query($conn, "DELETE FROM sepatu WHERE id = $id");
	return mysqli_affected_rows($conn);
}

?>
