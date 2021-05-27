<?php

require '../php/functions.php';
$sepatu = cari($_GET['keyword']);

?>

<div class="col-lg-12">
  <h3 class="text-center">DAFTAR SEPATU</h3>
</div>
<?php if (empty($sepatu)) : ?>
  <p class="text-center" style="font-size: 25px; font-style:italic;">Data tidak ditemukan</p>
<?php endif; ?>
<div class="row mx-auto py-3">
  <?php foreach ($sepatu as $spt) : ?>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
      <div class="card rounded-1 my-2" style="width: auto; height: auto;">
        <div class="card-body" style="width: auto;">
          <a href=" php/detail.php?id=<?= $spt['id'] ?>">
            <img src="assets/img/sepatu/<?= $spt["gambar"]; ?>" class="gambar mb-1 card-img-top">
          </a>
          <hr>
          <a href=" php/detail.php?id=<?= $spt['id'] ?>" style="text-decoration: none; color: black;">
            <h5 class="card-title text-uppercase mt-2"><?= $spt["nama"]; ?></h5>
          </a>
          <p class="harga text-capitalize pb-0">Rp. <?= $spt["harga"]; ?></p>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>