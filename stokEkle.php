<?php
// veritabanina_ekle.php

// Veritabanı bağlantısı
$servername = "localhost"; // Veritabanı sunucusu adı
$username = "root"; // Veritabanı kullanıcı adı
$password = ""; // Veritabanı şifre
$dbname = "bilisimdeneme"; // Veritabanı adı

// Veritabanına bağlanma
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol etme
if ($conn->connect_error) {
    die("Veritabanına bağlantı hatası: " . $conn->connect_error);
}

// POST verilerini alma
$stok_id = $_POST["stok_id"];
$urun_id = $_POST['urun_id'];
$depo_id = $_POST['depo_id'];
$miktar = $_POST['miktar'];

$sql = "INSERT INTO stok (stok_id, urun_id, depo_id, miktar) VALUES ('$stok_id', '$urun_id','$depo_id','$miktar')";

// SQL sorgusu oluşturma
//$sql = "INSERT INTO urunler (urun_id,urun_adi, fiyat, stok_miktari) VALUES ($urun_id', '$urun_adi', '$urun_fiyati', '$urun_adedi')";

// Sorguyu çalıştırma ve sonucu kontrol etme
if ($conn->query($sql) === TRUE) {
    echo "Veri başarıyla eklendi";
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}

// Veritabanı bağlantısını kapatma
$conn->close();
?>