<?php
$id = $_GET['id'];

$nama_barang = $_POST['nama_barang'];
$id_jenis = $_POST['id_jenis'];
$harga = $_POST['harga'];
$stock = $_POST['stock'];
include '../../config/koneksi.php';

$query = mysqli_query($conn, "UPDATE barang SET
    nama_barang='$nama_barang',
    id_jenis='$id_jenis',
    harga='$harga',
     stock='$stock'
WHERE id_barang='$id'");

// Javascript
if ($query) {
    echo "<script>alert('Data berhasil diedit');</script>";
    echo "<script>window.location.href='index.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
    echo "<script>window.location.href='view_tambah.php';</script>";
}