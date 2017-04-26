<?php session_start();?>
<?php
$connect = mysql_connect("localhost", "root", "user123") or die (mysql_error());
 mysql_select_db("esca", $connect);
$sql = "SELECT * FROM transaksi where status = 'Active' ";
$result = mysql_query($sql, $connect);  
$count = mysql_num_rows($result) ;
    
if ($count != "") {
$str = ''; 

}
else 
{
 $str = 'disabled'; 

}
?>


<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Turn checkboxes and radio buttons in toggle switches.">
    <meta name="author" content="Mattia Larentis, Emanuele Marchi and Peter Stein">
    <title>System Continuity Action</title>
    <link href="docs/css/bootstrap.min.css" rel="stylesheet">
    
   
	
    <link href="/esca/dist/css/docs.min.css" rel="stylesheet">
    <link href="docs/css/main.css" rel="stylesheet">

   
  </head>
  <body>
  <header role="banner" class="navbar navbar-static-top bs-docs-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target="#collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="./" class="navbar-brand">eSystem Continuity Action</a>
        </div>
      
          <ul class="nav navbar-nav navbar-left">
           <li><a href="/esca/semaksesi.php"  >Semak Pesakit</a></li>
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
		  <h1 class="title">Frequently Asked Question</h1>
      
        </div>
      </div>
      </br></br>
       <div class="container bs-docs-container">
        <div class="row">
        <div class="col-md-11" role="main">
          <h4 >Q : Mengapa saya tidak dapat Mengakses eSCa ?</h4>
          <p>A : Admin / Pentadbir sistem tidak mengaktifkan transaksi sistem eSCA</p>
        </div>
       </div>

       </br>
        <div class="row">
        <div class="col-md-11" role="main">
          <h4 >Q : Bagaimana pesakit di labour room didaftar ?</h4>
          <p>
A : Daftarkan ibu sahaja, Anak tidak perlu daftar dalam ESCA. Maklumat anak1, anak 2, anak 3 perlu masukkan dalam consultation form. 
</p>
        
        </div>
       </div>
      </br>
      <div class="row">
        <div class="col-md-11" role="main">
          <h4 >Q : Bila perlu register anak.  </h4>
          <p>A : Anak register apablia dimasukkan ke NICU. Jika twin perlu register letak 1M , 2M , 3M dan diikuti dengan IC no IBU. </p>
        </div>
       </div>
      </br>
       <div class="row">
        <div class="col-md-11" role="main">
          <h4 >Q : Mengapakah Paparan saya kelihatan pelik dan tidak tersusun ?</h4>
          <p>A : Refresh laman sesawang esca. Jika masalah tidak selesai, sila hubungi pihak IT untuk menyelesaikan masalah browser anda. </p>
        </div>
       </div>
      </br>
       <div class="row">
        <div class="col-md-11" role="main">
          <h4 >Q : Bagaimana saya boleh rujuk pesakit apabila sistem telah nyahaktif ?</h4>
          <p>A : Sila pergi kesini <a href = "semaksesi.php">Semakan Pesakit</a></p>
        </div>
       </div>
      </br>
       <div class="row">
        <div class="col-md-11" role="main">
          <h4 >Q : Bagaimana saya hendak buat order dari sistem?</h4>
          <p>A : Sistem ini tidak boleh membuat order.Semua order perlu menggunakan borang manual.  jika hendak rekod maklumat order boleh dimasukkan dalam column consultation form.</p>
        </div>
       </div>
      </br>
       <div class="row">
        <div class="col-md-11" role="main">
          <h4 >Q : Bolehkah saya memadam maklumat pesakit yang saya telah silap masuk  ?</h4>
          <p>A : Tidak boleh . sila hubungi pihak IT untuk mengubah data pesakit. </p>
        </div>
       </div>
        </div>
          </main>
    
    <script src="docs/js/jquery.min.js"></script>
    <script src="docs/js/bootstrap.min.js"></script>
    <script src="docs/js/highlight.js"></script>
    <script src="dist/js/bootstrap-switch.js"></script>
    <script src="docs/js/main.js"></script>
  </body>
</html>