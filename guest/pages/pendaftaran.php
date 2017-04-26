<?php session_start();?>
<?php

   // Include database connection settings
$hostname = 'localhost';        // Your MySQL hostname. Usualy named as 'localhost',                  so you're NOT necessary to change this even this script has already     online on the internet.
$dbname   = 'esca'; // Your database name.
$username = 'root';             // Your database username.
$password = 'user123';                 // Your database password. If your database has no         password, leave it empty.

// Let's connect to host
$connect = mysql_connect($hostname, $username, $password) or DIE('Connection to host is failed,       perhaps the service is down!');
// Select the database
mysql_select_db("esca") or DIE('Database name is not available!');


$namapesakit = strtoupper($_POST['namapesakit']);
$nric = $_POST['nomic'];
$idpesakit = strtoupper($_POST['idpesakit']);
$lokasi = $_POST['lokasi'];
$dob1 = $_POST['dob1'];
$dob2 = $_POST['dob2'];
$dob3 = $_POST['dob3'];
$dob = $dob1.'&nbsp;'.$dob2.'&nbsp;'.$dob3;
$nation = strtoupper($_POST['national']);
$warga = strtoupper($_POST['warga']);
$noresit = $_POST['noresit'];
$lainlain = $_POST['lain'];
$donebyguest = strtoupper($_POST['donebyguest']);
$donejawatan = strtoupper($_POST['jawatan']);
$masatarikh = $_POST['masa'];
$idtrans = $_POST['idtrans2'];
 $masa = date('Y-m-d H:i:s');
$nk1 = "Pendaftaran di ".$lokasi." . ".$_POST['nk1guest']."</br> Direkod oleh ".$donebyguest." , ".$donejawatan." ".$masa ;



$query="SELECT * FROM daftar WHERE  nric = '$nric'";
$result=mysql_query($query);
$num=mysql_num_rows($result);


if($num > 0)
{ 

echo '<meta http-equiv="refresh" content="0;url=/esca/guest/pages/daftar.php?s=e">'; }


elseif ((!$nric == NULL) && (!$namapesakit == NULL) &&(!$idtrans == NULL) && (!$lokasi == NULL)  )
		{
		$querydaftar = "INSERT INTO daftar (idtrans, id_pesakit,nama_pesakit,nric,lokasi,lain_lain,nk1,doneby1,masatarikh1,jawatan1,dob,warganegara,nation,resit) 		
		VALUES ('$idtrans','$idpesakit','$namapesakit','$nric','$lokasi','$lainlain','$nk1','$donebyguest','$masatarikh','$donejawatan','$dob','$warganegara','$nation','$noresit')";

		mysql_query($querydaftar,$connect) or die('Error: ' . mysql_error());
		$querydaftar = "FLUSH PRIVILEGES";

		$querytambah =  "UPDATE transaksi set jum_daftar = jum_daftar + 1  where id_transaksi = '$idtrans'";
		 mysql_query($querytambah,$connect);



		 $query4="SELECT * FROM daftar WHERE id_pesakit = '$idpesakit' and nric = '$nric'";
		 $resultla=mysql_query($query4);

		 while($row2 = mysql_fetch_assoc($resultla)){
		 	
			$c = $row2['num'];
		   
				}

		
		header("Location: /esca/guest/pages/daftar.php?s=true&c=$c"); //
		}

else	{
		echo '<meta http-equiv="refresh" content="0;url=/esca/guest/pages/daftar.php?s=false">'; 
		}


 


?>