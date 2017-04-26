<?php session_start();?>
<?php require "check.php";?>
<?php
$connect = mysql_connect("localhost", "root", "user123") or die (mysql_error());
 mysql_select_db("esca", $connect);
$usrid = $_GET['user_id'];
 $sql = "SELECT * FROM members where id = '$usrid'";
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
          <button type="button" data-toggle="collapse" data-target="#collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="../" class="navbar-brand">eSystem Continuity Action</a>
        </div>
          
	   <nav  id="collapse" role="navigation" class="collapse navbar-collapse bs-navbar-collapse-menu-right">
          <ul class="nav navbar-nav navbar-left">
            <li><a href="/esca/user/pages/penggunabaru.php#"><i class="fa fa-plus-square fa-fw"></i> Pendaftaran Pengguna</a></li>
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
  
	    <div class="container">
         </br>
		  <div id="page-wrapper">
          <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Reset Katalaluan Pengguna eSCA</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
		  <div class="row">
		   <div class="col-lg-4">
		   </div>
                <div class="col-lg-5 col-md-2">
                   <form name = "form1" action="reset_pass_proses.php" method="post" >
										
					<div class="panel panel-danger">
                        <div class="panel-heading">
                            Padam Pengguna
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
						
							
							Nama : <?php echo $row2['nama']; ?></br>
							
							<input type = "hidden" name = "nama" id = "nama" value="<?php echo $row2['nama']; ?>" > 
							<input type = "hidden" name = "userid" id = "userid" value="<?php echo $row2['id']; ?>" > 
													
							Username : <?php echo $row2['username']; ?></br>
							APC/MMC : <?php echo $row2['apc_mmc']; ?></br>
							Jawatan : <?php echo $row2['jawatan']; ?></br>
							Level : <?php echo $row2['typeuser']; ?></br>
							
							</br>New Password
							<input type= "password"  name = "pass1" class="form-control" placeholder=""required >
							</br> Re-type Password
							<input type= "password"  name = "pass2" class="form-control" placeholder=""required >
								</br>					
							<?php
															}
															?>
                             </div>
							</div>
							</div>
							 
                            <!-- /.table-responsive -->
                            <div class="panel-footer">
									<button type ="submit" class="btn btn-primary"  ">Ubah Katalaluan</button>
                                        
										</form>
										</div>
                        </div>
						
                        <!-- /.panel-body -->
                    </div>
                   
                </div>
                <!-- /.col-lg-12 -->
            </div>
		  
		 
      </div>
    </main>
    
    <script src="/esca/docs/js/jquery.min.js"></script>
    <script src="/esca/docs/js/bootstrap.min.js"></script>
    <script src="/esca/docs/js/highlight.js"></script>
    <script src="/esca/dist/js/bootstrap-switch.js"></script>
    <script src="/esca/docs/js/main.js"></script>
  </body>
</html>