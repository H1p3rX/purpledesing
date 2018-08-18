<?php 
require_once 'includes/header.php';

echo ' <div class="container"> ';
echo ' <div style="margin-top: 10%;" class="row"> ';


echo ' <div class="col-md-12 "> ';
echo ' <h1 style="text-shadow: 2px 4px 10px #b000e6;">'. $web["name"] .' / '. ucfirst($page_name) .'</h1>';
echo ' </br>';
echo ' </br>';
echo ' </div>';

/*-------------------- OWNER  --------------------*/

$team["owner"] = 'H1p3rX'; //nick
echo ' <div style="margin-bottom: 5%;" class="col-md-5 team_pozadie lines"> ';
echo ' <img src="https://minotar.net/armor/body/'. $team["owner"] .'/100.png"> ';
echo ' <p> ';
echo ' <h5 class="team_popis">
                              Nick: <a href="#" style="text-decoration:none">'. $team["owner"] .' </a>
                              </br> 
                              Position: <a href="#" style="text-decoration:none"> Owner </a> 
                              </br> 
                              Age: <a href="#" style="text-decoration:none"> 18  </a>
                              </br> 
                              Skype: <a href="#" style="text-decoration:none"> -/-  </a>
                              </br>
                              </br>
                              My job: <a href="#" style="text-decoration:none"> I take care of the technical site of the server and the website.  </a>
                              </br>
                              </br>
                              Saying: <a href="#" style="text-decoration:none"> Whoever kicks the other jam falls into it. </a>
        </h5> ';
echo ' </p> ';
echo ' </div> ';


$team["cowner"] = 'WMB'; //nick
echo ' <div style="margin-bottom: 5%;" class="col-md-5 team_pozadie lines"> ';
echo ' <img src="https://minotar.net/armor/body/'. $team["cowner"] .'/100.png"> ';
echo ' <p> ';
echo ' <h5 class="team_popis">
                              Nick: <a href="#" style="text-decoration:none">'. $team["cowner"] .' </a>
                              </br> 
                              Position: <a href="#" style="text-decoration:none"> CoOwner </a>  
                              </br> 
                              Age: <a href="#" style="text-decoration:none"> 18  </a>
                              </br> 
                              Skype: <a href="#" style="text-decoration:none"> -/-  </a>
                              </br>
                              </br>
                              My job: <a href="#" style="text-decoration:none"> I take care of the technical site of the server and the website.  </a>
                              </br>
                              </br>
                              Saying: <a href="#" style="text-decoration:none"> Whoever kicks the other jam falls into it. </a>
        </h5> ';
echo ' </p> ';
echo ' </div> ';


/*-------------------- HL.BUILDERS HL.HELPER --------------------*/


$team["hl-helper"] = 'Vampiirek'; //nick	
echo ' <div style="margin-bottom: 5%;" class="col-md-5 team_pozadie lines"> ';
echo ' <img src="https://minotar.net/armor/body/'. $team["hl-helper"] .'/100.png"> ';
echo ' <p> ';
echo ' <h5 class="team_popis">
                              Nick: <a href="#" style="text-decoration:none">'. $team["hl-helper"] .' </a>
                              </br> 
                              Position: <a href="#" style="text-decoration:none"> Hl.Helper </a> 
                              </br> 
                              Age: <a href="#" style="text-decoration:none"> 18  </a>
                              </br> 
                              Skype: <a href="#" style="text-decoration:none"> -/-  </a>
                              </br>
                              </br>
                              My job: <a href="#" style="text-decoration:none"> I take care of the technical site of the server and the website.  </a>
                              </br>
                              </br>
                              Saying: <a href="#" style="text-decoration:none"> Whoever kicks the other jam falls into it. </a>
        </h5> ';
echo ' </p> ';
echo ' </div> ';

$team["hl-builder"] = 'Anna'; //nick
echo ' <div style="margin-bottom: 5%;" class="col-md-5 team_pozadie lines"> ';
echo ' <img src="https://minotar.net/armor/body/'. $team["hl-builder"] .'/100.png"> ';
echo ' <p> ';
echo ' <h5 class="team_popis">
                              Nick: <a href="#" style="text-decoration:none">'. $team["hl-builder"] .' </a>
                              </br> 
                              Position: <a href="#" style="text-decoration:none"> Hl.Builder </a> 
                              </br> 
                              Age: <a href="#" style="text-decoration:none"> 18  </a>
                              </br> 
                              Skype: <a href="#" style="text-decoration:none"> -/-  </a>
                              </br>
                              </br>
                              My job: <a href="#" style="text-decoration:none"> I take care of the technical site of the server and the website.  </a>
                              </br>
                              </br>
                              Saying: <a href="#" style="text-decoration:none"> Whoever kicks the other jam falls into it. </a>
        </h5> ';
