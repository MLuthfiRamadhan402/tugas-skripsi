<?php 
include '../koneksi/koneksi.php';
$id=$_GET['id'];
mysqli_query($koneksi,"DELETE FROM stok_bahanpokok WHERE id='$id' ");


header('location:stok_bahanpokok.php');

?>

