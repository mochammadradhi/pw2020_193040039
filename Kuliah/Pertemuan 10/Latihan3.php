<?php
  require("functions/functions.php");
  $mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
  <link rel="stylesheet" type="text/css" href="Semantic UI/semantic.min.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>
    <script src="Semantic UI/dist/semantic.min.js"></script>

    <style>
      body{
        margin:15px;
      }
    </style>
</head>
<body>
<h2>Daftar Mahasiswa</h2>
<table class="ui very basic collapsing celled table">
  <thead>
  <tr>
      <th></th>
      <th colspan="6">
        <a href="tambah/tambah.php">
        <div class="ui right floated small primary labeled icon button">
          <i class="user icon"></i> Tambah Data Mahasiswa
        </div>
      </th>
    </a>
    </tr>
  </thead>
  <tbody>
  <tr>
    <th class="center aligned">#</th>
    <th class="center aligned">Mahasiswa</th>
    <th class="center aligned">Aksi</th>
  </tr>
  <?php foreach($mahasiswa as $mhs ): ?>
  <tr>
      <td class="center aligned"><?= $mhs['id'] ?></td>
      <td>
        <h4 class="ui image header">
          <img src="img/<?= $mhs['gambar']?>" class="ui mini rounded image">
          <div class="content">
            <?= $mhs['nama']?>
            <div class="sub header"><?= $mhs['jurusan']?>
          </div>
        </div>
      </h4></td>
      <td>
      <a href="detail/detail.php?id=<?= $mhs['id'] ?>">Lihat detail</a>
      </td>
    </tr>
  <?php endforeach;?>

  </tbody>
</table>
</body>
</html>