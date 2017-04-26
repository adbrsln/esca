<?php  
//require "check.php";
?>
<?php


$connect = mysql_connect("localhost", "root", "user123") or die (mysql_error());
 mysql_select_db("esca", $connect);  
$sql = "SELECT * FROM daftar";
$result = mysql_query($sql, $connect);	

$sql2 = "SELECT * FROM transaksi where status = 'Active'";
$result2 = mysql_query($sql2, $connect);	

$how = $_GET['s'];
$c = $_GET['c'];
?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="adbroslan" content="">
    <title>System Continuity Action</title>
    <link href="/esca/docs/css/bootstrap.min.css" rel="stylesheet">
    <link href="/esca/docs/css/highlight.css" rel="stylesheet">
     <link href="/esca/chosen/js/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <link href="/esca/dist/css/docs.min.css" rel="stylesheet">
    <link href="/esca/docs/css/main.css" rel="stylesheet">
    
	
	 <!-- This is what you need -->
  <script src="/esca/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="/esca/dist/sweetalert.css">
    
 <link rel="stylesheet" href="/esca/js/chosen/chosen.css">
    
  </head>
  
  <body>
  <header role="banner" class="navbar navbar-static-top bs-docs-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target="#collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="/esca" class="navbar-brand">eSystem Continuity Action</a>
        </div>
          
	   <nav  id="collapse" role="navigation" class="collapse navbar-collapse bs-navbar-collapse-menu-right">
          <ul class="nav navbar-nav navbar-left">
            <li><a href="#"><i class="fa fa-plus-square fa-fw"></i> Pendaftaran</a></li>
            <li><a href="semak.php"><i class="fa fa-tasks fa-fw"></i>Semakan</a></li>          
                     
          </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="/esca"><i class="fa fa-plus-square fa-fw"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></i> Keluar</a></li>
                  
                     
          </ul>
		  
        </nav>
      </div>
    </header>
    <main id="content" role="main">
  
	    <div class="container">
         </br>
		  
		  
		  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Maklumat Pesakit</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
           
            
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   
                        
                        <!-- .panel-heading -->
						 
						<?php  $notif ?>
						<form name = "form1" id="form1" action="pendaftaran.php" method="post" onSubmit="check()">
                       
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" >Pendaftaran Pesakit</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
											<div class = "row">

											<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">		
                                            <div class="bs-callout bs-callout-danger" id="callout-glyphicons-accessibility">
                                                    <h4>Existing Patients</h4>
                                                    <p>Semua ruangan di bahagian bawah ini perlu di isi jika pesakit adalah pesakit yang sedia ada</p>
                                                      </div>									
												<div class="form-group">
												
													<label>Nama Pesakit</label> (Jika Pesakit Unknown , sila Letakkan Unknown1 - Unknown99+)
													
													<input required name = "namapesakit" class="form-control" placeholder="" style="text-transform:uppercase" >
													</br>
													<label>NRIC / No. Passport</label> (Contoh : 941109445864 Atau M941109085621)
													<?php 
												     while($row = mysql_fetch_array($result2)){
												    	?>
													<input type ="hidden" name = "idtrans2" value = "<?php echo $row['id_transaksi'];?>" >
													<?php } ?>
													<input name = "nomic" class="form-control" placeholder="891109084444" maxlength="14" required>
													</br>
													
                                                  
                                                    
                                                    <label>Lokasi</label> (Wajib Di Isi)
                                                    
                                                    <?php require "lokasi1.php";?>
                                                   
                                                  
                                                     </br>

                                                      <label>ID Pesakit</label> (Jika Tiada, Biarkan Kosong)
                                                    <input name = "idpesakit" class="form-control" placeholder="" maxlength="10" style="text-transform:uppercase" >
                                                   
                                                   </br>
                                                    
													</div> 
											</div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                 <div class="bs-callout bs-callout-info" id="callout-glyphicons-accessibility">
                                                    <h4>New Patients</h4>
                                                    <p>Semua ruangan di laman ini perlu di isi jika pesakit adalah pesakit baharu&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                                      </div>    
                                                <div class="form-group">
                                                  <label>Warganegara</label>
                                                    <select class="form-control" name="warga" id="warga" required>
                                                        <option value = "Warganegara">Warganegara</option>
                                                        <option value = "Bukan Warganegara">Bukan Warganegara</option>
                                                    </select>
                                                    </br>
                                                    <label>Negara</label> (Jika Warganegara , Biarkan kosong)
                                                    <select name = "national"  class="form-control"  >
                                                        <option value=""></option>
                                                        <?php require "country.php";?>
                                                    </select>
                                                    </br>
                                                    <label>No. Resit</label> (Jika Tiada, Biarkan Kosong)
                                                    <input name = "noresit" class="form-control" placeholder="" maxlength="20" style="text-transform:uppercase" >
                                                    </br>
                                                      <div class = "row">
                                                    &nbsp;&nbsp;&nbsp;<label>D.O.B</label></br>
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                                            <?php require "dob1.php";?>
                                                        </div>

                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                        <select class="form-control" name="dob2"  >
                                                            <option value = ""></option>
                                                            <option value = "Januari">Januari</option>
                                                            <option value = "Februari">Februari</option>
                                                            <option value = "Mac">Mac</option>
                                                            <option value = "April">April</option>
                                                            <option value = "Mei">Mei</option>
                                                            <option value = "Jun">Jun</option>
                                                            <option value = "Julai">Julai</option>
                                                            <option value = "Ogos">Ogos</option>
                                                            <option value = "September">September</option>
                                                            <option value = "Oktober">Oktober</option>
                                                            <option value = "November">November</option>
                                                            <option value = "Disember">Disember</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                                            <?php require "dob2.php";?>
                                                        </div>

                                                    </div>
                                                    </br>
                                                    
                                                  
                                                    </div> 

                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                                                                                                                                                                        
                                                    <label>Lain - Lain Maklumat Pendaftaran Pesakit</label>
                                                    <textarea name = "lain" class="form-control ckeditor" placeholder="Alamat , no kad pengenalan, no resit, no telefon, biling group" rows="8"></textarea>
                                                    
                                                    
                                                    </div> 

                                                </div>
                                            </div>

										</div>
                                    </div>
                                </div>
								<div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion"  >Consultation Notes / Nursing Notes</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse in">
                                        
										<div class="panel-body">
										
                                            

											<textarea class="form-control ckeditor" name="nk1guest" rows="6" cols=500></textarea>
											
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="">Done By</a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse in">
                                        
										<div class="panel-body">
										<div class="col-lg-1">	
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
												<div class= "input-append">
												<label>Nama Pendaftar</label> (Sila masukkan Nama Penuh anda)
												<input  name ="donebyguest" id = "test" class="form-control" placeholder="Dr.Adib Ahmad Mahmod" required>
												</br>
												<label>Jawatan</label> (Beserta Lokasi Bertugas)
												<input  name ="jawatan" class="form-control" placeholder="Pakar bedah mata" required>
											<input type = "hidden" name = "masa" id = "masa" value="<?php echo date('Y-m-d H:i:s');?>" >
												</div>
											</div>
										</div>
						
                                    </div>
									
									<div class="panel-footer">				
									
									<button type="submit" name = "submitBtn" class="btn btn-primary" >Hantar</button>
									
                                        <button type="reset" class="btn btn-warning">Reset</button>
  					
									</div>
									
														
                            </div>
                        </div>
						</form>
                        <!-- .panel-body -->
							
                    
                    <!-- /.panel -->
                
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            

    </div>
      
    </main>

	<?php
