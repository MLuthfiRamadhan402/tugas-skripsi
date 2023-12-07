<?php 
include '../koneksi/koneksi.php';
include '../koneksi/lp_pelanggan.php';


 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Laporan Penjualan</title>
 	<link rel="stylesheet" type="text/css" href="../style/kasir.css">
 </head>
 <body>   
        <div style="display: flex; width: 100%;">
           <h1 style="padding: 10px 10px 25px 10px; ">Menu Laporan</h1>
            <a href="../index.php"><button style="margin-left: 60%; margin-top: 20px;">Home</button></a> 
        </div>
        
        <div style="display: flex; padding-left: 290px;">
        <div class=" border inline">
        <div>
            <img src="../gambar/laporan penjulan.png" width="225" height="225" >
        </div>
            <div style="padding: 10px 10px 20px 45px;"> <a href="lapora_penjualan.php"><button>Laporan Penjualan</button></a>
            </div>
    </div>

            <div class=" border inline">
        <div>
             <img src="../gambar/laporan stok.jpg" width="225" height="225" >
        </div>
            <div style="padding: 10px 10px 20px 65px;"> <a href="laporan_stok.php"><button>Laporan Stok</button></a>
            </div>
    </div>

            <div class=" border inline">
        <div>
            <img src="../gambar/laporan harian.png" width="225" height="225" >
        </div>
            <div style="padding: 10px 10px 20px 57px;"> <a href="laporan_harian.php"><button>Laporan Harian</button></a>
            </div>
    </div>
 		</div>	
 </body>
 </html>