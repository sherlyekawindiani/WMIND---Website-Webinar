<?php 

session_start();
include "koneksi.php";

session_destroy();
echo "<script>
				alert('Anda Sudah Logout');
				document.location.href='index.php';
	</script>";
 ?>