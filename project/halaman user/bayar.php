<?php  
require '../halaman admin/functions/functions.php';

if(isset($_POST['submit'])){
  $meja = $_SESSION['lgn'];
  $metode = $_SESSION['metode'];
  $tujuan = $_POST['tujuan'];
  $nominal = $_SESSION['total'];
  $catatan=$_POST['catatan'];

  $date=date('y-m-d');


  $query="INSERT INTO bayarr VALUES('','$meja','$metode','$tujuan','$catatan','$date','$nominal')";
  mysqli_query($koneksi,$query);

  $pesan="INSERT INTO pesan VALUES('','$meja','$date','$catatan')"; 
						mysqli_query($koneksi,$pesan);


}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bayar</title>
</head>
<body>
	<?php require "nav.php"?>
	<style type="text/css">
		body{
			background-color: #262626;
		}
	</style>

<div style=" 
  width: 100px;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-200%, -50%);">
	<div style="width:500px; background-color: white; height: 350px; text-align:center; border:2px solid black;">
		<div style="width:100%; background-color:#FF9933; color:white; ">Bayar</div>
		<div>
			<form action="" method="post"  > 

					<h6>Meja: <?php echo $_SESSION['lgn'] ?></h6> 
					<h6>Metode pembayaran: <?php echo $_SESSION['metode'] ?> </h6>
					<h6><label>Rekening tujuan: </label><input name="tujuan" value="341486454"  type="" ></h6>
					<h6>Nominal: <input disabled value="<?php echo $_SESSION['total'] ?>"  type="" name="total"></h6>

					<textarea placeholder="Catatan" name="catatan"></textarea>

					<?php   $sql=mysqli_query($koneksi,"SELECT * FROM cart");
					while($data=mysqli_fetch_row($sql)){
					 ?>
					 <input type="hidden" name="menu" value="<?php echo $data[2] ?>">
					 <input type="hidden" name="harga" value="<?php echo $data[3] ?>">
					 <input type="hidden" name="jumlah" value="<?php echo $data[1] ?>">

					 <?php $cof=[
					"nama"=>$data[2], 
					"harga"=>$data[3],
					"jumlah"=>$data[1],];
					

					if(isset($_POST['submit'])){

						$nama=$cof['nama'];
						$hrg=$cof['harga'];
						$jml=$cof['jumlah'];
						$que="INSERT INTO menu VALUES('','$nama','$hrg','$jml')";
						mysqli_query($koneksi,$que);

						$pesan="INSERT INTO detail VALUES('','$nama','$jml','$hrg','$nominal')"; 
						mysqli_query($koneksi,$pesan);

						
					
						header('Location: nota.php');
						// echo $cof['nama'];
						// var_dump($cof) 
					}?>

					

					<!-- <input type="hidden" name="arraynama" value="<php echo $cof['nama'] ?>"> -->


					<?php } ?>
					<button type="submit" name="submit" class="btn btn-light" style="margin-top: 30px; border-radius: 50px; background-color:#FF9933; width:100%;">Bayar</button>			
			</form>
		</div>
	</div>
</div>
</body>
</html>