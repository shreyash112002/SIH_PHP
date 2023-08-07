<?php
session_start();

require 'connect.php';

//echo "ID=".$_POST["id_user"];

 if(isset($_POST["uid"]))
 {
      $output = '';
      $query = "
           UPDATE employee_detail
           SET isDelete=1,
           dateOfDeletion = now()
           WHERE emp_id='".$_POST["uid"]."'";
      	if ($conn->query($query) === TRUE)
      	{
		    $output = "Record deleted successfully";

		} else {
		    $output = "Error deleting record: " . $conn->error;
		}
      //echo $output;
 }
 ?>
