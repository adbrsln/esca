
<?Php
$connect = mysql_connect("localhost", "root", "user123") or die (mysql_error());
 mysql_select_db("esca", $connect);
$sql = "SELECT * FROM transaksi where status = 'Active' ";
$result = mysql_query($sql, $connect);	
$count = mysql_num_rows($result) ;


if($count < 0){
echo '<meta http-equiv="refresh" content="0;url=/esca">'; 

}

else{


}
?>

