<?php
include '../config/database.php';
$id = $_GET['id'];
$sql = "DELETE FROM pasien WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Data berhasil dihapus'); window.location='../index.php';</script>";
} else {
    echo "Error: " . $conn->error;
}
?>