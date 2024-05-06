<?php
    // İsteğin methodunu kontrol et (POST ise devam et)
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // Formdan değerleri al
        $bakiye = $_POST["edit-bakiye"];
        $toplamislem = $_POST["edit-toplamislem"];

        try {
            // Veritabanı bağlantı dosyasını dahil et
            require_once "dbh.inc.php";
            
            // Oturumu başlat
            session_start();
            
            // Kullanıcı kimliğini belirle
            $user_id = 21;

            // SQL güncelleme sorgusunu hazırla
            $query = "UPDATE cuzdan 
            SET bakiye = :bakiye, 
            toplam_islem_mik = :toplam_islem_mik,
            WHERE kullanici_id_fk = :kullanici_id;";

            // Sorguyu hazırla
            $stmt = $pdo->prepare($query);

            // Parametreleri bağla
            $stmt->bindParam(":bakiye", $bakiye);
            $stmt->bindParam(":toplam_islem_mik", $toplamislem);
            $stmt->bindParam(":kullanici_id", $user_id);

            // Sorguyu çalıştır
            $stmt->execute();

            // Bağlantıyı ve sorguyu kapat
            $pdo = null;
            $stmt = null;

            // Belirtilen sayfaya yönlendir
            header("Location: ../cuzdan.php");

            // İşlemi sonlandır
            die();
            
        } catch (PDOException $e) {
            // Hataları ele al
            die("Sorgu başarısız". $e->getMessage());  
        }
    } else {
        // POST isteği değilse, başka bir sayfaya yönlendir
        header("Location: ../index.php");
    }