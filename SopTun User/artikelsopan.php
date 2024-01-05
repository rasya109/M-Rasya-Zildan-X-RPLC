<?php
session_start();

if( !isset($_SESSION["login"]) ) {
  header("Location: login.php");
  exit;
}
// koneksi ke database
$conn = mysqli_connect  ("localhost","root","","pjbl");

// ambil artikel
$result = mysqli_query($conn,"SELECT * FROM artikel");
// ambil artikel dari result

?>
<?php 
require 'functionskomen.php';
// cek apakah tombol submit uda diteken
if ( isset($_POST["submit"]) ) {
   
// cek berhasil apa engga
if(tambah($_POST) > 0 ) {
    echo"

    <script>
    alert('data berhasil ditambahkan');
    document.location.href = 'artikelsopan.php';
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
<!-- end php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sopan Santun</title>
  <link rel="stylesheet" href="artikelsopan.css">
  <link rel="icon" href="./asset/Zildan.jpg">
  <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
      </style>
</head>
<body>
    <!-- start nav -->
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
          
          <!-- start hero -->
          <div class="hero">
            <img src="./asset/Group 16.jpg">
          </div>
          <!-- end hero -->
          <?php while($row = mysqli_fetch_assoc($result))  : ?>
          <!-- start content -->
         <!-- start content -->
            <!-- start definisi -->
            <div class="container-body">
            <div class="definisi">
              <img src="./asset/sopan2 1.jpg">
              <p><?php echo $row["definisi"]; ?></p>
            </div>
            <!-- end definisi -->
            <!-- start pengertian -->
          <div class="pengertian">
            <img src="./asset/salim.jpg">
            <h2><?php echo $row["judul_pengertian"]; ?></h2>
            <p><?php echo $row["pengertian"]; ?></p>
          </div>
          <!-- end pengertian -->
          <!-- start macam -->
          <div class="macam">
            <h2><?php echo $row["judul_macam"]; ?></h2>
            <p><?php echo $row["macam"]; ?></p>
          </div>
          <!-- end macam -->
          <!-- start manfaat -->
          <div class="manfaat">
            <h2><?php echo $row["judul_manfaat"]; ?></h2>
            <p><?php echo $row["manfaat"]; ?></p>
          </div>
          <!-- end manfaat -->

          <!-- start komentar -->
          <div class="komentar">
              <div class="comment-box">
              <?php

// Fungsi untuk menampilkan komentar dari database
function tampilkanKomentar()
{
    // Tuliskan koneksi ke database Anda di sini
    $conn = mysqli_connect("localhost", "root", "", "pjbl");

    $query = "SELECT * FROM komentar";
    $result = mysqli_query($conn, $query);

    echo '<ul class="comment-list" id="comment-list">';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<li class="comment">';
        echo '<strong>' . $row['nama'] . ':</strong> ' . $row['komentar'] . ' ';
        echo '<button class="like-button" data-id="' . $row['id'] . '">Like</button> ';
        echo '<span class="like-count">' . $row['jumlah_like'] . '</span>';
        echo '</li>';
    }
    echo '</ul>';
}

?>
                <h3>Tinggalkan Komentar</h3><br>
                <form action="" method="post">
                  <label for="nama" style="color: white; font-size: 16px; font-family: 'Poppins';">Nama:</label>
                  <input type="text" id="nama" name="nama" style="width: 400px; height: 20px;"><br><br>
                  <label for="komentar" style="color: white; font-size: 16px; font-family: 'Poppins';">Komentar:</label><br>
                  <input type="text" id="komentar" name="komentar" rows="4" style="width: 400px;"><br><br>
                  <input type="submit" value="Kirim" name="submit" style="width: 100px; height: 20px; background-color: #045757; border: none; color: white; border-radius: 20px; font-weight: bold;"><br><br>
                </form>
              </div>
              <?php tampilkanKomentar(); ?>
            </div>
            <!-- end komentar -->
            <!-- start button -->
            <div class="button">
                <a href="homepage.php"><input type="button" value="Previous" style="color: white; font-weight: bold; font-size: 20px;"></a>
                <a href="artikelzalim.php"><input type="button" value="Next" style="color: white; font-weight: bold; font-size: 20px;"></a>
            </div>
            <!-- end button -->
            </div>
              <!-- start footer -->
             <!-- start footer -->
             <div class="footer2">
              <h1>SopTun</h1>
              <!-- start social -->
              <div class="media-sosial">
                <a href="https://instagram.com/flyychmoreee_?igshid=OGQ5ZDc2ODk2ZA==" target="_self" style="margin-left: 537px; color: white;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                </svg></a>
                <a href="https://x.com/flychmoreeee_?t=Xohp2q1__4rpa4zcstSmOQ&s=08" target="_self" style="margin-left: 50px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                </svg></a>
                <a href="https://www.threads.net/@flyychmoreee_" target="_self" style="margin-left: 50px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-threads" viewBox="0 0 16 16">
                  <path d="M6.321 6.016c-.27-.18-1.166-.802-1.166-.802.756-1.081 1.753-1.502 3.132-1.502.975 0 1.803.327 2.394.948.591.621.928 1.509 1.005 2.644.328.138.63.299.905.484 1.109.745 1.719 1.86 1.719 3.137 0 2.716-2.226 5.075-6.256 5.075C4.594 16 1 13.987 1 7.994 1 2.034 4.482 0 8.044 0 9.69 0 13.55.243 15 5.036l-1.36.353C12.516 1.974 10.163 1.43 8.006 1.43c-3.565 0-5.582 2.171-5.582 6.79 0 4.143 2.254 6.343 5.63 6.343 2.777 0 4.847-1.443 4.847-3.556 0-1.438-1.208-2.127-1.27-2.127-.236 1.234-.868 3.31-3.644 3.31-1.618 0-3.013-1.118-3.013-2.582 0-2.09 1.984-2.847 3.55-2.847.586 0 1.294.04 1.663.114 0-.637-.54-1.728-1.9-1.728-1.25 0-1.566.405-1.967.868ZM8.716 8.19c-2.04 0-2.304.87-2.304 1.416 0 .878 1.043 1.168 1.6 1.168 1.02 0 2.067-.282 2.232-2.423a6.217 6.217 0 0 0-1.528-.161Z"/>
                </svg></a>
                </div>
              <!-- end sosial -->
              <!-- start copyright -->
              <div class="copyright">
                <h4>© 2023 SopTun M Rasya Zildan A</h4>
              </div>
              </div>
              <!-- end copyright -->
            </div>
            <!-- end footer -->
            <?php endwhile ?>
          <!-- start java -->
          <script>
        // JavaScript untuk menangani klik tombol suka
        var likeButtons = document.querySelectorAll('.like-button');
        likeButtons.forEach(function(likeButton) {
            likeButton.addEventListener('click', function() {
                var commentId = likeButton.getAttribute('data-id');
                var likeCount = likeButton.nextElementSibling;
                var currentLike = parseInt(likeCount.textContent);

                // Kirim permintaan AJAX ke file PHP yang akan memperbarui jumlah suka di database
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "functionskomen.php", true);
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        // Jika permintaan berhasil, perbarui jumlah suka secara lokal
                        likeCount.textContent = currentLike + 1;
                    }
                };
                xhr.send("commentId=" + commentId);
            });
        });
    </script>
</body>
</html>