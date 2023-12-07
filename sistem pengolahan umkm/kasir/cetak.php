<?php 
include '../koneksi/koneksi.php';
include '../koneksi/lp_pelanggan.php';

date_default_timezone_set('Asia/Jakarta');

$nama= $_GET['namapelanggan'];

if ($nama === $_GET['namapelanggan']){
$bulan= date('F');
switch($bulan){
        case 'January':$bulan='Januari';
                break;
         case 'February':$bulan='Februari';
                break;
         case 'March':$bulan='Maret';
                break;
         case 'April':$bulan='April';
                break;
         case 'May':$bulan='Mei';
                break;
         case 'June':$bulan='Juni';
                break;
         case 'July':$bulan='Juli';
                break;
         case 'August':$bulan='Agustus';
                break;
         case 'September':$bulan='September';
                break;
         case 'October':$bulan='Oktober';
                break;
         case 'November':$bulan='November';
                break;
         case 'December':$bulan='Desember';
                break;
}

       $d=date("d");
       $y=date("Y");
       $H=date("H");
       $i=date("i");

$id= date('dmYHi');
$waktu = strtolower($d." ".$bulan." ".$y." ".$H.":".$i );
$namap= $nama.'_'.$id;

mysqli_query($con,"CREATE TABLE $namap(

        menu varchar(30) not null,
        satuan varchar(30) not null,
        harga varchar(30) not null,
        jumlah varchar(30) not null,
        jenis varchar(30) not null

) ");



$pesan=mysqli_query($con,"SELECT * FROM pesan");
$pesan=mysqli_fetch_assoc($pesan);
$total=mysqli_query($con,"SELECT SUM(jumlah) AS 'total' FROM pesan ");
$total=mysqli_fetch_assoc($total);


$jumlah_item=mysqli_query($con,"SELECT SUM(satuan) AS 'jumlah_item' FROM pesan ");
$jumlah_item=mysqli_fetch_assoc($jumlah_item);

   
mysqli_query($koneksi,"INSERT INTO laporan VALUES(
        '',
        '$namap',
        '$waktu'
)");


mysqli_query($con,"INSERT INTO $namap SELECT * FROM pesan ");

mysqli_query($koneksi,"INSERT INTO nourut VALUES('')");

mysqli_query($con,"DELETE FROM pesan ");


header('location:index.php');

    }    
 ?>


