<?php 
include '../koneksi/koneksi.php';
include '../cek/cek-login.php';
include '../koneksi/waktu.php';

$st=mysqli_query($koneksi,"SELECT * FROM stok_bahanpokok ");



?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
  <title>Sistem Pengolahan Umkm</title>
  <link rel="stylesheet" type="text/css" href="../style/kasir.css">

    <script>
            function cetak3(el) {
                var restorepage = document.body.innerHTML;
                var printcontent = document.getElementById(el).innerHTML;
                document.body.innerHTML = printcontent;
                window.print();
                document.body.innerHTML = restorepage;
                
             }
         </script>

</head>
<body>
  <nav>
  </nav>
<div style="display: flex;">
  <aside class="side">
    <div style="padding: 15px;">
        <a href="laporan_stok.php"><button class="btn-font-25">Laporan Stok Menu</button></a>
      </div>
      <div style="padding: 15px;">
        <a href="laporan_bahanpk.php"><button class="btn-font-25">Laporan Stok Bahan Pokok</button></a>
      </div>
      <div style="padding: 15px;">
        <a href="index.php"><button class="btn-font-25">Menu Laporan</button></a>
      </div>
  </aside>

  <main class="main">
    <div id="ck">
      <div>
        <img src="../gambar/logo27b.jpeg" style="width: 50px; height: 50px; border-radius: 50%; display: inline"> <p style="display: inline;"> <b style="font-size: 25px;">Lumpia Salad Mama Umar 27 </b> <br>kampung maja lembur No.4 RT.005 Rw.002 Desa curug badak kecamatan maja Kabupaten Lebak-Banten.</p>
      </div>
      <hr><hr>
      <h1 style="padding: 15px;">Laporan Stok Bahan Pokok</h1>

  
     <table class="table1">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Jumlah</th>
      <th>Harga</th>
      
  </thead>

 
            <?php $a=1; ?>
            <?php while($row=mysqli_fetch_assoc($st)){ ?>
    <tr>
      <td><?=$a; ?></td>
      <td><?=$row['nama'] ?></td>
      <td><?=$row['satuan'] ?></td>
      <td><?=$row['harga'] ?></td>
    </tr>
    <?php $a++; ?>
  <?php } ?>
    
</table>

      <div style="margin-left:65%;">
      <br>
      <p>Lebak, <?=$hari; ?> <?=$d; ?> <?=$bulan; ?> <?=$y; ?> </p>
      <br><br><br>
      <p style="margin-left: 20%;">Siti Maryam</p>
      <br>
    </div>
 </div>
    <br>
     <button name="print" onclick="cetak3('ck')">Cetak</button>
  </main>
</div>
<footer class="footer">
    
  </footer>
</body>
</html>