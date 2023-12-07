<?php 
include 'koneksi.php';
include 'cek-login.php';


 ?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Lumpia Salad Mama Umar 27</title>
    <link rel="stylesheet" type="text/css" href="style/kasir.css">

</head>
<body>

    <div class="jumbotrom margin-bw-50 padding-ats-10 padding-bawah-20 ">
        <div>
        <h1 class="margin-kr-20 text-shadow inline">Lumpia Salad Mama Umar 27</h1>
        <a href="logout.php"><button style="margin-left: 90%;">Logout</button></a>
        </div>
        <div class="border-radius-3 tengah box-shadow">
                <img src="gambar/logo27b.jpeg" style="width: 100%; height: 100%;">
        </div>
    </div>

<div class="d40">
    <div>
    <div class="contener border inline margin-bw-50">
        <div>
           <img src="gambar/kasir.jpg" width="200" height="213" >
        </div>
            <div class="tengah"> <a href="kasir/index.php"><button>Kasir</button></a>
            </div>
    </div>

    <div class="contener border inline  margin-bw-50">
        <div>
            <img src="gambar/menu.jpg" width="200" height="213" >
        </div>
            <div class="tengah"> <a href="menu/index.php"><button>Menu</button></a>
            </div>
    </div>

    <div class="contener border inline margin-bw-50">
        <div>
            <img src="gambar/stok.png" width="200" height="213" >
        </div>
            <div class="tengah"> <a href="stok/index.php"><button>Stok</button></a>
            </div>
    </div>

    <div class="contener border inline margin-bw-50">
        <div>
           <img src="gambar/laporan.jpg" width="200" height="213" >
        </div>
            <div class="tengah"> <a href="laporan/index.php"><button>Laporan</button></a>
            </div>
    </div>
</div>

<footer class="footer">
           <h6>Creator</h6>
           <p><b>Muhammad Luthfi Ramadhan</b></p>
       </footer> 

</div>    
</body>
</html>