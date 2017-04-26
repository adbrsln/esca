<?php session_start();?>
<?php require "check.php";?>
<?php
//modul selepas sistem diaktifkan
$connect = mysql_connect("localhost", "root", "user123") or die (mysql_error());
 mysql_select_db("esca", $connect);
$sql = "SELECT * FROM transaksi where nyahaktif = '0000-00-00 00:00:00' ";
$result = mysql_query($sql, $connect);	
$activation = "";

if(!(isset($_SESSION['aktif']) and strlen($_SESSION['aktif']) > 2)){
$status2 = "disabled";

}

else{
$status1 = "disabled";

?>