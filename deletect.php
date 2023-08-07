<?php
session_start();

require 'connect.php';

//echo "ID=".$_POST["id_user"];

 if(isset($_POST["pid"]))
 {
      $output = '';
      $query = "
           UPDATE std_div_ct
           SET isDelete=1,
           dateOfDeletion = now()
           WHERE sdc_id='".$_POST["pid"]."'";
      	if ($conn->query($query) === TRUE)
      	{
		    $output = "Class Teacher deleted successfully";

		} else {
		    $output = "Error deleting record: " . $conn->error;
		}
      //echo $output;
 }
 ?>
