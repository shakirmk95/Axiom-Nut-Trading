<?php

if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message']) || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
	echo "No arguments Provided!, Please go back to <a href='axiomnuttrading.com'>previous page</a>";
	return false;
}
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   

// $to = 'info@axiomnuttrading.com';
$to = 'srkm95@gmail.com';
$email_subject = "Message from Website Contact Form:  $name";
$email_body = "$message";
$mailheaders = "From: info@axiomnuttrading.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$mailheaders .= "Reply-To: $email_address";   
// mail($to, $email_subject, $email_body, $mailheader) or die("Error!");
if(!mail($to, $email_subject, $email_body, $mailheader)) {
	echo "Mail Sending Not Successfully, Please go back to <a href='axiomnuttrading.com'>previous page</a>";
	echo "<script type='text/javascript'>alert('Mail Sending Not Successfully');</script>";
	// return false; 
}else {
	echo "Mail Send Successfully, Please go back to <a href='axiomnuttrading.com'>previous page</a>";
	echo "<script type='text/javascript'>alert('Mail Send Successfully');</script>";
	// return true; 
}        
header('Location: ' . $_SERVER['HTTP_REFERER']); 
die();
?>
