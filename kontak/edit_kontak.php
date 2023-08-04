<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$nomor_telepon = $_POST['nomor_telepon'];

// Update data kontak dalam database
$query = "UPDATE kontak SET nama='$nama', email='$email', nomor_telepon='$nomor_telepon' WHERE id=$id";
$result = mysqli_query($conn, $query);

if ($result) {
header('Location: index.php');
exit();
} else {
echo "Gagal mengupdate kontak.";
}
}

$id = $_GET['id'];
$query = "SELECT * FROM kontak WHERE id=$id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="edit_kontak.php" method="POST">
<label for="nama">Nama:</label>
<input type="text" name="nama" value="php echo $row['nama']; ?>" required><br>

<label for="email">Email:</label>
<input type="text" name="email" value="php echo $row['email']; ?>"><br>

<label for="nomor_telepon">Nomor Telepon:</label>
<input type="text" name="nomor_telepon" value="php echo $row['nomor_telepon']; ?>" required><br>

<input type="hidden" name="id" value="php echo $row['id']; ?>">

<input type="submit" value="Update">
</form>

</body>
</html>