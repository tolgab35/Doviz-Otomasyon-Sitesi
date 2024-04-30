<?php

    $dsn = "mysql:host=localhost;dbname=doviz_otomasyonu";
    $dbusername = "root1";
    $dbpassword = "123456"; 

    try {
        $pdo = new PDO($dsn, $dbusername, $dbpassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) { 
        echo "Bağlantı başarısız". $e->getMessage();
    }
?>