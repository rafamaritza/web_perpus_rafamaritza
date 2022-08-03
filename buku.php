<?php 

require 'koneksi.php';

$buku = mysqli_query($conn, "SELECT * FROM buku");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Buku</title>
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
        <h3>Data Buku Perpustakaan</h3>
            <table  cellspacing="0">
            <tr>
                <th>No</th>
                <th>Id Katalog</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Tahun Terbit</th>
                <th>Penerbit</th>
            </tr>

            <?php $i = 1; ?>
            <?php while($row = mysqli_fetch_array($buku)) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row["id_katalog"]; ?></td>
                <td><?= $row["judul_buku"]; ?></td>
                <td><?= $row["pengarang"]; ?></td>
                <td><?= $row["thn_terbit"]; ?></td>
                <td><?= $row["penerbit"]; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endwhile; ?>
            </table>
    </div>


</body>
</html>