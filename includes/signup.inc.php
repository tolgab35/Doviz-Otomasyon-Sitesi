<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstname = $_POST["signup-firstname"];
        $lastname = $_POST["signup-lastname"];
        $email = $_POST["signup-email"];
        $phone = $_POST["signup-phone"];
        $password = $_POST["signup-password"];

        try {
            require_once "dbh.inc.php";
            require_once "signup_model.inc.php";
            require_once "signup_contr.inc.php";

            // ERROR HANDLERS
            $errors = [];

            if (is_input_empty($firstname, $lastname, $email, $phone, $password)) {
                $errors["empty_input"] = "Tüm alanları doldurun!";
            }
            if (is_email_invalid($email)) {
                $errors["invalid_email"] = "Geçersiz email!";
            }
            if (is_email_registered($pdo, $email)) {
                $errors["registered_email"] = "Email zaten kayıtlı!";
            }

            require_once "config_session.inc.php";
            
            if($errors) {
                $_SESSION["errors_signup"] = $errors;
                header("Location: ../kayitol.php");

                die();
            }

            $query = "INSERT INTO kullanici (kullanici_adi, kullanici_soyadi, kullanici_email, kullanici_tel, kullanici_sifre) 
            VALUES (:kullanici_adi, :kullanici_soyadi, :kullanici_email, :kullanici_tel, :kullanici_sifre);";

            $stmt = $pdo->prepare($query);

            $stmt->bindParam(":kullanici_adi", $firstname);
            $stmt->bindParam(":kullanici_soyadi", $lastname);
            $stmt->bindParam(":kullanici_email", $email);
            $stmt->bindParam(":kullanici_tel", $phone);
            $stmt->bindParam(":kullanici_sifre", $password);

            $stmt->execute();

            $pdo = null;
            $stmt = null;

            header("Location: ../piyasalar-after-login.php");

            die();
        } catch (PDOException $e) {
            die("Sorgu başarısız". $e->getMessage());  
        }
    } else {
        header("Location: ../index.php");
    }