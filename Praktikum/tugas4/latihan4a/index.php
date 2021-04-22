<?php
// Yudha Permana
// 203040101
// Shift Kamis 08.00 - 09.00
?>

<?php
    $conn = mysqli_connect("localhost", "root", "");

    mysqli_select_db($conn, "pw_tubes_203040101");

    $result = mysqli_query($conn, "SELECT * FROM sepatu");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Latihan4a_203040101</title>
    <style>
        .container {
            font-family: courier new, sans-serif;
        }

    </style>
</head>
<body>
    <div class="container">
        <table class="table table-bordered text-center my-4">
            <thead class="table-danger" style="font-size: 20px;">
                <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">PICTURE</th>
                    <th scope="col">NAME</th>
                    <th scope="col">TYPE</th>
                    <th scope="col">BRAND</th>
                    <th scope="col">PRICE</th>
                </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
            <?php while($row = mysqli_fetch_assoc($result)) : ?>
                <tr style="font-size: 14px;">
                    <td style= "font-weight: bold;"><?= $i ?></td>
                    <td><img src="assets/img/<?= $row["gambar"]; ?>"></td>
                    <td style="font-size: 18px; font-weight: bold; text-align: left;"><?= $row["nama"]; ?></td>
                    <td><?= $row["jenis"]; ?></td>
                    <td><?= $row["brand"]; ?></td>
                    <td><?= $row["harga"]; ?></td> 
                </tr>
            <?php $i++; ?>
            <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>