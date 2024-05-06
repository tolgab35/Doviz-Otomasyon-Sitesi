<?php
// Eğer bu dosya POST metoduyla çağrılmışsa:
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kullanıcı kimliği (örneğin: 8) belirle
    $kullanici_id = "8";

    try {
        require_once "dbh.inc.php"; // Veritabanı bağlantısını sağlayan dosyayı dahil et

        // Kullanıcıyı silme sorgusunu hazırla
        $query = "DELETE FROM kullanici WHERE kullanici_id = :kullanici_id;";

        // Sorguyu hazırla ve çalıştır
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":kullanici_id", $kullanici_id);
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
