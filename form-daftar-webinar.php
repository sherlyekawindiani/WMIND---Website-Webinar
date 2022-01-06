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
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->

    <div class="wadah">
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

        <!-- form -->
        <div class="contact-from-section">
            <div class="row">
                <div class="col-lg-4">
                    <div class="kontak-form-wrap">
                        <div class="vektor-form"><img src="assets/img/vektor-formDaftar.svg" alt=""></div>
                    </div>
                </div>
                <div class="col-lg-8 mb-lg-0 mt-5">
                    <div class="form-title">
                        <h2>Form Daftar</h2>
                        <p>Flutter</p>
                    </div>
                    <div class="daftar-form">
                        <form action="submit-daftar-webinar.php" method="post">
                            <input type="text" name="nama_peserta" placeholder="Nama" required>
                            <div class="form-row">
                                <div class="col-md-8">
                                    <input type="text" name="email_peserta" placeholder="Email">
                                </div>
                                <div class="col-md-4 kotak-telepon">
                                    <div class="form-group">
                                        <input type="text" name="notelp_peserta" placeholder="No Telepon" id="notelp" onkeyup="checkPass(); return false;">
                                        <small id="notelp-error" class="form-text" style="margin-top:-25px;"></small>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <select name="profesi_peserta" id="">
                                    <option selected disabled>Profesi</option>
                                    <option value="Siswa">Siswa</option>
                                    <option value="Mahasiswa">Mahasiswa</option>
                                    <option value="Umum">Umum</option>
                                </select>
                            </div>
                            <input type="hidden" name="tgl_daftar" value="<?php echo date("l-d-m-Y"); ?>">
                            <button type="submit" name="kirim" value="kirim" class="btn"><h4>Daftar</h4></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end form -->
    </div>

    <script>
        function checkPass()
        {
            var notelp = document.getElementById('notelp');
            var message = document.getElementById('notelp-error');
            var goodColor = "#66cc66";
            var badColor = "#ff6666";

            if(notelp.value.length > 15)
            {
                message.style.color = badColor;
                message.innerHTML = "tidak valid"
            }
            else if(notelp.value.length < 10){
                message.style.color = badColor;
                message.innerHTML = "tidak valid"
            }
            else
            {
                // message.style.color = goodColor;
                message.innerHTML = ""
                return;
            }
            
            // if(notelp.value.length > 10)
            // {
            //     message.style.color = goodColor;
            //     message.innerHTML = "character number ok!"
            // }
            // else
            // {
            //     message.style.color = badColor;
            //     message.innerHTML = "you have to enter at least 10 digit!"
            //     return;
            // }

            // if(notelp.value.length > 15){
            //     message.style.color = badColor;
            //     message.innerHTML = "you have to enter at least 15 digit!"
            // }
            // else{
            //     message.style.color = goodColor;
            //     message.innerHTML = "character number ok!"
            //     return;
            // }

            // if(notelp.value.length == 0){
            //     message.style.display = 'none';
            // }
            // else{
            //     message.style.display = 'block';
            //     return;
            // }
        }
    </script>

    <!-- <script>
        var notelp = document.getElementById('notelp'),
            notelpError = document.getElementById('notelp_error');

        notelp.addEventListener('input', function() {
            if (!notelp.value.match(^(\62)8[1-9][0-9]{6,9}$)) {
                notelpError.innerHTML = 'Please specify a valid date in the form 1990-02-22';
                notelpError.style.display = 'inherit';
            } else {
                var value = new Text(notelp.value),
                    min = new Text(notelp.min),
                    max = new Text(notelp.max);
                if (value < min || value > max) {
                    notelpError.innerHTML = 'Date has to be between ' + min.toDateString() + ' and ' + max.toDateString();
                    notelpError.style.display = 'inherit';
                } else {
                    notelpError.style.display = 'none';
                }
            }
        });
    </script> -->
	
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