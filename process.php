<?php
 session_start();
error_reporting(EALL);
?>

<?php
  include("securimage.php");
  $img = new Securimage();
  $valid = $img->check($_POST['code']);

  if($valid == true) {
    //echo "<center>Thanks, you entered the correct code.<br />Click <a href=\"javascript:history.go(-1)\">here</a> to go back.</center>";	
?>
<?php

$ip = $_POST['ip'];
$httpref = $_POST['httpref'];
$httpagent = $_POST['httpagent'];
//$visitormail = $_POST['visitormail'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$add = $_POST['add'];
$email = $_POST['email'];
$notes = $_POST['notes'];

/*
if (eregi('http:', $notes)) {
die ("Do NOT try that! ! ");
}
if(!$visitormail == "" && (!strstr($visitormail,"@") || !strstr($visitormail,".")))
{
echo "<h2>Use Back - Enter valid e-mail</h2>\n";
$badinput = "<h2>Feedback was NOT submitted</h2>\n";
echo $badinput;
die ("Go back! ! ");
}
*/

$todayis = date('l dS \of F Y h:i:s A');

//$attn = $attn ;
$subject = 'You Got New Feedback.';

$notes = stripcslashes($notes);

$message = 
" $todayis [EST] \n
Name: $name \n
Phone No. : $phone \n
Address : $add \n
Email Address : $email \n
Special Comments/Instructions : $notes \n   
";


$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$from = "From: $name\r\n";

mail("docsmobiledetail@yahoo.com", $subject, $message, $from);
?>
<script type="text/javascript">document.location='contactus.php?msg=Thank you, Your inquiry has been send';</script>
<?php   
	
  } else {
    //echo "<center>Sorry, the code you entered was invalid.  <a href=\"javascript:history.go(-1)\">Go back</a> to try again.</center>";
	?>
	<script type="text/javascript">document.location='contactus.php?msg=Ops! Your Secutiry Code Not Matched';</script>
	<?php 
  }
?>
