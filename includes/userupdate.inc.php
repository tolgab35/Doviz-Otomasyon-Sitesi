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
                    kullanici_sifre = :password WHERE kullanici_id = 1;";

            $stmt = $pdo->prepare($query);

            $stmt->bindParam(":kullanici_adi", $firstname);
            $stmt->bindParam(":kullanici_soyadi", $lastname);
            $stmt->bindParam(":kullanici_email", $email);
            $stmt->bindParam(":kullanici_tel", $phone);
            $stmt->bindParam(":kullanici_sifre", $password);

            $stmt->execute();

            $pdo = null;
            $stmt = null;

            header("Location: ../piyasalar-after-login.html");

            die();
        } catch (PDOException $e) {
            die("Sorgu başarısız". $e->getMessage());  
        }
    } else {
        header("Location: ../index.html");
    }