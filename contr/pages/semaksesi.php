<?php session_start();?>
<?php require "check.php";?>
<?php
$connect = mysql_connect("localhost", "root", "user123") or die (mysql_error());
 mysql_select_db("esca", $connect);
$sql = "SELECT * FROM transaksi";
$result = mysql_query($sql, $connect);	

$sql = "SELECT * FROM daftar where doneby2 = ''";
$count = mysql_query($sql, $connect);  														
$c = mysql_num_rows($count)
?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="adbroslan">
    <title>eSystem Continuity Action</title>
    <link href="/esca/docs/css/bootstrap.min.css" rel="stylesheet">
    <link href="/esca/docs/css/highlight.css" rel="stylesheet">
  
    <link href="/esca/dist/css/docs.min.css" rel="stylesheet">
	   <!-- DataTables CSS -->
    <link href="/esca/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="/esca/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

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
          <button type="button" data-toggle="collapse" data-target="#collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="../" class="navbar-brand">eSystem Continuity Action</a>
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
      
	    <div class="container">
         
		  
		  <div id="page-wrapper">
          <div class="row">
                <div class="col-lg-12 col-md-3">
                    <h1 class="page-header">Senarai Transaksi eSCA</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
		  <div class="row">
                <div class="col-lg-12 col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Senarai Transaksi
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
							<div class="table-responsive">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID Transaksi</th>
                                            <th>ID Pengguna</th>
                                            <th>Kelulusan</th>
											<th>Status</th>
                                            <th>Aktif</th>
                                            <th>Nyahaktif</th>
											<th>Tujuan</th>
											<th>Lokasi</th>
											<th>Tindakan</th>
											<th>Jumlah Pesakit</th>
										
											<th>Lihat Rekod</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                              
                                       <?php 
								     while($row = mysql_fetch_array($result)){
								    	?>
                                        <tr class="gradeA">
                                            <td><?php echo $row['id_transaksi']; ?></td>
                                            <td><?php echo $row['id_pengguna']; ?></td>
                                            <td><?php echo $row['lulus']; ?></td>
											<td><?php echo $row['status']; ?></td>
                                            <td ><?php echo $row['aktif']; ?></td>
                                            <td ><?php echo $row['nyahaktif']; ?></td>
											<td><?php echo $row['tujuan']; ?></td>
											<td><?php echo $row['lokasi']; ?></td>
											<td><?php echo $row['plan_type']; ?></td>
											<td><?php echo $row['jum_daftar']; ?></td>
											
									<td><center>
										<p><a href="semak.php?transaksi_id=<?=$row["id_transaksi"];?>"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></p>
									</center></td>
											<?php
									}
									?> 
									   
		
                                        </tr>
                                    
                                       
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
