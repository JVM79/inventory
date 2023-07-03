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
                    <h3 class="text-primary">GLOBAL SUPPORT SOLUTION CENTER</h3> </div>
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
							<a href="javascript:void(0)" id="showlocations" onclick="$('#footinfo').load('locationsfree.php?floor=GSS&show=locations');" class="btn btn-primary btn" style="width:100%;margin:5px;"><i class="fa fa-map-marker"></i> &nbsp;Show Locations</a>
							<a href="javascript:void(0)" id="showusers" onclick="$('#footinfo').load('locationsfree.php?floor=GSS&show=users');" class="btn btn-primary btn" style="width:100%;margin:5px;"><i class="fa fa-users"></i> &nbsp;Show Users</a>
							<a href="javascript:void(0)" id="showcomputers" onclick="$('#footinfo').load('locationsfree.php?floor=GSS&show=computers');" class="btn btn-primary btn" style="width:100%;margin:5px;"><i class="fa fa-laptop"></i> &nbsp;Show Computers</a>
							<a href="javascript:void(0)" id="showmonitors" onclick="$('#footinfo').load('locationsfree.php?floor=GSS&show=monitors');" class="btn btn-primary btn" style="width:100%;margin:5px;"><i class="fa fa-desktop"></i> &nbsp;Show Monitors</a>
						</div>
						<table>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC1" onclick="abre('GSSC1')" class="btn btn-success btn-sm" style="width:100%">GSSC1</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC2" onclick="abre('GSSC2')" class="btn btn-success btn-sm" style="width:100%">GSSC2</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC3" onclick="abre('GSSC3')" class="btn btn-success btn-sm" style="width:100%">GSSC3</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC4" onclick="abre('GSSC4')" class="btn btn-success btn-sm" style="width:100%">GSSC4</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC5" onclick="abre('GSSC5')" class="btn btn-success btn-sm" style="width:100%">GSSC5</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC6" onclick="abre('GSSC6')" class="btn btn-success btn-sm" style="width:100%">GSSC6</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC7" onclick="abre('GSSC7')" class="btn btn-success btn-sm" style="width:100%">GSSC7</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC8" onclick="abre('GSSC8')" class="btn btn-success btn-sm" style="width:100%">GSSC8</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC9" onclick="abre('GSSC9')" class="btn btn-success btn-sm" style="width:100%">GSSC9</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC10" onclick="abre('GSSC10')" class="btn btn-success btn-sm" style="width:100%">GSSC10</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC11" onclick="abre('GSSC11')" class="btn btn-success btn-sm" style="width:100%">GSSC11</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC12" onclick="abre('GSSC12')" class="btn btn-success btn-sm" style="width:100%">GSSC12</a></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC13" onclick="abre('GSSC13')" class="btn btn-success btn-sm" style="width:100%">GSSC13</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC14" onclick="abre('GSSC14')" class="btn btn-success btn-sm" style="width:100%">GSSC14</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC15" onclick="abre('GSSC15')" class="btn btn-success btn-sm" style="width:100%">GSSC15</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC16" onclick="abre('GSSC16')" class="btn btn-success btn-sm" style="width:100%">GSSC16</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC17" onclick="abre('GSSC17')" class="btn btn-success btn-sm" style="width:100%">GSSC17</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC18" onclick="abre('GSSC18')" class="btn btn-success btn-sm" style="width:100%">GSSC18</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC19" onclick="abre('GSSC19')" class="btn btn-success btn-sm" style="width:100%">GSSC19</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC20" onclick="abre('GSSC20')" class="btn btn-success btn-sm" style="width:100%">GSSC20</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC21" onclick="abre('GSSC21')" class="btn btn-success btn-sm" style="width:100%">GSSC21</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC22" onclick="abre('GSSC22')" class="btn btn-success btn-sm" style="width:100%">GSSC22</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC23" onclick="abre('GSSC23')" class="btn btn-success btn-sm" style="width:100%">GSSC23</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC24" onclick="abre('GSSC24')" class="btn btn-success btn-sm" style="width:100%">GSSC24</a></td>
							</tr>
							<tr>
								<td colspan="17"><hr /></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC25" onclick="abre('GSSC25')" class="btn btn-success btn-sm" style="width:100%">GSSC25</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC26" onclick="abre('GSSC26')" class="btn btn-success btn-sm" style="width:100%">GSSC26</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC27" onclick="abre('GSSC27')" class="btn btn-success btn-sm" style="width:100%">GSSC27</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC28" onclick="abre('GSSC28')" class="btn btn-success btn-sm" style="width:100%">GSSC28</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC29" onclick="abre('GSSC29')" class="btn btn-success btn-sm" style="width:100%">GSSC29</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC30" onclick="abre('GSSC30')" class="btn btn-success btn-sm" style="width:100%">GSSC30</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC31" onclick="abre('GSSC31')" class="btn btn-success btn-sm" style="width:100%">GSSC31</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC32" onclick="abre('GSSC32')" class="btn btn-success btn-sm" style="width:100%">GSSC32</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC33" onclick="abre('GSSC33')" class="btn btn-success btn-sm" style="width:100%">GSSC33</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC34" onclick="abre('GSSC34')" class="btn btn-success btn-sm" style="width:100%">GSSC34</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC35" onclick="abre('GSSC35')" class="btn btn-success btn-sm" style="width:100%">GSSC35</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC36" onclick="abre('GSSC36')" class="btn btn-success btn-sm" style="width:100%">GSSC36</a></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC37" onclick="abre('GSSC37')" class="btn btn-success btn-sm" style="width:100%">GSSC37</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC38" onclick="abre('GSSC38')" class="btn btn-success btn-sm" style="width:100%">GSSC38</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC39" onclick="abre('GSSC39')" class="btn btn-success btn-sm" style="width:100%">GSSC39</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC40" onclick="abre('GSSC40')" class="btn btn-success btn-sm" style="width:100%">GSSC40</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC41" onclick="abre('GSSC41')" class="btn btn-success btn-sm" style="width:100%">GSSC41</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC42" onclick="abre('GSSC42')" class="btn btn-success btn-sm" style="width:100%">GSSC42</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC43" onclick="abre('GSSC43')" class="btn btn-success btn-sm" style="width:100%">GSSC43</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC44" onclick="abre('GSSC44')" class="btn btn-success btn-sm" style="width:100%">GSSC44</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC45" onclick="abre('GSSC45')" class="btn btn-success btn-sm" style="width:100%">GSSC45</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC46" onclick="abre('GSSC46')" class="btn btn-success btn-sm" style="width:100%">GSSC46</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC47" onclick="abre('GSSC47')" class="btn btn-success btn-sm" style="width:100%">GSSC47</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC48" onclick="abre('GSSC48')" class="btn btn-success btn-sm" style="width:100%">GSSC48</a></td>
							</tr>
							<tr>
								<td colspan="17"><hr /></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC49" onclick="abre('GSSC49')" class="btn btn-success btn-sm" style="width:100%">GSSC49</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC50" onclick="abre('GSSC50')" class="btn btn-success btn-sm" style="width:100%">GSSC50</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC51" onclick="abre('GSSC51')" class="btn btn-success btn-sm" style="width:100%">GSSC51</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC52" onclick="abre('GSSC52')" class="btn btn-success btn-sm" style="width:100%">GSSC52</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC53" onclick="abre('GSSC53')" class="btn btn-success btn-sm" style="width:100%">GSSC53</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC54" onclick="abre('GSSC54')" class="btn btn-success btn-sm" style="width:100%">GSSC54</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC55" onclick="abre('GSSC55')" class="btn btn-success btn-sm" style="width:100%">GSSC55</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC56" onclick="abre('GSSC56')" class="btn btn-success btn-sm" style="width:100%">GSSC56</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC57" onclick="abre('GSSC57')" class="btn btn-success btn-sm" style="width:100%">GSSC57</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC58" onclick="abre('GSSC58')" class="btn btn-success btn-sm" style="width:100%">GSSC58</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC59" onclick="abre('GSSC59')" class="btn btn-success btn-sm" style="width:100%">GSSC59</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC60" onclick="abre('GSSC60')" class="btn btn-success btn-sm" style="width:100%">GSSC60</a></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC61" onclick="abre('GSSC61')" class="btn btn-success btn-sm" style="width:100%">GSSC61</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC62" onclick="abre('GSSC62')" class="btn btn-success btn-sm" style="width:100%">GSSC62</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC63" onclick="abre('GSSC63')" class="btn btn-success btn-sm" style="width:100%">GSSC63</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC64" onclick="abre('GSSC64')" class="btn btn-success btn-sm" style="width:100%">GSSC64</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC65" onclick="abre('GSSC65')" class="btn btn-success btn-sm" style="width:100%">GSSC65</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC66" onclick="abre('GSSC66')" class="btn btn-success btn-sm" style="width:100%">GSSC66</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC67" onclick="abre('GSSC67')" class="btn btn-success btn-sm" style="width:100%">GSSC67</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC68" onclick="abre('GSSC68')" class="btn btn-success btn-sm" style="width:100%">GSSC68</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC69" onclick="abre('GSSC69')" class="btn btn-success btn-sm" style="width:100%">GSSC69</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC70" onclick="abre('GSSC70')" class="btn btn-success btn-sm" style="width:100%">GSSC70</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC71" onclick="abre('GSSC71')" class="btn btn-success btn-sm" style="width:100%">GSSC71</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC72" onclick="abre('GSSC72')" class="btn btn-success btn-sm" style="width:100%">GSSC72</a></td>
							</tr>
							<tr>
								<td colspan="17"><hr /></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC73" onclick="abre('GSSC73')" class="btn btn-success btn-sm" style="width:100%">GSSC73</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC74" onclick="abre('GSSC74')" class="btn btn-success btn-sm" style="width:100%">GSSC74</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC75" onclick="abre('GSSC75')" class="btn btn-success btn-sm" style="width:100%">GSSC75</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC76" onclick="abre('GSSC76')" class="btn btn-success btn-sm" style="width:100%">GSSC76</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC77" onclick="abre('GSSC77')" class="btn btn-success btn-sm" style="width:100%">GSSC77</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC78" onclick="abre('GSSC78')" class="btn btn-success btn-sm" style="width:100%">GSSC78</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC79" onclick="abre('GSSC79')" class="btn btn-success btn-sm" style="width:100%">GSSC79</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC80" onclick="abre('GSSC80')" class="btn btn-success btn-sm" style="width:100%">GSSC80</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC81" onclick="abre('GSSC81')" class="btn btn-success btn-sm" style="width:100%">GSSC81</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC82" onclick="abre('GSSC82')" class="btn btn-success btn-sm" style="width:100%">GSSC82</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC83" onclick="abre('GSSC83')" class="btn btn-success btn-sm" style="width:100%">GSSC83</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC84" onclick="abre('GSSC84')" class="btn btn-success btn-sm" style="width:100%">GSSC84</a></td>
							</tr>
							<tr>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC85" onclick="abre('GSSC85')" class="btn btn-success btn-sm" style="width:100%">GSSC85</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC86" onclick="abre('GSSC86')" class="btn btn-success btn-sm" style="width:100%">GSSC86</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC87" onclick="abre('GSSC87')" class="btn btn-success btn-sm" style="width:100%">GSSC87</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC88" onclick="abre('GSSC88')" class="btn btn-success btn-sm" style="width:100%">GSSC88</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC89" onclick="abre('GSSC89')" class="btn btn-success btn-sm" style="width:100%">GSSC89</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC90" onclick="abre('GSSC90')" class="btn btn-success btn-sm" style="width:100%">GSSC90</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC91" onclick="abre('GSSC91')" class="btn btn-success btn-sm" style="width:100%">GSSC91</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC92" onclick="abre('GSSC92')" class="btn btn-success btn-sm" style="width:100%">GSSC92</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC93" onclick="abre('GSSC93')" class="btn btn-success btn-sm" style="width:100%">GSSC93</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC94" onclick="abre('GSSC94')" class="btn btn-success btn-sm" style="width:100%">GSSC94</a></td>
								<td style="width:50px"><a href="#" class="btn btn-default btn-sm btn-outline" style="width:100%"></a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC95" onclick="abre('GSSC95')" class="btn btn-success btn-sm" style="width:100%">GSSC95</a></td>
								<td style="width:50px"><a href="javascript:void(0)" id="GSSC96" onclick="abre('GSSC96')" class="btn btn-success btn-sm" style="width:100%">GSSC96</a></td>
							</tr>
							<tr>
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
			$("#footinfo").load("locationsfree.php?floor=GSS");
		});
	</script>
</body>

</html>
<?php
require "nucleo2.php";
?>