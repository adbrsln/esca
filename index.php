<?php session_start();?>
<?php

include 'db.php';
$sql = "SELECT * FROM transaksi where status = 'Active'";

$result = mysql_query($sql, $connect);  

$count = mysql_num_rows($result) ;
   while($row = mysql_fetch_assoc($result)){
          
          $idtrans = $row['id_transaksi'];
  }
  
if ($count != "") {

$str = ''; 
$how = 'e';

}
else 
{
 $str = 'disabled';
 $how = 'false' ;

}

  
?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mattia Larentis, Emanuele Marchi and Peter Stein">
    <title>System Continuity Action</title>
    <link href="/esca/docs/css/bootstrap.min.css" rel="stylesheet">
    <script src="/esca/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="/esca/dist/sweetalert.css">
   
	
    <link href="/esca/docs/css/docs.min.css" rel="stylesheet">
    <link href="/esca/docs/css/main.css" rel="stylesheet">

   
  </head>
  <body>
    <style>
    body {
    background-color: #6F5499;
}
</style>
  <header role="banner" class="navbar navbar-static-top bs-docs-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target="#collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="./" class="navbar-brand">eSystem Continuity Action</a>
        </div>
      
          <ul class="nav navbar-nav navbar-left" >
            <li><a href="semaksesi.php" >Semak Pesakit</a></li>
            <li><a href="/esca/manual.html" target="_Blank" >Manual Pengguna</a></li>
          <li><a href="/esca/faq.php"  >FAQ</a></li>
          
                     
          </ul>
         
	   
     <nav  id="collapse" role="navigation" class="collapse navbar-collapse bs-navbar-collapse-menu-right">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/esca/page/login.php" >Log Masuk</a></li>
          
                     
          </ul>
        </nav>
      </div>
    </header>
    <main id="content" role="main">
      <div class="bs-docs-masthead">
        <div class="container">
          </br>
		  <h1 class="title">eSystem Continuity Action</h1>
          </br>
		  <p> Sistem ini adalah sistem aplikasi dalaman yang akan dibangunkan bagi 
		  menambahbaik proses</br> pengurusan borang-borang manual 
		  yang digunakan semasa berlakunya gangguan </br>sistem (Downtime). </p>
		  </br></br>
          <p class="lead"><a href="/esca/guest/pages/semak.php" <?=$str ?>  class="btn btn-outline-inverse btn-lg">Mulakan sistem! </a></p>
          </br>
          <p class="version">Bahagian Teknologi Maklumat Hospital Sungai Buloh </p>
          
		  </br></br>
		  <p class="footer"> eSca is best viewed by Mozilla Firefox® 17.x or higher, Chrome  42.x or higher, or equivalent browser software. </p>
        </div>
      
    </main>
    
    

    <script src="docs/js/jquery.min.js"></script>
    <script src="docs/js/bootstrap.min.js"></script>
    <script src="docs/js/highlight.js"></script>
    <script src="dist/js/bootstrap-switch.js"></script>
    <script src="docs/js/main.js"></script>
  </body>
</html> 

<?php
switch ($how){
  case 'e':
  echo  '<script type="text/javascript" language="javascript"> 
  swal("Sistem eSCa Aktif", "Anda Boleh menggunakan Sistem ini . Sila tekan butang mulakan sistem", "success");</script>';
  break;
  case 'false':
  echo  '<script type="text/javascript" language="javascript"> swal("Sistem eSca Tidak Aktif", "Sila hubungi PIhak IT jika terdapat sebarang masalah", "error");
  </script>';
  break;
  
default:


} ?>