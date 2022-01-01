<!-- Submit Daftar Webinar -->
<?php
    include "koneksi.php";
    $nama_peserta = $_POST['nama_peserta'];
    $email_peserta = $_POST['email_peserta'];
    $notelp_peserta = $_POST['notelp_peserta'];
    $profesi_peserta = $_POST['profesi_peserta'];
    $tgl_daftar = $_POST['tgl_daftar'];
    $kirim = $_POST['kirim'];

    $query = "INSERT INTO tb_daftar_peserta VALUES ('','$nama_peserta','$email_peserta','$notelp_peserta','$profesi_peserta','$tgl_daftar')";

    // hasil data array (kirim)
    if (isset($_POST['kirim'])) {

        $hasil = mysqli_query($koneksi, $query);
        if ($hasil) {
        echo "<script>alert('Selamat kamu sudah terdaftar');
        document.location='form-daftar-webinar.php'
        </script>";
        } else {
        echo "<script>alert('Proses daftar kamu gagal');
            document.location=''</script>";
        }
    }
?>