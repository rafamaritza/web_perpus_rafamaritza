<?php 

require 'koneksi.php';

$anggota = mysqli_query($conn, "SELECT * FROM anggota");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Anggota</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="sidebar">
        <a href="admin.php">Data Admin</a>
        <a href="anggota.php">Data Anggota</a>
        <a href="buku.php">Data Buku</a>
    </div>

    <div class="main">
        <h2>Rafa Maritza</h2>
        <h3>Data Anggota Perpustakaan</h3>
            <table  cellspacing="0">
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>No Telepon</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Password</th>
            </tr>

            <?php $i = 1; ?>
            <?php while($row = mysqli_fetch_array($anggota)) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["no_telp"]; ?></td>
                <td><?= $row["alamat"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["password"]; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endwhile; ?>
            </table>
    </div>


</body>
</html>