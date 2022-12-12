<?php 
require '../halaman admin/functions/functions.php';
$menu=query("SELECT * FROM tambahmenu");

if(!isset($_SESSION['login'])){
  header('Location: login.php');
  exit;
};
// jika tombol cari diklik
if (isset($_GET['search'])) {
	$menu=search($_GET['keywoard']);
};
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <title>Bento Coffee</title>
  </head>
  <body>
    
    <!-- Nav bar -->
    <?php require"nav.php" ?>
    <!-- Link css -->
    <link rel="stylesheet" type="text/css" href="css\style.css">

    <div id="about">
      <div class="card-about" style="">
        <div class="row">
          <h1 class="t1">Welcome To<br><span>BENTO</span> COFFEE</h1>
          <p class="t2">We are here to provide our best<br> services at affordable prices</p> 
          <a href="About_Us.html"><button class="btn1">About Us</button></a>
        </div>
      </div>
    </div>


    <!-- Layanan kami -->
    <section id="layanan">
    <div class="t3 text-center">
      <h2 class="t4">our service</h2>
    </div>

      <div class="row">
        <div class="col-md-6 col-lg-3 text-center mt-4 ">
          <div class="card-layanan">
            <div class="circle-icon position-relative mx-auto">
              <img src="img/Icon coffee.png" class="position-absolute top-50 start-50 translate-middle">
            </div> 
              <h3 class="mt-3">COFFEE</h3>
              <p class="mt-2">Dari minunan tradisional berbasis espresso sampai berbagai minuman racikan kopi terkini.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 text-center mt-4 ">
          <div class="card-layanan">
            <div class="circle-icon position-relative mx-auto">
              <img src="img/Icon non-coffee.png" class="position-absolute top-50 start-50 translate-middle">
            </div> 
              <h3 class="mt-3">NON-COFFEE</h3>
              <p class="mt-2">Kami juga memiliki menu non-coffee untuk
              kamu  yang ingin pilihan  lain selain kopi.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 text-center mt-4 ">
          <div class="card-layanan">
            <div class="circle-icon position-relative mx-auto">
              <img src="img/Icon food.png" class="position-absolute top-50 start-50 translate-middle">
            </div> 
              <h3 class="mt-3">FOOD</h3>
              <p class="mt-2">Berbagai macam makanan ringan sampai makanan utama siap menemani secangkir kopimu.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 text-center mt-4 ">
          <div class="card-layanan">
            <div class="circle-icon position-relative mx-auto">
              <img src="img/Icon dessert.png" class="position-absolute top-50 start-50 translate-middle">
            </div> 
              <h3 class="mt-3">DESSERT</h3>
              <p class="mt-2">Aneka hidangan penutup hadir untuk 
              menjadi pilihanmu.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Best Seller -->
    


    <section id="contact">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-md-6"  style="color: white;">
              <h1 class=contact-head style="font-weight: 600">Ada Pertanyaan?<br>
              Silahkan Kontak Kami<br>
              Kami Siap Membantu</h1>
              <div class="description">
                <p style="font-weight: bold; margin-top:30px;" id="kontak">Kontak</p>
                <p><img src="img/location.png">             Jl.godean no.44 Yogyakarta</p>
                <p><img src="img/whatsapp.png">          +62 82782726938</p>
                <p><img src="img/email.png">BentoCoffee@gmail.com</p>

                <p style="font-weight:bold; margin-top: 25px;">Social Media</p>
                <a href="https://web.facebook.com/?_rdc=1&_rdr"><img src="img/fb.png"></a>
                <a href="https://twitter.com/login"><img style="margin-left:10px;" src="img/twiter.png"></a>
                <a href="https://www.instagram.com/?hl=id"><img style="margin-left:8px;" src="img/ig.png"></a> 
                <label>@BentoCoffee</label>
              </div>
            </div>

            <div class="col-md-6 " style="color:white;">
              <!-- <div class="card-contact w-100"> -->
              <div class="card-contact">
                  <h1>Saran dan Masukan!</h1>
                  <form action="https://formspree.io/f/xvoyekyg" method="post">
                    <input class="email" type="email" name="email" placeholder=" Masukkan email anda disini..">
                    <input class="pesan" type="text" name="pesan" placeholder="Pertanyaan Anda..">
                  <button type="submit">Kirim</button>
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- Java script -->
    <!-- <script type="text/javascript" src="Home"></script> -->
    
  </body>
</html>