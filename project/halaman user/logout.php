<?php  
	require "../halaman admin/functions/functions.php";
	$_SESSION[''];
	session_unset();
	session_destroy();

	header('Location: login.php');
	exit;
?>
