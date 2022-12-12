<?php  
require "functions/functions.php";

$menu=query("SELECT * FROM detail"); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Detail Pesanan</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
	<?php require "nav.php" ?>

	<div style="border:2px solid white; color: white; width:1000px; margin-left:auto; margin-right:auto; margin-top: 100px; background-color: white; text-align:center;">
	    <div style="background-color: #FF9933; height: 25px; font-weight: bold; font-size: 12px; text-align:center;">Daftar Menu</div>

	    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Menu</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Harga</th>
  </thead>
  <tbody>
  	<?php $i=1; ?>
  	<?php foreach ( $menu as $row ):?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $row[1] ?></td>
      <td><?php echo $row[2] ?></td>
      <td>Rp.<?php echo $row[3] ?></td>
      <!-- <td><php echo $row[4] ?></td> -->
    </tr>

    
    <?php $i++; ?>
   	<?php endforeach; ?>
  </body>
  <tr>
    	<td colspan="3"><h6>Total</h6></td>
    	<td>Rp. <?php echo $row[4] ?></td>
    </tr>
</table>
  </body>
</table>
</body>
</html>