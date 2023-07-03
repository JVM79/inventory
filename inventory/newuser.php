<?php
require "nucleo1.php";
if(isset($_POST['newuser']) && $_POST['username']!=""){
	$cid="0_".date('YmdHis');
	$destino =  "users/".$cid.".jpg"; 
	require('pass.php');
	if(move_uploaded_file($_FILES['photo']['tmp_name'], $destino)) 
	{
		require( 'canvas.php' );
		$foto=$destino;
		$img = new canvas();
		$img->carrega( $foto )->hexa( '#fff' )->redimensiona( 400, 400, 'crop' )->grava( $foto );
	}
	else $foto="images/bookingSystem/4.png";
	$dn=explode("/",$_POST['datanasc']);
	$datanasc=$dn[2]."-".$dn[1]."-".$dn[0];
	$query=$db->prepare("INSERT INTO users (username, password, name, email, permission, foto, datanasc) VALUES (?, ?, ?, ?, ?, ?, ?)");
	$info=$query->execute(array($_POST['username'],password($_POST['password']),$_POST['name'],$_POST['email'],1,$foto,$datanasc));
	if($info) $_DBRESULT='<div class="alert alert-info">User added successfully!</div>';
	else $_DBRESULT='<div class="alert alert-danger">An error has occurred! Please Try again.</div>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon2.png">
    <title>Asset Inventory Tool</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<?php require "header.php"; ?>
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Users</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">New User</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- /# row -->
                <div class="row">
                    <div class="col-lg-12">
					<?php echo $_DBRESULT; ?>
                        <div class="card">
                            <div class="card-title">
                                <h4>Create a new user</h4>

                            </div>
                            <div class="card-body">
                                <div class="basic-elements">
                                    <form method="POST" enctype='multipart/form-data'>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="text-primary"><i class="fa fa-user"></i>&nbsp; Name</label>
                                                    <input type="text" class="form-control" name="name" required placeholder="Name">
                                                </div>
                                                <div class="form-group">
                                                    <label class="text-primary"><i class="fa fa-at"></i>&nbsp; Username</label>
                                                    <input type="text" class="form-control" name="username" required placeholder="Please insert an unique Username">
                                                </div>
                                                <div class="form-group">
                                                    <label class="text-primary"><i class="fa fa-envelope"></i>&nbsp; Email</label>
                                                    <input type="email" class="form-control" name="email" required placeholder="Please insert an email address">
                                                </div>
                                                <div class="form-group">
                                                    <label class="text-primary"><i class="fa fa-key"></i>&nbsp; Password</label>
                                                    <input type="password" class="form-control" name="password" required placeholder="Please insert a password">
                                                </div>
                                                <div class="form-group">
                                                    <label class="text-primary"><i class="fa fa-birthday-cake"></i>&nbsp; Birth Date</label>
                                                    <input type="date" class="form-control" name="datanasc" placeholder="dd/mm/yyyy">
                                                </div>
												<div class="form-group">
                                                    <label class="text-primary"><i class="fa fa-camera"></i>&nbsp; Photo</label>
                                                    <input type="file" class="form-control" name="photo">
                                                </div>
												<hr />
												<button type="submit" name="newuser" class="btn btn-info btn-block"><i class="fa fa-check"></i> Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# row -->

                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2023 All rights reserved. Template designed by <a href="https://colorlib.com">Colorlib</a></footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>

</body>

</html>
<?php
require "nucleo2.php";
?>