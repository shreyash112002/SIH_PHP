<?php
session_start();

require 'connect.php';

//echo "ID=".$_POST["id_user"];

 if(isset($_POST["pid"]))
 {
      $output = '';
      $query = "
           UPDATE standard
           SET isDelete=1,
           dateOfDeletion = now()
           WHERE std_id='".$_POST["pid"]."'";
      	if ($conn->query($query) === TRUE)
      	{
		    $output = "Record deleted successfully";

		} else {
		    $output = "Error deleting record: " . $conn->error;
		}
      //echo $output;
 }
 ?>
