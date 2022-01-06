<?php
include "koneksi.php";
$id_webinar=$_GET[ 'id_webinar' ] ;
$query="DELETE FROM tb_buat_webinar WHERE id_webinar='$id_webinar'";
$hasil=mysqli_query ($koneksi,$query);
if ($hasil) {
?>

<script language="javascript">
    document.location.href="riwayat-webinar-eo.php"; 
</script>


<?php
}else {
    echo "Gagal hapus webinar";
}
?>
