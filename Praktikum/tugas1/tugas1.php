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
    <title>Tugas1_203040101</title>
    <style>
        .kotak {
            width: 25px;
            height: 25px;
            border: 1px solid black;
            display: inline-block;
        }

        .salmon {
            background-color: salmon;
        }

        .biru {
            background-color: lightblue;
        }
    </style>
</head>

<body>
    <?php for ($baris = 1; $baris <= 6; $baris++) :
        for ($kolom = 1; $kolom <= 6; $kolom++) :

            if ($baris % 2 == !0) :
                if ($kolom % 2 == !0) : ?>
                    <div class="kotak biru"></div>
                <?php else : ?>
                    <div class="kotak salmon"></div>
                <?php endif; ?>

                <?php else :
                if ($kolom % 2 == !0) : ?>
                    <div class="kotak salmon"></div>
                <?php else : ?>
                    <div class="kotak biru"></div>
                <?php endif; ?>
            <?php endif; ?>

        <?php endfor; ?>
        <br>
    <?php endfor; ?>
</body>

</html>