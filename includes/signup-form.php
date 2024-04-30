<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstname = $_POST["signup-firstname"];
        $lastname = $_POST["signup-lastname"];
        $email = $_POST["signup-email"];
        $phone = $_POST["signup-phone"];
        $password = $_POST["signup-password"];

        try {
            require_once "dbh.inc.php";

            $query = "INSERT INTO kullanici (kullanici_adi, kullanici_soyadi, kullanici_email, kullanici_tel, kullanici_sifre) 
            VALUES (?, ?, ?, ?, ?);";

            $stmt = $pdo->prepare($query);
            $stmt->execute([$firstname, $lastname, $email, $phone, $password]);

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
