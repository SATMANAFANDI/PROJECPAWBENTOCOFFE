<?php  

require "../halaman admin/functions/functions.php";

$id=$_GET["id"];

$hapus=mysqli_query($koneksi, "DELETE FROM cart WHERE id=$id");

echo "<script>alert('Data berhasil dihapus')</script>";
header('Location: keranjang.php');

?>