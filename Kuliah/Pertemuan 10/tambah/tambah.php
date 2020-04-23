<?php
require '../functions/functions.php';

if(isset($_POST['submit'])){
  if(tambah($_POST)>0){
    echo "<script>
          alert('Data berhasil ditambahkan!');
          document.location.href = '../latihan3.php';
          </script>";
  }else{
    echo "Data gagal ditambahkan";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
  <link rel="stylesheet" type="text/css" href="../Semantic UI/semantic.min.css">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
  <script src="../Semantic UI/dist/semantic.min.js"></script>
  
  <style>
    body{
      margin:30px;
    }
  </style>
</head>
<body>
<div class="ui internally celled grid">
<div class="row">
    <div class="three wide column">
<form action="" method="POST">
  <div class="ui form error ">

  <h3>Form Data Mahasiswa</h3>
  <div class="field">
    <label>Nama :</label>
    <input type="text" name="nama" autofocus required>
  </div>

  <div class="field">
    <label>NRP :</label>
    <input type="text" name="nrp" required>
  </div>

  <div class="field">
    <label>E-mail :</label>
    <input type="email" name="email" required>
  </div>

  <div class="field">
    <label>Jurusan :</label>
    <input type="text" name="jurusan" required>
  </div>

  <div class="field">
    <label>Gambar :</label>
    <input type="text" name="gambar" required>
  </div>

  <div class="input-btn"><input name="submit" class="ui submit button" type="submit" value="Submit"></div>
  </form>
  </div>
  <br>
  <a href="../Latihan3.php">Kembali ke Page Detail Mahasiswa</a>
  </div>

</div>
</div>
</body>
</html>