<?php
$check=0;
 if($_POST) {
     $visitor_name = "";
     $visitor_email = "";
     $recipient="ruhul20@gmail.com";
     if(isset($_POST['name'])) {
         $visitor_name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
     }
      
     if(isset($_POST['email'])) {
         $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
         $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
     }
      
      
      
     $headers  = 'From: ' . $visitor_email . "\r\n"
     .'Message: ' . $visitor_name . "\r\n";
     if(($visitor_name != "")&&($visitor_email != "")){
         $check=1;
      if(mail($recipient, $visitor_email, $headers)) {
        $check=1;
        echo "<h1>Thank you for contacting us, $visitor_name.</h1>";
    } else {
        $check=1;
        echo '<h1>We are sorry but the email did not go through.</h1>';
    }
     }
      if($check==0){
      echo '<h1>Enter Correct info</h1>';
     }
      
 } else {
     echo '<h1>Something went wrong</h1>';
 }
 ?>