<?php 
include '../koneksi/koneksi.php';


$menu=$_GET['menu'];

mysqli_query($koneksi,"DELETE FROM minuman WHERE menu='$menu'");

mysqli_query($koneksi,"DELETE FROM stok_minuman WHERE menu='$menu'");

mysqli_query($koneksi,"DELETE FROM stok WHERE menu='$menu' ");

mysqli_query($koneksi,"DELETE FROM laporan_harian WHERE menu='$menu' ");

header('location:minuman.php');
