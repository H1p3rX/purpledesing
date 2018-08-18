<?php
    // load framework library
	require_once 'servers/ts3/TeamSpeak3.php';

    
    try {
        //connect serverquery.
        $ts3_VirtualServer = TeamSpeak3::factory("serverquery://$serverquery_username:$serverquery_pass@$serverip:$serverquery_port/?server_port=$serverport");
        
        echo ' <tr><h5 style="color:white;"><b style="color:#800080">ServerIP:</b> <a style="text-decoration:none;" href="ts3server://'. $serverip .'?port='. $serverport .'">'. $serverip .':'. $serverport .'</a></h5></tr>';
        echo ' <tr><h5 style="color:white;"><b style="color:#800080">Version:</b> <a style="text-decoration:none;" href="#">'. $serverversion .'</a></h5></tr> ';
        echo ' <h5 style="color:white;"><b style="color:#800080">Online:</b> <font style="color:#22ea10">'. $ts3_VirtualServer->virtualserver_clientsonline .'</font> / <font style="color:#ea1010">'. $ts3_VirtualServer->virtualserver_maxclients;
        echo '<tr><h5 style="color:white"> <b style="color:#800080">Status:</b> <a style="text-decoration:none;" href="#">Server online.</a></h5></tr></font>';
        }
    
    catch(Exception $e){
        echo '<tr><h5 style="color:white"> <b style="color:#800080">Status:</b> <a style="text-decoration:none;" href="#">Server offline.</a></h5></tr>';
    }

?>