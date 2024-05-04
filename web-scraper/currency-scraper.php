<?php
require 'C:/xampp/htdocs/Doviz-Otomasyon-Sitesi/goutte-web-scraping/vendor/autoload.php'; // Goutte kütüphanesini dahil edin
require_once "C:/xampp/htdocs/Doviz-Otomasyon-Sitesi/includes/dbh.inc.php"; // Veritabanı bağlantısını dahil edin

use Goutte\Client;

$client = new Client(); // Goutte istemcisini oluşturun
$crawler = $client->request('GET', 'https://kur.doviz.com/'); // Hedef web sitesine istek gönderin

// Döviz kuru değerini içeren elementleri seçin
// USD
$usdElementAlis = $crawler->filter('td[data-socket-key="USD"][data-socket-attr="bid"]')->first();
$usdElementSatis = $crawler->filter('td[data-socket-key="USD"][data-socket-attr="ask"]')->first();

$exchangeRateTextUsdAlis = $usdElementAlis->text();
$exchangeRateTextUsdSatis = $usdElementSatis->text();

$exchangeRateUsdAlis = str_replace(',', '.', $exchangeRateTextUsdAlis);
$exchangeRateUsdSatis = str_replace(',', '.', $exchangeRateTextUsdSatis);

// EUR
$eurElementAlis = $crawler->filter('td[data-socket-key="EUR"][data-socket-attr="bid"]')->first();
$eurElementSatis = $crawler->filter('td[data-socket-key="EUR"][data-socket-attr="ask"]')->first();

$exchangeRateTextEurAlis = $eurElementAlis->text();
$exchangeRateTextEurSatis = $eurElementSatis->text();

$exchangeRateEurAlis = str_replace(',', '.', $exchangeRateTextEurAlis);
$exchangeRateEurSatis = str_replace(',', '.', $exchangeRateTextEurSatis);

// GBP
$gbpElementAlis = $crawler->filter('td[data-socket-key="GBP"][data-socket-attr="bid"]')->first();
$gbpElementSatis = $crawler->filter('td[data-socket-key="GBP"][data-socket-attr="ask"]')->first();

$exchangeRateTextGbpAlis = $gbpElementAlis->text();
$exchangeRateTextGbpSatis = $gbpElementSatis->text();

$exchangeRateGbpAlis = str_replace(',', '.', $exchangeRateTextGbpAlis);
$exchangeRateGbpSatis = str_replace(',', '.', $exchangeRateTextGbpSatis);

// CHF
$chfElementAlis = $crawler->filter('td[data-socket-key="CHF"][data-socket-attr="bid"]')->first();
$chfElementSatis = $crawler->filter('td[data-socket-key="CHF"][data-socket-attr="ask"]')->first();

$exchangeRateTextChfAlis = $chfElementAlis->text();
$exchangeRateTextChfSatis = $chfElementSatis->text();

$exchangeRateChfAlis = str_replace(',', '.', $exchangeRateTextChfAlis);
$exchangeRateChfSatis = str_replace(',', '.', $exchangeRateTextChfSatis);

// CAD
$cadElementAlis = $crawler->filter('td[data-socket-key="CAD"][data-socket-attr="bid"]')->first();
$cadElementSatis = $crawler->filter('td[data-socket-key="CAD"][data-socket-attr="ask"]')->first();

$exchangeRateTextCadAlis = $cadElementAlis->text();
$exchangeRateTextCadSatis = $cadElementSatis->text();

$exchangeRateCadAlis = str_replace(',', '.', $exchangeRateTextCadAlis);
$exchangeRateCadSatis = str_replace(',', '.', $exchangeRateTextCadSatis);

// RUB
$rubElementAlis = $crawler->filter('td[data-socket-key="RUB"][data-socket-attr="bid"]')->first();
$rubElementSatis = $crawler->filter('td[data-socket-key="RUB"][data-socket-attr="ask"]')->first();

$exchangeRateTextRubAlis = $rubElementAlis->text();
$exchangeRateTextRubSatis = $rubElementSatis->text();

$exchangeRateRubAlis = str_replace(',', '.', $exchangeRateTextRubAlis);
$exchangeRateRubSatis = str_replace(',', '.', $exchangeRateTextRubSatis);

// AED
$aedElementAlis = $crawler->filter('td[data-socket-key="AED"][data-socket-attr="bid"]')->first();
$aedElementSatis = $crawler->filter('td[data-socket-key="AED"][data-socket-attr="ask"]')->first();

