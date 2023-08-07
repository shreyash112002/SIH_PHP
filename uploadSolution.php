<?php include 'header.php';
if(!isset($_SESSION['teamId'])){
      header("Location: index.php");
}
?>

<!DOCTYPE html>
<head lang="en">
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "stylesheet" type = "text/css" href = "loginform.css">		<!-- Stylesheet only for login form -->
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="bootbox.min.js"></script>


</head>
<body>
<?php require 'connect.php';?>
<div class="container-fluid col-md-12" >
<div class="row">


	<div class="col-md-12">
		<div class="panel panel-info ">
		<div class="panel-heading"> <h3> <p class="font-weight-italic">Upload Solution</p> </h3> </div>
	
		<div class="panel-body">
		
        <form  class="form-horizontal" method="post" enctype="multipart/form-data">

        <label> Idea 1:  <span class="asteriskField">*</span> </label>
        <input id="ps1" maxlength="10" name="ps1" required  placeholder="Problem Statement Number" style="margin-bottom: 10px" type="text" >
        <select id="cat1"   name="cat1" required style="margin-bottom: 10px" >
            <option value="" disabled  selected="selected">Category </option>
            <option value="1" >Software</option>
            <option value="2" >Hardware</option>
        </select>
        <input id="idea1" required name="idea1" style="margin-bottom: 10px" type="file" >

        <label> Idea 2: </label>
        <input id="ps2" maxlength="10" name="ps2" placeholder="Problem Statement Number" style="margin-bottom: 10px" type="text" >
        <select id="cat2" name="cat2" style="margin-bottom: 10px" >
            <option value="" disabled  selected="selected">Category </option>
            <option value="1" >Software</option>
            <option value="2" >Hardware</option>
        </select>
        <input id="idea2" name="idea2" style="margin-bottom: 10px" type="file" >

        <label> Idea 3: </label>
        <input id="ps3" maxlength="10" name="ps3" placeholder="Problem Statement Number" style="margin-bottom: 10px" type="text" >
        <select id="cat3"   name="cat3" style="margin-bottom: 10px" >
            <option value="" disabled  selected="selected">Category </option>
            <option value="1" >Software</option>
            <option value="2" >Hardware</option>
        </select>
        <input id="idea3" name="idea3" style="margin-bottom: 10px" type="file" >

        <div class="form-group">
            <div class="aab controls col-md-4 "></div>
            <div class="controls col-md-8 ">
                <input type="submit" name="submit" value="Upload" class="btn btn-primary btn btn-info" id="submit-id-submit" />
            </div>
        </div>

        </form>

    </div>
    </div>
    </div>
    </div>





</div>


