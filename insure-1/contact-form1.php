<?php 

$myemail = 'elmehdiworkemail@gmail.com';


$name = $_POST['name']; 
$email_address = $_POST['email']; 
$subject = $_POST['subject'];
$phone = $_POST['phone']; 
$message = $_POST['message']; 


	$to = $myemail; 
	$email_subject = "Contact form submission: $name";
	$email_body = "You have received a new message. ".
	" Here are the details:\n Name: $name \n Email: $email_address \n Phone number: $phone\n Subject: $subject \n Message: \n $message"; 
	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	header('Location: contact.php'); 
?>