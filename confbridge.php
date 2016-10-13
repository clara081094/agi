#!/usr/bin/php -q
<?php
require 'phpagi.php';
//$agi    = new AGI();
//$mensaje = $argv[1];

//echo "Este es lo que se marco: ".$mensaje;
echo "\nholi\n";

$errno = "admin";
$errstr = "amp111";
$timeout = "30";
while(true){

$socket = fsockopen("192.168.1.50","5038", $errno, $errstr, $timeout);
echo "\nEste es socket: ".$socket;

if ($socket!=null){
echo "\nEntra aca\n";
fputs($socket, "Action: Login\r\n");
fputs($socket, "UserName: admin\r\n");
fputs($socket, "Secret: amp111\r\n\r\n");
//fputs($socket, "Action: ConfbridgeList\r\n");
//fputs($socket, "Conference: 1\r\n\r\n");
//fputs($socket, "Action: Logoff\r\n\r\n");

 while (!feof($socket)) {
    $wrets = fread($socket, 4096);
    $lines=explode("\n", $wrets);
    for($i=0;$i<sizeof($lines);$i++)
    {
	echo $lines[$i]."\n";
    }
 }
}}
fclose($socket);


?>
