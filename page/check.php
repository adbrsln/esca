<?Php
session_start();
if(!(isset($_SESSION['level']) and strlen($_SESSION['level']) > 2)){
header("Location: /esca/error.php"); /* Redirect browser */
exit();
}

else{

}
?>
