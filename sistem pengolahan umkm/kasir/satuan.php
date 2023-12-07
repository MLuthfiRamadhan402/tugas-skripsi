<?php 
include 'koneksi.php';
$id=$_GET['id'];
$total=mysqli_query($koneksi,"SELECT * FROM pesan WHERE id=$id");
$total=mysqli_fetch_assoc($total);

if(isset($_POST['submit'])){
$satuan=$_POST['satuan'];
$harga=$total['harga'];
$jumlah= $satuan*$harga;

mysqli_query($koneksi,"UPDATE pesan SET satuan='$satuan',jumlah='$jumlah' WHERE id=$id ");
header('location:kasir.php');
}
 ?>


 <form method="post">
 	<input type="number" name="satuan" autofocus="">
 	<button name="submit">ok</button>
 </form>