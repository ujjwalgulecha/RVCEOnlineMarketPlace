<html>
<head>
<title>Send Mail</title>
</head>
<body>

<?php

session_start();
//error_reporting(E_ALL);
error_reporting(E_STRICT);

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
$mail->Subject    = "Login Details";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test


$con = mysqli_connect("localhost", "root", "root","MarketPlace");
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$check = $_POST['email'];

$qry= "SELECT * FROM User WHERE uemail = '$check'";


if ($result=mysqli_query($con,$qry))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
     	$fname = $row[0];
     	$lname = $row[1];
     	$username= $row[2];
     	$pwd = $row[3];
     	$phno=$row[7];
    }
  mysqli_free_result($result);
}

mysqli_close($con);
$body = "Hello " . $fname . " " . $lname . ". Your Login Details Are: ". "\n" .  "Username:". $username . "\n". "Password:".$pwd;

$address = $check;

$mail->MsgHTML($body);
$mail->AddAddress($address, $name);

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
	echo "Email Sent";
}
echo '<meta http-equiv="refresh" content="0;URL=Homepage.php">';
?>

</body>
</html>
