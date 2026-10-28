<?php
$host = "localhost";
$user = "root"; // Ganti
$pass = ""; // Ganti
$db   = "fluctus_db";     // Ganti

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>