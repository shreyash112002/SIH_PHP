<?php
session_start();

require 'connect.php';

//echo "ID=".$_POST["id_user"];

 if(isset($_POST["vid"]))
 {
      $output = '';
      $query = "
           UPDATE division
           SET isDelete=1,
           dateOfDeletion = now()
           WHERE div_id='".$_POST["vid"]."'";
      	if ($conn->query($query) === TRUE)
      	{
		    $output = "Division deleted successfully";

		} else {
		    $output = "Error deleting record: " . $conn->error;
		}
      //echo $output;
 }
 ?>
