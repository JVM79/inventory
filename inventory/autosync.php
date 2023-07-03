<?php
require "nucleo1.php";

$query=$db->prepare("SELECT * FROM syncps LIMIT 0,1");
$query->execute();
$sync=$query->fetch(PDO::FETCH_ASSOC);

if($sync['lastRow']>$sync['totalRows']) $numRows=0;
else $numRows=$sync['lastRow'];

echo date('H:i:s')."<br />";
	$query=$db->prepare("SELECT * FROM computers WHERE name NOT IN (SELECT nome FROM abate) AND name NOT IN (SELECT name FROM loans WHERE dataout=?) ORDER BY name ASC LIMIT ".$numRows.",".$sync['numRows']);
	$query->execute(array("0000-00-00"));
	while($ins=$query->fetch(PDO::FETCH_ASSOC)){
		$ps1='script.ps1';
		$output = shell_exec('powershell -ExecutionPolicy ByPass -File "'.$ps1.'" -computerx "'.$ins['name'].'"');
		if($output=="offline\n") {
			echo "<br />";
		}else{
			$dados=explode("<br />",$output);
			$query2=$db->prepare("UPDATE computers SET syncRAM=?, syncOS=?, syncPROCESSOR=?, syncDATE=? WHERE name=?");
			$query2->execute(array($dados[0],$dados[1],$dados[2],date('Y-m-d H:i:s'),$ins['name']));
		}
	}
echo date('H:i:s');

$query=$db->prepare("SELECT COUNT(*) as numero FROM computers");
$query->execute();
$all=$query->fetchColumn();

$query=$db->prepare("UPDATE syncps SET totalRows=?, lastRow=?, lastSync=?");
$query->execute(array($all,($numRows+$sync['numRows']),date('Y-m-d H:i:s')));
?>
<html>
<head>
<script>
function closeWindow() {
  window.close();
}
setTimeout(closeWindow(), 20000);
</script>
</head>
<body>
</body>