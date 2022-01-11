<!DOCTYPE html>
<html>
<head>
</head>

<?php 
$nama 	= $_POST['nama'];
$email 	= $_POST['email'];
$username 	= $_POST['username'];
$level = $_POST['level'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];

// cek keamanan password
if ($password1 == $password2) {
	
	include "koneksi.php";

	//perlu dibuat sebarang pengacak
	$pengacak = "p3ng4c4k";

	// mengenkripdi password dengan md5() dan pengacak
	$passmd = md5($pengacak . md5($password1));

	// menyimpan username dan password terenkripsi ke database
	$query="INSERT INTO tb_user VALUES ('','$nama','$email','$username','$level','$passmd')";
	$hasil = mysqli_query($koneksi, $query);

	// menampilkan status pendaftaran
	if ($hasil) 
	{
		echo "<script>('Berhasil Register');
	document.location='login.php'
	</script>";
		
		
	}
	else  echo "<script>alert('Email sudah ada yang memiliki');
		document.location='register.php'
		</script>";
}
else echo "<script>alert('Password yang dimasukkan tidak sama');
	document.location='register.php'
	</script>";
?>
 </body>
</html>
