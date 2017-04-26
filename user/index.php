<?php session_start();?>
<?php require "pages/check.php";?>
<?php
$connect = mysql_connect("localhost", "root", "user123") or die (mysql_error());
 mysql_select_db("esca", $connect);
$sql = "SELECT * FROM transaksi where status = 'Active' ";
$result = mysql_query($sql, $connect);	
$count = mysql_num_rows($result) ;

				
$sql2 = "SELECT * FROM transaksi where status = 'Active'";
$result2 = mysql_query($sql2, $connect);
$how = $_GET['success'];

while($row2 = mysql_fetch_assoc($result2)){
$_SESSION['idtransaksi'] = $row2['id_transaksi'];

}
				
if ($count != "") {
 
echo '<meta http-equiv="refresh" content="0;url=/esca/user/deactivate.php">'; 
	
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
    <link href="/esca/dist/css/docs.min.css" rel="stylesheet">
     <link href="../docs/css/main.css" rel="stylesheet">
	<!-- This is what you need -->
  <script src="/esca/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="/esca/dist/sweetalert.css">
  <!--.......................-->
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
      
	    <div align = "center" class="container">
          </br>
		  
          </br>
		  
		  
		  <div class="col-lg-3">
					</div>
					<div class="col-lg-6 col-md-3">
						 <form name = "form1" id="form1" action="/esca/user/pages/aktif.php" method="post">
									
						 <div class="form-group">
						 <div class="panel panel-success">
						  <div class="panel-heading">
							<h3 class="panel-title">Aktifkan Sesi baru eSCA</h3>
						  </div>
						  <div class="container"  >
									</br>
									<div class="col-sm-6 col-lg-2">
										<p>Kelulusan</p>
									</div>
										<div class="row">
											<div class="col-sm-6 col-lg-2">										 
											 <input name = "kelulusan" class="form-control" placeholder="Pengarah" required>
											</div>		
										</div>
									</br>
									
									<div class="col-sm-6 col-lg-2">
										  <p>Tujuan</p>
										  	</div>
									  <div class="row">
											<div class="col-sm-6 col-lg-2">										 
											 <input name = "tujuan" class="form-control" placeholder="Testing Genset" required>
											</div>		
									</div>
									
									</br>
									
									<div class="col-sm-6 col-lg-2">
										  <p>Lokasi</p>
										  	</div>
									  <div class="row">
											<div class="col-sm-6 col-lg-2">										 
											 <input name = "lokasi" class="form-control" placeholder="Klinik" required>
											</div>		
									</div>
									</br>
									
									<div class="col-sm-6 col-lg-2">
										  <p>Tindakan</p>
										  	
											</div>
									  <div class="row">
											<div class="col-sm-6 col-md-6  col-lg-2">										 
											<select name = "tindakan" class="form-control">
												  <option>Planned Downtime</option>
												  <option>Unplanned Downtime</option>
												  
												</select>
											</div>		
									</div>
									</br>
									</br>
									
								</div>
						  <p class="lead"><button type = "submit" class="btn btn-success btn-lg">Aktifkan Sistem eSCA</button></p>
           
						  <div class="panel-footer">
						  <p class="version">Bahagian Teknologi Maklumat Hospital Sungai Buloh </p>
						
						</div>
						</div>
					</div>
								<div class="col-lg-3">
					</div>
           </form>
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
	swal("Sistem Dinyahaktifkan", "Penyahaktifan Berjaya", "success");</script>';
	break;
	case 'false':
	echo  '<script type="text/javascript" language="javascript"> swal("Gagal!", "Penyahaktifan Gagal", "error");
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