<?php 
// koneksi ke database
require 'functionsartikel.php';
$artikel = query("SELECT * FROM artikel");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Artikel</title>
    <link rel="stylesheet" href="manageartikel.css">
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
            <li><a href="manageuser.php">Manage User</a></li>
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
    <h1>Artikel Sopan</h1>
    <a href="tambahartikel.php">Tambah artikel</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No. Urut</th>
            <th>Aksi</th>
            <th>Definisi</th>
            <th>Pengertian</th>
            <th>Macam</th>
            <th>Manfaat</th>
            <th>Judul Pengertian</th>
            <th>Judul Macam</th>
            <th>Judul Manfaat</th>
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
           <td><?= $row["pengertian"] ?></td>
           <td><?= $row["macam"]; ?></td>
           <td><?= $row["manfaat"]; ?></td>
           <td><?= $row["judul_pengertian"] ?></td>
           <td><?= $row["judul_macam"]; ?></td>
           <td><?= $row["judul_manfaat"]; ?></td>
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
