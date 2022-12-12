<?php  
require"functions/functions.php";

$id=$_GET["id"];

// query data tambahmenu berdasarkan idnya
$menu= query("SELECT * FROM tambahmenu WHERE id_menu=$id")[0];
// var_dump($menu[1]);

// cek apakah tombol submit sudah ditekan atau belum
// apakah post ,submit key nya
if( isset($_POST["submit"])){

	// cek apakah data berhasil diupdate atau tidak
	// ada berapa baris dalam tabel yg terpengaruhi(mysqli_affected_rows)
	// kirrim ke function ubah 
	if( update($_POST)>0){
		echo"
		<script>
			alert('Data berhasil diupdate');
			document.location.href='daftarmenu.php';
		</script>";
	}else{
		echo"
		<script>
			alert('Data gagal diupdate');
			document.location.href='daftarmenu.php';
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
	<title>Update Menu</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	
	<style type="text/css">
		body{
			background-color: #262626;
		}
	</style>

</head>
<body>
	<?php require"nav.php" ?>
	
    <form action="" method="post" enctype="multipart/form-data">
		<div style="border:2px solid white; color: white; width:1000px; margin-left:auto; margin-right:auto; margin-top: 100px; background-color:white;">

		<div style="background-color: #FF9933; height: 25px; font-weight: bold; font-size: 12px; text-align:center;">Tambah Menu</div>

		<div style="color:black; padding:15px; font-size:12px;">
			<input type="hidden" name="gambarlama" value="<?php echo $menu[1]?>" >
			<div>
				<label for="gambar">Upload Gambar</label><br>
				<img src="img_upload/<?php echo $menu[1] ?>" width="80">
				<br>
				<input type="file" name="gambar" id="gambar" style="width:100%;" >
			</div>

			<div style="margin-top:10px;">
				<input type="hidden" name="id" value="<?php echo $menu[0]?>" >
			</div>

			<div style="margin-top:10px;">
				<label for="nama">Nama Manu</label><br>
				<input type="text" name="nama" id="nama" style="width:100%;" required value="<?php echo $menu[2] ?>">
			</div>

			<div style="margin-top:10px;">
				<label for="harga">Harga Menu</label><br>
				<input type="text" name="harga"harga id="harga" style="width:100%;" required value="<?php echo $menu[3] ?>">
			</div>
<!-- required, agar inputannyaa tidak boleh kosong -->

			<button type="submit" name="submit" class="btn btn-success" style="margin-top:13px;">Update Menu</button>
			</div>
		</div>
	</form>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>