<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Al - Sat</title>

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
        <a href="alsat.php" class="active">Al - Sat</a>
        <a href="cuzdan.php">Cüzdan</a>
        <a href="hesap.php">Hesap</a>
        <a href="index.php" class="girisyap">Çıkış Yap</a>
      </nav>
    </header>

    <div class="wrapper" style="margin-top: 50px">
      <header>Döviz Değişimi</header>

      <form action="#">
        <div class="amount">
          <p>Miktar giriniz</p>
          <input type="text" value="1" />
        </div>

        <div class="drop-list">
          <div class="from">
            <p style="font-size: 13px; font-weight: 500">Dönüştüreceğiniz</p>
            <div class="select-box">
              <img src="https://flagcdn.com/48x36/us.png" alt="flag" />
              <select>
                <!-- Options tag are inserted from JavaScript -->
              </select>
            </div>
          </div>

          <div class="icon"><i class="fas fa-exchange-alt"></i></div>
          <div class="to">
            <p style="font-size: 13px; font-weight: 500">Hedef</p>
            <div class="select-box">
              <img src="https://flagcdn.com/48x36/tr.png" alt="flag" />
              <select>
                <!-- Options tag are inserted from JavaScript -->
              </select>
            </div>
          </div>
        </div>

        <div class="exchange-rate">Getting exchange rate...</div>
        <button>İşlemi Gerçekleştir</button>
      </form>
    </div>

    <footer class="footer">
      <div class="footer-content">
        <p>&copy Copyright 2024. Tüm hakları saklıdır.</p>
      </div>
    </footer>

    <script src="js/country-list.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
