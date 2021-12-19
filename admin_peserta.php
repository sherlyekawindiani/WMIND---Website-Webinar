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
                <div class="col-md-2 pr-3 pt-4 menu-samping position-fixed">
                    <ul class="nav flex-column ml-3 mb-5">
                        <li><img src="assets/img/logoWmindKuning.png" alt=""></li>
                        <li class="nav-item mt-5">
                            <a class="nav-link link-menu" href="admin_dashboard.php"><i class="fas fa-home mr-2"></i>Dasboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-menu mt-2 mb-2" href="admin_user.php"><i class="fas fa-user mr-2"></i>Data User</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link link-menu" href="admin_peserta.php"><i class="fas fa-users mr-2"></i>Data Peserta</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-menu mt-2 mb-2" href="admin_webinar.php"><i class="fas fa-laptop mr-2"></i>Data Webinar</a>
                        </li>
                    </ul>
                </div>
                
                <div class="col-md-10 ml-auto">
                    <!-- header -->
                        <nav class="navbar navBarEo position-fixed" style="background-color:white; width:84%;">
                            <div class="container">
                                <span class="navbar-brand ket-halaman" href="">
                                    DATA PESERTA
                                </span>
                                <div class="navBarUsername mr-3">
                                    <p class="panggilUsername text-dark">Sherly eka windiani</p>
                                    <a class="txtLogout text-dark" href="#">Logout</a>
                                </div>
                            </div>
                        </nav>
                    <!-- end header -->
                    <div class="isi-admin mt-80 ml-3 mr-3">
                        <div id="DataBarang" class="tabcontent jartab">
                            <table class="table table-striped">
                                <thead class="">
                                    <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
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