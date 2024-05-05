<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Piyasalar</title>

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
      <a href="index.php" class="logo">döviztakip</a>

      <nav class="navbar">
        <a href="index.php">Anasayfa</a>
        <a href="piyasalar.php" class="active">Piyasalar</a>
        <a href="kayitol.php">Kayıt Ol</a>
        <a href="girisyap.php" class="girisyap">Giriş Yap</a>
      </nav>
    </header>

    <section id="piyasalar">
      <div>
        <h3 id="piyasalar-all"><a href="">Tümü</a></h3>
        <hr style="margin-left: 27px; opacity: 60%" />
        <h3 id="piyasalar-favorites" style="margin-left: 27px">
          <a href="favourite.php">Favoriler</a>
        </h3>
      </div>

      <table id="piyasalar-tablo">
        <tr>
          <th style="opacity: 0%">favorite-star</th>
          <th style="width: 40%">Döviz</th>
          <th style="padding-left: 50px">Alış</th>
          <th style="padding-left: 50px">Satış</th>
          <th style="opacity: 0%">textbox</th>
        </tr>
        <tr>
          <td>
            <i class="fa-regular fa-star favorite-star"></i>
          </td>
          <td>
            <img
              width="23"
              height="15"
              alt="Türk Lirası"
              src="images/flags/try.png"
            />
            TRY - Türk Lirası
          </td>
          <td></td>
          <td></td>
          <td>
            <input type="text" name="try" id="try" class="piyasalar-textbox" />
          </td>
        </tr>
        <tr>
          <td>
            <i class="fa-regular fa-star favorite-star"></i>
          </td>
          <td>
            <img
              width="23"
              height="15"
              alt="Amerikan Doları"
              src="images/flags/usd.png"
            />
            USD - Amerikan Doları
          </td>
          <td>32,5443</td>
          <td>32,5719</td>
          <td>
            <input type="text" name="usd" id="usd" class="piyasalar-textbox" />
          </td>
        </tr>
        <tr>
          <td>
            <i class="fa-regular fa-star favorite-star"></i>
          </td>
          <td>
            <img width="23" height="15" alt="Euro" src="images/flags/eur.png" />
            EUR - Euro
          </td>
          <td>34,3100</td>
          <td>34,3575</td>
          <td>
            <input type="text" name="eur" id="eur" class="piyasalar-textbox" />
          </td>
        </tr>
        <tr>
          <td>
            <i class="fa-regular fa-star favorite-star"></i>
          </td>
          <td>
            <img
              width="23"
              height="15"
              alt="İngiliz Sterlini"
              src="images/flags/gbp.png"
            />
            GBP - İngiliz Sterlini
          </td>
          <td>37,4500</td>
          <td>37,5075</td>
          <td>
            <input type="text" name="gbp" id="gbp" class="piyasalar-textbox" />
          </td>
        </tr>
        <tr>
          <td>
            <i class="fa-regular fa-star favorite-star"></i>
          </td>
          <td>
            <img
              width="23"
              height="15"
              alt="İsviçre Frangı"
              src="images/flags/chf.png"
            />
            CHF - İsviçre Frangı
          </td>
          <td>37,4500</td>
          <td>37,5075</td>
          <td>
            <input type="text" name="chf" id="chf" class="piyasalar-textbox" />
          </td>
        </tr>
        <tr>
          <td>
            <i class="fa-regular fa-star favorite-star"></i>
          </td>
          <td>
            <img
              width="23"
              height="15"
              alt="Kanada Doları"
              src="images/flags/cad.png"
            />
            CAD - Kanada Doları
          </td>
          <td>37,4500</td>
          <td>37,5075</td>
          <td>
            <input type="text" name="cad" id="cad" class="piyasalar-textbox" />
          </td>
        </tr>
        <tr>
          <td>
            <i class="fa-regular fa-star favorite-star"></i>
          </td>
          <td>
            <img
              width="23"
              height="15"
              alt="Rus Rublesi"
              src="images/flags/rub.png"
            />
            RUB - Rus Rublesi
          </td>
          <td>37,4500</td>
          <td>37,5075</td>
          <td>
            <input type="text" name="rub" id="rub" class="piyasalar-textbox" />
          </td>
        </tr>
        <tr>
          <td>
            <i class="fa-regular fa-star favorite-star"></i>
          </td>
          <td>
            <img
              width="23"
              height="15"
              alt="BAE Dirhemi"
              src="images/flags/aed.png"
            />
            AED - BAE Dirhemi
          </td>
          <td>37,4500</td>
          <td>37,5075</td>
          <td>
            <input type="text" name="aed" id="aed" class="piyasalar-textbox" />
          </td>
        </tr>
        <tr>
          <td>
            <i class="fa-regular fa-star favorite-star"></i>
          </td>
          <td>
            <img
              width="23"
              height="15"
              alt="Avustralya Doları"
              src="images/flags/aud.png"
            />
            AUD - Avustralya Doları
          </td>
          <td>37,4500</td>
          <td>37,5075</td>
          <td>
            <input type="text" name="aud" id="aud" class="piyasalar-textbox" />
          </td>
        </tr>
        <tr>
          <td>
            <i class="fa-regular fa-star favorite-star"></i>
          </td>
          <td>
            <img
              width="23"
              height="15"
              alt="Danimarka Kronu"
              src="images/flags/dkk.png"
            />
            DKK - Danimarka Kronu
          </td>
          <td>37,4500</td>
          <td>37,5075</td>
          <td>
            <input type="text" name="dkk" id="dkk" class="piyasalar-textbox" />
          </td>
        </tr>
        <tr>
          <td>
            <i class="fa-regular fa-star favorite-star"></i>
          </td>
          <td>
            <img
              width="23"
              height="15"
              alt="İsveç Kronu"
              src="images/flags/sek.png"
            />
            SEK - İsveç Kronu
          </td>
          <td>37,4500</td>
          <td>37,5075</td>
          <td>
            <input type="text" name="sek" id="sek" class="piyasalar-textbox" />
          </td>
        </tr>
        <tr>
          <td>
            <i class="fa-regular fa-star favorite-star"></i>
          </td>
          <td>
            <img
              width="23"
              height="15"
              alt="Norveç Kronu"
              src="images/flags/nok.png"
            />
            NOK - Norveç Kronu
          </td>
          <td>37,4500</td>
          <td>37,5075</td>
          <td>
            <input type="text" name="nok" id="nok" class="piyasalar-textbox" />
          </td>
        </tr>
        <tr>
          <td>
            <i class="fa-regular fa-star favorite-star"></i>
          </td>
          <td>
            <img
              width="23"
              height="15"
              alt="Japon Yeni"
              src="images/flags/jpy.png"
            />
            JPY - Japon Yeni
          </td>
          <td>37,4500</td>
          <td>37,5075</td>
          <td>
            <input type="text" name="jpy" id="jpy" class="piyasalar-textbox" />
          </td>
        </tr>
        <tr>
          <td>
            <i class="fa-regular fa-star favorite-star"></i>
          </td>
          <td>
            <img
              width="23"
              height="15"
              alt="Kuveyt Dinarı"
              src="images/flags/kwd.png"
            />
            KWD - Kuveyt Dinarı
          </td>
          <td>37,4500</td>
          <td>37,5075</td>
          <td>
            <input type="text" name="kwd" id="kwd" class="piyasalar-textbox" />
          </td>
        </tr>
        <tr>
          <td>
            <i class="fa-regular fa-star favorite-star"></i>
          </td>
          <td>
            <img
              width="23"
              height="15"
              alt="Güney Afrika Randı"
              src="images/flags/zar.png"
            />
            ZAR - Güney Afrika Randı
          </td>
          <td>37,4500</td>
          <td>37,5075</td>
          <td>
            <input type="text" name="zar" id="zar" class="piyasalar-textbox" />
          </td>
        </tr>
        <tr>
          <td>
            <i class="fa-regular fa-star favorite-star"></i>
          </td>
          <td>
            <img
              width="23"
              height="15"
              alt="Bahreyn Dinarı"
              src="images/flags/bhd.png"
            />
            BHD - Bahreyn Dinarı
          </td>
          <td>37,4500</td>
          <td>37,5075</td>
          <td>
            <input type="text" name="bhd" id="bhd" class="piyasalar-textbox" />
          </td>
        </tr>
        <tr>
          <td>
            <i class="fa-regular fa-star favorite-star"></i>
          </td>
          <td>
            <img
              width="23"
              height="15"
              alt="Libya Dinarı"
              src="images/flags/lyd.png"
            />
            LYD - Libya Dinarı
          </td>
          <td>37,4500</td>
          <td>37,5075</td>
          <td>
            <input type="text" name="lyd" id="lyd" class="piyasalar-textbox" />
          </td>
        </tr>
        <tr>
          <td>
            <i class="fa-regular fa-star favorite-star"></i>
          </td>
          <td>
            <img
              width="23"
              height="15"
              alt="Suudi Arabistan Riyali"
              src="images/flags/sar.png"
            />
            SAR - Suudi Arabistan Riyali
          </td>
          <td>37,4500</td>
          <td>37,5075</td>
          <td>
            <input type="text" name="sar" id="sar" class="piyasalar-textbox" />
          </td>
        </tr>
        <tr>
          <td>
            <i class="fa-regular fa-star favorite-star"></i>
          </td>
          <td>
            <img
              width="23"
              height="15"
              alt="Irak Dinarı"
              src="images/flags/iqd.png"
            />
            IQD - Irak Dinarı
          </td>
          <td>37,4500</td>
          <td>37,5075</td>
          <td>
            <input type="text" name="iqd" id="iqd" class="piyasalar-textbox" />
          </td>
        </tr>
        <tr>
          <td>
            <i class="fa-regular fa-star favorite-star"></i>
          </td>
          <td>
            <img
              width="23"
              height="15"
              alt="İsrail Şekeli"
              src="images/flags/ils.png"
            />
            ILS - İsrail Şekeli
          </td>
          <td>37,4500</td>
          <td>37,5075</td>
          <td>
            <input type="text" name="ils" id="ils" class="piyasalar-textbox" />
          </td>
        </tr>
      </table>
    </section>

    <br /><br /><br />

    <footer class="footer">
      <div class="footer-content">
        <p>&copy Copyright 2024. Tüm hakları saklıdır.</p>
      </div>
    </footer>
    <script src="favourite.js"></script>
  </body>
</html>
