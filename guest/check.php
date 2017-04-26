<?php session_start();?>
<?Php
if(!(isset($_SESSION['idtransaksi']) and strlen($_SESSION['id_transaksi']) > 2)){
header("Location: /esca/error.php"); /* Redirect browser */
exit();
}

else{

}
?>