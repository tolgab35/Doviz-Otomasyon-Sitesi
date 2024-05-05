<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/login_view.inc.php';
require_once 'includes/signup_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Kayıt Ol</title>

    <!-- Google Font - Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <link rel="icon" href="images/favicon.svg" />
    <link rel="stylesheet" type="text/css" href="style.css?version=1.5">
  </head>
  <body>
    <header class="header">
      <a href="index.php" class="logo">döviztakip</a>

      <nav class="navbar">
        <a href="index.php">Anasayfa</a>
        <a href="piyasalar.php">Piyasalar</a>
        <a href="kayitol.php" class="active">Kayıt Ol</a>
        <a href="girisyap.php" class="girisyap">Giriş Yap</a>
      </nav>
    </header>

    <!-- Sign Up adapted from Magda Pimentel (https://codepen.io/magdaspimentel/pen/QvxwpZ) -->
    <div class="signup-form">
      <div class="signup">
        <h1>Hesap oluştur</h1>

        <form action="includes/signup.inc.php" method="post">
          <p>
            <input type="text" name="signup-firstname" id="firstname" placeholder="İsim"/>
          </p>
          <p>
            <input type="text" name="signup-lastname" id="lastname" placeholder="Soyisim"/>
          </p>
          <p>
            <input type="text" name="signup-email" id="email" placeholder="Email"/>
          </p>
          <p>
            <input type="text" name="signup-phone" id="password" placeholder="Telefon"/>
          </p>
          <p>
            <input type="password" name="signup-password" id="password" placeholder="Şifre"/>
          </p>

          <button type="submit" name="send_registration" id="registration">
            <p>Kayıt Ol</p>
          </button>

          <span>
            <p>
              Hesap oluşturarak <a href="">Üyelik Sözleşmesi</a>'ni okuduğunuzu
              ve kabul ettiğinizi onaylıyorsunuz.
            </p>
          </span>

          <br />
          <span>
            <p>Zaten hesabınız var mı? <a href="girisyap.php">Giriş Yap</a></p>
          </span>

          <span>
            <?php check_signup_errors(); ?>
          </span>
        </form>
      </div>
    </div>

    <footer class="footer">
      <div class="footer-content">
        <p>&copy Copyright 2024. Tüm hakları saklıdır.</p>
      </div>
    </footer>
  </body>
</html>
