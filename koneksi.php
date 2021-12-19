<?php 
// koneksi database
$host="localhost";
$user="root";
$password="";
$database="db_wmind";
$koneksi=mysqli_connect($host, $user, $password);
$db_koneksi=mysqli_select_db($koneksi,$database);
if (!$db_koneksi) {
	echo "KONEKSI DATABASE GAGAL!!!";
}
 ?>