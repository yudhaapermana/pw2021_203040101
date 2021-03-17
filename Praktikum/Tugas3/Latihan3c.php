<?php
// Yudha Permana
// 203040101
// Shift Kamis 08.00 - 09.00
?>

<?php
    $pemain_club = [
        ["nama" => "Cristiano Ronaldo", "club" => "Juventus"],
        ["nama" => "Lionel Messi", "club" => "Barcelona"],
        ["nama" => "Luca Modric", "club" => "Real Madrid"],
        ["nama" => "Mohammad Salah", "club" => "Liverpool"],
        ["nama" => "Neymar Jr", "club" => "Paris Saint Germain"],
        ["nama" => "Sadio Mane", "club" => "Liverpool"],
        ["nama" => "Zlatan Ibrahimovic", "club" => "Ac Milan"]
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3c_203040101</title>
    <style>
        body {
            font-family: calibri, sans-serif;
        }
        .kotak {
            border: 1px solid black;
            width: 480px;
            height: 265px;
            margin: 25px;
        }
    </style>
</head>
<body>

    <div class="kotak">
        <h3 style= "padding-left: 10px;">Daftar pemain bola terkenal dan clubnya</h3>
        <table cellspacing="0" cellpadding="3" style="padding-left: 8px;">
            <?php foreach($pemain_club as $pmn) : ?>
                <tr>
                    <td style="font-weight: bold;"><?= $pmn["nama"]; ?></td>
                    <td>: <?= $pmn["club"]; ?></td>
                </tr>
            <?php endforeach; ?>
        </table> 
    </div>

</body>
</html>