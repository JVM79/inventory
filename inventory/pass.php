<?php
/* --------------------------------------------------------------------
 * Script de Segurança & Passwords
 * v 1.0
 * --------------------------------------------------------------------
 * Desenvolvido por João Moita
 * 
 * --------------------------------------------------------------------
 */

//Soma o número de validação a cada caractére
function caractere($cc, $random)
{
	//Transforma Hexadecimal em Decimal para soma
	if($cc=="a") $cf=$random+10;
	elseif($cc=="b") $cf=$random+11;
	elseif($cc=="c") $cf=$random+12;
	elseif($cc=="d") $cf=$random+13;
	elseif($cc=="e") $cf=$random+14;
	elseif($cc=="f") $cf=$random+15;
	else $cf=$random+$cc;
	//Transforma Decimal em Hexadecimal para registo
	if($cf>15) $cf=$cf-16;
	elseif($cf==10) $cf="a";
	elseif($cf==11) $cf="b";
	elseif($cf==12) $cf="c";
	elseif($cf==13) $cf="d";
	elseif($cf==14) $cf="e";
	elseif($cf==15) $cf="f";
	return $cf;
}

//Cria uma nova string com hash e número de verificação
function password($pass)
{
	//Cria um número de verificação entre 1 e 9
	$b=rand(1,9);
	$hash=hash("sha1",$pass);
	$final="";
	for($y=0;$y<40;$y++)
	{
		$final.=caractere($hash[$y], $b);
		//Guarda o número de verificação na 21ª posição da string hexadecimal
		if($y==20) $final.=$b;
	}
	return $final;
}

//Lê o número de verificação e acrescenta à string para hash
function login($pass, $user)
{
	//Fazer a ligação à base de dados (DEVE FAZER A LIGAÇÃO CONFORME A ESTRUTURA DO SEU SITE)
	$db2 = new PDO('mysql:host=localhost;dbname=inventario2', 'admin', 'admin');
	$db2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
	$db2->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	$login=$db2->prepare("SELECT password FROM users WHERE username=?");
	$login->execute(array($user));
	$x=$login->fetchColumn();
	//Número de verificação é o 21º caractere da string com hash
	$b=$x[21];
	$hash=hash("sha1",$pass);
	$final="";
	for($y=0;$y<40;$y++)
	{
		$final.=caractere($hash[$y], $b);
		//Coloca o número de verificação na 21ª posição da string hexadecimal para comparação com original
		if($y==20) $final.=$b;
	}
	return $final;
}

?>