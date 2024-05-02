<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $kullanici_id = "1";

        try {
            require_once "dbh.inc.php";

            $query = "DELETE FROM kullanici WHERE kullanici_id = :kullanici_id;";

            $stmt = $pdo->prepare($query);

            $stmt->bindParam(":kullanici_id", $kullanici_id);

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