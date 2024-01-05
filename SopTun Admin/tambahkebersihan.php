<?php 
require 'functionskebersihan.php';
// cek apakah tombol submit uda diteken
if ( isset($_POST["submit"]) ) {
   
// cek berhasil apa engga
if(tambah($_POST) > 0 ) {
    echo"

    <script>
    alert('data berhasil ditambahkan');
    document.location.href = 'managekebersihan.php';
    </script>
    ";
} else {
    echo "
    
    <script>
    alert('data berhasil ditambahkan');
    
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
    <title>Menambah Artikel Kebersihan</title>
    <link rel="stylesheet" href="tambahkebersihan.css">
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
    <h1>Tambah Artikel Kebersihan</h1>
    <form action="" method="post">
        <label for="definisi">Definisi :</label>
        <input type="text" name="definisi"><br><br>
        <!-- end definisi -->
        <label for="judul_pengertian">Judul pengertian :</label>
        <input type="text" name="judul_pengertian"><br><br>
        <!-- end judul pengertian -->
        <label for="pengertian">Pengertian :</label>
        <input type="text" name="pengertian"><br><br>
        <!-- end pengertian -->
        <label for="judul_manfaat">Judul manfaat :</label>
        <input type="text" name="judul_manfaat"><br><br>
        <!-- end judul_manfaat -->
        <label for="manfaat">Manfaat :</label>
        <input type="text" name="manfaat"><br><br>
        <!-- end maanfaat -->
        <label for="judul_macam">Judul macam :</label>
        <input type="text" name="judul_macam"><br><br>
        <!-- end judul_macam -->
        <label for="macam">Macam :</label>
        <input type="text" name="macam"><br><br>
        <!-- end macam -->
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>