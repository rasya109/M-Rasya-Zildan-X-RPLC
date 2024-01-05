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
$conn = mysqli_connect($server,$user,$pass,$database);
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>