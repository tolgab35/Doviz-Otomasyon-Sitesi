<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["login-email"]; // Formdan e-posta adresini al
    $password = $_POST["login-password"]; // Formdan şifreyi al

    try {
        require_once 'dbh.inc.php'; // Veritabanı bağlantı dosyasını dahil et
        require_once 'login_model.inc.php'; // Giriş model dosyasını dahil et
        require_once 'login_contr.inc.php'; // Giriş controller dosyasını dahil et

        // HATA YÖNETİCİLERİ
        $errors = []; // Hata listesi

        // Giriş alanlarının boş olup olmadığını kontrol et
        if(is_input_empty($email, $password)) {
            $errors["empty_input"] = "Tüm alanları doldurun!";
        }

        // Veritabanından e-posta adresini getir
        $result = get_email($pdo, $email);
        
        // E-posta adresi yanlışsa hata ekle
        if(is_email_wrong($result)) {
            $errors["login_incorrect"] = "Yanlış giriş bilgisi!";
        }

        // E-posta doğruysa ve şifre yanlışsa hata ekle
        if(!is_email_wrong($result) && is_password_wrong($password, $result["kullanici_sifre"])) {
            $errors["login_incorrect"] = "";
        }

        require_once "config_session.inc.php"; // Oturum yapılandırma dosyasını dahil et
        
        // Hatalar varsa oturumu güncelle ve hataları oturuma ekle, sonra giriş sayfasına yönlendir
        if($errors) {
            $_SESSION["errors_login"] = $errors;
            header("Location: ../girisyap.php");
            die();
        }
        
        // Oturumu yenile ve kullanıcı bilgilerini oturuma ekle
        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $result["kullanici_id"];
        session_id($sessionId);

        $_SESSION["kullanici_id"] = $result["kullanici_id"];
        $_SESSION["kullanici_email"] = htmlspecialchars($result["kullanici_email"]);

        $_SESSION["last_regeneration"] = time();

        // Başarılı giriş durumunda hesap sayfasına yönlendir
        header("Location: ../hesap.php?login=success");

        $pdo = null; // PDO bağlantısını kapat
        $stmt = null; // PDO statement'ını kapat
        
        die(); // İşlemi sonlandır
    } catch (PDOException $e) {
        die("Sorgu başarısız". $e->getMessage()); // Hata durumunda mesajı göster
    }
} else {
    header("Location: ../index.php"); // POST isteği değilse ana sayfaya yönlendir
    die(); // İşlemi sonlandır
}