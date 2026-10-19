<?php
session_start();
include "koneksi.php";
if (isset($_POST['login'])) {
    $user = mysqli_real_escape_string($koneksi, $_POST['username']);
    $pass = mysqli_real_escape_string($koneksi, $_POST['password']);
    $sql = mysqli_query(
        $koneksi,
        "SELECT * FROM user WHERE username='$user' AND password=MD5('$pass')"
    )
        or die(mysqli_error($koneksi));
    $data = mysqli_num_rows($sql);
    if ($data == 0) {
        // username / password tidak cocok
        echo '<script>alert("Username atau password salah!");
document.location="index.php?page=login";</script>';
    } else {
        $row = mysqli_fetch_assoc($sql);
        if ($row['level'] == 1) {
            // login level 1 -> buat session admin
            $_SESSION['admin'] = $user;
            echo '<script>alert("Anda berhasil Login Admin!");
document.location="index.php?page=masukandata";</script>';
        }
    }
}
?>