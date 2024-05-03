<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Giriş Yap</title>

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
      <a href="index.php" class="logo">döviztakip</a>

      <nav class="navbar">
        <a href="index.php">Anasayfa</a>
        <a href="piyasalar.php">Piyasalar</a>
        <a href="kayitol.php">Kayıt Ol</a>
        <a href="girisyap.php" class="girisyap active">Giriş Yap</a>
      </nav>
    </header>

    <!-- Sign Up adapted from Magda Pimentel (https://codepen.io/magdaspimentel/pen/QvxwpZ) -->
    <div class="signup-form">
      <div class="signup">
        <h1>Giriş Yap</h1>

        <form action="includes/login.inc.php" method="post">
          <p>
            <input
              type="text"
              name="signup-email"
              id="email"
              required="zorunlu"
              placeholder="Email"
            />
          </p>
          <p>
            <input
              type="password"
              name="signup-password"
              id="password"
              required="zorunlu"
              placeholder="Şifre"
            />
          </p>

          <button type="submit" name="send_registration" id="registration">
            <p>Giriş Yap</p>
          </button>
          <br /><br />
          <span>
            <p>Henüz hesabınız yok mu? <a href="kayitol.html">Kayıt Ol</a></p>
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
