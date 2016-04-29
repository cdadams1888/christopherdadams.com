<?php

$time_now = date("m/d/Y @ g:i A", time()); 
$subject = "You have an email from christopherdadams.com!";

$name = $_POST["name"];
$company = $_POST["company"];
$from_email = $_POST["email"];
$from_message = $_POST["message"];


$message = $name." from ".$company. " with email <i>".$from_email. "</i> sent you a message ".$from_message." on ".$time_now;
//echo $message;

 $to = "cdadams1888@yahoo.com";

$headers = 'From: noreply@email.com' . "\r\n" .
    'Reply-To: noreply@email.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
 mail ($to , $subject , $message, $headers);

?>
<p>Your form has been sent!</p>
