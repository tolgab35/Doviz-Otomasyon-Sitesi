<?php
require 'vendor/autoload.php'; // Goutte kütüphanesini dahil edin

use Goutte\Client;

$client = new Client(); // Goutte istemcisini oluşturun
$crawler = $client->request('GET', 'https://www.doviz.com/doviz-cevirici'); // Hedef web sitesine istek gönderin

// Döviz kurlarını içeren elementleri seçin
$crawler->filter('.market-data')->each(function ($node) {
    $currency = $node->filter('.market-data-symbol')->text();
    $exchangeRate = $node->filter('.market-data-buying')->text();

    // Veritabanına ekleme işlemleri burada yapılabilir
    // Örneğin: $currency ve $exchangeRate değerlerini veritabanına ekleyebilirsiniz
    // Veritabanı işlemleri için kullanacağınız kütüphane ve yöntemlere göre işlemleri gerçekleştirin
    echo "Currency: $currency, Exchange Rate: $exchangeRate\n";
});
