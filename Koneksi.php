<?php
// Koneksi.php
$host = "localhost";
$username = "root";
$password = "";
$database = "ksi2025_db";

// Membuat koneksi
$conn = mysqli_connect($host, $username, $password, $database);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

echo "Koneksi berhasil!";
?>