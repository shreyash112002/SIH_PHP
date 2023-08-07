<?php
ob_start();
session_start();


require "connect.php";
require "util.php";


$emailOTP=$_POST["emailOTP"];
$e=$_SESSION["email_id"];
$sd_id=$_SESSION["std_id"];

$stmt = $conn->prepare("SELECT otp,dateOfCreation FROM otpdetails where sd_id=? and otp_type='1' and isDelete=0 and isExhaust=0 order by otpId DESC LIMIT 1");
$stmt->bind_param("s", $sd_id);
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
        $updatesql->bind_param("s", $sd_id);
        $updatesql->execute();

        $id=session_id();
        $_SESSION["sdcid"] = $id;
        $_SESSION["logged_in"] = 1;

        header('Location: viewelective.php');
        ob_end_flush();
        exit();

      }
      else
      {
          header("Location: loginstudent1.php?status=Invalid OTP");
          ob_end_flush();
      }


       
       //  echo "<script>alert("CHECK")</script>";
        //$message = urlencode("otp number.".$rndno);

    // output data of each row
    //	echo "Rows new=".$result1->num_rows;

	  //   	if($row["emp_pwd"]==$p)
   //      	{
   //          //echo "pwd matches";
   //          //echo "<h1> ".$row["password"]."==".$p."</h1>";
   //              $id=session_id();
   //              $_SESSION["sdcid"] = $id;
   //      		$_SESSION["userId"] = $row["emp_mobile"];
   //      		//$_SESSION["username"] = $u;
   //      		$_SESSION["logged_in"] = 1;

   //              //echo "<h1> something: ".$_SESSION["logged_in"]."</h1>";
   //      		header('Location: dashboard.php');
   //              ob_end_flush();
   //      		exit();

			// //echo "<h1> GP User Id:".$_SESSION["userId"]." & UserRole:".$_SESSION["roleId"]."</h1>";
   //      	}
   //  		else
   //  		{
   //              //echo "invalid pwd";
   //      		 header("Location: login.php?status=Invalid Username or Password");
   //               ob_end_flush();
			// }

}
else
{
  //  echo "0  records";
   header("Location: loginstudent1.php?status=OTP not found");
   ob_end_flush();
}
$conn->close();


?>
