<?php

$email_updates = $_POST['email_updates'];
$language_feedback = $_POST['language-feedback'];
$feedback_text;

if ($language_feedback == "english") {
	$feedback_text = "<strong>Thank you!</strong> We hope to see you at the conference.\n";
}else{
	$feedback_text = "<strong>Gracias. </strong> Esperamos verle en la conferencia.\n";
}

$dbhost = 'localhost';
$dbuser = 'iaald_user';
//$dbpass = 'KQUnzCeqBdY45rPL';
$dbpass = 'CMk8nd5i[';

$conn = mysql_connect($dbhost, $dbuser, $dbpass);

if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = "INSERT INTO email_updates " .
		"(id_email) ".
       "VALUES ('" . $email_updates . "')";
	   
mysql_select_db('iaald');

$retval = mysql_query( $sql, $conn );

if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}

echo $feedback_text;

mysql_close($conn);
?>


