<?php
  use Twilio\Rest\Client;
// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
require_once 'vendor/autoload.php';

class twilioSMS {



    public function sendOTPSMS($to,$genotp) {

    $sid    = "AC375de8d98d6a68d855959095c645e0a3";
    $token  = "3555fd003c837b70e07cf5b9e7a0bdf7";
    $from   = "+13133273021";


    $twilio = new Client($sid, $token);

    $message = $twilio->messages
                      ->create("+91".$to, // to
                               array(
                                   "body" => "Your RechargeApp account OTP is :".$genotp,
                                   "from" => $from
                               )
                      );


         return $message->sid;
    }



}

?>
