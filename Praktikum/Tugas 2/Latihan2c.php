<?php
    function tumpukanBola($tumpukan) {
        for ($i = 1; $i <= $tumpukan; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "<div class = 'bola'>". $i ."</div>";
            }
            echo "<br>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2c_203040101</title>
    <style>
        .bola {
            border-radius: 100%;
            background-color: salmon;
            width: 34px;
            height: 34px;
            border: 1px solid black;
            line-height: 34px;
            text-align: center;
            display: inline-block;
            margin: 1px 1px;
        }

        .kotak {
            border: 2px solid black;
            padding: 5px;
            width: 210px;
        }
    </style>
</head>

<body>
    <div class="kotak">
        <?php echo tumpukanBola(5) ?>
    </div>
</body>

</html>