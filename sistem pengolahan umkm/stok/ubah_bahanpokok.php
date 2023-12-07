<?php 

include '../koneksi/koneksi.php';

$id=$_GET['id'];

if(isset($_POST['ubah'])){

$stok= $_POST['stok'];

mysqli_query($koneksi,"UPDATE stok_bahanpokok SET satuan='$stok' WHERE id=$id  ");
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
			<legend>Ubah Stok</legend>
			
				<form action="" method="post">
					
					<table>
						<tr>
							<td>Input Stok :</td>
							<td><input type="number" name="stok" autofocus></td>
						</tr>
						<tr>
							<td></td>
							<td><button name="ubah">Ubah</button></td>
						</tr>
					</table>
				</form>
			</fieldset>
			</center>
</body>
</html>