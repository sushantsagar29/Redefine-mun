<?php 
foreach($_POST as $key=>$value)
{
if((strpos($value, '<') !== FALSE) or (strpos($value, '/') !== FALSE) or (strpos($value, 'ransisco') !== FALSE))
{
echo "Don't fuck around...  XSS and San Fransisco won't work...";
exit;
}//end of else if
else
{
$postdata[$key]=$value; //$postdata['email'],$postdata['uid']
}//end of else	
}//end of foreach
if((strpos($postdata['email1'], '@')) == False)
{
echo "<center><p class='lead' style='color:#3498db;'>The email-id entered is invalid. Please try again.</p></center>";
exit;
}
require_once('connect.php');//connecting to the server
?>
<html>
<head>

  <meta charset="utf-8">
  <title>reDEFINE MUN</title>
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
<br>
<br>

<div class="row">

<div class="col-md-3"> </div>
<div class="col-md-6"> 

<center>
<?php
//primary is uid

	$query = "INSERT INTO unga( name1,email1,gender1,college1,contact1,exp1,name2,email2,gender2,college2,contact2,exp2,country1,country2,country3,city,state,msg ) VALUES( :name1, :email1, :gender1, :college1, :contact1, :exp1, :name2, :email2, :gender2, :college2, :contact2, :exp2, :country1, :country2, :country3, :city, :state, :msg )";
	$sth = $dbh->prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
	$excute=$sth->execute(array( ':name1' => $postdata['name1'],':email1' => $postdata['email1'], ':gender1' => $postdata['gender1'], ':college1' => $postdata['college1'], ':contact1'=>$postdata['contact1'], ':exp1'=>$postdata['exp1'], ':name2'=> $postdata['name2'],':email2' => $postdata['email2'], ':gender2' => $postdata['gender2'], ':college2' => $postdata['college2'], ':contact2'=>$postdata['contact2'], ':exp2'=>$postdata['exp2'], ':country1'=>$postdata['country1'], ':country2'=>$postdata['country2'], ':country3'=>$postdata['country3'], ':city'=>$postdata['city'], ':state'=>$postdata['state'], ':msg'=>$postdata['msg']));
	if(! $excute )
	{
	exit;
	}
	
	echo "<p class='lead'  style='color:#3498db;'> Thank you ".$postdata['name1']." for registering with reDEFINE MUN!</p><br/>";
	echo "<p class='lead'  style='color:#3498db;'> You will also receive an auto-generated e-mail from our side confirming your application.</p>";
	echo "<h5 style='color:#3498db;'>In case you do not have any email from our side, check your spam inbox or get in touch with us.</h5>";
	
	$email_message = "";
	$email_message .= "Dear ".$postdata['name1'].",\n\n"; //dear name,
	$email_message .= "Thank you ".$postdata['name1']." for registering with reDEFINE MUN!!\n";
    $email_message .= "As an when the allotment is released, you'll get an email from our side.\n";
	$email_message .= "We hope to see you in reDEFINE MUN!\n\n";
	$email_message .= "Best Regards\n";
	$email_message .= "Secretariat reDEFINE MUN 2015\n";
	

	 $to = $postdata['email1'] ;
     $subject = "Confirmation of Regsitration";
     $headers = "From: reDEFINE MUN <contact@redefineinc.in>\r\n";
    $header .= "Reply-To: contact@redefineinc.in \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-Type: text/html; charset=iso-8859-1" . "\r\n";


     if(! (mail($to, $subject, $email_message, $headers,"-f contact@redefineinc.in")))
	{
		$query = "UPDATE unga SET error = :value WHERE email=:email"; //update the event table corresponding to the event registered
		$sth = $dbh->prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
		$excute=$sth->execute(array(':value'=> '1' ,':email'=>$postdata['email1']));
	}
?>
</center>

</div>
<div class="col-md-3"> </div>

</div>
</div>


</body>
</html>