</div>


 <?php
                if(isset($_POST['submit']))
                {
                    global $logts;  
                    $teamid=$_SESSION['teamId'];
                    $location = "images/sih20ideas/";                         
                    
                    if(is_uploaded_file($_FILES['idea1']['tmp_name']))
                    {
                        $ps1 = $_POST["ps1"]; 
                        $cat1 = $_POST["cat1"]; 
                        
                        $file_name_1 = $_FILES['idea1']['name'];
                        $file_size_1 = $_FILES['idea1']['size'];
                        $file_type_1 = $_FILES['idea1']['type'];
                        $temp_name_1 = $_FILES['idea1']['tmp_name'];   
                        $ext_1 = pathinfo($file_name_1, PATHINFO_EXTENSION);                                
                        $updatefilename_1 = basename($_FILES["idea1"]["name"]);
                        $target_file_1 = $teamid."_1_".$updatefilename_1;
                        $target_file_path_1= $location.$target_file_1;
                        //$file_1 = is_uploaded_file($temp_name_1);
                        
                        move_uploaded_file($temp_name_1, $target_file_path_1);    
                        
                         //logic to generate Id
                        $sqlspcl1 = "SELECT max(teamIdeasId) as a FROM team_ideas";
                        $resultspcl1 = $conn->query($sqlspcl1);
                        if ($resultspcl1->num_rows > 0)
                        {
                            $row1 = $resultspcl1->fetch_assoc();
                            $teamIdeasId=$row1["a"]+1;
                        }
                        else
                        {
                            $teamIdeasId=1;
                        }
                        // end of   logic to generate Id

                         $sql1="INSERT INTO team_ideas(teamIdeasId,teamPSCode,teamIdeasCategory,teamIdeasFile,teamId,dateOfCreation,lastModifiedDate) VALUES('$teamIdeasId','$ps1','$cat1','$target_file_path_1','$teamid','$logts','$logts')";  
                         $conn->query($sql1);

                    }                        
                    

                    if(is_uploaded_file($_FILES['idea2']['tmp_name']))
                    {
                        $ps2 = $_POST["ps2"]; 
                        $cat2 = $_POST["cat2"]; 
                        
                        $file_name_2 = $_FILES['idea2']['name'];
                        $file_size_2 = $_FILES['idea2']['size'];
                        $file_type_2 = $_FILES['idea2']['type'];
                        $temp_name_2 = $_FILES['idea2']['tmp_name'];   
                        $ext_2 = pathinfo($file_name_2, PATHINFO_EXTENSION);                                
                        $updatefilename_2 = basename($_FILES["idea2"]["name"]);
                        $target_file_2 = $teamid."_2_".$updatefilename_2;
                        $target_file_path_2= $location.$target_file_2;
                        //$file_1 = is_uploaded_file($temp_name_1);
                        
                        move_uploaded_file($temp_name_2, $target_file_path_2);    
                        
                         //logic to generate Id
                        $sqlspcl1 = "SELECT max(teamIdeasId) as a FROM team_ideas";
                        $resultspcl1 = $conn->query($sqlspcl1);
                        if ($resultspcl1->num_rows > 0)
                        {
                            $row1 = $resultspcl1->fetch_assoc();
                            $teamIdeasId=$row1["a"]+1;
                        }
                        else
                        {
                            $teamIdeasId=1;
                        }
                        // end of   logic to generate Id

                         $sql2="INSERT INTO team_ideas(teamIdeasId,teamPSCode,teamIdeasCategory,teamIdeasFile,teamId,dateOfCreation,lastModifiedDate) VALUES('$teamIdeasId','$ps2','$cat2','$target_file_path_2','$teamid','$logts','$logts')";  
                         $conn->query($sql2);

                    }


                    if(is_uploaded_file($_FILES['idea3']['tmp_name']))
                    {
                        $ps3 = $_POST["ps3"]; 
                        $cat3 = $_POST["cat3"]; 
                        
                        $file_name_3 = $_FILES['idea3']['name'];
                        $file_size_3 = $_FILES['idea3']['size'];
                        $file_type_3 = $_FILES['idea3']['type'];
                        $temp_name_3 = $_FILES['idea3']['tmp_name'];   
                        $ext_3 = pathinfo($file_name_3, PATHINFO_EXTENSION);                                
                        $updatefilename_3 = basename($_FILES["idea3"]["name"]);
                        $target_file_3 = $teamid."_3_".$updatefilename_3;
                        $target_file_path_3= $location.$target_file_3;
                        //$file_1 = is_uploaded_file($temp_name_1);
                        
                        move_uploaded_file($temp_name_3, $target_file_path_3);    
                        
                         //logic to generate Id
                        $sqlspcl1 = "SELECT max(teamIdeasId) as a FROM team_ideas";
                        $resultspcl1 = $conn->query($sqlspcl1);
                        if ($resultspcl1->num_rows > 0)
                        {
                            $row1 = $resultspcl1->fetch_assoc();
                            $teamIdeasId=$row1["a"]+1;
                        }
                        else
                        {
                            $teamIdeasId=1;
                        }
                        // end of   logic to generate Id

                         $sql3="INSERT INTO team_ideas(teamIdeasId,teamPSCode,teamIdeasCategory,teamIdeasFile,teamId,dateOfCreation,lastModifiedDate) VALUES('$teamIdeasId','$ps3','$cat3','$target_file_path_3','$teamid','$logts','$logts')";  
                         $conn->query($sql3);

                    }

                    header("Location: thankYou.php");


                }
            ?>

	</div>

	</div>
	</div>
	</div>


				<br style="clear: both;" />
			</div>
		</div>


	</div>

</body>
<!-- <?php include 'footer.php';?> -->