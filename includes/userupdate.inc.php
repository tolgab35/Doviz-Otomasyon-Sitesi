<?php
// Eğer bu dosya POST metoduyla çağrılmışsa:
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // POST verilerini al
    $firstname = $_POST["edit-firstname"];
    $lastname = $_POST["edit-lastname"];
    $email = $_POST["edit-email"];
    $phone = $_POST["edit-phone"];
    $password = $_POST["edit-password"];

    try {
        require_once "dbh.inc.php"; // Veritabanı bağlantısını sağlayan dosyayı dahil et

        session_start(); // Oturumu başlat

        // Oturumdan kullanıcı kimliğini al
        $user_id = $_SESSION['kullanici_id'];

        // Kullanıcıyı güncelleme sorgusunu hazırla
        $query = "UPDATE kullanici 
            SET kullanici_adi = :firstname, 
                kullanici_soyadi = :lastname,
                kullanici_email = :email,
                kullanici_tel = :phone,
                kullanici_sifre = :password 
            WHERE kullanici_id = :user_id;";

        // Sorguyu hazırla ve çalıştır
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->bindParam(":firstname", $firstname);
        $stmt->bindParam(":lastname", $lastname);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":password", $password);

        $stmt->execute();

        // Bağlantıları kapat ve işlemi sonlandır
        $pdo = null;
        $stmt = null;

        // Ana sayfaya yönlendir
        header("Location: ../piyasalar-after-login.php");
        die();
    } catch (PDOException $e) {
        die("Sorgu başarısız". $e->getMessage());  
    }
} 
// Eğer dosya POST metoduyla çağrılmamışsa, ana sayfaya yönlendir
else {
    header("Location: ../index.php");
}