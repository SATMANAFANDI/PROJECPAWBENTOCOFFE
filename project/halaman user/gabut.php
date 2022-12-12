<?php  

require "../halaman admin/functions/functions.php";

session_start();

$menu=query("SELECT * FROM tambahmenu");

if (isset($_POST["add_to_cart"])){

	if(isset($_COOKIE['shopping_cart'])){
		$cookie_data=stripcslashes($_COOKIE['shopping_cart']);
		$data_cart= json_decode($cookie_data,true);
	}else{
		$data_cart=array();
	}

	$item_id_list=array_column($data_cart, 'item_id');

	if (in_array($_POST['hidden_id'],$item_id_list)){
		foreach($data_cart as $keys => $val){
			if($data_cart[$keys]['item_id'] == $_POST['hidden_id'] ){
				$data_cart[$keys]['item_jumlah']=$data_cart[$keys]['item_jumlah'] + $_POST['jumlah'];
			}
		}
	}else{

	}

	$item_array=array(
		'item_gambar'=>$_POST['gambar'],
		'item_id'=>$_POST['hidden_id'],
		'item_name'=>$_POST['hidden_name'],
		'item_price'=>$_POST['hidden_harga'],
		'item_jumlah'=>$_POST['jumlah']
	);

	$data_cart[]=$item_array;
	$item_data= json_encode($data_cart);
	setcookie('shopping_cart',$item_data, time()+(86400 * 30));

	header('Location:login.php?success=1');
}

if(isset($_GET['action'])){
	if ($_GET['action']=='delete') {
		$cookie_data=stripcslashes($_COOKIE['shopping_cart']);
		$data_cart= json_decode($cookie_data,true);
		foreach ($data_cart as $keys => $val) {
			if($data_cart[$keys['item_id']==$_GET['id']]){
				unset($data_cart[$keys]);
				$item_data=json_encode($data_cart);
				setcookie('shopping_cart',$item_data,time()+(86400 * 30));
				header('Location:login.php?remove=1');
			}
		}
	}
	if($_GET["action"] == "clear")
 {
  setcookie("shopping_cart", "", time() - 3600);
  header("location:index.php?clearall=1");
 }
}

if(isset($_GET['success'])){
	$message="<script>alert('succes masuk di keranjang')</script>";

	// echo($message);
}

if(isset($_GET['remove'])){
	$message="<script>alert('data berhasil dihapus')</script>";

	echo($message);
}

if(isset($_GET["clearall"]))
{
 $message = '
 <div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  Your Shopping Cart has been clear...
 </div>
 ';
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
	<!-- Nav bar -->
    <?php include"nav.php" ?>

	<div style="display: flex; flex-wrap: wrap; gap: 20px; padding: 100px;" >
	<?php foreach ( $menu as $row ):?>
		<div class="" style="width: 15rem;">
		  <img style="border-radius: 10px;" src="../halaman admin/img_upload/<?php echo $row[1] ?>" class="card-img-top" alt="..." >
		  <div class="card-body">
		    <h5 class="card-title"></h5>
		    <b><?php echo $row[2] ?></b>
		    <p class="card-text">Rp.<?php echo $row[3] ?></p>
        <div style="display:flex; ">
          <form action="" method="post" >
           <input type="number" value="1" min="1" name="jumlah" style="width:50px; border-radius: 8px;">

           <input type="" name="gambar" value="<?php echo $row[1] ?>">
           <input type="hidden" name="hidden_name" value="<?php echo $row[2] ?>">
           <input type="hidden" name="hidden_harga" value="<?php echo $row[3] ?>">
           <input type="hidden" name="hidden_id" value="<?php echo $row[0] ?>">
           <!-- <input type="hidden" name="hidden_jumlah" value="<php echo $row[0] >"> -->

           <button type="submit" name="add_to_cart">Beli</button>
  			   <!-- <a style="text-decoration: none; background-color:#FF9933; padding:8px; border-radius: 8px; color: white;"  href="proses/tambah_keranjang.php?id=<?php echo $row[0] ?>">Beli</a> -->
           </form>
        </div>
		  </div>
		</div>
    <?     ?>
	 <?php endforeach; ?>
	 </div>






<table class="table" style="text-align:center; color: black; width: 900px; margin-left:auto; margin-right:auto; ">

		<div style="background-color: #FF9933; height: 25px; font-weight: bold; font-size: 12px; text-align:center;">Cart</div>

		<div style="margin-top:10px; text-align:center;">

  	<a href="login.php?action=clear">Clear all</a>
    <thead>
    <tr style="background-color:#F2F2F2; border-bottom: 2px solid black;">
      <th scope="col">Menu</th>
      <th scope="col">Harga</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Hapus</th>
    </tr>


    <?php if(isset($_COOKIE['shopping_cart'])){
    	$total=0;
    	$cookie_data= stripslashes($_COOKIE['shopping_cart']);
    	$data_cart=json_decode($cookie_data,true);
    	foreach ($data_cart as $keys => $val) {
    ?>
    	</thead>
      <tbody>
        <tr>
          <div class="jmlh">
          <th scope="row" style="text-align:center;"><img width="100" src="../halaman admin/img_upload/<?php echo $val['item_gambar'] ?>">
          <p><?php echo $val['item_name'] ?></p></th>
          <td><?php echo $val['item_price'] ?></td>

          <form id="formD" name="formD" action="" method="post">
            <td><?php echo $val['item_jumlah'] ?></td>
           
          <td><a href="login.php?action=delete&id=<?php echo $val['item_id'] ?>">Delete</a>
          </td> 
        </tr></form>
        </tbody>
    </table>

    <?php 
    	 $total = $total + ($val["item_jumlah"] * $val["item_price"]);
     ?>

    

    <?php
    	}
    } else{
    	echo"<h1>Card Empty</h1>";
    }
    ?>

    <div style='color:black; margin-top:30px; width:400px; margin-left: auto; margin-right: 10px; font-weight:bold;'>
      <div style='background-color:#F2F2F2; text-align: center; border-bottom: 2px solid black;'>Total Belanja</div>

      <div style='padding:10px; text-align: center;'><label for='total'>Total Harga <i class='fa-solid fa-basket-shopping-simple'></i><span style='font-weight: normal;'>Rp</label> </span><input name="txtDisplay" id="total" style='height:20px;' type='' id='total' value="<?php echo($total) ?>">
    </div>

      <div style='background-color:#FF9933; text-align:center;  border-radius: 50px; padding: 2px; width: 400px;'>
        <a href='proses/checkout.php' style='text-decoration: none; color: black;'><i class='fa-sharp fa-solid fa-cart-shopping'></i>Checkout</a>
      </div>
    </div>

  
</body>
</html>