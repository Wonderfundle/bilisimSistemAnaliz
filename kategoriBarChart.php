<?php

// Veritabanı bağlantısı için bilgiler
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bilisimDeneme";

// Kategori id'sini al
$kategoriId = isset($_GET['kategori_id']) ? $_GET['kategori_id'] : null;

// Veritabanına bağlantı oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantı hatası kontrolü
if ($conn->connect_error) {
    die("Veritabanına bağlanırken bir hata oluştu: " . $conn->connect_error);
}

// Ürünleri kategori id'ye göre sayan sorgu
$sql = "SELECT COUNT(urun_id) AS urun_sayisi FROM urunler WHERE kategori_id = $kategoriId";

$result = $conn->query($sql);

// Ürün sayısını JSON formatında döndür
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode($row['urun_sayisi']);
} else {
    echo json_encode(0);
}

// Veritabanı bağlantısını kapat
$conn->close();

?>
