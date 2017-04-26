<?php session_start();?>
<?php require "check.php";?>
<?php
$connect = mysql_connect("localhost", "root", "user123") or die (mysql_error());
 mysql_select_db("esca", $connect);
$trans = $_POST['transs'];

//$n = ucwords(strtolower($_POST['nama']));



$query = "DELETE FROM transaksi WHERE id_transaksi = '$trans'";
		

mysql_query($query) or die('Penghapusan rekod  sesi eSCA GAGAL. Tiada transaksi Dapat Dipadamkan.');
$query = "FLUSH PRIVILEGES";
echo "<center>Penghapusan rekod  sesi eSCA BERJAYA!!</center>";
echo "<center><br><br><a href='semaksesi.php'>Kembali ke modul semak pengguna</a></center>";

//include 'files/closedb.php';	

?>


