<?php 

$myemail = 'duotech.service.germany@gmail.com';


$name = $_POST['name']; 
$email_address = $_POST['email']; 
$phone = $_POST['phone']; 
$message = $_POST['message']; 


	$to = $myemail; 
	$email_subject = "Contact form submission: $name";
	$email_body = "
<h2>You have received a new message</h2>
<p>Here are the details:</p>
<ul>
<li>Name: <strong>$name</strong></li>
<li>Email address: <strong>$email_address</strong></li>
<li>Phone number: <strong>$phone</strong></li>
<li>Subject: <strong>$subject</strong></li>
<li>Message:</li>
<pre>$message</pre>
<li>Selected value: <strong>$selected_value</strong></li>
</ul>
";
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	header('Location: index.php'); 
?>
