<?php
require 'functions.php';
if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

   $result = mysqli_query($conn,"SELECT * FROM utama WHERE email ='$email'");

//    cek username
if (mysqli_num_rows($result) === 1) {
    // cek password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"]) );
    header("Location: dashboard.php");
    exit;
}
$error = true;
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login SopTun</title>
    <link rel="stylesheet" href="index.css">
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
        <h1>Welcome Back !</h1>
    <div class="container2">
    <form action="" method="post">
            <h2>Log In</h2>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
              </svg>
            <input type="email" name="email" placeholder="Masukkan email"><br><br>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
              </svg>
            <input type="password" name="password" placeholder="Masukkan password"><br><br><br><br>
        
        <button type="submit" name="login" value="Login" style="color: white; font-weight: bold;">Login</button><br><br>
    </form>
        <p>Don't have any account ? <a href="registerasi.php">Registerasi</a></p>
        </div>
    </div>
</div>
</body>
</html>