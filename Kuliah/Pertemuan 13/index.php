<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require("functions.php");
$mahasiswa = query("SELECT * FROM mahasiswa");

if (isset($_POST['keyword'])) {
  $mahasiswa = cari($_POST['keyword']);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
  <link rel="stylesheet" type="text/css" href="Semantic UI/semantic.min.css">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script src="Semantic UI/semantic.min.js"></script>

  <style>
    body {
      margin: 15px;
    }
  </style>
</head>

<body>
  <h2>Daftar Mahasiswa</h2>
  <a href="tambah.php">
    <div class="ui left floated small primary labeled icon button" style="margin-right: 50px;">
      <i class="user icon"></i> Tambah Data Mahasiswa
    </div>
  </a>

  <a href="logout.php">
    <div class="ui left floated small primary labeled icon button">
      <i class="sign-out icon"></i>Logout
    </div>
  </a>
  <br><br><br>
  <div class="ui right floated category search">
    <form action="" method="POST">
      <div class="ui icon input ">
        <input class="prompt keyword" type="text" name="keyword" placeholder="Search Mahasiswa..." autofocus>
        <i class="search icon"></i>
      </div>
    </form>
    <br><br>
    <div class="container">
      <table class="ui very basic collapsing celled table">
        <tbody>
          <tr>
            <th class="center aligned">#</th>
            <th class="center aligned">Mahasiswa</th>
            <th class="center aligned">Aksi</th>
          </tr>
          <?php if (empty($mahasiswa)) : ?>
            <tr>
              <td colspan="6">
                <h4 class="kosong center aligned" id="kosong">Data Tidak Ditemukan!</h4>
              </td>
            </tr>
          <?php else : ?>
            <?php foreach ($mahasiswa as $mhs) : ?>
              <tr>
                <td class="center aligned"><?= $mhs['id'] ?></td>
                <td>
                  <h4 class="ui image header">
                    <img src="img/<?= $mhs['gambar'] ?>" class="ui mini rounded image">
                    <div class="content">
                      <?= $mhs['nama'] ?>
                      <div class="sub header"><?= $mhs['jurusan'] ?>
                      </div>
                    </div>
                  </h4>
                </td>
                <td>
                  <a href="detail.php?id=<?= $mhs['id'] ?>">Lihat detail</a>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php endif; ?>
        </tbody>
      </table>
    </div>

    <script src="js/script.js"></script>
</body>

</html>