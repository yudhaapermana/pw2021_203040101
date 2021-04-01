<?php
// Yudha Permana
// 203040101
// Shift Kamis 08.00 - 09.00
?>

<?php
    $pemain_bola = [
        [
            "nomer" => "1",
            "nama" => "Cristiano Ronaldo",
            "club" => "Juventus",
            "main"=>"100",
            "gol"=>"76",
            "assist"=>"30"
        ],
        [
            "nomer" => "2",
            "nama" => "Lionel Messi",
            "club" => "Barcelona",
            "main"=>"120",
            "gol"=>"80",
            "assist"=>"12"
        ],
        [
            "nomer" => "3",
            "nama" => "Luca Modric",
            "club" => "Real Madrid",
            "main"=>"87",
            "gol"=>"12",
            "assist"=>"48"
        ],
        [
            "nomer" => "4",
            "nama" => "Mohammad Salah",
            "club" => "Liverpool",
            "main"=>"90",
            "gol"=>"103",
            "assist"=>"8"
        ],
        [
            "nomer" => "5",
            "nama" => "Neymar Jr",
            "club" => "Paris Saint Germain",
            "main"=>"109",
            "gol"=>"56",
            "assist"=>"15"
        ],
        [
            "nomer" => "6",
            "nama" => "Sadio Mane",
            "club" => "Liverpool",
            "main"=>"63",
            "gol"=>"30",
            "assist"=>"70"
        ],
        [
            "nomer" => "7",
            "nama" => "Zlatan Ibrahimovic",
            "club" => "Ac Milan",
            "main"=>"100",
            "gol"=>"10",
            "assist"=>"12"
        ]
    ];
$total_main = 0;
$total_gol = 0;
$total_assist = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3d_203040101</title>
    <style>
        body {
            font-family: calibri, sans-serif;
        }
    </style>
</head>
<body>
    
    <div class="kotak">
        <table border="1" cellspacing="0" cellpadding="4">
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>CLUB</th>
                <th>MAIN</th>
                <th>GOL</th>
                <th>ASSIST</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach($pemain_bola as $pmn) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $pmn["nama"] ?></?>
                    <td><?= $pmn["club"] ?></td>
                    <td><?= $pmn["main"] ?></td>
                    <td><?= $pmn["gol"] ?></td>
                    <td><?= $pmn["assist"] ?></td>
                </tr>
                <?php $i++;
                $total_main += $pmn["main"];
                $total_gol += $pmn["gol"];
                $total_assist += $pmn["assist"];
                ?>
            <?php endforeach; ?>
            <tr>
                <td>#</td>
                <td colspan="2" style="font-weight: bold; text-align:center;">Jumlah</td>
                <td><?= $total_main  ?></td>
                <td><?= $total_gol  ?></td>
                <td><?= $total_assist  ?></td>
            </tr>
        </table>
    </div>

</body>
</html>