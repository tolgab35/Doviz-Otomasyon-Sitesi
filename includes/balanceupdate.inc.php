<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $bakiye = $_POST["edit-bakiye"];
        $toplamislem = $_POST["edit-toplamislem"];

        try {
            require_once "dbh.inc.php";
            
            session_start();

            $user_id = 21;

            $query = "UPDATE cuzdan 
            SET bakiye = :bakiye, 
            toplam_islem_mik = :toplam_islem_mik,
            WHERE kullanici_id_fk = :kullanici_id;";

            $stmt = $pdo->prepare($query);

            $stmt->bindParam(":bakiye", $bakiye);
            $stmt->bindParam(":toplam_islem_mik", $toplamislem);
            $stmt->bindParam(":kullanici_id", $user_id);

            $stmt->execute();

            $pdo = null;
            $stmt = null;

            header("Location: ../cuzdan.php");

            die();
            
        } catch (PDOException $e) {
            die("Sorgu başarısız". $e->getMessage());  
        }
    } else {
        header("Location: ../index.php");
    }