<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
  header("Location: login.php");
  exit;
}
$server = "localhost";
$user = "root";
$pass = "";
$database = "pjbl";

// buat koneksi
$conn = mysqli_connect($server, $user, $pass, $database);
// cek koneksi
if (!$conn) {
    die("koneksi gagal". mysqli_connect_error());
}
?>