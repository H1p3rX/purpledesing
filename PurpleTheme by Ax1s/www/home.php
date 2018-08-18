<?php
require_once 'includes/header.php';
require_once 'includes/servers/mc/index.php';

echo ' <div class="container"> ';
echo ' <div class="row"> ';
echo ' <div style="margin-top: 10%;color:white" class="col-sm-12 zoom text-center"> ';
echo ' <h1><a style="text-decoration:none; font-weight:bold;text-shadow: 2px 4px 10px #b000e6;" href="home">'. $web["name"] .'</a></h1> ';
echo ' <h2><a style="text-decoration:none; font-weight:bold;text-shadow: 2px 4px 10px #b000e6;" href="home">'. $web["text"] .'</a></h2> ';
echo ' </div> ';
echo ' </div> ';
echo ' </div> ';


echo ' <div class="container"> ';
echo ' <div style="margin-top: 60px" class="row"> ';
echo ' <div class="col-sm-5 tblack"> ';
echo ' <h2 style="color:white;margin-top: 15px;">Minecraft</h2> ';
echo ' <table class="table table-striped"> ';
echo ' <tbody> ';

echo ' <tr><h5 style="color:white;"><b style="color:#800080">ServerIP:</b> <a style="text-decoration:none;" href="#">'. $SERVER_IP .':'. $PORT .'</a></h5></tr> ';
echo ' <tr><h5 style="color:white;"><b style="color:#800080">Version:</b> <a style="text-decoration:none;" href="#">'. $data['version']['name'] .'</a></h5></tr> ';
echo ' <tr><h5 style="color:white;"><b style="color:#800080">Players:</b> <font style="color:#22ea10">'. $data['players']['online']. '</font> / <font style="color:#ea1010">'. $data['players']['max'] .'</font></a></h5></tr> ';
        
echo ' <tr><h5 style="color:white;"><b style="color:#800080">Status:</b>  ';

if($status == 'online') { echo "<a style='text-decoration:none;' href='#'>Server online.</a>"; } 
else { echo "Server offline.";}

echo ' </a></h5></tr> ';

	    
echo ' </tbody> ';
echo ' </table> ';
echo ' </div> ';

echo ' <div class="col-sm-2"></div> ';

echo ' <div class="col-sm-5 tblack"> ';
echo ' <h2 style="color:white;margin-top: 15px;"> TeamSpeak3</h2> ';

require_once 'includes/ts3status.php';

echo ' </div> ';
echo ' </div> ';
echo ' </div> ';


echo ' <div class="container"> ';
echo ' <div class="row"> ';
echo ' <div style="margin-top: 30px; margin-bottom: 10px;" class="col-sm-12 tblack"> ';
	
echo ' <h2 class="text-center" style="margin-top: 30px; color:#800080"><font style="color:white;font-weight:bold;">|></font>  News  <font style="color:white;font-weight:bold;"><|</font> </h2></br> ';


echo ' </div> ';


echo ' <div class="col-md-6"> ';
echo ' <div style="margin-bottom: 20px;margin-right: 2px;" class="tblack"> ';
echo ' </br> ';
echo ' <h3 style="text-align:center;color:#cc00cc"><font style="color:white;font-weight:bold;">>|</font>HTML5, CSS, JS Template<font style="color:white;font-weight:bold;">|<</font></h3> ';
echo ' <p style="text-align:center;color:gray">The new minecraft web template is a game design written in the programming language HTML5, CSS3, JS, PHP5.6
       <p><div class="owner"></div><h6 style="margin-left: 7.5%;"><a style="text-decoration:none" href="team">Ax1s</a> | 11.8
       <a style="text-decoration:none;font-size: 20px; margin-left: 60%;" href="news">More >></a></h6></p> ';
echo ' </p> ';
echo ' </br> ';
echo ' </div> ';
echo ' </div> ';

echo ' <div class="col-md-6"> ';
echo ' <div style="margin-bottom: 20px;margin-right: 2px;" class="tblack"> ';
echo ' </br> ';
echo ' <h3 style="text-align:center;color:#cc00cc"><font style="color:white;font-weight:bold;">>|</font>HTML5, CSS, JS Template<font style="color:white;font-weight:bold;">|<</font></h3> ';
echo ' <p style="text-align:center;color:gray">The new minecraft web template is a game design written in the programming language HTML5, CSS3, JS, PHP5.6
       <p><div class="owner"></div><h6 style="margin-left: 7.5%;"><a style="text-decoration:none" href="team">Ax1s</a> | 11.8
       <a style="text-decoration:none;font-size: 20px; margin-left: 60%;" href="news">More >></a></h6></p> ';
echo ' </p> ';
echo ' </br> ';
echo ' </div> ';
echo ' </div> ';

echo ' <div class="col-md-6"> ';
echo ' <div style="margin-bottom: 20px;margin-right: 2px;" class="tblack"> ';
echo ' </br> ';
echo ' <h3 style="text-align:center;color:#cc00cc"><font style="color:white;font-weight:bold;">>|</font>HTML5, CSS, JS Template<font style="color:white;font-weight:bold;">|<</font></h3> ';
echo ' <p style="text-align:center;color:gray">The new minecraft web template is a game design written in the programming language HTML5, CSS3, JS, PHP5.6
       <p><div class="owner"></div><h6 style="margin-left: 7.5%;"><a style="text-decoration:none" href="team">Ax1s</a> | 11.8
       <a style="text-decoration:none;font-size: 20px; margin-left: 60%;" href="news">More >></a></h6></p> ';
echo ' </p> ';
echo ' </br> ';
echo ' </div> ';
echo ' </div> ';

echo ' <div class="col-md-6"> ';
echo ' <div style="margin-bottom: 20px;margin-right: 2px;" class="tblack"> ';
echo ' </br> ';
echo ' <h3 style="text-align:center;color:#cc00cc"><font style="color:white;font-weight:bold;">>|</font>HTML5, CSS, JS Template<font style="color:white;font-weight:bold;">|<</font></h3> ';
echo ' <p style="text-align:center;color:gray">The new minecraft web template is a game design written in the programming language HTML5, CSS3, JS, PHP5.6
       <p><div class="owner"></div><h6 style="margin-left: 7.5%;"><a style="text-decoration:none" href="team">Ax1s</a> | 11.8
       <a style="text-decoration:none;font-size: 20px; margin-left: 60%;" href="news">More >></a></h6></p> ';
echo ' </p> ';
echo ' </br> ';
echo ' </div> ';
echo ' </div> ';


echo ' </div> ';
echo ' </div> ';


require_once 'includes/footer.php';
?>