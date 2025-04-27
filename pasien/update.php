<?php include '../config/database.php'; ?>
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM pasien WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Pasien</title>
</head>
<body>
<h1>Edit Data Pasien</h1>
<form action="" method="post">
    Nama: <input type="text" name="nama" value="<?php echo $row['nama']; ?>" required><br><br>
    Alamat: <textarea name="alamat" required><?php echo $row['alamat']; ?></textarea><br><br>
    Umur: <input type="number" name="umur" value="<?php echo $row['umur']; ?>" required><br><br>
    Keluhan: <textarea name="keluhan" required><?php echo $row['keluhan']; ?></textarea><br><br>
    <button type="submit" name="submit">Update</button>
</form>
<?php
if(isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $umur = $_POST['umur'];
    $keluhan = $_POST['keluhan'];
    $sql = "UPDATE pasien SET nama='$nama', alamat='$alamat', umur='$umur', keluhan='$keluhan' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil diupdate'); window.location='../index.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
</body>
</html>