<?php 
require_once 'config.php';

$page_name = basename($_SERVER["SCRIPT_NAME"], '.php');

echo ' <html> ';
echo ' <head> ';
echo ' <meta charset="utf-8"> ';
echo ' <meta name="viewport" content="width=device-width, initial-scale=1">';
echo ' <link rel="stylesheet" type="text/css" href="'. $web["link"] .'assets/css/bootstrap.css"> ';
echo ' <link rel="stylesheet" type="text/css" href="'. $web["link"] .'assets/css/bootstrap.min.css"> ';
echo ' <link rel="stylesheet" type="text/css" href="'. $web["link"] .'assets/css/main.css"> ';
echo ' <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">';
echo ' <link rel="icon" href="'. $web["link"] .'assets/img/web/'. $web["icon"] .'" type="image/png"> '; 
echo ' <title>'. $web["name"] .' | '. ucfirst("$page_name") .'</title> ';
echo ' </head> ';
echo ' <body> ';


echo ' <nav class="navbar navbar-expand-lg tblack"> ';
echo ' <div class="container"> ';
echo ' <font class="navbar-brand" style="font-weight:bold;"> Welcome to <a style="text-decoration:none" href="#">'. $web["name"] .'</a></font> ';
echo ' <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> ';
echo ' <span class="navbar-toggler-icon"><i style="color:#b300b3" class="fa fa-align-justify"></i></span> ';
echo ' </button> ';

echo ' <div class="collapse navbar-collapse" id="navbarResponsive"> ';

echo ' <ul class="navbar-nav ml-auto"> ';

if ($page_name == "home") echo '<li class="nav-item"> <a style="font-weight:bold;color:#b300b3" class="nav-link" href="'. $web["link"] .'"> Home</a></li>';
    else echo ' <li class="nav-item"> <a  class="nav-link" href="'. $web["link"] .'"> Home</a></li> ';

if ($page_name == "news") echo '<li class="nav-item"> <a style="font-weight:bold;color:#b300b3" class="nav-link" href="'. $web["link"] .'news"> News</a></li>';
    else echo ' <li class="nav-item"> <a class="nav-link" href="'. $web["link"] .'news"> News</a></li> ';

if ($page_name == "vip") echo '<li class="nav-item"> <a style="font-weight:bold;color:#b300b3" class="nav-link" href="'. $web["link"] .'vip"> VIP</a></li>';
    else echo ' <li class="nav-item"> <a class="nav-link" href="'. $web["link"] .'vip"> VIP</a></li> ';

if ($page_name == "team") echo '<li class="nav-item"> <a style="font-weight:bold;color:#b300b3" class="nav-link" href="'. $web["link"] .'team"> Team</a></li>';
    else echo ' <li class="nav-item"> <a class="nav-link" href="'. $web["link"] .'team"> Team</a></li> ';

if ($page_name == "banlist") echo '<li class="nav-item"> <a style="font-weight:bold;color:#b300b3" class="nav-link" href="'. $web["link"] .'banlist"> BanList</a></li>';
    else echo ' <li class="nav-item"> <a class="nav-link" href="'. $web["link"] .'banlist"> BanList</a></li> ';

if ($page_name == "contact") echo '<li class="nav-item"> <a style="font-weight:bold;color:#b300b3" class="nav-link" href="'. $web["link"] .'contact"> Contact</a></li>';
    else echo ' <li class="nav-item"> <a class="nav-link" href="'. $web["link"] .'contact"> Contact</a></li> ';



echo ' </ul> ';
echo ' </div> ';
echo ' </div> ';
echo ' </nav> ';


echo ' </body> ';
echo ' </html> ';
?>