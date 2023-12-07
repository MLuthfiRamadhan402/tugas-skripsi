<?php

include '../koneksi/koneksi.php';
include '../koneksi/lp_pelanggan.php';

if (isset($_POST['submit'])) {

	$nama=ucwords($_POST['nama']);
	$harga = $_POST['harga'];
	$satuan = $_POST['satuan'];

	// pengecekan nama yg sama
$cek= mysqli_query($koneksi, "SELECT * FROM stok WHERE menu='$nama' ");
$cek= mysqli_fetch_assoc($cek);



if($nama === $cek['menu']){

echo "<script>

		alert('Nama Di Menu Ini Sudah Ada di sini / di tempat menu lain');
		window.location.href('tambah_makan.php');

	</script>";
	

}else{
	// tambah menu di table menu
	mysqli_query($koneksi, "INSERT INTO menu VALUES(
			'',
			'$nama',
			'$harga'
			
)");

	// tambah menu di stok barang
	mysqli_query($koneksi, "INSERT INTO stok_makanan VALUES(
			'',
			'$nama',
			'$satuan',
			'$harga'
)");

// tambah daftar stok
	mysqli_query($koneksi, "INSERT INTO stok VALUES(
			'',
			'$nama',
			'$satuan',
			'$harga'
)");

	// tambah daftar menu ke laporan harian
	mysqli_query($koneksi, "INSERT INTO laporan_harian VALUES(
			'',
			'$nama',
			'0',
			'$harga'
)");

	header("Location:index.php");
		}
	}

?>

<!DOCTYPE html>
<html>

<head>
	<title>Tamabah Menu Makanan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div style="margin-left: 92%;">
		<a href="index.php"><button>Kembali</button></a>
	</div>
	<center>
		<form action="" method="post" enctype="multipart/form-data">

			<fieldset>

				<legend align=cemter;><b>Tambah Menu Makanan</b></legend>
				<div class="label">

					<label for="nama">Nama :
						<input type="text" name="nama" id="nama"autofocus autocomplete="off">
					</label>
				</div>
				<br>
				<div>
					<label for="harga">Harga :
						<input type="text" name="harga" id="harga" >
					</label>
				</div>
				<br>
				<div>
					<label for="satuan">Stok :
						<input type="text" name="satuan" id="satuan" >
					</label>
				</div>




				<br>
				<button type="submit" name="submit">Simpan</button>



			</fieldset>

		</form>
	</center>
</body>

</html>