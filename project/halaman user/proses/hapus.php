<?php 

session_start();
  require "../../halaman admin/functions/functions.php";

  $id = $_GET['id'];

  unset($_SESSION['keranjang'][$id]);
// var_dump($a)
  header('Location:../keranjang.php');
?>