switch ($how){
	
    case 'true':
    echo  "<script type='text/javascript' language='javascript'> swal('Rekod Berjaya Disimpan', 'ID Kes Pesakit ialah : CS$c  . Sila simpan ID kes ini untuk kegunaan masa hadapan', 'success');
    </script>";
    break;
	case 'false':
	echo  '<script type="text/javascript" language="javascript"> swal("Rekod Gagal Disimpan", "Pendaftaran Gagal", "error");
	</script>';
	break;
	case 'e':
	echo  '<script type="text/javascript" language="javascript"> swal("Rekod Gagal Disimpan", "ID Pesakit Atau No. Kad Pengenalan telah digunakan! Sila Semak di menu semakan.", "error");
</script>';
	break;
default:
}

?>
<script type="text/javascript">
$(document).ready(function() {
     $('#test').keypress(function(key) {
    if((key.charCode < 97 || key.charCode > 122) && (key.charCode < 65 || key.charCode > 90) && (key.charCode != 45)) return false;
    });

 });
    
 </script>

<script src="/esca/js/chosen/chosen.jquery.js" type="text/javascript"></script>
   
        <script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"50%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script>
 
	
    <script src="/esca/docs/js/jquery.min.js"></script>

    <script src="/esca/docs/js/bootstrap.min.js"></script>
    <script src="/esca/docs/js/highlight.js"></script>
 
    <script src="/esca/docs/js/main.js"></script>
    <script type="text/javascript" src="/esca/dist/ckeditor/ckeditor.js"></script>

  </body>
</html>