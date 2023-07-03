<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php
require "nucleo1.php";
if(isset($_POST['create']) && $_POST['name']!=""){
	$query=$db->prepare("INSERT INTO ".$_POST['type']." (name, serialno, sapCode) VALUES (?, ?, ?)");
	$ins=$query->execute(array($_POST['name'],$_POST['serialno'],$_POST['sapcode']));
	if($ins) $_DBRESULT='<div class="alert alert-info">Equipment added successfully!</div>';
	else $_DBRESULT='<div class="alert alert-danger">An error has occurred! Please Try again.</div>';
}
if(isset($_POST['goloan']) && $_POST['nameloan']!=""){
	$query=$db->prepare("UPDATE computers SET loan=? WHERE name=?");
	$ins=$query->execute(array(1,$_POST['nameloan']));
	if($ins) $_DBRESULT='<div class="alert alert-info">Computer added to loan list!</div>';
	else $_DBRESULT='<div class="alert alert-danger">An error has occurred! Please Try again.</div>';
}
if(isset($_POST['goabate']) && $_POST['nameabate']!=""){
	if($_POST['tipoabate']=="MONITOR"){
		$query=$db->prepare("INSERT INTO abate (nome, serial, tipo) (SELECT name, serialno, 'MONITOR' as a FROM monitors WHERE name=?)");
		$ins=$query->execute(array($_POST['nameabate']));
		$query2=$db->prepare("DELETE FROM monitors WHERE name=?");
		$ins2=$query2->execute(array($_POST['nameabate']));
		if($ins) $_DBRESULT='<div class="alert alert-info">Equipment added to write-off list!</div>';
		else $_DBRESULT='<div class="alert alert-danger">An error has occurred! Please Try again.</div>';
		$history=$db->prepare("INSERT INTO history (name, userfrom, ccfrom, locfrom, userto, ccto, locto, datahora) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
		$history->execute(array($_POST['nameabate'],"STOCK","STOCK","STOCK","WRITEOFF","WRITEOFF","WRITEOFF",date('Y-m-d H:i:s')));
	}elseif($_POST['tipoabate']=="COMPUTER"){
		$query=$db->prepare("INSERT INTO abate (nome, serial, tipo) (SELECT name, serialno, 'COMPUTER' as a FROM computers WHERE name=?)");
		$ins=$query->execute(array($_POST['nameabate']));
		$query2=$db->prepare("DELETE FROM computers WHERE name=?");
		$ins2=$query2->execute(array($_POST['nameabate']));
		if($ins) $_DBRESULT='<div class="alert alert-info">Equipment added to write-off list!</div>';
		else $_DBRESULT='<div class="alert alert-danger">An error has occurred! Please Try again.</div>';
		$history=$db->prepare("INSERT INTO history (name, userfrom, ccfrom, locfrom, userto, ccto, locto, datahora) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
		$history->execute(array($_POST['nameabate'],"STOCK","STOCK","STOCK","WRITEOFF","WRITEOFF","WRITEOFF",date('Y-m-d H:i:s')));
	}
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
                    <h3 class="text-primary">Equipment</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Stock Equipment</li>
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
								<?php echo $_DBRESULT; ?>
								<div class="pull-right">
									<a href="javascript:void(0)" onclick="$('#tabelastock').hide();$('#addequipment').fadeIn('slow');" class="btn btn-primary"><i class="fa fa-plus"></i> Add Computer/Monitor</a>
								</div>
                                <h4 class="card-title">Stock Equipment </h4>
                                <h6 class="card-subtitle">Grouping by Type</h6>
								<div id="addequipment" style="display:none">
									<form method="POST" name="formedit">
										<div class="form-group">
											<div class="row">
												<label class="col-sm-3 control-label text-right"><i class="fa fa-dot-circle-o"></i>&nbsp; type</label>
												<select class="col-sm-9 form-control" name="type">
													<option value="computers">COMPUTER</option>
													<option value="monitors">MONITOR</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<label class="col-sm-3 control-label text-right"><i class="fa fa-laptop"></i>&nbsp; name</label>
												<input class="col-sm-9 form-control" type="text" name="name" placeholder="" />
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<label class="col-sm-3 control-label text-right"><i class="fa fa-barcode"></i>&nbsp; serial no.</label>
												<input class="col-sm-9 form-control" type="text" name="serialno" placeholder="" />
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<label class="col-sm-3 control-label text-right"><i class="fa fa-qrcode"></i>&nbsp; sap code</label>
												<input class="col-sm-9 form-control" type="text" name="sapcode" placeholder="" />
											</div>
										</div>
										<button type="submit" name="create" class="btn btn-info btn-block"><i class="fa fa-check"></i> Create</button>
									</form>
								</div>
                                <div class="table-responsive m-t-40" id="tabelastock">
                                    <table id="example" class="table display table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Loc.</th>
                                                <th>Name</th>
                                                <th>Serial No.</th>
                                                <th>SAP Code</th>
                                                <th>Type</th>
                                                <th>Type2</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Loc.</th>
                                                <th>Name</th>
                                                <th>Serial No.</th>
                                                <th>SAP Code</th>
                                                <th>Type</th>
                                                <th>Type2</th>
                                            </tr>
                                        </tfoot>
                                        <tbody style="color:#222">
                                            <?php
											if(isset($_GET['id'])){
												$table=$db->prepare("SELECT name, serialno, sapCode, 'COMPUTER' as type FROM computers WHERE name NOT IN (SELECT name FROM alocs) AND loan=? AND (name LIKE ? OR serialno LIKE ?) UNION SELECT *, 'MONITOR' as type FROM monitors WHERE name NOT IN (SELECT name FROM alocs) AND (name LIKE ? OR serialno LIKE ?)");
												$table->execute(array(0,"%".$_GET['id']."%","%".$_GET['id']."%","%".$_GET['id']."%","%".$_GET['id']."%"));
											}else{
												$table=$db->prepare("SELECT name, serialno, sapCode, 'COMPUTER' as type FROM computers WHERE name NOT IN (SELECT name FROM alocs) AND loan=? UNION SELECT *, 'MONITOR' as type FROM monitors WHERE name NOT IN (SELECT name FROM alocs)");
												$table->execute(array(0));
											}
											while($row=$table->fetch(PDO::FETCH_ASSOC)){
											?>
											<tr>
                                                <td>
													STOCK
												</td>
                                                <td>
												<?php echo $row['name']; ?>
                                                <?php
													if (strpos($row['name'], 'LPT') !== false){ ?>
													<form method="POST" style="float:right">
													<input type="hidden" name="nameloan" value="<?php echo $row['name']; ?>" />
													<button type="submit" name="goloan" title="Move to Loan" class="btn btn-danger btn-sm"><i class="fa fa-briefcase"></i> Loan Laptop</button>
													</form>
													<?php } ?>
                                                    <form method="POST" style="float:right">
													<input type="hidden" name="nameabate" value="<?php echo $row['name']; ?>" />
													<input type="hidden" name="tipoabate" value="<?php echo $row['type']; ?>" />
													<button type="submit" name="goabate" title="Write-Off" class="btn btn-warning btn-sm"><i class="fa fa-trash"></i></button>
													</form>
												</td>
                                                <td>
												<?php echo $row['serialno']; ?>
												</td>
                                                <td>
												<?php echo $row['sapCode']; ?>
												</td>
                                                <td><?php echo $row['type']; ?></td>
                                                <td><?php echo $row['type']; ?>S</td>
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