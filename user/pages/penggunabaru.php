<?php 
session_start();
?>
<?php require "check.php";?>
<?php 

$check = $_GET['s'];

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
                <div class="col-lg-3">
				</div>
				<div class="col-lg-6 col-md-3">
                    
                        
                        <!-- .panel-heading -->
						<form name = "form1" id="form1" action="reg_user.php" method="post">
                        <div class="panel-body">
						<?php  $notif ?>
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Pendaftaran Pengguna</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
								
											<div class="col-lg-10">											
												<div class="form-group">
													<label>Username</label>
													<input name = "user" class="form-control" placeholder="<?php $masatarikh ?>">
													<label>Password</label>
													<input type = "password" name = "pass" class="form-control" placeholder="">
													<label>Nama</label>
													<input name = "nama" class="form-control" placeholder="">
													<label>Jawatan</label>
													<input name = "jawatan" class="form-control" placeholder=""required >
													
													<div class="dropdown">
													  <label>Jenis Level Pengguna</label>
														<select class="form-control" name = "jenis">
															<option value ="1">Hasil</option>
															<option value ="2">LO</option>
															<option value ="3">MRD</option>
															<option value ="4">Admin</option>
															
														</select>
													
													</div> 
											</div>
										</div>
                                    </div>
									<div class="panel-footer">
									<button type="submit" name = "submitBtn" class="btn btn-primary" onClick="return fill_register()"  >Hantar</button>
                                        <button type="reset" class="btn btn-warning">Reset</button>
  					
									</div>
                                </div>
								
								
                                
                        </div>
						</form>
                        <!-- .panel-body -->
							
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            
            <!-- /.row --> </div>
            </div>
          </div>
		  </br>
          
        </div>
      
    </main>
    <?php
switch ($check){
	case 'true':
	echo  '<script type="text/javascript" language="javascript"> 
	swal("Tahniah!", "Pendaftaran Pengguna baru Berjaya", "success");</script>';
	break;
	case 'false':
	echo  '<script type="text/javascript" language="javascript"> swal("Gagal!", "Pendaftaran Pengguna baru gagal", "error");
	</script>';
	break;
	
	case 'e':
	echo  '<script type="text/javascript" language="javascript"> swal("Gagal!", "Username telah digunakan! Sila gunakan Username lain", "error");
</script>';
	break;
default:

}

?>
    <script src="/esca/docs/js/jquery.min.js"></script>
    <script src="/esca/docs/js/bootstrap.min.js"></script>
    <script src="/esca/docs/js/highlight.js"></script>
    <script src="/esca/dist/js/bootstrap-switch.js"></script>
    <script src="/esca/docs/js/main.js"></script>
  </body>
</html>