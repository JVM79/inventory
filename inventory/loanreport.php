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
					 Reports
					</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Reports</li>
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
								<div class="pull-right">
									<a href="loanreport.php?tipo=<?php echo $_GET['tipo']; ?>" class="btn btn-primary">Ever</a>
									<a href="loanreport.php?tipo=<?php echo $_GET['tipo']; ?>&days=365" class="btn btn-primary">Last year</a>
									<a href="loanreport.php?tipo=<?php echo $_GET['tipo']; ?>&days=90" class="btn btn-primary">Last 3 months</a>
									<a href="loanreport.php?tipo=<?php echo $_GET['tipo']; ?>&days=30" class="btn btn-primary">Last month</a>
									<a href="loanreport.php?tipo=<?php echo $_GET['tipo']; ?>&days=7" class="btn btn-primary">Last week</a>
								</div>
                                <h4 class="card-title">Changes report </h4>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="table display table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Type</th>
                                                <th>Name</th>
                                                <th>User</th>
                                                <th>From</th>
                                                <th>To</th>
                                                <th>Delivered</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Type</th>
                                                <th>Name</th>
                                                <th>User</th>
                                                <th>From</th>
                                                <th>To</th>
                                                <th>Delivered</th>
                                            </tr>
                                        </tfoot>
                                        <tbody style="color:#222">
                                            <?php
											if($_GET['days']>0) $days=date('Y-m-d',strtotime("-".$_GET['days']." days"));
											else $days="2018-01-01";
											$type="AND name<>?";
											if(isset($_GET['tipo'])){
												$table=$db->prepare("SELECT * FROM loans WHERE datain>=? AND viagem=? ORDER BY datain ASC");
												$table->execute(array($days,$_GET['tipo']));
											}else{
												$table=$db->prepare("SELECT * FROM loans WHERE datain>=? ORDER BY datain ASC");
												$table->execute(array($days));
											}
											while($row=$table->fetch(PDO::FETCH_ASSOC)){
											?>
											<tr>
                                                <td>
													<?php if($row['viagem']=="1") echo '<h4><i class="fa fa-plane"></i></h4>'; ?>
												</td>
                                                <td>
													<?php echo $row['name']; ?>												
												</td>
                                                <td>
													<?php echo $row['user']; ?>	
												</td>
                                                <td>
													<?php echo $row['datain']; ?>
												</td>
                                                <td>
													<?php echo $row['dataprevout']; ?>
												</td>
                                                <td><?php if($row['dataout']!="0000-00-00") echo $row['dataout'];
														else echo "Not yet returned"; ?></td>
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