$exchangeRateTextAedAlis = $aedElementAlis->text();
$exchangeRateTextAedSatis = $aedElementSatis->text();

$exchangeRateAedAlis = str_replace(',', '.', $exchangeRateTextAedAlis);
$exchangeRateAedSatis = str_replace(',', '.', $exchangeRateTextAedSatis);

// AUD
$audElementAlis = $crawler->filter('td[data-socket-key="AUD"][data-socket-attr="bid"]')->first();
$audElementSatis = $crawler->filter('td[data-socket-key="AUD"][data-socket-attr="ask"]')->first();

$exchangeRateTextAudAlis = $audElementAlis->text();
$exchangeRateTextAudSatis = $audElementSatis->text();

$exchangeRateAudAlis = str_replace(',', '.', $exchangeRateTextAudAlis);
$exchangeRateAudSatis = str_replace(',', '.', $exchangeRateTextAudSatis);

// DKK
$dkkElementAlis = $crawler->filter('td[data-socket-key="DKK"][data-socket-attr="bid"]')->first();
$dkkElementSatis = $crawler->filter('td[data-socket-key="DKK"][data-socket-attr="ask"]')->first();

$exchangeRateTextDkkAlis = $dkkElementAlis->text();
$exchangeRateTextDkkSatis = $dkkElementSatis->text();

$exchangeRateDkkAlis = str_replace(',', '.', $exchangeRateTextDkkAlis);
$exchangeRateDkkSatis = str_replace(',', '.', $exchangeRateTextDkkSatis);

// SEK
$sekElementAlis = $crawler->filter('td[data-socket-key="SEK"][data-socket-attr="bid"]')->first();
$sekElementSatis = $crawler->filter('td[data-socket-key="SEK"][data-socket-attr="ask"]')->first();

$exchangeRateTextSekAlis = $sekElementAlis->text();
$exchangeRateTextSekSatis = $sekElementSatis->text();

$exchangeRateSekAlis = str_replace(',', '.', $exchangeRateTextSekAlis);
$exchangeRateSekSatis = str_replace(',', '.', $exchangeRateTextSekSatis);

// NOK
$nokElementAlis = $crawler->filter('td[data-socket-key="NOK"][data-socket-attr="bid"]')->first();
$nokElementSatis = $crawler->filter('td[data-socket-key="NOK"][data-socket-attr="ask"]')->first();

$exchangeRateTextNokAlis = $nokElementAlis->text();
$exchangeRateTextNokSatis = $nokElementSatis->text();

$exchangeRateNokAlis = str_replace(',', '.', $exchangeRateTextNokAlis);
$exchangeRateNokSatis = str_replace(',', '.', $exchangeRateTextNokSatis);

// JPY
$jpyElementAlis = $crawler->filter('td[data-socket-key="JPY"][data-socket-attr="bid"]')->first();
$jpyElementSatis = $crawler->filter('td[data-socket-key="JPY"][data-socket-attr="ask"]')->first();

$exchangeRateTextJpyAlis = $jpyElementAlis->text();
$exchangeRateTextJpySatis = $jpyElementSatis->text();

$exchangeRateJpyAlis = str_replace(',', '.', $exchangeRateTextJpyAlis);
$exchangeRateJpySatis = str_replace(',', '.', $exchangeRateTextJpySatis);

// KWD
$kwdElementAlis = $crawler->filter('td[data-socket-key="KWD"][data-socket-attr="bid"]')->first();
$kwdElementSatis = $crawler->filter('td[data-socket-key="KWD"][data-socket-attr="ask"]')->first();

$exchangeRateTextKwdAlis = $kwdElementAlis->text();
$exchangeRateTextKwdSatis = $kwdElementSatis->text();

$exchangeRateKwdAlis = str_replace(',', '.', $exchangeRateTextKwdAlis);
$exchangeRateKwdSatis = str_replace(',', '.', $exchangeRateTextKwdSatis);

// ZAR
$zarElementAlis = $crawler->filter('td[data-socket-key="ZAR"][data-socket-attr="bid"]')->first();
$zarElementSatis = $crawler->filter('td[data-socket-key="ZAR"][data-socket-attr="ask"]')->first();

$exchangeRateTextZarAlis = $zarElementAlis->text();
$exchangeRateTextZarSatis = $zarElementSatis->text();

$exchangeRateZarAlis = str_replace(',', '.', $exchangeRateTextZarAlis);
$exchangeRateZarSatis = str_replace(',', '.', $exchangeRateTextZarSatis);

