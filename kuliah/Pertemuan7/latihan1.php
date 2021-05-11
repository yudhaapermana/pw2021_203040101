<?php 
/* 
Yudha Permana
203040101
Pertemuan 7
*/

// Variabel Scope / lingkup variabel
// Variabel lokal untuk function itu sendiri
// $x = 10;
// function tampilX() {
//     global $x; // Variabel global
//     echo $x;
// }
// tampilX();

// SUPERGLOBALS
// variable global milik PHP
// meruapakan ARRAY Associative

// $_GET
$mahasiswa = [
    [
    	"nrp" => "205068329",
        "nama" => "Batman",
        "email" => "batman1933@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "batman.png",
    ],
    [
    	"nrp" => "203010120",
        "nama" => "Superman",
        "email" => "superman3393@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "superman.png",
    ]
];
?>

<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>">
                    <?= $mhs["nama"]; ?>    	
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
















