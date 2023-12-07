<?php 
include '../koneksi/koneksi.php';
include '../koneksi/lp_pelanggan.php';
include '../koneksi/waktu.php';

$pesan=mysqli_query($con,"SELECT * FROM pesan");

// menghitung jumlah harga yg di pesan
$total=mysqli_query($con,"SELECT SUM(jumlah) AS 'total' FROM pesan ");
$total=mysqli_fetch_assoc($total);

// menghitung jumlah satuan yg di pesan
$jumlah_item=mysqli_query($con,"SELECT SUM(satuan) AS 'jumlah_item' FROM pesan ");
$jumlah_item=mysqli_fetch_assoc($jumlah_item);

// memberikan nomor urut
$no_urut=mysqli_query($koneksi,"SELECT * FROM nourut ");
$no_urut= mysqli_num_rows($no_urut);

$nama= $_GET['namapelanggan'];
$nourut= $no_urut + 1;

 ?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Kasir</title>
         <script>
            function printcontent(el) {
                var restorepage = document.body.innerHTML;
                var printcontent = document.getElementById(el).innerHTML;
                document.body.innerHTML = printcontent;
                window.print();
                document.body.innerHTML = restorepage;
                window.location.replace("cetak.php?namapelanggan=<?= $nama;?>");

             }
         </script>
    </head>

    <body style="font-size: 10px; width:20% ;">

       <div id="div1">
            <div>
                <img src="../gambar/logo27b.jpeg" style="width: 10px; height: 10px; border-radius: 50%; display: inline"> <h6 style="display: inline;"> <b>Lumpia Salad Mama Umar 27 </b> <br>kampung maja lembur No.4 RT.005 Rw.002 Desa curug badak kecamatan maja Kabupaten Lebak-Banten.</h6>
                <hr>
            </div>
                <p><?=$hari; ?> <?=$d; ?> <?=$bulan; ?> <?=$y; ?><br>
                    Nomor Urut: <?= $nourut; ?> <br>
                    Nama Pelanggan: <?= $nama; ?>
                
                </p>
              
                 
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
                          
                            <td><?=$row['menu'] ?></td>
                            <td><?=$row['satuan'] ?></a></td>
                           <td><?=number_format($row['harga'] )?></td>
                            <td><?=number_format($jumlah=$row['jumlah'])?></td>

                        </tr>
            
                    <?php $i++;
                            } ?>
                    </table>
                    <hr>
                    <h6>Jumlah Item: <?=$jumlah_item['jumlah_item'] ?></h3>
                   <h6>Total Harga: Rp.<?=number_format($total['total'])?></h3>
                    <hr>
                   <p style="font-size: 10px;">Terimakasih Atas Pemesananya</p>
       </div>
                   
                <button name="print" onclick="printcontent('div1')">Print</button>
                <a href="index.php"> <button>Batal</button></a>
                  
                
             
    </body>
</html>
