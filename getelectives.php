<?php
session_start();

// if(!isset($_SESSION['userId'])){
//    header("Location:login.php");
// }
require 'connect.php';
$deptid=1;
$semid=$_SESSION["sem_id"];
$_SESSION["selected_elect"][$_POST["ch"]] =$_POST["electid"];
//array_push($_SESSION["selected_elect"],$_POST["electid"]);
//array_push($elective_arr,1);


$query = "SELECT elect_id,elect_shortcode,elect_name FROM elective_master WHERE dept_id='".$deptid."' and elect_sem='".$semid."' and isDelete=0 and isDisabled=0";
     
     $result = $conn->query($query);
     
    //  echo "<script> alert('".$query."')</script>";
      //$selected_elective_arr = array();
      $elective_arr = array();

      while( $row = mysqli_fetch_array($result) ){
          $elect_id = $row['elect_id'];
          $elect_name = $row['elect_name'];

          if(!in_array($elect_id, $_SESSION["selected_elect"]))
          {
            $elective_arr[] = array("id" => $elect_id, "name" => $elect_name);
          }       
          
      }

//  echo json_encode($query);
  echo json_encode($elective_arr);


 ?>
