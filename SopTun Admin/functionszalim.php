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
     $judul_macam = $data["judul_macam"];
     $macam = $data["macam"];
     $judul_manfaat = $data["judul_manfaat"];
     $manfaat = $data["manfaat"];

      // query insert data
    $query = "INSERT INTO zalim
    VALUES
    ('', '$definisi', '$judul_pengertian', '$pengertian', '$judul_macam', '$macam', '$judul_manfaat', '$manfaat' )
    ";
mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}
?>