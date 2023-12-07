<?php 
include '../koneksi/koneksi.php';

include '../cek/cek-login.php';
$st=mysqli_query($koneksi,"SELECT * FROM stok_kue ");

?>




<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
	<title>Sistem Pengolahan Umkm</title>
	<link rel="stylesheet" type="text/css" href="../style/kasir.css">

</head>
<body>
	<nav class="nav">
		<h1 class="inline">Lumpia Salad Mama Umar 27</h1>
		<a href="../index.php"><button class="inline margin-kr-19persen btn-font-15">Home</button></a>
	</nav>
		
	<div style="display: flex;">
		<aside class="side">
			<div style="padding: 15px;">
				<a href="index.php"><button class="btn-font-25">Makanan</button></a>
			</div>
			<div style="padding: 15px;">
				<a href="stok_minuman.php"><button class="btn-font-25">Minuman</button></a>
			</div>
			<div style="padding: 15px;">
				<a href="stok_kue.php"><button class="btn-font-25">kue</button></a>
			</div>
			<div style="padding: 15px;">
				<a href="stok_bahanpokok.php"><button class="btn-font-25">Bahan Pokok</button></a>
			</div>
		</aside>

		<main class="main">
			<h1 style="padding: 15px;">Stok Kue</h1>

  
     <table class="table1">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Jumlah</th>
      <th>Harga</th>
      <th>Aksi</th>
      
  </thead>

  <div>
            <?php $a=1; ?>
            <?php while($row=mysqli_fetch_assoc($st)){ ?>
    <tr>
      <td><?=$a; ?></td>
      <td><?=$row['menu'] ?></td>
      <td><?=$row['satuan'] ?></td>
      <td><?=$row['harga'] ?></td>
      <td><a href="ubah_kue.php?menu=<?= $row['menu']; ?>"><button style="margin: 10px">Ubah</button></a> <a href="tambah_kue.php?menu=<?= $row['menu']; ?>"><button style="margin: ; 10px">Tambah</button></a></td>
    </tr>
    <?php $a++; ?>
  <?php } ?>
    
  </div>
</table>


        </main>

    </div>
        
        <footer class="footer">
     
   </footer>
</body>
</html>