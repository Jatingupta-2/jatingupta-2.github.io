<?php
$visitor_email = $_POST['email'];
$visitor_name = $_POST['name'];
$visitor_message = $_POST['message'];
$visitor_phone = $_POST['phone'];



 $to = 'mail2amanjain@gmail.com';
 $subject =  'Visitor '. $visitor_name .' with email Id "'. $visitor_email. '"and Phone no.'.$visitor_phone.' wants to contact you !';
 $message = 'Message:' .$visitor_message;
 $headers = "Reply-To: The Sender <mail2amanjain@gmail.com\r\n"; 
  $headers = "Return-Path: The Sender <mail2amanjain@gmail.com\r\n"; 
  $headers = "From: The Sender <mail2amanjain@gmail.com\r\n"; 
 $headers = "From: mail2amanjain@gmail.com\n";
 $headers = "MIME-Version: 1.0\n";
 $headers = "Content-type: text/html; charset=iso-8859-1\n";
  $headers = "Organization: Sender Organization\r\n";
  $headers = "MIME-Version: 1.0\r\n";
  $headers = "Content-type: text/plain; charset=iso-8859-1\r\n";
  $headers = "X-Priority: 3\r\n";
  $headers = "X-Mailer: PHP". phpversion() ."\r\n";
 $submit_success = mail($to,$subject,$message,$headers);
 if ($submit_success){
   echo "success";
}else{
    echo "invalid";
}
?>