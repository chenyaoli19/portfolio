<?php
if (isset($_REQUEST['name']))
//if "email" is filled out, send email
{
	//send email
	$name = $_REQUEST['name'] ;
	$email = $_REQUEST['email'] ;
	$message = $_REQUEST['message'] ;
	$subject = "Message from ".$name;
	mail("chenyaoli19@gmail.com", $subject, $message, "From:" . $email);
	echo "Thank you for contacting me!";
}else{
	echo "You did not supply your email address";
}
?>