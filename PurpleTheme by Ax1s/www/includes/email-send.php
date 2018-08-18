<?php
require_once 'config.php';

if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = $web["mail"];
    $email_subject = $web["name"];
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but errors have been found with the form filled in.";
        echo "These errors are shown below.<br /><br />";
        echo $error."<br /><br />";
        echo "Go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['email']) ||
        !isset($_POST['comments'])) {
        died('Were sorry, but you seem to have a problem with the form you submitted.');       
    }
 
     
 
    $email_from = $_POST['email']; // required
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The email address you entered does not appear to be valid.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'The message you wrote does not seem to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form Details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "E-mail: ".clean_string($email_from)."\n";
    $email_message .= "Správa: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>

<?php
require_once 'header.php';
echo ' <meta http-equiv="refresh" content="3;url='. $web["link"] .'"> ';
echo ' <div class="dakujeme" style="margin-bottom:450px;margin-top:250px"> ';
echo ' <h1>Thank you for your message!</h1>';
echo ' <h3>You '. $web["name"] .'</h3>';
echo ' </div> ';
require_once 'footer.php';
 ?>
<?php
 
}
?>