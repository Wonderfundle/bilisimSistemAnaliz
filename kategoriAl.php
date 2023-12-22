<?php

// Veritabanı bağlantısı için bilgiler
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bilisimDeneme";

// Veritabanına bağlantı oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantı hatası kontrolü
if ($conn->connect_error) {
    die("Veritabanına bağlanırken bir hata oluştu: " . $conn->connect_error);
}

// Kategorileri çeken sorgu
$sql = "SELECT kategori_id, kategori_adi FROM kategoriler";
$result = $conn->query($sql);

// Kategorileri JSON formatında döndür
if ($result->num_rows > 0) {
    $categories = array();
    while ($row = $result->fetch_assoc()) {
        $categories[] = $row;
    }
    echo json_encode($categories);
} else {
    echo "Kategoriler bulunamadı.";
}

// Veritabanı bağlantısını kapat
$conn->close();

?>
