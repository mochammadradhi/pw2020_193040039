<?php
require('../assets/functions/functions.php');
if (isset($_GET['keyword'])) {
  $keyword = $_GET['keyword'];
  $result = query("SELECT * FROM music_gear WHERE
      img_music_gear LIKE '%$keyword%' OR
      nama_music_gear LIKE '%$keyword%' OR
      deskripsi LIKE '%$keyword%' OR
      harga LIKE '%$keyword%' OR
      rekomendasi LIKE '%$keyword%' ");
} else {
  $result = query("SELECT * FROM music_gear");
}

require('php/login.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page Music Gear</title>
  <link rel="stylesheet" type="text/css" href="../assets/Semantic/semantic.min.css">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script src="../assets/Semantic/semantic.min.js"></script>
  <style>
    body {
      margin: 0;
      padding: 20px;
    }

    .container {
      padding: 15px;
      width: 40%;
    }

    div [class*="right floated"] {
      float: right;
      margin-right: 0.25em;
    }

    .ui .modal .content .description {
      width: 35% !important;
    }
  </style>
</head>

<body>
  <h1 class="ui header left aligned hed">Selamat Datang di Detail Page Music Gear</h1>
  <div class="container">
    <div class="ui category search">
      <form action="" method="GET">
        <div class="ui icon input right floated">
          <input class="prompt" type="text" name="keyword" placeholder="Search Alat Musik...">
          <i class="search icon"></i>
        </div>
      </form>
    </div>

    <?php if (empty($result)) : ?>
      <h2 class="kosong" id="kosong">Data Tidak Ditemukan!</h2>
      <div class="ui animated button" tabindex="0">
        <div class="visible content">Kembali</div>
        <a href="index.php">
          <div class="hidden content">
            <i class="right arrow icon"></i>
          </div>
        </a>
      </div>
    <?php else : ?>
      <br>
      <br>
      <div class="ui items ">
        <?php foreach ($result as $res) : ?>
          <div class="item">
            <div class="ui small image">
              <img src="../assets/img/<?= $res["img_music_gear"] ?>">
            </div>
            <div class="middle aligned content">
              <div class="header">
                <?= $res["nama_music_gear"] ?>
              </div>
              <div class="description">
                <p><?= $res["deskripsi"] ?></p>
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
        <?php endforeach; ?>
      <?php endif; ?>
      </div>
  </div>

  <!-- MODAL LOGIN ADMIN PAGE -->
  <div class="ui modal">
    <div class="header">
      Login Page
    </div>
    <div class="image content">
      <div class="ui large image">
        <img src="../assets/img/admin.png">
      </div>
      <div class="description centered">
        <?php if (isset($error)) : ?>
          <?php echo "  <script>
          $('.ui.modal')
          modal('setting', 'closable', false)
          .modal('show');
          </script>
          "; ?>
          <div class="ui error message">
            <div class="header">Username Atau Password Anda Salah!</div>
            <p>Silahkan cek kembali username dan password anda.</p>
            <p>NOTE :</p>
            <p><b>Admin Page</b></p>
            <p>username adminsuper password admin</p>
            <p><b>User Page</b></p>
            <p>username user1 passsword user1</p>
          </div>
        <?php endif; ?>
        <form action="" method="POST">
          <div class="ui form">
            <div class="field">
              <label>Username :</label>
              <input type="text" name="username" required>
            </div>
            <div class="field">
              <label>Password :</label>
              <input type="password" name="password" required>
            </div>

            <div class="field">
              <div class="ui checkbox">
                <input type="checkbox" tabindex="0" class="hidden">
                <label>Remember me</label>
              </div>
            </div>
            <div class="field">Belum punya akun? | <a href="php/register.php">Register</a></div>
            <button class="ui positive right labeled icon button" name="submit">
              Login
              <i class="arrow alternate circle right outline icon"></i>
            </button>
          </div>
        </form>
      </div>
    </div>

  </div>
  </div>

  <script>
    $('.ui.modal')
      .modal({
        blurring: true
      })
      .modal('setting', 'closable', false)
      .modal('show');
  </script>
</body>

</html>