// BHD
$bhdElementAlis = $crawler->filter('td[data-socket-key="BHD"][data-socket-attr="bid"]')->first();
$bhdElementSatis = $crawler->filter('td[data-socket-key="BHD"][data-socket-attr="ask"]')->first();

$exchangeRateTextBhdAlis = $bhdElementAlis->text();
$exchangeRateTextBhdSatis = $bhdElementSatis->text();

$exchangeRateBhdAlis = str_replace(',', '.', $exchangeRateTextBhdAlis);
$exchangeRateBhdSatis = str_replace(',', '.', $exchangeRateTextBhdSatis);

// LYD
$lydElementAlis = $crawler->filter('td[data-socket-key="LYD"][data-socket-attr="bid"]')->first();
$lydElementSatis = $crawler->filter('td[data-socket-key="LYD"][data-socket-attr="ask"]')->first();

$exchangeRateTextLydAlis = $lydElementAlis->text();
$exchangeRateTextLydSatis = $lydElementSatis->text();

$exchangeRateLydAlis = str_replace(',', '.', $exchangeRateTextLydAlis);
$exchangeRateLydSatis = str_replace(',', '.', $exchangeRateTextLydSatis);

// SAR
$sarElementAlis = $crawler->filter('td[data-socket-key="SAR"][data-socket-attr="bid"]')->first();
$sarElementSatis = $crawler->filter('td[data-socket-key="SAR"][data-socket-attr="ask"]')->first();

$exchangeRateTextSarAlis = $sarElementAlis->text();
$exchangeRateTextSarSatis = $sarElementSatis->text();

$exchangeRateSarAlis = str_replace(',', '.', $exchangeRateTextSarAlis);
$exchangeRateSarSatis = str_replace(',', '.', $exchangeRateTextSarSatis);

// IQD
$iqdElementAlis = $crawler->filter('td[data-socket-key="IQD"][data-socket-attr="bid"]')->first();
$iqdElementSatis = $crawler->filter('td[data-socket-key="IQD"][data-socket-attr="ask"]')->first();

$exchangeRateTextIqdAlis = $iqdElementAlis->text();
$exchangeRateTextIqdSatis = $iqdElementSatis->text();

$exchangeRateIqdAlis = str_replace(',', '.', $exchangeRateTextIqdAlis);
$exchangeRateIqdSatis = str_replace(',', '.', $exchangeRateTextIqdSatis);

// ILS
$ilsElementAlis = $crawler->filter('td[data-socket-key="ILS"][data-socket-attr="bid"]')->first();
$ilsElementSatis = $crawler->filter('td[data-socket-key="ILS"][data-socket-attr="ask"]')->first();

$exchangeRateTextIlsAlis = $ilsElementAlis->text();
$exchangeRateTextIlsSatis = $ilsElementSatis->text();

$exchangeRateIlsAlis = str_replace(',', '.', $exchangeRateTextIlsAlis);
$exchangeRateIlsSatis = str_replace(',', '.', $exchangeRateTextIlsSatis);

