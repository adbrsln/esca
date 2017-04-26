<?php
session_start();

// Include database connection settings
$hostname = 'localhost';        // Your MySQL hostname. Usualy named as 'localhost',                  so you're NOT necessary to change this even this script has already     online on the internet.
$dbname   = 'esca'; // Your database name.
$username = 'root';             // Your database username.
$password = 'user123';                 // Your database password. If your database has no         password, leave it empty.

// Let's connect to host
$connect = mysql_connect($hostname, $username, $password) or DIE('Connection to host is failed,       perhaps the service is down!');
// Select the database
mysql_select_db("esca") or DIE('Database name is not available!');



// Retrieve username and password from database according to user's input
$username=mysql_real_escape_string($_POST['user']);
$password=mysql_real_escape_string($_POST['pass']);
$encrypted_mypassword=md5($password);
$sql = "SELECT * FROM members WHERE (username = '$username') and (password = '$encrypted_mypassword')";
$login = mysql_query($sql,$connect);

if($login)
$count = mysql_num_rows($login) ;

else
  die("something failed");

// Check username and password match

 while($row = mysql_fetch_assoc($login)){
					$_SESSION['username'] = $_POST['user'];
					$_SESSION['nama'] = $row['nama'];
					$_SESSION['level'] = $row['typeuser'];
					$type = $_SESSION['level'];
				}

 if ($count != "") {
 
			 switch ((int)$type) {
				case 4:
				 			
				
					 
					header('Location: /esca/user'); // admin Level;
					break;
				case 3:
				 			
				
					header('Location: /esca/mrd');
					break;
			   
				default:
							
				 
					header('Location: /esca/contr');
			}
			
		
}
else {
// Jump to login page

header('Location:/esca/page/login.php?s=false');

}   




?>