<?php 

include '../koneksi/koneksi.php';

$id=$_GET['id'];

if(isset($_POST['tambah'])){

$st= mysqli_query($koneksi,"SELECT * FROM stok_makanan WHERE id=$id  ");
$st= mysqli_fetch_assoc($st);

$stok= $_POST['stok'];
$st1= $st['satuan'];
$total = $stok + $st1;

mysqli_query($koneksi,"UPDATE stok_makanan SET satuan='$total' WHERE id=$id  ");

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
			<legend>Tambah Bahan Pokok</legend>
			
				<form action="" method="post">
					
					<table>
						<tr>
							<td>Nama :</td>
							<td><input type="text" name="nama" autofocus autocomplete=""></td>
						</tr>
						<tr>
							<td>Satuan :</td>
							<td><input type="text" name="sataun" autofocus autocomplete=""></td>
						</tr>
						<tr>
							<td>Harga :</td>
							<td><input type="text" name="harga" autofocus autocomplete=""></td>
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