<?php
require('../assets/functions/functions.php');
$result = query("SELECT * FROM music_gear");
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
        padding:20px;   
    }

    .Biola{
        width:250px;
    }

    .Saxophone{
        width:300px;
    }

    .Flute{
        width:300px;
    }

    .Piano{
        width:300px;
    }

    .Drum{
        width:300px;
    }
    .DJ{
        width:300px;
    }

    .Loop{
        width:300px;
    }

    .Kajon{
        width:300px;
    }

    .Gitar{
        width:300px;
    }

    .Bass{
        width:300px;
    }
    /* tr:nth-child(even){background-color: #f2f2f2;} */

    /* table tr:hover {background-color: #ddd;} */
    </style>
</head>
<body>
<h1 class="ui header">Musik Gear Rekomendasi</h1>

<table class="ui orange celled striped table center aligned">
  <thead>
    <tr>
    <th>No</th>
    <th>Gambar Musik Gear</th>
    <th>Nama Musik Gear</th>
    <th>Deskripsi</th>
    <th>Harga</th>
    <th>Rekomendasi</th>
  </tr></thead><tbody>
  <?php foreach($result as $res):?>
<tr>
    <td><?= $res["ID"] ?></td>
    <td> <img src="../assets/img/<?= $res["img_music_gear"] ?>" class="<?= $res["nama_music_gear"]?>"></td>
    <td><?= $res["nama_music_gear"]?></td>
    <td><?= $res["deskripsi"]?></td>
    <td>Rp. <?= $res["harga"]?></td>
    <td> &#9733; <?= $res["rekomendasi"]?></td>
</tr>

<?php endforeach?>
  </tbody>
</table>
</body>
</html>