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
        
        <!-- form -->
        <div class="contact-from-section">
            <div class="row">
                <div class="col-lg-4">
                    <div class="kontak-form-wrap">
                        <div class="vektor-form"><img src="assets/img/vektor-formDaftar.svg" alt=""></div>
                    </div>
                </div>

                <?php
                include "koneksi.php"; //panggil file koneksi
                $id = $_GET['id'];
                $query = "SELECT * FROM detail_webinar WHERE id='$id'"; //buat query sql
                $hasil = mysqli_query($koneksi, $query); //jalankan query sql
                $data = mysqli_fetch_array($hasil);
                ?>

                <div class="col-lg-8 mb-lg-0 mt-5">
                    <div class="form-title">
                        <h2>Form Daftar</h2>
                        <p><?php echo $data['judul']; ?></p>
                    </div>
                    <div id="form_status"></div>
                    <div class="daftar-form">
                        <form action="" method="POST">
                            <input type="text" class="form-control" id="" placeholder="Nama" required>
                            <div class="form-row">
                                <div class="col-md-8">
                                    <input name="" type="email" class="form-control" id="" placeholder="Email">
                                </div>
                                <div class="col-md-4 kotak-telepon">
                                    <input name="" type="tel" class="form-control" id="" placeholder="No Telepon">
                                </div>
                            </div>
                            <div class="form-group">
                                <select id="inputState" class="form-control" name="">
                                    <option selected disabled>Profesi</option>
                                    <option value="Siswa">Siswa</option>
                                    <option value="Mahasiswa">Mahasiswa</option>
                                    <option value="Umum">Umum</option>
                                </select>
                            </div>
                            <button name="kirim" type="submit" class="btn"><h4>Daftar</h4></button>

                            <!-- Submit Daftar Webinar -->
                                <?php
                                include "koneksi.php";
                                @$id_daftarWebinar = $_POST['id_daftarWebinar'];
                                @$nama = $_POST['nama'];
                                @$email = $_POST['email'];
                                @$no_telepon = $_POST['no_telepon'];
                                @$profesi = $_POST['ket_barang'];
                                @$kirim = $_POST['kirim'];
                                
                                // Memasukkan data (Insert) 
                                @$query = "INSERT INTO barang VALUES ('$id_daftarWebinar','$nama','$email','$no_telepon','$ket_barang','$gambar')";

                                // hasil data array (kirim)
                                if (isset($_POST['kirim'])) {

                                    $hasil = mysqli_query($koneksi, $query);
                                    if ($hasil) {
                                    echo "<script>alert('Berhasil Dibuat');
                                    document.location=''
                                    </script>";
                                    } else {
                                    echo "<script>alert('Gagal Dibuat');
                                        document.location=''</script>";
                                    }
                                }
                                ?>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end form -->
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