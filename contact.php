<?php
   $name = $_POST['name'];
   $visitor_email = $_POST['email'];
   $message = $_POST['message'];
   
   
   $email_from = 'jiyeonyoga.com';
   
   $email_subject = "New Form Submission";
   
   $email_body = "User name: $name.\n"
                  "User Email: $visitor_email.\n".
                     "User Message: $message.\n";
                     
                
   $to = "c.nicolas662@gmail.com";
   
   $headers = "From: $email_from \r\n";
   
   $headers .= "Reply-To": $visitor_email \r\n";
   
   if (mail($to,$email_subject,$email_body,$headers)){
      $message = "Your message has been sent successfully";
      $type = "success";
     }
   
   header("Location: contact.html");
   
   
   ?>
