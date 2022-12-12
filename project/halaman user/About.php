<?php  

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    

	<title>About Us</title>
</head>
<body>
	<?php require"nav.php" ?>
	<!-- Css -->
    <link rel="stylesheet" type="text/css" href="css/about.css">
	
      <!-- nav2 -->
      <nav class="navbar2 navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item2">
                <a class="nav-link active mx-2" aria-current="page" href="#story">CERITA KAMI</a>
              </li>
              <li class="nav-item2 mx-2">
                <a class="nav-link" href="#people">ORANG</a>
              </li>
              <li class="nav-item2 mx-2">
                <a class="nav-link" href="#awards">PENCAPAIAN</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- About us -->
      <div class="container">
	      <div style="color:white; font-weight:700; text-align: center; margin-top: 50px;">
	      	<h4 style="color: #FF9933; font-weight: 700;">About Us</h4>
	      	<h1 style="font-weight: 700; margin-top: -10px;">TENTANG KAMI</h1>
	      	<img src="img_about/horizontal.png" >
	      	<p>INI ADALAH MENGENAI CERITA DAN PERJALANAN KAMI, APA YANG KAMI LAKUKAN, SERTA ORANG - ORANG DI<br> 
			BELAKANG BRAND BENTO COFFEE</p>
		  </div>

		  <div style="color:white; font-weight:700; margin-top:100px;">
			<h4 style="color: #FF9933; font-weight: 700;" id="story">Our Story</h4>
			<h2 style="font-weight: 700;">TENTANG KAMI</h2>
			<img src="img_about/horizontal.png">
			<p style="margin-top: 30px;">Kami adalah perusahaan kopi yang mendedikasikan seluruh gairah, kecintaan, dan antusiasme kami kepada dunia kopi yang menakjubkan. Kami adalah perusahaan lokal dan sebagian besar bahan baku yang kami gunakan adalah lokal. Ya, dan kami mengatakan hal tersebut dengan bangga.</p>
			<div class="row">
				<div class="col-md-3">
					<img src="img_about/logo.png">
				</div>	
				<div class="col-md-9">
					<p>Dimulai dari  hobi kami meminum kopi , kami mencoba membuka sebuah outlet kecil didepan minimarket di kota jogja,butuh 
					beberapa waktu untuk usaha kami bisa berkembang menjadi jaringan kopi nasional dengan cabang tersebar  dibanyak kota 
					di indonesia.<br><br>

					Biji-biji kopi terbaik dunia berasal dari Indonesia. Kami berkeliling ke berbagai pelosok Indonesia dan bekerja sama dengan para
					petani dan pemanggang kopi lokal untuk mendapatkan cite rasa kopi terbaik Indonesia, biji kopi arabika grade satu dan berbagai
					perkebunan yang tersebar di Nusantara.<br><br> 

					Memanfaatkan jaringan dan pengalaman, kami menggunakan teknologi terbaru untuk alat dan campuran kacang kami. Langsung
					dari petani terpilih, biji kopi berkualitas tinggi diproses dan dipanggang dengan sempurna oleh kami sendiri kemudian diteruskan ke
					barista terampil kami, dengan penuh semangat menyiapkan secangkir kebahagiaan untuk disajikan kepada Anda secara khusus.
					Dengan pengalaman dan pengetahuan kami di industri kopi ritel,i sampai dengan bagaimana mendesainsebuah coffee bar, kami 
					membuat perjalanan bisnis kopi Anda menjadi EASY,SIMPLE,dan FUN!</p>
				</div>	
			</div>
	      </div>
	  </div>

	  <!-- Orang dibelakang merk -->
	  <div class="container" style="color: white;">
	  	<h4 style="color: #FF9933; font-weight: 700; margin-top: 100px; " id="people">The People</h4> 
	  	<h2 style="font-weight: 700;">ORANG-ORANG DI BELAKANG MERK</h2>  
	  	<img src="img_about/horizontal.png">
	  	<div class="row" style="margin-top:30px;">
	  		<div class="col-md-3 text-center">
	  			<img src="img_about/orang.png">
	  			<h4 style="font-size: 20px; font-weight: 700; margin-top: 20px;">Hernanda Hiqmal</h4>
	  			<p style="font-weight:600; font-size:13px;">FOUNDER-CEO</p>
	  			<p style="font-size:13px;">"Bento Coffee bukan hanya sekedar kopi,
				tapi apa yang kami lakukan disini adalah
				mengenai memberikan kebanggan terhadap 
				kopi indonesia"</p>
	  		</div>

	  		<div class="col-md-3 text-center">
	  			<img src="img_about/orang.png">
	  			<h4 style="font-size: 20px; font-weight: 700; margin-top: 20px;">Satman Afandi</h4>
	  			<p style="font-weight:600; font-size:13px;">CFO (Chief Financial Officer)</p>
	  			<p style="font-size:13px;">Berkaryalah dengan hati agar  bisa memberikan sesutau yg bermanfaat</p>
	  		</div>

	  		<div class="col-md-3 text-center">
	  			<img src="img_about/orang.png">
	  			<h4 style="font-size: 20px; font-weight: 700; margin-top: 20px;">Arbyansyah Permana</h4>
	  			<p style="font-weight:600; font-size:13px;">CXO (Chief Experience Officer)</p>
	  			<p style="font-size:13px;">Roast and make the best of your possible cup of coffee with all your heart, that's what we called as a perfect cup of coffee</p>
	  		</div>

	  		<div class="col-md-3 text-center">
	  			<img src="img_about/orang.png">
	  			<h4 style="font-size: 20px; font-weight: 700; margin-top: 20px;">Muh.Alvisyahr</h4>
	  			<p style="font-weight:600; font-size:13px;">COFFEE EXPERT</p>
	  			<p style="font-size:13px;">Love, Live, Coffee..</p>
	  		</div>
	  	</div> 
	  </div>

	  <!-- Pencapaian -->
	  <div class="container" style="color:white; font-weight:700;">
	  	<h4 style="color: #FF9933; font-weight: 700; margin-top: 100px;" id="awards">AWARDS</h4>
	  	<h2 style="font-weight: 700;">PENCAPAIAN</h2>  
	  	<img src="img_about/horizontal.png">
	  	<p style="margin-top:30px;">Bento Coffee sebagai merek kopi lokal tanah air tak henti-hentinya berusaha mengupayakan yang terbaik dan memberikan kebanggaan atas pencapaian prestasinya.</p>

	  	<div class="row text-center" style="margin-top:30px;">
	  		<div class="col-md-4">
	  			<img src="img_about/mango.png">
	  			<h6 style="font-weight:700; margin-top: 20px;">2015-mango thief king</h6>
	  		</div>

	  		<div class="col-md-4">
	  			<img src="img_about/mango.png">
	  			<h6 style="font-weight:700;  margin-top: 20px;">2016-cheating on the guise of eating</h6>
	  		</div>

	  		<div class="col-md-4">
	  			<img src="img_about/mango.png">
	  			<h6 style="font-weight:700;  margin-top: 20px;">2017-king of turu</h6>
	  		</div>

	  		<div class="row" style="margin-top:40px;">
		  		<div class="col-md-4">
		  			<img src="img_about/mango.png">
		  			<h6 style="font-weight:700;  margin-top: 20px;">2018-king eat free</h6>
		  		</div>
		  	</div>	
	  	</div>
	  </div>

	  <!-- Bawahh -->
	  <div style="background-color: white; margin-top: 30px; height: 70px; text-align: center; padding:25px;">
	  	<p style="font-weight:700;">© 2020 All rights reserved.</p>
	 </div>


	 

</body>
</html>