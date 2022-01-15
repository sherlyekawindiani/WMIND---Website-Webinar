<?php
include "koneksi.php";
$id_peserta=$_GET[ 'id_peserta' ] ;
$query="DELETE FROM tb_daftar_peserta WHERE id_peserta='$id_peserta'";
$hasil=mysqli_query ($koneksi,$query);
if ($hasil) {
?>

<script language="javascript">
    document.location.href="admin-peserta.php"; 
</script>


<?php
}else {
    echo "Gagal hapus webinar";
}
?>
