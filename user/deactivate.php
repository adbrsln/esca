<?php session_start();?>
<?php require "pages/check.php";?>
<?php
$connect = mysql_connect("localhost", "root", "user123") or die (mysql_error());
 mysql_select_db("esca", $connect);
$sql = "SELECT * FROM transaksi where status = 'Active' ";
$result = mysql_query($sql, $connect);	
$count = mysql_num_rows($result) ;
$how = $_GET['success'];

if ($count = "") {

header("Location: /esca/user/index.php"); /* Redirect browser */
exit;		
}
else 
{
		
}
?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="adbroslan">
    <title>System Continuity Action</title>
    <link href="../docs/css/bootstrap.min.css" rel="stylesheet">
    <link href="../docs/css/highlight.css" rel="stylesheet">
    <link href="../dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet">
    <link href="/esca/dist/css/docs.min.css" rel="stylesheet"> <link href="../docs/css/main.css" rel="stylesheet">
	<script src="/esca/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="/esca/dist/sweetalert.css">
    <script>
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-43092768-1']);
      _gaq.push(['_trackPageview']);
      (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
      })();
    </script>
  </head>
  <body>
  <header role="banner" class="navbar navbar-static-top bs-docs-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target="#collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="/esca/user" class="navbar-brand">eSystem Continuity Action</a>
        </div>
       
	   <nav  id="collapse" role="navigation" class="collapse navbar-collapse bs-navbar-collapse-menu-right">
         <ul class="nav navbar-nav navbar-left">
            <li><a href="/esca/user/pages/penggunabaru.php"><i class="fa fa-plus-square fa-fw"></i> Pendaftaran Pengguna</a></li>
            <li><a href="/esca/user/pages/semakpengguna.php"><i class="fa fa-tasks fa-fw"></i> Senarai Pengguna</a></li>
            <li><a href="/esca/user/pages/semaksesi.php"><i class="fa fa-database fa-fw"></i> Transaksi eSCA</a></li>
			
                     
          </ul>
		 <ul class="nav navbar-nav navbar-right">
            
			 
         <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-plus-square fa-fw"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></i>  | <?php echo  "   ".$_SESSION['nama'];?></span><span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  
                  <li><a href="/esca/page/logout.php" ><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>  | Log Keluar</a></li>
         
                </ul>
              </li>
           
                     
          </ul>
        </nav>
      </div>
    </header>
    <main id="content" role="main">
      
		
	  </br></br></br>
	    <div align = "center" class="container">
          </br>
		  

		  
        
		  <?php 
						 while($row = mysql_fetch_assoc($result)){ 
					?> 
					<div class="col-lg-3">
					</div>
					<div class="col-lg-6">
						 <form name = "form1" id="form1" action="/esca/user/pages/deac.php" method="post">
                
						 <div class="form-group">
						 <div class="panel panel-success">
						  <div class="panel-heading">
							<h3 class="panel-title">Current Session Still Active</h3>
						  </div>
						  <div class="panel-body">
							Kelulusan : <?php echo $row['lulus'];?></br>
							Tujuan : <?php echo $row['tujuan'];?></br>
							Lokasi : <?php echo $row['lokasi'];?></br>
							Tindakan : <?php echo $row['plan_type'];?></br>
							Status : Active at <?php echo $row['aktif'];?></br></br>
							<input type = "hidden" name = "idtrans" value = "<?php echo $row['id_transaksi'];?>">
							<input type = "hidden" name = "aktif" value = "<?php echo $row['aktif'];?>">
						  </form>
						  </div>
						  
						  <p class="lead"><button type = "submit" class="btn btn-danger btn-lg">Nyahaktifkan Sistem eSCA</button></p>
           
						  <div class="panel-footer">
						  <p class="version">Bahagian Teknologi Maklumat Hospital Sungai Buloh </p>
						
						</div>
						</div>
					</div>
								<div class="col-lg-3">
					</div>
								<?php 
									}
								?>
		           
              </div>
            </div>
          </div>
		  </br>
          
        </div>
      
    </main>
	
	
	
	
    <?php
switch ($how){
	case 'true':
	echo  '<script type="text/javascript" language="javascript"> 
	swal("Sistem Diaktifkan", "Pengaktifan esca Berjaya", "success");</script>';
	break;
	case 'false':
	echo  '<script type="text/javascript" language="javascript"> swal("Gagal!", "Pengaktifan Gagal", "error");
	</script>';
	break;
default:


} ?>


    <script src="/esca/docs/js/jquery.min.js"></script>
    <script src="/esca/docs/js/bootstrap.min.js"></script>
    <script src="/esca/docs/js/highlight.js"></script>
    <script src="/esca/dist/js/bootstrap-switch.js"></script>
    <script src="/esca/docs/js/main.js"></script>

  </body>
</html>