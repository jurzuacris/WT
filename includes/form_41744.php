<?php	
	if (empty($_POST['name_41744']) && strlen($_POST['name_41744']) == 0 || empty($_POST['email_41744']) && strlen($_POST['email_41744']) == 0 || empty($_POST['message_41744']) && strlen($_POST['message_41744']) == 0)
	{
		return false;
	}
	
	$name_41744 = $_POST['name_41744'];
	$email_41744 = $_POST['email_41744'];
	$message_41744 = $_POST['message_41744'];
	$optin_41744 = $_POST['optin_41744'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name_41744: $name_41744 \nEmail_41744: $email_41744 \nMessage_41744: $message_41744 \nOptin_41744: $optin_41744 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\r\n";
	$headers .= "Reply-To: $email_41744";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>