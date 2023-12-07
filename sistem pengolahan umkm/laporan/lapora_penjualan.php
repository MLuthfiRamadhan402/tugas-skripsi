<?php 
include '../koneksi/koneksi.php';
include '../koneksi/lp_pelanggan.php';

$lp= mysqli_query($koneksi,"SELECT * FROM laporan  ");

if(isset($_POST['cari'])){
    $data= strtolower($_POST['data']);
    $lp= mysqli_query($koneksi,"SELECT * FROM laporan WHERE
        nama_pelanggan LIKE '%$data%' OR
        waktu LIKE '%$data%'

        ");
}

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

            <div style="margin: 20px; padding: 10px;">
           <div style="padding-bottom: 25px;"><h1>Laporan Penjualan</h1>
                <div style="margin-left: 50%;">
                    <form action="" method="post">
                    <input type="text" name="data" size="33px" autofocus autocomplete="off">
                    <button name="cari">Cari</button>
                    </form>
                </div>
           </div> 

 			<table class="table1">
                <tr>
                    <th>Nama Pelanggan</th>
                    <th>waktu</th>
                    <th></th>
                    <th><a href="index.php"><button class="inline margin-kr-19persen btn-font-15">Menu Laporan</button></a></th>
                </tr>
 				<?php while($row= mysqli_fetch_assoc($lp) ){ ?>
 				<tr>
 					<td><?= $row['nama_pelanggan'] ?></td>
                    <td><?= $row['waktu'] ?></td>
                    <td><a href="data.php?nama=<?= $row['nama_pelanggan'] ?>">Melihat</a></td>
                    <td></td>
 				</tr>
 			<?php } ?>
 			</table>	
            </div>	
 </body>
 </html>