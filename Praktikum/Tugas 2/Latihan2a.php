<?php
// Yudha Permana
// 203040101
// Shift Kamis 08.00 - 09.00
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2a_203040101</title>
    <style>
        .tulisan {
            font-size: 28px;
            font-family: arial;
            color: #8c782d;
            font-style: italic;
            font-weight: bolder;
            padding-left: 10px;
            margin: 13px 0px;
        }

        .box {
            width: 615px;
            height: 55px;
            margin: 30px;
            border: 1px solid black;
            box-shadow: 0px 0px 15px 1px rgba(0,0,0,0.4);
            border-radius: 4px;
        }
    </style>
</head>

<body>

    <?php
    function gantiStyle($tulisan, $style1, $style2) {
        echo "<div class = '$style1'> 
            <h3 class =  '$style2'> $tulisan </h3>
        </div>";
    }
    ?>

    <?php
    echo gantiStyle("Selamat datang di praktikum PW", "box", "tulisan");
    ?>

</body>

</html>