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
</head>
<body>
  <h2>Detail Mahasiswa</h2>
  <ul>
    <li><img src="../img/<?= $mahasiswa['gambar'] ?>" alt=""></li>
    <li><?= $mahasiswa['nrp'] ?></li>
    <li><?= $mahasiswa['nama'] ?></li>
    <li><?= $mahasiswa['email'] ?></li>
    <li><?= $mahasiswa['jurusan'] ?></li>
    <li><a href="change.php">Change</a> | <a href="delete.php">Delete</a></li>
    <li><a href="../Latihan3.php">Kembali ke daftar mahasiswa</a></li>
  </ul>
</body>
</html>