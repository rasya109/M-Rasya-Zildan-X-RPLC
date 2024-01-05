<?php 
// koneksi ke database
require 'functionskomen.php';
$user = query("SELECT * FROM komentar");
?>
<!-- end php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel komentar</title>
    <link rel="stylesheet" href="managekomen.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
      </style>
</head>
<body>
<div id="navbar">
        <ul>
            <li><a href="#">Dashboard Admin</a></li>
            <li>SopTun</li>
        </ul>
    </div>

    <div id="sidebar">
        <ul>
            <li><a href="dashboard.php">Dashboard Admin</a></li>
            <li><a href="manageartikel.php">Manage Artikel Sopan</a></li>
            <li><a href="managezalim.php">Manage Artikel Zalim</a></li>
            <li><a href="managekebersihan.php">Manage Artikel Kebersihan</a></li>
            <li><a href="managekomen.php">Manage Komentar</a></li>
            <li><a href="#">Manage Quiz</a></li>
            <li><a href="#">Manage Kategori</a></li>
        </ul>
    </div>
    <!-- end side bar -->
    <div id="content">
        <!-- Isi halaman Anda akan ditampilkan di sini -->

        <h1>Daftar Komentar</h1>
    <a href="tambahkomen.php">Tambah komentar</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No. Urut</th>
            <th>Aksi</th>
            <th>Username</th>
            <th>Komentar</th>
            <th>Jumlah like</th>
        </tr>
        <?php $i =1; ?>
        <?php foreach( $user as $row ): ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="ubahkomen.php?id=<?= $row["id"]; ?>">ubah</a> |
                <a href="hapuskomen.php?id=<?= $row["id"]; ?>">hapus</a>
           </td>
           <td><?= $row["nama"]; ?></td>
           <td><?= $row["komentar"] ?></td>
           <td><?= $row["jumlah_like"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
        
    </div>

    <!-- start script -->
    <script>
        document.getElementById('navbar').addEventListener('click', function () {
            document.getElementById('sidebar').classList.toggle('active');
        });
    </script>
</body>
</html>
