<?php 
session_start();

require "../halaman admin/functions/functions.php";

$id=$_GET["id"];

// query ambil data
$produk=query("SELECT * FROM tambahmenu WHERE id_menu=$id")[0];

// var_dump($produk)
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Link css -->
    <link rel="stylesheet" type="text/css" href="css/s.css">

    <!-- Responsive css -->
    <!-- <link rel="stylesheet" type="text/css" href="css/responsive.css"> -->

    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/d98efcb603.js" crossorigin="anonymous"></script>

    <!-- Logo title -->
    <link rel="icon" type="text/css" href="img/logocoffee.png">

    <style type="text/css">
      body{
        background-color: white;
      }
    </style>

    <title></title>
  </head>
  <body>
    
    <!-- Nav bar -->
   <!-- <hp include 'nav.php' > -->

   <section>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <img src="../halaman admin/img_upload/<?php echo $produk[1] ?>">
          </div>
          <div class="col-md-3">
            <h2><?php echo $produk[2] ?></h2>
            <h4>Rp. <?php echo $produk[3] ?></h4>
            <form method="post">
              <div class="form-group">
                <div class="input-group">
                  <input type="number" min="1" name="jumlah">
                  <div class="input-group-btn">
                    <button class="btn btn-primary" name="beli">Beli</button>
                  </div>
                </div>
              </div>
            </form>

            <?php 
            if(isset($_POST['beli'])){
              $jumlah=$_POST['jumlah'];
              $_SESSION['keranjang'][$id]=$jumlah
              ;

              echo"<script type='text/javascript'>alert('Produk telah masuk ke keranjang belanja');</script>";

              header('Location:keranjang.php');

            }

            ?>
          </div>
        </div>
      </div>
   </section>


<!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- Java script -->
    <!-- <script type="text/javascript" src="Home"></script> -->
    
  </body>
</html>