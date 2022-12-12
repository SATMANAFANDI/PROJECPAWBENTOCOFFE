<?php 
// untuk membaca session, taruh di functions


if(isset($_SESSION['login'])){
	header('Location: home.php');
	exit;
}

require 'functions/functions.php';
if(isset($_POST['login'])){
	$username=$_POST['username'];
	$pw=$_POST['pw'];

	$result=mysqli_query($koneksi,"SELECT * FROM users WHERE username='$username'");

	// cek username
	if(mysqli_num_rows($result)===1){

		// set session
		$_SESSION['login']=true;

		// cek password
		$row=mysqli_fetch_row($result);
		if(password_verify($pw, $row[2])){
			header('Location: home.php');
			exit;
		}
	}
	$error=true;
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Admin</title>
</head>
<body>
	<h1>Halaman Login</h1>

	<?php if(isset($error)): ?>
		<p style="color:red; font-style: italic;">username/password salah </p>
	<?php endif; ?>

	<form action="" method="post">
		<ul>
			<li>
				<label for="username">Username:</label>
				<input type="text" name="username" id="username">
			</li>

			<li>
				<label for="pw">Password:</label>
				<input type="password" name="pw" id="pw">
			</li>
			<li>
				<button type="submit" name="login">Login</button>
			</li>
		</ul>
	</form>
</body>
</html>