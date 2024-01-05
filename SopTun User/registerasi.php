<?php 
require 'functions.php';

if( isset($_POST["submit"])) {

if ( registerasi ($_POST) > 0) {
    echo "<script>
    alert('user baru berhasil ditambahkan!');
    document.location.href = 'login.php';
    </script>";
} else {
    echo mysqli_error($conn);
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registerasi SopTun</title>
    <link rel="stylesheet" href="registerasi.css">
    <link rel="icon" href="./asset/Zildan.jpg">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
      </style>
</head>
<body>
    <div class="container4">
    <div class="container3">
    <img src="./asset/SopTun.png">
    </div>
    <div class="container">
        <h1>Welcome !</h1>
    <div class="container2">
    <form action="" method="post">
            <h2>Create Account</h2>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
              </svg>
            <input type="username" name="username" placeholder="Masukkan Username"><br>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
              </svg>
            <input type="email" name="email" placeholder="Masukkan Email"><br>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
              </svg>
            <input type="password" name="password" placeholder="Masukkan Password" require><br>
        
        <button type="submit" name="submit" value="Sign Up" style="color: white; font-weight: bold;">Registerasi</button><br>
        <p>Sudah punya akun ? <a href="login.php">Login di sini</a></p>
    </form>
        </div>
    </div>
</div>
</body>
</html>