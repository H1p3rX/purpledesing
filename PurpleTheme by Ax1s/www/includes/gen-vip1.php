<?php 
require_once 'header.php';


$a = $_GET[a];
 
echo ' <div class="container"> ';

echo ' </br> ';
echo ' </br> ';
echo ' <h1 style="text-shadow: 2px 4px 10px #b000e6;">'. $web["name"] .' / Slovak Republic</h1>';
echo ' </br> ';
echo ' <div class="row"> ';

echo ' <div style="padding-top:2%;padding-bottom:2%;" class="col-sm-12 tblack">  ';
echo ' <h4> Specified game nick: <font style="color:#b000e6"><strong> '. $a .'</strong></font></h4> ';
echo ' </div>  ';

echo ' <div style="margin-top:5%;" class="col-sm-5 vip">  ';
echo ' <h2 class="cosmic"><font style="color:#b000e6;font-weight:bold;">VIP</font></h2> ';

echo ' <h5> Shape of sms: <font style="color:#b000e6"> vip '. $a .'</font></h5>  ';
echo ' <h5> SMS number: <font style="color:#b000e6"> 0000 </font></h5>  ';
echo ' <hr> '; 
echo ' <h5> Server: <font style="color:#00b300"> Survival </font></h5>  ';
echo ' <hr> ';
echo ' <h5> Expires: <font style="color:#ff1a1a"> 40 days </font></h5> '; 
echo ' <h5> Price: <font style="color:#ff1a1a"> 2€ </font></h5>  ';

echo ' </div>  ';


echo ' <div style="margin-top:5%;" class="col-sm-5 vip">  ';
echo ' <h2 class="cosmic"><font style="color:#b000e6;font-weight:bold;">EVIP</font></h2> ';

echo ' <h5> Shape of sms: <font style="color:#b000e6"> vip '. $a .'</font></h5>  ';
echo ' <h5> SMS number: <font style="color:#b000e6"> 0000 </font></h5>  ';
echo ' <hr> '; 
echo ' <h5> Server: <font style="color:#00b300"> Survival </font></h5>  ';
echo ' <hr> ';
echo ' <h5> Expires: <font style="color:#ff1a1a"> 40 days </font></h5> '; 
echo ' <h5> Price: <font style="color:#ff1a1a"> 2€ </font></h5>  ';

echo ' </div>  ';
echo ' </div> ';
echo ' </div> ';

echo ' <p>&nbsp;</p> ';

echo ' <div class="container"> ';
echo ' <div style="padding-top:1%;padding-bottom:2%;" class="col-sm-12 tblack"> ';
echo ' <p><h3> Terms of payment </h3></p> ';
echo ' <li style="color:red"> By sending an SMS, you agree to the terms below. </li>';
echo ' <li> Before sending an SMS, check the SMS text correctly, it is not the fault of sending the SMS portal! </br></li>';
echo ' <li> After sending the sms, you will cancel the money refund. </li>';
echo ' <li> After submitting the sms, it will be managed on the owners portal as it is with money, you are not entitled to decide how to deal with penises! </li>';
echo ' </div> ';
echo ' </div> ';

echo ' </div>  ';
echo ' </div> ';

echo ' <p>&nbsp;</p> ';
echo ' <p>&nbsp;</p> ';

require_once 'footer.php'; 

?>