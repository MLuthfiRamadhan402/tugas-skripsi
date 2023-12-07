<?php

include '../koneksi/koneksi.php';
include '../koneksi/lp_pelanggan.php';
$menu = $_GET['menu'];

if ($menu === $_GET['menu']) {
	// perhitungan sementara untuk di ubah stuan ke stok
	$tp = mysqli_query($con, "SELECT * FROM pesan WHERE menu='$menu'  ");
	$tp=mysqli_fetch_assoc($tp);
	$satuan= $tp['satuan'];

// memnampilkan pehitungan sementara untuk di input ke update
		$aa = mysqli_query($koneksi, "SELECT * FROM stok_makanan WHERE menu='$menu'");
		$aa = mysqli_fetch_assoc($aa);
		$bb = mysqli_query($koneksi, "SELECT * FROM laporan_harian WHERE menu='$menu'");
		$bb = mysqli_fetch_assoc($bb);
		$total = $aa['satuan'] + $satuan;
		$total2 = $bb['satuan'] - $satuan;

		// update data satuan di databases laporan harian
		mysqli_query($koneksi, "UPDATE laporan_harian SET satuan='$total2' 
			WHERE menu='$menu'
 ");

		// update data satuan di databases tabel stok
		mysqli_query($koneksi, "UPDATE stok_makanan SET 
			satuan='$total' 
		WHERE menu='$menu'
		");

		mysqli_query($koneksi, "UPDATE stok SET satuan='$total' 
		WHERE menu='$menu'");

	mysqli_query($con, "DELETE FROM pesan WHERE menu='$menu' ");





	header('location:index.php');
}
