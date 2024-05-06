<?php
  require_once "includes/dbh.inc.php";

  session_start();
  $userId = $_SESSION["kullanici_id"];

  $stmt = $pdo->prepare("SELECT * FROM cuzdan WHERE kullanici_id_fk = :userId");
  $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
  $stmt->execute();

  $user = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Cüzdan</title>

    <!-- FontAweome CDN Link for Icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- Google Font - Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <link rel="icon" href="images/favicon.svg" />
    <link rel="stylesheet" href="style.css?version=2.7" />
  </head>
  <body>
    <header class="header">
      <a href="piyasalar-after-login.php" class="logo">döviztakip</a>

      <nav class="navbar">
        <a href="piyasalar-after-login.php">Piyasalar</a>
        <a href="alsat.php">Al - Sat</a>
        <a href="cuzdan.php" class="active">Cüzdan</a>
        <a href="hesap.php">Hesap</a>
        <a href="index.php" class="girisyap">Çıkış Yap</a>
      </nav>
    </header>

    <div>
      <h1 style="font-weight: 500; position: relative; left: 200px; top: 102px;">Cüzdan</h1>
        <div class="signup-form" style="width: 1000px; height: 350px; box-shadow: 10px 10px 20px #888888; ;">
          <div id="cuzdan">
            <div style="padding-right: 50px; padding-top: 50px;">
              <span style="font-style: italic;">Toplam Varlık</span><br>
              <span style="font-size: 24px; font-weight: 600;">₺6.250.740,45</span>
            </div>
            <div style="padding-right: 50px; padding-top: 50px;">
              <span style="font-style: italic;">Bakiye</span><br>
              <span style="font-size: 24px; font-weight: 600;">₺100.000,00</span>
            </div>
            <div style="padding-right: 50px; padding-top: 50px;">
              <span style="font-style: italic;">S.K.T.</span><br>
              <span style="font-size: 14px; font-weight: 500;">09/28</span>
            </div>
            <div style="padding-right: 50px; padding-top: 50px;">
              <span style="font-style: italic;">Cardholder</span><br>
              <span style="font-size: 14px; font-weight: 500;">Alperen O.</span>
            </div>
            <div style="padding-right: 50px; padding-top: 50px;">
              <span style="font-style: italic;">Card Number</span><br>
              <span style="font-size: 14px; font-weight: 500;">**** **** **** 1234</span>
            </div>
          </div>
        </div>

        <hr style="position: relative; top:-250px; left:175px; width:1000px; opacity: 65%;">

        <div style="display: flex; margin-top: -217px; margin-left: 202px;">
          <div style="background: #ddd; width: 150px; height: 100px; opacity: 80%; font-size: 18px; font-weight: 500; padding-left: 30px; padding-top: 10px;">USD<br><span style="font-weight: 600;">34.000</span></div>
          <div style="background: #ddd; width: 150px; height: 100px; margin-left: 50px; opacity: 80%; font-size: 18px; font-weight: 500; padding-left: 30px; padding-top: 10px;">EUR<br><span style="font-weight: 600;">93.000</span></div>
          <div style="background: #ddd; width: 150px; height: 100px; margin-left: 50px; opacity: 80%;  font-size: 18px; font-weight: 500; padding-left: 30px; padding-top: 10px;">GBP<br><span style="font-weight: 600;">34.000</span></div>
          <div style="background: #ddd; width: 150px; height: 100px; margin-left: 50px; opacity: 80%;  font-size: 18px;  font-weight: 500; padding-left: 30px; padding-top: 10px;">DKK<br><span style="font-weight: 600;">4.000</span></div>
          <div style="background: #ddd; width: 150px; height: 100px; margin-left: 50px; opacity: 80%;  font-size: 18px;  font-weight: 500; padding-left: 30px; padding-top: 10px;">RUB<br><span style="font-weight: 600;">83.000</span></div>
        </div>
        
    </div>
    
    <footer class="footer">
      <div class="footer-content">
        <p>&copy Copyright 2024. Tüm hakları saklıdır.</p>
      </div>
    </footer>
  </body>
</html>