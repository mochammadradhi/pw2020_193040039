<?php
session_start();
require('../../assets/functions/functions.php');

if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];
  $result = mysqli_query(connect(), "SELECT * FROM user WHERE username='$username' ");
  $row = mysqli_fetch_assoc($result);

  if ($hash === hash('sha256', $row['id'], false)) {
    $_SESSION['username'] = $row['id'];
    header("Location: login.php");
    exit;
  }
}

if (isset($_SESSION['username']) && $_SESSION['username'] == "user1") {
  header("Location: user_page.php");
  exit;
}

if (isset($_SESSION['username']) && $_SESSION['username'] == "adminsuper") {
  header("Location: admin.php");
  exit;
}




if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(connect(), "SELECT * FROM user WHERE username = '$username'");

  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);

      if (isset($_POST['remember'])) {
        setcookie('username', $row['username'], time() + 60 * 60 * 24);
        setcookie('hash', hash('sha256', $row['id']), time() + 60 * 60 * 24);
      }

      if (hash('sha256', $row['id']) == $_SESSION['hash'] && ($row['priority'] == 1 || $row['priority'] == 2)) {
        header("Location: admin.php");
        die;
      }
      if (hash('sha256', $row['id']) == $_SESSION['hash'] && $row['priority'] == 4) {
        header("Location: user_page.php");
        die;
      }
      header("Location: ../index.php");
      die;
    }
  }
  $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="../../assets/Semantic/semantic.min.css">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script src="../../assets/Semantic/semantic.min.js"></script>
</head>

<body>
  <div class="ui modal">
    <div class="header">
      Login Page
    </div>
    <div class="image content">
      <div class="ui large image">
        <img src="../../assets/img/admin.png">
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
                <input type="checkbox" name="remember">
                <label>Remember me</label>
              </div>
            </div>
            <div class="field">Belum punya akun? | <a href="register.php">Register</a></div>
            <button class="ui positive right labeled icon button" name="submit">
              Login
              <i class="arrow alternate circle right outline icon"></i>
            </button>
          </div>
        </form>
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