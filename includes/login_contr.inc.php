<?php

declare(strict_types=1);

function is_input_empty(string $email, string $password) {
    if(empty($email) || empty($password)) {
        return true; // Eğer alanlar boşsa true döndür
    } else {
        return false; // Alanlar doluysa false döndür
    }
}

function is_email_wrong(bool|array $result) {
    if (!$result) {
        return true;
    } else {
        return false;
    }
}

function is_password_wrong(string $password, string $hashedPassword) {
    if (!password_verify($password, $hashedPassword)) {
        return true;
    } else {
        return false;
    }
}