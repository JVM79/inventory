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
                    <h3 class="text-primary">IT Department</h3> </div>
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
							<a href="javascript:void(0)" id="showlocations" onclick="$('#footinfo').load('locationsfree.php?floor=IT&show=locations');" class="btn btn-primary btn" style="width:100%;margin:5px;"><i class="fa fa-map-marker"></i> &nbsp;Show Locations</a>
							<a href="javascript:void(0)" id="showusers" onclick="$('#footinfo').load('locationsfree.php?floor=IT&show=users');" class="btn btn-primary btn" style="width:100%;margin:5px;"><i class="fa fa-users"></i> &nbsp;Show Users</a>
							<a href="javascript:void(0)" id="showcomputers" onclick="$('#footinfo').load('locationsfree.php?floor=IT&show=computers');" class="btn btn-primary btn" style="width:100%;margin:5px;"><i class="fa fa-laptop"></i> &nbsp;Show Computers</a>
							<a href="javascript:void(0)" id="showmonitors" onclick="$('#footinfo').load('locationsfree.php?floor=IT&show=monitors');" class="btn btn-primary btn" style="width:100%;margin:5px;"><i class="fa fa-desktop"></i> &nbsp;Show Monitors</a>
						</div>
						<h3>Floor 1</h3>
						<table>
							<tr>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD41" onclick="abre('ITD41')" class="btn btn-success btn-sm" style="width:100%">ITD41</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD40" onclick="abre('ITD40')" class="btn btn-success btn-sm" style="width:100%">ITD40</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD39" onclick="abre('ITD39')" class="btn btn-success btn-sm" style="width:100%">ITD39</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD38" onclick="abre('ITD38')" class="btn btn-success btn-sm" style="width:100%">ITD38</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD37" onclick="abre('ITD37')" class="btn btn-success btn-sm" style="width:100%">ITD37</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px;border-left:2px solid #aaa"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD61" onclick="abre('ITD61')" class="btn btn-success btn-sm" style="width:100%">ITD61</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px;border-left:2px solid #aaa"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD46" onclick="abre('ITD46')" class="btn btn-success btn-sm" style="width:100%">ITD46</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD50" onclick="abre('ITD50')" class="btn btn-success btn-sm" style="width:100%">ITD50</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD42" onclick="abre('ITD42')" class="btn btn-success btn-sm" style="width:100%">ITD42</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD36" onclick="abre('ITD36')" class="btn btn-success btn-sm" style="width:100%">ITD36</a></td>
								<td style="width:50px;border-left:2px solid #aaa"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px;border-left:2px solid #aaa"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD47" onclick="abre('ITD47')" class="btn btn-success btn-sm" style="width:100%">ITD47</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD51" onclick="abre('ITD51')" class="btn btn-success btn-sm" style="width:100%">ITD51</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD43" onclick="abre('ITD43')" class="btn btn-success btn-sm" style="width:100%">ITD43</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD54" onclick="abre('ITD54')" class="btn btn-success btn-sm" style="width:100%">ITD54</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD60" onclick="abre('ITD60')" class="btn btn-success btn-sm" style="width:100%">ITD60</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD35" onclick="abre('ITD35')" class="btn btn-success btn-sm" style="width:100%">ITD35</a></td>
								<td style="width:50px;border-left:2px solid #aaa"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px;border-left:2px solid #aaa"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD48" onclick="abre('ITD48')" class="btn btn-success btn-sm" style="width:100%">ITD48</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD52" onclick="abre('ITD52')" class="btn btn-success btn-sm" style="width:100%">ITD52</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD44" onclick="abre('ITD44')" class="btn btn-success btn-sm" style="width:100%">ITD44</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD45" onclick="abre('ITD45')" class="btn btn-success btn-sm" style="width:100%">ITD45</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD34" onclick="abre('ITD34')" class="btn btn-success btn-sm" style="width:100%">ITD34</a></td>
								<td style="width:50px;border-left:2px solid #aaa"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px;border-left:2px solid #aaa"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD49" onclick="abre('ITD49')" class="btn btn-success btn-sm" style="width:100%">ITD49</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD53" onclick="abre('ITD53')" class="btn btn-success btn-sm" style="width:100%">ITD53</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
							</tr>
							<tr>
								<td colspan="8"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%">IT SOFTWARE</a></td>
								<td colspan="3"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%">ARQUIVO</a></td>
								<td colspan="4"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%">SALA</a></td>
							</tr>
							<tr>
								<td colspan="15"><hr /></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD22" onclick="abre('ITD22')" class="btn btn-success btn-sm" style="width:100%">ITD22</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD23" onclick="abre('ITD23')" class="btn btn-success btn-sm" style="width:100%">ITD23</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD24" onclick="abre('ITD24')" class="btn btn-success btn-sm" style="width:100%">ITD24</a></td>
								<td style="width:50px;border-right:2px solid #aaa"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td colspan="11"></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD25" onclick="abre('ITD25')" class="btn btn-success btn-sm" style="width:100%">ITD25</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD26" onclick="abre('ITD26')" class="btn btn-success btn-sm" style="width:100%">ITD26</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD27" onclick="abre('ITD27')" class="btn btn-success btn-sm" style="width:100%">ITD27</a></td>
								<td style="width:50px;border-right:2px solid #aaa"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td colspan="11"><hr /></td>
							</tr>
							<tr>
								<td colspan="4"><hr /></td>
								<td style="width:50px;border-left:2px solid #aaa"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px;border-right:2px solid #aaa"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td colspan="3" rowspan="4"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%">ESCADAS</a></td>
								<td style="width:50px;border-left:2px solid #aaa"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD28" onclick="abre('ITD28')" class="btn btn-success btn-sm" style="width:100%">ITD28</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD29" onclick="abre('ITD29')" class="btn btn-success btn-sm" style="width:100%">ITD29</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD30" onclick="abre('ITD30')" class="btn btn-success btn-sm" style="width:100%">ITD30</a></td>
								<td style="width:50px;border-right:2px solid #aaa"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px;border-right:2px solid #aaa"><a href="javascript:void(0)" id="ITD21" onclick="abre('ITD21')" class="btn btn-success btn-sm" style="width:100%">ITD21</a></td>
								<td style="width:50px;border-left:2px solid #aaa"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD63" onclick="abre('ITD63')" class="btn btn-success btn-sm" style="width:100%">ITD63</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD64" onclick="abre('ITD64')" class="btn btn-success btn-sm" style="width:100%">ITD64</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD66" onclick="abre('ITD66')" class="btn btn-success btn-sm" style="width:100%">ITD66</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD68" onclick="abre('ITD68')" class="btn btn-success btn-sm" style="width:100%">ITD68</a></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD31" onclick="abre('ITD31')" class="btn btn-success btn-sm" style="width:100%">ITD31</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD32" onclick="abre('ITD32')" class="btn btn-success btn-sm" style="width:100%">ITD32</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD33" onclick="abre('ITD33')" class="btn btn-success btn-sm" style="width:100%">ITD33</a></td>
								<td style="width:50px;border-right:2px solid #aaa"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px;border-right:2px solid #aaa"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px;border-left:2px solid #aaa"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD62" onclick="abre('ITD62')" class="btn btn-success btn-sm" style="width:100%">ITD62</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD65" onclick="abre('ITD65')" class="btn btn-success btn-sm" style="width:100%">ITD65</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD67" onclick="abre('ITD67')" class="btn btn-success btn-sm" style="width:100%">ITD67</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD69" onclick="abre('ITD69')" class="btn btn-success btn-sm" style="width:100%">ITD69</a></td>
							</tr>
							<tr>
								<td colspan="4"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%">SALA</a></td>
								<td colspan="2"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%">MANAGER</a></td>
								<td colspan="6"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%">SALA</a></td>
							</tr>
						</table>
						<br />
						<h3>Floor 0</h3>
						<table>
							<tr>
								<td colspan="9"><hr /></td>
								<td style="width:50px;border-left:2px solid #aaa"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD15" onclick="abre('ITD15')" class="btn btn-success btn-sm" style="width:100%">ITD15</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD16" onclick="abre('ITD16')" class="btn btn-success btn-sm" style="width:100%">ITD16</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD17" onclick="abre('ITD17')" class="btn btn-success btn-sm" style="width:100%">ITD17</a></td>
							</tr>
							<tr>
								<td colspan="9"><hr /></td>
								<td style="width:50px;border-left:2px solid #aaa"><a href="javascript:void(0)" id="ITD14" onclick="abre('ITD14')" class="btn btn-success btn-sm" style="width:100%">ITD14</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD6" onclick="abre('ITD6')" class="btn btn-success btn-sm" style="width:100%">ITD6</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD70" onclick="abre('ITD70')" class="btn btn-success btn-sm" style="width:100%">ITD70</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD71" onclick="abre('ITD71')" class="btn btn-success btn-sm" style="width:100%">ITD71</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px;border-left:2px solid #aaa"><a href="javascript:void(0)" id="ITD59" onclick="abre('ITD59')" class="btn btn-success btn-sm" style="width:100%">ITD59</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td rowspan="2"><a href="javascript:void(0)" id="ITD7" onclick="abre('ITD7')" class="btn btn-success btn-sm" style="width:100%">ITD7</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD8" onclick="abre('ITD8')" class="btn btn-success btn-sm" style="width:100%">ITD8</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD9" onclick="abre('ITD9')" class="btn btn-success btn-sm" style="width:100%">ITD9</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD10" onclick="abre('ITD10')" class="btn btn-success btn-sm" style="width:100%">ITD10</a></td>
							</tr>
							<tr>
								<td colspan="9"><hr /></td>
								<td style="width:50px;border-left:2px solid #aaa"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD11" onclick="abre('ITD11')" class="btn btn-success btn-sm" style="width:100%">ITD11</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD12" onclick="abre('ITD12')" class="btn btn-success btn-sm" style="width:100%">ITD12</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD13" onclick="abre('ITD13')" class="btn btn-success btn-sm" style="width:100%">ITD13</a></td>
							</tr>
							<tr>
								<td colspan="9"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%">DATACENTER</a></td>
								<td colspan="6"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%">IT SERVICE DESK</a></td>
							</tr>
							<tr>
								<td colspan="15"><hr /></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD56" onclick="abre('ITD56')" class="btn btn-success btn-sm" style="width:100%">ITD56</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD55" onclick="abre('ITD55')" class="btn btn-success btn-sm" style="width:100%">ITD55</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD2" onclick="abre('ITD2')" class="btn btn-success btn-sm" style="width:100%">ITD2</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD1" onclick="abre('ITD1')" class="btn btn-success btn-sm" style="width:100%">ITD1</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td colspan="10" style="border-left:2px solid #aaa"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
							</tr>
							<tr>
								<td colspan="5" style="border-right:2px solid #aaa"><hr /></td>
								<td colspan="10"><hr /></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD57" onclick="abre('ITD57')" class="btn btn-success btn-sm" style="width:100%">ITD57</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD3" onclick="abre('ITD3')" class="btn btn-success btn-sm" style="width:100%">ITD3</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD58" onclick="abre('ITD58')" class="btn btn-success btn-sm" style="width:100%">ITD58</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD5" onclick="abre('ITD5')" class="btn btn-success btn-sm" style="width:100%">ITD5</a></td>
								<td style="width:50px;border-left:2px solid #aaa"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px;border-right:2px solid #aaa"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td colspan="3" rowspan="3"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%">ENTRADA</a></td>
								<td style="width:50px;border-right:2px solid #aaa;border-left:2px solid #aaa"><a href="javascript:void(0)" id="ITD18" onclick="abre('ITD18')" class="btn btn-success btn-sm" style="width:100%">ITD18</a></td>
								<td colspan="2" rowspan="2"><a href="javascript:void(0)" id="LABIT" onclick="abre('LABIT')" class="btn btn-success btn-sm" style="width:100%">LABIT</a></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD4" onclick="abre('ITD4')" class="btn btn-success btn-sm" style="width:100%">ITD4</a></td>
								<td style="width:50px;border-left:2px solid #aaa"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD19" onclick="abre('ITD19')" class="btn btn-success btn-sm" style="width:100%">ITD19</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="ITD20" onclick="abre('ITD20')" class="btn btn-success btn-sm" style="width:100%">ITD20</a></td>
								<td style="width:50px;border-right:2px solid #aaa"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px;border-right:2px solid #aaa;border-left:2px solid #aaa"><a href="javascript:void(0)" id="ITD72" onclick="abre('ITD72')" class="btn btn-success btn-sm" style="width:100%">TV</a></td>
							</tr>
							<tr>
								<td colspan="5"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%">STOCK IT</a></td>
								<td colspan="4"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%">SERVER ROOM</a></td>
								<td><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%">REC</a></td>
								<td colspan="2"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%">LAB IT</a></td>
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
			$("#footinfo").load("locationsfree.php?floor=IT");
		});
	</script>
</body>

</html>
<?php
require "nucleo2.php";
?>