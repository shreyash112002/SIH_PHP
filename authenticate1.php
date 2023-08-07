<?php
ob_start();
session_start();


require "connect.php";
require "util.php";


$e=$_POST["email"];
$m=$_POST["mobile"];


//echo $u;
//echo "<br>";
//echo $p;
//echo "<br>";


$stmt = $conn->prepare("SELECT sd_id,sd_fname, sd_lname, sd_dept,sd_sem,sd_email,sd_contact,isInstSubmitted,isDeptSubmitted FROM student_detail where sd_email=? and sd_contact=? and isDelete=0 and isDisabled=0");
$stmt->bind_param("ss", $e, $m);
$stmt->execute();
$result = $stmt->get_result();

// $sql = "SELECT  emp_mobile, emp_pwd FROM student_detail where emp_mobile='".$u."'";
// $result = $conn->query($sql);


//echo "<br>";
//echo "Rows=".$result->num_rows;

if ($result->num_rows > 0)
{
    $row = $result->fetch_assoc();
    if(!$row['isInstSubmitted'] || !$row['isDeptSubmitted'])
    {
        sendOTPEmail($row['sd_id'],$row['sd_email'],$row['sd_dept'],$row['sd_sem'], $row['sd_fname'], $row['sd_lname']);
        header("Location: loginstudent1.php");  
    }
    else
    {
   header("Location: loginstudent.php?status=Elective prefrence already submitted !!");   
    }
    
}
else
{
  //  echo "0  records";
   header("Location: loginstudent.php?status=Email-Id/Mobile not Registered");
   ob_end_flush();
}



function sendOTPEmail($sd_id,$e,$dept,$sem,$fname,$lname){
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
        $_SESSION["dept_id"] = $dept; 
        $_SESSION["sem_id"] = $sem; 
        $_SESSION["email_id"] = $e;
        $_SESSION["std_id"] = $sd_id;
          $_SESSION["userName"] = $fname." ".$lname;
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
          $sql2="INSERT INTO otpdetails(otpId,sd_id,otp_type,otp,dateOfCreation) VALUES('$otpId','$sd_id','1','$emailOTP','$logts')";  
       //   echo $sql2;
           $conn->query($sql2);
          }
          else{
            echo "could not send email";
          }
    
}

$conn->close();


?>
