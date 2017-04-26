<?php session_start();?>
<?php require "check.php";?>
<?php
$connect = mysql_connect("localhost", "root", "user123") or die (mysql_error());
 mysql_select_db("esca", $connect);

$username2 = $_POST["nama"];
$usr_id = $_POST["userid"];
$newpass = $_POST["pass1"];
$newpass2 = $_POST["pass2"];

if($newpass != $newpass2)
{	
	echo "<center>Penukaran Password GAGAL!!</center>";
	echo "<br><center>'Password Baru' dan 'Re-Password Baru' tidak sama!!</center>";
	echo "<br><center>Sila cuba sekali lagi!</center>";
	echo "<br><center><a href='admin_reset_pass.php'>Kembali ke Modul Tukar Katalaluan</a></center> ";	
}
else
{	
	$encrypted_mypassword = md5($newpass);
	// ----- Coding for update data to database ------------------------------------------------
	$query = "UPDATE members SET password='$encrypted_mypassword'
WHERE id='$usr_id' ";
			
	mysql_query($query) or die('Error, reset password failed');
	$query = "FLUSH PRIVILEGES";
	
	echo "<center>Penukaran Password BERJAYA !!</center>";
	echo "<br><center>Penukaran Password bagi Username '".$username2."' telah berjaya!!</center>";
	echo "<br><center><a href='semakpengguna.php'>Kembali ke Modul Admin</a></center> ";	

}

//include 'files/closedb.php';	

?>