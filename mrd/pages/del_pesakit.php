<?php session_start();?>
<?php require "check.php";?>
<?php
$connect = mysql_connect("localhost", "root", "user123") or die (mysql_error());
 mysql_select_db("esca", $connect);
$num = $_GET['num'];
 $sql = "SELECT * FROM daftar where num = '$num'";
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
   
  </head>
  <body>
  <header role="banner" class="navbar navbar-static-top bs-docs-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target="#collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="/esca/mrd" class="navbar-brand">eSystem Continuity Action</a>
        </div>
       
	   <nav  id="collapse" role="navigation" class="collapse navbar-collapse bs-navbar-collapse-menu-right">
          
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
          </br>
		  
          </br>
		  
		  
		  <div id="page-wrapper">
          <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h1 class="page-header">Padam Butiran Pesakit eSCA</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
		  <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
				 </div>
				 <div class="col-lg-12 col-md-12 col-sm-12">
				 
                   <form name = "form1" action="del_pesakit_proses.php" method="post">
										
					<div class="panel panel-danger">
                        <div class="panel-heading">
							<div class="row">
								<div class="col-lg-8 col-md-6 col-sm-6">
									Padam Butiran Pesakit 
								</div>
								<div class="col-lg-2 col-md-1 col-sm-1">
								</div>
								<div class="col-lg-2 col-md-1 col-sm-1">
									<button type ="submit" class="btn btn-primary" "right" >Padam Rekod</button>
								</div>
							</div>						  
						</div>
                        <!-- /.panel-heading -->
                         
						<div class="panel-body">
							<?php  
									 while($row2 = mysql_fetch_assoc($result)){
							?>
							Case ID : CS<?php echo $row2['num']; ?></br>
							<input type = "hidden" name = "num" id = "num" value="<?php echo $row2['num']; ?>" > 
							<input type = "hidden" name = "idtrans" id = "idtrans" value="<?php echo $row2['idtrans']; ?>" > 						
							Nama Pesakit : <?php echo $row2['nama_pesakit']; ?></br>
							ID Pesakit : <?php echo $row2['id_pesakit']; ?></br>
							NRIC : <?php echo $row2['nric']; ?></br>
							lokasi : <?php echo $row2['lokasi']; ?></br>
							Lain Lain  : <?php echo $row2['lain_lain']; ?></br>
							Consultation Notes : <?php echo $row2['nk1']; ?></br>
							
							</br>
							Disalin ke HIS Oleh <?php echo $row2['doneby2']; ?></br>
							Waktu Dibuat pada <?php echo $row2['masatarikh2']; ?></br>
							<?php
															}
															?>
                            </div>
							 
                            <!-- /.table-responsive -->
                            <div class="panel-footer">
									
                                    
									 <div class="row">
								<div class="col-lg-8 col-md-8 col-sm-8">
									
								</div>
								<div class="col-lg-2 col-md-3 col-sm-3">
								</div>
								<div class="col-lg-2 col-md-1 col-sm-1">
									<button type ="submit" class="btn btn-primary" "right" >Padam Rekod</button>
								</div>
								 </form>
							</div>
  					
									</div>
                        </div>
						
                        <!-- /.panel-body -->
                    </div>
                   
                </div>
                <!-- /.col-lg-12 -->
            </div>
            </div>
          </div>
		  </br>
          
        </div>
      
    </main>
    
    <script src="/esca/docs/js/jquery.min.js"></script>
    <script src="/esca/docs/js/bootstrap.min.js"></script>
    <script src="/esca/docs/js/highlight.js"></script>
    <script src="/esca/dist/js/bootstrap-switch.js"></script>
    <script src="/esca/docs/js/main.js"></script>
  </body>
</html>