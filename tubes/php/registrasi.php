<?php
require 'functions.php';

if (isset($_POST["register"])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
    alert('Registrasi Berhasil'); document.location.href = 'login.php'; 
    </script>";
  } else {
    echo "<script>
    alert('Registrasi Gagal');
    </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/stylelogin.css">
  <title>Registrasi</title>
</head>

<body>
  <form action="" method="POST" style="margin-top: 190px;">
    <div class="mb-2">
      <label for="username" class="form-label">Username</label>
      <input type="text" class="form-control" name="username">
    </div>
    <div class="mb-2">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" name="password">
    </div>
    <button type="submit" class="btn btn-primary mt-3" name="register" style="width: 100%; display:block;">Register</button>
    <a href="login.php"><button class="btn btn-sm btn-info mt-3" style="font-size: 12px;" type="button">Kembali</button></a>
  </form>
</body>

</html>