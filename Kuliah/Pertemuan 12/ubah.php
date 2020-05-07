<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';
$id = $_GET['id'];
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
          alert('Data berhasil diubah!');
          document.location.href = 'detail.php';
          </script>";
  } else {
    echo "Data gagal diubah";
  }
}
$mahasiswa = query("SELECT * FROM mahasiswa WHERE id=$id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Mahasiswa</title>
  <link rel="stylesheet" type="text/css" href="Semantic UI/semantic.min.css">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script src="Semantic UI/dist/semantic.min.js"></script>

  <style>
    body {
      margin: 30px;
    }
  </style>
</head>

<body>
  <div class="ui internally celled grid">
    <div class="row">
      <div class="three wide column">
        <form action="" method="POST">
          <div class="ui form error ">

            <h3>Form Ubah Data Mahasiwa</h3>
            <div class="field">
              <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
            </div>

            <div class="field">
              <label>Nama :</label>
              <input type="text" name="nama" value="<?= $mahasiswa['nama']; ?>" autofocus required>
            </div>

            <div class="field">
              <label>NRP :</label>
              <input type="text" name="nrp" value="<?= $mahasiswa['nrp']; ?>" required>
            </div>

            <div class="field">
              <label>E-mail :</label>
              <input type="text" name="email" value="<?= $mahasiswa['email']; ?>" required>
            </div>

            <div class="field">
              <label>Jurusan :</label>
              <input type="text" name="jurusan" value="<?= $mahasiswa['jurusan']; ?>" required>
            </div>

            <div class="ui form">
              <div class="field">
                <label>Gambar :</label>
                <input type="text" name="gambar" value="<?= $mahasiswa['gambar']; ?>" required>
              </div>
            </div>
            <br>
            <div class="input-btn"><input name="ubah" class="ui submit button" type="submit" value="Submit"></div>
        </form>
      </div>
      <br>
      <a href="index.php">Kembali ke Page Index Page</a>
    </div>

  </div>
  </div>
</body>

</html>