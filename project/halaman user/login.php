<?php  
require '../halaman admin/functions/functions.php';

if(isset($_SESSION['login'])){
	header('Location: home.php');
	exit;
}

if (isset($_POST['login'])){
	$nomormeja=$_POST['nomor'];

	$result=mysqli_query($koneksi,"SELECT
		* FROM meja WHERE nomor_meja='$nomormeja'");

	// var_dump($result);

	$nomor=mysqli_fetch_row($result);
	// var_dump($nomor[1]);
	$_SESSION['lgn']=$nomor[1];
	if ($nomor[1]==$nomormeja) {
		$_SESSION['login']=true;
		header('Location: home.php');	
		exit;
	}else{
		echo"<script>alert('Email/Password yg anda masukkan salah')</script>";
		header('Location: login.php');
	};


	// while ( $row=mysqli_fetch_row($result) ) {
	// 	$db= $val[1];
	// 	var_dump($db);
	// };

	
	// untuk menghitung berapa baris
	// if(===$nomormeja){
	// 	header('Location: home.php');
	// }


};
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>
	<div >
		<form action="" method="post">
			<ul>
				<li><label for="nomor">Masukkan nomor meja</label></li>
				<li><input required id="nomor" type="" name="nomor" placeholder="masukkan nomor meja"></li>
				<button type="submit" name="login">Login</button>
			</ul>
		</form>
	</div>
</body>
</html>