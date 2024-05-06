<?php
    // Veritabanı bilgileri
    $dsn = "mysql:host=localhost;dbname=doviz_otomasyon"; // Veritabanı sunucusu ve veritabanı adı
    $dbusername = "root1"; // Veritabanı kullanıcı adı
    $dbpassword = "123456"; // Veritabanı şifresi

    try {
        // PDO bağlantısı oluştur
        $pdo = new PDO($dsn, $dbusername, $dbpassword);
        // Hata modunu ayarla
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) { 
        // Hata durumunda mesajı göster
        echo "Bağlantı başarısız". $e->getMessage();
    }   
?>
