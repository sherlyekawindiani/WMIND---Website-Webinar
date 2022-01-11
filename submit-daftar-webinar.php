<!-- Submit Daftar Webinar -->
<?php
    include "koneksi.php";
    session_start();
    $id_webinar = $_SESSION['id_webinar']; 
    $id_webinar_session = $_POST['id_webinar_session'];
    $id_author = $_POST['id_author'];
    $id_author_eo = $_POST['id_author_eo'];
    $tgl_daftar = $_POST['tgl_daftar'];
    $nama_peserta = $_POST['nama_peserta'];
    $email_peserta = $_POST['email_peserta'];
    $notelp_peserta = $_POST['notelp_peserta'];
    $profesi_peserta = $_POST['profesi_peserta'];
    $kirim = $_POST['kirim'];

    $query = "INSERT INTO tb_daftar_peserta VALUES ('','$id_webinar_session','$id_author','$id_author_eo','$tgl_daftar','$nama_peserta','$email_peserta','$notelp_peserta','$profesi_peserta')";

    // hasil data array (kirim)
    if (isset($_POST['kirim'])) {

        $hasil = mysqli_query($koneksi, $query);
        if ($hasil) {
        echo "<script>alert('Selamat kamu sudah terdaftar');
            document.location='temukan-webinar-detail.php?id_webinar=$id_webinar'
        </script>";
        } else {
        echo "<script>alert('Proses daftar kamu gagal');
            document.location.href='form-daftar-webinar.php?id_webinar=$id_webinar'</script>";
        }
    }
?>