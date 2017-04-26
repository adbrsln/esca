<?php session_start();?>
<?php require "check.php";?>
<?php
$connect = mysql_connect("localhost", "root", "user123") or die (mysql_error());
 mysql_select_db("esca", $connect);


$n = ucwords(strtolower($_POST['nama']));
$u = strtolower($_POST['user']);
$p = $_POST['pass'];
$l = $_POST['jenis'];
$apc = $_POST['apcmmc'];
$j = $_POST['jawatan'];



$query="SELECT * FROM members WHERE username = '$u'";
$result=mysql_query($query);
$num=mysql_num_rows($result);

if($num > 0)
{ echo '<meta http-equiv="refresh" content="0;url=/esca/user/pages/penggunabaru.php?s=e">'; }


elseif ((!$n == NULL) && (!$u == NULL) && (!$p == NULL) && ($l > 0))
		{
		$encrypted_mypassword = md5($p);
		$query = "INSERT INTO members (nama, username, password, typeuser, jawatan) VALUES ('$n', '$u', '$encrypted_mypassword', '$l','$j')";
		mysql_query($query) or die ("Error Query [".$strSQL."]");;
		$query = "FLUSH PRIVILEGES";
		
		echo '<meta http-equiv="refresh" content="0;url=/esca/user/pages/penggunabaru.php?s=true">'; 

		}

else	{
		echo '<meta http-equiv="refresh" content="0;url=/esca/user/pages/penggunabaru.php?s=false">'; 
		}


?>