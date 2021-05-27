<?php

require '../php/functions.php';
$sepatu = cari($_GET['keyword']);

?>

<a href="tambah.php"><button class="btn btn-light border border-dark" style="font-weight: bold;  font-family: Helvetica, sans-serif;">Tambah Data</button></a>
<table class="table table-bordered text-center my-3">
  <thead class="table-danger" style="font-size: 16px;  font-family: 'Roboto Mono', monospace;">
    <tr class="text-uppercase">
      <th scope="col">No.</th>
      <th scope="col" style="width: 170px">Opsi</th>
      <th scope="col">Gambar</th>
      <th scope="col">Nama</th>
      <th scope="col">jenis</th>
      <th scope="col">merek</th>
      <th scope="col">harga</th>
    </tr>
  </thead>
  <tbody>
    <?php if (empty($sepatu)) : ?>
      <tr>
        <td colspan="7">
          <p class="text-center my-auto" style="font-size: 25px; font-style:italic;">Data tidak ditemukan</p>
        </td>
      </tr>
    <?php endif; ?>
    <?php $i = 1; ?>
    <?php foreach ($sepatu as $spt) : ?>
      <tr style="font-size: 14px;">
        <td style="font-weight: bold;"><?= $i ?></td>
        <td class="align-middle">
          <a href="ubah.php?id=<?= $spt['id'] ?>"><button type="button" class="btn btn-primary">Ubah</button></a>
          <a href="hapus.php?id=<?= $spt['id'] ?>" onclick="return confirm('Yakin akan dihapus??')"><button type="button" class="btn btn-danger">Hapus</button></a>
        </td>
        <td><img src="../assets/img/sepatu/<?= $spt["gambar"]; ?>" class="gambar"></td>
        <td class="nama align-middle text-uppercase"><?= $spt["nama"]; ?></td>
        <td class="align-middle text-capitalize"><?= $spt["jenis"]; ?></td>
        <td class="align-middle text-capitalize"><?= $spt["brand"]; ?></td>
        <td class="align-middle text-capitalize"><?= $spt["harga"]; ?></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
  </tbody>
</table>