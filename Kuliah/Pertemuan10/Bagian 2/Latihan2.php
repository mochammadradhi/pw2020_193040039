<?php
  require("functions/functions.php");
  $mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h3>Daftar Mahasiswa</h3>
  <table border="1" cellpadding="10" cellspacing="5">
  <tr>
    <th>#</th>
    <th>Gambar</th>
    <th>NRP</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Jurusan</th>
    <th>Aksi</th>
  </tr>
  <?php foreach($mahasiswa as $mhs ): ?>
  <tr>
    <td><?= $mhs['id'] ?></td>
    <td><img src="img/<?= $mhs['gambar']?>" alt="<?= $mhs['gambar']?>" style="width:150px;"></td>
    <td><?= $mhs['nrp']?></td>
    <td><?= $mhs['nama']?></td>
    <td><?= $mhs['email']?></td>
    <td><?= $mhs['jurusan']?></td>
    <td><a href="add.php">Add</a> | <a href="delete.php">Delete</a></td>
  </tr>
  <?php endforeach;?>
  </table>
</body>
</html>