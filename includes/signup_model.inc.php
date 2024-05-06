<?php

declare(strict_types=1);

function get_email(object $pdo, string $email) {
    session_start();

    $query = "SELECT * FROM kullanici
        WHERE kullanici_email = :kullanici_email";
    
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":kullanici_email", $email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function set_user(object $pdo, string $firstname, string $lastname, string $email, $phone, string $password) {
    $query = "INSERT INTO kullanici (kullanici_adi, kullanici_soyadi, kullanici_email, kullanici_tel, kullanici_sifre)
        VALUES (:kullanici_adi, :kullanici_soyadi, :kullanici_email, :kullanici_tel, :kullanici_sifre);";
    
    $stmt = $pdo->prepare($query);

    $options = [
        'cost' => 12
    ];
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT, $options);

    $stmt->bindParam(":kullanici_adi", $firstname);
    $stmt->bindParam(":kullanici_soyadi", $lastname);
    $stmt->bindParam(":kullanici_email", $email);
    $stmt->bindParam(":kullanici_tel", $phone);
    $stmt->bindParam(":kullanici_sifre", $hashedPassword);
    $stmt->execute();
}