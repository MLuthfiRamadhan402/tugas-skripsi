<?php 
date_default_timezone_set('Asia/Jakarta');
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

    $hari = date ("D");
 
	switch($hari){
		case 'Sun':
			$hari= "Minggu";
		break;
 
		case 'Mon':			
			$hari= "Senin";
		break;
 
		case 'Tue':
			$hari= "Selasa";
		break;
 
		case 'Wed':
			$hari= "Rabu";
		break;
 
		case 'Thu':
			$hari= "Kamis";
		break;
 
		case 'Fri':
			$hari= "Jumat";
		break;
 
		case 'Sat':
			$hari= "Sabtu";
		break;

		}
$y=date("Y");
$d=date("d");


 ?>