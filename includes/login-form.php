<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email=$POST ["signup-email"];
    $password=$POST ["signup-password"];
    try {
        require_once 'dbh.inc.php'; // Veritabanı ile bağlantı kontrolü

        $query="SELECT * FROM kullanici WHERE kullanici_email='$email'";
        $result = $pdo->prepare($query);
        
        if($result->num_rows==1) {
            $row= $result->fetch_assoc();
            if(password_verify($password,$row["password"])) {
                $_SESSION['loggedin']=true;
                $_SESSION['email']=$email;
                header("location: ../piyasalar-after-login.html");
            }else{
                echo "Hatalı Şifre";
            }
        }else{
            echo "Kullanıcı bulunamadı";
        }
        
        
    } catch (PDOException $e) {
        die("Sorgu Başarısız". $e->getMessage());
    }

}else{
    header("Location: ../girisyap.html");
}
    
    