<?php 

// Jika belum Login
if(isset($_SESSION['login'])){
	
}else{
	header('location:../login.php');
}

 ?>