<?php

use SebastianBergmann\Environment\Console;

 include 'header.php';?>

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
		<div class="panel-heading"> <h3> <p class="font-weight-italic">Marking For Teams</p> </h3> </div>
	
		<div class="panel-body">
		<form  class="form-horizontal" method="post" >
      
            <div id="mrk1" class="form-group required">
                <select style=padding:10px; name='Category' placeholder="Please select" width=20 height=20>
            <?php
                        
                        
                        $sql1="SELECT teamId as t1,teamName as t2 FROM team_detail where YEAR(dateOfCreation)=2023";
                        $result = $conn->query($sql1);   ?>
                        <option value="" >Team Name </option>
                        <?php
                                while($row = $result->fetch_assoc()){
                                $option1=$row['t1'];
                                $option =$row['t2'];
                                ?>
                                
                                    <option value="<?php echo $option1; ?>" > <?php echo $option;?> </option>
                                
                        <?php } ?>
                        </select>
                        
                        
                            <input type="submit" name="search" value="🔍"/> 

                        </div>
            
            <?php if(isset($_POST['search'])) {
                    $teamname = $_POST['Category'];
                     
                          $query = "select teamPSCode as r2,teamIdeasId as r1 from team_ideas where teamId ='$teamname';";
                          $result = $conn->query($query);
                         
                          $var=1;
                          while($row = $result->fetch_assoc()){ 
                              $vid=$row['r1'];
                            
                              
                              ?>
                    <button type="button" value='<?php echo  $vid ?>' onclick="showCode(this.value)" class="btn btn-primary btn btn-info" id="submit-id-submit" >
                    <?php echo $row['r2'] ?></button>

                   
                <?php
                    } 
                    global $team_name;
                    $query1 = "select teamName as f1 from team_detail where teamId ='$teamname';";
                    $result1 = $conn->query($query1);
                    while($row1 = $result1->fetch_assoc()){ 
                              $team_name=$row1['f1'];

                              
                              }
                              ?>
                                    <input type="hidden" id="buttonValue" name="buttonValue" value="">
                                    <input type="hidden" name="tn" value="<?php echo $team_name; ?>">
                                    <input type="hidden" name="teamid" value="<?php echo $teamname; ?>">

                                    <?php  } 
                   ?>
                  
<div id="insert-code" style="display: none;">
    
 <div style="text-align:center;">
  <h1>Problem Statement</h1>
  
