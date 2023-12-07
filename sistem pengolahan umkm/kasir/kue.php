<?php
include '../koneksi/koneksi.php';
include '../koneksi/lp_pelanggan.php';
include '../cek/cek-login.php';

$pesan = mysqli_query($con, "SELECT * FROM pesan");
$menu = mysqli_query($koneksi, "SELECT * FROM kue");

// total harga
$total = mysqli_query($con, "SELECT SUM(jumlah) AS 'total' FROM pesan ");
$total = mysqli_fetch_assoc($total);

// jumlah item
$jumlah_item = mysqli_query($con, "SELECT SUM(satuan) AS 'jumlah_item' FROM pesan ");
$jumlah_item = mysqli_fetch_assoc($jumlah_item);

?>



<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8" />
    <title>Sistem Pengolahan Umkm</title>
    <link rel="stylesheet" type="text/css" href="../style/kasir.css">

</head>
<body>
    <nav class="nav">
        <h1 class="inline">Lumpia Salad Mama Umar 27</h1>
        <button class="inline margin-kr-19persen btn-font-15"><a href="../index.php">Home</a></button>
    </nav>
        
    <div style="display: flex;">
        <aside class="side">
            <div style="padding: 15px;">
                <a href="index.php"><button class="btn-font-25">Makanan</button></a>
            </div>
            <div style="padding: 15px;">
                <a href="minuman.php"><button class="btn-font-25">Minuman</button></a>
            </div>
            <div style="padding: 15px;">
                <a href="kue.php"><button class="btn-font-25">kue</button></a>
            </div>
        </aside>

        <main class="main">
            <h1>Kasir</h1>
            
             <div style="padding-bottom: 15px; padding-left: 5px;padding-top: 15px;">
                    <!-- untuk mengirim data dengan link ke pesanan dapa heref -->
                    <?php while ($rows = mysqli_fetch_assoc($menu)) { ?>
                        <button style="padding-left: 5px;"><a class="dropdown-item" href="pesan_kue.php?menu=<?= $rows['menu']; ?>"><?= $rows['menu'] . ' ' . $rows['harga']; ?></a></button>
                    <?php } ?>
                </div>
                
          <div>
                

                <table class="table1">
                    
                    <tr>
                        <th>No</th>
                        <th>Menu</th>
                        <th>satuan</th>
                        <th>harga</th>
                        <th>jumlah</th>
                        <th></th>
                    </tr>
                     <?php $i = 1; ?>
                    <?php while ($row = mysqli_fetch_assoc($pesan)) { ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $row['menu'] ?></td>
                            <td><?= $row['satuan'] ?></td>
                            <td><?= number_format($row['harga']) ?></td>
                            <td><?= number_format($jumlah = $row['jumlah']) ?></td>
                            <td> <a href="batal_<?= $row['jenis']; ?>.php?menu=<?= $row['menu']; ?>"><button>Batal</button></a></td>
                        </tr>

                    <?php $i++;
                    } ?>
                </table>
                <h3>Jumlah Item: <?= $jumlah_item['jumlah_item'] ?></h3>
                <h3>Total Harga: Rp.<?= number_format($total['total']) ?></h3>
                <div style="padding: 7px;">
                      <a href="nama.php"><button>Pesan</button></a>
                     
                </div>
              
            </div>

        </main>

    </div>
        
        <footer>
            
        </footer>
</body>
</html>