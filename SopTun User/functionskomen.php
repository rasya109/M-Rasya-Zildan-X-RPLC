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

function updateJumlahLike($commentId) {
    global $conn;
    $query = "UPDATE komentar SET jumlah_like = jumlah_like + 1 WHERE id = $commentId";
    $result = mysqli_query($conn, $query);

    return $result;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["commentId"])) {
    // Panggil fungsi updateJumlahLike dengan commentId yang diterima
    $commentId = $_POST["commentId"];
    updateJumlahLike($commentId);
}

function tambah($data) {
    global $conn;

    // ambil data dari form
    $nama = mysqli_real_escape_string($conn, $data["nama"]);
    $komentar = mysqli_real_escape_string($conn, $data["komentar"]);
    $jumlah_like = (int) $data["jumlah_like"]; // pastikan ini merupakan tipe data yang benar, misalnya integer

    // query insert data
    $query = "INSERT INTO komentar (nama, komentar, jumlah_like) VALUES ('$nama', '$komentar', '$jumlah_like')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?>