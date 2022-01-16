<!-- Submit Daftar Webinar -->
<?php
    include "koneksi.php";
    session_start();
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    //include library phpmailer
    include('assets/phpmailer/src/Exception.php');
    include('assets/phpmailer/src/PHPMailer.php');
    include('assets/phpmailer/src/SMTP.php');
    
    $id_webinar = $_SESSION['id_webinar']; 
    $id_webinar_session = $_POST['id_webinar_session'];
    $id_author = $_POST['id_author'];
    $id_author_eo = $_POST['id_author_eo'];
    $judul_webinar_session = $_POST['judul_webinar_session'];
    $tgl_mulai_session = $_POST['tgl_mulai_session'];
    $waktu_mulai_session = $_POST['waktu_mulai_session'];
    $tgl_daftar = $_POST['tgl_daftar'];
    $nama_peserta = $_POST['nama_peserta'];
    $email_peserta = $_POST['email_peserta'];
    $notelp_peserta = $_POST['notelp_peserta'];
    $profesi_peserta = $_POST['profesi_peserta'];
    $kirim = $_POST['kirim'];

    $query = "INSERT INTO tb_daftar_peserta VALUES ('','$id_webinar_session','$id_author','$id_author_eo','$judul_webinar_session','$tgl_mulai_session',
    '$waktu_mulai_session','$tgl_daftar','$nama_peserta','$email_peserta','$notelp_peserta','$profesi_peserta')";
    $hasil = mysqli_query($koneksi, $query);
    if ($hasil) {
        $email_pengirim = 'sherlyekawindiani@gmail.com';
        $nama_pengirim = 'WMIND';
        $email_penerima = $_POST['email_peserta'];
        $subjek = "Anda sudah terdaftar dalam webinar $judul_webinar_session";
        $pesan = 
        '<html>
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        </head>
        <body style="margin: 0; padding: 0">
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td style="background-repeat: no-repeat; background-color: rgb(242,242,242); padding-top: 25px;">
                        <table cellpadding="0" cellspacing="0" width="100%" align="center " style="align-items: center;">
                            <tr>
                                <td align="center">
                                    <div style="width: 100%; max-width: 650px; margin: 0 auto;">
                                        <table width="100%" cellpadding="0" cellspacing="0" border="0" style="width: 100%; max-width: 650px; margin: 0 auto;">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <table width="100%" bgcolor="#ffffff" cellpadding="0" cellspacing="0"  style="width: 100%; max-width: 620px; margin: 0 auto; border-radius: 20px; background: #ffffff;">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="background-color: #0E1B3A; height: 30px; border-top-left-radius: 20px; border-top-right-radius: 20px;">
                                                                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td style=" text-align: center; width: 50px; height: 50px;">
                                                                                        
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <p style="text-align: center; margin-top: -10px; color: #ffffff; font-family: Poppins;">WMIND</p>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <table width="100%" cellpadding="0" cellspacing="0" style="background-color: #ffffff; height: 460px; border-radius: 20px; color: black; ">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td style="padding-top: 0px; padding-bottom: 60px; padding: 20px;" >
                                                                                        <table cellpadding="0" cellspacing="0" border="0"  >
                                                                                            <tbody style="width: 100%;">
                                                                                                <tr>
                                                                                                    <td style="font-family: Noto Sans, sans-serif;  font-weight: 200; font-size: 16px; line-height: 24px; color: black; padding-bottom: 30px; ">
                                                                                                        <h3 style="text-transform: capitalize;">Hai '.$nama_peserta.'. </h3>
                                                                                                        <span style="text-transform: capitalize;"> Selamat Pendaftaran Anda telah Berhasil dalam Webinar <b>'.$judul_webinar_session.'</b></span> <br>
                                                                                                        <hr>
                                                                                                        Webinar ini <b>diselenggarakan</b> secara online pada :<br>
                                                                                                        Tanggal 		: <b>'.$tgl_mulai_session.'</b> <br>
                                                                                                        Waktu			: <b>'.$waktu_mulai_session.' WIB</b> <br>
                                                                                                        Via				: <b>Online</b> 
                                                                                                        <hr>
                                                                                                        Silahkan tunggu email link join akan dikirim melalui email <br>
                                                                                                        <br>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td style="font-family: Noto Sans, sans-serif; font-weight: 200; font-size: 16px; color: black;">
                                                                                                        Terimakasih atas partisipasinya, <br>
                                                                                                        WMIND
                                                                                                    </td>
                                                                                                </tr>
                                                                                                
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <!-- Social Icon Start -->
                                                                                <tr>
                                                                                    <td>
                                                                                        <table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-top: 50px; background-color: #0E1B3A; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
                                                                                            <tbody style="font-family: Noto Sans, sans-serif; font-weight: 200; font-size: 16px; color: white;">
                                                                                                <tr>
                                                                                                    <td style="text-align: center; ">
                                                                                                        <p>Temukan Kami</p>
                                                                                                    </td>
                                                                                                    
                                                                                                </tr>
                                                                                                <tr style="text-align: center;">
                                                                                                    <td style="padding-bottom: 8px; padding-top: 10px; "> 
                                                                                                        <span >WMIND</span>
                                                                                                    </td>
                                                                                                    
                                                                                                </tr>
                                                                                                <tr style="text-align: center;">
                                                                                                    <td style="padding-bottom: 8px; "> 
                                                                                                        +62 812-5240-6973
                                                                                                    </td>
                                                                                                    
                                                                                                </tr>
                                                                                                <tr style="text-align: center;  ">
                                                                                                    <td style="padding-bottom: 20px; color: #ffffff;">
                                                                                                        wmind@gmail.com
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <!-- Social Icon End -->
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <!-- Msg Strat -->
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                            <!-- Footer Start -->
                            <tr>
                                <td>
                                    <div style="width: 100%; max-width: 620px; margin: 0 auto;">
                                        <table width="100%" cellpadding="0" cellspacing="0" border="0" style="">
                                            <tr>
                                                <td style="font-family: Poppins; font-weight: normal; font-size: 14px; line-height: 24px; color: #333333; text-align: left; padding-bottom: 30px; padding-top: 15px; padding-left: 20px;">
                                                    Copyright © 2021 <a href="https://web.utter.academy/" target="_blank" style="text-decoration: none; color: #333333">Wmind</a>
                                                </td>
                                                
                                            </tr>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                            <!-- Footer End -->
                        </table>
                    </td>
                </tr>
            </table>
        </body>
        </html>
        ';
        
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->Username = $email_pengirim;
        $mail->Password = 'zuwouugvabaeathd';
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        // $mail->SMTPDebug = 2;

        $mail->setFrom($email_pengirim, $nama_pengirim);
        $mail->addAddress($email_penerima);
        $mail->isHTML(true);
        $mail->Subject = $subjek;
        $mail->Body = $pesan;

        $send = $mail->send();

        if($send){
            echo "<h2>Daftar webinar berhasil cek email anda </h2><br>
            <a href='temukan-webinar-detail.php?id_webinar=$id_webinar'>Kembali ke detail webinar </a>";

        }
        else{
            echo "<h2>Daftar webinar gagal  </h2><br>
            <a href='form-daftar-webinar.php?id_webinar=$id_webinar'>Kembali ke form daftar webinar </a>";
        }

    echo "<script>alert('Selamat kamu sudah terdaftar');
        document.location='temukan-webinar-detail.php?id_webinar=$id_webinar'
        </script>";

    }
    else {
    echo "<script>alert('Proses daftar kamu gagal');
    document.location.href='form-daftar-webinar.php?id_webinar=$id_webinar'</script>";
    }

?>
