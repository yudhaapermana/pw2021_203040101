<?php
$mahasiswa = [
    ["Yudha Permana", "450302857", "Teknik Informatika", "pyudha0902@gmail.com"],
    ["Dadang Sari", "827365019", "Teknik Informatika", "dasar345@gmaill.com"],
    ["Asep Mikel", "867401837", "Teknik Industri", "asepmik22@gmaill.com"]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar Mahasiswa</title>
</head>

<body>

    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs[0]; ?></li>
            <li>NRP : <?= $mhs[1]; ?></li>
            <li>Jurusan : <?= $mhs[2]; ?></li>
            <li>Email : <?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>
    
</body>

</html>