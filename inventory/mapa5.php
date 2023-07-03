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
                    <h3 class="text-primary">FINANCE</h3> </div>
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
							<a href="javascript:void(0)" id="showlocations" onclick="$('#footinfo').load('locationsfree.php?floor=FIN&show=locations');" class="btn btn-primary btn" style="width:100%;margin:5px;"><i class="fa fa-map-marker"></i> &nbsp;Show Locations</a>
							<a href="javascript:void(0)" id="showusers" onclick="$('#footinfo').load('locationsfree.php?floor=FIN&show=users');" class="btn btn-primary btn" style="width:100%;margin:5px;"><i class="fa fa-users"></i> &nbsp;Show Users</a>
							<a href="javascript:void(0)" id="showcomputers" onclick="$('#footinfo').load('locationsfree.php?floor=FIN&show=computers');" class="btn btn-primary btn" style="width:100%;margin:5px;"><i class="fa fa-laptop"></i> &nbsp;Show Computers</a>
							<a href="javascript:void(0)" id="showmonitors" onclick="$('#footinfo').load('locationsfree.php?floor=FIN&show=monitors');" class="btn btn-primary btn" style="width:100%;margin:5px;"><i class="fa fa-desktop"></i> &nbsp;Show Monitors</a>
						</div>
						<h3>Floor 1</h3>
						<table>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC25" onclick="abre('FINC25')" class="btn btn-success btn-sm" style="width:100%">FINC25</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC26" onclick="abre('FINC26')" class="btn btn-success btn-sm" style="width:100%">FINC26</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC27" onclick="abre('FINC27')" class="btn btn-success btn-sm" style="width:100%">FINC27</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC37" onclick="abre('FINC37')" class="btn btn-success btn-sm" style="width:100%">FINC37</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC38" onclick="abre('FINC38')" class="btn btn-success btn-sm" style="width:100%">FINC38</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC39" onclick="abre('FINC39')" class="btn btn-success btn-sm" style="width:100%">FINC39</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC43" onclick="abre('FINC43')" class="btn btn-success btn-sm" style="width:100%">FINC43</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC44" onclick="abre('FINC44')" class="btn btn-success btn-sm" style="width:100%">FINC44</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC45" onclick="abre('FINC45')" class="btn btn-success btn-sm" style="width:100%">FINC45</a></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC28" onclick="abre('FINC28')" class="btn btn-success btn-sm" style="width:100%">FINC28</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC29" onclick="abre('FINC29')" class="btn btn-success btn-sm" style="width:100%">FINC29</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC30" onclick="abre('FINC30')" class="btn btn-success btn-sm" style="width:100%">FINC30</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC40" onclick="abre('FINC40')" class="btn btn-success btn-sm" style="width:100%">FINC40</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC41" onclick="abre('FINC41')" class="btn btn-success btn-sm" style="width:100%">FINC41</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC42" onclick="abre('FINC42')" class="btn btn-success btn-sm" style="width:100%">FINC42</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC46" onclick="abre('FINC46')" class="btn btn-success btn-sm" style="width:100%">FINC46</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC47" onclick="abre('FINC47')" class="btn btn-success btn-sm" style="width:100%">FINC47</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC48" onclick="abre('FINC48')" class="btn btn-success btn-sm" style="width:100%">FINC48</a></td>
							</tr>
							<tr>
								<td colspan="11"><hr /></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC31" onclick="abre('FINC31')" class="btn btn-success btn-sm" style="width:100%">FINC31</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC32" onclick="abre('FINC32')" class="btn btn-success btn-sm" style="width:100%">FINC32</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC33" onclick="abre('FINC33')" class="btn btn-success btn-sm" style="width:100%">FINC33</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC59" onclick="abre('FINC59')" class="btn btn-success btn-sm" style="width:100%">FINC59</a></td>
								<td colspan="3" rowspan="2"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%">ESCADAS</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC49" onclick="abre('FINC49')" class="btn btn-success btn-sm" style="width:100%">FINC49</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC50" onclick="abre('FINC50')" class="btn btn-success btn-sm" style="width:100%">FINC50</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC51" onclick="abre('FINC51')" class="btn btn-success btn-sm" style="width:100%">FINC51</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC52" onclick="abre('FINC52')" class="btn btn-success btn-sm" style="width:100%">FINC52</a></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC34" onclick="abre('FINC34')" class="btn btn-success btn-sm" style="width:100%">FINC34</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC35" onclick="abre('FINC35')" class="btn btn-success btn-sm" style="width:100%">FINC35</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC36" onclick="abre('FINC36')" class="btn btn-success btn-sm" style="width:100%">FINC36</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC60" onclick="abre('FINC60')" class="btn btn-success btn-sm" style="width:100%">FINC60</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC53" onclick="abre('FINC53')" class="btn btn-success btn-sm" style="width:100%">FINC53</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC54" onclick="abre('FINC54')" class="btn btn-success btn-sm" style="width:100%">FINC54</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC55" onclick="abre('FINC55')" class="btn btn-success btn-sm" style="width:100%">FINC55</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC56" onclick="abre('FINC56')" class="btn btn-success btn-sm" style="width:100%">FINC56</a></td>
							</tr>
						</table>
						<br />
						<h3>Floor 0</h3>
						<table>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC13" onclick="abre('FINC13')" class="btn btn-success btn-sm" style="width:100%">FINC13</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC14" onclick="abre('FINC14')" class="btn btn-success btn-sm" style="width:100%">FINC14</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC15" onclick="abre('FINC15')" class="btn btn-success btn-sm" style="width:100%">FINC15</a></td>
								<td colspan="3" rowspan="2" style="width:150px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%">ENTRADA</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC61" onclick="abre('FINC61')" class="btn btn-success btn-sm" style="width:100%">FINC61</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC1" onclick="abre('FINC1')" class="btn btn-success btn-sm" style="width:100%">FINC1</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC2" onclick="abre('FINC2')" class="btn btn-success btn-sm" style="width:100%">FINC2</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC3" onclick="abre('FINC3')" class="btn btn-success btn-sm" style="width:100%">FINC3</a></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC16" onclick="abre('FINC16')" class="btn btn-success btn-sm" style="width:100%">FINC16</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC17" onclick="abre('FINC17')" class="btn btn-success btn-sm" style="width:100%">FINC17</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC18" onclick="abre('FINC18')" class="btn btn-success btn-sm" style="width:100%">FINC18</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC4" onclick="abre('FINC4')" class="btn btn-success btn-sm" style="width:100%">FINC4</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC5" onclick="abre('FINC5')" class="btn btn-success btn-sm" style="width:100%">FINC5</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC6" onclick="abre('FINC6')" class="btn btn-success btn-sm" style="width:100%">FINC6</a></td>
							</tr>
							<tr>
								<td colspan="11"><hr /></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC19" onclick="abre('FINC19')" class="btn btn-success btn-sm" style="width:100%">FINC19</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC20" onclick="abre('FINC20')" class="btn btn-success btn-sm" style="width:100%">FINC20</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC21" onclick="abre('FINC21')" class="btn btn-success btn-sm" style="width:100%">FINC21</a></td>
								<td colspan="4" rowspan="2"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%">ESCADAS</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC57" onclick="abre('FINC57')" class="btn btn-success btn-sm" style="width:100%">FINC57</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC7" onclick="abre('FINC7')" class="btn btn-success btn-sm" style="width:100%">FINC7</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC8" onclick="abre('FINC8')" class="btn btn-success btn-sm" style="width:100%">FINC8</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC9" onclick="abre('FINC9')" class="btn btn-success btn-sm" style="width:100%">FINC9</a></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC22" onclick="abre('FINC22')" class="btn btn-success btn-sm" style="width:100%">FINC22</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC23" onclick="abre('FINC23')" class="btn btn-success btn-sm" style="width:100%">FINC23</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC24" onclick="abre('FINC24')" class="btn btn-success btn-sm" style="width:100%">FINC24</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC58" onclick="abre('FINC58')" class="btn btn-success btn-sm" style="width:100%">FINC58</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC10" onclick="abre('FINC10')" class="btn btn-success btn-sm" style="width:100%">FINC10</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC11" onclick="abre('FINC11')" class="btn btn-success btn-sm" style="width:100%">FINC11</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="FINC12" onclick="abre('FINC12')" class="btn btn-success btn-sm" style="width:100%">FINC12</a></td>
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
			$("#footinfo").load("locationsfree.php?floor=FIN");
		});
	</script>
</body>

</html>
<?php
require "nucleo2.php";
?>