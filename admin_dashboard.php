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
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
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

        <!-- isi admin -->
            <div class="row no-gutters">
                <div class="col-md-2 pr-3 pt-4 pl-2 menu-samping position-fixed">
                    <ul class="nav flex-column">
                        <li><img src="assets/img/logoWmindKuning.png" alt=""></li>
                        <li class="nav-item mt-5 active">
                            <a class="nav-link link-menu" href="admin_dashboard.php"><i class="fas fa-home mr-2"></i>Dasboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-menu mt-2 mb-2" href="admin_user.php"><i class="fas fa-user mr-2"></i>Data User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-menu mt-2 mb-2" href="admin_peserta.php"><i class="fas fa-users mr-2"></i>Data Peserta</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-menu mt-2 mb-2" href="admin_webinar.php"><i class="fas fa-laptop mr-2"></i>Data Webinar</a>
                        </li>
                    </ul>
                </div>
                
                <div class="col-md-10 ml-auto">
                    <!-- header -->
                        <nav class="navbar navBarEo" style="background-color:white;">
                            <div class="container">
                                <span class="navbar-brand" href="">
                                    DASHBOARD
                                </span>
                                <div class="navBarUsername">
                                    <p class="panggilUsername text-dark">Sherly eka windiani</p>
                                    <a class="txtLogout text-dark" href="#">Logout</a>
                                </div>
                            </div>
                        </nav>
                    <!-- end header -->
                    <div class="isi-admin mt-4 ml-3 mr-3">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="kotak-data">
                                    <div class="row">
                                        <div class="col-md-3 kotak-ikon">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <div class="col-md-9 kotak-teks">
                                            <span>User</span>
                                            <h2 class="mt-3">123</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="kotak-data">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="kotak-ikon">
                                                <i class="fas fa-users"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-9 kotak-teks">
                                            <span>Semua Peserta</span>
                                            <h2 class="mt-3">123</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="kotak-data">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="kotak-ikon">
                                                <i class="fas fa-laptop"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-9 kotak-teks">
                                            <span>Webinar</span>
                                            <h2 class="mt-3">123</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- end isi admin -->
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