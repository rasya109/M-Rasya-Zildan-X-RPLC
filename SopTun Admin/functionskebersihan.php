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
     $judul_pengertian = $data["judul_pengertian"];
     $pengertian = $data["pengertian"];
     $judul_manfaat = $data["judul_manfaat"];
     $manfaat = $data["manfaat"];
     $judul_macam = $data["judul_macam"];
     $macam = $data["macam"];

      // query insert data
    $query = "INSERT INTO bersih
    VALUES
    ('', '$definisi', '$judul_pengertian', '$pengertian', '$judul_manfaat', '$manfaat', '$judul_macam', '$macam' )
    ";
mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}
?>