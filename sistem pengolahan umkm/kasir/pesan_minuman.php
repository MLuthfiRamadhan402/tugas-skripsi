<?php
include '../koneksi/koneksi.php';
include '../koneksi/lp_pelanggan.php';
$menu = $_GET['menu'];

if ($menu === $_GET['menu']) {
	$mn = mysqli_query($koneksi, "SELECT * FROM minuman WHERE menu='$menu' ");
	$mn = mysqli_fetch_assoc($mn);

	$menuu = $mn['menu'];
	$hargaa = $mn['harga'];


	if (isset($_POST['submit'])) {

		$menu = $_POST['menu'];
		$satuan = $_POST['satuan'];
		$harga = $_POST['harga'];
		$jumlah = $satuan * $harga;

		// memnampilkan pehitungan sementara untuk di input ke update
		$aa = mysqli_query($koneksi,"SELECT * FROM stok_minuman WHERE menu='$menu'");
		$aa = mysqli_fetch_assoc($aa);
		$bb = mysqli_query($koneksi, "SELECT * FROM laporan_harian WHERE menu='$menu'");
		$bb = mysqli_fetch_assoc($bb);
		$total = $aa['satuan'] - $satuan;
		$total2 = $bb['satuan'] + $satuan;

		// update data satuan di databases laporan harian
		mysqli_query($koneksi, "UPDATE laporan_harian SET satuan='$total2' 
			WHERE menu='$menu'
 ");

		// update data satuan di databases tabel stok minuman
		mysqli_query($koneksi, "UPDATE stok_minuman SET satuan='$total' 
		WHERE menu='$menu'
 ");

		// update data satuan di databases tabel stok 
		mysqli_query($koneksi, "UPDATE stok SET satuan='$total' 
		WHERE menu='$menu'
 ");

		mysqli_query($con, "INSERT INTO pesan VALUES(
	
		'$menu',
		'$satuan',
		'$harga',
		'$jumlah',
		'minuman'
)");

		header('location:minuman.php');
	}
}
?>

<!-- membuat from untuk di input ke databases -->
<!DOCTYPE html>
<html>

<head>
	<title>Pesan Minuman</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<form action="" method="post" enctype="multipart/form-data">

		<fieldset style="width: 400px; margin:auto; margin-top: 50px;">

			<legend align=cemter;><b>Menu Minuman</b></legend>

			<input type="hidden" name="harga" id="harga" value="<?= $hargaa ?>">
			<div>
				<label><?= $menuu ?>
					<input type="hidden" name="menu" id="menu" value="<?= $menuu ?>">
				</label>
			</div><br>

			<div>
				<label>
					Jumlah Pesanan:
					<input type="number" name="satuan" id="satuan" placeholder="" autofocus="">
				</label>
			</div>
			<br>
			<button type="submit" name="submit" style="margin-left: 370px;">Simpan</button>



		</fieldset>

	</form>
</body>

</html>