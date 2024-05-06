<?php
function createWallet($userId){
    require_once("dbh.inc.php"); // Veritabanı bağlantısını dosyaya dahil et
    
    try {
        // Cüzdan oluşturma SQL sorgusu
        $query = "INSERT INTO cuzdan (kullanici_id) VALUES (:userId)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
        $stmt->execute();

        echo "Cüzdan başarıyla oluşturuldu!";
        
        $pdo = null;
        $stmt = null;
    } catch(PDOException $e) {
        echo "Cüzdan oluşturulurken bir hata oluştu: " . $e->getMessage();
    }
}
function getUserId($Email){
    require_once("dbh.inc.php");
    
    try{
        $query = "SELECT * FROM kullanici WHERE kullanici_email=:email";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':email',$Email,PDO::PARAM_INT);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if($row){
            $user_ID=$row['kullanici_id'];
            echo "Kullanici id: $user_ID";
        } else{
            echo "Belirtilen kullanıcı bulunmadı";
        }
        $pdo = null;
        $stmt = null;

        die();
    }catch(PDOException $e){
        echo "Veritabanından kullanici_id alınamadı." . $e->getMessage();
    }
    return $user_ID;
}