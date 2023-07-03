<?php require "nucleo1.php"; 
if($_GET['show']=="users"){
	$search=$db->prepare("SELECT location, user FROM locations WHERE floor=?");
	$search->execute(array($_GET['floor']));
	while($result=$search->fetch(PDO::FETCH_ASSOC)){
		$res=str_replace(".","_",$result['location']);
		if($result['user']!=""){
			$usr=str_replace(".","<br />",$result['user']);
		?>
		<script>
			$("#<?php echo $res; ?>").attr("style","width:100%;font-size:60%;word-wrap:break-word;").html("<?php echo $usr; ?>");
		</script>
		<?php
		}
	}		
}elseif($_GET['show']=="locations"){
	$search=$db->prepare("SELECT location, user FROM locations WHERE floor=?");
	$search->execute(array($_GET['floor']));
	while($result=$search->fetch(PDO::FETCH_ASSOC)){
		$res=str_replace(".","_",$result['location']);
		?>
		<script>
			$("#<?php echo $res; ?>").attr("style","width:100%;").html("<?php echo $res; ?>");
		</script>
		<?php
	}		
}elseif($_GET['show']=="computers"){
	$search=$db->prepare("SELECT location FROM locations WHERE floor=?");
	$search->execute(array($_GET['floor']));
	while($res=$search->fetchColumn()){
		$various="";
		$search2=$db->prepare("SELECT name FROM alocs WHERE location=? AND type=?");
		$search2->execute(array($res,"COMPUTER"));
		while($result2=$search2->fetchColumn()){
			$various.=$result2."<br />";
		}
		if($various!="") $name=$various;
		else $name=$res;
		$res=str_replace(".","_",$res);
		?>
		<script>
			$("#<?php echo $res; ?>").attr("style","width:100%;font-size:60%;word-wrap:break-word;").html("<?php echo $name; ?>");
		</script>
		<?php
	}		
}elseif($_GET['show']=="monitors"){
	$search=$db->prepare("SELECT location FROM locations WHERE floor=?");
	$search->execute(array($_GET['floor']));
	while($res=$search->fetchColumn()){
		$various="";
		$search2=$db->prepare("SELECT name FROM alocs WHERE location=? AND type=?");
		$search2->execute(array($res,"MONITOR"));
		while($result2=$search2->fetchColumn()){
			$various.=$result2."<br />";
		}
		if($various!="") $name=$various;
		else $name=$res;
		$res=str_replace(".","_",$res);
		?>
		<script>
			$("#<?php echo $res; ?>").attr("style","width:100%;font-size:60%;word-wrap:break-word;").html("<?php echo $name; ?>");
		</script>
		<?php
	}		
}else{
	$search=$db->prepare("SELECT a.location, a.user, b.name FROM locations as a LEFT JOIN alocs as b ON a.location=b.location WHERE a.floor=? AND (a.user=? OR a.location NOT IN (SELECT location FROM alocs))");
	$search->execute(array($_GET['floor'],""));
	while($result=$search->fetch(PDO::FETCH_ASSOC)){
		$res=str_replace(".","_",$result['location']);
		if($result['user']!="" || $result['name']!="") $color="danger";
		else $color="warning";
	?>
	<script>
		$("#<?php echo $res; ?>").removeClass("btn-success").addClass("btn-<?php echo $color; ?>");
	</script>
	<?php
	}
}
?>
<h4 class="col-md-12 text-center">Please select a location on Map</h4>