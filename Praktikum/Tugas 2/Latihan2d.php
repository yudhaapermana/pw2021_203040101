<?php
// Yudha Permana
// 203040101
// Shift Kamis 08.00 - 09.00
?>

<?php
function hitungDeterminan($a, $b, $c, $d) {
    $determinan = (($a * $a) - ($b * $c));

    echo "<table style='border-left:2px solid black; border-right:2px solid black;' cellspacing='5' cellpadding='5'>
            <tr>
                <td>$a</td>
                <td>$b</td>
            </tr>
            <tr>
                <td>$c</td>
                <td>$d</td>
            </tr>
        </table>";

    echo "<p style='font-weight:bold;'> Determinan dari matriks tersebut adalah $determinan </p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2d_203040101</title>
    <style>
        .kotak {
            border: 2px solid black;
            padding: 15px 10px;
            width: 400px;
            height: 106px;
        }
    </style>
</head>
<body>
    <div class="kotak">
    <?php hitungDeterminan(1,2,3,4) ?>
    </div>

</body>
</html>
