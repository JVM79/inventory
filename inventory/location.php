<?php
require "nucleo1.php";
$_location="";
if($_POST['ndktloc']!="" && $_POST['newcomputer']!="0"){
	$query=$db->prepare("INSERT INTO alocs (location, type, name) VALUES (?, ?, ?)");
	$query->execute(array($_POST['ndktloc'],"COMPUTER",$_POST['newdesktop']));
	if($query) $_DBRESULT='<div class="alert alert-info">Computer added successfully!</div>';
	else $_DBRESULT='<div class="alert alert-danger">An error has occurred! Please Try again.</div>';
	$_location=$_POST['ndktloc'];
	$history=$db->prepare("INSERT INTO history (name, userfrom, ccfrom, locfrom, userto, ccto, locto, datahora) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
	$history->execute(array($_POST['newdesktop'],"STOCK","STOCK","STOCK",$_POST['user'],$_POST['ccno'],$_POST['ndktloc'],date('Y-m-d H:i:s')));
}
if($_POST['nmtrloc']!="" && $_POST['newmonitor']!="0"){
	$query=$db->prepare("INSERT INTO alocs (location, type, name) VALUES (?, ?, ?)");
	$query->execute(array($_POST['nmtrloc'],"MONITOR",$_POST['newmonitor']));
	if($query) $_DBRESULT='<div class="alert alert-info">Monitor added successfully!</div>';
	else $_DBRESULT='<div class="alert alert-danger">An error has occurred! Please Try again.</div>';
	$_location=$_POST['nmtrloc'];
	$history=$db->prepare("INSERT INTO history (name, userfrom, ccfrom, locfrom, userto, ccto, locto, datahora) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
	$history->execute(array($_POST['newmonitor'],"STOCK","STOCK","STOCK",$_POST['user'],$_POST['ccno'],$_POST['nmtrloc'],date('Y-m-d H:i:s')));
}
if($_POST['locstock']!="" && $_POST['namdktstock']!="0"){
	$query=$db->prepare("DELETE FROM alocs WHERE location=? AND type=? AND name=?");
	$query->execute(array($_POST['locstock'],"COMPUTER",$_POST['namdktstock']));
	if($query) $_DBRESULT='<div class="alert alert-info">Computer removed successfully!</div>';
	else $_DBRESULT='<div class="alert alert-danger">An error has occurred! Please Try again.</div>';
	$_location=$_POST['locstock'];
	$history=$db->prepare("INSERT INTO history (name, userfrom, ccfrom, locfrom, userto, ccto, locto, datahora) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
	$history->execute(array($_POST['namdktstock'],$_POST['user'],$_POST['ccno'],$_POST['locstock'],"STOCK","STOCK","STOCK",date('Y-m-d H:i:s')));
}
if($_POST['locstock']!="" && $_POST['nammonstock']!="0"){
	$query=$db->prepare("DELETE FROM alocs WHERE location=? AND type=? AND name=?");
	$query->execute(array($_POST['locstock'],"MONITOR",$_POST['nammonstock']));
	if($query) $_DBRESULT='<div class="alert alert-info">Monitor removed successfully!</div>';
	else $_DBRESULT='<div class="alert alert-danger">An error has occurred! Please Try again.</div>';
	$_location=$_POST['locstock'];
	$history=$db->prepare("INSERT INTO history (name, userfrom, ccfrom, locfrom, userto, ccto, locto, datahora) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
	$history->execute(array($_POST['nammonstock'],$_POST['user'],$_POST['ccno'],$_POST['locstock'],"STOCK","STOCK","STOCK",date('Y-m-d H:i:s')));
}
if($_POST['location']!="" && $_POST['newlocation']!="0" && isset($_POST['conflayout'])){
	if($_POST['newlocation']=="TEMP"){
		$aux=$_POST['newlocation'].date('is');
		$query=$db->prepare("INSERT INTO locations (location, floor, user, ccno, groupname) VALUES (?, ?, ?, ?, ?)");
		$query->execute(array($aux,"TEMP",$_POST['user'],$_POST['ccno'],$_POST['groupname']));
		$query=$db->prepare("UPDATE alocs SET location=? WHERE location=?");
		$query->execute(array($aux,$_POST['location']));
		$query=$db->prepare("UPDATE locations SET user=?, ccno=?, groupname=? WHERE location=? AND floor=?");
		$query->execute(array("","","",$_POST['location'],$_POST['floor']));
		$_location=$aux;
	}else{
		$locs=explode("#",$_POST['newlocation']);
		$query=$db->prepare("UPDATE locations SET user=?, ccno=?, groupname=? WHERE location=? AND floor=?");
		$query->execute(array($_POST['user'],$_POST['ccno'],$_POST['groupname'],$locs[1],$locs[0]));
		$query=$db->prepare("UPDATE alocs SET location=? WHERE location=?");
		$query->execute(array($locs[1],$_POST['location']));
		$query=$db->prepare("UPDATE locations SET user=?, ccno=?, groupname=? WHERE location=? AND floor=?");
		$query->execute(array("","","",$_POST['location'],$_POST['floor']));
		$_location=$locs[1];
		if (strpos($_POST['location'], 'TEMP') !== false){
			$query=$db->prepare("DELETE FROM locations WHERE location=? AND floor=?");
			$query->execute(array($_POST['location'],$_POST['floor']));
		}
	}
	if($query) $_DBRESULT='<div class="alert alert-info">Layout changed successfully!</div>';
	else $_DBRESULT='<div class="alert alert-danger">An error has occurred! Please Try again.</div>';
	$history=$db->prepare("INSERT INTO history (name, userfrom, ccfrom, locfrom, userto, ccto, locto, datahora) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
	$history->execute(array("LAYOUT",$_POST['user'],$_POST['ccno'],$_POST['location'],$_POST['user'],$_POST['ccno'],$_location,date('Y-m-d H:i:s')));
}
if(isset($_POST['editsubmit'])){
	$query=$db->prepare("UPDATE locations SET user=?, groupname=?, ccno=? WHERE location=?");
	$ins=$query->execute(array($_POST['user'],$_POST['groupname'],$_POST['ccno'],$_POST['location']));
	if($ins) $_DBRESULT='<div class="alert alert-info">Location updated successfully!</div>';
	else $_DBRESULT='<div class="alert alert-danger">An error has occurred! Please Try again.</div>';
	$_location=$_POST['location'];
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

<?php require "header.php"; ?>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Location Page</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Locations</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-lg-12">
						<div class="card">
							<?php 
							echo $_DBRESULT;
							if($_location!=""){
								$search=$db->prepare("SELECT * FROM locations WHERE location =?");
								$search->execute(array($_location));
								$result=$search->fetch(PDO::FETCH_ASSOC);
							}elseif($_GET['query']!=""){
								$que=str_replace(" ",".",$_GET['query']);
								$search=$db->prepare("SELECT * FROM locations WHERE location IN (SELECT location FROM alocs WHERE name=? OR location=? OR name IN (SELECT name FROM computers WHERE serialno=?) OR name in (SELECT name FROM monitors WHERE serialno=?)) OR user=?");
								$search->execute(array($que,$que,$que,$que,$que));
								$result=$search->fetch(PDO::FETCH_ASSOC);
								if($result['location']==""){
									$search=$db->prepare("SELECT * FROM computers WHERE (name=? OR serialno=?) AND loan=?");
									$search->execute(array($que,$que,"1"));
									$result=$search->fetch(PDO::FETCH_ASSOC);
									if($result['name']!=""){
										?>
										<script>window.location.href="loans.php?id=<?php echo $que; ?>";</script>
										<?php
									}
									else{
										$search1=$db->prepare("SELECT * FROM abate WHERE (nome=? OR serial=?)");
										$search1->execute(array($que,$que));
										$result1=$search1->fetch(PDO::FETCH_ASSOC);
										if($result1['nome']!=""){
											?>
											<script>window.location.href="writeoff.php?id=<?php echo $que; ?>";</script>
											<?php
										}else{
											?>
											<script>window.location.href="stock.php?id=<?php echo $que; ?>";</script>
											<?php
										}
									}
								}
							}elseif($_GET['loc']!=""){
								$search=$db->prepare("SELECT * FROM locations WHERE location=?");
								$search->execute(array($_GET['loc']));
								$result=$search->fetch(PDO::FETCH_ASSOC);
							} ?>
							<div class="row">
								<h1 class="col-sm-1 text-right"><small><i class="fa fa-map-marker"></i></small></h1>
								<h1 class="col-sm-11"><?php echo $result['location']; ?></h1>
							</div>
							<div class="row">
								<h4 class="col-sm-1 text-right"><small><i class="fa fa-cube"></i></small></h4>
								<h4 class="col-sm-11"><small>FLOOR:</small> <strong><?php echo $result['floor']; ?></strong></h4>
							</div>
							<hr />
							<div class="row">
								<div class="col-sm-8 infoonly">
									<div class="row">
										<label class="col-sm-5 control-label text-right"><i class="fa fa-user"></i>&nbsp; user</label>
										<h4 class="col-sm-7">&nbsp; <strong><?php echo $result['user']; ?></strong></h4>
									</div>
									<div class="row">
										<label class="col-sm-5 control-label text-right"><i class="fa fa-share-alt"></i>&nbsp; group</label>
										<p class="col-sm-7">&nbsp; <?php echo $result['groupname']; ?></p>
									</div>
									<div class="row">
										<label class="col-sm-5 control-label text-right"><i class="fa fa-barcode"></i>&nbsp; cost-center</label>
										<p class="col-sm-7">&nbsp; <?php echo $result['ccno']; ?></p>
									</div>
								</div>
								<div class="col-sm-8 infoedit" style="display:none;text-align:center">
									<form method="POST" name="formedit">
										<div class="form-group">
											<div class="row">
												<label class="col-sm-5 control-label text-right"><i class="fa fa-user"></i>&nbsp; user</label>
												<input class="col-sm-7 form-control" type="text" name="user" value="<?php echo $result['user']; ?>" />
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<label class="col-sm-5 control-label text-right"><i class="fa fa-share-alt"></i>&nbsp; group</label>
												<input class="col-sm-7 form-control" type="text" name="groupname" value="<?php echo $result['groupname']; ?>" />
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<label class="col-sm-5 control-label text-right"><i class="fa fa-barcode"></i>&nbsp; cost-center</label>
												<select class="col-sm-7 form-control" name="ccno">
													<?php $select=$db->prepare("SELECT * FROM costcenter");
													$select->execute();
													while($sel=$select->fetch(PDO::FETCH_ASSOC)){ ?>
													<option <?php if($result['ccno']==$sel['ccno']) echo "selected"; ?> value="<?php echo $sel['ccno']; ?>"><?php echo $sel['ccno']." - ".$sel['ccname']; ?></option>
													<?php } ?>
												</select>
											</div>
										</div>
										<input type="hidden" name="location" value="<?php echo $result['location']; ?>" />
										<button type="submit" name="editsubmit" class="btn btn-info"><i class="fa fa-check"></i> Submit</button>
									</form>
								</div>
								<div class="col-sm-4">
									<form method="POST" action="location.php">
										<a href="javascript:void(0)" onclick="$('#assets').hide();$('#cnglayout').fadeIn('slow');" class="btn btn-info"><i class="fa fa-external-link-square"></i> Layout</a>
										<a href="javascript:void(0)" onclick="$('.infoonly').hide();$('.infoedit').fadeIn('slow');" class="btn btn-default"><i class="fa fa-pencil"></i> Edit</a>
									</form>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12 text-center" style="display:none" id="cnglayout">
									<hr />
									<form method="POST" action="location.php">
									<div class="input-group input-group-flat">
										<input type="hidden" name="user" value="<?php echo $result['user']; ?>" />
										<input type="hidden" name="ccno" value="<?php echo $result['ccno']; ?>" />
										<input type="hidden" name="location" value="<?php echo $result['location']; ?>" />
										<input type="hidden" name="groupname" value="<?php echo $result['groupname']; ?>" />
										<input type="hidden" name="floor" value="<?php echo $result['floor']; ?>" />
										<span class="input-group-btn"><button class="btn btn-info" type="submit" name="conflayout" style="padding:6px 12px"><i class="fa fa-check"></i> Confirm</button></span>
										<select name="newlocation" class="form-control">
											<option value="0">Select location...</option>
											<option value="TEMP">TEMPORARY LOCATION</option>
											<?php
											$layoutfree=$db->prepare("SELECT location, floor FROM locations WHERE user=? AND location NOT IN (SELECT location FROM alocs) ORDER BY floor ASC, location ASC");
											$layoutfree->execute(array(""));
											while($free=$layoutfree->fetch(PDO::FETCH_ASSOC)){ ?>
											<option value="<?php echo $free['floor']; ?>#<?php echo $free['location']; ?>"><?php echo $free['floor']." - ".$free['location']; ?></option>
											<?php } ?>
										</select>
									</div>
									</form>
								</div>
							</div>
							<hr />
							<div id="assets">
							<?php $assets=$db->prepare("SELECT a.*, b.serialno as dktsn, c.serialno as mtrsn FROM alocs as a LEFT JOIN computers as b ON a.name=b.name LEFT JOIN monitors as c ON a.name=c.name WHERE a.location=? ORDER BY a.type ASC");
							$assets->execute(array($result['location']));
							while($asset=$assets->fetch(PDO::FETCH_ASSOC)){ 
								if($asset['type']=="COMPUTER"){ ?>
								<div class="row">
									<div class="col-sm-8">
										<div class="row">
											<label class="col-sm-5 control-label text-right"><i class="fa fa-laptop"></i>&nbsp; computer</label>
											<h4 class="col-sm-7">&nbsp; <?php echo $asset['name']; ?></h4>
										</div>
										<div class="row">
											<label class="col-sm-5 control-label text-right"><i class="fa fa-barcode"></i>&nbsp; serial no.</label>
											<p class="col-sm-7">&nbsp; <?php echo $asset['dktsn']; ?></p>
										</div>
										<div class="row">
											<div class="col-md-12 text-center">
											<?php
											$ps1='script2.ps1';
											print_r( $output = shell_exec('powershell -ExecutionPolicy ByPass -File "'.$ps1.'" -computerx "'.$asset['name'].'"') ); 
											
											$cpt=$db->prepare("SELECT * FROM computers WHERE name=?");
											$cpt->execute(array($asset['name']));
											$cp=$cpt->fetch(PDO::FETCH_ASSOC);
											
											echo "<br />".$cp['syncRAM']." | ".$cp['syncOS']." | ".$cp['syncPROCESSOR']."<br />Last Sync: ".$cp['syncDATE'];
											?></div>
										</div>
									</div>
									<div class="col-sm-4">
										<form method="POST" action="location.php">
											<input type="hidden" name="user" value="<?php echo $result['user']; ?>" />
											<input type="hidden" name="ccno" value="<?php echo $result['ccno']; ?>" />
											<input type="hidden" name="locstock" value="<?php echo $result['location']; ?>" />
											<input type="hidden" name="namdktstock" value="<?php echo $asset['name']; ?>" />
											<button type="submit" name="dktstock" class="btn btn-primary"><i class="fa fa-retweet"></i> Stock</button>
											<a href="#" class="btn btn-default"><i class="fa fa-pencil"></i> Edit</a>
										</form>
									</div>
								</div>
								<hr />
								<?php }elseif($asset['type']=="MONITOR"){ ?>
								<div class="row">
									<div class="col-sm-8">
										<div class="row">
											<label class="col-sm-5 control-label text-right"><i class="fa fa-desktop"></i>&nbsp; monitor</label>
											<h4 class="col-sm-7">&nbsp; <?php echo $asset['name']; ?></h4>
										</div>
										<div class="row">
											<label class="col-sm-5 control-label text-right"><i class="fa fa-barcode"></i>&nbsp; serial no.</label>
											<p class="col-sm-7">&nbsp; <?php echo $asset['mtrsn']; ?></p>
										</div>
									</div>
									<div class="col-sm-4">
										<form method="POST" action="location.php">
											<input type="hidden" name="user" value="<?php echo $result['user']; ?>" />
											<input type="hidden" name="ccno" value="<?php echo $result['ccno']; ?>" />
											<input type="hidden" name="locstock" value="<?php echo $result['location']; ?>" />
											<input type="hidden" name="nammonstock" value="<?php echo $asset['name']; ?>" />
											<button type="submit" name="mtrstock" class="btn btn-success"><i class="fa fa-retweet"></i> Stock</button>
											<a href="#" class="btn btn-default"><i class="fa fa-pencil"></i> Edit</a>
										</form>
									</div>
								</div>
								<hr />
							<?php }} ?>
							<div class="row">
								<div class="col-sm-12 text-center">
									<a href="javascript:void(0)" onclick="$('#adddkt').fadeIn('slow');" class="btn btn-primary"><i class="fa fa-plus"></i> Add Computer</a>
									<a href="javascript:void(0)" onclick="$('#addmtr').fadeIn('slow');" class="btn btn-success"><i class="fa fa-plus"></i> Add Monitor</a>
								</div>
							</div>
							</div>
							<div class="row">
								<div class="col-sm-12 text-center" style="display:none" id="adddkt">
									<hr />
									<form method="POST" action="location.php">
									<div class="input-group input-group-flat">
										<input type="hidden" name="user" value="<?php echo $result['user']; ?>" />
										<input type="hidden" name="ccno" value="<?php echo $result['ccno']; ?>" />
										<input type="hidden" name="ndktloc" value="<?php echo $result['location']; ?>" />
										<span class="input-group-btn"><button class="btn btn-primary" type="submit" style="padding:6px 12px"><i class="fa fa-check"></i> Confirm</button></span>
										<select name="newdesktop" class="form-control">
											<option value="0">Select computer...</option>
											<?php
											$compstock=$db->prepare("SELECT name FROM computers WHERE name NOT IN (SELECT name FROM alocs) ORDER BY name ASC");
											$compstock->execute();
											while($comp=$compstock->fetchColumn()){ ?>
											<option value="<?php echo $comp; ?>"><?php echo $comp; ?></option>
											<?php } ?>
										</select>
									</div>
									</form>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12 text-center" style="display:none" id="addmtr">
									<hr />
									<form method="POST" action="location.php">
									<div class="input-group input-group-flat">
										<input type="hidden" name="user" value="<?php echo $result['user']; ?>" />
										<input type="hidden" name="ccno" value="<?php echo $result['ccno']; ?>" />
										<input type="hidden" name="nmtrloc" value="<?php echo $result['location']; ?>" />
										<span class="input-group-btn"><button class="btn btn-success" type="submit" style="padding:6px 12px"><i class="fa fa-check"></i> Confirm</button></span>
										<select name="newmonitor" class="form-control">
											<option value="0">Select monitor...</option>
											<?php
											$monstock=$db->prepare("SELECT name FROM monitors WHERE name NOT IN (SELECT name FROM alocs) ORDER BY name ASC");
											$monstock->execute();
											while($mon=$monstock->fetchColumn()){ ?>
											<option value="<?php echo $mon; ?>"><?php echo $mon; ?></option>
											<?php } ?>
										</select>
									</div>
									</form>
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

</body>

</html>
<?php require "nucleo2.php"; ?>