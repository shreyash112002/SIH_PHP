<?php include 'header.php';?>
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

<div class="col-md-12">
		<div class="panel panel-info ">
		<div class="panel-heading"> <h3> <p class="font-weight-italic">Leader Login</p> </h3> </div>
	
		<div class="panel-body">
<!--<div id="judlogin" class="form-group  ">-->
                    <!--<label > Member 1  <span class="asteriskField">*</span> </label>-->
                    		<form  class="form-horizontal" method="post" >

                <div>
                    <input id="lid" maxlength="50" name="lid" required  placeholder="Leader ID " style="margin-bottom: 10px" type="text" />
                    <br>
                    
                    <input id="pwd" maxlength="50" name="pwd" required  placeholder="Password" style="margin-bottom: 10px" type="text" />
                    <br>
                    
                    <br>
                    
                   
            <div class="controls col-md-8 ">
                <input type="submit" name="submit" value="Submit" class="btn btn-primary btn btn-info" id="submit-id-submit" />
            </div>
                                </div>

        		</form>
        		</div>
        		</div>
        		
<?php require 'connect.php';?>


 <?php
 

                        
                           if(isset($_POST['submit']))
{
                  $lid=$_POST["lid"];
                  $pwd=$_POST["pwd"];
                if($teamid==lid){
                     $sql="SELECT * FROM student_detail where lid=teamid";
                     
                }
                 
                  
                  
                  
                
                    
                        
                  
                  
              }
              
                
            ?>
