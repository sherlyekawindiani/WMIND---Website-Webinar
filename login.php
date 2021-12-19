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
			width: 80%;
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

	</style>

</head>
<body>
	
	<!-- form -->
    <div class="contact-from-section">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="warna">
                            <!-- <div class="logo-form"><img src="assets/img/logoWmindKuning.png" alt=""></div> -->
                            <div class="vektor-form"><img src="assets/img/vektor-formDaftar.svg" alt=""></div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-lg-0">
                        <div class="form-judul">
                            <h2>Login</h2>
                            <p>Belum punya akun? 
                                <a href="index.php">Daftar</a>
                            </p>
                        </div>
                     
						<div class="inputBox">
							<input type="password" name="" placeholder="Enter Password" id="password">
							<div id="toggle" onclick="showHide();"></div>
						</div>
						<script type="text/javascript">
							const password = document.getElementById('password');
							const toggle = document.getElementById('toggle');
							
							function showHide(){
								if(password.type === 'password'){
									password.setAttribute('type', 'text');
									toggle.classList.add('hide')
								} else{
									password.setAttribute('type', 'password');
									toggle.classList.remove('hide')
								}
							}
        				</script>

                           
                        
                    </div>
                </div>
        </div>
		<i class="fas fa-key"></i>
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