try {
    // Örnek veritabanı ekleme işlemi
    $stmt = $pdo->prepare('UPDATE doviz SET doviz_alis = :exchangeRateAlis, doviz_satis = :exchangeRateSatis WHERE doviz_kod = :currency');

    // USD için veri ekleme
    $stmt->bindValue(':currency', 'USD');
    $stmt->bindValue(':exchangeRateAlis', $exchangeRateUsdAlis);
    $stmt->bindValue(':exchangeRateSatis', $exchangeRateUsdSatis);
    $stmt->execute();

    // EUR için veri ekleme
    $stmt->bindValue(':currency', 'EUR');
    $stmt->bindValue(':exchangeRateAlis', $exchangeRateEurAlis);
    $stmt->bindValue(':exchangeRateSatis', $exchangeRateEurSatis);
    $stmt->execute();

    // GBP için veri ekleme
    $stmt->bindValue(':currency', 'GBP');
    $stmt->bindValue(':exchangeRateAlis', $exchangeRateGbpAlis);
    $stmt->bindValue(':exchangeRateSatis', $exchangeRateGbpSatis);
    $stmt->execute();

    // CHF için veri ekleme
    $stmt->bindValue(':currency', 'CHF');
    $stmt->bindValue(':exchangeRateAlis', $exchangeRateChfAlis);
    $stmt->bindValue(':exchangeRateSatis', $exchangeRateChfSatis);
    $stmt->execute();

    // CAD için veri ekleme
    $stmt->bindValue(':currency', 'CAD');
    $stmt->bindValue(':exchangeRateAlis', $exchangeRateCadAlis);
    $stmt->bindValue(':exchangeRateSatis', $exchangeRateCadSatis);
    $stmt->execute();

    // RUB için veri ekleme
    $stmt->bindValue(':currency', 'RUB');
    $stmt->bindValue(':exchangeRateAlis', $exchangeRateRubAlis);
    $stmt->bindValue(':exchangeRateSatis', $exchangeRateRubSatis);
    $stmt->execute();

    // AED için veri ekleme
    $stmt->bindValue(':currency', 'AED');
    $stmt->bindValue(':exchangeRateAlis', $exchangeRateAedAlis);
    $stmt->bindValue(':exchangeRateSatis', $exchangeRateAedSatis);
    $stmt->execute();

    // AUD için veri ekleme
    $stmt->bindValue(':currency', 'AUD');
    $stmt->bindValue(':exchangeRateAlis', $exchangeRateAudAlis);
    $stmt->bindValue(':exchangeRateSatis', $exchangeRateAudSatis);
    $stmt->execute();

    // DKK için veri ekleme
    $stmt->bindValue(':currency', 'DKK');
    $stmt->bindValue(':exchangeRateAlis', $exchangeRateDkkAlis);
    $stmt->bindValue(':exchangeRateSatis', $exchangeRateDkkSatis);
    $stmt->execute();

    // SEK için veri ekleme
    $stmt->bindValue(':currency', 'SEK');
    $stmt->bindValue(':exchangeRateAlis', $exchangeRateSekAlis);
    $stmt->bindValue(':exchangeRateSatis', $exchangeRateSekSatis);
    $stmt->execute();

    // NOK için veri ekleme
    $stmt->bindValue(':currency', 'NOK');
    $stmt->bindValue(':exchangeRateAlis', $exchangeRateNokAlis);
    $stmt->bindValue(':exchangeRateSatis', $exchangeRateNokSatis);
    $stmt->execute();

    // JPY için veri ekleme
    $stmt->bindValue(':currency', 'JPY');
    $stmt->bindValue(':exchangeRateAlis', $exchangeRateJpyAlis);
    $stmt->bindValue(':exchangeRateSatis', $exchangeRateJpySatis);
    $stmt->execute();

    // KWD için veri ekleme
    $stmt->bindValue(':currency', 'KWD');
    $stmt->bindValue(':exchangeRateAlis', $exchangeRateKwdAlis);
    $stmt->bindValue(':exchangeRateSatis', $exchangeRateKwdSatis);
    $stmt->execute();

    // ZAR için veri ekleme
    $stmt->bindValue(':currency', 'ZAR');
    $stmt->bindValue(':exchangeRateAlis', $exchangeRateZarAlis);
    $stmt->bindValue(':exchangeRateSatis', $exchangeRateZarSatis);
    $stmt->execute();

    // BHD için veri ekleme
    $stmt->bindValue(':currency', 'BHD');
    $stmt->bindValue(':exchangeRateAlis', $exchangeRateBhdAlis);
    $stmt->bindValue(':exchangeRateSatis', $exchangeRateBhdSatis);
    $stmt->execute();

    // LYD için veri ekleme
    $stmt->bindValue(':currency', 'LYD');
    $stmt->bindValue(':exchangeRateAlis', $exchangeRateLydAlis);
    $stmt->bindValue(':exchangeRateSatis', $exchangeRateLydSatis);
    $stmt->execute();

    // SAR için veri ekleme
    $stmt->bindValue(':currency', 'SAR');
    $stmt->bindValue(':exchangeRateAlis', $exchangeRateSarAlis);
    $stmt->bindValue(':exchangeRateSatis', $exchangeRateSarSatis);
    $stmt->execute();

    // IQD için veri ekleme
    $stmt->bindValue(':currency', 'IQD');
    $stmt->bindValue(':exchangeRateAlis', $exchangeRateIqdAlis);
    $stmt->bindValue(':exchangeRateSatis', $exchangeRateIqdSatis);
    $stmt->execute();

    // ILS için veri ekleme
    $stmt->bindValue(':currency', 'ILS');
    $stmt->bindValue(':exchangeRateAlis', $exchangeRateIlsAlis);
    $stmt->bindValue(':exchangeRateSatis', $exchangeRateIlsSatis);
    $stmt->execute();

    // echo "Veriler başarıyla veritabanına aktarıldı.";
} catch (PDOException $e) {
    echo "Veritabanı hatası: " . $e->getMessage();
}
