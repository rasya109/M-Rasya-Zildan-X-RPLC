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
     $id = $conn->insert_id;
     $nama = $data["nama"];
     $komentar = $data["komentar"];
     $jumlah_like = $data["jumlah_like"];

      // query insert data
    $query = "INSERT INTO komentar
    VALUES
    ('$id', '$nama', '$komentar', '$jumlah_like')
    ";
mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}

// hapus user
function hapus($id) {
    global $conn;
    mysqli_query($conn,"DELETE FROM komentar WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;
    // ambil data dari form
    $id = $data["id"];
    $nama = $data["nama"];
    $komentar = $data["komentar"];
    $jumlah_like = $data["jumlah_like"];

     // query insert data
   $query = "UPDATE komentar SET
   nama = '$nama',
   komentar = '$komentar',
   jumlah_like = '$jumlah_like',
   WHERE id = $id
   ";


mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}
?>