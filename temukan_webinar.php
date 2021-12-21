<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

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
    <div class="wadah">
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

        <!-- awal nav samping -->
        <div class="row mt-5">
            <div class="col-md-2">
                <div class="produk-filter">
                    <ul>
                        <h4><b>Kategori Topik</b></h4><hr color="#FFC224" width="60%" style="margin-left:50px;">
                        <li class="active" data-filter="*">Semua</li>
                        <li data-filter=".IT">IT</li>
                        <li data-filter=".Bisnis">Bisnis</li>
                        <li data-filter=".Pendidikan">Pendidikan</li>
                        <li data-filter=".Pengembangan-diri">Pengembangan diri</li>
                        <li data-filter=".Desain">Desain</li>
                        <li data-filter=".Lifestyle">Lifestyle</li>
                        <li data-filter=".Lainnya">Lainnya</li>
                    </ul>
                </div>
            </div>
            <!-- akhir nav samping -->

            <!-- products -->
            <div class="col-md-10">
                <div class="product-section mb-150">
                    <div class="container">
                        <div class="row product-lists">
                            <?php
                            include "koneksi.php";
                            $sql = "SELECT * FROM tb_temukan_webinar";
                            $datas = mysqli_query($koneksi, $sql);
                            $i = 1;
                            foreach ($datas as $data) :
                            ?>
                                <div class="col-lg-3 col-md-6 <?php echo $data['kategori']; ?>">
                                    <div class="single-product-item">
                                        <div class="produk-gambar">
                                            <a href="temukan_webinar_detail.php"><img src="assets/img/<?php echo $data['gambar']; ?>" alt=""></a>
                                        </div>
                                        <a href="temukan_webinar_detail.php">
                                            <h5><?php echo $data['judul']; ?></h5>
                                        </a>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="kotak-kategori">
                                                    <p><?php echo $data['kategori']; ?></p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="kotak-lokasi">
                                                    <p><?php echo $data['lokasi']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <span><?php echo $data['tanggal']; ?></span><br>
                                        <span><?php echo $data['jam']; ?></span>
                                    </div>
                                </div>
                            <?php $i++;
                            endforeach; ?>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <div class="pagination-wrap">
                                    <ul>
                                        <li><a href="#">Prev</a></li>
                                        <li><a class="active" href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end products -->
        </div>
    </div>

    <!-- copyright -->
	<div class="copyright mt-5">
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