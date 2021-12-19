    <?php
            include "koneksi.php";
            // @$id_author         = $_POST['id_author'];
            @$gambar_poster       = upload();
            @$judul_webinar       = $_POST['judul_webinar'];
            @$kategori_webinar    = $_POST['kategori_webinar'];
            @$nama_eo             = $_POST['nama_eo'];
            @$email_eo            = $_POST['email_eo'];
            @$tanggal_mulai       = $_POST['tanggal_mulai'];
            @$waktu_mulai         = $_POST['waktu_mulai'];
            @$offline_alamat      = $_POST['offline_alamat'];
            @$link_streaming      = $_POST['link_streaming'];
            @$deskripsi_webinar   = $_POST['deskripsi_webinar'];
            @$kirim = $_POST['kirim'];

            // upload gambar
            function upload(){
                $namaFiles = $_FILES["gambar_poster"]["name"];
                $ukuran = $_FILES["gambar_poster"]["size"];
                $error = $_FILES["gambar_poster"]["error"];
                $tmp_name = $_FILES["gambar_poster"]["tmp_name"];
                $ekstensi = ["jpg", "jpeg", "png"];
                $ekstensiGambar = explode(".", $namaFiles);
                $ekstensiGambar = strtolower(end($ekstensiGambar));
                if (!in_array($ekstensiGambar, $ekstensi)) {
                    echo "<script>alert('Yang anda upload bukan gambar');</script>";
                    return false;
                }
                if ($ukuran > 2000000) {
                    echo "<script>alert('Ukuran gambar lebih dari 2MB');</script>";
                    return false;
                }
                $nama_baru = uniqid();
                $nama_baru .= ".";
                $nama_baru .= $ekstensiGambar;
                move_uploaded_file($tmp_name, 'assets/img/gambar-poster/' . $nama_baru);
                return $nama_baru;
            }
            // Memasukkan data (Insert) 
            @$query = "INSERT INTO tb_buat_webinar VALUES ('','$gambar_poster','$judul_webinar','$kategori_webinar','$nama_eo','$email_eo',
            '$tanggal_mulai','$waktu_mulai','$offline_alamat','$link_streaming','$deskripsi_webinar')";

            // hasil data array (kirim)
            if (isset($_POST['kirim'])) {

                $hasil = mysqli_query($koneksi, $query);
                if ($hasil) {
                    echo "<script>alert('Berhasil Dibuat');
                    document.location='dashboard-eo.php'
                </script>";
                } else {
                    echo "<script>alert('Gagal Dibuat');
                    document.location='buat-webinar.php'</script>";
                }
            }
    ?>