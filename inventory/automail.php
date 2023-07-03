<?php
require "nucleo1.php";
function datatobd($data)
{
	$d=explode("-",$data);
	$dat=$d[2]."-".$d[1]."-".$d[0];
	return $dat;
}


	$query=$db->prepare("SELECT * FROM loans WHERE dataout=? AND dataprevout<?");
	$query->execute(array("0000-00-00",date('Y-m-d')));
	while($ins=$query->fetch(PDO::FETCH_ASSOC)){
		// Multiple recipients
		$to = $ins['user'].'@gmail.com';
		$from = $_SERVER['PHP_AUTH_USER'].'@gmail.com';
		$cc = array("moitaman@gmail.com");
		// Subject
		$subject = 'Reminder Return Laptop';
		// Message
		$message = '
		<html>
		<head>
		  <title>Reminder Return Laptop</title>
		</head>
		<body style="font-family: Tahoma, sans-serif">
		  <p>Hello '.$ins['user'].'!</p>
		  <p>This email is to remind that you have to return the laptop <strong>'.$ins['name'].'</strong>.
		  <p>The loan date has expired on <strong>'.$ins['dataprevout'].'</strong>.</p>
		  <p>If you need to extend return date, please inform us replying to this email.</p>
		  <p>Thank you.</p>
		  <p><i>Best regards.<br />Your IT Department</i></p>
		</body>
		</html>
		';
		// Mail it
		$mail=enviaemail($to, $from, $message, $subject, $cc);
		if($mail) echo '<div class="alert alert-info">Email was sent!</div>';
		else echo '<div class="alert alert-danger">An error has occurred with email!</div>';
	}
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