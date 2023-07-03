<?php require "nucleo1.php"; 
$search=$db->prepare("SELECT * FROM locations WHERE location=?");
$search->execute(array($_GET['id']));
$result=$search->fetch(PDO::FETCH_ASSOC);
?>

	<div class="col-sm-4 text-center">
		<h1><small><i class="fa fa-map-marker"></i></small> <?php echo $result['location']; ?> <small><a href="location.php?loc=<?php echo $result['location']; ?>" class="btn btn-primary" style="float:right"><i class="fa fa-external-link"></i></a></small></h1>
		
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
	<div class="col-sm-4 text-center">
		<?php $assets=$db->prepare("SELECT a.*, b.serialno as dktsn, c.serialno as mtrsn FROM alocs as a LEFT JOIN computers as b ON a.name=b.name LEFT JOIN monitors as c ON a.name=c.name WHERE a.location=? AND a.type=? ORDER BY a.type ASC");
		$assets->execute(array($result['location'],"COMPUTER"));
		while($asset=$assets->fetch(PDO::FETCH_ASSOC)){ ?>
			<div class="row">
				<label class="col-sm-5 control-label text-right"><i class="fa fa-laptop"></i>&nbsp; computer</label>
				<h4 class="col-sm-7">&nbsp; <?php echo $asset['name']; ?></h4>
			</div>
			<div class="row">
				<label class="col-sm-5 control-label text-right"><i class="fa fa-barcode"></i>&nbsp; serial no.</label>
				<p class="col-sm-7">&nbsp; <?php echo $asset['dktsn']; ?></p>
			</div>
			<div class="row">
				<p class="col-sm-12">
					<?php
					$ps1='script2.ps1';
					print_r( $output = shell_exec('powershell -ExecutionPolicy ByPass -File "'.$ps1.'" -computerx "'.$asset['name'].'"') ); 
					
					$cpt=$db->prepare("SELECT * FROM computers WHERE name=?");
					$cpt->execute(array($asset['name']));
					$cp=$cpt->fetch(PDO::FETCH_ASSOC);
					
					echo "<br />".$cp['syncRAM']."<br />".$cp['syncOS']."<br />".$cp['syncPROCESSOR']."<br />".$cp['syncDATE'];
					?>
				</p>
			</div>
			
		<?php } ?>
	</div>
	<div class="col-sm-4 text-center">
		<?php $assets=$db->prepare("SELECT a.*, b.serialno as dktsn, c.serialno as mtrsn FROM alocs as a LEFT JOIN computers as b ON a.name=b.name LEFT JOIN monitors as c ON a.name=c.name WHERE a.location=? AND a.type=? ORDER BY a.type ASC");
		$assets->execute(array($result['location'],"MONITOR"));
		while($asset=$assets->fetch(PDO::FETCH_ASSOC)){ ?>
			<div class="row">
				<label class="col-sm-5 control-label text-right"><i class="fa fa-desktop"></i>&nbsp; monitor</label>
				<h4 class="col-sm-7">&nbsp; <?php echo $asset['name']; ?></h4>
			</div>
			<div class="row">
				<label class="col-sm-5 control-label text-right"><i class="fa fa-barcode"></i>&nbsp; serial no.</label>
				<p class="col-sm-7">&nbsp; <?php echo $asset['mtrsn']; ?></p>
			</div>
		<?php } ?>
	</div>