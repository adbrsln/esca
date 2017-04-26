<?php session_start();?>
<?php require "check.php";?>
<?php
$connect = mysql_connect("localhost", "root", "user123") or die (mysql_error());
 mysql_select_db("esca", $connect);
$trid = $_GET['transaksi_id'];
 $sql = "SELECT * FROM transaksi where id_transaksi = '$trid'";
$result = mysql_query($sql, $connect);	

	


?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="adbroslan">
    <title>System Continuity Action</title>
    <link href="/esca/docs/css/bootstrap.min.css" rel="stylesheet">
    <link href="/esca/docs/css/highlight.css" rel="stylesheet">
    <link href="/esca/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet">
    <link href="/esca/dist/css/docs.min.css" rel="stylesheet">
     <link href="/esca/docs/css/main.css" rel="stylesheet">
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
      
	    <div  class="container">
        
       
        <div id="page-wrapper">
          <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Padam Rekod Pengguna eSCA</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
		  <div class="row">
		   <div class="col-lg-3">
		   </div>
                <div class="col-lg-5">
                   <form name = "form1" action="rekod_proses.php" method="post">
										
					<div class="panel panel-danger">
                        <div class="panel-heading">
                            Padam rekod sesi eSCA
                        </div>
                        <!-- /.panel-heading -->
                         
						<div class="panel-body">
							<?php  
									 while($row2 = mysql_fetch_assoc($result)){
							?>
							<div class="col-lg-12">
							<div class="col-lg-1">
							</div>
							<div class="col-lg-8">
						
							
							ID Transaksi : <?php echo $row2['id_transaksi']; ?></br>
							
							<input type = "hidden" name = "transs" id = "transs" value="<?php echo $row2['id_transaksi']; ?>" > 
													
							ID Pengguna : <?php echo $row2['id_pengguna']; ?></br>
							Kelulusan : <?php echo $row2['lulus']; ?></br>
							Masa Aktif : <?php echo $row2['aktif']; ?></br>
							Masa Nyahaktif : <?php echo $row2['nyahaktif']; ?></br>
							Tujuan : <?php echo $row2['tujuan']; ?></br>
							Lokasi : <?php echo $row2['lokasi']; ?></br>
							Lokasi 2 : <?php echo $row2['lokasi2']; ?></br>
							Tindakan : <?php echo $row2['plan_type']; ?></br>
							
						</br>					
							<?php
															}
															?>
                             </div>
							</div>
							</div>
							 
                            <!-- /.table-responsive -->
                            <div class="panel-footer">
									<button type ="submit" class="btn btn-danger"  >Padam Rekod Sesi eSCA</button>
                                        
										</form>
										</div>
                        </div>
						
                        <!-- /.panel-body -->
                    </div>
                   
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row --> </div>
    
       
      
    </main>
    
    <script src="/esca/docs/js/jquery.min.js"></script>
    <script src="/esca/docs/js/bootstrap.min.js"></script>
    <script src="/esca/docs/js/highlight.js"></script>
    <script src="/esca/dist/js/bootstrap-switch.js"></script>
    <script src="/esca/docs/js/main.js"></script>
  </body>
</html>