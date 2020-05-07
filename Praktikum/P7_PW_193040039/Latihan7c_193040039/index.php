<?php



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
      padding: 50px;
    }


    div [class*="right floated"] {
      float: right;
      margin-right: 0.25em;
    }

    .ui .modal .content .description {
      width: 35% !important;
    }

    .bgimg {
      padding: 0 !important;
      background-image: url('../assets/img/background_img1.jpg');
      background-repeat: no-repeat;
      background-size: cover;
    }

    .content_title {
      padding: 20px;
      background: rgba(255, 255, 255, 0.7);
      width: 100%;
      height: 100%;
    }

    .ui .grid {
      padding: 0 !important;
      margin: 0 !important;
      height: 500px;
    }


    .content_title img {
      margin-top: 30px;
      position: absoulte;
      width: 130px;
    }

    .content_title_right {
      margin-top: 40%;
    }

    .footer_right {
      position: relative;
      bottom: -135px;
    }

    .ui[class*="very padded"].segment {
      padding: 0;
    }
  </style>
</head>

<body>
  <div class="ui raised very padded text container segment center aligned">
    <div class="ui grid">
      <div class="eight wide column bgimg">
        <div class="content_title">
          <img src="../assets/img/logo_music.png" alt="">
          <p class="ui header left aligned"> " Music Store Sales people provide customer service for clientele shopping for musical instruments, both in the shop and online "</p>
        </div>
      </div>
      <div class="eight wide column">
        <div class="content_title_right">
          <h2>Kunjungi Website Music Gear Kami</h2>
          <a href="php/login.php">
            <div class="ui primary animated button" tabindex="0">
              <div class="visible content"> Login </div>
              <div class="hidden content">
                <i class="sign-in icon"></i>
              </div>
            </div>
          </a>
          <br>
          <br>
          <div class="four wide column">
            <button class="ui facebook button">
              <i class="facebook icon"></i>
              Facebook
            </button>

            <button class="ui twitter button">
              <i class="twitter icon"></i>
              Twitter
            </button>
          </div>

          <br>
        </div>
        <div class="footer_right">
          <div class="ui center floated horizontal list">
            <div class="disabled item" href="#">© Music Gear, Store.</div>
            <a class="item" href="#">Terms</a>
            <a class="item" href="#">Privacy</a>
            <a class="item" href="#">Contact</a>
          </div>
        </div>

      </div>
    </div>

  </div>

</body>

</html>