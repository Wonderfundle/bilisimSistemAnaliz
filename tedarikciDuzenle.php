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
$tedarikci_id = $_POST['tedarikci_id'];
$tedarikci_adi = $_POST['tedarikci_adi'];
$tedarikci_adresi = $_POST['tedarikci_adresi'];

// Güncelleme sorgusu
$sql = "UPDATE tedarikciler SET tedarikci_adi='$tedarikci_adi', tedarikci_adres='$tedarikci_adres' WHERE tedarikci_id=$tedarikci_id";

if ($conn->query($sql) === TRUE) {
    echo "Tedarikçi başarıyla güncellendi";
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}

// Veritabanı bağlantısını kapat
$conn->close();
?>