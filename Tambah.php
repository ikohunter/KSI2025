<?php
// Tambah.php
include 'Koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    
    $sql = "INSERT INTO users (nama, email) VALUES ('$nama', '$email')";
    
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>