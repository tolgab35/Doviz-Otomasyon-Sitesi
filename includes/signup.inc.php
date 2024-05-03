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

            create_user($pdo, $firstname, $lastname, $email, $phone, $password);
           
            header("Location: ../piyasalar-after-login.php?signup=success");

            $pdo = null;
            $stmt = null;

            die();
        } catch (PDOException $e) {
            die("Sorgu başarısız". $e->getMessage());  
        }
    } else {
        header("Location: ../index.php");
        die();
    }
