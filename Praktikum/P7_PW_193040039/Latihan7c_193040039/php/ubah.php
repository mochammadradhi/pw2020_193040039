<?php

session_start();
if (!isset($_SESSION['username'])) {
  header("Location: ../index.php");
  exit;
}

require '../../assets/functions/functions.php';
$id = $_GET['id'];
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
          alert('Data berhasil diubah!');
          document.location.href = 'admin.php';
          </script>";
  } else {
    echo "Data gagal diubah";
  }
}
$res = query("SELECT * FROM music_gear WHERE ID=$id")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Alat Musik</title>
  <link rel="stylesheet" type="text/css" href="../../assets/Semantic/semantic.min.css">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script src="../../assets/Semantic/dist/semantic.min.js"></script>

  <style>
    body {
      margin: 30px;
    }
  </style>
</head>

<body>
  <div class="ui internally celled grid">
    <div class="row">
      <div class="three wide column">
        <form action="" method="POST">
          <div class="ui form error ">

            <h3>Form Ubah Data Alat Musik</h3>
            <div class="field">
              <input type="hidden" name="id" value="<?= $res['ID']; ?>">
            </div>

            <div class="field">
              <label>Gambar :</label>
              <input type="text" name="gambar" value="<?= $res['img_music_gear']; ?>" autofocus required>
            </div>

            <div class="field">
              <label>Nama Alat Musik :</label>
              <input type="text" name="nama" value="<?= $res['nama_music_gear']; ?>" required>
            </div>

            <div class="field">
              <label>Deskripsi :</label>
              <textarea name="deskripsi" cols="15" rows="3"><?= $res['deskripsi']; ?>
    </textarea>
            </div>

            <div class="field">
              <label>Harga :</label>
              <input type="text" name="harga" value="<?= $res['harga']; ?>" required>
            </div>

            <div class="ui form">
              <div class="field">
                <label>Rekomendasi :</label>
                <select class="ui dropdown" name="rekomendasi">
                  <option value="<?= $res['rekomendasi']; ?>"><?= $res['rekomendasi'] ?></option>
                  <option value="3.0/5.0">3.0/5.0</option>
                  <option value="3.1/5.0">3.1/5.0</option>
                  <option value="3.2/5.0">3.2/5.0</option>
                  <option value="3.3/5.0">3.3/5.0</option>
                  <option value="3.4/5.0">3.4/5.0</option>
                  <option value="3.5/5.0">3.5/5.0</option>
                  <option value="3.6/5.0">3.6/5.0</option>
                  <option value="3.7/5.0">3.7/5.0</option>
                  <option value="3.8/5.0">3.8/5.0</option>
                  <option value="3.9/5.0">3.9/5.0</option>
                  <option value="4.0/5.0">4.0/5.0</option>
                  <option value="4.1/5.0">4.1/5.0</option>
                  <option value="4.2/5.0">4.2/5.0</option>
                  <option value="4.3/5.0">4.3/5.0</option>
                  <option value="4.4/5.0">4.4/5.0</option>
                  <option value="4.5/5.0">4.5/5.0</option>
                  <option value="4.6/5.0">4.6/5.0</option>
                  <option value="4.7/5.0">4.7/5.0</option>
                  <option value="4.8/5.0">4.8/5.0</option>
                  <option value="4.9/5.0">4.9/5.0</option>
                  <option value="5.0/5.0">5.0/5.0</option>
                </select>
              </div>
            </div>
            <br>



            <div class="input-btn"><input name="ubah" class="ui submit button" type="submit" value="Submit"></div>
        </form>
      </div>
      <br>
      <a href="admin.php">Kembali ke Page Admin Page</a>
    </div>

  </div>
  </div>
</body>

</html>