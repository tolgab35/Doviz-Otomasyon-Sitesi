<?php
declare(strict_types=1);

// Veritabanından belirli bir e-posta adresine sahip kullanıcıyı getirir
function get_email(object $pdo, string $email) {

    session_start(); // Oturumu başlat

    // Veritabanı sorgusu
    $query = "SELECT * FROM kullanici
        WHERE kullanici_email = :kullanici_email";
    
    // Sorguyu hazırla
    $stmt = $pdo->prepare($query);
    // Parametreleri bağla
    $stmt->bindParam(":kullanici_email", $email);
    // Sorguyu çalıştır
    $stmt->execute();

    // Sonucu al
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result; // Sonucu döndür
}
?>
