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
                            <h2>Get Started</h2>
                            <p>Apakah kamu sudah punya akun? 
                                <a href="index.php">Log in</a>
                            </p>
                        </div>
                      

						<!-- form -->
							<div class="coba jarak-form">
								<input type="text" placeholder="Username"> 
							</div>
							<div class="coba jarak-form">
								<input type="email" placeholder="Email"> 
							</div>
							<div class="coba">
								<input type="password" placeholder="Password" id="pass">
								<!-- <i class="fas fa-eye-slash" id="hide" onclick="myFunction()"></i> -->
								<span id="mybutton" onclick="change()"><i class="fas fa-eye" id="show"></i></span>
								<div id="toggle" onclick="showHide();"></div>
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

		<!-- <script type="text/javascript">
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
        </script> -->
						<!-- <script type="text/javascript">
							function myFunction() {
								var x = document.getElementById("myInput");
								if (x.type === "password") {
									x.type = "text";
									document.getElementById('hide').style.display = "inline-block";
									document.getElementById('show').style.display = "none";

								}
								else{
									x.type = "password";
									document.getElementById('hide').style.display = "none";
									document.getElementById('show').style.display = "inline-block";
								}
							}
        				</script> -->
        <!-- end form -->
	
	
</body>
</html>