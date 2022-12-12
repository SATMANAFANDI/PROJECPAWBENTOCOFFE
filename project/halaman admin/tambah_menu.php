<?php  
require"functions/functions.php";



if(!isset($_SESSION['login'])){
  header('Location: login.php');
  exit;
}

// cek apakah tombol submit sudah ditekan atau belum
// apakah post ,submit key nya
if( isset($_POST["submit"])){

	
	// cek apakah data berhasil ditambahkan atau tidak
	// ada berapa baris dalam tabel yg terpengaruhi(mysqli_affected_rows)
	if( tambah($_POST)>0){
		echo"
		<script>
			alert('Data berhasil ditambahkan');
		</script>";
	}else{
		echo"
		<script>
			alert('Data gagal ditambahkan');
		</script>";
	}
};
// document.location.href='index.php';,untuk memindahkan ke file selanjutnya ketika memencet ok pda java script
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Menu</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	
	<style type="text/css">
		body{
			background-color: #262626;
		}
	</style>

</head>
<body>
	<?php require "nav.php" ?>

    <form action="" method="post" enctype="multipart/form-data"><!--  -->

		<div style="border:2px solid white; color: white; width:1000px; margin-left:auto; margin-right:auto; margin-top: 100px; background-color:white;">

		<div style="background-color: #FF9933; height: 25px; font-weight: bold; font-size: 12px; text-align:center;">Tambah Menu</div>

		<div style="color:black; padding:15px; font-size:12px;">
			<div>
				<label for="gambar">Upload Gambar</label><br>
				<input type="file" name="gambar" id="gambar" style="width:100%;">
			</div>

			<div style="margin-top:10px;">
				<label for="id">Id Menu</label><br>
				<input type="text" name="id" id="id" style="width:100%;" required placeholder="masukkan id">
			</div>

			<div style="margin-top:10px;">
				<label for="nama">Nama Manu</label><br>
				<input type="text" name="nama" id="nama" style="width:100%;" required placeholder="masukkan nama"> 
			</div>

			<div style="margin-top:10px;">
				<label for="harga">Harga Menu</label><br>
				<input type="text" name="harga"harga id="harga" style="width:100%;" required placeholder="masukkan harga">
			</div>
<!-- required, agar inputannyaa tidak boleh kosong -->

			<button type="submit" name="submit" class="btn btn-success" style="margin-top:13px;">Simpan Menu</button>
			</div>
		</div>
	</form>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>