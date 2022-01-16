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
	<!-- Css kita  -->
	<link rel="stylesheet" href="assets/css/css_sherly.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@200;400&display=swap" rel="stylesheet">
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

	if($_SESSION['level']=="Peserta"){
		// buat session login dan username
		$_SESSION['email'] = $email;
		$_SESSION['level'] = "Peserta";
		// alihkan ke halaman dashboard admin
		header("location:temukan-webinar.php");
	}
	
	// tb peserta
    $query="SELECT*FROM tb_daftar_peserta WHERE id_peserta"; //buat query sql
    $hasilDetail=mysqli_query($koneksi,$query); //jalankan query sql

?>

<?php
if(mysqli_num_rows($hasil)>0){
    $data_user = mysqli_fetch_array($hasil);
    $_SESSION["id_user"] = $data_user["id_user"];
	$_SESSION["nama"] = $data_user["nama"];
    $_SESSION["email"] = $data_user["email"];
    $_SESSION["username"] = $data_user["username"];
    $_SESSION["level"] = $data_user["level"];
}
?>
<?php
if(mysqli_num_rows($hasil)>0){
    $data_peserta_webinar = mysqli_fetch_array($hasilDetail);
    $_SESSION["id_peserta"] = $data_peserta_webinar["id_peserta"];
	$_SESSION["id_webinar_session"] = $data_peserta_webinar["id_webinar_session"];
    $_SESSION["id_author"] = $data_peserta_webinar["id_author"];
    $_SESSION["id_author_eo"] = $data_peserta_webinar["id_author_eo"];
    $_SESSION["tgl_daftar"] = $data_peserta_webinar["tgl_daftar"];
	$_SESSION["nama_peserta"] = $data_peserta_webinar["nama_peserta"];
	$_SESSION["email_peserta"] = $data_peserta_webinar["email_peserta"];
	$_SESSION["notelp_peserta"] = $data_peserta_webinar["notelp_peserta"];
	$_SESSION["profesi_peserta"] = $data_peserta_webinar["profesi_peserta"];
	
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
	<!-- body -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2 colKiri">
				<div class="sidebarEo">
					<ul style='list-style-type: none;'> 	
						<li class="listMenu active" >
							<a class="pilihanMenu" href="dashboard-eo.php"><i class="fas fa-home"></i> Dashboard</a>
						</li>
						<div class="batas"></div>
						<li class="listMenu ">
							<a class="pilihanMenu" href="buat-webinar-eo.php"><i class="fas fa-plus-square"></i> Buat Webinar</a>
						</li>
						<div class="batas"></div>
						<li class="listMenu ">
							<a class="pilihanMenu" href="riwayat-webinar-eo.php"><i class="fas fa-history" ></i> Riwayat</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-10" style="background-color: #F0F2F5;">
				<div class="cardDashboard">
					<div class="card cardSelamatDtng">
						<div class="card-body">
							<h2 class="card-title">Selamat Datang </h2>
							<h4 class="card-title cardTitleUsername"><?php echo $_SESSION['nama']; ?></h4>
							<span class="btn btn-info btnLoginSebagai ">Anda login sebagai <?php echo $_SESSION['level']; ?></span>
							<p class="card-text mt-2" style="font-size: 20px; ">Uplond webinar mu dan dapatkan partisipan sebanyak mungkin </p>
						</div>
					</div>
					<div class="row cardOverview">
						<div class="col-md-6">
							<div class="card cardJumlahData">
								<div class="card-body ">
									<div class="row">
										<div class="col-md-6" >
											<div style="text-align: right; border-radius: 50px; width: 50px; height: 50px; background-color: #FFC224; display: flex; align-items: center; ">
												<i class="fas fa-users" 
												style="font-size: 30px; color: white; margin-left: 6px; ">
												</i> 
											</div>
										</div>
										<div class="col-md-6" style="margin-left:-90px; ">
											<div  class="card" style="border:transparent; width: 200px">
												<h5 class="card-title titleOverview">Semua Peserta</h5>
												<h3 class="card-text">
													<?php
														include "koneksi.php"; //panggil file koneksi
														$id_author_eo=$_SESSION['id_user'];
														$query="SELECT*FROM tb_daftar_peserta WHERE id_author_eo='$id_author_eo'"; //buat query sql
														$hasil=mysqli_query($koneksi,$query); //jalankan query sql
														$jum=mysqli_num_rows($hasil) ; //menghasilkan banyak rows/baris data
														echo " ".$jum."<br>";
													?> 		
												</h3>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6" style="margin-left: -200px">
							<div class="card cardJumlahData">
								<div class="card-body ">
									<div class="row">
										<div class="col-md-6" >
											<div style="text-align: right; border-radius: 50px; width: 50px; height: 50px; background-color: #FFC224; display: flex; align-items: center; ">
												<i class="fas fa-history"  
												style="font-size: 30px; color: white; margin-left: 10px; ">
												</i> 
											</div>
										</div>
										<div class="col-md-6" style="margin-left:-90px; ">
											<div  class="card" style="border:transparent; width: 200px">
												<h5 class="card-title titleOverview">Riwayat webinar</h5>
												<h3 class="card-text">
													<?php
														$id_author=$_SESSION['id_user'];
														$query="SELECT*FROM tb_buat_webinar WHERE id_author='$id_author'"; //buat query sql
														$hasil=mysqli_query($koneksi,$query); //jalankan query sql
														$jum=mysqli_num_rows($hasil) ; //menghasilkan banyak rows/baris data
														echo " ".$jum."<br>";
													?> 			
												</h3>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>
		
		</div>

	</div>
	<!-- end body -->

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