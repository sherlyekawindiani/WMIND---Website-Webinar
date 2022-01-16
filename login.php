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
    <!-- responsive -->
	<link rel="stylesheet" href="assets/css/css_ela.css">
	

	<style type="text/css">
		.fas{
    		margin-right: 100px;
		}

		.coba{
			margin-left: 50px;
			border: 1px grey;
			width: 60%;
			height: 50px;
			border-radius: 13px;
			box-shadow: 0 2px 6px rgba(0,0,0,0.3);
			transition: .3s ease-out;
		}
		.coba:hover{
			box-shadow: 0 6px 5px rgba(0,0,0,0.3);

		}

		i{
			float: right;
			cursor: pointer;
			margin: 4px 2px;
			font-size: 15px;
		}
		.jarak-form{
			margin-bottom: 20px;
		}
		.btn{
			width: 60%;
			height: 50px;
			margin-left: 50px;
			border-radius: 13px;
			box-shadow: 0 6px 5px rgba(0,0,0,0.3);
			box-shadow: 0 2px 6px rgba(0,0,0,0.3);
			transition: .3s ease-out;
		}
			</style>
		


</head>
<?php
session_start();
include "koneksi.php";
?>
<body>
	<div class="wadah">
		<!-- form -->
		<div class="contact-from-section">
			<div class="row">
				<div class="col-lg-6">
					<div class="warna">
						<!-- <div class="logo-form"><img src="assets/img/logoWmindKuning.png" alt=""></div> -->
						<div class="ilustrasi"><img src="assets/img/vektor-daftar.svg" alt=""></div>
					</div>
				</div>
				<div class="col-lg-6 mb-lg-0">
					<div class="form-judul">
						<h2>Login</h2>
						<p>Belum punya akun? 
							<a href="register.php">Daftar</a>
						</p>
					</div>
					<!-- form -->
					<form action="submit_login.php" method="post" class="needs-validation" novalidate>
						<div class="form-group coba jarak-form">
							<input type="email" name="email" class="form-control"  placeholder="Email" required="The Email field is required." data-val="true">
						</div>
						<div class="input-group mb-3 coba jarak-form" >
							<div class="input-group-prepend" style=" width: 50px;">
								<span class="input-group-text" id="mybutton" onclick="change()"><i class="fas fa-eye" id="show"></i></span>
								<div id="toggle" onclick="showHide();"></div>
							</div>
							<input type="password" name="password" id="pass1" class="form-control" placeholder="Password" required="The Password field is required."  autocomplete="off" data-val="true">
						</div>
							<button name="submit" value="submit" class="btn btn-warning mt-3">Masuk</button>
						</div>
					</form>	
					<!-- end form -->
				</div>
			</div>
		</div>
				<script type="text/javascript">
					function change()
					{
						var x = document.getElementById('pass1').type;
						if (x == 'password') 
						{
						document.getElementById('pass1').type = 'text';
						document.getElementById('mybutton').innerHTML = '<i class="fas fa-eye-slash"></i>';
						}
						else
						{
						document.getElementById('pass1').type = 'password';
						document.getElementById('mybutton').innerHTML = '<i class="fas fa-eye"></i>';
						}
					}
				</script>

					<!-- VALIDASI REGISTER -->
					<script>
						// Self-executing function
						(function() {
							'use strict';
							window.addEventListener('load', function() {
								// Fetch all the forms we want to apply custom Bootstrap validation styles to
								var forms = document.getElementsByClassName('needs-validation');
								// Loop over them and prevent submission
								var validation = Array.prototype.filter.call(forms, function(form) {
									form.addEventListener('submit', function(event) {
										if (form.checkValidity() === false) {
											event.preventDefault();
											event.stopPropagation();
										}
										form.classList.add('was-validated');
									}, false);
								});
							}, false);
						})();
					</script>
					<!-- AKHIR VALIDASI REGISTER -->
	</div>
</body>
</html>