</div><br><br>
                <table border="0" cellspacing="0" class="table table-hover"><colgroup width="229"></colgroup> <colgroup width="154"></colgroup> <colgroup width="155"></colgroup> <colgroup width="170"></colgroup>
                <tbody>
                <tr>
                <td style="border: 1px solid #000000;" colspan="5" align="center" valign="middle" height="10"><strong>Rubrics (70)</strong></td>
                </tr>
                <tr>
                <td style="border: 1px solid #000000;" align="center" valign="middle" height="17"><strong>&nbsp;</strong></td>
                <td style="border: 1px solid #000000;" align="center">(0-2)</td>
                <td style="border: 1px solid #000000;" align="center">(3-5)</td>
                <td style="border: 1px solid #000000;" align="center">(6-10)</td>
                <td width="10%" style="border: 1px solid #000000;" align="center">Marks</td>
                
                </tr>
                <tr>
                <td style="border: 1px solid #000000;"  valign="middle" height="40">Clarity of the problem statement</td>
                <td style="border: 1px solid #000000;" align="center" valign="middle">No clarity of problem statement as per the requirement specified</td>
                <td style="border: 1px solid #000000;" align="center" valign="middle">Partial clarity of problem statement as per the requirement specified</td>
                <td style="border: 1px solid #000000;" align="center" valign="middle">Complete clarity of problem statement as per the requirement specified</td>
                <td style="border: 1px solid #000000;"><input id="mk31" maxlength="50" style="font-size: 14pt; height: 63px; width:300px; " name="mk31" type="text" /></td>
                <!--<td style="border: 1px solid #000000;" valign="middle"><input style="margin-bottom: 10px" type="text" /></td>-->
                </tr>
                <tr>
                <td style="border: 1px solid #000000;"  valign="middle" height="76">Identification of stakeholders</td>
                <td style="border: 1px solid #000000;" align="center" valign="middle">Identified stakeholders as mentioned in the problem statement</td>
                <td style="border: 1px solid #000000;" align="center" valign="middle">Identified few stakeholders based on the impact of the problem</td>
                <td style="border: 1px solid #000000;" align="center" valign="middle">Identified all the stakeholders based on the impact of the problem through the process of design thinking</td>
                <td style="border: 1px solid #000000;"><input id="mk32" maxlength="50" style="font-size: 14pt; height: 63px; width:300px; " name="mk32" type="text" /></td>
                </tr>
                <tr>
                <td style="border: 1px solid #000000;"  valign="middle" height="91">Proposed solution</td>
                <td style="border: 1px solid #000000;" align="center" valign="middle">Solution lacks the novelty of the idea, no feasibility study has been done and solution are like a patch-fix solution</td>
                <td style="border: 1px solid #000000;" align="center" valign="middle">The solution has the novelty of the idea, some feasibility study is carried out and identified the scale of impact.</td>
                <td style="border: 1px solid #000000;" align="center" valign="middle">The solution has the novelty of the idea, feasibility, practicability, sustainability and identified the scale of impact.</td>
                <td style="border: 1px solid #000000;"><input id="mk33" maxlength="50" style="font-size: 14pt; height: 80px; width:300px; " name="mk33" type="text" /></td>
                </tr>
                <tr>
                <td style="border: 1px solid #000000;"  valign="middle" height="91">Use case/process flow</td>
                <td style="border: 1px solid #000000;" align="center" valign="middle">No clarity of process or information flow as per the problem requirements</td>
                <td style="border: 1px solid #000000;" align="center" valign="middle">Depiction of use case/process flow without appropriate diagrammatic representation/tools as per problem requirements</td>
                <td style="border: 1px solid #000000;" align="center" valign="middle">Complete clarity of use case and/or process flow well depicted through diagrammatic representation/tools as per problem requirements</td>
                <td style="border: 1px solid #000000;"><input id="mk34" maxlength="50" style="font-size: 14pt; height: 109px; width:300px; " name="mk34" type="text" /></td>
                </tr>
                <tr>
                <td style="border: 1px solid #000000;"  valign="middle" height="76">Justification of Technology stack</td>
                <td style="border: 1px solid #000000;" align="center" valign="middle">No appropriate justification of technological stack used</td>
                <td style="border: 1px solid #000000;" align="center" valign="middle">Appropriate justification of technological stack used as per problem statement</td>
                <td style="border: 1px solid #000000;" align="center" valign="middle">Selection of technological stack based on the ability to upscale, optimize the cost manufacturing/operation / deployment.</td>
                <td style="border: 1px solid #000000;"><input id="mk35" maxlength="50" style="font-size: 14pt; height: 109px; width:300px; " name="mk35" type="text" /></td>
                
                </tr>
                <tr>
                <td style="border: 1px solid #000000;"  valign="middle" height="55">USP of the proposed solution</td>
                <td style="border: 1px solid #000000;" align="center">Identified at least one USP for the problem statement</td>
                <td style="border: 1px solid #000000;" align="center">Identified at lease two USP for the problem statement</td>
                <td style="border: 1px solid #000000;" align="center">Identified more than two USP for the problem statement</td>
                <td style="border: 1px solid #000000;"><input id="mk36" maxlength="50" style="font-size: 14pt; height: 63px; width:300px; " name="mk36" type="text" /></td>
                
                </tr>
                <tr>
                <td style="border: 1px solid #000000;" valign="middle" height="47">Wireframe model / Prototype / PoC</td>
                <td style="border: 1px solid #000000;" align="center">Wireframe model / PoC is not available for solution</td>
                <td style="border: 1px solid #000000;" align="center">Wireframe model / PoC is available for Partial solution</td>
                <td style="border: 1px solid #000000;" align="center">Wireframe model / PoC is available for the complete solution</td>
                <td style="border: 1px solid #000000;"><input id="mk37" maxlength="50" style="font-size: 14pt; height: 63px; width:300px; " name="mk37" type="text" /></td>
                
                </tr>
                </tbody>
