<?php 
$cred = explode('\\',$_SERVER);
if (count($cred) == 1) array_unshift($cred, "(no domain info - perhaps SSPIOmitDomain is On)");
list($domain, $user) = $cred;

echo "You appear to be user <B>$user</B><BR/>";
echo "logged into the Windows NT domain <B>$domain</B><BR/>"; 

echo $_SERVER['REMOTE_USER'];
echo "<br />";

echo $_SERVER['PHP_AUTH_USER'];

?>