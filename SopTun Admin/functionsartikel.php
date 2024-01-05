<?php 
// koneksi ke database
$conn = mysqli_connect ("localhost","root","","pjbl");

function query($query) {
    global $conn;
    $result = mysqli_query ($conn, $query);
    $row =[];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows [] = $row; }
        return $rows;
}

function tambah($data) {
    global $conn;
     // ambil data dari form
     $definisi = $data["definisi"];
     $pengertian = $data["pengertian"];
     $macam = $data["macam"];
     $manfaat = $data["manfaat"];
     $judul_pengertian = $data["judul_pengertian"];
     $judul_macam = $data["judul_macam"];
     $judul_manfaat = $data["judul_manfaat"];

      // query insert data
    $query = "INSERT INTO artikel
    VALUES
    ('', '$definisi', '$pengertian', '$macam', '$manfaat', '$judul_pengertian', '$judul_macam', '$judul_manfaat' )
    ";
mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}
?>