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
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
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
	<link rel="stylesheet" href="assets/css/login.css">
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
	<form action="submit_login.php" method="post" class="needs-validation" novalidate>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="warna">
                            <!-- <div class="logo-form"><img src="assets/img/logoWmindKuning.png" alt=""></div> -->
                            <div class="ilustrasi"><img src="assets/img/vektor-login.svg" alt=""></div>
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
						<div class="coba jarak-form">
								<input type="email" placeholder="Email" id="email" name="email" data-val="true" required="The nama lengkap field is required."> 
							</div>
							<div class="coba jarak-form">
								<input type="password" placeholder="Password" id="pass">
								<!-- <i class="fas fa-eye-slash" id="hide" onclick="myFunction()"></i> -->
								<span id="mybutton" onclick="change()"><i class="fas fa-eye" id="show"></i></span>
								<div id="toggle" onclick="showHide();"></div>
							</div>
							<div>
								<button name="submit" value="submit" class="btn btn-warning">Login</button>
							</div>
							
						<!-- end form -->
        				
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

                           
                        
                    </div>
                </div>
        </div>
		
        <!-- end form -->
	
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