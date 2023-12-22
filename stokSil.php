<?php
include "02_baglan.php";
// POST verilerini al
$stok_id = $_POST['stok_id'];

// Silme sorgusu
$sql = "DELETE FROM stok WHERE stok_id = $stok_id";

if ($conn->query($sql) === TRUE) {
    echo "Stok başarıyla silindi";
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}

// Veritabanı bağlantısını kapat
$conn->close();
?>