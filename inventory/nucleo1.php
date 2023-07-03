<?php
session_start();
ini_set('display_errors', 0);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmail/PHPMailer.php';
require 'phpmail/Exception.php';
require 'phpmail/SMTP.php';

$db = new PDO('mysql:host=localhost;dbname=inventario2', 'admin', 'admin');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

function enviaemail($to, $from, $message, $assunto, $cc)
{
	mail($to, $assunto, $message);
}
?>