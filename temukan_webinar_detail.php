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
				<p class="panggilUsername">Sherly eka windiani</p>
				<a class="txtLogout" href="#">Logout</a>
			</div>
		</div>
	</nav>
	<!-- end header -->

	<?php
    include "koneksi.php"; //panggil file koneksi
    $id = $_GET['id'];
    $query = "SELECT * FROM detail_webinar WHERE id='$id'"; //buat query sql
    $hasil = mysqli_query($koneksi, $query); //jalankan query sql
    $data = mysqli_fetch_array($hasil);
    ?>

	<!-- detail webinar -->
	<div class="single-product mt-100 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="single-product-img">
						<img src="assets/img/<?php echo $data['gambar']; ?>" alt="">
					</div>
				</div>
				<div class="col-lg-6">
                    <h3><?php echo $data['judul']; ?></h3>
					<div class="contact-form-wrap">
						<div class="contact-form-box">
							<h4><i class="fas fa-clock"></i> Tanggal & Waktu</h4>
							<p><?php echo $data['tanggal']; ?> <br> <?php echo $data['jam']; ?> WIB</p>
						</div>
						<div class="contact-form-box">
							<h4><i class="fas fa-map-marker-alt"></i> Lokasi</h4>
							<p>1, Kangean <br> Klojen, Malang. <br> Indonesia</p>
						</div>
						<div class="contact-form-box">
							<h4><i class="fas fa-user-friends"></i> Diselenggarakan oleh</h4>
							<p><img src="assets/img/<?php echo $data['']; ?>" alt=""> <?php echo $data['penyelenggara']; ?></p>
						</div>
						<div class="tombol-daftar">
							<a href="form_daftar_webinar.php">Daftar</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end detail webinar -->

	<!-- description -->
	<div class="container">
		<div class="bungkus-deskripsi">
			<div class="bagian-judul text-center mt-5">
				<h3>Deskripsi</h3>
			</div>
			<div class="bagian-deskripsi">
				<p><?php echo $data['deskripsi']; ?></p>
			</div>
		</div>
	</div>
	<!-- end description -->

	<!-- copyright -->
	<div class="copyright mt-150">
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