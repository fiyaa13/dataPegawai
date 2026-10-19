<?php
require_once('koneksi.php');
// Nama kolom ditulis eksplisit agar urutan data tidak tertukar
$perintah = sprintf(
    "INSERT INTO data_pegawai (nama,jabatan,alamat,no_tlp,nama_pasangan,nama_anak)
VALUES ('%s','%s','%s','%s','%s','%s')",
    mysqli_real_escape_string($koneksi, $_POST['nama']),
    mysqli_real_escape_string($koneksi, $_POST['jabatan']),
    mysqli_real_escape_string($koneksi, $_POST['alamat']),
    mysqli_real_escape_string($koneksi, $_POST['no_tlp']),
    mysqli_real_escape_string($koneksi, $_POST['nama_pasangan']),
    mysqli_real_escape_string($koneksi, $_POST['nama_anak'])
);
$aksi = mysqli_query($koneksi, $perintah);
if (!$aksi) {
    echo "Gagal Konek:" . mysqli_error($koneksi);
} else {
    echo '<script>alert("Data Pegawai disimpan!");
document.location="index.php?page=masukandata";</script>';
}
?>