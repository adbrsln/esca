<?php session_start();?>
<?php require "check.php";?>
<?php
$connect = mysql_connect("localhost", "root", "user123") or die (mysql_error());
 mysql_select_db("esca", $connect);
$case_id = $_GET['case_id'];
$trans = $_GET['trans_id'];
 $sql = "SELECT * FROM daftar where num = '$case_id'";
$result = mysql_query($sql, $connect);	

$sql2 = "SELECT * FROM transaksi WHERE  id_transaksi = '$trans'";
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

   <script  src="/esca/dist/ckeditor/ckeditor.js"></script>
  <script src="/esca/dist/ckeditor/samples/js/sample.js"></script>
  <link rel="stylesheet" href="/esca/dist/ckeditor/samples/css/samples.css">
  <link rel="stylesheet" href="/esca/dist/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">
 
  </head>
  <body>
  <header role="banner" class="navbar navbar-static-top bs-docs-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target="#collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="/esca/contr/pages/semak.php?transaksi_id=<?=$trans?>" class="navbar-brand">eSystem Continuity Action</a>
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
											<a data-toggle="collapse" data-parent="#accordion" >Case ID : CS<?php echo $row['num']; ?></a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse in">
                                        
										<div class="panel-body">
                     <div class="bs-callout bs-callout-danger" id="callout-glyphicons-accessibility">
                                                    <h4>Panduan</h4>
                                                    <p>Tekan pada ikon <img src="/esca/src/sa.png" alt="Select All"> untuk memilih semua , seterusnya tekan ikon <img src="/esca/src/p.png" alt="Select All"> yang berada disebelah ikon pilih semua. </br>seterusnya buka HIS dan tekan <strong>CTRL + V </strong>ke dalam notes eSca.</p>
                                                      </div>
										
										<?php  
                               while($row2 = mysql_fetch_assoc($result2)){
                              ?>  
                          <textarea name = "lain" class="form-control ckeditor"  rows="8">
                                                                                    
                            <strong>Maklumat Downtime </strong></br>   
                            Kelulusan eSCA : <?php echo $row2['lulus']; ?></br>
                            Tujuan : <?php echo $row2['tujuan']; ?></br>
                            Lokasi : <?php echo $row2['lokasi']; ?></br>
                            Masa Downtime : <?php echo $row2['aktif']; ?> hingga <?php echo $row2['nyahaktif']; ?></br>
                            
                            </br>
                            <?php
                              }
                              ?>

                            <strong>Pendaftaran</strong></br>
                            Kes ID : <strong>CS<?php echo $row['num']; ?></strong> </br>
        										Nama : <?php echo $row['nama_pesakit']; ?></br>
        										NRIC / Passport : <?php echo $row['nric']; ?></br>
        										ID Pesakit : <?php echo $row['id_pesakit']; ?></br>
        										Lokasi 1 : <?php echo $row['lokasi']; ?></br>
                            Lokasi 2: <?php echo $row['lokasi2']; ?></br>
                            Lokasi 3 : <?php echo $row['lokasi3']; ?></br>
                            Lokasi 4 : <?php echo $row['lokasi4']; ?></br>
                            Maklumat Lain : <?php echo $row['lain_lain']; ?></br></br>
                            <strong>Consultation Note : </strong></br></br><?php echo $row['nk1']; ?></br></br></br>
        									

										</textarea>
											
										</div>
						
                                    </div>
									<div class="panel-footer">
										<form name = "form1" action="ubah_reg.php" method="post">
										<div class = "container">
											<div class = "row" >
                      <div class="col-lg-4">
											Daftar / Copy Notes Ke sistem His Oleh
													<input name ="donebycontr" class="form-control" placeholder="<?php echo $row['doneby2']; ?>" value = "" required>
													</div>

                          <div class="col-lg-4">
													Jawatan
													<input name ="jawatan2" class="form-control" placeholder="<?php echo $row['jawatan2']; ?>" value = "" required>
													</div>
													<input type = "hidden" name = "masa" id = "masa" value="<?php echo date('Y-m-d H:i:s');?>" > </br>
													<input type = "hidden" name = "caseid2" id = "caseid2" value="<?php  echo $case_id ?>" > 
                          <input type = "hidden" name = "trans2" id = "trans2" value="<?php  echo $trans ?>" > 
													<div class="col-lg-2">
                            </div>
                          <div class="col-lg-2">
                          <button type="submit" name = "submit" class="btn btn-primary"  >Hantar</button>
													<button class="btn btn-warning"  onClick = "history.go(-1)" >Kembali</button>
											   <input type = "hidden" name = "hasil" id = "trans2" value="<?php  echo $_SESSION['level']; ?>" > 
                          </div>
                      </div>
										</div>
										</form>
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
      <script src="/esca/docs/js/main.js"></script>
     
  </body>
</html>