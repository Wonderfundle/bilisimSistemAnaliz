<?php
// Veritabanı bağlantı bilgileri
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bilisimdeneme";

// Veritabanına bağlan
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantı kontrolü
if ($conn->connect_error) {
    die("Veritabanına bağlantı sağlanamadı: " . $conn->connect_error);
}

// Kategorileri ve ürün sayılarını çek
$sql = "SELECT kategoriler.kategori_id, kategoriler.kategori_adi, COUNT(urunler.urun_id) as UrunSayisi
        FROM Kategoriler as kategori
        LEFT JOIN Urunler as urun ON kategoriler.kategori_id = urunler.kategori_id
        GROUP BY kategoriler.kategori_id";
$result = $conn->query($sql);

// Verileri saklamak için dizi
$data = array();

// Sonuçları diziye ekleyin
while($row = $result->fetch_assoc()) {
    $data[] = array('label' => $row['KategoriAdi'], 'data' => $row['UrunSayisi']);
}

// Veritabanı bağlantısını kapat
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<!-- Pie chart için canvas -->
<canvas id="pieChart" width="400" height="400"></canvas>

<script>
// Verileri alınan dizi üzerinden pie chart olarak çizin
var ctx = document.getElementById('pieChart').getContext('2d');
var pieChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: <?php echo json_encode(array_column($data, 'label')); ?>,
        datasets: [{
            data: <?php echo json_encode(array_column($data, 'data')); ?>,
            backgroundColor: [
                'rgba(255, 99, 132, 0.7)',
                'rgba(54, 162, 235, 0.7)',
                'rgba(255, 206, 86, 0.7)',
                'rgba(75, 192, 192, 0.7)',
                'rgba(153, 102, 255, 0.7)',
                'rgba(255, 159, 64, 0.7)'
            ]
        }]
    }
});
</script>

</body>
</html>
