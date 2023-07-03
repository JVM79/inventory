<?php
require "nucleo1.php";
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
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
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
<style>
tbody tr td {
    color: #555 !important;
	font-size:90%;
}
</style>
<?php require "header.php"; ?>
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">
					 <?php
					$data=date("Hm");
					if($data<1300 && $data>=500) $cumprimento="Good Morning";
					if($data<1730 && $data>=1300) $cumprimento="Good Afternoon";
					if($data<2000 && $data>=1730) $cumprimento="Good Evening";
					if($data<500 || $data>=2000) $cumprimento="Good Night";
					echo $cumprimento.", ".$_SERVER['PHP_AUTH_USER']."!";
					?>
					</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">All Locations</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">All Locations </h4>
                                <h6 class="card-subtitle">Locations grouping by Floor</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="example" class="table display table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Loc.</th>
                                                <th>Name</th>
                                                <th>Computer</th>
                                                <th>Monitor</th>
                                                <th>Group</th>
                                                <th>Floor</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Loc.</th>
                                                <th>Name</th>
                                                <th>Computer</th>
                                                <th>Monitor</th>
                                                <th>Group</th>
                                                <th>Floor</th>
                                            </tr>
                                        </tfoot>
                                        <tbody style="color:#222">
                                            <?php
											$table=$db->prepare("SELECT * FROM locations");
											$table->execute();
											while($row=$table->fetch(PDO::FETCH_ASSOC)){
											?>
											<tr>
                                                <td>
													<?php echo $row['location']; ?>
													<a href="location.php?loc=<?php echo $row['location']; ?>" class="btn btn-primary" style="float:right"><i class="fa fa-external-link"></i></a>
												</td>
                                                <td>
												<?php 
												if($row['user']!="") echo $row['user'];
												else echo '<span class="badge badge-success">FREE</span>'; ?>
												</td>
                                                <td>
												<?php
												$a=0;
												$computer=$db->prepare("SELECT name FROM alocs WHERE location=? AND type=?");
												$computer->execute(array($row['location'],"COMPUTER"));
												while($comp=$computer->fetchColumn()){
													$a++;
													if($a==1) echo $comp;
													else echo "<br />".$comp;
												} ?>
												</td>
                                                <td>
												<?php
												$b=0;
												$monitor=$db->prepare("SELECT name FROM alocs WHERE location=? AND type=?");
												$monitor->execute(array($row['location'],"MONITOR"));
												while($moni=$monitor->fetchColumn()){
													$b++;
													if($b==1) echo $moni;
													else echo "<br />".$moni;
												} ?>
												</td>
                                                <td><?php echo $row['groupname']; ?></td>
                                                <td>FLOOR: <?php echo $row['floor']; ?></td>
                                            </tr>
											<?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2023 All rights reserved. Created by <a href="#">IT Department</a></footer>
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


    <script src="js/lib/datatables/datatables.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="js/lib/datatables/datatables-init.js"></script>
</body>

</html>
<?php
require "nucleo2.php";
?>