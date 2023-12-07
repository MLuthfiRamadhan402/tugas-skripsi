<?php 

include '../koneksi/koneksi.php';



if(isset($_POST['tambah'])){



$nama= ucwords($_POST['nama']);
$satuan= $_POST['satuan'];
$harga= $_POST['harga'];


mysqli_query($koneksi,"INSERT INTO stok_bahanpokok VALUES(
	'',
	'$nama',
	'$satuan',
	'$harga'
)");

header('location:stok_bahanpokok.php');

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
			<legend>Tambah Stok Bahan Pokok</legend>
			
				<form action="" method="post">
					
					<table>
						<tr>
							<td>Nama :</td>
							<td><input type="text" name="nama" autofocus autocomplete=""></td>
						</tr>
						<tr>
							<td>Satuan :</td>
							<td><input type="text" name="satuan"  autocomplete=""></td>
						</tr>
						<tr>
							<td>Harga :</td>
							<td><input type="text" name="harga"  autocomplete=""></td>
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