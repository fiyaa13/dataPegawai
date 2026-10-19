<?php
$awal = 0;
$byk_tampil = 50; // jumlah data per halaman
if (isset($_GET['hal'])) {
    $awal = $_GET['hal'] * $byk_tampil;
}
require_once('koneksi.php');
$perintah = "SELECT * FROM data_pegawai ORDER BY id DESC";
$limit = "LIMIT $awal,$byk_tampil";
$per_limit = sprintf("%s %s", $perintah, $limit);
$rspegawai = mysqli_query($koneksi, $per_limit);
?>
<html>

<head>
    <title>Menampilkan Data Pegawai</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
    <div id="navcontainer">
        <ul id="navlist">
            <li><a href="index.php">Beranda</a></li>
            <li><a href="index.php?page=masukandata">Masukan Data Pegawai</a></li>
            <li><a href="index.php?page=logout">Keluar</a></li>
        </ul>
    </div>
    <main class="page-shell page-shell--wide">
        <header class="page-heading">
            <p class="eyebrow">DIREKTORI</p>
            <h1>Data pegawai</h1>
            <p>Daftar informasi pegawai yang tersimpan.</p>
        </header>
        <div class="table-scroll">
            <table class="data-table">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No. telepon</th>
                        <th scope="col">Nama pasangan</th>
                        <th scope="col">Nama anak</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = $awal + 1;
                    if (mysqli_num_rows($rspegawai) === 0) {
                        ?>
                        <tr>
                            <td class="empty-state" colspan="7">Belum ada data pegawai.</td>
                        </tr>
                        <?php
                    }
                    while ($data = mysqli_fetch_array($rspegawai)) {
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo htmlspecialchars($data['nama']); ?></td>
                            <td><?php echo htmlspecialchars($data['jabatan']); ?></td>
                            <td><?php echo htmlspecialchars($data['alamat']); ?></td>
                            <td><?php echo htmlspecialchars($data['no_tlp']); ?></td>
                            <td><?php echo htmlspecialchars($data['nama_pasangan']); ?></td>
                            <td><?php echo htmlspecialchars($data['nama_anak']); ?></td>
                        </tr>
                        <?php $no += 1;
                    } ?>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>