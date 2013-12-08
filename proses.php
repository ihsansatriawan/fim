<?php 
error_reporting(E_ALL ^ E_NOTICE);
session_start();
date_default_timezone_set('Asia/Jakarta');
include("koneksi.php");

if (isset ($_POST['absen'])){
    $time = date("H:i:s");
    $result = mysql_query("
		INSERT INTO 
		peserta(
		nama,
                institusi,
                email,
                no_hp,
                waktu_dtg
		) 
		VALUES(
		'".$_POST["nama"]."',
		'".$_POST["institusi"]."',
		'".$_POST["email"]."',
		'".$_POST["no_hp"]."',
                '".$time."'
		)
		");
?>
<script language='JavaScript'>alert('Terima Kasih sudah absen\n\
Selamat Menikmati #FIMRamadhan 2013');
            document.location='index.html'</script> 

<?php } 


?>