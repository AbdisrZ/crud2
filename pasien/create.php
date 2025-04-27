<?php include '../config/database.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Pasien</title>
</head>
<body>
<h1>Tambah Data Pasien</h1>
<form action="" method="post">
    Nama: <input type="text" name="nama" required><br><br>
    Alamat: <textarea name="alamat" required></textarea><br><br>
    Umur: <input type="number" name="umur" required><br><br>
    Keluhan: <textarea name="keluhan" required></textarea><br><br>
    <button type="submit" name="submit">Simpan</button>
</form>
<?php
if(isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $umur = $_POST['umur'];
    $keluhan = $_POST['keluhan'];
    $sql = "INSERT INTO pasien (nama, alamat, umur, keluhan) VALUES ('$nama', '$alamat', '$umur', '$keluhan')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil ditambahkan'); window.location='../index.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
</body>
</html>