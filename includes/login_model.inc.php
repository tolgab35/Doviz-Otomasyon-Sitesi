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