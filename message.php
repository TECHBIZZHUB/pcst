<?php
if(isset($_POST['submit']))
{
echo ("error,you need to submit the form! ");
} 
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];
$email_from = 'josephmbugua203.ke@gmail.com';
$email_subject = "New Form Submission";
$email_body = "FROM TECHBIZZ SERVERS\ name = $name \n sender = $visitor_email.\n message = $message";
$to = "josephmbugua203.ke@gmail.com";
$headers = "From: $email_from \r \n ";

mail($to,$email_subject,$email_body,$headers);

// 301 Moved Permanently
header("Location: file:///storage/emulated/0/pcst/index.html", true, 301);
exit();
?>