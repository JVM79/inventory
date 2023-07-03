<?php
require "nucleo1.php";
?><!DOCTYPE html>
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
<script>
function abre(a){
	$("#footinfo").load("modal-location.php?id="+a);
}
</script>
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Reception & Office Facilities</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Maps</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- /# row -->
                <div class="row" style="margin-bottom:200px">
                    <div class="col-lg-12">
						<div style="position:fixed;margin:0;top:150px;right:15px;width:200px">
							<a href="javascript:void(0)" id="showlocations" onclick="$('#footinfo').load('locationsfree.php?floor=0&show=locations');" class="btn btn-primary btn" style="width:100%;margin:5px;"><i class="fa fa-map-marker"></i> &nbsp;Show Locations</a>
							<a href="javascript:void(0)" id="showusers" onclick="$('#footinfo').load('locationsfree.php?floor=0&show=users');" class="btn btn-primary btn" style="width:100%;margin:5px;"><i class="fa fa-users"></i> &nbsp;Show Users</a>
							<a href="javascript:void(0)" id="showcomputers" onclick="$('#footinfo').load('locationsfree.php?floor=0&show=computers');" class="btn btn-primary btn" style="width:100%;margin:5px;"><i class="fa fa-laptop"></i> &nbsp;Show Computers</a>
							<a href="javascript:void(0)" id="showmonitors" onclick="$('#footinfo').load('locationsfree.php?floor=0&show=monitors');" class="btn btn-primary btn" style="width:100%;margin:5px;"><i class="fa fa-desktop"></i> &nbsp;Show Monitors</a>
						</div>
						<table>
							<tr>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GAB16" onclick="abre('GAB16')" class="btn btn-success btn-sm" style="width:100%">GAB16</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="AH3" onclick="abre('AH3')" class="btn btn-success btn-sm" style="width:100%">AH3</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="AH2" onclick="abre('AH2')" class="btn btn-success btn-sm" style="width:100%">AH2</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="AH1" onclick="abre('AH1')" class="btn btn-success btn-sm" style="width:100%">AH1</a></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="GAB17" onclick="abre('GAB17')" class="btn btn-success btn-sm" style="width:100%">GAB17</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="AG3" onclick="abre('AG3')" class="btn btn-success btn-sm" style="width:100%">AG3</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="AG2" onclick="abre('AG2')" class="btn btn-success btn-sm" style="width:100%">AG2</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="AG1" onclick="abre('AG1')" class="btn btn-success btn-sm" style="width:100%">AG1</a></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td colspan="4"><hr /></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="GAB18" onclick="abre('GAB18')" class="btn btn-success btn-sm" style="width:100%">GAB18</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="AF3" onclick="abre('AF3')" class="btn btn-success btn-sm" style="width:100%">AF3</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="AF2" onclick="abre('AF2')" class="btn btn-success btn-sm" style="width:100%">AF2</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="AF1" onclick="abre('AF1')" class="btn btn-success btn-sm" style="width:100%">AF1</a></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="AE3" onclick="abre('AE3')" class="btn btn-success btn-sm" style="width:100%">AE3</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="AE2" onclick="abre('AE2')" class="btn btn-success btn-sm" style="width:100%">AE2</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="AE1" onclick="abre('AE1')" class="btn btn-success btn-sm" style="width:100%">AE1</a></td>
							</tr>
							<tr>
								<td colspan="7"><hr /></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="AD6" onclick="abre('AD6')" class="btn btn-success btn-sm" style="width:100%">AD6</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="AD5" onclick="abre('AD5')" class="btn btn-success btn-sm" style="width:100%">AD5</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="AD4" onclick="abre('AD4')" class="btn btn-success btn-sm" style="width:100%">AD4</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="AD3" onclick="abre('AD3')" class="btn btn-success btn-sm" style="width:100%">AD3</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="AD2" onclick="abre('AD2')" class="btn btn-success btn-sm" style="width:100%">AD2</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="AD1" onclick="abre('AD1')" class="btn btn-success btn-sm" style="width:100%">AD1</a></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="AC6" onclick="abre('AC6')" class="btn btn-success btn-sm" style="width:100%">AC6</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="AC5" onclick="abre('AC5')" class="btn btn-success btn-sm" style="width:100%">AC5</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="AC4" onclick="abre('AC4')" class="btn btn-success btn-sm" style="width:100%">AC4</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="AC3" onclick="abre('AC3')" class="btn btn-success btn-sm" style="width:100%">AC3</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="AC2" onclick="abre('AC2')" class="btn btn-success btn-sm" style="width:100%">AC2</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="AC1" onclick="abre('AC1')" class="btn btn-success btn-sm" style="width:100%">AC1</a></td>
							</tr>
							<tr>
								<td colspan="7"><hr /></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="AB6" onclick="abre('AB6')" class="btn btn-success btn-sm" style="width:100%">AB6</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="AB5" onclick="abre('AB5')" class="btn btn-success btn-sm" style="width:100%">AB5</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="AB4" onclick="abre('AB4')" class="btn btn-success btn-sm" style="width:100%">AB4</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="AB3" onclick="abre('AB3')" class="btn btn-success btn-sm" style="width:100%">AB3</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="AB2" onclick="abre('AB2')" class="btn btn-success btn-sm" style="width:100%">AB2</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="AB1" onclick="abre('AB1')" class="btn btn-success btn-sm" style="width:100%">AB1</a></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="AA6" onclick="abre('AA6')" class="btn btn-success btn-sm" style="width:100%">AA6</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="AA5" onclick="abre('AA5')" class="btn btn-success btn-sm" style="width:100%">AA5</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="AA4" onclick="abre('AA4')" class="btn btn-success btn-sm" style="width:100%">AA4</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="AA3" onclick="abre('AA3')" class="btn btn-success btn-sm" style="width:100%">AA3</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="AA2" onclick="abre('AA2')" class="btn btn-success btn-sm" style="width:100%">AA2</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="AA1" onclick="abre('AA1')" class="btn btn-success btn-sm" style="width:100%">AA1</a></td>
							</tr>
							<tr>
								<td colspan="7"><hr /></td>
							</tr>
							<tr>
								<td colspan="7"><hr /></td>
							</tr>
							<tr>
								<td colspan="7"><hr /></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="REC1" onclick="abre('REC1')" class="btn btn-success btn-sm" style="width:100%">REC1</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td colspan="2" rowspan="3"><a href="javascript:void(0)" id="REC5" onclick="abre('REC5')" class="btn btn-success btn-sm" style="width:100%">REGI</a></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="REC2" onclick="abre('REC2')" class="btn btn-success btn-sm" style="width:100%">REC2</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="REC3" onclick="abre('REC3')" class="btn btn-success btn-sm" style="width:100%">REC3</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
							</tr>
							<tr>
								<td colspan="7"><hr /></td>
							</tr>
							<tr>
								<td colspan="7"><hr /></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td colspan="2"><a href="javascript:void(0)" id="REC4" onclick="abre('REC4')" class="btn btn-success btn-sm" style="width:100%">TRAVEL</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
							</tr>
						</table>
					</div>
				</div>
                    
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer" style="overflow:auto;font-size:80%;position:fixed;height:185px;margin:0;bottom:0px;border-top:5px solid #3399ff"> 
				<div id="loader" style="width:100%;text-align:center;display:none">
					<img src="images/loading.gif" style="height:185px" />
				</div>
				<div class="row" id="footinfo">
					<h4 class="col-md-12 text-center">Please select a location on Map</h4>
				</div>
			</footer>
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
	<script>
		$( document ).ajaxStart(function() {
		  $( "#footinfo" ).hide();
		  $( "#loader" ).show();
		});
		$( document ).ajaxStop(function() {
		  $( "#loader" ).hide();
		  $( "#footinfo" ).show();
		});
		$(document).ready(function() {
			$("#footinfo").load("locationsfree.php?floor=0");
		});
	</script>
</body>

</html>
<?php
require "nucleo2.php";
?>