<?php 
include '../koneksi/koneksi.php';
include '../cek/cek-login.php';
include '../koneksi/waktu.php';

$st=mysqli_query($koneksi,"SELECT * FROM laporan_harian ");



?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
  <title>Sistem Pengolahan Umkm</title>
  <link rel="stylesheet" type="text/css" href="../style/kasir.css">

    <script>
            function ck(el) {
                var restorepage = document.body.innerHTML;
                var printcontent = document.getElementById(el).innerHTML;
                document.body.innerHTML = printcontent;
                window.print();
                document.body.innerHTML = restorepage;
               
                
             }
         </script>

</head>
<body>
  <div style="display: flex;">
    <aside class="side">
    <div style="padding: 15px;">
        <a href="index.php"><button class="btn-font-25">Menu Laporan</button></a>
      </div>
      
  </aside>

    <main class="main">
      <div id="div1">
      <div>
        <img src="../gambar/logo27b.jpeg" style="width: 50px; height: 50px; border-radius: 50%; display: inline"> <p style="display: inline;"> <b style="font-size: 25px;">Lumpia Salad Mama Umar 27 </b> <br>kampung maja lembur No.4 RT.005 Rw.002 Desa curug badak kecamatan maja Kabupaten Lebak-Banten.</p>
      </div>
      <hr><hr>
      <h1 style="padding: 15px;">Laporan Penjualan Harian</h1>

  
     <table class="table1">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Jumlah Terjual</th>
      <th>Harga Satuan</th>
     
      
  </thead>

  <div>
            <?php $a=1; ?>
            <?php while($row=mysqli_fetch_assoc($st)){ ?>
    <tr>
      <td><?=$a; ?></td>
      <td><?=$row['menu'] ?></td>
      <td><?=$row['satuan'] ?></td>
      <td><?=$row['harga'] ?></td>
     
    </tr>
    <?php $a++; ?>
  <?php } ?>
    
  </div>
</table>
        <div style="margin-left:65%;">
      <br>
      <p>Lebak, <?=$hari; ?> <?=$d; ?> <?=$bulan; ?> <?=$y; ?> </p>
      <br><br><br>
      <p style="margin-left: 20%;">Siti Maryam</p>
      <br>
    </div>
</div>
         <button name="print" onclick="ck('div1')">Cetak</button>
 
        </main>

  </div>
  
</body>
</html>