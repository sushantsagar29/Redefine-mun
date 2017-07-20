<?php 
foreach($_POST as $key=>$value)
{
if (($value=="")or(NULL===$value))
{
header('index.php');
exit;
}//end of if
else if((strpos($value, '<') !== FALSE) or (strpos($value, '/') !== FALSE) or (strpos($value, 'ransisco') !== FALSE))
{
echo "Don't fuck around...  XSS and San Fransisco won't work...";
exit;
}//end of else if
}//end of foreach
if((strpos($_POST['email'], '@')) == False)
{
echo "<center><p class='lead'>The email-id entered is invalid. Please try again.</p></center>";
exit;
}
?>
<html>
<head>
<meta charset="utf-8" />
	
	
  <meta charset="utf-8">
  <title>Contact Us</title>
  <meta name="keywords" content="reDEFINE, mun, kiit">
  <meta name="description" content="reDEFINE MUN">
  <meta name="author" content="Sushant Sagar">
	<!-- <meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">--> <!--change-->
  <meta name="viewport" content="width=device-width, initial-scale=1 , maximum-scale=1, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<!-- Favicon -->
  <link rel="shortcut icon" href="img/fav.png">
  
    <!-- css references -->
     <link href="css1/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="css1/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
	
	<!-- using this script to make the ajax work-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>
<body>
<div class="container">
<?php
//only for sending mail and sending response back to main page

	if(isset($_POST['email']) && (strpos($_POST['email'], '@') !== FALSE))// to check if it's filled and if it contains @
     {
	//mailing script
	$name = $_POST['name']; // all fields are required
	$email_from = $_POST['email'];
	$message = $_POST['story'];
	$subject_mail = $_POST['subject'];

	$error_message = "";

	$email_message = " ";
	$email_message .= "Subject : ".$subject_mail."\n";
	$email_message .= "Name : ".$name."\n";
    $email_message .= "Email : ".$email_from."\n";
	$email_message .= "Message : ".$message."\n";
	

	$to = "redefineinc@outlook.com" ;// has been hardcoded
    $subject = "reDEFINE MUN" ;
	// create email headers
	$headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	if(! @mail($to, $subject, $email_message, $headers)){
	echo "<center><p class='lead'>Error. Please try again.</p></center>";
	} 
	else
	{
		 echo "<center><p class='lead'>We just got your mail, We will be in touch with you soon !</p></center>";
	}
	
	}
	 else
	 {
		echo "<center><p class='lead'>Please fill the data properly</p></center>";  
	 }
?>
</div>
</body>
<html>