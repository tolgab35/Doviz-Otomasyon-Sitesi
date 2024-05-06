<?php

// Eğer bu dosya POST metoduyla çağrılmışsa:
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // POST verilerini al
    $firstname = $_POST["signup-firstname"];
    $lastname = $_POST["signup-lastname"];
    $email = $_POST["signup-email"];
    $phone = $_POST["signup-phone"];
    $password = $_POST["signup-password"];

    try {
        require_once "dbh.inc.php"; // Veritabanı bağlantısını sağlayan dosyayı dahil et
        require_once "signup_model.inc.php"; // Kayıt modeli işlemlerini sağlayan dosyayı dahil et
        require_once "signup_contr.inc.php"; // Kayıt kontrolcüsü işlemlerini sağlayan dosyayı dahil et

        // Hata yönetimi
        $errors = [];

        // Boş giriş kontrolü yap
        if (is_input_empty($firstname, $lastname, $email, $phone, $password)) {
            $errors["empty_input"] = "Tüm alanları doldurun!";
        }

        // Geçersiz email kontrolü yap
        $result = get_email($pdo, $email);
        if (is_email_invalid($email)) {
            $errors["invalid_email"] = "Geçersiz email!";
        }

        // Kayıtlı email kontrolü yap
        if (is_email_registered($pdo, $email)) {
            $errors["registered_email"] = "Email zaten kayıtlı!";
        }

        require_once "config_session.inc.php"; // Oturum yapılandırmasını sağlayan dosyayı dahil et

        // Eğer hatalar varsa, hataları oturumda sakla ve kayıt sayfasına yönlendir
        if($errors) {
            $_SESSION["errors_signup"] = $errors;
            header("Location: ../kayitol.php");
            die();
        }

        // Yeni bir oturum kimliği oluştur
        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $result["kullanici_id"];
        session_id($sessionId);
    
        // Oturuma kullanıcı kimliği ve email bilgilerini sakla
        $_SESSION["kullanici_id"] = $result["kullanici_id"];
        $_SESSION["kullanici_email"] = htmlspecialchars($result["kullanici_email"]);
    
        $_SESSION["last_regeneration"] = time(); // Oturum yenileme zamanını sakla

        // Kullanıcıyı veritabanına ekle
        create_user($pdo, $firstname, $lastname, $email, $phone, $password);
           
        // Kayıt başarılı mesajıyla birlikte ana sayfaya yönlendir
        header("Location: ../piyasalar-after-login.php?signup=success");

        // Bağlantıları kapat ve işlemi sonlandır
        $pdo = null;
        $stmt = null;
        die();
    } catch (PDOException $e) {
        die("Sorgu başarısız". $e->getMessage());  
    }
} 
// Eğer dosya POST metoduyla çağrılmamışsa, ana sayfaya yönlendir
else {
    header("Location: ../index.php");
    die();
}
