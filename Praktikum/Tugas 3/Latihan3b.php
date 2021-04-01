<?php
// Yudha Permana
// 203040101
// Shift Kamis 08.00 - 09.00
?>

<?php
    $pemain_bola = ["Mohammad Salah", "Cristiano Ronaldo", "Lionel Messi", "Zlatan Ibrahimovic", "Neymar Jr"]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3b_203040101</title>
    <style>
        body {
            font-family: calibri, sans-serif;
        }
        .kotak {
            border: 1px solid black;
            width: 480px;
            height: 408px;
            margin: 25px;
        }
        h3 {
            margin-left: 13px;
        }
        ol {
            margin-left: 24px;
        }
        li {
            padding-bottom: 3px;
        }
    </style>
</head>
<body>

    <div class="kotak">
        <h3>Daftar pemain bola terkenal</h3>
        <ol type="1">
            <?php foreach($pemain_bola as $pmn) : ?>
                <li><?= $pmn; ?></li>
            <?php endforeach; ?>
        </ol>

        <h3>Daftar pemain bola terkenal baru</h3>
        <ol type="1">
            <?php
                $pemain_bola[] = "Luca Modric";
                $pemain_bola[] = "Sadio Mane";
                sort($pemain_bola);
                foreach($pemain_bola as $pmn) {
                    echo "<li>$pmn</li>";
                }
            ?>
        </ol>
    </div>

</body>
</html>