<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["login-email"];
    $password = $_POST["login-password"];

    try {
        require_once 'dbh.inc.php';
        require_once 'login_model.inc.php';
        require_once 'login_contr.inc.php';

        // ERROR HANDLERS
        $errors = [];

        if(is_input_empty($email, $password)) {
            $errors["empty_input"] = "Tüm alanları doldurun!";
        }

        $result = get_email($pdo, $email);

        if(is_email_wrong($result)) {
            $errors["login_incorrect"] = "Yanlış giriş bilgisi!";
        }
        if(!is_email_wrong($result) && is_password_wrong($password, $result["kullanici_sifre"])) {
            $errors["login_incorrect"] = "";
        }

        require_once "config_session.inc.php";
        
        if($errors) {
            $_SESSION["errors_login"] = $errors;
            header("Location: ../girisyap.php");
            die();
        }

        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $result["kullanici_id"];
        session_id($sessionId);

        $_SESSION["kullanici_id"] = $result["kullanici_id"];
        $_SESSION["kullanici_email"] = htmlspecialchars($result["kullanici_email"]);

        $_SESSION["last_regeneration"] = time();

        header("Location: ../hesap.php?login=success");

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