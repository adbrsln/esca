<?php session_start();?>
<?php
$connect = mysql_connect("localhost", "root", "user123") or die (mysql_error());
 mysql_select_db("esca", $connect);
$case_id = $_GET['case_id'];
$transid = $_GET['transid'];
 $sql = "SELECT * FROM daftar where num = '$case_id'";
$result = mysql_query($sql, $connect);	

$sql2 = "SELECT * FROM transaksi WHERE  id_transaksi = '$transid'";
$result2 = mysql_query($sql2, $connect);	
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
  
    <link href="/esca/dist/css/docs.min.css" rel="stylesheet">
	   <!-- DataTables CSS -->
    <link href="/esca/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="/esca/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <link href="/esca/docs/css/main.css" rel="stylesheet">
 
  </head>
  <body>
   <header role="banner" class="navbar navbar-static-top bs-docs-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target="#collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="./" class="navbar-brand">eSystem Continuity Action</a>
        </div>
      
          <ul class="nav navbar-nav navbar-left">
            <li><a href="semaksesi.php" >Semak Pesakit</a></li>
            <li><a href="/esca/manual.html" target="_Blank" >Manual Pengguna</a></li>
          <li><a href="/esca/faq.php" >FAQ</a></li>
          
                     
          </ul>
         
     
     <nav  id="collapse" role="navigation" class="collapse navbar-collapse bs-navbar-collapse-menu-right">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/esca/page/login.php" >Log Masuk</a></li>
          
                     
          </ul>
        </nav>
      </div>
    </header>
    <main id="content" role="main">
      
	    <div  class="container">
      
				  
		   <div id="page-wrapper">
          <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Semakan Butiran</h1>
                </div>
				
			
		  <div class="row">
                <div class="col-lg-12 col-md-12">
                    
                        
                            <!-- /.table-responsive -->
                            <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            	<?php 
								     while($row = mysql_fetch_assoc($result)){
								    	?>
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Case ID : CS<?php echo $row['num']; ?></a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse in">
                                        
										<div class="panel-body">
											<div class="col-lg-12 col-md-12">
										
										<?php  
                               while($row2 = mysql_fetch_assoc($result2)){
                              ?>  
                                
                            <strong>Maklumat Downtime </strong></br>   
                            Kelulusan eSCA : <?php echo $row2['lulus']; ?></br>
                            Tujuan : <?php echo $row2['tujuan']; ?></br>
                            Lokasi : <?php echo $row2['lokasi']; ?></br>
                            Masa Downtime : <?php echo $row2['aktif']; ?> hingga <?php echo $row2['nyahaktif']; ?></br>
                            
                            </br>
                            <?php
                              }
                              ?>
                              <div class="col-lg-6 col-md-6">
                            <strong>Pendaftaran</strong></br>
                            Kes ID : <strong>CS<?php echo $row['num']; ?></strong></br>
        										Nama : <?php echo $row['nama_pesakit']; ?></br> 
        										NRIC : <?php echo $row['nric']; ?></br>
        										ID Pesakit : <?php echo $row['id_pesakit']; ?></br>
                            D.O.B : <?php echo $row['dob']; ?></br>
                             Warganegara : <?php echo $row['warganegara']; ?></br>
                             Negara : <?php echo $row['nation']; ?></br>
        										No. Resit : <?php echo $row['resit']; ?></br></br>

                            Lokasi 1 : <?php echo $row['lokasi']; ?></br>
                            Lokasi 2: <?php echo $row['lokasi2']; ?></br>
                            Lokasi 3 : <?php echo $row['lokasi3']; ?></br>
                            Lokasi 4 : <?php echo $row['lokasi4']; ?></br>
                            Maklumat Lain : <?php echo $row['lain_lain']; ?></br></br>
                            <strong>Consultation Note : </strong></br></br><?php echo $row['nk1']; ?></br></br></br>
        										
                            
                            </br>
										        </div>
											</div>
										</div>
						
                                    </div>
									<div class="panel-footer">
									
										<?php
									}
									?>
									</div>
									
														
                            </div>
                        </div>
                        <!-- /.panel-body -->
                   
                    <!-- /.panel -->
                
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row --> </div>
        <!-- /#page-wrapper -->

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