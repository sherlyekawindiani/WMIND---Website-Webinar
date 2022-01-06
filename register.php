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
			padding: 10px;
			box-shadow: 0 2px 6px rgba(0,0,0,0.3);
			transition: .3s ease-out;
		}
		.coba:hover{
			box-shadow: 0 6px 5px rgba(0,0,0,0.3);

		}
		.coba input{
			border: none;
			outline: none;
			font-size: 15px;
			background: transparent;
			padding: 3px;
		}

		i{
			float: right;
			cursor: pointer;
			margin: 4px 2px;
			font-size: 15px;
		}
		#hide{
			display: none;
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
	
	<!-- form -->
    <div class="contact-from-section">
	<form action="submit_register.php" method="post" class="needs-validation" novalidate>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="warna">
                            <!-- <div class="logo-form"><img src="assets/img/logoWmindKuning.png" alt=""></div> -->
                            <div class="ilustrasi"><img src="assets/img/vektor-daftar.svg" alt=""></div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-lg-0">
                        <div class="form-judul">
                            <h2>Get Started</h2>
                            <p>Apakah kamu sudah punya akun? 
                                <a href="login.php">Log in</a>
                            </p>
                        </div>
                      

						<!-- form -->
							<div class="coba jarak-form">
								<input type="text" placeholder="Username" id="username" name="username" data-val="true" required="The nama lengkap field is required."> 
							</div>
							<div class="coba jarak-form">
								<input type="email" placeholder="Email" id="email" name="email" data-val="true" required="The nama lengkap field is required."> 
							</div>
							<div class="form-group coba">
                                        <label class="sr-only" for="daftarSebagai">Daftar Sebagai</label>
                                        <div class="input-group">
                                            <select  data-val="true" required="The daftar sebagai field is required." class="form-select"  name="level"  aria-label="Default select example">
                                                <option value="">Daftar sebagai</option>
                                                <option value="peserta webinar">Peserta Webinar</option>
                                                <option value="upload webinar">Upload Webinar</option>
                                            </select>
                                        </div>
                            </div>
							<div class="coba jarak-form">
								<input type="password1" placeholder="Password" id="pass" name="password" autocomplete="off" data-val="true" required="The Password field is required.">
								<!-- <i class="fas fa-eye-slash" id="hide" onclick="myFunction()"></i> -->
								<span id="mybutton" onclick="change()"><i class="fas fa-eye" id="show"></i></span>
								<div id="toggle" onclick="showHide();"></div>
							</div>
							<div class="coba jarak-form">
								<input type="password2" placeholder="Konfirmasi Password" id="pass" name="password" autocomplete="off" data-val="true" required="The Password field is required.">
								<!-- <i class="fas fa-eye-slash" id="hide" onclick="myFunction()"></i> -->
								<span id="mybutton" onclick="change()"><i class="fas fa-eye" id="show"></i></span>
								<div id="toggle" onclick="showHide();"></div>
							</div>
							<div>
								<button name="submit" value="submit" class="btn btn-warning">Daftar</button>
							</div>
							
						<!-- end form -->
                    </div>
                </div>
        </div>

				<script type="text/javascript">
				function change()
				{
					var x = document.getElementById('pass').type;
		
					if (x == 'password')
					{
					document.getElementById('pass').type = 'text';
					document.getElementById('mybutton').innerHTML = '<i class="fas fa-eye-slash"></i>';
					}
					else
					{
					document.getElementById('pass').type = 'password';
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
	
</body>
</html>