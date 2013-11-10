<?php
if(isset($_POST['email'])) {
	
	// CHANGE THE TWO LINES BELOW
	$email_to = "hilaryjhho@gmail.com";
	
	$email_subject = "Contact from Zuma89 Site";
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message']; // required
	

	$email_message = "The contact details:.\n\n";
	
	function clean_string($string) {
	  $bad = array("content-type","bcc:","to:","cc:","href");
	  return str_replace($bad,"",$string);
	}
	
	$email_message .= "Name: ".clean_string($name)."\n\n";
	$email_message .= "Email: ".clean_string($email)."\n\n";
	$email_message .= "Message: ".clean_string($message)."\n";
	
	
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

  $url = 'http://zuma89.webatu.com/thankyou.html';
  echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';   
?>

<?php
}
die();
?>