<?php 
session_start();
<?php require "check.php";?>
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

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

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
                        <i class="fa fa-user fa-fw"></i>Guest  <i class="fa fa-caret-down"></i>
                    </a>
                    
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                                   
                        
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Pendaftaran Pengguna</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Senarai Pengguna</a>
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
                    <h1 class="page-header">Pendaftaran Pesakit</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
           
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Butir - Butir Pesakit Beserta Konsultasi
                        </div>
                        <!-- .panel-heading -->
						<form name = "form1" id="form1" action="pendaftaran.php" method="post">
                        <div class="panel-body">
						<?php  $notif ?>
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Pendaftaran Pesakit</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
											<div class="col-lg-6">											
												<div class="form-group">
													<label>Nama Pesakit</label>
													<input name = "namapesakit" class="form-control" placeholder="<?php $masatarikh ?>">
													<label>NRIC</label>
													<input name = "nomic" class="form-control" placeholder="">
													<label>ID Pesakit</label>
													<input name = "idpesakit" class="form-control" placeholder="">
													<label>Lokasi</label>
													<input name = "lokasi" class="form-control" placeholder=""required
                data-fv-notempty-message=""  >
													<label>Lain - Lain</label>
													<textarea name = "lain" class="form-control" placeholder = "Sila Masukkan Maklumat Lain - Lain Disini" rows="5"></textarea>
													
													
													</div> 
											</div>
										</div>
                                    </div>
                                </div>
								<div class="panel-footer">
									<button type="submit" name = "submitBtn" class="btn btn-primary" onClick="return fill_register()"  >Hantar</button>
                                        <button type="reset" class="btn btn-warning">Reset</button>
  					
									</div>
								
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Done By</a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse in">
                                        
										<div class="panel-body">
											<div class="col-lg-6">
												<input name ="donebyguest" class="form-control" placeholder="" required
                data-fv-notempty-message="The password is required" >
											<input type = "hidden" name = "masa" id = "masa" value="<?php echo date('Y-m-d H:i:s');?>" >
											
											</div>
										</div>
						
                                    </div>
									
									
														
                            </div>
                        </div>
						</form>
                        <!-- .panel-body -->
							
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
