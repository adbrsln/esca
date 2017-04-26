<?php session_start();?>
<?php require "check.php";?>
<?php
$hostname = 'localhost';        // Your MySQL hostname. Usualy named as 'localhost',                  so you're NOT necessary to change this even this script has already     online on the internet.
$dbname   = 'esca'; // Your database name.
$username = 'root';             // Your database username.
$password = 'user123';                 // Your database password. If your database has no         password, leave it empty.

// Let's connect to host
$connect = mysql_connect($hostname, $username, $password) or DIE('Connection to host is failed,       perhaps the service is down!');
// Select the database
mysql_select_db("esca") or DIE('Database name is not available!');


$donebymrd= $_POST['donebymrd'];
$masa2 = $_POST['masa'];
$trans3 = $_POST['transss'];

$queryregew = "UPDATE transaksi SET  mrd_name = '$donebymrd' , masatarikh = '$masa2' WHERE id_transaksi = '$trans3'";

		mysql_query($queryregew,$connect) or die('Error: ' . mysql_error());
$queryreg = "FLUSH PRIVILEGES";
 

  echo '<meta http-equiv="refresh" content="0;url=/esca/mrd/pages/semak.php?transaksi_id='.$trans3.'">'; 


  



?>