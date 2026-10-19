<?php session_start(); ?>
<html>

<head>
    <title>Aplikasi penyimpan data pegawai</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
    <div id="navcontainer">
        <ul id="navlist">
            <li><a href="index.php">Beranda</a></li>
            <li><a href="index.php?page=masukandata">Masukan Data Pegawai</a></li>
            <li><a href="lihat_data_pegawai.php">Lihat Data Pegawai</a></li>
            <li><a href="index.php?page=login">Login</a></li>
        </ul>
    </div>
    <div id="content">
        <?php
        $page = (isset($_GET['page'])) ? $_GET['page'] : "main";
        switch ($page) {
            case 'masukandata':
                // hanya admin yang sudah login boleh membuka form input
                if (isset($_SESSION['admin']))
                    include "input_data_pegawai.php";
                else
                    include "login.php";
                break;
            case 'login':
                include "login.php";
                break;
            case 'logout':
                include "logout.php";
                break;
            case 'main':
            default:
                include "catatan.php";
        }
        ?>
    </div>
</body>

</html>