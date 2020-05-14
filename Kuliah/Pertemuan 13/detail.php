<?php
if (!isset($_GET['id'])) {
  header("location: index.php");
  exit;
}
require 'functions.php';
$id = $_GET['id'];
$mahasiswa = query("SELECT * FROM mahasiswa WHERE id = $id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa Page</title>
  <link rel="stylesheet" type="text/css" href="Semantic UI/semantic.min.css">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script src="Semantic UI/semantic.min.js"></script>
  <style>
    body {
      margin: 20px;
    }
  </style>
</head>

<body>
  <h2>Detail Mahasiswa</h2>
  <div class="ui link cards">
    <div class="card">
      <div class="image">
        <img src="img/<?= $mahasiswa['gambar'] ?>">
      </div>
      <div class="content">
        <div class="header">
          <h2><?= $mahasiswa['nrp'] ?></h2>
        </div>
        <div class="meta">
          <h3 class="ui header black"><?= $mahasiswa['nama'] ?></h3>
        </div>
        <div class="meta">
          <h5 class="ui header black"><?= $mahasiswa['email'] ?></h5>
        </div>
        <div class="meta">
          <h5 class="ui header black"><?= $mahasiswa['jurusan'] ?></h5>
        </div>
      </div>
      <div class="extra content">
        <span class="right floated">
          <a href="hapus.php?id=<?= $mahasiswa['id']; ?>"><button class="ui primary button">
              <i class="icon trash alternate"></i>
              Delete
            </button></a>
        </span>
        <span>
          <a href="ubah.php?id=<?= $mahasiswa['id'] ?>"><button class="ui primary button">
              <i class="icon edit"></i>
              Change
            </button></a>
        </span>
        <br>
        <span class="center floated">
          <br>
          <a href="index.php" class="ui primary">Kembali ke daftar mahasiswa</a>
        </span>
      </div>
    </div>
</body>

</html>