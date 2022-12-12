<?php 
session_start();

require "../../halaman admin/functions/functions.php";

$id=$_GET['id'];
var_dump($_SESSION);
// jikaa sudah ada prroduk itu dikeranjang,maka produk itu jumlahnya +1
// if(isset($_SESSION['keranjang'][$id])){
// 	$_SESSION['keranjang'][$id]+=1;
// }//selain itu blm ada fi keranjang maka produk itu dianggap dibeli 1
// else{
// 	$_SESSION['keranjang'][$id]=1;
// }

// var_dump($_SESSION);
$sql="SELECT * FROM tambahmenu WHERE id_menu=$id";
$query=mysqli_query($koneksi,$sql);
$beli=mysqli_fetch_object($query);

$_SESSION['keranjang'][$id]=[
	'img'=> $beli->gambar,
	'nama'=>$beli->nama,
	'harga'=>$beli->harga,
];

$_SESSION['jumlah'][$id]=[
	
];

// var_dump($_SESSION['keranjang']);

// header('Location:../c.php');?\
echo "<script>alert('Produk telah masuk ke keranjang belanja')</script>";
// header('Location: ../cc.php');
?>