<<<<<<< HEAD
<?php
// index.php di branch KoneksiDatabase
include 'Koneksi.php';
?>
=======
>>>>>>> TambahData
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>KSI 2025 - Database Connection</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Testing Koneksi Database</h1>
    <p>Cek koneksi database berhasil atau tidak</p>
=======
    <title>KSI 2025 - Tambah Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Form Tambah Data</h1>
    <form action="Tambah.php" method="POST">
        <div>
            <label for="nama">Nama:</label><br>
            <input type="text" id="nama" name="nama" required>
        </div>
        <br>
        <div>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required>
        </div>
        <br>
        <button type="submit">Tambah Data</button>
    </form>
>>>>>>> TambahData
</body>
</html>