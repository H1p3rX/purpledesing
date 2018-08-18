<?php

/* web setings */

$web["name"] = 'InSites.sk';
$web["text"] = 'Play with us';
$web["link"] = 'http://webmc.gamingzone.sk/';
$web["mail"] = 'you@mail.com';
$web["icon"] = 'webicon.png';

$web["timezone"] = 'H:i:s'; //curently set AM (24h), you timezone AM (12H) ? please write  > g:i a <


/* Minecraft server setings */
$SERVER_IP 	= 'play.insites.sk';
$PORT = '25629';

/* TeamSpeak3 server seting */
$serverquery_username = "none"; //Serverquery login username
$serverquery_pass = "password"; //Serverquery login password
$serverip = "speakteam.eu"; //Teamspeak 3 server IP, only IP not port
$serverquery_port = "10011"; //Serverquery port
$serverport = "1341"; //Teamspeak 3 server port
$serverversion = '3.0.13.6';


/* BanList MySQL Settings powered by MaxBans  */

$dbhost = 'localhost'; //host
$dbuser = 'root'; //user
$dbpass = 'password'; //password
$dbname = 'database'; //database

//banlist connection database dont rewrite!
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$conn->set_charset("utf8");

?>
