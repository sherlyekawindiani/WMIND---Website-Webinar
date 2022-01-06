<?php
            include "koneksi.php";
            @$id_webinar          = $_POST['id_webinar'];
            // @$id_author        = $_POST['id_author'];
            @$tgl_buat            = $_POST['tgl_buat'];
            @$judul_webinar       = $_POST['judul_webinar'];
            @$kategori_webinar    = $_POST['kategori_webinar'];
            @$nama_eo             = $_POST['nama_eo'];
            @$email_eo            = $_POST['email_eo'];
            @$tanggal_mulai       = $_POST['tanggal_mulai'];
            @$waktu_mulai         = $_POST['waktu_mulai'];
            @$link_streaming      = $_POST['link_streaming'];
            @$deskripsi_webinar   = $_POST['deskripsi_webinar'];
            @$kirim               = $_POST['kirim'];

            // Memasukkan data (Insert) 
            @$query ="UPDATE tb_buat_webinar SET tgl_buat='$tgl_buat',judul_webinar='$judul_webinar',kategori_webinar='$kategori_webinar',nama_eo='$nama_eo',email_eo='$email_eo',tanggal_mulai='$tanggal_mulai',waktu_mulai='$waktu_mulai',link_streaming='$link_streaming',deskripsi_webinar='$deskripsi_webinar' WHERE id_webinar='$id_webinar'";
            $hasil=mysqli_query ($koneksi,$query) ;
            if ($hasil) {
                echo "<script>alert('Berhasil update');
                document.location.href='detail-webinar-eo.php?id_webinar=$id_webinar'
                </script>";
            }
            else {
                echo "<script>alert('Gagal update');
                
                </script>";
                
            }
    ?>
    