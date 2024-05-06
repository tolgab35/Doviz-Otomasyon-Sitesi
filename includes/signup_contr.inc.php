<?php
declare(strict_types=1);

// Boş giriş alanlarını kontrol eder
function is_input_empty(string $firstname, string $lastname, string $email, $phone, string $password) {
    if (empty($firstname) || empty($lastname) || empty($email) || empty($phone) || empty($password)) {
        return true; // Boş alan varsa true döndür
    } else {
        return false; // Boş alan yoksa false döndür
    }
}

// Geçersiz e-posta adreslerini kontrol eder
function is_email_invalid(string $email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true; // Geçersiz e-posta adresi ise true döndür
    } else {
        return false; // Geçerli e-posta adresi ise false döndür
    }
}

// Veritabanında e-posta adresinin kayıtlı olup olmadığını kontrol eder
function is_email_registered(object $pdo, string $email) {
    if (get_email($pdo, $email)) {
        return true; // E-posta adresi kayıtlı ise true döndür
    } else {
        return false; // E-posta adresi kayıtlı değilse false döndür
    }
}

// Kullanıcı oluşturur
function create_user(object $pdo, string $firstname, string $lastname, string $email, $phone, string $password) {
    set_user($pdo, $firstname, $lastname, $email, $phone, $password); // Kullanıcı oluştur
}
?>
