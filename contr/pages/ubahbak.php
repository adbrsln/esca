<?php session_start();?>
<?php require "check.php";?>
<?php
$connect = mysql_connect("localhost", "root", "user123") or die (mysql_error());
 mysql_select_db("esca", $connect);
$case_id = $_GET['case_id'];
 $sql = "SELECT * FROM daftar where num = '$case_id'";
$result = mysql_query($sql, $connect);	

$sql2 = "SELECT * FROM transaksi WHERE  id_transaksi = (SELECT MAX(id_transaksi) FROM transaksi)";
$result2 = mysql_query($sql2, $connect);	
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>eSystem Continuity Action</title>

   <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">eSystem Continuity Action</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i><?php echo $_SESSION['nama'];?>  <i class="fa fa-caret-down"></i>
                    </a>
						<ul class="dropdown-menu dropdown-user">
                         <li><a href="/esca/page/logout.php" ><i class="fa fa-plus-square fa-fw"><span class="glyphicon glyphicon-off" aria-hidden="true"></span></i>  Log Keluar</a></li>
          
                    </ul>
                   
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="/esca/contr/pages/semak.php"><i class="fa fa-edit fa-fw"></i> Semakan Butiran Pesakit</a>
                        </li>
                        
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
          <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Semakan Butiran</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
		  <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Butir - Butir Pesakit Downtime
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
							<div class = "container">
								  <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
											<div class="col-lg-6">											
												<div class="form-group">
													<?php  
															 while($row2 = mysql_fetch_assoc($result2)){
																?>
														Kelulusan eSCA : <?php echo $row2['lulus']; ?></br>
														Tujuan : <?php echo $row2['tujuan']; ?></br>
														Lokasi : <?php echo $row2['lokasi']; ?></br>
														Lokasi 2 : <?php echo $row2['lokasi2']; ?></br>
														Status : <?php echo $row2['status']; ?></br>
														Waktu Aktif : <?php echo $row2['aktif']; ?></br>
														Waktu nyahaktif : <?php echo $row2['nyahaktif']; ?></br>
														</br>
														<?php
															}
															?>
													</div> 
											</div>
										</div>
                                    </div>
								  
								  
								  

									 
									
							</div>
                            
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
											<div class="col-lg-4">
										
										
										Nama : <?php echo $row['nama_pesakit']; ?></br>
										NRIC : <?php echo $row['nric']; ?></br>
										ID Pesakit : <?php echo $row['id_pesakit']; ?></br>
										Consultation Note : <?php echo $row['nk1']; ?></br></br></br>
										Done by : <?php echo $row['doneby1']; ?></br>
										Tarikh masa dibuat : <?php echo $row['masatarikh1']; ?></br>
										</br>
										
										
										
												
											
											</div>
										</div>
						
                                    </div>
									<div class="panel-footer">
										<form name = "form1" action="ubah_reg.php" method="post">
										<div class = "container">
											<div class="col-lg-4">
											Done by IT Contractor
													<input name ="donebycontr" class="form-control" placeholder="" value = "<?php echo $row['doneby2']; ?>" required>
													<input type = "hidden" name = "masa" id = "masa" value="<?php echo date('Y-m-d H:i:s');?>" > </br>
													<input type = "hidden" name = "caseid2" id = "caseid2" value="<?php  echo $case_id ?>" > 
													<button type="submit" name = "submit" class="btn btn-primary"  >Hantar</button>
													
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
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row --> </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>


</body>

</html>
