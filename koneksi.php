<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "data_pegawai";
$koneksi = mysqli_connect($host, $user, $password, $db);
if (mysqli_connect_errno()) {
    echo "Gagal melakukan koneksi <br/>:" . mysqli_connect_error();
}
?>