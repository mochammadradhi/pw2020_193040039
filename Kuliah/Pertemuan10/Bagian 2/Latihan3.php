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
  <h2>Daftar Mahasiswa</h2>
  <table border="1" cellpadding="10" cellspacing="5">
  <tr>
    <th>#</th>
    <th>Gambar</th>
    <th>Nama</th>
    <th>Aksi</th>
  </tr>
  <?php foreach($mahasiswa as $mhs ): ?>
  <tr>
    <td><?= $mhs['id'] ?></td>
    <td><img src="img/<?= $mhs['gambar']?>" alt="<?= $mhs['gambar']?>" style="width:150px;"></td>
    <td><?= $mhs['nama']?></td>
    <td><a href="detail/detail.php?id=<?= $mhs['id'] ?>">Lihat detail</a></td>
  </tr>
  <?php endforeach;?>
  </table>
</body>
</html>