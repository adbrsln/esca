<?php session_start();?>
<?php require "check.php";?>
<?php
$connect = mysql_connect("localhost", "root", "user123") or die (mysql_error());
 mysql_select_db("esca", $connect);

$idtransaksi = $_POST['idtrans'];
$aktif = $_POST['aktif'];
$nyahaktif = date('Y-m-d H:i:s');




// convert to unix timestamps
$firstTime=strtotime($aktif);
$lastTime=strtotime($nyahaktif);

// perform subtraction to get the difference (in seconds) between times
$inputSeconds=$lastTime-$firstTime;


    $secondsInAMinute = 60;
    $secondsInAnHour  = 60 * $secondsInAMinute;
    $secondsInADay    = 24 * $secondsInAnHour;

    // extract days
    $days = floor($inputSeconds / $secondsInADay);

    // extract hours
    $hourSeconds = $inputSeconds % $secondsInADay;
    $hours = floor($hourSeconds / $secondsInAnHour);

    // extract minutes
    $minuteSeconds = $hourSeconds % $secondsInAnHour;
    $minutes = floor($minuteSeconds / $secondsInAMinute);

    // extract the remaining seconds
    $remainingSeconds = $minuteSeconds % $secondsInAMinute;
    $seconds = ceil($remainingSeconds);

    // return the final array
    
        $d = (int) $days;
        $h = (int) $hours;
        $m = (int) $minutes;
        $s = (int) $seconds;
		$tempoh = $d." Days ".$h." Hours ".$m." Minutes";

$query = "UPDATE transaksi SET tempoh = '$tempoh', nyahaktif = '$nyahaktif' , status = 'Deactive' where id_transaksi = '$idtransaksi'";
		

mysql_query($query) or die('Sistem eSCA gagal Diaktifkan');
$query = "FLUSH PRIVILEGES";
     
echo '<meta http-equiv="refresh" content="0;url=/esca/user/index.php?success=true">'; 


unset($_SESSION['idtransaksi']);
//include 'files/closedb.php';	





?>