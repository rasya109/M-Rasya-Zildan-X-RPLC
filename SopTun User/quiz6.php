<?php
session_start();

if( !isset($_SESSION["login"]) ) {
  header("Location: login.php");
  exit;
}

// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "pjbl");

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// ID nomor soal yang ingin ditampilkan
$targetId = 1; // Ganti dengan ID soal yang diinginkan

// Query SQL untuk mengambil data soal dengan ID tertentu
$query = "SELECT * FROM tbl_quiz WHERE id = $targetId";
$result = mysqli_query($conn, $query);

// Periksa apakah ada hasil
if (mysqli_num_rows($result) > 0) {
    // Output data dari baris hasil
    $row = mysqli_fetch_assoc($result);
    $soalText = $row["soal"];
    $jawabanA = $row["jawaban_a"];
    $jawabanB = $row["jawaban_b"];
    $jawabanC = $row["jawaban_c"];
    $jawabanD = $row["jawaban_d"];
} else {
    $soalText = "Soal tidak ditemukan";
    $jawabanA = $jawabanB = $jawabanC = $jawabanD = "Jawaban tidak ditemukan";
}

// Tutup koneksi ke database
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Soal no 1</title>
  <link rel="stylesheet" href="quiz6.css">
  <link rel="icon" href="./asset/Zildan.jpg">
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
</style>
<body>
  <!-- start nav -->
  <div class="container">
  <div class="nav">
    <img src="./asset/SopTun.png">
    <a href="homepage.php">Home</a>
    <a href="artikelsopan.php">Artikel</a>
    <a href="quiz1.php">Quiz</a>
    <input type="search" name="placeholder" placeholder="Cari..." style="padding-left: 10px;">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
      <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
    </svg>
    <a href="logout.php"><button value="log out"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
    </svg>Log Out</button></a>
    </div>
    <!-- end nav -->
    <!-- start main content -->
    <div class="main">
    <!-- start hero -->
    <div class="hero">
      <img src="./asset/Group 19.jpg">
    </div>
    <!-- end hero -->
    <!-- start soal -->
    <div class="container">
      <!-- no soal -->
      <div class="nosoal">
        <h1>Soal 1</h1>
      </div>
      <!-- end no soal -->
      <!-- start soal -->
      <div class="soal">
      <h2><?php echo $soalText; ?></h2><br>
      <!-- start jawaban benar 1 -->
      <div class="jawabana">
      <button id="button1" class="custom-button" onclick="disableButton(this)"><?php echo $jawabanA; ?></button>
      </div>
      <!-- end jawaban benar 1 -->
      <!-- start jawaban salah 2 -->
      <div class="jawabanb">
      <button id="button2" class="custom-buttonb" onclick="disableButton(this)"><?php echo $jawabanB; ?></button>
      </div>
      <!-- end jawaban salah 2 -->
      <!-- start jawaban salah 3 -->
      <div class="jawabanc">
      <button id="button3" class="custom-buttonc" onclick="disableButton(this)"><?php echo $jawabanC; ?></button>
      </div>
      <!-- end jawaban salah 3 -->
      <!-- start jawaban salah 4 -->
      <div class="jawaband">
      <button id="button4" class="custom-buttond" onclick="disableButton(this)"><?php echo $jawabanD; ?></button>
      </div>
      <!-- end jawaban salah 4 -->
      <!-- end soal -->
      </div>
      <!-- start next button -->
      <div class="next">
        <a href="quiz7.php"><input type="button" value="Next"></a>
      </div>
      <!-- end next button -->
    </div>
    
    <!-- end soal -->



    </div>
    <script>
        // start java jawaban a
        const customButton = document.getElementById('button1');
        customButton.addEventListener('click', function() {
          this.classList.add('clicked');
        });
        // end java jawaban a
        // start java jawaban b
        const customButtonb = document.getElementById('button2');
        customButtonb.addEventListener('click', function() {
          this.classList.add('clicked');
        });
        // end java jawaban b
        // start java jawaban c
        const customButtonc = document.getElementById('button3');
        customButtonc.addEventListener('click', function() {
          this.classList.add('clicked');
        });
        // end java jawaban c
        // start java jawaban d
        const customButtond = document.getElementById('button4');
        customButtond.addEventListener('click', function() {
          this.classList.add('clicked');
        });
        // end java jawaban d

        // start pindah page setelah tombol di click

        function disableButton(button) {
        // Menonaktifkan tombol yang dipilih
        button.disabled = true;

        // Menonaktifkan tombol lainnya
        var buttons = document.getElementsByTagName('button');
        for (var i = 0; i < buttons.length; i++) {
            buttons[i].disabled = true;
        }
    }
      </script>
    </body>
    </html>