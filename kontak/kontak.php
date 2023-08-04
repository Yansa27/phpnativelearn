<?php
include 'koneksi.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Menerima data dari form
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nomor_telepon = $_POST['nomor_telepon'];

    // Menyimpan data ke database
    $query = "INSERT INTO kontak (nama, email, nomor_telepon) VALUES ('$nama', '$email', '$nomor_telepon')";
    $result = mysqli_query($conn, $query);

    if ($result) {
    header('Location: index.php');
    exit;
    } else {
    echo "Gagal menambahkan kontak.";
    }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">
    <label for="nama">Nama:</label><br>
    <input type="text" name="nama"><br>

    <label for="email">Email:</label><br>
    <input type="email" name="email"><br>

    <label for="nomor_telepon">Nomor Telepon:</label><br>
    <input type="text" name="nomor_telepon"><br>

    <input type="submit" value="Simpan">
</form>
</body>
</html>


