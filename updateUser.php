<?php
session_start();
require 'connect.php';
//echo "check1";
// if(!isset($_SESSION['userId'])){
//    header("Location:login.php");
// }
global $logts;
 if(!empty($_POST))
 {
      $output = '';
      $message = '';
      //$photo = mysqli_real_escape_string($conn, $_POST["photo"]);
      $fname = mysqli_real_escape_string($conn, $_POST["mid_fname"]);
      $lname = mysqli_real_escape_string($conn, $_POST["mid_lname"]);
      $department = mysqli_real_escape_string($conn, $_POST["mid_department"]);
      $role = mysqli_real_escape_string($conn, $_POST["mid_role"]);
      $contact = mysqli_real_escape_string($conn, $_POST["mid_contactnooff"]);
      $email = mysqli_real_escape_string($conn, $_POST["mid_emailof"]);
    

      if($_POST["id_user"] != '')
      {
      $query = "
          UPDATE employee_detail
          SET dept_id='$department',
          role_id='$role',
          emp_fname='$fname',
          emp_lname='$lname',
          emp_mobile='$contact',
          emp_email='$email',
          lastModifiedDate='$logts'
          WHERE emp_id='".$_POST["id_user"]."'";

      }

    if($conn->query($query))
      {
        $message = 'Data Updated';
      }
      else
      {
      //  echo "<br> check2";
         $message = "Error: " . $sql . "<br>" . mysqli_error($conn);
      }


      echo $message;
 }
 ?>
