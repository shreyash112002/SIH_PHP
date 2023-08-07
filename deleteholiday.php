<?php
session_start();

require 'connect.php';

//echo "ID=".$_POST["id_user"];

 if(isset($_POST["pid"]))
 {
      $output = '';
      $query = "
           UPDATE holiday_master
           SET isDelete=1,
           dateOfDeletion = now()
           WHERE hm_id='".$_POST["pid"]."'";
      	if ($conn->query($query) === TRUE)
      	{
		    $output = "Holiday deleted successfully";

		} else {
		    $output = "Error deleting record: " . $conn->error;
		}
      //echo $output;
 }
 ?>
