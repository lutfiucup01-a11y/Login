<?php
include "koneksi.php";

$username = $_REQUEST['username'] ?? '';
$password = $_REQUEST['password'] ?? '';

if($username != "" && $password != ""){

    $sql = "SELECT * FROM users
            WHERE username = :username
            AND password = :password";

    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ':username' => $username,
        ':password' => $password
    ]);

    $data = $stmt->fetch();

    if($data){
        echo "berhasil";
    }else{
        echo "Username atau Password salah!";
    }
}
?>
