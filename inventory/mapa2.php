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
                    <h3 class="text-primary">Engineering</h3> </div>
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
                <div class="row" style="margin-bottom:200px;">
                    <div class="col-lg-12">
						<div style="position:fixed;margin:0;top:150px;right:15px;width:200px">
							<a href="javascript:void(0)" id="showlocations" onclick="$('#footinfo').load('locationsfree.php?floor=1&show=locations');" class="btn btn-primary btn" style="width:100%;margin:5px;"><i class="fa fa-map-marker"></i> &nbsp;Show Locations</a>
							<a href="javascript:void(0)" id="showusers" onclick="$('#footinfo').load('locationsfree.php?floor=1&show=users');" class="btn btn-primary btn" style="width:100%;margin:5px;"><i class="fa fa-users"></i> &nbsp;Show Users</a>
							<a href="javascript:void(0)" id="showcomputers" onclick="$('#footinfo').load('locationsfree.php?floor=1&show=computers');" class="btn btn-primary btn" style="width:100%;margin:5px;"><i class="fa fa-laptop"></i> &nbsp;Show Computers</a>
							<a href="javascript:void(0)" id="showmonitors" onclick="$('#footinfo').load('locationsfree.php?floor=1&show=monitors');" class="btn btn-primary btn" style="width:100%;margin:5px;"><i class="fa fa-desktop"></i> &nbsp;Show Monitors</a>
						</div>
						<table>
							<tr>
								<td colspan="2"><a href="javascript:void(0)" id="GAB1" onclick="abre('GAB1')" class="btn btn-success btn-sm" style="width:100%">GAB1</a></td>
								<td colspan="2"><a href="javascript:void(0)" id="GAB2" onclick="abre('GAB2')" class="btn btn-success btn-sm" style="width:100%">GAB2</a></td>
								<td colspan="3"><a href="javascript:void(0)" id="GAB3" onclick="abre('GAB3')" class="btn btn-success btn-sm" style="width:100%">GAB3</a></td>
								<td colspan="2"><a href="javascript:void(0)" id="GAB4" onclick="abre('GAB4')" class="btn btn-success btn-sm" style="width:100%">GAB4</a></td>
								<td colspan="3"><a href="javascript:void(0)" id="GAB5" onclick="abre('GAB5')" class="btn btn-success btn-sm" style="width:100%">GAB5</a></td>
								<td colspan="2"><a href="javascript:void(0)" id="GAB6" onclick="abre('GAB6')" class="btn btn-success btn-sm" style="width:100%">GAB6</a></td>
								<td colspan="2" rowspan="2"><a href="javascript:void(0)" id="MEETING1" onclick="abre('MEETING1')" class="btn btn-success btn-sm" style="width:100%">MEETING ROOM 1</a></td>
								<td colspan="5" rowspan="7"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%;">ARQUIVO</a></td>
							</tr>
							<tr><td colspan="13"><hr /></td></tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="A1" onclick="abre('A1')" class="btn btn-success btn-sm" style="width:100%">A1</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="A2" onclick="abre('A2')" class="btn btn-success btn-sm" style="width:100%">A2</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="A3" onclick="abre('A3')" class="btn btn-success btn-sm" style="width:100%">A3</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="A4" onclick="abre('A4')" class="btn btn-success btn-sm" style="width:100%">A4</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="A5" onclick="abre('A5')" class="btn btn-success btn-sm" style="width:100%">A5</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="A6" onclick="abre('A6')" class="btn btn-success btn-sm" style="width:100%">A6</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="A7" onclick="abre('A7')" class="btn btn-success btn-sm" style="width:100%">A7</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="A8" onclick="abre('A8')" class="btn btn-success btn-sm" style="width:100%">A8</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="A9" onclick="abre('A9')" class="btn btn-success btn-sm" style="width:100%">A9</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="A10" onclick="abre('A10')" class="btn btn-success btn-sm" style="width:100%">A10</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="A11" onclick="abre('A11')" class="btn btn-success btn-sm" style="width:100%">A11</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="A12" onclick="abre('A12')" class="btn btn-success btn-sm" style="width:100%">A12</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
							</tr>
							<tr><td colspan="14"><hr /></td><td colspan="2" rowspan="3"><a href="javascript:void(0)" id="MEETING2" onclick="abre('MEETING2')" class="btn btn-success btn-sm" style="width:100%">MEETING ROOM 2</a></td></tr>
							
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="B1" onclick="abre('B1')" class="btn btn-success btn-sm" style="width:100%">B1</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="B2" onclick="abre('B2')" class="btn btn-success btn-sm" style="width:100%">B2</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="B3" onclick="abre('B3')" class="btn btn-success btn-sm" style="width:100%">B3</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="B4" onclick="abre('B4')" class="btn btn-success btn-sm" style="width:100%">B4</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="B5" onclick="abre('B5')" class="btn btn-success btn-sm" style="width:100%">B5</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="B6" onclick="abre('B6')" class="btn btn-success btn-sm" style="width:100%">B6</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="B7" onclick="abre('B7')" class="btn btn-success btn-sm" style="width:100%">B7</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="B8" onclick="abre('B8')" class="btn btn-success btn-sm" style="width:100%">B8</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="B9" onclick="abre('B9')" class="btn btn-success btn-sm" style="width:100%">B9</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="B10" onclick="abre('B10')" class="btn btn-success btn-sm" style="width:100%">B10</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="B11" onclick="abre('B11')" class="btn btn-success btn-sm" style="width:100%">B11</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="B12" onclick="abre('B12')" class="btn btn-success btn-sm" style="width:100%">B12</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="C1" onclick="abre('C1')" class="btn btn-success btn-sm" style="width:100%">C1</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="C2" onclick="abre('C2')" class="btn btn-success btn-sm" style="width:100%">C2</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="C3" onclick="abre('C3')" class="btn btn-success btn-sm" style="width:100%">C3</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="C4" onclick="abre('C4')" class="btn btn-success btn-sm" style="width:100%">C4</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="C5" onclick="abre('C5')" class="btn btn-success btn-sm" style="width:100%">C5</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="C6" onclick="abre('C6')" class="btn btn-success btn-sm" style="width:100%">C6</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="C7" onclick="abre('C7')" class="btn btn-success btn-sm" style="width:100%">C7</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="C8" onclick="abre('C8')" class="btn btn-success btn-sm" style="width:100%">C8</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="C9" onclick="abre('C9')" class="btn btn-success btn-sm" style="width:100%">C9</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="C10" onclick="abre('C10')" class="btn btn-success btn-sm" style="width:100%">C10</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="C11" onclick="abre('C11')" class="btn btn-success btn-sm" style="width:100%">C11</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="C12" onclick="abre('C12')" class="btn btn-success btn-sm" style="width:100%">C12</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
							</tr>
							<tr><td colspan="20"><hr /></td></tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="D1" onclick="abre('D1')" class="btn btn-success btn-sm" style="width:100%">D1</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="D2" onclick="abre('D2')" class="btn btn-success btn-sm" style="width:100%">D2</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="D3" onclick="abre('D3')" class="btn btn-success btn-sm" style="width:100%">D3</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="D4" onclick="abre('D4')" class="btn btn-success btn-sm" style="width:100%">D4</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="D5" onclick="abre('D5')" class="btn btn-success btn-sm" style="width:100%">D5</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="D6" onclick="abre('D6')" class="btn btn-success btn-sm" style="width:100%">D6</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="D7" onclick="abre('D7')" class="btn btn-success btn-sm" style="width:100%">D7</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="D8" onclick="abre('D8')" class="btn btn-success btn-sm" style="width:100%">D8</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="D9" onclick="abre('D9')" class="btn btn-success btn-sm" style="width:100%">D9</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="D10" onclick="abre('D10')" class="btn btn-success btn-sm" style="width:100%">D10</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="D11" onclick="abre('D11')" class="btn btn-success btn-sm" style="width:100%">D11</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="D12" onclick="abre('D12')" class="btn btn-success btn-sm" style="width:100%">D12</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="D13" onclick="abre('D13')" class="btn btn-success btn-sm" style="width:100%">D13</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="D14" onclick="abre('D14')" class="btn btn-success btn-sm" style="width:100%">D14</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="D15" onclick="abre('D15')" class="btn btn-success btn-sm" style="width:100%">D15</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="D16" onclick="abre('D16')" class="btn btn-success btn-sm" style="width:100%">D16</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td colspan="2" rowspan="2"><a href="javascript:void(0)" id="SALADIR" onclick="abre('SALADIR')" class="btn btn-success btn-sm" style="width:100%">CFO</a></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="E1" onclick="abre('E1')" class="btn btn-success btn-sm" style="width:100%">E1</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="E2" onclick="abre('E2')" class="btn btn-success btn-sm" style="width:100%">E2</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="E3" onclick="abre('E3')" class="btn btn-success btn-sm" style="width:100%">E3</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="E4" onclick="abre('E4')" class="btn btn-success btn-sm" style="width:100%">E4</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="E5" onclick="abre('E5')" class="btn btn-success btn-sm" style="width:100%">E5</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="E6" onclick="abre('E6')" class="btn btn-success btn-sm" style="width:100%">E6</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="E7" onclick="abre('E7')" class="btn btn-success btn-sm" style="width:100%">E7</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="E8" onclick="abre('E8')" class="btn btn-success btn-sm" style="width:100%">E8</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="E9" onclick="abre('E9')" class="btn btn-success btn-sm" style="width:100%">E9</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="E10" onclick="abre('E10')" class="btn btn-success btn-sm" style="width:100%">E10</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="E11" onclick="abre('E11')" class="btn btn-success btn-sm" style="width:100%">E11</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="E12" onclick="abre('E12')" class="btn btn-success btn-sm" style="width:100%">E12</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="E13" onclick="abre('E13')" class="btn btn-success btn-sm" style="width:100%">E13</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="E14" onclick="abre('E14')" class="btn btn-success btn-sm" style="width:100%">E14</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="E15" onclick="abre('E15')" class="btn btn-success btn-sm" style="width:100%">E15</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="E16" onclick="abre('E16')" class="btn btn-success btn-sm" style="width:100%">E16</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
							</tr>
							<tr><td colspan="20"><hr /></td></tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="F1" onclick="abre('F1')" class="btn btn-success btn-sm" style="width:100%">F1</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="F2" onclick="abre('F2')" class="btn btn-success btn-sm" style="width:100%">F2</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="F3" onclick="abre('F3')" class="btn btn-success btn-sm" style="width:100%">F3</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="F4" onclick="abre('F4')" class="btn btn-success btn-sm" style="width:100%">F4</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="F5" onclick="abre('F5')" class="btn btn-success btn-sm" style="width:100%">F5</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="F6" onclick="abre('F6')" class="btn btn-success btn-sm" style="width:100%">F6</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="F7" onclick="abre('F7')" class="btn btn-success btn-sm" style="width:100%">F7</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="F8" onclick="abre('F8')" class="btn btn-success btn-sm" style="width:100%">F8</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="F9" onclick="abre('F9')" class="btn btn-success btn-sm" style="width:100%">F9</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="F10" onclick="abre('F10')" class="btn btn-success btn-sm" style="width:100%">F10</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="F11" onclick="abre('F11')" class="btn btn-success btn-sm" style="width:100%">F11</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="F12" onclick="abre('F12')" class="btn btn-success btn-sm" style="width:100%">F12</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="F13" onclick="abre('F13')" class="btn btn-success btn-sm" style="width:100%">F13</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="F14" onclick="abre('F14')" class="btn btn-success btn-sm" style="width:100%">F14</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="F15" onclick="abre('F15')" class="btn btn-success btn-sm" style="width:100%">F15</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="F16" onclick="abre('F16')" class="btn btn-success btn-sm" style="width:100%">F16</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td colspan="2" rowspan="2"><a href="javascript:void(0)" id="SALAQI" onclick="abre('SALAQI')" class="btn btn-success btn-sm" style="width:100%">CEO</a></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="G1" onclick="abre('G1')" class="btn btn-success btn-sm" style="width:100%">G1</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="G2" onclick="abre('G2')" class="btn btn-success btn-sm" style="width:100%">G2</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="G3" onclick="abre('G3')" class="btn btn-success btn-sm" style="width:100%">G3</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="G4" onclick="abre('G4')" class="btn btn-success btn-sm" style="width:100%">G4</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="G5" onclick="abre('G5')" class="btn btn-success btn-sm" style="width:100%">G5</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="G6" onclick="abre('G6')" class="btn btn-success btn-sm" style="width:100%">G6</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="G7" onclick="abre('G7')" class="btn btn-success btn-sm" style="width:100%">G7</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="G8" onclick="abre('G8')" class="btn btn-success btn-sm" style="width:100%">G8</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="G9" onclick="abre('G9')" class="btn btn-success btn-sm" style="width:100%">G9</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="G10" onclick="abre('G10')" class="btn btn-success btn-sm" style="width:100%">G10</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="G11" onclick="abre('G11')" class="btn btn-success btn-sm" style="width:100%">G11</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="G12" onclick="abre('G12')" class="btn btn-success btn-sm" style="width:100%">G12</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="G13" onclick="abre('G13')" class="btn btn-success btn-sm" style="width:100%">G13</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="G14" onclick="abre('G14')" class="btn btn-success btn-sm" style="width:100%">G14</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="G15" onclick="abre('G15')" class="btn btn-success btn-sm" style="width:100%">G15</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="G16" onclick="abre('G16')" class="btn btn-success btn-sm" style="width:100%">G16</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
							</tr>
							<tr><td colspan="20"><hr /></td></tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="H1" onclick="abre('H1')" class="btn btn-success btn-sm" style="width:100%">H1</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="H2" onclick="abre('H2')" class="btn btn-success btn-sm" style="width:100%">H2</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="H3" onclick="abre('H3')" class="btn btn-success btn-sm" style="width:100%">H3</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="H4" onclick="abre('H4')" class="btn btn-success btn-sm" style="width:100%">H4</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="H5" onclick="abre('H5')" class="btn btn-success btn-sm" style="width:100%">H5</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="H6" onclick="abre('H6')" class="btn btn-success btn-sm" style="width:100%">H6</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="H7" onclick="abre('H7')" class="btn btn-success btn-sm" style="width:100%">H7</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="H8" onclick="abre('H8')" class="btn btn-success btn-sm" style="width:100%">H8</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="H9" onclick="abre('H9')" class="btn btn-success btn-sm" style="width:100%">H9</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="H10" onclick="abre('H10')" class="btn btn-success btn-sm" style="width:100%">H10</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="H11" onclick="abre('H11')" class="btn btn-success btn-sm" style="width:100%">H11</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="H12" onclick="abre('H12')" class="btn btn-success btn-sm" style="width:100%">H12</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="H13" onclick="abre('H13')" class="btn btn-success btn-sm" style="width:100%">H13</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="H14" onclick="abre('H14')" class="btn btn-success btn-sm" style="width:100%">H14</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="H15" onclick="abre('H15')" class="btn btn-success btn-sm" style="width:100%">H15</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="H16" onclick="abre('H16')" class="btn btn-success btn-sm" style="width:100%">H16</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td colspan="2" rowspan="2"><a href="javascript:void(0)" id="SALAPAL" onclick="abre('SALAPAL')" class="btn btn-success btn-sm" style="width:100%">ASSISTANT</a></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="I1" onclick="abre('I1')" class="btn btn-success btn-sm" style="width:100%">I1</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="I2" onclick="abre('I2')" class="btn btn-success btn-sm" style="width:100%">I2</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="I3" onclick="abre('I3')" class="btn btn-success btn-sm" style="width:100%">I3</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="I4" onclick="abre('I4')" class="btn btn-success btn-sm" style="width:100%">I4</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="I5" onclick="abre('I5')" class="btn btn-success btn-sm" style="width:100%">I5</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="I6" onclick="abre('I6')" class="btn btn-success btn-sm" style="width:100%">I6</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="I7" onclick="abre('I7')" class="btn btn-success btn-sm" style="width:100%">I7</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="I8" onclick="abre('I8')" class="btn btn-success btn-sm" style="width:100%">I8</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="I9" onclick="abre('I9')" class="btn btn-success btn-sm" style="width:100%">I9</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="I10" onclick="abre('I10')" class="btn btn-success btn-sm" style="width:100%">I10</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="I11" onclick="abre('I11')" class="btn btn-success btn-sm" style="width:100%">I11</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="I12" onclick="abre('I12')" class="btn btn-success btn-sm" style="width:100%">I12</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="I13" onclick="abre('I13')" class="btn btn-success btn-sm" style="width:100%">I13</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="I14" onclick="abre('I14')" class="btn btn-success btn-sm" style="width:100%">I14</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="I15" onclick="abre('I15')" class="btn btn-success btn-sm" style="width:100%">I15</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="I16" onclick="abre('I16')" class="btn btn-success btn-sm" style="width:100%">I16</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
							</tr>
							<tr><td colspan="20"><hr /></td></tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="J1" onclick="abre('J1')" class="btn btn-success btn-sm" style="width:100%">J1</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="J2" onclick="abre('J2')" class="btn btn-success btn-sm" style="width:100%">J2</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="J3" onclick="abre('J3')" class="btn btn-success btn-sm" style="width:100%">J3</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="J4" onclick="abre('J4')" class="btn btn-success btn-sm" style="width:100%">J4</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="J5" onclick="abre('J5')" class="btn btn-success btn-sm" style="width:100%">J5</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="J6" onclick="abre('J6')" class="btn btn-success btn-sm" style="width:100%">J6</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="J7" onclick="abre('J7')" class="btn btn-success btn-sm" style="width:100%">J7</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="J8" onclick="abre('J8')" class="btn btn-success btn-sm" style="width:100%">J8</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="J9" onclick="abre('J9')" class="btn btn-success btn-sm" style="width:100%">J9</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="J10" onclick="abre('J10')" class="btn btn-success btn-sm" style="width:100%">J10</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="J11" onclick="abre('J11')" class="btn btn-success btn-sm" style="width:100%">J11</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="J12" onclick="abre('J12')" class="btn btn-success btn-sm" style="width:100%">J12</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="J13" onclick="abre('J13')" class="btn btn-success btn-sm" style="width:100%">J13</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="J14" onclick="abre('J14')" class="btn btn-success btn-sm" style="width:100%">J14</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="J15" onclick="abre('J15')" class="btn btn-success btn-sm" style="width:100%">J15</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="J16" onclick="abre('J16')" class="btn btn-success btn-sm" style="width:100%">J16</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td colspan="2" rowspan="5"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%">ESCADAS</a></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="K1" onclick="abre('K1')" class="btn btn-success btn-sm" style="width:100%">K1</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="K2" onclick="abre('K2')" class="btn btn-success btn-sm" style="width:100%">K2</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="K3" onclick="abre('K3')" class="btn btn-success btn-sm" style="width:100%">K3</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="K4" onclick="abre('K4')" class="btn btn-success btn-sm" style="width:100%">K4</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="K5" onclick="abre('K5')" class="btn btn-success btn-sm" style="width:100%">K5</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="K6" onclick="abre('K6')" class="btn btn-success btn-sm" style="width:100%">K6</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="K7" onclick="abre('K7')" class="btn btn-success btn-sm" style="width:100%">K7</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="K8" onclick="abre('K8')" class="btn btn-success btn-sm" style="width:100%">K8</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="K9" onclick="abre('K9')" class="btn btn-success btn-sm" style="width:100%">K9</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="K10" onclick="abre('K10')" class="btn btn-success btn-sm" style="width:100%">K10</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="K11" onclick="abre('K11')" class="btn btn-success btn-sm" style="width:100%">K11</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="K12" onclick="abre('K12')" class="btn btn-success btn-sm" style="width:100%">K12</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="K13" onclick="abre('K13')" class="btn btn-success btn-sm" style="width:100%">K13</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="K14" onclick="abre('K14')" class="btn btn-success btn-sm" style="width:100%">K14</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="K15" onclick="abre('K15')" class="btn btn-success btn-sm" style="width:100%">K15</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="K16" onclick="abre('K16')" class="btn btn-success btn-sm" style="width:100%">K16</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
							</tr>
							<tr><td colspan="18"><hr /></td></tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="L1" onclick="abre('L1')" class="btn btn-success btn-sm" style="width:100%">L1</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="L2" onclick="abre('L2')" class="btn btn-success btn-sm" style="width:100%">L2</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="L3" onclick="abre('L3')" class="btn btn-success btn-sm" style="width:100%">L3</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="L4" onclick="abre('L4')" class="btn btn-success btn-sm" style="width:100%">L4</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="L5" onclick="abre('L5')" class="btn btn-success btn-sm" style="width:100%">L5</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="L6" onclick="abre('L6')" class="btn btn-success btn-sm" style="width:100%">L6</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="L7" onclick="abre('L7')" class="btn btn-success btn-sm" style="width:100%">L7</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="L8" onclick="abre('L8')" class="btn btn-success btn-sm" style="width:100%">L8</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="L9" onclick="abre('L9')" class="btn btn-success btn-sm" style="width:100%">L9</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="L10" onclick="abre('L10')" class="btn btn-success btn-sm" style="width:100%">L10</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="L11" onclick="abre('L11')" class="btn btn-success btn-sm" style="width:100%">L11</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="L12" onclick="abre('L12')" class="btn btn-success btn-sm" style="width:100%">L12</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="L13" onclick="abre('L13')" class="btn btn-success btn-sm" style="width:100%">L13</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="L14" onclick="abre('L14')" class="btn btn-success btn-sm" style="width:100%">L14</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="L15" onclick="abre('L15')" class="btn btn-success btn-sm" style="width:100%">L15</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="L16" onclick="abre('L16')" class="btn btn-success btn-sm" style="width:100%">L16</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="M1" onclick="abre('M1')" class="btn btn-success btn-sm" style="width:100%">M1</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="M2" onclick="abre('M2')" class="btn btn-success btn-sm" style="width:100%">M2</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="M3" onclick="abre('M3')" class="btn btn-success btn-sm" style="width:100%">M3</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="M4" onclick="abre('M4')" class="btn btn-success btn-sm" style="width:100%">M4</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="M5" onclick="abre('M5')" class="btn btn-success btn-sm" style="width:100%">M5</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="M6" onclick="abre('M6')" class="btn btn-success btn-sm" style="width:100%">M6</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="M7" onclick="abre('M7')" class="btn btn-success btn-sm" style="width:100%">M7</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="M8" onclick="abre('M8')" class="btn btn-success btn-sm" style="width:100%">M8</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="M9" onclick="abre('M9')" class="btn btn-success btn-sm" style="width:100%">M9</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="M10" onclick="abre('M10')" class="btn btn-success btn-sm" style="width:100%">M10</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="M11" onclick="abre('M11')" class="btn btn-success btn-sm" style="width:100%">M11</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="M12" onclick="abre('M12')" class="btn btn-success btn-sm" style="width:100%">M12</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="M13" onclick="abre('M13')" class="btn btn-success btn-sm" style="width:100%">M13</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="M14" onclick="abre('M14')" class="btn btn-success btn-sm" style="width:100%">M14</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="M15" onclick="abre('M15')" class="btn btn-success btn-sm" style="width:100%">M15</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="M16" onclick="abre('M16')" class="btn btn-success btn-sm" style="width:100%">M16</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
							</tr>
							<tr><td colspan="20"><hr /></td></tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="N1" onclick="abre('N1')" class="btn btn-success btn-sm" style="width:100%">N1</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="N2" onclick="abre('N2')" class="btn btn-success btn-sm" style="width:100%">N2</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="N3" onclick="abre('N3')" class="btn btn-success btn-sm" style="width:100%">N3</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="N4" onclick="abre('N4')" class="btn btn-success btn-sm" style="width:100%">N4</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="N5" onclick="abre('N5')" class="btn btn-success btn-sm" style="width:100%">N5</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="N6" onclick="abre('N6')" class="btn btn-success btn-sm" style="width:100%">N6</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="N7" onclick="abre('N7')" class="btn btn-success btn-sm" style="width:100%">N7</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="N8" onclick="abre('N8')" class="btn btn-success btn-sm" style="width:100%">N8</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="N9" onclick="abre('N9')" class="btn btn-success btn-sm" style="width:100%">N9</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="N10" onclick="abre('N10')" class="btn btn-success btn-sm" style="width:100%">N10</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="N11" onclick="abre('N11')" class="btn btn-success btn-sm" style="width:100%">N11</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="N12" onclick="abre('N12')" class="btn btn-success btn-sm" style="width:100%">N12</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="N13" onclick="abre('N13')" class="btn btn-success btn-sm" style="width:100%">N13</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="N14" onclick="abre('N14')" class="btn btn-success btn-sm" style="width:100%">N14</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="N15" onclick="abre('N15')" class="btn btn-success btn-sm" style="width:100%">N15</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="N16" onclick="abre('N16')" class="btn btn-success btn-sm" style="width:100%">N16</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td colspan="2" rowspan="6"><a href="javascript:void(0)" id="SERVROOM" onclick="abre('SERVROOM')" class="btn btn-success btn-sm" style="width:100%">SERVER ROOM</a></td>
							</tr>
							<tr>
								<td colspan="2" rowspan="7"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%">ESCADAS</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="O1" onclick="abre('O1')" class="btn btn-success btn-sm" style="width:100%">O1</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="O2" onclick="abre('O2')" class="btn btn-success btn-sm" style="width:100%">O2</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="O3" onclick="abre('O3')" class="btn btn-success btn-sm" style="width:100%">O3</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="O4" onclick="abre('O4')" class="btn btn-success btn-sm" style="width:100%">O4</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="O5" onclick="abre('O5')" class="btn btn-success btn-sm" style="width:100%">O5</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="O6" onclick="abre('O6')" class="btn btn-success btn-sm" style="width:100%">O6</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="O7" onclick="abre('O7')" class="btn btn-success btn-sm" style="width:100%">O7</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="O8" onclick="abre('O8')" class="btn btn-success btn-sm" style="width:100%">O8</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="O9" onclick="abre('O9')" class="btn btn-success btn-sm" style="width:100%">O9</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="O10" onclick="abre('O10')" class="btn btn-success btn-sm" style="width:100%">O10</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="O11" onclick="abre('O11')" class="btn btn-success btn-sm" style="width:100%">O11</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="O12" onclick="abre('O12')" class="btn btn-success btn-sm" style="width:100%">O12</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="O13" onclick="abre('O13')" class="btn btn-success btn-sm" style="width:100%">O13</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="O14" onclick="abre('O14')" class="btn btn-success btn-sm" style="width:100%">O14</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
							</tr>
							<tr><td colspan="15"><hr /></td></tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="PA1" onclick="abre('PA1')" class="btn btn-success btn-sm" style="width:100%">PA1</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="PA2" onclick="abre('PA2')" class="btn btn-success btn-sm" style="width:100%">PA2</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="PA3" onclick="abre('PA3')" class="btn btn-success btn-sm" style="width:100%">PA3</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="PA4" onclick="abre('PA4')" class="btn btn-success btn-sm" style="width:100%">PA4</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="PA5" onclick="abre('PA5')" class="btn btn-success btn-sm" style="width:100%">PA5</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="PA6" onclick="abre('PA6')" class="btn btn-success btn-sm" style="width:100%">PA6</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="PA7" onclick="abre('PA7')" class="btn btn-success btn-sm" style="width:100%">PA7</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="PA8" onclick="abre('PA8')" class="btn btn-success btn-sm" style="width:100%">PA8</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="PA9" onclick="abre('PA9')" class="btn btn-success btn-sm" style="width:100%">PA9</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="PA10" onclick="abre('PA10')" class="btn btn-success btn-sm" style="width:100%">PA10</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="PA11" onclick="abre('PA11')" class="btn btn-success btn-sm" style="width:100%">PA11</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="PA12" onclick="abre('PA12')" class="btn btn-success btn-sm" style="width:100%">PA12</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="PB1" onclick="abre('PB1')" class="btn btn-success btn-sm" style="width:100%">PB1</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="PB2" onclick="abre('PB2')" class="btn btn-success btn-sm" style="width:100%">PB2</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="PB3" onclick="abre('PB3')" class="btn btn-success btn-sm" style="width:100%">PB3</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="PB4" onclick="abre('PB4')" class="btn btn-success btn-sm" style="width:100%">PB4</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="PB5" onclick="abre('PB5')" class="btn btn-success btn-sm" style="width:100%">PB5</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="PB6" onclick="abre('PB6')" class="btn btn-success btn-sm" style="width:100%">PB6</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="PB7" onclick="abre('PB7')" class="btn btn-success btn-sm" style="width:100%">PB7</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="PB8" onclick="abre('PB8')" class="btn btn-success btn-sm" style="width:100%">PB8</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="PB9" onclick="abre('PB9')" class="btn btn-success btn-sm" style="width:100%">PB9</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="PB10" onclick="abre('PB10')" class="btn btn-success btn-sm" style="width:100%">PB10</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="PB11" onclick="abre('PB11')" class="btn btn-success btn-sm" style="width:100%">PB11</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="PB12" onclick="abre('PB12')" class="btn btn-success btn-sm" style="width:100%">PB12</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
							</tr>
							<tr><td colspan="18"><hr /></td></tr>
							<tr><td colspan="18"><hr /></td></tr>
							<tr>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="QA4" onclick="abre('QA4')" class="btn btn-success btn-sm" style="width:100%">QA4</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="QA5" onclick="abre('QA5')" class="btn btn-success btn-sm" style="width:100%">QA5</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="QA6" onclick="abre('QA6')" class="btn btn-success btn-sm" style="width:100%">QA6</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="QA6_1" onclick="abre('QA6.1')" class="btn btn-success btn-sm" style="width:100%">QA6.1</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="QA6_2" onclick="abre('QA6.2')" class="btn btn-success btn-sm" style="width:100%">QA6.2</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="QA7" onclick="abre('QA7')" class="btn btn-success btn-sm" style="width:100%">QA7</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="QA8" onclick="abre('QA8')" class="btn btn-success btn-sm" style="width:100%">QA8</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="QA9" onclick="abre('QA9')" class="btn btn-success btn-sm" style="width:100%">QA9</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="QA10" onclick="abre('QA10')" class="btn btn-success btn-sm" style="width:100%">QA10</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="QA11" onclick="abre('QA11')" class="btn btn-success btn-sm" style="width:100%">QA11</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="QA12" onclick="abre('QA12')" class="btn btn-success btn-sm" style="width:100%">QA12</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td colspan="3" rowspan="4"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%">IMPRESSORAS</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
							</tr>
							<tr><td colspan="15"><hr /></td></tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="Q1" onclick="abre('Q1')" class="btn btn-success btn-sm" style="width:100%">Q1</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="Q2" onclick="abre('Q2')" class="btn btn-success btn-sm" style="width:100%">Q2</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="Q3" onclick="abre('Q3')" class="btn btn-success btn-sm" style="width:100%">Q3</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="Q4" onclick="abre('Q4')" class="btn btn-success btn-sm" style="width:100%">Q4</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="Q5" onclick="abre('Q5')" class="btn btn-success btn-sm" style="width:100%">Q5</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="Q6" onclick="abre('Q6')" class="btn btn-success btn-sm" style="width:100%">Q6</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="Q7" onclick="abre('Q7')" class="btn btn-success btn-sm" style="width:100%">Q7</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="Q8" onclick="abre('Q8')" class="btn btn-success btn-sm" style="width:100%">Q8</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="Q9" onclick="abre('Q9')" class="btn btn-success btn-sm" style="width:100%">Q9</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="Q10" onclick="abre('Q10')" class="btn btn-success btn-sm" style="width:100%">Q10</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="Q11" onclick="abre('Q11')" class="btn btn-success btn-sm" style="width:100%">Q11</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="Q12" onclick="abre('Q12')" class="btn btn-success btn-sm" style="width:100%">Q12</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="Q13" onclick="abre('Q13')" class="btn btn-success btn-sm" style="width:100%">Q13</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="Q14" onclick="abre('Q14')" class="btn btn-success btn-sm" style="width:100%">Q14</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="R1" onclick="abre('R1')" class="btn btn-success btn-sm" style="width:100%">R1</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="R2" onclick="abre('R2')" class="btn btn-success btn-sm" style="width:100%">R2</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="R3" onclick="abre('R3')" class="btn btn-success btn-sm" style="width:100%">R3</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="R4" onclick="abre('R4')" class="btn btn-success btn-sm" style="width:100%">R4</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="R5" onclick="abre('R5')" class="btn btn-success btn-sm" style="width:100%">R5</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="R6" onclick="abre('R6')" class="btn btn-success btn-sm" style="width:100%">R6</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="R7" onclick="abre('R7')" class="btn btn-success btn-sm" style="width:100%">R7</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="R8" onclick="abre('R8')" class="btn btn-success btn-sm" style="width:100%">R8</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="R9" onclick="abre('R9')" class="btn btn-success btn-sm" style="width:100%">R9</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="R10" onclick="abre('R10')" class="btn btn-success btn-sm" style="width:100%">R10</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="R11" onclick="abre('R11')" class="btn btn-success btn-sm" style="width:100%">R11</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="R12" onclick="abre('R12')" class="btn btn-success btn-sm" style="width:100%">R12</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="R13" onclick="abre('R13')" class="btn btn-success btn-sm" style="width:100%">R13</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="R14" onclick="abre('R14')" class="btn btn-success btn-sm" style="width:100%">R14</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
							</tr>
							<tr><td colspan="20"><hr /></td></tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="S1" onclick="abre('S1')" class="btn btn-success btn-sm" style="width:100%">S1</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="S2" onclick="abre('S2')" class="btn btn-success btn-sm" style="width:100%">S2</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="S3"" onclick="abre('S3')" class="btn btn-success btn-sm" style="width:100%">S3</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="S4" onclick="abre('S4')" class="btn btn-success btn-sm" style="width:100%">S4</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="S5" onclick="abre('S5')" class="btn btn-success btn-sm" style="width:100%">S5</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="S6"" onclick="abre('S6')" class="btn btn-success btn-sm" style="width:100%">S6</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="S7" onclick="abre('S7')" class="btn btn-success btn-sm" style="width:100%">S7</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="S8" onclick="abre('S8')" class="btn btn-success btn-sm" style="width:100%">S8</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="S9" onclick="abre('S9')" class="btn btn-success btn-sm" style="width:100%">S9</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="S10" onclick="abre('S10')" class="btn btn-success btn-sm" style="width:100%">S10</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="S11" onclick="abre('S11')" class="btn btn-success btn-sm" style="width:100%">S11</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="S12" onclick="abre('S12')" class="btn btn-success btn-sm" style="width:100%">S12</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="S13" onclick="abre('S13')" class="btn btn-success btn-sm" style="width:100%">S13</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="S14" onclick="abre('S14')" class="btn btn-success btn-sm" style="width:100%">S14</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td colspan="3" rowspan="2"><a href="javascript:void(0)" id="MEETING3" onclick="abre('MEETING3')" class="btn btn-success btn-sm" style="width:100%">MEETING ROOM 3</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="T1" onclick="abre('T1')" class="btn btn-success btn-sm" style="width:100%">T1</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="T2" onclick="abre('T2')" class="btn btn-success btn-sm" style="width:100%">T2</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="T3" onclick="abre('T3')" class="btn btn-success btn-sm" style="width:100%">T3</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="T4" onclick="abre('T4')" class="btn btn-success btn-sm" style="width:100%">T4</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="T5" onclick="abre('T5')" class="btn btn-success btn-sm" style="width:100%">T5</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="T6" onclick="abre('T6')" class="btn btn-success btn-sm" style="width:100%">T6</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="T7" onclick="abre('T7')" class="btn btn-success btn-sm" style="width:100%">T7</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="T8" onclick="abre('T8')" class="btn btn-success btn-sm" style="width:100%">T8</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="T9" onclick="abre('T9')" class="btn btn-success btn-sm" style="width:100%">T9</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="T10" onclick="abre('T10')" class="btn btn-success btn-sm" style="width:100%">T10</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="T11" onclick="abre('T11')" class="btn btn-success btn-sm" style="width:100%">T11</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="T12" onclick="abre('T12')" class="btn btn-success btn-sm" style="width:100%">T12</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="T13" onclick="abre('T13')" class="btn btn-success btn-sm" style="width:100%">T13</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="T14" onclick="abre('T14')" class="btn btn-success btn-sm" style="width:100%">T14</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
							</tr>
							<tr><td colspan="20"><hr /></td></tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="U1" onclick="abre('U1')" class="btn btn-success btn-sm" style="width:100%">U1</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="U2" onclick="abre('U2')" class="btn btn-success btn-sm" style="width:100%">U2</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="U3" onclick="abre('U3')" class="btn btn-success btn-sm" style="width:100%">U3</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="U4" onclick="abre('U4')" class="btn btn-success btn-sm" style="width:100%">U4</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="U5" onclick="abre('U5')" class="btn btn-success btn-sm" style="width:100%">U5</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="U6" onclick="abre('U6')" class="btn btn-success btn-sm" style="width:100%">U6</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="U7" onclick="abre('U7')" class="btn btn-success btn-sm" style="width:100%">U7</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="U8" onclick="abre('U8')" class="btn btn-success btn-sm" style="width:100%">U8</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="U9" onclick="abre('U9')" class="btn btn-success btn-sm" style="width:100%">U9</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="U10" onclick="abre('U10')" class="btn btn-success btn-sm" style="width:100%">U10</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="U11" onclick="abre('U11')" class="btn btn-success btn-sm" style="width:100%">U11</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="U12" onclick="abre('U12')" class="btn btn-success btn-sm" style="width:100%">U12</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="U13" onclick="abre('U13')" class="btn btn-success btn-sm" style="width:100%">U13</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="U14" onclick="abre('U14')" class="btn btn-success btn-sm" style="width:100%">U14</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td colspan="3" rowspan="2"><a href="javascript:void(0)" id="MEETING4" onclick="abre('MEETING4')" class="btn btn-success btn-sm" style="width:100%">MEETING ROOM 4</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="V1" onclick="abre('V1')" class="btn btn-success btn-sm" style="width:100%">V1</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="V2" onclick="abre('V2')" class="btn btn-success btn-sm" style="width:100%">V2</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="V3" onclick="abre('V3')" class="btn btn-success btn-sm" style="width:100%">V3</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="V4" onclick="abre('V4')" class="btn btn-success btn-sm" style="width:100%">V4</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="V5" onclick="abre('V5')" class="btn btn-success btn-sm" style="width:100%">V5</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="V6" onclick="abre('V6')" class="btn btn-success btn-sm" style="width:100%">V6</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="V7" onclick="abre('V7')" class="btn btn-success btn-sm" style="width:100%">V7</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="V8" onclick="abre('V8')" class="btn btn-success btn-sm" style="width:100%">V8</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="V9" onclick="abre('V9')" class="btn btn-success btn-sm" style="width:100%">V9</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="V10" onclick="abre('V10')" class="btn btn-success btn-sm" style="width:100%">V10</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="V11" onclick="abre('V11')" class="btn btn-success btn-sm" style="width:100%">V11</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="V12" onclick="abre('V12')" class="btn btn-success btn-sm" style="width:100%">V12</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="V13" onclick="abre('V13')" class="btn btn-success btn-sm" style="width:100%">V13</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="V14" onclick="abre('V14')" class="btn btn-success btn-sm" style="width:100%">V14</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
							</tr>
							<tr><td colspan="20"><hr /></td></tr>
							<tr>
								<td colspan="3"><a href="javascript:void(0)" id="GAB7" onclick="abre('GAB7')" class="btn btn-success btn-sm" style="width:100%">GAB7</a></td>
								<td colspan="2"><a href="javascript:void(0)" id="GAB8" onclick="abre('GAB8')" class="btn btn-success btn-sm" style="width:100%">GAB8</a></td>
								<td colspan="3"><a href="javascript:void(0)" id="GAB9" onclick="abre('GAB9')" class="btn btn-success btn-sm" style="width:100%">GAB9</a></td>
								<td colspan="2"><a href="javascript:void(0)" id="GAB10" onclick="abre('GAB10')" class="btn btn-success btn-sm" style="width:100%">GAB10</a></td>
								<td colspan="3"><a href="javascript:void(0)" id="GAB11" onclick="abre('GAB11')" class="btn btn-success btn-sm" style="width:100%">GAB11</a></td>
								<td colspan="2"><a href="javascript:void(0)" id="GAB12" onclick="abre('GAB12')" class="btn btn-success btn-sm" style="width:100%">GAB12</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td colspan="3" rowspan="4"><a href="stock.php" class="btn btn-primary btn-sm" style="width:100%">ROOM IT</a></td>
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
			$("#footinfo").load("locationsfree.php?floor=1");
		});
	</script>
</body>

</html>
<?php
require "nucleo2.php";
?>