<?php 

session_start();

if(!isset($_SESSION['login'])){
  header('Location: login.php');
  exit;
}

// hubungkan daftar dan functions
require "functions/functions.php";



// Ambil data dari table pemesanan / query data pemesanan
// Ambil seluruh data dari table(SELECT * FROM)
// $result=mysqli_query($koneksi,"SELECT * FROM tambahmenu");
// variabel result ibarat lemari

// lakukan query dengan memanggil fungsi query dihalam function untuk emndapatkan seluruh data menu
$menu=query("SELECT * FROM tambahmenu");

if (isset($_GET['search'])) {
  $menu=search($_GET['keywoard']);
};
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daftar Menu</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

	<style type="text/css">
		body{
			background-color: #262626;
		}
	</style>
</head>
<body>
	 <?php require"nav.php" ?>


    <div style="border:2px solid white; color: white; width:1000px; margin-left:auto; margin-right:auto; margin-top: 100px; background-color: white; text-align:center;">
	    <div style="background-color: #FF9933; height: 25px; font-weight: bold; font-size: 12px; text-align:center;">Daftar Menu</div>

	    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Id Menu</th>
      <th scope="col">Gambar</th>
      <th scope="col">Nama</th>
      <th scope="col">Harga</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  	<?php $i=1; ?>
  	<?php foreach ( $menu as $row ):?>
    <tr>
      <th scope="row"><?php echo $i ?></th>
      <td><?php echo $row[0]; ?></td>
      <td><img src="img_upload/<?php echo $row[1] ?>" width="80"></td>
      <td><?php echo $row[2]; ?></td>
      <td><?php echo $row[3]; ?></td>
      <td><a class="btn btn-primary" href="update.php?id=<?php echo $row[0] ?>">Update </a>||<a class="btn btn-danger" href="hapus.php?id=<?php echo $row[0]; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus menu?')">Delete</a></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
  </body>
</table>

	    
	</div>
  <form action="" method="get">
                  <input type="text" name="keywoard"  autofocus placeholder="cari..." size="10" autocomplete="off"><!-- autofocus=untuk memfokuskan ke input kita, autocomplete=untuk menghapus history di inputan -->
                  <button type="submit" name="search">Search</button>
</form>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>