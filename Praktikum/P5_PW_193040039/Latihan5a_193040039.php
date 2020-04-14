<?php
$conn = mysqli_connect("localhost","root","") or die("koneksi gagal terhubung ke Database");

mysqli_select_db($conn,"tubes_193040039") or die("Nama Database salah!");

$result = mysqli_query($conn, "SELECT * FROM music_gear");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 Alat Musik</title>

    <style>
    table, td, th {  
    border: 1px solid #ddd;
    text-align: center;
    }

    h1{
        text-align:center;
    }
    
    table {
    margin:auto;
    border-collapse: collapse;
    width: 85%;
    }

    th{
        background-color:seagreen;    
    }

    th, td {
    padding: 15px;
    }

    .Biola{
        width:300px;
    }

    .Saxophone{
        width:300px;
    }

    .Flute{
        width:500px;
    }

    .Piano{
        width:450px;
    }

    .Drum{
        width:400px;
    }
    .DJ{
        width:500px;
    }

    .Loop{
        width:400px;
    }

    .Kajon{
        width:400px;
    }

    tr:nth-child(even){background-color: #f2f2f2;}

    table tr:hover {background-color: #ddd;}
    </style>
</head>
<body>
<h1>Alat Musik Modern</h1>


<table>
<tr>
<th>No</th>
<th>Foto Alat Musik</th>
<th>Nama Alat Musik</th>
<th>Deskripsi</th>
<th>Harga</th>
<th>Rekomendasi</th>
</tr>
<?php while($row = mysqli_fetch_assoc($result)):?>
<tr>
<td><?= $row["ID"] ?></td>
<td> <img src="img/<?= $row["img_music_gear"] ?>" class="<?= $row["nama_music_gear"]?>"></td>
<td><?= $row["nama_music_gear"]?></td>
<td><?= $row["deskripsi"]?></td>
<td>Rp. <?= $row["harga"]?></td>
<td> &#9733; <?= $row["rekomendasi"]?></td>
</tr>

<?php endwhile?>

</table>
</body>
</html>