<?php

session_start();
date_default_timezone_set('America/Toronto');

require_once('class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();


$mail->IsSMTP(); // telling the class to use SMTP

$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
  $Mail->CharSet     = 'UTF-8';
$Mail->Encoding    = '8bit';                                         // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
$mail->Username   = "rvceonlinemarketplace@gmail.com";  // GMAIL username
$mail->Password   = "rvceonline";            // GMAIL password
$Mail->Priority =1;
$mail->SetFrom('admin@rvceonlinemarketplace.com', 'ADMIN');

$mail->Timeout = 30;
$mail->Subject    = $_POST['title'];

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test


$body = $_POST['message'];
$body = $body. "-" . $_SESSION['username'];

$address = "rvceonlinemarketplace@gmail.com";

$mail->MsgHTML($body);
$mail->AddAddress($address, $name);

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
	echo "Email Sent"; 
	echo '<meta http-equiv="refresh" content="1;URL=User_Welcome.php">';
	}
?>
