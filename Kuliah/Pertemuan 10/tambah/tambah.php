<?php
require '../functions/functions.php';

if(isset($_POST['submit'])){
  if(tambah($_POST)>0){
    tambah($_POST);
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
</head>
<body>
  <h2>Form Tambah Data Mahasiswa</h2>
  <form action="" method="POST">
  <table>
    <tr>
      <td><label for="nama">Nama :</label></td>
      <td><input type="text" name="nama" autofocus></td>
    </tr>
    <tr>
      <td><label for="nrp">NRP  :</label></td>
      <td><input type="text" name="nrp"></td>
    </tr>
    <tr>
      <td><label for="email">E-mail :</label></td>
      <td><input type="text" name="email"></td>
    </tr>
    <tr>
      <td><label for="jurusan">Jurusan :</label></td>
      <td><input type="text" name="jurusan"></td>
    </tr>
    <tr>
      <td><label for="gambar">Gambar :</label></td>
      <td><input type="text" name="gambar"></td>
    </tr>
    <tr>
      <td><input type="submit" name="submit" value="Submit"></td>
    </tr>
  </table>
  </form>
</body>
</html>