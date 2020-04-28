<?php
require('../assets/functions/functions.php');
$result = query("SELECT * FROM music_gear")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 Alat Musik</title>
    <link rel="stylesheet" type="text/css" href="../assets/Semantic/semantic.min.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>
    <script src="../assets/Semantic/dist/semantic.min.js"></script>
    <style>
    body{
        margin:0;
        padding:20px;   
    }

    .container{
      padding:15px;
      width:40%;
    }
    </style>
</head>
<body>
<h1 class="ui header left aligned hed">Klik Link Dibawah Ini Untuk Detail Musik Gear</h1>
<br>
<div class="container">
<div class="ui items ">
<?php foreach($result as $res):?>
  <div class="item">
    <div class="ui small image">
    <img src="../assets/img/<?= $res["img_music_gear"]?>">
    </div>
    <div class="middle aligned content">
      <div class="header">
      <?= $res["nama_music_gear"]?>
      </div>
      <div class="description">
        <p><?= $res["deskripsi"]?></p>
      </div>
      <div class="extra">
        <div class="ui right floated button">
        <a href="php/detail.php?ID=<?= $res["ID"] ?>" class="header">Detail</a>
        </div>
      </div>
    </div>
    <br>
    <br>
  </div>
<?php endforeach;?>
  </div>
</div>
</body>
</html>