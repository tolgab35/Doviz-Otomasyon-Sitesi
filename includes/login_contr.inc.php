<?php
declare(strict_types=1);

// Giriş alanlarının boş olup olmadığını kontrol eder
function is_input_empty(string $email, string $password) {
    if(empty($email) || empty($password)) {
        return true; // Eğer alanlar boşsa true döndür
    } else {
        return false; // Alanlar doluysa false döndür
    }
}

// E-posta doğrulama sonucunu kontrol eder
function is_email_wrong(bool|array $result) {
    if (!$result) {
        return true; // Yanlış e-posta ise true döndür
    } else {
        return false; // Doğru e-posta ise false döndür
    }
}

// Şifre doğruluğunu kontrol eder
function is_password_wrong(string $password, string $hashedPassword) {
    if (!password_verify($password, $hashedPassword)) {
        return true; // Yanlış şifre ise true döndür
    } else {
        return false; // Doğru şifre ise false döndür
    }
}
?>
