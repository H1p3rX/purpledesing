<style>
th {background-color: rgba(151, 28, 145, 0.58);}
tr:hover { color: rgba(204, 115, 20, 0.82)}
button:hover { background: rgba(181, 71, 189, 0.58);  color: white}
center{color:white;}
div#collapse_1.form-collapse-table {background: blue;}
.tb{
  background:rgba(0,0,0,0.5);
  padding-top:20px;
  padding-bottom:20px;
}
</style>

<?php
require_once 'includes/header.php';

echo ' <div class="container"> ';
echo ' <div style="margin-top: 10%;" class="row"> ';


echo ' <div class="col-md-12 "> ';
echo ' <h1 style="text-shadow: 2px 4px 10px #b000e6;">'. $web["name"] .' / '. ucfirst($page_name) .'</h1>';
echo ' </br>';
echo ' </br>';
echo ' </div>';


echo ' <div class="col-md-12">';
echo ' <div style="margin-top:1px;">';
echo ' <div class="accordion" id="accordionExample"> ';



/* Bans */
require_once ("includes/bans.php");

echo ' </br> ';

/* IPBans */
require_once("includes/ipbans.php");

echo ' </br> ';

/* Mutes */
require_once("includes/mutes.php");

echo ' </br> ';

/* Warnings */
require_once("includes/warnings.php");


echo '</div>';
echo '</div>';
echo '</div>';

echo ' <div style="margin-bottom:15%;"></div> ';


require_once 'includes/footer.php';
?>