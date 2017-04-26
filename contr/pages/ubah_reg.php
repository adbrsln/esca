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

$hasil  = $_POST['hasil'];
$donebycontr = strtoupper($_POST['donebycontr']);
$jawatan2 = strtoupper($_POST['jawatan2']);
$masa1 = $_POST['masa'];
$caseid = $_POST['caseid2'];
$trans = $_POST['trans2'];


switch ((int)$hasil) {
				case 1:
				 			
				
						$queryreg = "UPDATE daftar SET  doneby3 = '$donebycontr' , jawatan3 = '$jawatan2' ,masatarikh2 = '$masa1' WHERE num = '$caseid'";

								mysql_query($queryreg,$connect) or die('Error: ' . mysql_error());
						$queryaktif = "FLUSH PRIVILEGES";
						 
						 header("Location: /esca/contr/pages/semak.php?transaksi_id=$trans"); // 
						 

					break;
				
			   
				default:
							
				 $queryreg = "UPDATE daftar SET  doneby2 = '$donebycontr' , jawatan2 = '$jawatan2' ,masatarikh2 = '$masa1' WHERE num = '$caseid'";

							mysql_query($queryreg,$connect) or die('Error: ' . mysql_error());
					$queryaktif = "FLUSH PRIVILEGES";
					 
					 header("Location: /esca/contr/pages/semak.php?transaksi_id=$trans"); // 
					 

			}




?>