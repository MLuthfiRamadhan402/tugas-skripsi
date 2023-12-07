<?php 

include '../koneksi/koneksi.php';
include '../cek/cek-login.php';

$no=$_GET['no'];

if($no == 1){

	mysqli_query($koneksi, "DELETE FROM nourut WHERE nourut ");

	header('laporan_harian.php');
}

 ?>