#!/usr/bin/php -q
<?php
require_once ('/var/www/html/funciones_conf.php');
require_once ('/var/www/html/conferencia.php');
require 'phpagi.php';

$agi    = new AGI();
$horai = $argv[1];
$fecha = $argv[2];

$conf=new Funconf();

$codigo=intval($conf->conferenciaActiva());
//echo "resultado: ".(string)$codigo."\n";
if($codigo==0)
{
   //echo "esta en el if";
   $conferencia=new Conferencia();
   $conferencia->setHoraI($horai);
   $conferencia->setFecha($fecha);
   $conf->insertarConferencia($conferencia);
}
?>
