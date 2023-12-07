<?php 
include '../koneksi/koneksi.php';
$menu=$_GET['menu'];
mysqli_query($koneksi,"DELETE FROM menu WHERE menu='$menu' ");

mysqli_query($koneksi,"DELETE FROM stok_makanan WHERE menu='$menu' ");

mysqli_query($koneksi,"DELETE FROM stok WHERE menu='$menu' ");

mysqli_query($koneksi,"DELETE FROM laporan_harian WHERE menu='$menu' ");
header('location:index.php');

?>

