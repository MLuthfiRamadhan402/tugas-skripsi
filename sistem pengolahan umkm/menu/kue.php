<?php
include '../koneksi/koneksi.php';
include '../koneksi/lp_pelanggan.php';

$menu = mysqli_query($koneksi, "SELECT * FROM kue  ");



?>


<!doctype html>
<head>
  <meta charset="utf-8">
  <title>Menu</title>
  <link rel="stylesheet" type="text/css" href="../style/kasir.css">
</head>

<body>
      <h1>Lumpia Salad Mama Umar 27</h1>
  <nav class="nav">

    <a><b>Menu</b></a>
    <a class="margin-kr-30" href="index.php"><button>Makanan</button></a>
    <a  href="minuman.php"><button>Minuman</button></a>
    <a  href="kue.php"><button>Kue</button></a>
    <a href="../index.php"><button class="tengah">Home</button></a>


  </nav>

  <table class="table1">
    <thead class="">
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Harga</th>
        <th> </th>
        <th>Kue</th>
        <th> <a href="tambah_kue.php"><button class="btn btn-primary my-2 my-sm-0">Tambah</button></a></th>
      </tr>
    </thead>

    <div>
      <?php $i = 1; ?>
      <?php while ($row = mysqli_fetch_assoc($menu)) { ?>


        <tr>
          <td><?= $i; ?></td>
          <td><b><?= $row['menu'] ?></b></td>

          <td><b><?= $row['harga'] ?></b></td>
          <td></td>
          <td>
            <a href="ubah_kue.php?menu=<?= $row['menu'] ?>"><button class=""><b>Ubah</b></button></a>
            <a href="hapus_kue.php?menu=<?= $row['menu'] ?>"><button class=""><b>Hapus</b></button></a>
          </td>
          <td></td>
        </tr>
        <?php $i++; ?>
      <?php
      }

      ?>
    </div>
  </table>

  <footer>
      <h6>Creator</h6>
      <p><b>Muhammad Luthfi Ramadhan</b></p>
  </footer>
  
</body>
  
</html>