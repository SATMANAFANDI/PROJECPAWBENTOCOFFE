<?php  

require "../halaman admin/functions/functions.php";

if(!isset($_SESSION['login'])){
  header('Location: login.php');
  exit;
}


$menu=query("SELECT * FROM tambahmenu");



if (isset($_POST["submit"])){
  $nama = $_POST['nama'];
  $img = $_POST['img'];
  $harga = $_POST['harga'];
  $jumlah = $_POST['jumlah'];

  $query="INSERT INTO cart VALUES('','$jumlah','$nama','$harga','$img')";
  mysqli_query($koneksi,$query);
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Coffee</title>
	</head>
<body>
	<!-- Nav bar -->
    <?php require"nav.php" ?>
    <style type="text/css">
			body{
				background-color: black;
			}
		</style>

	<div style="display: flex; flex-wrap: wrap; gap: 20px; padding: 100px;" >
	<?php foreach ( $menu as $row ):?>
		<div class="" style="width: 15rem;">
		  <img style="border-radius: 10px;" src="../halaman admin/img_upload/<?php echo $row[1] ?>" class="card-img-top" alt="..." >
		  <div class="card-body" style="color:white;">
		    <b><?php echo $row[2] ?></b>
		    <p class="card-text">Rp.<?php echo number_format($row[3]) ?></p>
        <div style="display:flex;">
          <form action="" method="post">
           <input type="number" value="1" min="1" name="jumlah" style="width:50px; border-radius: 8px;">
           <input type="hidden" name="img" value="<?php echo $row[1] ?>">
           <input type="hidden" name="nama" value="<?php echo $row[2] ?>">
           <input type="hidden" name="harga" value="<?php echo $row[3] ?>">
  			   <!-- <a style="text-decoration: none; background-color:#FF9933; padding:8px; border-radius: 8px; color: white;"  href="proses/tambah_keranjang.php?id=<pp echo $row[0] ?>">Beli</a> -->
            <button class="btn btn-primary" style="background-color:#FF9933; border-radius: 8px; margin-top: -7px;" type="submit" name="submit">Beli</button>

           </form>
        </div>
		  </div>
		</div>
    
	 <?php endforeach; ?>
	 </div>
</body>
</html>