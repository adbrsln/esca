<?php session_start();?>
<?php require "check.php";?>
<?php
$connect = mysql_connect("localhost", "root", "user123") or die (mysql_error());
 mysql_select_db("esca", $connect);

$sql = "SELECT * FROM transaksi where nyahaktif = '0000-00-00 00:00:00' ";
$result2 = mysql_query($sql, $connect);	

while($row = mysql_fetch_assoc($result2)){
					$_SESSION['idtransaksi'] = $row['id_transaksi'];
					
				}
				
//$n = ucwords(strtolower($_POST['nama']));


$u = $_SESSION['username'];
$k = $_POST["kelulusan"];
$t = $_POST["tujuan"];
$l = $_POST["lokasi"];

$t2 = $_POST["tindakan"];

$s = "Active";
$aktif = date('Y-m-d H:i:s');
$nyahaktif = date('Y-m-d H:i:s');


$query = "INSERT INTO transaksi(id_pengguna, lulus, aktif, status , tujuan, lokasi, plan_type) VALUES ('$u', '$k' , '$aktif' , '$s' , '$t', '$l' , '$t2' )";
	

	

mysql_query($query) or die('Sistem eSCA gagal Diaktifkan');
$query = "FLUSH PRIVILEGES";
echo '<meta http-equiv="refresh" content="0;url=/esca/user/deactivate.php?success=true">'; 

//include 'files/closedb.php';	


?>