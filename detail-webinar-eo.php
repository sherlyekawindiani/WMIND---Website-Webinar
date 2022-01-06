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


?>

<?php
    error_reporting(0);
    include "koneksi.php"; //panggil file koneksi
    $id_webinar=$_GET['id_webinar'];
    $query="SELECT*FROM tb_buat_webinar WHERE id_webinar ='$id_webinar'"; //buat query sql
    $hasilDetail=mysqli_query($koneksi,$query); //jalankan query sql
    $dataDetail=mysqli_fetch_array($hasilDetail);
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
				<p class="panggilUsername">Sherly eka windiani</p>
				<a class="txtLogout" href="#">Logout</a> 
				
			</div>
        </div>
    </nav>
    <!-- end header -->
	<!-- body -->
	<div class="container-fluid">
		<div class="row" >
			<div class="col-md-2 colKiri">
				<div class="sidebarEo">
				    <ul style='list-style-type: none;'> 	
						<li class="listMenu" >
							<a class="pilihanMenu" href="dashboard-eo.php"><i class="fas fa-home"></i> Dashboard</a>
						</li>
						<div class="batas"></div>
						<li class="listMenu">
							<a class="pilihanMenu" href="buat-webinar-eo
							.php"><i class="fas fa-plus-square"></i> Buat Webinar</a>
						</li>
						<div class="batas"></div>
						<li class="listMenu active ">
							<a class="pilihanMenu" href="riwayat-webinar-eo.php"><i class="fas fa-history" ></i> Riwayat</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-10" style="background-color: #F0F2F5; height: 100%;">
				<div class="cardDashboard">
					<div class="card detailRiwayat">
						<div class="card-body row petunjukDetail">
							<h6 class="card-title"><a href="riwayat-webinar-eo.php">Riwayat Webinar </a><i class="fas fa-angle-right ikonAngleRight" ></i></h6>
                            <h6 class="card-title active"><?php echo $dataDetail['judul_webinar'];?> </h6>
						</div>
					</div>
					<div class="card shadow p-3 mb-5 bg-white rounded" style="width: 100%; border: none; border-radius: 6px; ">
						<div class="card-body " style="margin: 20px; padding: 10px;" >
							<div class="d-flex justify-content-center ">
								<div class="card cardPilihanDetail">
									<nav class="navbar navbar-expand-lg">
										<div class="collapse navbar-collapse" >
											<div class="navbar-nav">
												<a class="nav-item nav-link navLinkDetail mr-2 active" href="detail-webinar-eo.php?id_webinar=<?php echo $data['id_webinar'];?>" ><i class="fas fa-info-circle mr-2"></i>Informasi Webinar</a>
												<a class="nav-item nav-link navLinkDetail ml-3" href="data-peserta-eo.php"><i class="fas fa-users mr-2"></i>Data Peserta</a>
											</div>
										</div>
									</nav>
								</div>
							</div>
                            <div class="row" >
                                <div class="col-md-5" >
                                    <div class="cardGambarPoster">
                                        <div class="tempatGambarPoster" style="border: 1px; border-style: solid; border-color: lightgray;">
                                                <img  class="gambarPoster" src="assets/img/gambar-poster/<?php echo $dataDetail['gambar_poster'];?>" alt="">
                                        </div>
									</div>
                                </div>
                                <div class="col-md-7" >
									<div class="card" style="margin-left: -30px; border: none; ">
										<div class="card-body">
											<h4 class="card-title judulWebinar"><?php echo $dataDetail['judul_webinar'];?></h4>
											<p class="btn btn-info kategoriWebinar"><?php echo $dataDetail['kategori_webinar'];?></p>
										</div>
										<hr>
										<div class="card-body">
											<div class="row">
												<div class="col-md-4">
													<div class="tanggalDetail">
														<h4 class="card-title mb-3 judulDetailWebinar">Date</h4>
														<div class="card-title isiDetail">
															<?php echo $dataDetail['tanggal_mulai'];?>
														</div>
													</div>
												</div>
												<div class="col-md-4">
													<div class="waktuDetail">
														<h4 class="card-title mb-3 judulDetailWebinar">Time (WIB)</h4>
														<div class="card-title isiDetail">
															<?php echo $dataDetail['waktu_mulai'];?>
														</div>
														
													</div>
												</div>
												<div class="col-md-4">
													<div class="lokasiDetail">
														<h4 class="card-title mb-3 judulDetailWebinar">Lokasi</h4>
														<div class="card-title isiDetail"> Online 
															<a href="<?php echo $dataDetail['link_streaming'];?>" target="blank">
																<button type="button" class="btn btn-link linkOnline"> <?php echo $dataDetail['link_streaming'];?></button>
														    </a>
														</div>
														<div class="card-title"><?php echo $dataDetail['offline_alamat'];?></div>
													</div>
												</div>
											</div>
										</div>
										<hr>
										<div class="card-body">
											<h4 class="card-title judulDetailWebinar">Posted by</h4>
											<div class="card-title  isiDetail">
												<?php echo $dataDetail['nama_eo'];?> <br>
												<?php echo $dataDetail['email_eo'];?>
											</div>
										</div>
										<hr>
										<div class="card-body">
											<h4 class="card-title judulDetailWebinar">Deskripsi</h4>
											<div class="card kotakDeskripsiWebinar">
												<div class="card-title isiDetail">
													<?php echo $dataDetail['deskripsi_webinar'];?> 
												</div>
											</div>
										</div>
										<div class="card-body">
											<div class="container d-flex justify-content-end mb-3 ">
												<a href="edit-webinar-eo.php?id_webinar=<?php echo $dataDetail['id_webinar'];?>" class="btn btn-light buttonSemua"> Edit Webinar</a>
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
					<p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>,  All Rights Reserved.</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->

	<!-- Javascript ini -->

	<!-- Akhir javascript -->
	
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