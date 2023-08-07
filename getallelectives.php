<?php
session_start();

// if(!isset($_SESSION['userId'])){
//    header("Location:login.php");
// }
require 'connect.php';

$_SESSION["dept_id"]=$_POST["deptid"];
$_SESSION["sem_id"]=$_POST["semid"];
$_SESSION["selected_elect"]=array(0,0,0,0,0,0);

     $query = "SELECT elect_id,elect_shortcode,elect_name FROM elective_master WHERE dept_id='".$_POST["deptid"]."' and elect_sem='".$_POST['semid']."' and isDelete=0 and isDisabled=0";
     
     $result = $conn->query($query);
     
    //  echo "<script> alert('".$query."')</script>";
     
      $elective_arr = array();

      while( $row = mysqli_fetch_array($result) ){
          $elect_id = $row['elect_id'];
          $elect_name = $row['elect_name'];

          $elective_arr[] = array("id" => $elect_id, "name" => $elect_name);
      }

//  echo json_encode($query);
    echo json_encode($elective_arr);


 ?>
