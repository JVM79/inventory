<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$ps1='script.ps1';
$process="Start-Process powershell.exe -argumentlist '-File ".$ps1." -x PTC14DKT111'";
echo $output = shell_exec('powershell -command "'.$process.'"');
					
print_r($output);


?>
