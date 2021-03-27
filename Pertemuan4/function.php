<?php
/* 
Yudha Permana
203040101
Pertemuan 4
*/

function salam($waktu = "Datang", $nama = "Yudha") {
    return "Selamat $waktu, $nama!";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Siang", "Yudha Permana"); ?></h1>
</body>
</html>