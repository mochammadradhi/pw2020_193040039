<?php
  require("functions/functions.php");
  $mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Data Mahasiswa</title>
  <link rel="stylesheet" type="text/css" href="Semantic UI/semantic.min.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>
    <script src="Semantic UI/dist/semantic.min.js"></script>

    <style>
      body{
        padding:25px;
      }
    </style>
</head>
<body>
<h2>Daftar Mahasiswa</h2>
<table class="ui compact celled definition table center aligned">
  <thead class="full-width">
    <tr>
    <th>#</th>
    <th>Gambar</th>
    <th>NRP</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Jurusan</th>
    <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($mahasiswa as $mhs): ?>
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
  </tbody>
</table>
</body>
</html>