<?php 

include '../koneksi/koneksi.php';

$menu=$_GET['menu'];

if(isset($_POST['tambah'])){

$st= mysqli_query($koneksi,"SELECT * FROM stok_makanan WHERE menu='$menu'  ");
$st= mysqli_fetch_assoc($st);

$stok= $_POST['stok'];
$st1= $st['satuan'];
$total = $stok + $st1;

mysqli_query($koneksi,"UPDATE stok_makanan SET satuan='$total' WHERE menu='$menu'  ");
mysqli_query($koneksi,"UPDATE stok SET satuan='$total' WHERE menu='$menu'  ");
header('location:index.php');

}

 ?>


 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Stok</title>
</head>
<body>

	<center>
	<fieldset style="width: 400px; padding: 9px;" >
			<legend>Tambah Stok</legend>
			
				<form action="" method="post">
					
					<table>
						<tr>
							<td>Input Stok :</td>
							<td><input type="number" name="stok" autofocus autocomplete=""></td>
						</tr>
						<tr>
							<td></td>
							<td><button name="tambah">Tambah</button></td>
						</tr>
					</table>
				</form>
			</fieldset>
			</center>
</body>
</html>