<?php

//session_start();

require 'connect.php';
// require 'lib/PHPMailer/PHPMailerAutoload.php';
// require_once("lib/PHPMailer/mail_configuration.php");

global $conn;
function notifytoall($category,$title,$message,$url,$target_file,$time)
{
  global $conn;
  $mysqlquery="SELECT firebaseId FROM userprofile where isDelete=0 and isDisabled=0";
  $mysqlresult=$conn->query($mysqlquery);
  if($mysqlresult->num_rows>0)
  {
   while($myrow = $mysqlresult->fetch_assoc())
   {
    // echo "<br>".$myrow['firebaseId'];
    $fcmId=$myrow['firebaseId'];
    $response = sendNotification("individual",$fcmId,$title,$category,$message,$url,$target_file,$time);
   }
  }

return $response;
}
//usage  topic/individual, fcmId, title,category,message,URL, ImageURL,current_time
function sendNotification($push_type,$regId,$title,$cat,$message,$url,$image,$time){


  // Enabling error reporting
  error_reporting(-1);
  ini_set('display_errors', 'On');

  require_once __DIR__ . '/firebase/firebase.php';
  require_once __DIR__ . '/firebase/push.php';

  $firebase = new Firebase();
  $push = new Push();

  // optional payload
  $payload = array();
  $payload['cat'] = $cat;
  $payload['url'] = $url;
  $payload['timestamp'] = $time;

  $push->setTitle($title);
  $push->setMessage($message);
  if (isset($image)) {
      $push->setImage($image);
  } else {
      $push->setImage('');
  }

  $push->setIsBackground(FALSE);
  $push->setPayload($payload);


  $json = '';
  $response = '';

  if ($push_type == 'topic') {
      $json = $push->getPush();
      $response = $firebase->sendToTopic('global', $json);
  } else if ($push_type == 'individual') {
      $json = $push->getPush();
  //    $regId = isset($_POST['regId']) ? $_POST['regId'] : '';
    //   $registration_ids=array('dmWg9IIwAPw:APA91bFvbwtZdepceyohPXlAQaby3pfRXC2EqESxGP6h3A4B4V70KydZkLOM7F6V5vHw8YVlTFzx4338gRZELoTVMJ55W3H3Ug-Rn-iTomDI84kydNzP1d-stMAPrliaroOmev50ytu9', 'fFNTQj122VI:APA91bHlD2gduJKucWaYa8USFchLv9_TuZkXmJyllkuYuF3bXr01R4KHulIeRGMLO1Lf0hi2B8rtzvlXABuJ1dJHVn8C0iVLR_pIh4ogL84Q3TPau-vP7WjmJEzlATaEa__Mi1K7WsmO');
    //   $response = $firebase->sendMultiple($registration_ids, $json);
    $response = $firebase->send($regId, $json);
  }
return $response;
}


//Our custom function.
function generatePIN($digits){
    $i = 0; //counter
    $pin = ""; //our default pin is blank.
    while($i < $digits){
        //generate a random number between 0 and 9.
        $pin .= mt_rand(0, 9);
        $i++;
    }
    return $pin;
}


function time_Diff_Minutes($startTime, $endTime) {
        $to_time = strtotime($endTime);
        $from_time = strtotime($startTime);
        $minutes = ($to_time - $from_time) / 60;
        return ($minutes < 0 ? 0 : abs($minutes));

 }


 function sendSMS($mobileno,$message){
  $username='nileshg';
                    $password='538829';
                      $sender='MAHREC';
                     $sendto="91".$mobileno;
                    // $message="The%20OTP%20for%20MahaRecharge%20is%20".$genotp;
                     
            $curl_url="http://sms.datagenit.com/api.php?username=".$username."&password=".$password."&sender=".$sender."&sendto=".$sendto."&message=".$message;
              $ch2 = curl_init($curl_url);
              curl_setopt($ch2, CURLOPT_CUSTOMREQUEST, "GET");
              curl_setopt($ch2, CURLOPT_POSTFIELDS, $json);
              curl_setopt($ch2, CURLOPT_RETURNTRANSFER, TRUE);
              curl_setopt($ch2, CURLOPT_HTTPHEADER, [
                  'Content-Type: application/json',
                  'Content-Length: ' . strlen($json)]);

              $result2= curl_exec($ch2);
              $res2 = json_decode($result2);
                  
}

function sendEmail($emailid,$message){
require 'lib/PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->SMTPDebug = 0;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'dbitofficial.mumbai@gmail.com';                 // SMTP username
$mail->Password = 'Dbit(2019)';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('dbitofficial.mumbai@gmail.com', 'ADMIN');
$mail->addAddress($emailid);     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'DBIT : Institute Level Elective';
$mail->Body    = $message;
$mail->AltBody = $message;

if(!$mail->send()) {
  //  echo 'Message could not be sent.';
   // echo 'Mailer Error: ' . $mail->ErrorInfo;
    return false;
} else {
   // echo 'Message has been sent';
    return true;
}

}

function _csv_row_count($filename) {
  ini_set('auto_detect_line_endings', TRUE);
  $row_count = 0;
  if (($handle = fopen($filename, "r")) !== FALSE) {
    while (($row_data = fgetcsv($handle, 2000, ",")) !== FALSE) {
      $row_count++;
    }
    fclose($handle);
    // Exclude the headings.
    //$row_count--;
    return $row_count;
  }
}
?>
