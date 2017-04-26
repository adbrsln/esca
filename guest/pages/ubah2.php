<?php session_start();?>
<?php
$connect = mysql_connect("localhost", "root", "user123") or die (mysql_error());
 mysql_select_db("esca", $connect);
$case_id = $_GET['case_id'];
 $sql = "SELECT * FROM daftar where num = '$case_id'";
$result = mysql_query($sql, $connect);	

$how = $_GET['id'];
$sql2 = "SELECT * FROM transaksi WHERE  id_transaksi = (SELECT MAX(id_transaksi) FROM transaksi)";
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
    <link href="/esca/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet">
    <link href="/esca/dist/css/docs.min.css" rel="stylesheet">
    <link href="/esca/docs/css/main.css" rel="stylesheet">

  </head>
  <body>
  <header role="banner" class="navbar navbar-static-top bs-docs-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target="#collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="/esca/guest/pages/semak.php" class="navbar-brand">eSystem Continuity Action</a>
        </div>
       
	   
      </div>
    </header>
    <main id="content" role="main">
      
	    <div  class="container">
         
				  
		   <div id="page-wrapper">
          <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Ubah Butir Pesakit</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
		  <div class="row">
                <div class="col-lg-12">
                    	                            
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
                                        <form name = "form1" action="ubah_reg.php" method="post">
										<div class="panel-body">
											<div class="col-lg-9">     
										
										Nama Pesakit  (Jika Pesakit Unknown , sila Letakkan Unknown1 - Unknown99+) <input  name ="namapesakit" class="form-control" placeholder="" value ="<?php echo $row['nama_pesakit']; ?>"></input>
										</br>
										No. K/p / No. Passport<input  name ="nric" class="form-control" placeholder="" value ="<?php echo $row['nric']; ?>" >
										</br>
										ID Pesakit<input  name ="idpesakit" class="form-control" placeholder="" value ="<?php echo $row['id_pesakit']; ?>" >
										</br>
										Lokasi 1<input  disabled class="form-control" placeholder="" value = "<?php echo $row['lokasi']; ?>">

										</br>
										Lokasi 2<input  name ="lokasi2" class="form-control" placeholder="" value = "<?php echo $row['lokasi2']; ?>">
										</br>
										Lokasi 3<input  name ="lokasi3" class="form-control" placeholder="" value = "<?php echo $row['lokasi3']; ?>">
										</br>
										Lokasi 4<input  name ="lokasi4" class="form-control" placeholder="" value = "<?php echo $row['lokasi4']; ?>">
										</br>
										Lain - Lain Maklumat Pendaftaran Pesakit<textarea name = "lain2" class="form-control" placeholder="Alamat , no kad pengenalan, no resit, no telefon, biling group"rows="2" cols=500><?php echo $row['lain_lain']; ?></textarea>
										</br>
										Consultation Notes / Nursing Notes <textarea name = "nk1" class="form-control ckeditor" rows="5" cols=500><?php //echo $row['nk1']; ?></textarea>
										<a href="#" data-toggle="modal" data-target="#myModal">View Previous Consultation Notes</a>
										<!-- Modal -->
											<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											  <div class="modal-dialog modal-lg">
												<div class="modal-content">
												  <div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													<h4 class="modal-title" id="myModalLabel"> Previous Consultation Notes</h4>
												  </div>
												  <div class="modal-body">
													<?php echo $row['nk1']; ?></br>
												  </div>
												  
												</div>
											  </div>
											</div>
										</br></br>
									
										<strong>Nama Pendaftar</strong> (Sila masukkan Nama Penuh anda)<input  name ="doneby" id ="doneby"  minlength = "6" class="form-control" placeholder="<?php echo $row['doneby1']; ?>"  required><div id="infoUser"></div>
										</br>
										<strong>Jawatan</strong> (Beserta Lokasi Bertugas)<input  name ="jawatan" minlength = "6" class="form-control" placeholder="<?php echo $row['jawatan1']; ?>"  required>
											
										
											</div>
										</div>
						
                                    </div>
									<div class="panel-footer">
										
										<div class = "container">
											<div class="col-lg-4">
																									
																
													<button type="submit" name = "submit" class="btn btn-primary"  >Hantar</button>
													<a class="btn btn-warning"  href= "/esca/guest/pages/semak.php" >Kembali</a>
													<input type = "hidden" name = "caseid2" id = "caseid2" value="<?php  echo $case_id ?>" >
													<input type = "hidden" name = "masatarikh1" id = "masatarikh1" value="<?php echo date('Y-m-d H:i:s');?>" >													
													<input type = "hidden" name = "nk" id = "nk" value = "<?=$row['nk1']; ?>" >													
													<input type = "hidden" name = "transid" id = "transid" value="<?php  echo $row['id_transaksi'];  ?>" >													
													<input type = "hidden" name = "lokasi" id = "lokasi" value="<?php echo $row['lokasi']; ?>	" >	
													
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
                   <script>
<script>
function goBack() {
    window.history.back();
}
</script>				  
				  </script>
				  
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row --> </div>
        <!-- /#page-wrapper -->

    </div>
            </div>
          </div>
		  </br>
          
        </div>
       <?php
switch ($how){
	case 'true':
	echo  '<script type="text/javascript" language="javascript"> 
	swal("Sistem Diaktifkan", "Pengaktifan esca Berjaya", "success");</script>';
	break;
	case 'f':
	echo  '<script type="text/javascript" language="javascript"> swal("Gagal!", "Pengaktifan Gagal", "error");
	</script>';
	break;
default:


} ?>
    </main>
    <script>
		$("#doneby").keyup(function(e){     
		    var str = $.trim( $(this).val() );
		    if( str != "" ) {
		      var regx = /^[A-Za-z]+$/;
		      if (!regx.test(str)) {
		        $("#infoUser").html("Alpha only allowed !");
		      }
		      else{
		        $("#infoUser").html("");
		      }
		    }
		    else {
		       //empty value -- do something here
		       $("#infoUser").html("");
		    }
		});


    </script>
    <script src="/esca/docs/js/jquery.min.js"></script>
    <script src="/esca/docs/js/bootstrap.min.js"></script>
    <script src="/esca/docs/js/highlight.js"></script>
    <script src="/esca/dist/js/bootstrap-switch.js"></script>
    <script src="/esca/docs/js/main.js"></script>
    <script type="text/javascript" src="/esca/dist/ckeditor/ckeditor.js"></script>
  </body>
</html>