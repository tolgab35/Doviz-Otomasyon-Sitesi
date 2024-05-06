<?php
declare(strict_types=1);

// Giriş hatalarını kontrol eder ve varsa hata mesajlarını gösterir
function check_login_errors() {
    if(isset($_SESSION["errors_login"])) { // Oturumda giriş hataları varsa
        $errors = $_SESSION["errors_login"]; // Hata mesajlarını al

        echo "<br>"; // Boş bir satır ekle
        foreach ($errors as $error) { // Hataları döngüyle göster
            echo '<p class="form-error">' . $error . '</p>'; // Hata mesajını ekrana yazdır
        }

        unset($_SESSION["errors_login"]); // Hataları temizle
    }
    else if(isset($_GET['login']) && $_GET['login'] === "success") { // Giriş başarılıysa
        // Herhangi bir işlem yapma
    }
}
?>
