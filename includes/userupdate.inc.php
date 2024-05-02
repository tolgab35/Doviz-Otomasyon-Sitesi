<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstname = $_POST["edit-firstname"];
        $lastname = $_POST["edit-lastname"];
        $email = $_POST["edit-email"];
        $phone = $_POST["edit-phone"];
        $password = $_POST["edit-password"];

        try {
            require_once "dbh.inc.php";

            $query = "UPDATE kullanici 
            SET kullanici_adi = :firstname, 
                kullanici_soyadi = :lastname,
                kullanici_email = :email,
                kullanici_tel = :phone,
                kullanici_sifre = :password 
            WHERE kullanici_id = 4;";

            $stmt = $pdo->prepare($query);

            $stmt->bindParam(":firstname", $firstname);
            $stmt->bindParam(":lastname", $lastname);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":phone", $phone);
            $stmt->bindParam(":password", $password);

            $stmt->execute();

            $pdo = null;
            $stmt = null;

            header("Location: ../piyasalar-after-login.php");

            die();
            
        } catch (PDOException $e) {
            echo $firstname;
            echo $lastname;
            echo $email;
            echo $phone;
            echo $password;
            die("Sorgu başarısız". $e->getMessage());  
        }
    } else {
        header("Location: ../index.php");
    }