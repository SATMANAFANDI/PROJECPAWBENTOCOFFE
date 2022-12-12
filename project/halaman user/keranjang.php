<?php  
  require "../halaman admin/functions/functions.php";

if(!isset($_SESSION['login'])){
  header('Location: login.php');
  exit;
}

 $tampil=mysqli_query($koneksi,"SELECT * FROM cart");
  

 $total=0;

if(isset($_POST['submit'])){
  $tl=$_POST['total'];
  // var_dump($tl);
  $_SESSION['total']=$tl;

  header('Location: pembayaran.php');
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Keranjang</title>
	
	  
  <link rel="stylesheet" type="text/css" href="css/s.css">

</head>
<body>

	 <!-- Nav bar -->
    <?php require"nav.php" ?>
    <style type="text/css">
    body{
      background-color: #262626;
    }
  </style>


<div style="border:2px solid white; color: white; width:1000px; margin-left:auto; margin-right:auto; margin-top: 100px; background-color:white;">

	<table class="table" style="text-align:center; color: black; width: 900px; margin-left:auto; margin-right:auto; ">

		<div style="background-color: #FF9933; height: 25px; font-weight: bold; font-size: 12px; text-align:center;">Cart</div>

		<div style="margin-top:10px; text-align:center;">

 
    <thead>
    <tr style="background-color:#F2F2F2; border-bottom: 2px solid black;">
      <th scope="col">Menu</th>
      <th scope="col">Harga</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Hapus</th>
    </tr>
  </thead>

     
      <tbody>
        <tr>
          <?php while ( $row=mysqli_fetch_row($tampil) ) { ?>

          <div class="jmlh">
          <th scope="row" style="text-align:center;"><img width="100" src="../halaman admin/img_upload/<?php echo $row[4] ?>"><p><?php echo $row[2] ?></p></th>
          <td>Rp.<?php echo number_format($row[3]) ?> </td>

          <form id="formD" name="formD" action="" method="post">
            <td><?php echo $row[1] ?></td>
           
          <td><a href="cc.php?id=<?php echo $row[0] ?>"><i class="fa-solid fa-trash"></i></a></td>
        </tr></form>

        <?php $jumlah=$row[3]*$row[1];
        $total+=$jumlah
        ?>


      <?php } ?>


      


          </div>
        </tbody>
    </table>
      

  <div style='color:black; margin-top:30px; width:400px; margin-left: auto; margin-right: 10px; font-weight:bold;'>
      <div style='background-color:#F2F2F2; text-align: center; border-bottom: 2px solid black;'>Total Belanja</div>

      <form action="" method="post">
      <div style='padding:10px; text-align: center;'><label for='total'>Total Harga <i class='fa-solid fa-basket-shopping-simple'></i><span style='font-weight: normal;'>Rp</label> </span><input name="total"  style='height:20px;'  value="<?php echo number_format($total) ?>">
    </div>

      <div style='width: 350px; margin-left: 20px; '>
        <button style="background-color:#FF9933 ; width: 100%; border-radius: 50px; height:30px;" type="submit" name="submit" style=''><i class='fa-sharp fa-solid fa-cart-shopping'></i>Checkout</button>
      </div>
    </form>
    </div>
  </div>
</div>


 

    
  <!-- // }else{

    // echo"
    // <img src='img/cart.png' width='200' style='margin-right:20px;'><br><br>
    // <h2 style='color:black;'>Your cart is empty!</h2>
    // <a href='Coffee.php' type='button' class='btn btn-primary' style='background-color:#FF9933;'> Shopping Now!</a>"
    ; -->
  




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>

