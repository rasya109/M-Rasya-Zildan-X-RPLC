<?php
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
  <title>Buttons with Answers</title>
</head>
<body>
  <button><?php echo $jawabanA; ?></button>
  <button><?php echo $jawabanB; ?></button>
  <button><?php echo $jawabanC; ?></button>
  <button><?php echo $jawabanD; ?></button>
</body>
</html>
