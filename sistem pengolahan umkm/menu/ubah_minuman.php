<?php 
include '../koneksi/koneksi.php';

$menu=$_GET['menu'];
$minuman=mysqli_query($koneksi,"SELECT * FROM minuman WHERE menu='$menu'");
$minuman=mysqli_fetch_assoc($minuman);

if(isset($_POST['submit'])){

	$nama=ucwords($_POST['nama']);
	$harga=$_POST['harga'];
	$satuan=$_POST['satuan'];


	mysqli_query($koneksi,"UPDATE minuman SET menu='$nama',harga='$harga'
				WHERE menu='$menu'
			");

	mysqli_query($koneksi,"UPDATE stok_minuman SET menu='$nama',harga='$harga'
				WHERE menu='$menu'
			");

	mysqli_query($koneksi,"UPDATE stok SET menu='$nama',harga='$harga'
				WHERE menu='$menu'
			");

	mysqli_query($koneksi,"UPDATE laporan_harian SET menu='$nama',harga='$harga'
				WHERE menu='$menu'
			");

	header("Location:minuman.php");
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Tamabah Menu kue</title>
 	<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 			<center>
 				<form action="" method="post" enctype="multipart/form-data">
			
				<fieldset>

					<legend align=cemter;><b>Ubah Menu Minuman</b></legend>
					<div class="label">

						<label for="nama">Nama</label>
					</div>
					<div class="input">
						<input type="text" name="nama" id="nama" value="<?=$minuman['menu']; ?>">
					</div>

						<label for="harga">Harga</label>
					</div>
					<div class="input">
						<input type="text" name="harga" id="harga" value="<?=$minuman['harga']; ?>">
					</div>

					 <br>
					<button type="submit" name="submit">Simpan</button>

						
					
				</fieldset>

			</form>
			</center>
 </body>
 </html>