<?php session_start();?>
<?php require "check.php";?>
<?php
$connect = mysql_connect("localhost", "root", "user123") or die (mysql_error());
 mysql_select_db("esca", $connect);
$tra = $_GET['transaksi_id'];
 $sql = "SELECT * FROM daftar WHERE  idtrans = '$tra'";
$result = mysql_query($sql, $connect);	

$sql2 = "SELECT * FROM transaksi WHERE  id_transaksi = '$tra' ";
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
          <button type="button" data-toggle="collapse" data-target="#collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="/esca/contr/pages/semak.php?transaksi_id=<?=$tra?>" class="navbar-brand">eSystem Continuity Action</a>
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
				  
		   <div id="page-wrapper">
          <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1 class="page-header">Semakan Butiran Pesakit</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
		 					</br>
		  <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Senarai Kemasukan Butiran Pesakit Semasa Downtime
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
							
							<div class="table-responsive">

                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID Kes</th>
                                            <th>ID Pesakit</th>
                                            <th>Nama Pesakit</th>
                                            <th>NRIC / No. Passport</th>
                                            <th>Lokasi</th>
											<th>Lokasi 2</th>
                                        
											<th>Tarikh / Masa</th>
											<th>Direkod Oleh</th>
											<th>Daftar di HIS</th>
                                            <th>Salin ke HIS</th>
											<th>Lihat Data</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                              
                                       <?php 
								     while($row = mysql_fetch_array($result)){
								    	?>
                                        <tr class="gradeA">
                                            <td>CS<?php echo $row['num']; ?></td>
                                            <td><?php echo $row['id_pesakit']; ?></td>
                                            <td><?php echo $row['nama_pesakit']; ?></td>
                                            <td><?php echo $row['nric']; ?></td>
                                            <td ><?php echo $row['lokasi']; ?></td>
											<td ><?php echo $row['lokasi2']; ?></td>
                                            
											<td><?php echo $row['masatarikh1']; ?></td>
                                            <td><?php echo $row['doneby1']; ?></td>
											<td><?php echo $row['doneby3']; ?></td>
                                            <td><?php echo $row['doneby2']; ?></td>
											<td><center>
                        <p><a href="ubah.php?case_id=<?=$row["num"];?>&trans_id=<?=$tra;?>"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></p>
                    </center></td>
                                        </tr>
                                     <?php
									}
									?> 
                                       
                                    </tbody>
                                </table>
                            </div>
							</div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row --> </div>
            </div>
          </div>
		  </br>
          
        </div>
      
    </main>
  
    <!-- /#wrapper -->
<script src="/esca/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/esca/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/esca/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="/esca/bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="/esca/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    

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
