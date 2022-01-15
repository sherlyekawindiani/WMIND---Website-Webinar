<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

// mencari password terenkripsi berdasarkan email
$query = "SELECT * FROM tb_user WHERE email = '$email'";
$hasil = mysqli_query($koneksi,$query);
$data = mysqli_fetch_array($hasil);

// format pengacak harus sama dengan format di submit_register.php
$pengacak = "p3ng4c4k";


// cek kesesuaian password terenkripsi dari form login
// dengan password terenkripsi dari database
$passmd = md5($pengacak . md5($password));
if ($passmd == $data['password']) {
		
	// cek jika user login sebagai admin
	if($data['level']=="admin"){
		// buat session login dan username
		$_SESSION['email'] = $email;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:admin-dashboard.php");

	// cek jika user login sebagai pegawai
	}else if($data['level']=="Peserta"){
		// buat session login dan username
		$_SESSION['email'] = $email;
		$_SESSION['level'] = "Peserta";
		// alihkan ke halaman dashboard pegawai
		header("location:temukan-webinar.php");

	// cek jika user login sebagai pengurus
	}else if($data['level']=="Penyelenggara Acara"){
		// buat session login dan username
		$_SESSION['email'] = $email;
		$_SESSION['level'] = "Penyelenggara Acara";
		// alihkan ke halaman dashboard pengurus
		header("location:dashboard-eo.php");

	}else{
		// alihkan ke halaman login kembali
        echo "<script>alert('Gagal login');
        document.location='login.php'
        </script>";
	}	

}
else echo "<script>alert('Gagal login');
document.location='login.php'
</script>";


?>