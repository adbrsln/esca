<?php
session_Start();

// Check, if user is already login, then jump to secured page
if (isset($_SESSION['username'])) {
switch ($_SESSION['level']) {
				case 4:
					header('Location: /esca/user'); // admin Level;
					break;
				case 3:
					header('Location: /esca/mrd');
					break;
			   
				default:
					header('Location: /esca/contr');
			}
}

$ch = $_GET['s'];
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

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
<!-- This is what you need -->
  <script src="/esca/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="/esca/dist/sweetalert.css">
  <!--.......................-->
    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<header role="banner" class="navbar navbar-static-top bs-docs-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target="#collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="../" class="navbar-brand">eSystem Continuity Action</a>
        </div>
       
	   
      </div>
    </header>
<body>
</br>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sila Daftar Masuk</h3>
                    </div>
                    <div class="panel-body">
                        
                            
							<form action="loginproc.php" method="post" name = "login">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Nama Pengguna" name="user" type="username" autofocus required
                data-fv-notempty-message="The username is required">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Katalaluan" name="pass" type="password" value="" required
                data-fv-notempty-message="The password is required" >
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" name = "submit" class="btn btn-lg btn-success btn-block">Log Masuk</button>
                            
							</form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
<?php
switch ($ch){
	case 'false':
	echo  '<script type="text/javascript" language="javascript"> swal("Gagal!", "Username dan Password anda salah. Sila cuba lagi", "error");
	</script>';
	break;
		
	case 'e':
	echo  '<script type="text/javascript" language="javascript"> swal("Gagal!", "Username telah digunakan! Sila gunakan Username lain", "error");
</script>';
	break;
default:

}

?>
</body>

</html>
