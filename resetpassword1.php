<?php
ob_start();
session_start();


require "connect.php";
require "util.php";


$emailOTP=$_POST["emailOTP"];
$newpwd=$_POST["passwrd"];
$e=$_SESSION["email_id"];
$m=$_SESSION["mobile_no"];

$stmt = $conn->prepare("SELECT otp,dateOfCreation FROM otpdetails where sd_id=? and otp_type='1' and isDelete=0 and isExhaust=0 order by otpId DESC LIMIT 1");
$stmt->bind_param("s", $m);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0)
{

    $row = $result->fetch_assoc();
    $current_datetime = date('Y-m-d H:i');
    $sms_send_datetime = date("Y-m-d H:i", strtotime($row['dateOfCreation'])); // suppose $row['send_date']'s value is '2016-10-17 15:00'
    $diff= time_Diff_Minutes($sms_send_datetime,$current_datetime); //output 720
/*   if($diff<=1)
           { }*/
    
    if($emailOTP == $row['otp'])
      {
         $updatesql = $conn->prepare("UPDATE otpdetails SET isExhaust=1, dateOfExhaust='$logts' WHERE sd_id=?");
        $updatesql->bind_param("s",$m);
        $updatesql->execute();

        $updatesql = $conn->prepare("UPDATE employee_detail SET emp_pwd=?, lastModifiedDate='$logts' WHERE emp_email=?");
        $updatesql->bind_param("ss",$newpwd,$e);
        $updatesql->execute();
         echo "<script> alert('check 1')</script>";
        $id=session_id();
        $_SESSION["sdcid"] = $id;
        $_SESSION["logged_in"] = 1;

        header('Location: lgn.php?status=Successfully updated');
        ob_end_flush();
        exit();

      }
      else
      {
          header("Location: passwordreset1.php?status=Invalid OTP");
          ob_end_flush();
      }


}
else
{
  //  echo "0  records";
   header("Location: lgn.php?status=OTP not found");
   ob_end_flush();
}
$conn->close();


?>
