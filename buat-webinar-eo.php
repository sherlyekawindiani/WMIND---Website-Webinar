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

?>
<?php
if(mysqli_num_rows($hasil)>0){
    $data_user = mysqli_fetch_array($hasil);
    $_SESSION["id_user"] = $data_user["id_user"];
    $_SESSION["email"] = $data_user["email"];
    $_SESSION["username"] = $data_user["username"];
    $_SESSION["level"] = $data_user["level"];
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
				<p class="panggilUsername"><?php echo "<b>".$_SESSION['username']."</b><br>"; ?></p>
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
						<li class="listMenu" >
							<a class="pilihanMenu" href="dashboard-eo.php"><i class="fas fa-home"></i> Dashboard</a>
						</li>
						<div class="batas"></div>
						<li class="listMenu active">
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
					<div class="card cardBuatWebinar">
						<div class="card-body">
							<h2 class="card-title">Buat Webinar</h2>
							<h4>Uplond Webinar sekarang dan jangkau partisipan sebanyak mungkin</h4>
							<p class="card-text">Isilah form dibawah ini dengan teliti</p>
						</div>
					</div>
					<div class="card shadow p-3 mb-5 bg-white rounded" style="width: 100%; border: none; border-radius: 6px; ">
						<div class="card-body">
							<form class="formBuatEvent" method="POST" action="submit-buat-webinar-eo.php" enctype="multipart/form-data">
								<div class="form-row">
									<div class="form-group col-md-6">
										<div class="cardGambarPoster">
											<div class="tempatGambarPoster">
													<img  class="gambarPoster" src="" alt="">
												<div class="contentGambar">
													<div class="iconAwan"><i class="fas fa-cloud-upload-alt"> </i></div>
													<div class="textRekom">
														<h6>
															ukuran 1080px x 1080px dan batas ukuran gambar 2MB
														</h6>
													</div>
												</div>
												<div id="cancelTombol"><i class="fas fa-times"> </i></div>
												<div class="fileNama">nama file</div>
											</div>
										</div>
										<div class="form-group " style="width: 200px; margin: 20px;	">
											<input name="id_author" type="text" class="form-control" value=" <?php echo $_SESSION['id_user']; ?>" >
										</div>
										<div class="form-group batasPilihFile">
											<label for="tombolUnggah">Unggah gambar/poster/benner</label>
											<input id="tombolUnggah" name="gambar_poster"  type="file" class="form-control-file" style="height: 40px; width: 290px;"  required="The gambar field is required." >
										</div>
									</div>
									<div class="form-group col-md-6" style="margin-left:-100px;">
										<h5 class="card-title mb-3">Informasi Umum</h5>
										<div class="form-group ">
											<input name="tgl_buat" type="hidden" class="form-control" value="<?php echo date("l-d-m-Y"); ?>" style="height: 40px; width: 520px;  border-radius: 10px;">
										</div>
										<div class="form-group ">
												<label for="judul_webinar">Judul Webinar</label>
												<input type="text" name="judul_webinar" style="height: 40px; width: 520px;  border-radius: 10px;  text-transform: capitalize;"  class="form-control" required="The field is required." id="judul_webinar" >
										</div>
										<div class="form-row">
											<div class="form-group col-md-6 ">
												<label for="pilihKategori">Kategori Webinar</label>
												<select id="pilihKategori" name="kategori_webinar" style="height: 40px; width: 520px; border-radius: 10px;"  required="The pilih kategori field is required." class="form-control" >
													<option selected>--</option>
													<option value="IT">IT</option>
													<option value="Bisnis">Bisnis</option>
													<option value="Pendidikan">Pendidikan</option>
													<option value="Pengembangan-diri">Pengembangan diri</option>
													<option value="Lifestyle">Lifestyle</option>
													<option value="Desain">Desain</option>
													<option value="Lainnya">Lainnya</option>
												</select>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6">
												<label for="namaEo">Nama Organizer</label>
												<input type="text" name="nama_eo" style="height: 40px; width: 260px; border-radius: 10px; text-transform: capitalize;"  class="form-control" required="The field is required." id="namaEo" >
											</div>
											<div class="form-group col-md-6">
												<label for="emailEo" style="margin-left: 30px;">Email Organizer</label>
												<input type="email" name="email_eo" style="height: 40px; width: 260px; margin-left: 30px;  border-radius: 10px;"  class="form-control" required="The field is required." id="emailEo" >
											</div>
										</div>
										<hr style="width: 530px;">
										<h5 class="card-title mt-4 mb-3">Jadwal</h5>	
										<div class="form-row">
											<div class="form-group col-md-6 ">
												<label for="tanggal mulai">Tanggal dimulai</label>
												<input type="date" name="tanggal_mulai" style="height: 40px; width: 260px; border-radius: 10px;"  class="form-control" id="tanggal mulai" required="The tanggal mulai field is required.">
											</div>
											<div class="form-group col-md-6 ">
												<label for="waktuMulai" style="margin-left: 30px;">Waktu dimulai</label>
												<input type="time" name="waktu_mulai" style="height: 40px; width: 260px; margin-left: 30px;  border-radius: 10px;"  class="form-control" id="waktuMulai" required="The waktu mulai field is required.">
											</div>
										</div>
										<hr style="width: 530px;">
										<h5 class="card-title  mt-4 mb-3 ">Lokasi</h5>
										<!-- <div class="form-row">
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" onclick="lokasiCheck();" name="lokasi" value="Online" id="onlineCheck" style="height: 40px; width: 17px; border-radius: 10px;" >
												<label class="form-check-label" for="inlineRadio1">Online</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" onclick="lokasiCheck();" name="lokasi" value="Offline" id="offlineCheck" style="height: 40px; width: 17px; margin-left: 10px; border-radius: 10px;" >
												<label class="form-check-label" for="inlineRadio1">Offline</label>
											</div>
										</div> -->
										<div class="form-group"  id="input_online" >
											<label for="link" style="margin-top: 10px;">Link Streaming</label>
											<input type="text" name="link_streaming" style="height: 40px; width: 350px;  border-radius: 10px;"  class="form-control" required="The field is required." >
										</div>
										<!-- <div class="form-group" id="input_offline" >
											<label for="offline" style="margin-top: 10px;">Alamat Offline</label>
											<input type="text" name="offline_alamat" style="height: 53px; width: 350px; border-radius: 10px;"  class="form-control" required="The field is required.">
										</div> -->
										<hr style="width: 530px;">
										<h5 class="card-title" style="margin-top: 20px;">Detail Webinar</h5>
										<div class="form-group ">
											<label for="deskripsiEvent">Deskripsi Webinar</label>
											<textarea name="deskripsi_webinar" type="text" style="height: 270px; width: 460px; border-radius: 10px;" class="form-control" id="deskripsiEvent" required="The deskripsi field is required."></textarea>
										</div>
										<button type="submit" name="kirim" class="btn btn-primary buttonSemua float-right mt-3">Publikasi</button>
									</div>
								</div>
							</form>
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

	<!-- PHP -->
		<!-- Hari diubah kebahasa Indonesia -->
		<?php
			function hariIndo ($hariInggris) {
			switch ($hariInggris) {
				case 'Sunday':
				return 'Minggu';
				case 'Monday':
				return 'Senin';
				case 'Tuesday':
				return 'Selasa';
				case 'Wednesday':
				return 'Rabu';
				case 'Thursday':
				return 'Kamis';
				case 'Friday':
				return 'Jumat';
				case 'Saturday':
				return 'Sabtu';
				default:
				return 'hari tidak valid';
			}
			}
		?>	
	<!-- Akhir PHP -->
	<!-- Javascript ini -->
			<!-- Form submit -->
			<!-- <script>
				function myFunction() {
				alert("Formulir telah dikirimkan");
				}
			</script> -->
			<!-- Radio Button online offline -->
			<!-- <script>
				window.onload = function() {
					document.getElementById('input_online').style.display = 'none';
					document.getElementById('input_offline').style.display = 'none';
				}
				function lokasiCheck() {
					if (document.getElementById('onlineCheck').checked) {
						document.getElementById('input_online').style.display = 'block';
						document.getElementById('input_offline').style.display = 'none';
					} 
					else if(document.getElementById('offlineCheck').checked) {
						document.getElementById('input_offline').style.display = 'block';
						document.getElementById('input_online').style.display = 'none';
						
						}
				}
			</script> -->
			<!-- JS unggah gambar poster bener -->
			<script >
				const tempatGambarPoster = document.querySelector(".tempatGambarPoster");
				const fileName = document.querySelector(".fileNama");
				const cancelBtn= document.querySelector("#cancelTombol");
				const defaultBtn = document.querySelector("#tombolUnggah");
				const customBtn = document.querySelector("#customBtnUnggah");
				const img = document.querySelector(".gambarPoster");
				function defaultBtnActive(){
					defaultBtn.click();
					
				}
				defaultBtn.addEventListener("change", function(){
					const file = this.files[0];
					if(file){
						const reader = new FileReader();
						reader.onload = function(){
							const result = reader.result;
							img.src = result;
							tempatGambarPoster.classList.add("active");

						}
						cancelBtn.addEventListener("click", function(){
							img.src = "";
							tempatGambarPoster.classList.remove("active");
						});
						reader.readAsDataURL(file);

					}
					if(this.value){
						let valueStore = this.value;
						fileName.textContent = valueStore ;


					}
				});
    		</script>
        <!-- Akhir JS unggah poster bener -->
			

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