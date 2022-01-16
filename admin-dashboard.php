<?php
    include "koneksi.php";
    function total($perintah)
    {
        global $koneksi;
        $query = mysqli_query($koneksi, $perintah);
        $data = [];
        $jumlah = 0;
        while ($hasil = mysqli_fetch_assoc($query)) {
        $data[] = $hasil;
        $jumlah++;
    }
    return $jumlah;
    }
    $jumlahuser = total("SELECT * FROM tb_user");
    $webinar = total("SELECT * FROM tb_buat_webinar");
    $peserta = total("SELECT * FROM tb_daftar_peserta");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

    <!-- title -->
    <title>Dashborad Admin</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="">
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
                    <p class="panggilUsername"> <?php echo $_SESSION['username']; ?></p>
                    <a class="txtLogout" href="logout.php">Logout</a> 
			    </div>
            </div>
        </nav>
        <!-- end header -->

        <!-- isi admin -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 samping-kiri">
                    <div class="menu-samping">
                        <ul class="nav flex-column">
                            <li class="nav-item active ml-4">
                                <a class="nav-link link-menu" href="admin-dashboard.php"><i class="fas fa-home mr-2"></i>Dashboard</a>
                            </li>
                            <li class="nav-item mt-3 ml-4">
                                <a class="nav-link link-menu" href="admin-user.php"><i class="fas fa-user mr-2"></i>Data User</a>
                            </li>
                            <li class="nav-item mt-3 ml-4">
                                <a class="nav-link link-menu" href="admin-peserta.php"><i class="fas fa-users mr-2"></i>Data Peserta</a>
                            </li>
                            <li class="nav-item mt-3 ml-4">
                                <a class="nav-link link-menu" href="admin-webinar.php"><i class="fas fa-laptop mr-2"></i>Data Webinar</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-10" style="background-color: #F0F2F5;">
                    <div class="isi-admin">
                        <div class="card judul-tabel">
                            <div class="card-body">
                                <h2 class="card-title">Selamat Datang Admin</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="kotak-data">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="kotak-ikon mt-4">
                                                <i class="fas fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-9 kotak-teks">
                                            <span>User</span>
                                            <h2 class="mt-3"><?php echo $jumlahuser; ?></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="kotak-data">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="kotak-ikon mt-4">
                                                <i class="fas fa-users"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-9 kotak-teks">
                                            <span>Peserta</span>
                                            <h2 class="mt-3"><?php echo $peserta; ?></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="kotak-data">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="kotak-ikon mt-4">
                                                <i class="fas fa-laptop"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-9 kotak-teks">
                                            <span>Webinar</span>
                                            <h2 class="mt-3"><?php echo $webinar; ?></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end isi admin -->
        
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
    </div>


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