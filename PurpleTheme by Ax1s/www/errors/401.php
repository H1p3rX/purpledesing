<?php 
require_once '../includes/config.php';

$page_name = basename($_SERVER["SCRIPT_NAME"], '.php');

echo ' <html> ';
echo ' <head> ';
echo ' <meta charset="utf-8"> ';
echo ' <meta http-equiv="refresh" content="10;url='. $web["link"] .'">';
echo ' <meta name="viewport" content="width=device-width, initial-scale=1">';
echo ' <link rel="stylesheet" type="text/css" href="'. $web["link"] .'assets/css/bootstrap.css"> ';
echo ' <link rel="stylesheet" type="text/css" href="'. $web["link"] .'assets/css/bootstrap.min.css"> ';
echo ' <link rel="stylesheet" type="text/css" href="'. $web["link"] .'assets/css/error.css"> ';
echo ' <link rel="icon" href="../assets/img/web/'. $web["icon"] .'" type="image/png"> '; 
echo ' <title>'. $web["name"] .' | '. $page_name .'</title> ';
echo ' </head> ';
echo ' <body> ';

echo ' <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />';
echo ' <div class="col-sm-12 error"> ';
echo ' <h1>Error '. $page_name .'</h1> ';
echo ' <p>You will be redirected to the main page in 10 seconds.</p> ';
echo ' <p>Contact please on <font style="font-weight:bold;">'. $web["mail"] .'</font> or  <font style="font-weight:bold;"><a style="text-decoration:none;" href="ts3server://'. $serverip .'?port='. $serverport .'">'. $serverip .':'. $serverport .'</a></font></p>';

echo ' </div> ';

require_once '../includes/footer.php';
echo ' </body> ';
echo ' </html> ';
?>
