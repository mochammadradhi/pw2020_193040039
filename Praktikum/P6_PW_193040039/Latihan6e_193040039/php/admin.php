<?php
require '../../assets/functions/functions.php';
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
  <title>Admin Page Latihan 6</title>
  <link rel="stylesheet" type="text/css" href="../../assets/Semantic/semantic.min.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>
    <script src="../../assets/Semantic/dist/semantic.min.js"></script>
    <style>
    body{
      padding:20px;
    }

    .Biola{
      width:200px !important;
    }

    div [class*="right floated"] {
    float: right;
    margin-right: 0.25em;
    } 
    </style>
</head>
<body>
<h2>Admin Page</h2>

<div class="ui category search">
<form action="" method="GET">
  <div class="ui icon input right floated">
    <input class="prompt" type="text" name="keyword" placeholder="Search Alat Musik...">
    <i class="search icon"></i>
  </div>
</form>
  <a href="tambah.php">
  <div class="ui left floated medium primary labeled icon button">
  <i class="plus square icon"></i>Tambah Data
  </div>
  </a>
</div>
  <br>
  <br>
  <table class="ui orange celled striped table center aligned">
  <tr>
  <th>#</th>
  <th>Opsi</th>
  <th>Gambar</th>
  <th>Nama Musik Gear</th>
  <th>Deskripsi</th>
  <th>Harga</th>
  <th>Rekomendasi</th>
  </tr>
  <?php if(empty($result)):?>
  <tr>
  <td colspan="6">
  <h2 class="kosong" id="kosong">Data Tidak Ditemukan!</h2>
  <div class="ui animated button" tabindex="0">
  <div class="visible content">Kembali</div>
  <a href="admin.php"><div class="hidden content">
    <i class="right arrow icon"></i>
  </div></a>
</div>  
  </td>
  </tr>
  <?php else:?>
  <?php foreach($result as $res):?>
  <tr>
  <td><?=$res['ID']?></td>
  <td>
  <a href="ubah.php?id=<?= $res['ID']?>">
  <div class="ui left floated medium primary labeled icon button">
  <i class="edit icon"></i>Ubah
  </div>
  </a>
  <br>
  <br>
  <br>
  <a href="hapus.php?id=<?= $res['ID'];?>" onclick="return confirm('Hapus Data??')">
  <div class="ui left floated medium primary labeled icon button">
  <i class="trash alternate icon"></i>Hapus
  </div>
  </a>
  </td>
  <td>
    <img src="../../assets/img/<?= $res['img_music_gear']?>" alt="<?= $res['img_music_gear']?>" class="<?= $res['nama_music_gear']?>"  style="width:300px;">
  </td>
  <td><?= $res['nama_music_gear']?></td>
  <td style="width:30%"><?= $res['deskripsi']?></td>
  <td>Rp. <?= $res['harga']?></td>
  <td><i class="star icon"></i><?= $res['rekomendasi']?> </td>
  </tr>
  <?php endforeach;?>
  <?php endif; ?>
  </table>
</body>
</html>