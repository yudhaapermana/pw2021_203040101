<?php
session_start();
require 'functions.php';
if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}
// Login
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username' ");

  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);
    }
    if (hash('sha256', $row['id']) == $_SESSION['hash']) {
      header("Location: admin.php");
      die;
    }
    header("Location: ../index.php");
    die;
  }
  $error = true;
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
  <title>Login</title>
</head>

<body>
  <form action="" method="post">
    <?php if (isset($error)) : ?>
      <p style="color: red; font-style:italic; font-size: 12px;">Username atau Password salah</p>
    <?php endif; ?>
    <div class="mb-2">
      <label for="username" class="form-label">Username</label>
      <input type="text" class="form-control" name="username">
    </div>
    <div class="mb-2">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" name="password">
    </div>
    <div class="mb-2 form-check">
      <input type="checkbox" class="form-check-input" name="remember">
      <label class="form-check-label" for="remember">Remember me</label>
    </div>
    <button type="submit" class="btn btn-primary mt-2" name="submit">Login</button>
    <div class="registrasi mt-3">
      <p>Belum punya akun ? Registrasi <a href="registrasi.php">Disini</a></p>
    </div>
  </form>
</body>

</html>