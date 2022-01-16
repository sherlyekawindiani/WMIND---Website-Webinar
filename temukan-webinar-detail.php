<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>WMIND</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/logo2.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">
    <!-- css saya -->
    <link rel="stylesheet" href="assets/css/css_tirja.css">

</head>
<?php
	include "koneksi.php" ;
	session_start();
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:login.php?pesan=gagal");
	}
	// membuat session Username
	$email = $_SESSION['email'];
	$query = "SELECT * FROM tb_user WHERE email='$email'";
	$hasil = mysqli_query($koneksi,$query);

	// tb buat webinar
	$id_webinar=$_GET['id_webinar'];
    $query="SELECT*FROM tb_buat_webinar WHERE id_webinar ='$id_webinar'"; //buat query sql
    $hasilDetail=mysqli_query($koneksi,$query); //jalankan query sql
    $dataDetail=mysqli_fetch_array($hasilDetail);

?>
<?php
if(mysqli_num_rows($hasil)>0){
    $data_user = mysqli_fetch_array($hasil);
    $_SESSION["id_user"] = $data_user["id_user"];
    $_SESSION["email"] = $data_user["email"];
    $_SESSION["username"] = $data_user["username"];
    $_SESSION["level"] = $data_user["level"];
}
?>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->

	<!-- header -->
	<nav class="navbar navBarEo">
		<div class="container-fluid navBarEo">
			<a class="navbar-brand" href="index.php">
				<img src="assets/img/logo_transparan.png" style="width: 70%" alt="">
			</a>
			<div class="navBarUsername">
				<p class="panggilUsername"> <?php echo $_SESSION['username']; ?></p>
				<a class="txtLogout" href="logout.php">Logout</a>
			</div>
		</div>
	</nav>
	<!-- end header -->

	<?php
    include "koneksi.php"; //panggil file koneksi
    $id_webinar = $_GET['id_webinar'];
    $query = "SELECT * FROM tb_buat_webinar WHERE id_webinar='$id_webinar'"; //buat query sql
    $hasil = mysqli_query($koneksi, $query); //jalankan query sql
    $data = mysqli_fetch_array($hasil);
    ?>

	<!-- detail webinar -->
	<div class="single-product mt-100 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="single-product-img">
						<img src="assets/img/gambar-poster/<?php echo $data['gambar_poster']; ?>" alt="">
					</div>
				</div>
				<div class="col-lg-6">
                    <h3 style="text-transform: capitalize;"><?php echo $data['judul_webinar']; ?></h3>
					<div class="contact-form-wrap">
						<div class="contact-form-box">
							<h4><i class="fas fa-clock" style="color: #FFC224;"></i> Tanggal & Waktu</h4>
							<p><?php echo $data['tanggal_mulai']; ?> <br> <?php echo $data['waktu_mulai']; ?> WIB</p>
						</div>
						<div class="contact-form-box">
							<h4><i class="fas fa-map-marker-alt" style="color: #FFC224;"></i> Lokasi</h4>
							<p>Online</p>
						</div>
						<div class="contact-form-box">
							<h4><i class="fas fa-user-friends" style="color: #FFC224;"></i> Diselenggarakan oleh</h4>
							<p><?php echo $data['nama_eo']; ?></p>
						</div>
						<div class="tombol-daftar ">
							<a href="form-daftar-webinar.php?id_webinar=<?php echo $data['id_webinar']?>">Daftar</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end detail webinar -->

	<!-- description -->
	<div class="container mb-150">
		<div class="bungkus-deskripsi">
			<div class="bagian-judul text-center mt-5">
				<h3>Deskripsi</h3>
			</div>
			<div class="bagian-deskripsi">
				<p><?php echo $data['deskripsi_webinar']; ?></p>
			</div>
		</div>
	</div>
	<!-- end description -->

	<!-- copyright -->
	<div class="copyright" style="background-color: #0E1B3A">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2021 - <a href="https://imransdesign.com/">Wmind</a>,  All Rights Reserved.</p>
				</div>
				
			</div>
		</div>
	</div>
	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>

</body>
</html>