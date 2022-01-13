<!DOCTYPE html>
<html>
    <?php
	include "koneksi.php" ;
	error_reporting(0);
	session_start();
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:login.php?pesan=gagal");
	}

	// tb buat webinar
	$id_webinar=$_GET['id_webinar'];
    $query="SELECT*FROM tb_buat_webinar WHERE id_webinar ='$id_webinar'"; //buat query sql
    $hasilDetail=mysqli_query($koneksi,$query); //jalankan query sql

    $nama_file = "Peserta Daftar Webinar";
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attechment; filename=".$nama_file.".xls");

?>

<?php
if(mysqli_num_rows($hasil)>0){
    $data_webinar = mysqli_fetch_array($hasilDetail);
    $_SESSION["id_webinar"] = $data_webinar["id_webinar"];
    $_SESSION["id_author"] = $data_webinar["id_author"];
	$_SESSION["gambar_poster"] = $data_webinar["gambar_poster"];
    $_SESSION["tgl_buat"] = $data_webinar["tgl_buat"];
    $_SESSION["judul_webinar"] = $data_webinar["judul_webinar"];
    $_SESSION["kategori_webinar"] = $data_webinar["kategori_webinar"];
    $_SESSION["nama_eo"] = $data_webinar["nama_eo"];
    $_SESSION["email_eo"] = $data_webinar["email_eo"];
    $_SESSION["tanggal_mulai"] = $data_webinar["tanggal_mulai"];
    $_SESSION["waktu_mulai"] = $data_webinar["waktu_mulai"];
    $_SESSION["link_streaming"] = $data_webinar["link_streaming"];
    $_SESSION["deskripsi_webinar"] = $data_webinar["deskripsi_webinar"];

}
?>
<head>
    <title>WMIND</title>
    <!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/logo2.png">
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
        font-size: 15px;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;

	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>

	<center>
		<h3 style="text-transform: capitalize;">Data peserta daftar webinar <?php echo $_SESSION['judul_webinar']; ?><br/> </h3>
	</center>

	<table border="1">
		<tr>
			<th>No</th>
			<th>Tanggal Daftar</th>
			<th>Nama Lengkap</th>
			<th>Email</th>
            <th>Nomor Telephone</th>
            <th>Profesi</th>
		</tr>
        <?php
            include "koneksi.php"; //panggil file koneksi
            $id_webinar_session=$_SESSION['id_webinar'];
            $no=1;
            $cari = $_POST['inputCari'];
            if($cari != ''){
                $select= mysqli_query($koneksi, "SELECT * FROM tb_daftar_peserta WHERE id_webinar_session='$id_webinar_session' AND nama_peserta LIKE '%".$cari."%' OR profesi_peserta LIKE '%".$cari."%' ");
            }else{
                $select= mysqli_query($koneksi, "SELECT * FROM tb_daftar_peserta WHERE id_webinar_session='$id_webinar_session' ");
            }
            if(mysqli_num_rows($select)){
                // perulangan untuk nampilkan data dari database
                while ($data=mysqli_fetch_array ($select)){ 
        ?> 
        <tr>
            <th><?php echo $no++;?></th>
            <td style="text-transform: capitalize;"><?php echo $data['tgl_daftar'];?> </td>
            <td><?php echo $data['nama_peserta'];?> </td>
            <td><?php echo $data['email_peserta'];?> </td>
            <td><?php echo $data['notelp_peserta'];?> </td>
            <td><?php echo $data['profesi_peserta'];?> </td>
            
        </tr>			
        <?php } } else{
                echo '<tr class="align-middle"><td colspan="5">Tidak ada data</td></tr>';
            }?>
	</table>
</body>
</html>