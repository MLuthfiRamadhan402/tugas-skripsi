<?php 
include '../koneksi/koneksi.php';
include '../koneksi/lp_pelanggan.php';

$nama = $_GET['nama'];

$pesan=mysqli_query($con,"SELECT * FROM $nama");

$total=mysqli_query($con,"SELECT SUM(jumlah) AS 'total' FROM $nama ");
$total=mysqli_fetch_assoc($total);


$jumlah_item=mysqli_query($con,"SELECT SUM(satuan) AS 'jumlah_item' FROM $nama ");
$jumlah_item=mysqli_fetch_assoc($jumlah_item);


 ?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Laporan penjualan</title>
         <script>
            function printcontent(el) {
                var restorepage = document.body.innerHTML;
                var printcontent = document.getElementById(el).innerHTML;
                document.body.innerHTML = printcontent;
                window.print();
                document.body.innerHTML = restorepage;

             }
         </script>
    </head>

    <body style="font-size: 10px; width:20% ;">

        <div>
       <div id="div1">

                <div>
                <img src="../gambar/logo27b.jpeg" style="width: 10px; height: 10px; border-radius: 50%; display: inline"> <p style="display: inline;"> <b>Lumpia Salad Mama Umar 27 </b> <br>kampung maja lembur No.4 RT.005 Rw.002 Desa curug badak kecamatan maja Kabupaten Lebak-Banten.</p>
                <p>Nama Pelanggan: <?= $nama; ?></p>
            </div>
              
                    <table>
                        <tr > 
                            <th><center>Menu</center></th>
                            <th><center>Satuan</center></th>
                            <th><center>Harga</center></th>
                            <th><center>Jumlah</center></th>
                        </tr>
                        <?php $i=1; ?>
                        <?php while($row = mysqli_fetch_assoc($pesan)){ ?>

                        <tr style="text-align: center;">
                          
                            <td style="text-align: left;"><?=$row['menu'] ?></td>
                            <td><?=$row['satuan'] ?></a></td>
                           <td><?=number_format($row['harga'] )?></td>
                            <td><?=number_format($jumlah=$row['jumlah'])?></td>

                        </tr>
            
                    <?php $i++;
                            } ?>
                    </table>
                    <p>Jumlah Item: <?=$jumlah_item['jumlah_item'] ?></p>
                   <p>Total Harga: Rp.<?=number_format($total['total'])?></p>
                   <p>Terimakasih Atas Pemesananya</p>
       </div>
                   
                <button name="print" onclick="printcontent('div1')">Print</button>
                <br><br>
                  <a href="index.php"><button>Kembali</button></a>
                
         </div>    

     
    </body>
</html>
