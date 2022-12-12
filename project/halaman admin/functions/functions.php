<?php 
	// Membuat koneksi ke database
	$koneksi=mysqli_connect("localhost","root","","bento","8111");

	session_start();

	function query($query){
		// variabel didalam function dan diluar functions itu beda
		global $koneksi;

		// result itu lemarinya
		$result=mysqli_query($koneksi,$query);
		// wadah kosong/array kosong
		$rows=[];
		while ( $row=mysqli_fetch_row($result) ) {
			$rows[] = $row;
		}
		return $rows;
	}

	function tambah($data){
		global $koneksi;

		// upload gambar
		$gambar=upload();
		// !not,kalau gagal fungsinya tambah kita berhentikan
		if(!$gambar){
			return false;
		}

		// ambil data dari tiap elemen dalam form
		// $gambar=htmlspecialchars($data['gambar']);
		$id=htmlspecialchars($data['id']);
		$nama=htmlspecialchars($data['nama']);
		$harga=htmlspecialchars($data['harga']);
//  htmlspecialchars() dapat digunakan untuk mengubah beberapa karakter yang telah ditentukan menjadi entitas HTML

		// query insert data
		$query="INSERT INTO tambahmenu VALUES ('$id','$gambar','$nama','$harga')";

		mysqli_query($koneksi, $query);
		

		return mysqli_affected_rows($koneksi);
		}


		function upload(){
			$namafile=$_FILES['gambar']['name'];
			$ukuranfile=$_FILES['gambar']['size'];
			$error=$_FILES['gambar']['error'];
			$tmps=$_FILES['gambar']['tmp_name'];

			// // cek apakah tdk ada gambar yg di upload, 4 itu tdk ada gambar yg diupload
			// if($erorr===4){
			// 	echo "
			// 	<script>
			// 		alert('Pilih Gambar!')
			// 	</script>";
			// 	return false;
			// }


			// // cek apakah yg diupload adalah gambar
			$ekstensigambar=['jpg','jpeg','png'];
			// explode, fungsi untuk memecah sebuah string menjadi array
			$ekstensi= explode('.', $namafile);
			// strlower merubahnya menjadi huruf kecil semua
			$ekstensi=strtolower(end($ekstensi));

			// mengecek ekstensi gambar yg diupload ada gk di line 63
			if(!in_array($ekstensi, $ekstensigambar)){
				echo "
				<script>
					alert('Yg anda diupload bukan gambar!')
				</script>";
				return false;
			}


			// // cek jika ukurannya terlalu besar
			if ($ukuranfile>1000000){
				echo"
				<script>
					alert('Ukuran gambar terlalu besar')
				</script>";
				return false;
			}


			// // generate nama gambar  baru
			// uniqid,untuk random string gitu
			$namafilebaru=uniqid();
			$namafilebaru .='.';
			$namafilebaru .=$ekstensi;
			// var_dump($namafilebaru);die;
			


			// lolos pengeceken,gambar siap upload
			// move_uploaded_file,untuk memindahkan file
			move_uploaded_file($tmps, 'img_upload/' . $namafilebaru);
			return $namafilebaru;


		}


		function hapus($id){
			global $koneksi;

			mysqli_query($koneksi,"DELETE FROM tambahmenu WHERE id_menu=$id");

			return mysqli_affected_rows($koneksi);
		}



		function update($data){
			global $koneksi;

		$gambarlama=htmlspecialchars($data['gambarlama']);

		// cek apakah user pilih gambar atau tidak
		if($_FILES['gambar']['error']===4){
			$gambar=$gambarlama;
		}else{
			$gambar=upload();	
		}


		// $gambar=htmlspecialchars($data['gambar']);
		$id=$data['id'];
		$nama=htmlspecialchars($data['nama']);
		$harga=htmlspecialchars($data['harga']);

		// query insert data
		// set, atau ganti dta mana jadi apa
		$query="UPDATE tambahmenu SET 

		-- ganti gambarnya dengan gambar yg baru
		gambar='$gambar',
		nama='$nama',
		harga='$harga'

		WHERE id_menu=$id
		";

		// jalankan querynya
		mysqli_query($koneksi, $query);
		
		// kembalikan
		return mysqli_affected_rows($koneksi);
		}


		function search($keywoard){
			$query="SELECT * FROM tambahmenu WHERE nama LIKE '%$keywoard%'";
			return query($query);
		} 
?>