echo ' </p> ';
echo ' </div> ';


/*-------------------- HELPERS  --------------------*/


$team["1"]["helper"] = 'Fantom'; //nick	
echo ' <div style="margin-bottom: 5%;" class="col-md-5 team_pozadie lines"> ';
echo ' <img src="https://minotar.net/armor/body/'. $team["1"]["helper"] .'/100.png"> ';
echo ' <p> ';
echo ' <h5 class="team_popis">
                              Nick: <a href="#" style="text-decoration:none">'. $team["1"]["helper"] .' </a>
                              </br> 
                              Position: <a href="#" style="text-decoration:none"> Helper </a>  
                              </br> 
                              Age: <a href="#" style="text-decoration:none"> 18  </a>
                              </br> 
                              Skype: <a href="#" style="text-decoration:none"> -/-  </a>
                              </br>
                              </br>
                              My job: <a href="#" style="text-decoration:none"> I take care of the technical site of the server and the website.  </a>
                              </br>
                              </br>
                              Saying: <a href="#" style="text-decoration:none"> Whoever kicks the other jam falls into it. </a>
        </h5> ';
echo ' </p> ';
echo ' </div> ';

$team["2"]["helper"] = 'Batman'; //nick
echo ' <div style="margin-bottom: 5%;" class="col-md-5 team_pozadie lines"> ';
echo ' <img src="https://minotar.net/armor/body/'. $team["2"]["helper"] .'/100.png"> ';
echo ' <p> ';
echo ' <h5 class="team_popis">
                              Nick: <a href="#" style="text-decoration:none">'. $team["2"]["helper"] .' </a>
                              </br> 
                              Position: <a href="#" style="text-decoration:none"> Helper </a>  
                              </br> 
                              Age: <a href="#" style="text-decoration:none"> 18  </a>
                              </br> 
                              Skype: <a href="#" style="text-decoration:none"> -/-  </a>
                              </br>
                              </br>
                              My job: <a href="#" style="text-decoration:none"> I take care of the technical site of the server and the website.  </a>
                              </br>
                              </br>
                              Saying: <a href="#" style="text-decoration:none"> Whoever kicks the other jam falls into it. </a>
        </h5> ';
echo ' </p> ';
echo ' </div> ';


/*-------------------- BUILDERS  --------------------*/


$team["1"]["builder"] = 'Danny'; //nick
echo ' <div style="margin-bottom: 5%;" class="col-md-5 team_pozadie lines"> ';
echo ' <img src="https://minotar.net/armor/body/'. $team["1"]["builder"] .'/100.png"> ';
echo ' <p> ';
echo ' <h5 class="team_popis">
                              Nick: <a href="#" style="text-decoration:none">'. $team["1"]["builder"] .' </a>
                              </br> 
                              Position: <a href="#" style="text-decoration:none"> Builder </a> 
                              </br> 
                              Age: <a href="#" style="text-decoration:none"> 18  </a>
                              </br> 
                              Skype: <a href="#" style="text-decoration:none"> -/-  </a>
                              </br>
                              </br>
                              My job: <a href="#" style="text-decoration:none"> I take care of the technical site of the server and the website.  </a>
                              </br>
                              </br>
                              Saying: <a href="#" style="text-decoration:none"> Whoever kicks the other jam falls into it. </a>
        </h5> ';
echo ' </p> ';
echo ' </div> ';

$team["2"]["builder"] = 'Axyy'; //nick
echo ' <div style="margin-bottom: 5%;" class="col-md-5 team_pozadie lines"> ';
echo ' <img src="https://minotar.net/armor/body/'. $team["2"]["builder"] .'/100.png"> ';
echo ' <p> ';
echo ' <h5 class="team_popis">
                              Nick: <a href="#" style="text-decoration:none">'. $team["2"]["builder"] .' </a>
                              </br> 
                              Position: <a href="#" style="text-decoration:none"> Builder </a>  
                              </br> 
                              Age: <a href="#" style="text-decoration:none"> 18  </a>
                              </br> 
                              Skype: <a href="#" style="text-decoration:none"> -/-  </a>
                              </br>
                              </br>
                              My job: <a href="#" style="text-decoration:none"> I take care of the technical site of the server and the website.  </a>
                              </br>
                              </br>
                              Saying: <a href="#" style="text-decoration:none"> Whoever kicks the other jam falls into it. </a>
        </h5> ';
echo ' </p> ';
echo ' </div> ';

echo ' </div> ';
echo ' </div> ';

require_once 'includes/footer.php';
?>