<?php 
	$sepatu = [
        [
            "gambar" => "sepatu1.png",
            "nama" => "PREDATOR 20.3",
            "jenis" => "Indoor",
            "brand" => "Adidas",
            "harga" => "Rp. 900.000",
        ],
        [
            "gambar" => "sepatu2.png",
            "nama" => "GOLETTO VII",
            "jenis" => "Indoor",
            "brand" => "Adidas",
            "harga" => "Rp. 600.000",
        ],
        [
            "gambar" => "sepatu3.png",
            "nama" => "GOLETTO VII",
            "jenis" => "Outdoor",
            "brand" => "Adidas",
            "harga" => "Rp. 500.000",
        ],
        [
            "gambar" => "sepatu4.png",
            "nama" => "COPA 20.3",
            "jenis" => "Outdoor",
            "brand" => "Adidas",
            "harga" => "Rp. 400.000",
        ],
        [
            "gambar" => "sepatu5.png",
            "nama" => "NIKE PHANTOM GT CLUB IC",
            "jenis" => "Indoor",
            "brand" => "Nike",
            "harga" => "Rp. 799.000",
        ],
    ]
?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Sepatu</title>
</head>
<body>
	<h1>Daftar Sepatu</h1>

	<?php foreach ($sepatu as $spt) : ?>
		<ul>
			<li>
				<img width="155px" src="img/<?= $spt["gambar"]; ?>">
			</li>
			<li>Nama : <?= $spt["nama"] ?></li>
			<li>Jenis : <?= $spt["jenis"] ?></li>
			<li>Brand : <?= $spt["brand"] ?></li>
			<li>Harga : <?= $spt["harga"] ?></li>
		</ul>
	<?php endforeach; ?>
</body>
</html>