<?php 
// koneksi ke database
require 'functions.php';
$user = query("SELECT * FROM tbl_user");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel user</title>
    <link rel="stylesheet" href="manageuser.css">
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
    
    <h1>Daftar User</h1>
    <a href="tambahuser.php">Tambah user</a>
    <br><br>
    <div class="table">
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No. Urut</th>
            <th>Aksi</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
        <?php $i =1; ?>
        <?php foreach( $user as $row ): ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
                <a href="hapus.php?id=<?= $row["id"]; ?>">hapus</a>
           </td>
           <td><?= $row["username"]; ?></td>
           <td><?= $row["email"] ?></td>
           <td><?= $row["password"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    </div>
    <!-- end table -->
    </div>

    <!-- start script -->
    <script>
        document.getElementById('navbar').addEventListener('click', function () {
            document.getElementById('sidebar').classList.toggle('active');
        });
    </script>
</body>
</html>
