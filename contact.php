<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Contact</title>

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
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/css_ela.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>
	<div class="wadah">	
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

	<!-- contact form -->
	<div class="contact-from-section mt-5 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div class="form-title">
						<h2>Apakah Kamu Mempunyai Kritik dan Saran?</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, ratione! Laboriosam est, assumenda. Perferendis, quo alias quaerat aliquid. Corporis ipsum minus voluptate? Dolore, esse natus!</p>
					</div>
				 		<div id="form_status"></div>
							<div class="contact-form">
								<form action="" method="post"> 
									<div class="row">
										<div class="col jarak">
											<input type="text" style="width: 380px" name="nama" class="form-control" placeholder="Nama Lengkap">
										</div>
										<div class="col jarak">
											<input type="email" class="form-control" id="email" name="email" placeholder="Email">
										</div>
									</div>
										<div class="form-group jarak">
											<input type="text" class="form-control" name="subject" id="formGroupExampleInput" placeholder="Subjek">
										</div>
										<div class="form-group jarak">
											<textarea class="form-control" name="saran" style="height: 150px;" id="exampleFormControlTextarea1" placeholder="Kritik Saran" rows="3"></textarea>
										</div>
										<button type="submit" class="buttonSemua btn btn-primary" style="width: 100px" name="kirim" value="kirim">Kirim</button>

											<!-- SUBMIT SARAN -->
											<?php
												include "koneksi.php";
												@$nama = $_POST['nama'];
												@$email = $_POST['email'];
												@$subject = $_POST['subject'];
												@$saran = $_POST['saran'];
												@$kirim = $_POST['kirim'];
												// Memasukkan data (Insert) 
												@$query = "INSERT INTO tb_saran VALUES ('','$nama','$email','$subject','$saran')";

												// hasil data array (kirim)
												if (isset($_POST['kirim'])) {
													$hasil = mysqli_query($koneksi, $query);
													if ($hasil) {
														echo "<script>alert('Saran dan Kritik berhasil dikirim');
															document.location='contact2.php'
															</script>";
													} else {
														echo "<script>alert('Gagal Dikirim');
															document.location='contact2.php'</script>";
																}
												}
								
											?>
								</form>
							</div>
				</div>

				<div class="col-lg-4">
						<div style="margin-top: 27px;">
							<div class="card card-index font contact-form-box" style="margin-bottom: 33px;">
								<div class="card-body">
									<h4><i class="fas fa-map" style="color: #FFC224;"></i> Alamat Kantor</h4>
									<p>01, Kangean <br> Klojen, Malang. Indonesia</p>
								</div>
							</div>
							<div class="card card-index font contact-form-box" style="margin-bottom: 33px;">
								<div class="card-body">
									<h4><i class="fas fa-address-book" style="color: #FFC224;"></i>Hubungi Kami</h4>
									<p>Kirim pesan melalui email<br>startup@wmind.com</p>
								</div>
							</div>
							<div class="card card-index font contact-form-box" >
								<div class="card-body">
									<h4><i class="fas fa-phone-volume" style="color: #FFC224;"></i>Telepon</h4>
									<p>Telp: +00 111 222 <br> Whatsapp: 0822-3494-0026</p>
								</div>
							</div>
						</div>
					</div>
			</div> 
		</div> 
	</div>
	<!-- end contact form -->

	<!-- find our location -->
	<div class="find-location blue-bg" style="background-color: #0E1B3A">
		<div class="container"  >
			<div class="row"  >
				<div class="col-lg-12 text-center" >
					<p> <i class="fas fa-map-marker-alt" style="color: #FFC224;"></i> Temukan Kami</p>
				</div>
			</div>
		</div>
	</div>
	<!-- end find our location -->

	<!-- google map section -->
	<div class="embed-responsive embed-responsive-21by9">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.0949009947994!2d112.62638691432853!3d-7.989135781885339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6281bad9578b3%3A0x36c164cff2d1385f!2sJl.%20Kangean%20No.1%2C%20Kasin%2C%20Kec.%20Klojen%2C%20Kota%20Malang%2C%20Jawa%20Timur%2065117!5e0!3m2!1sid!2sid!4v1641569404069!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" class="embed-responsive-item"></iframe>
	</div>
	<!-- end google map section -->


	<!-- footer -->
	<div class="footer-area" style="background-color: #0E1B3A">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Alamat</h2>
						<ul>
							<li>Kangean 1, Klojen, Malang.</li>
							<li>startup@wmind.com</li>
							<li>+00 111 222</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Wmind</h2>
						<ul>
							
							<li><a href="temukan_webinar.php">Temukan Webinar</a></li>
							<li><a href="news.html">Artikel</a></li>
							<li><a href="services.html">Tentang Kami</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">Hubungi Kami</h2>
						<ul>
							<li>
								<div class="row">
									<img src="assets/img/whatsapp.png" style="width:30px;height:30px;margin-right:10px;margin-left:10px;" alt="">
									<p>0822-3494-0026<p>
								</div>	
							</li>
							<li>
								<div class="row">
									<img src="assets/img/phone-call.png" style="width:30px;height:30px;margin-right:10px;margin-left:10px;" alt="">
									<p>+00 111 222<p>
								</div>	
							</li>
							<li>
								<div class="row">
									<img src="assets/img/email.png" style="width:30px;height:30px;margin-right:10px;margin-left:10px;" alt="">
									<p>startup@wmind.com<p>
								</div>	
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->
	
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
	<!-- form validation js -->
	<script src="assets/js/form-validate.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>
	
</body>
</html>