<?php

// Yalnızca çerezleri kullan
ini_set('session.use_only_cookies', 1);
// Sıkı modu etkinleştir
ini_set('session.use_strict_mode', 1);

// Oturum çerez parametrelerini ayarla
session_set_cookie_params([
    'lifetime' => '1800',
    'domain'=>'localhost',
    'path' => '/',
    'secure' => true,
    'httponly' => true
]);

// Oturumu başlat
session_start();

// Oturumda kullanıcı kimliği varsa
if(isset($_SESSION["kullanici_id"])) {
    // Son çerez yenileme zamanı belirlenmediyse
    if(!isset($_SESSION["last_regeneration"])) {
        // Oturumu yenile
        regenerate_session_id_loggedin();
    } else {
        $interval = 60 * 30; // 30 dakika
        // Son çerez yenileme zamanı aralığı kontrol et
        if(time() - $_SESSION["last_regeneration"] >= $interval) {
            // Oturumu yenile
            regenerate_session_id_loggedin();
        }
    }    
} else { // Oturumda kullanıcı kimliği yoksa
    // Son çerez yenileme zamanı belirlenmediyse
    if(!isset($_SESSION["last_regeneration"])) {
        // Oturumu yenile
        regenerate_session_id();
    } else {
        $interval = 60 * 30; // 30 dakika
        // Son çerez yenileme zamanı aralığı kontrol et
        if(time() - $_SESSION["last_regeneration"] >= $interval) {
            // Oturumu yenile
            regenerate_session_id();
        }
    }    
}

// Oturumu yenileme fonksiyonu (oturumda kullanıcı kimliği varsa)
function regenerate_session_id_loggedin() {
    // Oturum kimliğini yenile
    session_regenerate_id(true);

    // Kullanıcı kimliğini al
    $userId = $_SESSION["kullanici_id"];
    // Yeni oturum kimliği oluştur
    $newSessionId = session_create_id();
    $sessionId = $newSessionId . "_" . $userId;
    // Yeni oturum kimliğini ayarla
    session_id($sessionId);
    // Son çerez yenileme zamanını güncelle
    $_SESSION["last_regeneration"] = time();
}


// Oturumu yenileme fonksiyonu
function regenerate_session_id() {
    // Oturum kimliğini yenile
    session_regenerate_id(true);
    // Son çerez yenileme zamanını güncelle
    $_SESSION["last_regeneration"] = time();
}