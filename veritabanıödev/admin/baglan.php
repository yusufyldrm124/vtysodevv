<?php
$isim  = trim($_POST['isim']); 
$tel   = trim($_POST['tel']);   
$mail  = trim($_POST['mail']);   
$konu  = trim($_POST['konu']);  
$mesaj = trim($_POST['mesaj']);  

$servername = "localhost";
$username   = "root";
$password   = "";       
$dbname     = "panel_giris";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ba\u011flant\u0131 hatas\u0131: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");


$stmt = $conn->prepare(
    "INSERT INTO iletisim_formu (isim, tel, mail, konu, mesaj) VALUES (?, ?, ?, ?, ?)"
);
if ($stmt === false) {
    die("Sorgu haz\u0131rlanam\u0131yor: " . $conn->error);
}

$stmt->bind_param("sssss", $isim, $tel, $mail, $konu, $mesaj);

if ($stmt->execute()) {
    echo "Veri başarıyla kaydedildi.";
} else {
    echo "Kayıt hatası: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
}
