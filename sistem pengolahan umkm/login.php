<?php 

include 'koneksi/koneksi.php';

if (isset($_POST['submit'])){

	$nama= $_POST['nama'];
	$password= $_POST['password'];

	$aa=mysqli_query($koneksi,"SELECT * FROM user WHERE username='$nama' ");
	$aa= mysqli_fetch_assoc($aa);

	if($nama === $aa['username']){

			if($password === $aa['password']){

				$_SESSION['login'] = true;
				header('location:index.php');

			}else{
				echo "<script>

		alert('Password Anda Salah');
		window.location.href('tambah_makan.php');

	</script>";
			}
	}else{
		echo "<script>

		alert('Username Anda Salah');
		window.location.href('tambah_makan.php');

	</script>";
	}

}

	// login ke tampilan utama
if (!isset($_SESSION['login'])){

}else{
	header('location:index.php');
}


 ?>


<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<center>
		<form action="" method="post" enctype="multipart/form-data">

			<fieldset>

				<legend align=cemter;><b>Lumpia Salad Mama Umar 27</b></legend>
				<h3>Login</h3>
				<table>
					<tr>
						<td><label for="nama">Username </td>
						<td>: <input type="text" name="nama" id="nama" required></td>
					</tr>
					<tr>
						<td><label for="password">Password</td>
						<td>: <input type="password" name="password" id="password" required></td>
					</tr>
				</table>
					
						
					
				</div>
				<br>
				
				<br>
				
				<button type="submit" name="submit">Login</button>



			</fieldset>

		</form>
	</center>
</body>

</html>
