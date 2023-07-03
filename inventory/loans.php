<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

require "nucleo1.php";
function datatobd($data)
{
	$d=explode("-",$data);
	$dat=$d[2]."-".$d[1]."-".$d[0];
	return $dat;
}
if(isset($_POST['goback']) && $_POST['idgoback']>0){
	$query=$db->prepare("UPDATE loans SET dataout=? WHERE id=?");
	$ins=$query->execute(array(date('Y-m-d H:i:s'),$_POST['idgoback']));
	if($ins) $_DBRESULT='<div class="alert alert-info">Loan successfully completed!</div>';
	else $_DBRESULT='<div class="alert alert-danger">An error has occurred! Please Try again.</div>';
}
if(isset($_POST['create']) && $_POST['name']!="" && $_POST['verifchange']=="0"){
	$query=$db->prepare("INSERT INTO loans (name, datain, dataprevout, user, viagem) VALUES (?, ?, ?, ?, ?)");
	$ins=$query->execute(array($_POST['name'],datatobd($_POST['startdate']),datatobd($_POST['enddate']),$_POST['user'],$_POST['trip']));
	if($ins) $_DBRESULT='<div class="alert alert-info">Loan added successfully!</div>';
	else $_DBRESULT='<div class="alert alert-danger">An error has occurred! Please Try again.</div>';

	// Multiple recipients
	$to = $_POST['user'].'@gmail.com';
	$from = $_SERVER['PHP_AUTH_USER'].'@gmail.com';
	$cc = array("moitaman@gmail.com");
	// Subject
	$subject = 'Loan Laptop';
	// Message
	$message = '
	<html>
	<head>
	  <title>Loan Laptop</title>
	</head>
	<body style="font-family: Tahoma, sans-serif">
	  <p>Hello '.$_POST['user'].'!</p>
	  <p>The laptop <strong>'.$_POST['name'].'</strong> was loaned to you by the IT department.
	  <p>You have to return the laptop until <strong>'.$_POST['enddate'].'</strong>.</p>
	  <p>If you need to extend return date, please inform us replying to this email.</p>
	  <p>Thank you.</p>
	  <p><i>Best regards.<br />Your IT Department</i></p>
	</body>
	</html>
	';
	// Mail it
	$mail=enviaemail($to, $from, $message, $subject, $cc);
	if($mail) $_DBRESULT.='<div class="alert alert-info">Email was sent!</div>';
	else $_DBRESULT.='<div class="alert alert-danger">An error has occurred with email!</div>';
}
if(isset($_POST['create']) && $_POST['verifchange']>0){
	$query=$db->prepare("UPDATE loans SET dataprevout=? WHERE id=?");
	$ins=$query->execute(array(datatobd($_POST['enddate']),$_POST['verifchange']));
	if($ins) $_DBRESULT='<div class="alert alert-info">Loan changed successfully!</div>';
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
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Asset Inventory Tool</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
	<link href="css/lib/datepicker/bootstrap-datepicker3.min.css" rel="stylesheet">
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
                        <li class="breadcrumb-item active">Loans</li>
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
									<a href="javascript:void(0)" onclick="$('#tabelastock').hide();$('#addequipment').fadeIn('slow');$('.changeit').val('');$('#f_trip').val('0');$('.changeit').removeAttr('disabled');$('#f_equipment2').hide();$('#f_equipment').show();$('#verifchange').val('0');" class="btn btn-primary"><i class="fa fa-plus"></i> New Loan</a>
								</div>
                                <h4 class="card-title">On Loan </h4>
								<h6 class="card-subtitle"> &nbsp; </h6>
								<div id="addequipment" style="display:none">
									<form method="POST" name="formedit">
										<div class="form-group" id="f_equipment">
											<div class="row">
												<label class="col-sm-3 control-label text-right"><i class="fa fa-laptop"></i>&nbsp; equipment</label>
												<select class="col-sm-9 form-control" name="name">
													<option></option>
													<?php 
													$table=$db->prepare("SELECT name FROM computers WHERE loan=? AND name NOT IN (SELECT name FROM loans WHERE dataout=?)");
													$table->execute(array(1,"0000-00-00"));
													while($row=$table->fetchColumn()){
													?><option value="<?php echo $row; ?>"><?php echo $row; ?></option><?php
													}
													?>
												</select>
											</div>
										</div>
										<div class="form-group" id="f_equipment2" style="display:none">
											<div class="row">
												<label class="col-sm-3 control-label text-right"><i class="fa fa-laptop"></i>&nbsp; equipment</label>
												<input class="col-sm-9 form-control changeit" type="text" id="f_name" name="equipment" placeholder="" />
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<label class="col-sm-3 control-label text-right"><i class="fa fa-user"></i>&nbsp; user</label>
												<input class="col-sm-9 form-control changeit" type="text" id="f_user" name="user" placeholder="" />
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<label class="col-sm-3 control-label text-right"><i class="fa fa-calendar"></i>&nbsp; start date</label>
												<input class="col-sm-9 form-control datepick changeit" type="text" autocomplete="off" id="f_startdate" name="startdate" placeholder="" />
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<label class="col-sm-3 control-label text-right"><i class="fa fa-calendar"></i>&nbsp; end date</label>
												<input class="col-sm-9 form-control datepick" type="text" autocomplete="off" name="enddate" placeholder="" />
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<label class="col-sm-3 control-label text-right"><i class="fa fa-plane"></i>&nbsp; business trip</label>
												<select class="col-sm-9 form-control changeit" name="trip" id="f_trip">
													<option selected value="0">NO</option>
													<option value="1">YES</option>
												</select>
											</div>
										</div>
										<input type="hidden" name="verifchange" id="verifchange" value="0" />
										<button type="submit" name="create" class="btn btn-info btn-block"><i class="fa fa-check"></i> Create</button>
									</form>
								</div>
                                <div class="table-responsive m-t-40" id="tabelastock">
                                    <table id="example" class="table display table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>User</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th>Type</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>User</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th>Type</th>
                                            </tr>
                                        </tfoot>
                                        <tbody style="color:#222">
                                            <?php
											if(isset($_GET['id'])){
												$table=$db->prepare("SELECT * FROM loans WHERE dataout=? AND name IN (SELECT name FROM computers WHERE name=? OR serialno=?) ORDER BY dataprevout ASC");
												$table->execute(array("0000-00-00",$_GET['id'],$_GET['id']));
											}else{
												$table=$db->prepare("SELECT * FROM loans WHERE dataout=? ORDER BY dataprevout ASC");
												$table->execute(array("0000-00-00"));
											}
											while($row=$table->fetch(PDO::FETCH_ASSOC)){
												if($row['dataprevout']<date('Y-m-d')) $color="background-color:#F5A9A9";
												else $color="";
											?>
											<tr style="<?php echo $color; ?>">
                                                <td class="text-center">
													<?php if($row['viagem']=="1") echo '<h4><i class="fa fa-plane"></i></h4>'; ?>
												</td>
                                                <td>
												<?php echo $row['name']; ?>
												</td>
                                                <td>
												<?php echo $row['user']; ?>
												<form method="POST" style="float:right">
												<input type="hidden" name="idgoback" value="<?php echo $row['id']; ?>" />
												<button type="submit" title="Return Laptop" name="goback" class="btn btn-danger"><i class="fa fa-level-down"></i></button>
												</form>
												</td>
                                                <td>
												<?php echo datatobd($row['datain']); ?>
												</td>
                                                <td>
													<?php echo datatobd($row['dataprevout']); ?>
													<a href="javascript:void(0)" title="Extend Loan" onclick="$('#tabelastock').hide();$('#addequipment').fadeIn('slow');$('#f_equipment2').show();$('#f_equipment').hide();$('#f_name').val('<?php echo $row['name']; ?>');$('#f_user').val('<?php echo $row['user']; ?>');$('#f_startdate').val('<?php echo datatobd($row['datain']); ?>');$('#f_trip').val('<?php echo $row['viagem']; ?>');$('#verifchange').val('<?php echo $row['id']; ?>');$('.changeit').attr('disabled','disabled');" class="btn btn-primary"><i class="fa fa-calendar-plus-o"></i></a>
												</td>
                                                <td>1 - ON LOAN</td>
                                            </tr>
											<?php }
											if(isset($_GET['id'])){
												$table=$db->prepare("SELECT name FROM computers WHERE loan=? AND name NOT IN (SELECT name FROM loans WHERE dataout=?) AND (name=? OR serialno=?)");
												$table->execute(array(1,"0000-00-00",$_GET['id'],$_GET['id']));
											}else{
												$table=$db->prepare("SELECT name FROM computers WHERE loan=? AND name NOT IN (SELECT name FROM loans WHERE dataout=?)");
												$table->execute(array(1,"0000-00-00"));
											}
											while($row=$table->fetch(PDO::FETCH_ASSOC)){
											?>
											<tr style="background-color:#A9F5A9">
                                                <td class="text-center">
													<h4><i class="fa fa-unlock"></i></h4>
												</td>
                                                <td>
												<?php echo $row['name']; ?>
												</td>
                                                <td>
												FREE
												</td>
												<td></td>
												<td></td>
                                                <td>2 - FREE</td>
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

	<script src="js/lib/datepicker/bootstrap-datepicker.min.js"></script>
    <script src="js/lib/datatables/datatables.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="js/lib/datatables/datatables-init.js"></script>
	<script>
	
	  $(function() {
		$( ".datepick" ).datepicker({ format: 'dd-mm-yyyy' });
	  } );
	</script>
</body>

</html>
<?php
require "nucleo2.php";
?>