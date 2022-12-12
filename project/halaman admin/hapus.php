<?php
require "functions/functions.php";

$id=$_GET["id"];

if( hapus($id) > 0 ){
	echo"
		<script>
			alert('Data berhasil dihapus');
			document.location.href='daftarmenu.php';
		</script>";

	}else{echo"
		<script>
			alert('Data gagal dihapus');
			document.location.href='daftarmenu.php';
		</script>";
	}

?>