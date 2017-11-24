<?php

if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message']) || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
	echo "No arguments Provided!";
	return false;
}
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   

$to = 'axiomnuttrading@gmail.com';
// $to = 'srkm95@gmail.com';
$email_subject = "Message from Website Contact Form:  $name - $email_address";
$email_body = "$message";
mail($to, $email_subject, $email_body);
echo "Mail Send Successfully";
// return true;         
header('Location: ' . $_SERVER['HTTP_REFERER']);
// die();
?>
