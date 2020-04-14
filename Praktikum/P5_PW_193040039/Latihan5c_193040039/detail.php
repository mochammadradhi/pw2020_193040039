<?php
if(!isset($_GET['ID'])){
    header("location: index.php");
    exit;
}

require('../assets/functions/functions.php');

$id = $_GET['ID'];

$result = query("SELECT * FROM music_gear WHERE ID = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan5C</title>
    <link rel="stylesheet" type="text/css" href="../assets/Semantic/semantic.min.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>
    <script src="../assets/Semantic/dist/semantic.min.js"></script>
    <style>
    body{
        padding:20px;
    }
    .container{
        margin-top:35px !important;
    }
    .hed{
        margin-top:20px !important; 
    }
    </style>
</head>
<body>
<h2 class="ui header hed">Detail <?= $result["nama_music_gear"] ?></h2>
    <div class="container">
    <div class="ui card">
  <div class="image">
    <img src="../assets/img/<?= $result["img_music_gear"] ?>">
  </div>
  <div class="content">
    <a class="header"><?= $result["nama_music_gear"] ?></a>
    <div class="meta">
      <span class="date">Rp. <?= $result["harga"] ?></span>
    </div>
    <div class="description">
    <?= $result["deskripsi"] ?>
    </div>
  </div>
  <div class="extra content">
    <a>
      <i class="thumbs up icon"></i>
      <?= $result["rekomendasi"]?>
    </a>
  </div>
</div>
<a href="index.php"><button class="ui button">Kembali</button></a>
</div>
</body>
</html>