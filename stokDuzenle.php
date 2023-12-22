<?php
// Veritabanı bağlantısı için bilgiler
$servername = "localhost"; // Veritabanı sunucusu
$username = "root"; // Veritabanı kullanıcı adı
$password = ""; // Veritabanı şifre
$dbname = "bilisimdeneme"; // Veritabanı adı

// Veritabanına bağlan
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

// POST verilerini al
$stok_id = $_POST["stok_id"];
$urun_id = $_POST['urun_id'];
$depo_id = $_POST['depo_id'];
$miktar = $_POST['miktar'];

// Güncelleme sorgusu
$sql = "UPDATE stok SET urun_id='$urun_id', depo_id='$depo_id', miktar='$miktar' WHERE stok_id=$stok_id";

if ($conn->query($sql) === TRUE) {
    echo "Stok başarıyla güncellendi";
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}

// Veritabanı bağlantısını kapat
$conn->close();
?>