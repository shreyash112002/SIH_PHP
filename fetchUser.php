<?php
session_start();

// if(!isset($_SESSION['userId'])){
//    header("Location:login.php");
// }
require 'connect.php';

 if(isset($_POST["uid"]))
 {


     $query = "SELECT * FROM employee_detail WHERE emp_id = '".$_POST["uid"]."'";
     // $query2="SELECT department from departmentdetail where deptId='".$_POST["department"]."'"
      $result = $conn->query($query);
      $row = $result->fetch_assoc();

      $results = array("employeedetails" => $row);
      echo json_encode($results);

 }
 ?>
