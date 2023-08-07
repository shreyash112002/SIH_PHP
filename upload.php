<?php
session_start();

?>


<form name='addProduct'  method='post' enctype="multipart/form-data">
<input  name='addimage' id='s5' type='file'>
<br>
<button  type='submit' name='addfile' id='addfile'>Add Product</button>
            </div>



<?php
if(isset($_POST['addfile']))
{

  $updatefilename = basename($_FILES["addimage"]["name"]);

  $target_dir = "files/";
  $target_file = $target_dir .$updatefilename;
  $uploadOk = 1;
 // echo $target_file;


  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

  // Check if image file is a actual image or fake image
  if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["addimage"]["tmp_name"]);
    if($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }
  }



  // Check file size
  if ($_FILES["addimage"]["size"] > 50000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }



  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }


  // Check if $uploadOk is set to 0 by an error
   if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["addimage"]["tmp_name"], $target_file)) {
      echo "The file for user ".$_SESSION["userid"]." with name: ". basename( $_FILES["addimage"]["name"]). " has been uploaded.";

	} else {
      echo "Sorry, there was an error uploading your file.";
    }
  }
}
/*
// remove all session variables
session_unset();

// destroy the session
session_destroy();
*/
?>
