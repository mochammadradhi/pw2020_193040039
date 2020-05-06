<?php
session_start();
if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}
$error;
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(connect(), "SELECT * FROM user WHERE username = '$username' && password = '$password'");

  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if ($password == $row['password']) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = $row['id'];
    }
    if ($row['id'] == $_SESSION['hash']) {
      header("Location: php/admin.php");
      die;
    }
    header("Location: index.php");
    die;
  }
  $error = true;
}
