<?php
if(!isset($_GET['id'])){
  header("location: Latihan3.php");
  exit;
}
  require '../functions/functions.php';
  $id = $_GET['id'];
  $mahasiswa = query("SELECT * FROM mahasiswa WHERE id = $id");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa Page</title>
  <link rel="stylesheet" type="text/css" href="../Semantic UI/semantic.min.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>
    <script src="../Semantic UI/dist/semantic.min.js"></script>
    <style>
      body{
      margin:20px;
      }
    </style>
</head>
<body>
<h2>Detail Mahasiswa</h2>
<div class="ui link cards">
  <div class="card">
    <div class="image">
    <img src="../img/<?= $mahasiswa['gambar'] ?>">
    </div>
    <div class="content">
      <div class="header"><h2><?= $mahasiswa['nrp'] ?></h2></div>
      <div class="meta">
        <h3><?= $mahasiswa['nama'] ?></h3>
      </div>
      <div class="meta">
        <h5><?= $mahasiswa['email'] ?></h5>
      </div>
      <div class="meta">
        <h5><?= $mahasiswa['jurusan'] ?></h5>
      </div>
    </div>
    <div class="extra content">
      <span class="right floated">
      <a href="delete.php">Delete</a>
      </span>
      <span>
      <a href="change.php">Change</a>
      </span>
      <br>
      <span class="center floated">
    <a href="../Latihan3.php">Kembali ke daftar mahasiswa</a>
    </span>
    </div>
</div>
</body>
</html>