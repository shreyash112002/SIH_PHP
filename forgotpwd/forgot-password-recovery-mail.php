// This file contains login to send the email to the user who has requested to reset the password
// Email with link is sent to the users email1

<?php

require '../connect.php';

require 'PHPMailer/PHPMailerAutoload.php';
require_once("mail_configuration.php");

$mail = new PHPMailer;

//$username = $user["username"];
//echo "UserName prinitng: ".$username;

//get the user name from db

$sql1 = "select username from usercredential where userId = '".$user["userId"]."'";
$result = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_array($result);
$username = $row1["username"];

//echo "UN=".$username;

$token = sha1(uniqid($username, true));

$emailBody = "<div>" . $username . ",<br><br><p>Click this link to recover your password<br><a href='" . PROJECT_HOME . "reset_password.php?name=" . $token . "'>" . PROJECT_HOME . "reset_password.php?name=".$username. "</a><br><br></p>Regards,<br> Admin Bombay High Court Writ Cell. </div>";

//echo $emailBody;

//get email from the db
$sql = "Select email1 from userdetail where userId = '".$user["userId"]."'";
$result = mysqli_query($conn,$sql);
$row1 = mysqli_fetch_array($result);

//echo $row1["email1"];

//insert token in to database

$sql = "select * from tokendetail where username = " . $username;
$result = mysqli_query($conn,$sql);
$user = mysqli_fetch_array($result);

		if(!empty($user)) {
			$sql = "insert into tokendetail (username,token,dateOfRequest) values ('$username', '$token',now())";
			echo $sql;
					if ($conn->query($sql) === TRUE) {
					    echo "New record created successfully";
					} else {
					    echo "Error: " . $sql . "<br>" . $conn->error;
					}
			} else {
			$sql = "update tokendetail set token='$$token', dateOfRequest = now() where username = '$username'";
			echo $sql;
					if ($conn->query($sql) === TRUE) {
					    echo "New record created successfully";
					} else {
					    echo "Error: " . $sql . "<br>" . $conn->error;
					}
		}

$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port     = PORT;
$mail->Username = MAIL_USERNAME;
$mail->Password = MAIL_PASSWORD;
$mail->Host     = MAIL_HOST;
$mail->Mailer   = MAILER;

$mail->SetFrom(SERDER_EMAIL, SENDER_NAME);
$mail->AddReplyTo(SERDER_EMAIL, SENDER_NAME);
$mail->ReturnPath=SERDER_EMAIL;
$mail->AddAddress($row1["email1"]);
$mail->Subject = "Forgot Password Recovery";
$mail->MsgHTML($emailBody);
$mail->IsHTML(true);

if(!$mail->Send()) {
	$error_message = 'Problem in Sending Password Recovery Email';
} else {
	$success_message = 'Please check your email to reset password!';
}

?>
