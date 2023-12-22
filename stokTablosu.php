<?php
include "02_baglan.php";
// Veritabanından urunler tablosundan veri çek

$sql = "SELECT stok.stok_id, urunler.urun_id, depolar.depo_id, stok.miktar
        FROM stok
        INNER JOIN urunler ON stok.urun_id = urunler.urun_id 
        INNER JOIN depolar ON stok.depo_id = depolar.depo_id ";
$result = $conn->query($sql);


// Veritabanı sorgusundan gelen verileri kullanarak tabloyu oluştur
$table = '<table id="datatablesSimple" class="table table-bordered">
            <thead>
                <tr>
                    <th>Stok ID</th>
                    <th>Ürün ID</th>
                    <th>Depo ID</th>
                    <th>Miktar</th>
                </tr>
            </thead>
            <tbody>';

if ($result->num_rows > 0) {
    // Veritabanından gelen her bir satır için tabloya bir satır ekleyin
    while ($row = $result->fetch_assoc()) {
        $table .= '<tr>
                      <td>' . $row['stok_id'] . '</td>
                      <td>' . $row['urun_id'] . '</td>
                      <td>' . $row['depo_id'] . '</td>
                      <td>' . $row['miktar'] . '</td>
                   </tr>';
    }
} else {
    $table .= '<tr><td colspan="5">Tabloda hiç veri yok.</td></tr>';
}

$table .= '</tbody>
           </table>';

// Veritabanı bağlantısını kapat
$conn->close();

// Oluşturulan tabloyu döndür
?>