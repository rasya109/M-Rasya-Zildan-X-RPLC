<?php 
require 'functionskomen.php';

// ambil data di url
$id = $_GET["id"];

// query berdasarkan data
$user = query("SELECT * FROM komentar WHERE id = $id")[0];

// cek apakah tombol submit uda diteken
if ( isset($_POST["submit"]) ) {
   
// cek berhasil apa engga
if(tambah($_POST) > 0 ) {
    echo"

    <script>
    alert('data berhasil diubah');
    document.location.href = 'managekomen.php';
    </script>
    ";
} else {
    echo "
    
    <script>
    alert('data gagal diubah');
    
    </script>
    ";
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menambah komentar</title>
    <link rel="stylesheet" href="ubahkomen.css">
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
        </ul>
    </div>
    <!-- end side bar -->
    <div id="content">
        <!-- Isi halaman Anda akan ditampilkan di sini -->
    <h1>Ubah Komentar</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $user["id"]?>" >
        <label for="nama">Username :</label>
        <input type="text" name="nama" required value="<?= $user["nama"]?>"><br><br>
        <label for="komentar">Komentar :</label>
        <input type="text" name="komentar" required value="<?= $user["komentar"]?>"><br><br>
        <label for="jumlah_like">Jumlah like :</label>
        <input type="number" name="jumlah_like" required value="<?= $user["jumlah_like"]?>">
        <button type="submit" name="submit">Submit</button>
    </form>
    </div>

    <!-- start script -->
    <script>
        document.getElementById('navbar').addEventListener('click', function () {
            document.getElementById('sidebar').classList.toggle('active');
        });
    </script>
</body>
</html>