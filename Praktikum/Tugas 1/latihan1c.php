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
    <title>Latihan1c_203040101</title>
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
            margin: 3px 4px;
        }
    </style>
</head>

<body>

    <?php for ($i = 1; $i <= 3; $i++) : ?>
        <?php for ($j = 1; $j <= $i; $j++) : ?>
            <div class="bola"><?= $i; ?></div>
        <?php endfor; ?>
        <br>
    <?php endfor; ?>

</body>

</html>