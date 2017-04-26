<?php session_start();?>
<?php   // Include database connection settings
$hostname = 'localhost';        // Your MySQL hostname. Usualy named as 'localhost',                  so you're NOT necessary to change this even this script has already     online on the internet.
$dbname   = 'esca'; // Your database name.
$username = 'root';             // Your database username.
$password = 'user123';                 // Your database password. If your database has no         password, leave it empty.

// Let's connect to host
$connect = mysql_connect($hostname, $username, $password) or DIE('Connection to host is failed,       perhaps the service is down!');
// Select the database
mysql_select_db("esca") or DIE('Database name is not available!');
$caseid = $_POST['caseid2'];


$transid = $_POST['transid'];

$dob = $_POST['dob'];
$nation = strtoupper($_POST['national']);
$warga = strtoupper($_POST['warga']);
$noresit = $_POST['noresit'];
function clean($string) {
      return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
}
$namapesakit = $_POST['namapesakit'];
$nric = clean($_POST['nric']);
$idpesakit = $_POST['idpesakit'];
$lokasi = $_POST['lokasi'];
$lokasi2 = $_POST['lokasi2'];
$lokasi3 = $_POST['lokasi3'];
$lokasi4 = $_POST['lokasi4'];
$lain2 = $_POST['lain2'];
 $masa = date('Y-m-d H:i:s');
$doneby = trim(strtoupper($_POST['doneby']));
$masatarikh1 = $_POST['masatarikh1'];
$donejawatan = trim(strtoupper($_POST['jawatan']));
 $nk = $_POST['nk'];
 $str  = $nk."</br></br> ".$_POST['nk1']." Direkod oleh ".$doneby." , ".$donejawatan ."  ".$masa ;
 
$jawatan = $_POST['jawatan'];





if ($doneby != "" && $donejawatan != ""){

$queryreg = "UPDATE daftar SET  nama_pesakit = '$namapesakit', nric = '$nric', id_pesakit = '$idpesakit', lokasi = '$lokasi',lokasi2 = '$lokasi2',lokasi3 = '$lokasi3',lokasi4 = '$lokasi4' , lain_lain = '$lain2' , nk1 = '$str', doneby1 = '$doneby' , masatarikh1 = '$masa', jawatan1 = '$jawatan' WHERE num = '$caseid'";

	
mysql_query($queryreg,$connect) or die('Error: ' . mysql_error());
$queryaktif = "FLUSH PRIVILEGES";
 
 
 echo '<meta http-equiv="refresh" content="0;url=/esca/guest/pages/semak.php?id=t">'; 


}
else
{
echo '<meta http-equiv="refresh" content="0;url=/esca/guest/pages/semak.php?id=f">'; 

}

  



?>