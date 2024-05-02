<?php
require_once "includes/dbh.inc.php";

$userId = 8;

$stmt = $pdo->prepare("SELECT kullanici_adi, kullanici_soyadi, kullanici_email, kullanici_tel FROM kullanici WHERE kullanici_id = :userId");
$stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
$stmt->execute();

$user = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Hesap</title>

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
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header class="header">
      <a href="piyasalar-after-login.php" class="logo">döviztakip</a>

      <nav class="navbar">
        <a href="piyasalar-after-login.php">Piyasalar</a>
        <a href="alsat.php">Al - Sat</a>
        <a href="cuzdan.php">Cüzdan</a>
        <a href="hesap.php" class="active">Hesap</a>
        <a href="index.php" class="girisyap">Çıkış Yap</a>
      </nav>
    </header>

    <div>
      <!-- Sign Up adapted from Magda Pimentel (https://codepen.io/magdaspimentel/pen/QvxwpZ) -->
      <div class="signup-form">
        <div class="signup">
          <h1 style="text-align: center">Hesap Bilgileri</h1>
          <div id="account-info" style="padding-left: 40px">
            <div>
              <span>İsim:</span><br />
              <span>Soyisim:</span><br />
              <span>Email:</span><br />
              <span>Telefon:</span>
            </div>

            <div style="padding-left: 40px">
              <span><?php echo $user['kullanici_adi'];?></span><br />
              <span><?php echo $user['kullanici_soyadi'];?></span><br />
              <span><?php echo $user['kullanici_email'];?></span><br />
              <span><?php echo $user['kullanici_tel'];?></span>
            </div>
          </div>

          <br /><br /><br /><br /><br /><br />
          <form action="includes/userdelete.inc.php" method="post">
            <button
              type="submit"
              name="send_registration"
              id="registration"
              style="background-color: rgb(165, 42, 42)"
            >
              <p>Hesabı Sil</p>
            </button>
          </form>
        </div>

        <div class="signup" style="padding-left: 50px">
          <h1 style="text-align: center">Bilgileri Düzenle</h1>

          <form action="includes/userupdate.inc.php" method="post">
            <p>
              <input
                type="text"
                name="edit-firstname"
                id="firstname"
                required="zorunlu"
                placeholder="İsim"
              />
            </p>
            <p>
              <input
                type="text"
                name="edit-lastname"
                id="lastname"
                required="zorunlu"
                placeholder="Soyisim"
              />
            </p>
            <p>
              <input
                type="text"
                name="edit-email"
                id="email"
                required="zorunlu"
                placeholder="Email"
              />
            </p>
            <p>
              <input
                type="text"
                name="edit-phone"
                id="password"
                required="zorunlu"
                placeholder="Telefon"
              />
            </p>
            <p>
              <input
                type="password"
                name="edit-password"
                id="password"
                required="zorunlu"
                placeholder="Şifre"
              />
            </p>

            <button type="submit" name="send_save" id="save">
              <p>Kaydet</p>
            </button>

            <br />
          </form>
        </div>
      </div>
    </div>

    <footer class="footer">
      <div class="footer-content">
        <p>&copy Copyright 2024. Tüm hakları saklıdır.</p>
      </div>
    </footer>
  </body>
</html>
