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
     $username = htmlspecialchars($data["username"]);
     $email = htmlspecialchars($data["email"]);
     $password = htmlspecialchars($data["password"]);
    //  enkripsi password
     $password = password_hash($password, PASSWORD_DEFAULT);

      // query insert data
    $query = "INSERT INTO tbl_user
    VALUES
    ('$id', '$username', '$email', '$password')
    ";
mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}

// hapus user
function hapus($id) {
    global $conn;
    mysqli_query($conn,"DELETE FROM tbl_user WHERE id = $id");
    return mysqli_affected_rows($conn);
}

// ubah user
function ubah($data) {
    global $conn;
    // ambil data dari form
    $id = $data["id"];
    $username = htmlspecialchars($data["username"]);
    $email = htmlspecialchars($data["email"]);
    $password = htmlspecialchars($data["password"]);
   //  enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

     // query insert data
   $query = "UPDATE tbl_user SET
   username = '$username',
   email = '$email',
   password = '$password'
   WHERE id = $id
   ";


mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}
?>