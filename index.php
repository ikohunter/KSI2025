<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</body>
</html>