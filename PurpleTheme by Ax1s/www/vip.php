<?php 
require_once 'includes/header.php';

echo ' <p>&nbsp;</p>'; 

echo ' <div class="container"> ';
echo ' <div class="row"> ';

echo ' <div class="col-md-12 "> ';
echo ' <h1 style="text-shadow: 2px 4px 10px #b000e6;">'. $web["name"] .' / '. ucfirst($page_name) .'</h1>';
echo ' </br>';
echo ' </br>';
echo ' </div>';

echo ' <div style="padding-top:3%" class="col-sm-5 vip_main">  ';
echo ' <div class="panel panel-custom-once">  ';

echo ' <div class="panel-heading"><h4 style="font-size: 30px" class="cosmic"> Slovak Republic </h4></div>  ';  
echo ' <div class="panel-body">  ';

echo ' <form action="'. $web["link"] .'includes/gen-vip1" method="get">  ';
echo ' <div class="form-group has-feedback">  ';
echo ' <div class="input-group"> <input class="form-control formINPUT" type="text" name="a" value="" placeholder="Game Nick" required></div>  ';
echo ' </div>  ';
echo ' <button style="background:#b000e6;color:white" type="submit" class="btn  btn-sm center-block btn-block steamBTN"> <strong> Buy VIP </strong> </button> ';
echo ' </form> ';
echo ' <p>&nbsp;</p>'; 
echo ' </div> '; 
echo ' </div> ';
echo ' </div> ';



echo ' <div style="padding-top:3%" class="col-sm-5 vip_main">  ';
echo ' <div class="panel-heading"><h4 style="font-size: 30px" class="cosmic">Czech Republic</h4></div>   ';

echo ' <form action="'. $web["link"] .'includes/gen-vip2" method="get">  ';
echo ' <div class="form-group has-feedback">  ';
echo ' <div class="input-group"> <input class="form-control formINPUT" type="text" name="a" value="" placeholder="Game Nick" required /></div>  ';
echo ' </div>  ';
echo ' <button style="background:#b000e6;color:white" type="submit" class="btn  btn-sm center-block btn-block steamBTN"> <strong> Buy VIP </strong> </button> ';
echo ' </form>  ';
                
echo ' </div>   ';
 


echo ' <div style="padding-bottom: 4%;" class="col-sm-5 tblack vip_benefits">  ';
echo ' <div class="panel panel-custom-once">  ';
echo ' <div class="panel-heading"><h5 class="cosmic" style="font-size: 30px"> Benefits (<font style="color:#b000e6"> VIP </font>)</h5></div> ';  
echo ' <div class="panel-body"> ';
echo ' <h5 style="color:#00b300;font-weight:bold;"> Survival> </h5>  ';
echo ' <h6 style="font-weight:bold"> You can have <font style="color:#00b300">3x /sethome</font></h6> ';
echo ' <h6 style="font-weight:bold"> You can have <font style="color:#00b300">  2x Large residence </font></h6> ';
echo ' <h6 style="font-weight:bold"> You can have <font style="color:#00b300">  3x Sub residence </font></h6> ';
echo ' <h6 style="font-weight:bold"> You can use it <font style="color:#00b300">  /kit vip </font></h6> ';
echo ' <h6 style="font-weight:bold"> You can use it <font style="color:#00b300"> /kit epic </font></h6> ';
echo ' <h6 style="font-weight:bold"> You can use it <font style="color:#00b300">  /warp vip  </font></h6> ';
echo ' <h6 style="font-weight:bold"> You can use it <font style="color:#00b300"> /fly  </font></h6> ';
echo ' <br /> ';
echo ' <h5 style="color:#ff3333;font-weight:bold;"> Creative </h5>  ';
echo ' <h6 style="font-weight:bold"> You can use it <font style="color:#ff3333"> /worldedit  </font></h6> ';
echo ' <h6 style="font-weight:bold"> You can use it <font style="color:#ff3333"> /tp  </font></h6> ';
echo ' <h6 style="font-weight:bold"> You can use it <font style="color:#ff3333"> /give  </font></h6> ';
echo ' <br /> ';
echo ' <h5 style="color:#0066ff;font-weight:bold;"> Server </h5> ';
echo ' <h6 style="font-weight:bold"> You have a <font style="color:#0066ff"> reserved slot  </font> on our server. </h6> ';
echo ' </div>   ';
echo ' </div>   ';
echo ' </div> ';






echo ' <div style="padding-bottom: 4%;" class="col-sm-5 tblack vip_benefits">  ';
echo ' <div class="panel panel-custom-once">  ';
echo ' <div class="panel-heading"><h5 class="cosmic" style="font-size: 30px"> Benefits (<font style="color:#b000e6"> EVIP </font>)</h5></div> ';  
echo ' <div class="panel-body"> ';
echo ' <h5 style="color:#00b300;font-weight:bold;"> Survival> </h5>  ';
echo ' <h6 style="font-weight:bold"> You can have <font style="color:#00b300">3x /sethome</font></h6> ';
echo ' <h6 style="font-weight:bold"> You can have <font style="color:#00b300">  2x Large residence </font></h6> ';
echo ' <h6 style="font-weight:bold"> You can have <font style="color:#00b300">  3x Sub residence </font></h6> ';
echo ' <h6 style="font-weight:bold"> You can use it <font style="color:#00b300">  /kit vip </font></h6> ';
echo ' <h6 style="font-weight:bold"> You can use it <font style="color:#00b300"> /kit epic </font></h6> ';
echo ' <h6 style="font-weight:bold"> You can use it <font style="color:#00b300">  /warp vip  </font></h6> ';
echo ' <h6 style="font-weight:bold"> You can use it <font style="color:#00b300"> /fly  </font></h6> ';
echo ' <br /> ';
echo ' <h5 style="color:#ff3333;font-weight:bold;"> Creative </h5>  ';
echo ' <h6 style="font-weight:bold"> You can use it <font style="color:#ff3333"> /worldedit  </font></h6> ';
echo ' <h6 style="font-weight:bold"> You can use it <font style="color:#ff3333"> /tp  </font></h6> ';
echo ' <h6 style="font-weight:bold"> You can use it <font style="color:#ff3333"> /give  </font></h6> ';
echo ' <br /> ';
echo ' <h5 style="color:#0066ff;font-weight:bold;"> Server </h5> ';
echo ' <h6 style="font-weight:bold"> You have a <font style="color:#0066ff"> reserved slot  </font> on our server. </h6> ';
echo ' </div>   ';
echo ' </div>   ';
echo ' </div> '; 
echo ' </div> ';
echo ' </div> ';
echo ' </div> ';

echo ' <br /> ';
echo ' <br /> ';

require_once 'includes/footer.php';

?>