<?php
$id_jenis = $_POST['id_jenis'];
$nama_jenis = $_POST['nama_jenis'];

include "../../config/koneksi.php";

$query = mysqli_query($conn,query:"INSERT INTO jenis VALUES (
    '$id_jenis',
    '$nama_jenis')");

// Javascript untuk notifikasi
if ($query) {
    echo "<script>alert('Data berhasil disimpan')</script>";
    echo "<script>window.location.href='index.php'</script>";
} else {
    echo "<script>alert('Data tidak berhasil disimpan')</script>";
    echo "<script>window.location.href='view_tambah.php'</script>";
}
?>