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
				VALUES ('', '$gambar', '$nama', '$jenis', '$brand', '$harga')";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus($id)
{
	$conn = koneksi();
	mysqli_query($conn, "DELETE FROM sepatu WHERE id = $id");
	return mysqli_affected_rows($conn);
}

function ubah($data)
{
	$conn = koneksi();
	$id = htmlspecialchars($data['id']);
	$gambar = htmlspecialchars($data['gambar']);
	$nama = htmlspecialchars($data['nama']);
	$jenis = htmlspecialchars($data['jenis']);
	$brand = htmlspecialchars($data['brand']);
	$harga = htmlspecialchars($data['harga']);

	$query = "UPDATE sepatu SET gambar = '$gambar', nama = '$nama', jenis = '$jenis', brand = '$brand', harga = '$harga' WHERE id = '$id' ";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function registrasi($data)
{
	$conn = koneksi();
	$username = strtolower(stripcslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);

	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
	if (mysqli_fetch_assoc($result)) {
		echo "<script>
			alert('username sudah digunakan');
		</script>";
		return false;
	}

	$password = password_hash($password, PASSWORD_DEFAULT);

	$query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
	mysqli_query($conn, $query_tambah);

	return mysqli_affected_rows($conn);
}
