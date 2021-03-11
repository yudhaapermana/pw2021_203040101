<?php
$jawabanIsset = "Isset adalah = Fungsi untuk memeriksa apakah suatu variabel sudah diset atau belum. Jika variabel sudah diset maka variabel akan mengembalikan nilai true, dan sebaliknya akan bernilai false. <br>";
$jawabanEmpty = "Empty adalah = Fungsi untuk untuk memeriksa apakah sebuah variabel telah diisi atau tidak. Jika sebuah variabel telah diisi akan menghasilkan nilai false, dan bernilai true jika variabel tersebut belum diisi.";

$GLOBALS["isset"] = $jawabanIsset;
$GLOBALS["empty"] = $jawabanEmpty;

function soal($style) {
    echo "<div class = $style> 
        <p>" . $GLOBALS['isset'] . "</p>
        <p>" . $GLOBALS['empty'] . "</p>
        </div>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2b_203040101</title>
    <style>
        .style {
            height: 80px;
            border: 1px solid black;
            padding-top: 4px;
            padding-left: 10px;
            font-size: 14px;
            font-family: arial;
        }
    </style>
</head>

<body>
    <?php
    echo soal('style');
    ?>
</body>

</html>