<?php 
require_once 'includes/header.php';

echo ' <p>&nbsp;</p>'; 

echo ' <div class="container"> ';
echo ' <div class="row"> ';

echo ' <div class="col-md-12 "> ';
echo ' <h1 style="text-shadow: 2px 4px 10px #b000e6;">'. $web["name"] .' / '. ucfirst($page_name) .'</h1>';
echo ' </div>';


echo ' <div style="margin-bottom:5%; margin-top:5%;;padding-top:20px;padding-bottom:20px;text-align:center;" class="text-center col-sm-12 tblack lines">	 ';

echo ' <form name="contactform" method="post" action="includes/email-send"> ';
echo ' <table width="450px"> ';
echo ' <tr> ';
echo ' <td valign="top"> ';
echo ' <label for="email">E-mail</label> ';
echo ' </td> ';
echo ' <td valign="top"> ';
echo ' <input  class="form-control" type="text" name="email" placeholder="Email" required">';
echo ' </td> ';
echo ' </tr> ';
echo ' <tr> ';
echo ' <td valign="top"> ';
echo ' <label for="comments">Message</label> ';
echo ' </td> ';
echo ' <td valign="top"> ';
echo ' <textarea class="form-control" placeholder="Here you can write what you have on your heart. :)"  name="comments" maxlength="1000" cols="25" rows="3"></textarea> ';
echo ' </td> ';
echo ' </tr> ';
echo ' <tr> ';
echo ' <td colspan="2"> ';
echo ' <input class="btn btn-primary" type="submit" value="Send"> ';
echo ' <input type="checkbox" name="rules">I agree with these rules. <a style="text-decoration:none;" href="pravidla">RULES</a> ';
echo ' </td> ';
echo ' </tr> ';
echo ' </table> ';
echo ' </form> ';

echo ' </div> ';
echo ' </div> ';
echo ' </div> ';

echo ' <div style="margin-bottom:310px; margin-top:1%;padding-top:20px;padding-bottom:20px;text-align:center;" class="text-center col-sm-12 tblack">	 ';
echo ' <h3>Contact</h3> ';
echo ' <p>Contact us also knows through our teamspeak3 server at <a style="text-decoration:none;" href="ts3server://'. $serverip .'?port='. $serverport .'"><font style="font-weight:bold;">'. $serverip .':'. $serverport .'</font></a> or <a href="#" style="text-decoration:none;font-weight:bold;">'. $web["mail"] .'</a></p> ';
echo ' <p>Or contact us directly in the north where we will send you more info than you need yourself :)</p>	';
echo '  </div> ';

require_once 'includes/footer.php';
?>