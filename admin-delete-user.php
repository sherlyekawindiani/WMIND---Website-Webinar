<?php
include "koneksi.php";
$id_user=$_GET[ 'id_user' ] ;
$query="DELETE FROM tb_user WHERE id_user='$id_user'";
$hasil=mysqli_query ($koneksi,$query);
if ($hasil) {
?>

<script language="javascript">
    document.location.href="admin-user.php"; 
</script>


<?php
}else {
    echo "Gagal hapus webinar";
}
?>
