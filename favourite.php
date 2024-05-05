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
        <h3 id="piyasalar-all"><a href="piyasalar.php">Tümü</a></h3>
        <hr style="margin-left: 27px; opacity: 60%" />
        <h3 id="piyasalar-favorites" style="margin-left: 27px">
          <a href="">Favoriler</a>
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
              
            />
            
          </td>
          <td></td>
          <td></td>
          <td>
            <input type="text" name="try" id="fav_1" class="piyasalar-textbox" />
          </td>
        </tr>
        <tr>
          <td>
            <i class="fa-regular fa-star favorite-star"></i>
          </td>
          <td>
            <img
              
            />
            
          </td>
          <td></td>
          <td></td>
          <td>
            <input type="text" name="usd" id="fav_2" class="piyasalar-textbox" />
          </td>
        </tr>
        <tr>
          <td>
            <i class="fa-regular fa-star favorite-star"></i>
          </td>
          <td>
            <img />
            
          </td>
          <td></td>
          <td></td>
          <td>
            <input type="text" name="eur" id="fav_3" class="piyasalar-textbox" />
          </td>
        </tr>
        <tr>
          <td>
            <i class="fa-regular fa-star favorite-star"></i>
          </td>
          <td>
            <img
              
            />
           
          </td>
          <td></td>
          <td></td>
          <td>
            <input type="text" name="gbp" id="fav_4" class="piyasalar-textbox" />
          </td>
        </tr>
        <tr>
          <td>
            <i class="fa-regular fa-star favorite-star"></i>
          </td>
          <td>
            <img
              
            />
            
          </td>
          <td></td>
          <td></td>
          <td>
            <input type="text" name="chf" id="fav_5" class="piyasalar-textbox" />
          </td>
        </tr>
        <tr>
          <td>
            <i class="fa-regular fa-star favorite-star"></i>
          </td>
          <td>
            <img
              
            />
        
          </td>
          <td></td>
          <td></td>
          <td>
            <input type="text" name="cad" id="fav_6" class="piyasalar-textbox" />
          </td>
        </tr>
        <tr>
          <td>
            <i class="fa-regular fa-star favorite-star"></i>
          </td>
          <td>
            <img
              
            />
            
          </td>
          <td></td>
          <td></td>
          <td>
            <input type="text" name="rub" id="fav_7" class="piyasalar-textbox" />
          </td>
        </tr>
        <tr>
          <td>
            <i class="fa-regular fa-star favorite-star"></i>
          </td>
          <td>
            <img
              
            />
            
          </td>
          <td></td>
          <td></td>
          <td>
            <input type="text" name="aed" id="fav_8" class="piyasalar-textbox" />
          </td>
        </tr>
        <tr>
          <td>
            <i class="fa-regular fa-star favorite-star"></i>
          </td>
          <td>
            <img
              
            />
            
          </td>
          <td></td>
          <td></td>
          <td>
            <input type="text" name="aud" id="fav_9" class="piyasalar-textbox" />
          </td>
        </tr>
        <tr>
          <td>
            <i class="fa-regular fa-star favorite-star"></i>
          </td>
          <td>
            <img
            
            />  
            
          </td>
          <td></td>
          <td></td>
          <td>
            <input type="text" name="dkk" id="fav_10" class="piyasalar-textbox" />
          </td>
        </tr>
        <tr>
          <td>
            <i class="fa-regular fa-star favorite-star"></i>
          </td>
          <td>
            <img
              
            />
            
          </td>
          <td></td>
          <td></td>
          <td>
            <input type="text" name="sek" id="fav_11" class="piyasalar-textbox" />
          </td>
        </tr>
        <tr>
          <td>
            <i class="fa-regular fa-star favorite-star"></i>
          </td>
          <td>
            <img
              
            />
            
          </td>
          <td></td>
          <td></td>
          <td>
            <input type="text" name="nok" id="fav_12" class="piyasalar-textbox" />
          </td>
        </tr>
        <tr>
          <td>
            <i class="fa-regular fa-star favorite-star"></i>
          </td>
          <td>
            <img
              
            />
            
          </td>
          <td></td>
          <td></td>
          <td>
            <input type="text" name="jpy" id="fav_13" class="piyasalar-textbox" />
          </td>
        </tr>
        <tr>
          <td>
            <i class="fa-regular fa-star favorite-star"></i>
          </td>
          <td>
            <img
              
            />
            
          </td>
          <td></td>
          <td></td>
          <td>
            <input type="text" name="kwd" id="fav_14" class="piyasalar-textbox" />
          </td>
        </tr>
        <tr>
          <td>
            <i class="fa-regular fa-star favorite-star"></i>
          </td>
          <td>
            <img
              
            />
            
          </td>
          <td></td>
          <td></td>
          <td>
            <input type="text" name="zar" id="fav_15" class="piyasalar-textbox" />
          </td>
        </tr>
        <tr>
          <td>
            <i class="fa-regular fa-star favorite-star"></i>
          </td>
          <td>
            <img
              
            />
            
          </td>
          <td></td>
          <td></td>
          <td>
            <input type="text" name="bhd" id="fav_16" class="piyasalar-textbox" />
          </td>
        </tr>
        <tr>
          <td>
            <i class="fa-regular fa-star favorite-star"></i>
          </td>
          <td>
            <img
             
            />
            
          </td>
          <td></td>
          <td></td>
          <td>
            <input type="text" name="lyd" id="fav_17" class="piyasalar-textbox" />
          </td>
        </tr>
        <tr>
          <td>
            <i class="fa-regular fa-star favorite-star"></i>
          </td>
          <td>
            <img
              
            />
            
          </td>
          <td></td>
          <td></td>
          <td>
            <input type="text" name="sar" id="fav_18" class="piyasalar-textbox" />
          </td>
        </tr>
        <tr>
          <td>
            <i class="fa-regular fa-star favorite-star"></i>
          </td>
          <td>
            <img
              
            />
            
          </td>
          <td></td>
          <td></td>
          <td>
            <input type="text" name="iqd" id="fav_19" class="piyasalar-textbox" />
          </td>
        </tr>
        <tr>
          <td>
            <i class="fa-regular fa-star favorite-star"></i>
          </td>
          <td>
            <img
              
            />
            
          </td>
          <td></td>
          <td></td>
          <td>
            <input type="text" name="ils" id="fav_20" class="piyasalar-textbox" />
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
