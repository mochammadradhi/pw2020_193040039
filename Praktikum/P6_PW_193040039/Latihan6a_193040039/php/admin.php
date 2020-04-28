<?php
require '../../assets/functions/functions.php';
$result = query("SELECT * FROM music_gear");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Page Latihan 6a</title>
  <link rel="stylesheet" type="text/css" href="../../assets/Semantic/semantic.min.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>
    <script src="../../assets/Semantic/dist/semantic.min.js"></script>
    <style>
    body{
      margin: auto;
      padding:20px;
    }

    .Biola{
      width:250px;
    }
    </style>
</head>
<body>
  <table class="ui orange celled striped table center aligned">
  <thead>
  <tr>
  <th>#</th>
  <th>Opsi</th>
  <th>Gambar</th>
  <th>Nama Musik Gear</th>
  <th>Deskripsi</th>
  <th>Harga</th>
  <th>Rekomendasi</th>
  </tr>
  </thead>
  <tbody>
  <?php foreach($result as $res):?>
  <tr>
  <td><?=$res['ID']?></td>
  <td>
  <a href="ubah.php">
  <div class="ui left floated medium primary labeled icon button">
  <i class="edit icon"></i>Ubah
  </div>
  </a>
  <br>
  <br>
  <br>
  <a href="hapus.php">
  <div class="ui left floated medium primary labeled icon button">
  <i class="trash alternate icon"></i>Hapus
  </div>
  </a>
  </td>
  <td>
    <img src="../../assets/img/<?= $res['img_music_gear']?>" alt="<?= $res['img_music_gear']?>"  style="width:300px;">
  </td>
  <td><?= $res['nama_music_gear']?></td>
  <td><?= $res['deskripsi']?></td>
  <td>Rp. <?= $res['harga']?></td>
  <td><?= $res['rekomendasi']?></td>
  </tr>
  <?php endforeach;?>
  </tbody>
  </table>
</body>
</html>