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
                    <h3 class="text-primary">Recursos Humanos</h3> </div>
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
							<a href="javascript:void(0)" id="showlocations" onclick="$('#footinfo').load('locationsfree.php?floor=RH&show=locations');" class="btn btn-primary btn" style="width:100%;margin:5px;"><i class="fa fa-map-marker"></i> &nbsp;Show Locations</a>
							<a href="javascript:void(0)" id="showusers" onclick="$('#footinfo').load('locationsfree.php?floor=RH&show=users');" class="btn btn-primary btn" style="width:100%;margin:5px;"><i class="fa fa-users"></i> &nbsp;Show Users</a>
							<a href="javascript:void(0)" id="showcomputers" onclick="$('#footinfo').load('locationsfree.php?floor=RH&show=computers');" class="btn btn-primary btn" style="width:100%;margin:5px;"><i class="fa fa-laptop"></i> &nbsp;Show Computers</a>
							<a href="javascript:void(0)" id="showmonitors" onclick="$('#footinfo').load('locationsfree.php?floor=RH&show=monitors');" class="btn btn-primary btn" style="width:100%;margin:5px;"><i class="fa fa-desktop"></i> &nbsp;Show Monitors</a>
						</div>
						<h3>Floor 1</h3>
						<table>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="HR27" onclick="abre('HR27')" class="btn btn-success btn-sm" style="width:100%">HR27</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="HR26" onclick="abre('HR26')" class="btn btn-success btn-sm" style="width:100%">HR26</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="HR25" onclick="abre('HR25')" class="btn btn-success btn-sm" style="width:100%">HR25</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="HR9" onclick="abre('HR9')" class="btn btn-success btn-sm" style="width:100%">HR9</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="HR8" onclick="abre('HR8')" class="btn btn-success btn-sm" style="width:100%">HR8</a></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="HR24" onclick="abre('HR24')" class="btn btn-success btn-sm" style="width:100%">HR24</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="HR23" onclick="abre('HR23')" class="btn btn-success btn-sm" style="width:100%">HR23</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="HR22" onclick="abre('HR22')" class="btn btn-success btn-sm" style="width:100%">HR22</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="HR7" onclick="abre('HR7')" class="btn btn-success btn-sm" style="width:100%">HR7</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="HR6" onclick="abre('HR6')" class="btn btn-success btn-sm" style="width:100%">HR6</a></td>
							</tr>
							<tr>
								<td colspan="7"><hr /></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="HR21" onclick="abre('HR21')" class="btn btn-success btn-sm" style="width:100%">HR21</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="HR20" onclick="abre('HR20')" class="btn btn-success btn-sm" style="width:100%">HR20</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="HR19" onclick="abre('HR19')" class="btn btn-success btn-sm" style="width:100%">HR19</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="HR5" onclick="abre('HR5')" class="btn btn-success btn-sm" style="width:100%">HR5</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="HR4" onclick="abre('HR4')" class="btn btn-success btn-sm" style="width:100%">HR4</a></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="HR18" onclick="abre('HR18')" class="btn btn-success btn-sm" style="width:100%">HR18</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="HR17" onclick="abre('HR17')" class="btn btn-success btn-sm" style="width:100%">HR17</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="HR16" onclick="abre('HR16')" class="btn btn-success btn-sm" style="width:100%">HR16</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="HR3" onclick="abre('HR3')" class="btn btn-success btn-sm" style="width:100%">HR3</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="HR2" onclick="abre('HR2')" class="btn btn-success btn-sm" style="width:100%">HR2</a></td>
							</tr>
							<tr>
								<td colspan="7"><hr /></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="HR15" onclick="abre('HR15')" class="btn btn-success btn-sm" style="width:100%">HR15</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="HR14" onclick="abre('HR14')" class="btn btn-success btn-sm" style="width:100%">HR14</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="HR13" onclick="abre('HR13')" class="btn btn-success btn-sm" style="width:100%">HR13</a></td>
								<!--<td style="width:50px"><a href="javascript:void(0)" id="HR36" onclick="abre('HR36')" class="btn btn-success btn-sm" style="width:100%">HR36</a></td>-->
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px" rowspan="2"><a href="javascript:void(0)" id="HR1" onclick="abre('HR1')" class="btn btn-success btn-sm" style="width:100%">HR1</a></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="HR12" onclick="abre('HR12')" class="btn btn-success btn-sm" style="width:100%">HR12</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="HR11" onclick="abre('HR11')" class="btn btn-success btn-sm" style="width:100%">HR11</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="HR10" onclick="abre('HR10')" class="btn btn-success btn-sm" style="width:100%">HR10</a></td>
								<!--<td style="width:50px"><a href="javascript:void(0)" id="HR39" onclick="abre('HR39')" class="btn btn-success btn-sm" style="width:100%">HR39</a></td>-->
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
							</tr>
						</table>
						<br />
						<h3>Floor 0</h3>
						<table>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="HR31" onclick="abre('HR31')" class="btn btn-success btn-sm" style="width:100%">HR31</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="HR32" onclick="abre('HR32')" class="btn btn-success btn-sm" style="width:100%">HR32</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="HR33" onclick="abre('HR33')" class="btn btn-success btn-sm" style="width:100%">HR33</a></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="HR30" onclick="abre('HR30')" class="btn btn-success btn-sm" style="width:100%">HR30</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="HR29" onclick="abre('HR29')" class="btn btn-success btn-sm" style="width:100%">HR29</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="HR28" onclick="abre('HR28')" class="btn btn-success btn-sm" style="width:100%">HR28</a></td>
							</tr>
							<tr>
								<td colspan="3"><hr /></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="HR34" onclick="abre('HR34')" class="btn btn-success btn-sm" style="width:100%">HR34</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="HR35" onclick="abre('HR35')" class="btn btn-success btn-sm" style="width:100%">HR35</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="HR37" onclick="abre('HR37')" class="btn btn-success btn-sm" style="width:100%">HR37</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="HR38" onclick="abre('HR38')" class="btn btn-success btn-sm" style="width:100%">HR38</a></td>
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
			$("#footinfo").load("locationsfree.php?floor=RH");
		});
	</script>
</body>

</html>
<?php
require "nucleo2.php";
?>