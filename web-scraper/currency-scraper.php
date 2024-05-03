<?php
require 'C:/xampp/htdocs/Doviz-Otomasyon-Sitesi/goutte-web-scraping/vendor/autoload.php'; // Goutte kütüphanesini dahil edin
require_once "C:/xampp/htdocs/Doviz-Otomasyon-Sitesi/includes/dbh.inc.php"; // Veritabanı bağlantısını dahil edin

use Goutte\Client;

$client = new Client(); // Goutte istemcisini oluşturun
$crawler = $client->request('GET', 'https://www.doviz.com/doviz-cevirici'); // Hedef web sitesine istek gönderin

// Döviz kuru değerini içeren elementi seçin
$usdElement = $crawler->filter('[data-socket-key="USD"]')->first();

if ($usdElement->count() > 0) {
    $exchangeRateText = $usdElement->text(); // Döviz kuru değeri

    // Virgülü noktaya çevirerek sayısal değere dönüştür
    $exchangeRate = str_replace(',', '.', $exchangeRateText);

    // Veritabanına ekleme işlemleri burada yapılabilir
    // Örneğin: $currency ve $exchangeRate değerlerini veritabanına ekleyebilirsiniz
    // Veritabanı işlemleri için kullanacağınız kütüphane ve yöntemlere göre işlemleri gerçekleştirin

    try {
        // Örnek veritabanı ekleme işlemi
        $stmt = $pdo->prepare('INSERT INTO doviz (doviz_kod, doviz_alis) VALUES (:currency, :exchangeRate)');
        $stmt->bindValue(':currency', 'USD'); // Para birimi kodu
        $stmt->bindValue(':exchangeRate', $exchangeRate);

        // Verileri döngü ile ekleyebilirsiniz
        $stmt->execute();
        echo "Veriler başarıyla veritabanına aktarıldı.";
    } catch (PDOException $e) {
        echo "Veritabanı hatası: " . $e->getMessage();
    }

    echo "Currency: USD, Exchange Rate: $exchangeRate\n";
} else {
    echo "USD döviz kuru bulunamadı.\n";
}