</table>
        


       
            <div class="form-group">
                <div class="aab controls col-md-4 "></div>
                <div class="controls col-md-8 ">
                    <input type="submit" name="submit" onclick="showtotal()" value="Submit" class="btn btn-primary btn btn-info" id="submit-id-submit" />
            </div>
  



   

	

        


       
            </div>
            <script>
  function showtotal() {
    const mk31 = parseInt(document.getElementById("mk31").value);
    const mk32 = parseInt(document.getElementById("mk32").value);
    const mk33 = parseInt(document.getElementById("mk33").value);
    const mk34 = parseInt(document.getElementById("mk34").value);
    const mk35 = parseInt(document.getElementById("mk35").value);
    const mk36 = parseInt(document.getElementById("mk36").value);
    const mk37 = parseInt(document.getElementById("mk37").value);
    


    const total = mk31+ mk32 +mk33 +mk34+ mk35 +mk36 +mk37 ;
    alert(`Total marks: ${total}   Want to Submit`); // display the total to the user
    
  }
</script>
    <script>
            
                function showCode(buttonValue) {
                    
                  var x = document.getElementById("insert-code");
                  if (x.style.display === "none") {
                    x.style.display = "block";
                    
                  } else {
                    x.style.display = "none";
                  }
                  
            
                
                document.getElementById("buttonValue").value = buttonValue;
                document.getElementById("tn").value = tn;
                    
                }
</script>	</form>
          

           
           

        </div>
        </div>
        </div>
        </div>

</div>


</div>

  <?php 
             if(isset($_POST['submit']))
                {
            
                    $jid=$_POST["jid"];
                    $teamid=$_POST["teamid"];
                    $team_name=$_POST["tn"];
                    $buttonvalue = $_POST["buttonValue"];
                    
                    $mk31=addslashes($_POST["mk31"]);
                    $mk32=addslashes($_POST["mk32"]);
                    $mk33=addslashes($_POST["mk33"]);
                    $mk34=addslashes($_POST["mk34"]);
                    $mk35=addslashes($_POST["mk35"]);
                    $mk36=addslashes($_POST["mk36"]);
                    $mk37=addslashes($_POST["mk37"]);
                    
                    if ($mk31==null && $mk32==null && $mk33==null && $mk34==null && $mk35==null && $mk36==null && $mk37==null )
                    {
                        echo "<script>alert('All fields are compulsory');</script>";
                    
                        
                    } 
                    
                        
                    else
                    {
                        $sql1="INSERT INTO team_ih_evaluation(teamId,ps_id,rubric_id,rubric_marks,jd_id) VALUES('$teamid','$buttonvalue','1','$mk31','3')"; 
                        $conn->query($sql1);
                        $sql1="INSERT INTO team_ih_evaluation(teamId,ps_id,rubric_id,rubric_marks,jd_id) VALUES('$teamid','$buttonvalue','2','$mk32','3')"; 
                        $conn->query($sql1);
                        $sql1="INSERT INTO team_ih_evaluation(teamId,ps_id,rubric_id,rubric_marks,jd_id) VALUES('$teamid','$buttonvalue','3','$mk33','3')";  
                        $conn->query($sql1);
                        $sql1="INSERT INTO team_ih_evaluation(teamId,ps_id,rubric_id,rubric_marks,jd_id) VALUES('$teamid','$buttonvalue','4','$mk34','3')";  
                        $conn->query($sql1);
                        $sql1="INSERT INTO team_ih_evaluation(teamId,ps_id,rubric_id,rubric_marks,jd_id) VALUES('$teamid','$buttonvalue','5','$mk35','3')";  
                        $conn->query($sql1);
                        $sql1="INSERT INTO team_ih_evaluation(teamId,ps_id,rubric_id,rubric_marks,jd_id) VALUES('$teamid','$buttonvalue','6','$mk36','3')";  
                        $conn->query($sql1);
                        $sql1="INSERT INTO team_ih_evaluation(teamId,ps_id,rubric_id,rubric_marks,jd_id) VALUES('$teamid','$buttonvalue','7','$mk37','3')";  
                        $conn->query($sql1);
                         
                        $sql1="UPDATE team_ideas SET avgmarks = (SELECT SUM(rubric_marks)/3 AS avg_marks FROM team_ih_evaluation  where ps_id= '$buttonvalue' ) WHERE teamIdeasId = '$buttonvalue';";
                        $updateResult = mysqli_query($conn, $sql1);
                        
                    }
                 
                   
                   
                     
                     
                }
                
            ?>
  
  
  
        

	

</body>
 <?php include 'footer.php';?> 
