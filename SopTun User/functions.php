<?php 
// koneksi ke database
$conn = mysqli_connect("localhost","root","","pjbl");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $row =[];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows [] = $row; }
        return $rows;
}

// function registerasi

function registerasi($data) {
    global $conn;
    
    $id = $conn->insert_id;
    $username = strtolower(stripslashes($data["username"]));
    $email = ($data["email"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // pengecekan apakah username sudah terdaftar
    $result = mysqli_query($conn, "SELECT username FROM tbl_user WHERE username = '$username'");

    if( mysqli_fetch_assoc($result) ) {
        echo "<script> alert('username yang dipilih sudah terdaftar!')</script>";
        return false;
    }

    // enkripsi password    
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user
    mysqli_query($conn,"INSERT INTO tbl_user VALUES('$id', '$username', '$email', '$password')");

    return mysqli_affected_rows($conn);
}
?>