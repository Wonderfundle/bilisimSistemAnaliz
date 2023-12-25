<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bilisimdeneme";
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8mb4");
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} ?>