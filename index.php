<?php include 'config/database.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Pasien Klinik</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>Data Pasien Klinik</h1>
<a href="pasien/create.php">+ Tambah Pasien</a><br><br>
<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Umur</th>
        <th>Keluhan</th>
        <th>Aksi</th>
    </tr>
    <?php
    $sql = "SELECT * FROM pasien";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['nama']}</td>
                    <td>{$row['alamat']}</td>
                    <td>{$row['umur']}</td>
                    <td>{$row['keluhan']}</td>
                    <td>
                        <a href='pasien/update.php?id={$row['id']}'>Edit</a> |
                        <a href='pasien/delete.php?id={$row['id']}' onclick='return confirm(\" Yakin ingin hapus? \")'>Hapus</a>
                    </td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='6'>Belum ada data</td></tr>";
    }
    ?>
</table>
<script src="js/script.js"></script>
</body>
</html>