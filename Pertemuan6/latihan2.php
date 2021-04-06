<?php
// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
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

// echo $mahasiswa[1]["email"][1];

?>


<!DOCTYPE html>
<html>

<head>
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama: <?= $mhs["nama"]; ?></li>
            <li>NRP: <?= $mhs["nrp"]; ?></li>
            <li>Jurusan: <?= $mhs["jurusan"]; ?></li>
            <li>Email: <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>