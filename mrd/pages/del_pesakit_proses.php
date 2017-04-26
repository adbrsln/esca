<?php session_start();?>
<?php require "check.php";?>
<?php
$connect = mysql_connect("localhost", "root", "user123") or die (mysql_error());
 mysql_select_db("esca", $connect);
$num = $_POST['num'];
$idtrans = $_POST['idtrans'];



$query3 = "UPDATE transaksi set jum_rekodmrd = jum_rekodmrd + 1  where id_transaksi = '$idtrans'";
mysql_query($query3);

$query = "DELETE FROM daftar WHERE num = '$num'";
mysql_query($query) or die('Penghapusan Butiran Pesakit GAGAL. Tiada Butiran Pesakit Dapat Dipadamkan.');
$query = "FLUSH PRIVILEGES";
echo  '<script type="text/javascript" language="javascript">

alert("Butiran Pesakit telah dipadam");
</script>';

 echo '<meta http-equiv="refresh" content="0;url=/esca/mrd/pages/semak.php?transaksi_id='.$idtrans.'">'; 
 
//include 'files/closedb.php';	

?>


