<?php  
  require "../halaman admin/functions/functions.php";

if(!isset($_SESSION['login'])){
  header('Location: login.php');
  exit;
}

  $tampil=mysqli_query($koneksi,"SELECT * FROM cart");

  // var_dump($_SESSION)

  if(isset($_POST['submit'])){
  	$metode=$_POST['mtdp'];
  	$_SESSION['metode']=$metode;

  	header('Location: bayar.php');
  }
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Metode Pembayaran</title>

	

	<style type="text/css">
		.table2 tr{
			text-align: left;
		}

		.t-right{
			text-align: right;
		}
	
			
	</style>
</head>
<body>
	<?php require"nav.php" ?>
	<style type="text/css">
		body{
			background-color: #262626;
		}
	</style>


	<div id="container">
		<div>
			<div style="border:2px solid black; color: white; width:1000px; margin-left:auto; margin-right:auto; margin-top: 100px; background-color:white; ">

				<div style="background-color: #FF9933; height: 25px; font-weight: bold; font-size: 12px; text-align:center; display:block; justify-content:center; ">PEMBAYARAN
				</div>

				<table class="table" style=" color: black; width: 900px; margin-left:auto; margin-right:auto;">
					
					<thead>
					    <tr style="background-color:#F2F2F2; text-align: center;">
					      <th style="border-bottom:2px solid black;" scope="col">Menu</th>
					      <th style="border-bottom:2px solid black;" scope="col">Harga</th>
					      <th style="border-bottom:2px solid black;" scope="col">Jumlah</th>
					    </tr>
				  </thead>

			<?php while ( $row=mysqli_fetch_row($tampil) ) { ?>
				  <tr >
			          <td><?php echo $row[2] ?></td>
			          <td>Rp. <?php echo number_format($row[3]) ?></td>
			          <td><?php echo $row[1] ?></td>


			        </tr> 
			        
			<?php } ?>
			<tr style="text-align:center;">
			      	  <td colspan="2" style="font-weight:bold;">Total Harga</td>
			          <td>Rp. <?php echo $_SESSION['total'] ?></td>
			      </tr>
					

				</table>
				

				<table  cellpadding="20" class="table2" style="text-align:center; color: black; width: 900px; margin-left:auto; margin-right:auto; margin-top: 30px;">
					
					<form action="" method="post">
					<thead>
					    <tr  style="background-color:#F2F2F2; text-align: center;">
					      <th style="border-bottom:2px solid black;" colspan="2" scope="col">Metode Pembayaran</th>
					    </tr>

					    <tr>
					    	<td>
					    		<label for="id"><img src="img/bni.png" width="80"></label></td>
					    		<td class="t-right"><input type="radio" value="BNI" id="bni" name="mtdp"></td>
					    <tr>
					    	<td><img src="img/gopay.png" width="90"></td>
					    	<td class="t-right"><input type="radio" value="GOPAY" id="gopay" name="mtdp"></td>
					    </tr>
					    <tr>
					    	<td><img src="img/ovo.png" width="30"></td>
					    	<td class="t-right"><input type="radio" value="OVO" id="ovo"  name="mtdp"></td>
					    	
					    </tr>
					    <tr style="text-align: center;">
					    	<div >
					    		<td colspan="2"><button type="submit" name="submit" style="background-color:#FF9933; width: 100%; " class="btn btn-light">Pilih metode</button></td>
					    	</div>
					    </tr>
					  </form>

					    
				  </thead>
				</table>
			</div>
		</div>
	</div>
</body>
</html>