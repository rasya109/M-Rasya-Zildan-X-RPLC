<?php 
// koneksi ke database
require 'functionszalim.php';
$artikel = query("SELECT * FROM zalim");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Artikel</title>
    <link rel="stylesheet" href="managezalim.css">
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
    <h1>Artikel Zalim</h1>
    <a href="tambahzalim.php">Tambah artikel</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No. Urut</th>
            <th>Aksi</th>
            <th>Definisi</th>
            <th>Judul pengertian</th>
            <th>Pengertian</th>
            <th>Judul manfaat</th>
            <th>Manfaat</th>
            <th>Judul macam</th>
            <th>Macam</th>
        </tr>
        <?php $i =1; ?>
        <?php foreach( $artikel as $row ): ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">ubah</a> |
                <a href="">hapus</a>
           </td>
           <td><?= $row["definisi"]; ?></td>
           <td><?= $row["judul_pengertian"]; ?></td>
           <td><?= $row["pengertian"] ?></td>
           <td><?= $row["judul_manfaat"]; ?></td>
           <td><?= $row["manfaat"]; ?></td>
           <td><?= $row["judul_macam"]; ?></td>
           <td><?= $row["macam"]; ?></td>
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
