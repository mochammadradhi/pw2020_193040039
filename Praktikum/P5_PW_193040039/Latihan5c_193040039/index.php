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
        top:40%;
        position:relative;
        width:90%;
        margin:auto !important;
    }
    
    .header{
        margin-right:5px !important;
    }
    
    .hed{
        position:relative;
        top:200px;
    }
    </style>
</head>
<body>
<h1 class="ui header center aligned hed">Klik Link Dibawah Ini Untuk Detail Musik Gear</h1>

<div class="container">
<div class="ui horizontal list">
  <div class="item">
  <?php foreach($result as $res):?>
    <img class="ui avatar image" src="../assets/img/<?= $res["img_music_gear"]?>">
    <div class="content">
      <div class="header">
        <p class="nama">
        <a href="detail.php?ID=<?= $res["ID"] ?>">
        <?= $res["nama_music_gear"]?>
        </a>
        </p>
      </div>
    </div>
    <?php endforeach?>
  </div>
</div>
</div>
</body>
</html>