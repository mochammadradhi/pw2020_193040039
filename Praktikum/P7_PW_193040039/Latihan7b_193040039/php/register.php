<?php
require '../../assets/functions/functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Page</title>
  <link rel="stylesheet" type="text/css" href="../../assets/Semantic/semantic.min.css">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script src="../../assets/Semantic/semantic.min.js"></script>
  <style>
    .ui .modal .content .description {
      width: 35% !important;
      margin-top: 60px !important;
    }
  </style>
</head>

<body>
  <div class="ui modal">
    <div class="header">
      Register Page
    </div>
    <div class="image content">
      <div class="ui large image">
        <img src="../../assets/img/register.jpg">
      </div>
      <div class="description centered">
        <?php if (isset($_POST['register'])) : ?>
          <?php if (registrasi($_POST) > 0) : ?>
            <?= "<script>
        alert('Registrasi Berhasil!');
        document.location.href='../index.php';
        </script>"; ?>
          <?php else : ?>
            <?php echo "  <script>
          $('.ui.modal')
          .modal({
            blurring: true
          })
          .modal('setting', 'closable', false)
          .modal('show');
          </script>
          "; ?>
            <div class="ui error message">
              <div class="header">Register gagal!</div>
              <p>Pastikan cek kembali username dan password anda.</p>
            </div>
          <?php endif; ?>
        <?php endif; ?>
        <form action="" method="POST">
          <div class="ui form">
            <div class="field">
              <label>Silahkan masukan username dan password untuk registrasi</label>
            </div>
            <div class="field">
              <label>Username :</label>
              <input type="text" name="username" required>
            </div>
            <div class="field">
              <label>Password :</label>
              <input type="password" name="password" required>
            </div>
            <div class="field">
              <button class="ui primary right labeled icon button" name="register">
                Register
                <i class="user plus icon"></i>
              </button>
            </div>
            <div class="field">
              Kembali ke <a href="../index.php">homepage</a>
            </div>
          </div>
        </form>
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