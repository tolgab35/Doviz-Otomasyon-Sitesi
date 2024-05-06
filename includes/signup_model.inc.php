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

// Yeni bir kullanıcı oluşturur ve veritabanına kaydeder
function set_user(object $pdo, string $firstname, string $lastname, string $email, $phone, string $password) {
    // Veritabanı ekleme sorgusu
    $query = "INSERT INTO kullanici (kullanici_adi, kullanici_soyadi, kullanici_email, kullanici_tel, kullanici_sifre)
        VALUES (:kullanici_adi, :kullanici_soyadi, :kullanici_email, :kullanici_tel, :kullanici_sifre);";
    
    // Sorguyu hazırla
    $stmt = $pdo->prepare($query);

    // Şifreyi hashle
    $options = [
        'cost' => 12
    ];
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT, $options);

    // Parametreleri bağla
    $stmt->bindParam(":kullanici_adi", $firstname);
    $stmt->bindParam(":kullanici_soyadi", $lastname);
    $stmt->bindParam(":kullanici_email", $email);
    $stmt->bindParam(":kullanici_tel", $phone);
    $stmt->bindParam(":kullanici_sifre", $hashedPassword);

    // Sorguyu çalıştır
    $stmt->execute();
}