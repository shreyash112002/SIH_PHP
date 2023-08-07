<?php
ob_start();
session_start();


require "connect.php";
require "util.php";

$m=$_POST["user"];


//echo $u;
//echo "<br>";
//echo $p;
//echo "<br>";


$stmt = $conn->prepare("SELECT emp_id, emp_email FROM employee_detail where emp_mobile=? and isDelete=0 and isDisabled=0");
$stmt->bind_param("s", $m);
$stmt->execute();
$result = $stmt->get_result();

// $sql = "SELECT  emp_mobile, emp_pwd FROM student_detail where emp_mobile='".$u."'";
// $result = $conn->query($sql);


//echo "<br>";
//echo "Rows=".$result->num_rows;

if ($result->num_rows > 0)
{
    $row = $result->fetch_assoc();
    
        sendOTPEmail($m,$row['emp_email']);
        header("Location: passwordreset1.php");  
    
    
}
else
{
  //  echo "0  records";
   header("Location: lgn.php?status= Mobile not Registered");
   ob_end_flush();
}



function sendOTPEmail($m,$e){
         global $conn;
         global $logts;

        $emailOTP = generatePIN(4);
       
         $emailid=$e;
         $message="The OTP for DBIT (Elective Management) is ".$emailOTP;
         $status=sendEmail($emailid,$message);
      //   echo "<script>alert(".$status.")</script>";
        if($status){
        $id=session_id();
        $_SESSION["sdcid"] = $id; 
        $_SESSION["email_id"] = $e;
        $_SESSION["mobile_no"] = $m;
        
         // logic to generate Id
         $sqlspcl1 = "SELECT max(otpId) as a FROM otpdetails";
         $resultspcl1 = $conn->query($sqlspcl1);
           if ($resultspcl1->num_rows > 0)
           {
               $row1 = $resultspcl1->fetch_assoc();
               $otpId=$row1["a"]+1;
           }
           else
           {
               $otpId=1;
           }
         // end of   logic to generate Id
       //     echo "<script>alert('OTP : ".$otpId."')</script>";
          $sql2="INSERT INTO otpdetails(otpId,sd_id,otp_type,otp,dateOfCreation) VALUES('$otpId','$m','1','$emailOTP','$logts')";  
       //   echo $sql2;
           $conn->query($sql2);
          }
          else{
            echo "could not send email";
          }
    
}

$conn->close();


?>
