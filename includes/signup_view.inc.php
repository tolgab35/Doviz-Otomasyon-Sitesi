<?php

declare(strict_types=1);

// Bu fonksiyon, kullanıcı kaydı sırasında oluşan hataları kontrol eder ve ekrana uygun mesajları yazdırır
function check_signup_errors() {
    // Eğer $_SESSION['errors_signup'] set edilmişse, yani kayıt sırasında hata varsa:
    if (isset($_SESSION['errors_signup'])) {
        $errors = $_SESSION['errors_signup'];

        echo "<br>";

        // Hataları ekrana yazdırır
        foreach ($errors as $error) {
            echo '<p class="form-error">' . $error . '</p>';
        }

        // Hatalar işlendikten sonra $_SESSION['errors_signup'] unset edilir
        unset($_SESSION['errors_signup']);
    } 
    // Eğer kayıt işlemi başarılıysa ve signup parametresi "success" olarak set edilmişse:
    else if(isset($_GET["signup"]) && $_GET["signup"] === "success") {
        echo "<br>";
        // Başarılı kayıt mesajını ekrana yazdırır
        echo '<p class="form-success">Kayıt Başarılı!</p>';
    }
}  
