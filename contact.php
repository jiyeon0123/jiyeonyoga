<?php
if(!empty($_POST['send'])) {
   $name = $_POST['name'];
   $visitor_email = $_POST['email'];
   $message = $_POST['message'];
   
   
   $email_from = 'jiyeonyoga.com';
   
   $email_subject = "New Form Submission";
   
                     
                
   $to = "byjiyeon23@gmail.com";
   
   $headers = "From:" . $name . "<". $visitor_email . ">\r\n";
   
   if (mail($to,$email_subject,$message,$headers)){
      $message = "Your message has been sent successfully";
      $type = "success";
     }
}
require_once "contact.php";
?>
