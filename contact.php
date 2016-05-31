
<?php


$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];


$mail_to = 'test@test-mail.com';


$subject = 'Message from a site visitor ' . $field_name;


$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;


$headers = "From: $cf_email\r\n";
$headers .= "Reply-To: $cf_email\r\n";


?>
