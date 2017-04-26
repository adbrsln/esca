<?php session_start();?>
<?php require "check.php";?>
<?php
$connect = mysql_connect("localhost", "root", "user123") or die (mysql_error());
 mysql_select_db("esca", $connect);
$user_id = $_POST['userid'];

//$n = ucwords(strtolower($_POST['nama']));

$nama = $_POST["nama"];

$query = "DELETE FROM members WHERE id = '$user_id'";
		

mysql_query($query) or die('Penghapusan Akaun Pengguna GAGAL. Tiada Pengguna Dapat Dipadamkan.');
$query = "FLUSH PRIVILEGES";
echo "<center>Penghapusan Akaun Pengguna BERJAYA!!</center>";
echo "<center>Akaun pengguna bagi pegawai bernama '".$nama."' telah dihapuskan!<br><br><a href='semakpengguna.php'>Kembali ke modul semak pengguna</a></center>";

//include 'files/closedb.php';	

?>


