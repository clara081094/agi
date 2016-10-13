#!/usr/bin/php -q
<?php
require_once ('/var/www/html/funciones.php');
require 'phpagi.php';
$agi    = new AGI();
$mensaje = $argv[1];
$fecha =  $argv[2];
$numero = $argv[3];

//$numero = "930465054";
//$fecha = "2016-10-10 17:59:04";
//$mensaje = "holisfolis";
//echo $numero;

$sms=new Funciones();
$sms->ingresarMensajes($mensaje,$numero,$fecha);

//$sql="insert into Mensajes (texto,numero,fecha) values ('".$mensaje."','".$numero."','".$fecha."')"; 
?>
