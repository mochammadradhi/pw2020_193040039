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
  $cek_user = mysqli_query(connect(), "SELECT * FROM user WHERE username = '$username'");
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);
    }

    if (hash('sha256', $row['id']) == $_SESSION['hash'] && ($row['priority'] == 1 || $row['priority'] == 2)) {
      header("Location: php/admin.php");
      die;
    } else if (hash('sha256', $row['id']) == $_SESSION['hash'] && $row['priority'] == 4) {
      header("Location: php/user_page.php");
      die;
    } else {
      header("Location: index.php");
      die;
    }
  }
  $error = true;
}
