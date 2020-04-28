<?php
require('../assets/functions/functions.php');
if(isset($_GET['keyword'])){
  $keyword = $_GET['keyword'];
  $result = query("SELECT * FROM music_gear WHERE
      img_music_gear LIKE '%$keyword%' OR
      nama_music_gear LIKE '%$keyword%' OR
      deskripsi LIKE '%$keyword%' OR
      harga LIKE '%$keyword%' OR
      rekomendasi LIKE '%$keyword%' ");
  }
  else{
    $result = query("SELECT * FROM music_gear");
  }
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

    div [class*="right floated"] {
    float: right;
    margin-right: 0.25em;
    } 
    </style>
</head>
<body>
<h1 class="ui header left aligned hed">Klik Link Dibawah Ini Untuk Detail Musik Gear</h1>
<br>

<div class="container">
<div class="ui category search">
<form action="" method="GET">
  <div class="ui icon input right floated">
    <input class="prompt" type="text" name="keyword" placeholder="Search Alat Musik...">
    <i class="search icon"></i>
  </div>
</form>
<a href="php/admin.php">
<button class="ui standard button">
  <i class="icon user circle"></i>
  Admin Page
</button>
</a>
</div>

<?php if(empty($result)):?>
  <h2 class="kosong" id="kosong">Data Tidak Ditemukan!</h2>
  <div class="ui animated button" tabindex="0">
  <div class="visible content">Kembali</div>
  <a href="index.php"><div class="hidden content">
    <i class="right arrow icon"></i>
  </div></a>
</div>
<?php else:?>
<br>
<br>
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
<?php endif;?>
  </div>
</div>
</body>
</html>