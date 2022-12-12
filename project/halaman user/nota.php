<?php  
require "../halaman admin/functions/functions.php";

if(isset($_POST['submit'])){
	$sql=mysqli_query($koneksi,"SELECT * FROM bayarr");
	while($data=mysqli_fetch_row($sql)){
		$hapus=mysqli_query($koneksi,"DELETE FROM bayarr");
	};

	$data=mysqli_query($koneksi,"SELECT * FROM menu");
	while($d=mysqli_fetch_row($data)){
		$delete=mysqli_query($koneksi,"DELETE FROM menu");
		};

	$ql=mysqli_query($koneksi,"SELECT * FROM cart");
	while($o=mysqli_fetch_row($ql)){
		$delete=mysqli_query($koneksi,"DELETE FROM cart");
		};

	header('Location: home.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nota</title>
</head>
<body>
	 <?php require"nav.php" ?>
	 <style type="text/css">
			body{
				background-color: #262626;
			}
		</style>
	<div style="border:2px solid black; color: white; width:1000px; margin-left:auto; margin-right:auto; margin-top: 100px; background-color:white;">

	<table class="table" style=" text-align:center; color: black; width: 900px; margin-left:auto; margin-right:auto; ">

		<div style=" background-color: #FF9933; height: 25px; font-weight: bold; font-size: 12px; text-align:center;">Nota</div>

		<div style="margin-top:10px; text-align:center;">

			<thead>
			    <tr style="background-color:#F2F2F2; border-bottom: 2px solid black;">
			      <th colspan="3" scope="col">Bento Coffee</th>
			  </thead>

		</div>
		<tbody>
        <tr>
          <div class="jmlh">
          <td scope="row" style="text-align:center;">Nomor Meja</td>
          <td>:</td>
          <td><?php echo $_SESSION['lgn'] ?></td>

          <form id="formD" name="formD" action="" method="post">
        </tr>

        <tr>
        	<td scope="row" style="text-align:center;">Metode Pembayaran</td>
          <td>:</td>
          <td><?php echo $_SESSION['metode'] ?></td>
        </tr>

        <?php $tampil=mysqli_query($koneksi,"SELECT * FROM bayarr"); 
        while ( $row=mysqli_fetch_row($tampil) ) { ?>
        <tr>
        	<td scope="row" style="text-align:center;">Rekening Tujuan</td>
          <td>:</td>
          <td><?php echo $row[3] ?></td>
        </tr>
    	  </form>
    	  <?php } ?>
    	  		  <thead>
					    <tr style="background-color:#F2F2F2; text-align: center;">
					      <th style="border-bottom:2px solid black;" scope="col">Menu</th>
					      <th style="border-bottom:2px solid black;" scope="col">Jumlah</th>
					      <th style="border-bottom:2px solid black;" scope="col">Harga</th>
					    </tr>
				  </thead>

				  <?php $data=mysqli_query($koneksi,"SELECT * FROM menu"); 
        			while ( $row=mysqli_fetch_row($data) ) { ?>
				   <tr>
			          <td><?php echo $row[1] ?></td>
			 		  <td><?php echo $row[3] ?></td>
			 		  <td>Rp. <?php echo $row[2] ?></td>
			        </tr> 

			    <?php } ?>
			        <tr>
			        	 <td colspan="2" style="font-weight:bold;">Total harga</td>
			        	 <td>Rp.<?php echo $_SESSION['total'] ?></td>
			        </tr>
          </div>
        </tbody>
    </table>
    <form action="" method="post">
	    <div style="padding:10px; text-align:right; width: 100%; ">
	    	<button type="submit" name="submit" class="btn btn-success" style="margin-right: 130px;">Done</button>
	    </div>
	</form>

</body>
</html>

<!-- meja
menu
jumlah
harga
total
tanggal
catatan -->