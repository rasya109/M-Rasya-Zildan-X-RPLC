<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard admin</title>
    <link rel="stylesheet" href="manageartikel.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
      </style>
      <script  src="./asset/Chart.js"></script>
</head>
<body>
<div id="navbar">
        <ul>
            <li><a href="#">Dashboard Admin</a></li>
            <li>Selamat datang, super admin !</li>
        </ul>
    </div>

    <div id="sidebar">
        <ul>
            <li><a href="manageuser.php">Manage User</a></li>
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
        <h1>Selamat datang, Super Admin !</h1>

        
        
    </div>

<!-- start script -->
<script>
    document.getElementById('navbar').addEventListener('click', function () {
        document.getElementById('sidebar').classList.toggle('active');
    });
</script>

</body>
</html>