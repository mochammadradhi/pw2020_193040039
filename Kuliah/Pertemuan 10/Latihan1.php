<?php
  $conn = mysqli_connect("localhost","root","","pw_193040039");

  $result = mysqli_query($conn,"SELECT * FROM mahasiswa");
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
  <?php while($row = mysqli_fetch_assoc($result)): ?>
  <tr>
    <td><?= $row['id'] ?></td>
    <td><img src="img/<?= $row['gambar']?>" alt="<?= $row['gambar']?>" style="width:150px;"></td>
    <td><?= $row['nrp']?></td>
    <td><?= $row['nama']?></td>
    <td><?= $row['email']?></td>
    <td><?= $row['jurusan']?></td>
    <td><a href="add.php">Add</a> | <a href="delete.php">Delete</a></td>
  </tr>
  <?php endwhile;?>
  </table>
</body>
</html>