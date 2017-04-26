<?php session_start();?>
<?php require "check.php";?>
<?php
$connect = mysql_connect("localhost", "root", "user123") or die (mysql_error());
 mysql_select_db("esca", $connect);
$sql = "SELECT * FROM members";
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
  
     <link href="/esca/dist/css/docs.min.css" rel="stylesheet">   <!-- DataTables CSS -->
    <link href="/esca/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="/esca/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <link href="/esca/docs/css/main.css" rel="stylesheet">
    
  </head>
  <body>
  <header role="banner" class="navbar navbar-static-top bs-docs-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target="#collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="../" class="navbar-brand">eSystem Continuity Action</a>
        </div>
       
	   <nav  id="collapse" role="navigation" class="collapse navbar-collapse bs-navbar-collapse-menu-right">
          <ul class="nav navbar-nav navbar-left">
            <li><a href="/esca/user/pages/penggunabaru.php"><i class="fa fa-plus-square fa-fw"></i> Pendaftaran Pengguna</a></li>
            <li><a href="#"><i class="fa fa-tasks fa-fw"></i> Senarai Pengguna</a></li>
            <li><a href="/esca/user/pages/semaksesi.php"><i class="fa fa-database fa-fw"></i> Transaksi eSCA</a></li>
			
                     
          </ul>
		  <ul class="nav navbar-nav navbar-right">
            <li><a href="/esca/page/logout.php" >Log Keluar</a></li>
          
                     
          </ul>
        </nav>
      </div>
    </header>
   <main id="content" role="main">
      
	    <div align = "center" class="container">
         
		  
		  
		  <div id="page-wrapper">
          <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Senarai Pengguna eSCA</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
		  <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Senarai Pengguna
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
							
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID Pengguna</th>
                                            <th>Nama</th>
                                            <th>Nama Pengguna</th>
                                            <th>Jawatan</th>
											<th>Jenis Akaun</th>
											<th>Ubah</th>
											<th>Padam</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                              
                                       <?php 
								     while($row = mysql_fetch_array($result)){
								    	?>
                                        <tr class="gradeA">
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['nama']; ?></td>
                                            <td><?php echo $row['username']; ?></td>
                                             <td ><?php echo $row['jawatan']; ?></td>
											<td><?php echo $row['typeuser']; ?></td>
											<td><center>
												<p><a href="reset_pass.php?user_id=<?=$row["id"];?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></p>
											</center></td> 
									<td><center>
										<p><a href="del_pengguna.php?user_id=<?=$row["id"];?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></p>
									</center></td>
											<?php
									}
									?> 
									   
		
                                        </tr>
                                    
                                       
                                    </tbody>
                                </table>
                            
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
