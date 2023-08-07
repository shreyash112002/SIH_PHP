<?php

use SebastianBergmann\Environment\Console;

 include 'header.php';?>

<!DOCTYPE html>
<head lang="en">
	<title>Judge 1</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<style>
      .panel-heading{
       text-align:center;
       font-size:1.8rem;
       margin-top:50px;
       margin-bottom:50px;
       color:#275f94;
    }
    input::placeholder {
  color: gray;
}

.textfield{
  
  padding: 6px;
  padding-left:20px;
  
 border:none;
 width:260px;
  height: 50px;
  font-size: 13px;
  border-radius: 15px;
 box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}
.searchbtn{
    height:40px;
    width:40px;
    border:none;
    border-radius:50%;
    margin:20px;
}
.panel-body{
     display: flex;
  justify-content: center;
  align-items: center;
}
.btn{
     padding:10px;
     width:100px;
        border:none;
        border-radius:6px;
        margin-left:10px;
        margin-right:10px;
        margin-top:10px;
        margin-bottom:10px;
        color:white;
        background-color:#3586ff;
}
.submit{
    width:150px;
    margin-left:42%;
    margin-bottom:40px;
}
table {
margin:0 auto;
    color:#38393b;
   
 
    margin-bottom:30px;
   border: 1px solid #2a2b2b; 
   width:70%;
  }
  input::placeholder {
  color: gray;
}


input{
  
  padding: 6px;
  padding-left:20px;
 border:none;

  font-size: 13px;
  border-radius: 15px;
 box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
 border-top: 2px solid hsl(180, 62%, 55%);
}
.height{
    padding:50px;
    height:15%;
}

</style>
<body>
<?php require 'connect.php';?>
<div class="container-fluid col-md-12" >
<div class="row">


	<div class="col-md-12">
		<div class="panel panel-info ">
		<div class="panel-heading"> <h3> <p class="font-weight-italic">Marking For Teams</p> </h3> </div>
	
		<div class="panel-body">
		<form  class="form-horizontal" method="post" >
      <div id="hide" style="display:inline-block;">
            <div id="mrk1" class="form-group required">
                <select style=padding:10px; class="textfield" name='Category' placeholder="Please select" width=20 height=20>
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
                        
                        
                            <input type="submit" name="search" class="searchbtn" value="🔍"/> 

                        </div>
            
            <?php if(isset($_POST['search'])) {
                    $teamname = $_POST['Category'];
                     
                          $query = "select teamPSCode as r2,teamIdeasId as r1 from team_ideas where teamId ='$teamname';";
                          $result = $conn->query($query);
                         
                          $var=1;
                          while($row = $result->fetch_assoc()){ 
                              $vid=$row['r1'];
                            
                              
                              ?>
                    <button type="button" value='<?php echo  $vid ?>' onclick="showCode(this.value)" class="btn btn-primary btn btn-info btn1" id="<?php echo  $vid?>" >
                    <?php echo  $vid ?></button>

                   
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
                                    </div>
<script>function showCode(buttonValue) {
                   
                    
                  var x = document.getElementById("insert-code");
                var y = document.getElementById("hide");
                
                  if (x.style.display === "none") {
                    x.style.display = "block";
                    y.style.display = "none";
                    
                  } else {
                    x.style.display = "none";
                  }

                
                document.getElementById("buttonValue").value = buttonValue;
                document.getElementById("tn").value = tn;
                    
                }
               


  
                </script>
                                    <?php  } 
                   ?>
                  
<div id="insert-code" style="display: none;">
    

    
        
               <div style="display:flex;
               align-items:center;text-align:center;justify-content:center;">
  <h1 style="font-size:1.4rem;color:#808080;">Problem Statement</h1>
  
</div><br><br>
                <table border="0" cellspacing="0" class="table table-hover"><colgroup width="229"></colgroup> <colgroup width="154"></colgroup> <colgroup width="155"></colgroup> <colgroup width="170"></colgroup>
                <tbody>
                <tr>
                <td style="border: 1px solid #2a2b2b;padding:10px"  colspan="5" align="center" valign="middle" height="10"><strong>Rubrics (70)</strong></td>
                </tr>
                <tr>
                <td style="border: 1px solid #2a2b2b;padding:10px" align="center" valign="middle" height="17"><strong>&nbsp;</strong></td>
                <td style="border: 1px solid #2a2b2b;padding:10px"  align="center">(0-2)</td>
                <td style="border: 1px solid #2a2b2b;padding:10px"  align="center">(3-5)</td>
                <td style="border: 1px solid #2a2b2b;padding:10px"  align="center">(6-10)</td>
                <td width="border: 1px solid #2a2b2b;padding:10px"  align="center">Marks</td>
                
                </tr>
                <tr class="height">
                <td style="border: 1px solid #2a2b2b;padding:10px"  valign="middle" height="40">Clarity of the problem statement</td>
                <td style="border: 1px solid #2a2b2b;padding:10px"  align="center" valign="middle">No clarity of problem statement as per the requirement specified</td>
                <td style="border: 1px solid #2a2b2b;padding:10px"  align="center" valign="middle">Partial clarity of problem statement as per the requirement specified</td>
                <td style="border: 1px solid #2a2b2b;padding:10px"  align="center" valign="middle">Complete clarity of problem statement as per the requirement specified</td>
                <td style="border: 1px solid #2a2b2b;padding:10px" ><input id="mk11" maxlength="50" style="font-size: 14pt; height: 80px; width:300px; " name="mk11" type="text" /></td>
                <!--<td style="border: 1px solid #000000;" valign="middle"><input style="margin-bottom: 10px" type="text" /></td>-->
                </tr>
                <tr class="height">
                <td style="border: 1px solid #2a2b2b;padding:10px"  valign="middle" height="76">Identification of stakeholders</td>
                <td style="border: 1px solid #2a2b2b;padding:10px"  align="center" valign="middle">Identified stakeholders as mentioned in the problem statement</td>
                <td style="border: 1px solid #2a2b2b;padding:10px"  align="center" valign="middle">Identified few stakeholders based on the impact of the problem</td>
                <td style="border: 1px solid #2a2b2b;padding:10px"  align="center" valign="middle">Identified all the stakeholders based on the impact of the problem through the process of design thinking</td>
                <td style="border: 1px solid #2a2b2b;padding:10px" ><input id="mk12" maxlength="50" style="font-size: 14pt; height: 80px; width:300px; " name="mk12" type="text" /></td>
                </tr class="height">
                <tr>
                <td style="border: 1px solid #2a2b2b;padding:10px"  valign="middle" height="91">Proposed solution</td>
                <td style="border: 1px solid #2a2b2b;padding:10px"  align="center" valign="middle">Solution lacks the novelty of the idea, no feasibility study has been done and solution are like a patch-fix solution</td>
                <td style="border: 1px solid #2a2b2b;padding:10px"  align="center" valign="middle">The solution has the novelty of the idea, some feasibility study is carried out and identified the scale of impact.</td>
                <td style="border: 1px solid #2a2b2b;padding:10px" align="center" valign="middle">The solution has the novelty of the idea, feasibility, practicability, sustainability and identified the scale of impact.</td>
                <td style="border: 1px solid #2a2b2b;padding:10px" ><input id="mk13" maxlength="50" style="font-size: 14pt; height: 80px; width:300px; " name="mk13" type="text" /></td>
                </tr>
                <tr class="height">
                <td style="border: 1px solid #2a2b2b;padding:10px"  valign="middle" height="91">Use case/process flow</td>
                <td style="border: 1px solid #2a2b2b;padding:10px" align="center" valign="middle">No clarity of process or information flow as per the problem requirements</td>
                <td style="border: 1px solid #2a2b2b;padding:10px" align="center" valign="middle">Depiction of use case/process flow without appropriate diagrammatic representation/tools as per problem requirements</td>
                <td style="border: 1px solid #2a2b2b;padding:10px"  align="center" valign="middle">Complete clarity of use case and/or process flow well depicted through diagrammatic representation/tools as per problem requirements</td>
                <td style="border: 1px solid #2a2b2b;padding:10px" ><input id="mk14" maxlength="50" style="font-size: 14pt; height: 80px; width:300px; " name="mk14" type="text" /></td>
                </tr>
                <tr class="height">
                <td style="border: 1px solid #2a2b2b;padding:10px"  valign="middle" height="76">Justification of Technology stack</td>
                <td style="border: 1px solid #2a2b2b;padding:10px"  align="center" valign="middle">No appropriate justification of technological stack used</td>
                <td style="border: 1px solid #2a2b2b;padding:10px"  align="center" valign="middle">Appropriate justification of technological stack used as per problem statement</td>
                <td style="border: 1px solid #2a2b2b;padding:10px"  align="center" valign="middle">Selection of technological stack based on the ability to upscale, optimize the cost manufacturing/operation / deployment.</td>
                <td style="border: 1px solid #2a2b2b;padding:10px" ><input id="mk15" maxlength="50" style="font-size: 14pt; height: 80px; width:300px; " name="mk15" type="text" /></td>
                
                </tr>
                <tr class="height">
                <td style="border: 1px solid #2a2b2b;padding:10px"   valign="middle" height="55">USP of the proposed solution</td>
                <td style="border: 1px solid #2a2b2b;padding:10px"  align="center">Identified at least one USP for the problem statement</td>
                <td style="border: 1px solid #2a2b2b;padding:10px"  align="center">Identified at lease two USP for the problem statement</td>
                <td style="border: 1px solid #2a2b2b;padding:10px"  align="center">Identified more than two USP for the problem statement</td>
                <td style="border: 1px solid #2a2b2b;padding:10px" ><input id="mk16" maxlength="50" style="font-size: 14pt; height: 80px; width:300px; " name="mk16" type="text" /></td>
                
                </tr>
                <tr class="height">
                <td style="border: 1px solid #2a2b2b;padding:10px"  valign="middle" height="47">Wireframe model / Prototype / PoC</td>
                <td style="border: 1px solid #2a2b2b;padding:10px"  align="center">Wireframe model / PoC is not available for solution</td>
                <td style="border: 1px solid #2a2b2b;padding:10px"  align="center">Wireframe model / PoC is available for Partial solution</td>
                <td style="border: 1px solid #2a2b2b;padding:10px"  align="center">Wireframe model / PoC is available for the complete solution</td>
                <td style="border: 1px solid #2a2b2b;padding:10px" ><input id="mk17" maxlength="50" style="font-size: 14pt; height: 80px; width:300px; " name="mk17" type="text" /></td>
                
                </tr>
                </tbody>
</table>
        


       
            <div class="form-group">
                <div class="aab controls col-md-4 "></div>
                <div class="controls col-md-8 ">
                    <input type="submit" name="submit" onclick="showtotal()" value="Submit" class="btn btn-primary btn btn-info submit" id="submit-id-submit" />
            </div>
  



   

	

        


       
            </div>
            <script>
  function showtotal() {
    const mk11 = parseInt(document.getElementById("mk11").value);
    const mk12 = parseInt(document.getElementById("mk12").value);
    const mk13 = parseInt(document.getElementById("mk13").value);
    const mk14 = parseInt(document.getElementById("mk14").value);
    const mk15 = parseInt(document.getElementById("mk15").value);
    const mk16 = parseInt(document.getElementById("mk16").value);
    const mk17 = parseInt(document.getElementById("mk17").value);
    


    const total = mk11+ mk12 +mk13 +mk14+ mk15 +mk16 +mk17 ;
    alert(`Total marks: ${total}   Want to Submit`); // display the total to the user
    
  }
</script>
    <script>
    const navToggler = document.querySelector('.nav-toggler');
const navMenu = document.querySelector('.site-navbar ul');
const navLinks = document.querySelectorAll('.site-navbar a');

// load all event listners
allEventListners();

// functions of all event listners
function allEventListners() {
  // toggler icon click event
  navToggler.addEventListener('click', togglerClick);
  // nav links click event
  navLinks.forEach( elem => elem.addEventListener('click', navLinkClick));
}

// togglerClick function
function togglerClick() {
  navToggler.classList.toggle('toggler-open');
  navMenu.classList.toggle('open');
}

// navLinkClick function
function navLinkClick() {
  if(navMenu.classList.contains('open')) {
    navToggler.click();
  }
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
                    
                    $mk11=addslashes($_POST["mk11"]);
                    $mk12=addslashes($_POST["mk12"]);
                    $mk13=addslashes($_POST["mk13"]);
                    $mk14=addslashes($_POST["mk14"]);
                    $mk15=addslashes($_POST["mk15"]);
                    $mk16=addslashes($_POST["mk16"]);
                    $mk17=addslashes($_POST["mk17"]);
                    
                    if ($mk11==null && $mk12==null && $mk13==null && $mk14==null && $mk15==null && $mk16==null && $mk17==null )
                    {
                        echo "<script>alert('All fields are compulsory');</script>";
                    
                        
                    } 
                    
                        
                    else
                    {
                        $sql1="INSERT INTO team_ih_evaluation(teamId,ps_id,rubric_id,rubric_marks,jd_id) VALUES('$teamid','$buttonvalue','1','$mk11','1')"; 
                        $conn->query($sql1);
                        $sql1="INSERT INTO team_ih_evaluation(teamId,ps_id,rubric_id,rubric_marks,jd_id) VALUES('$teamid','$buttonvalue','2','$mk12','1')"; 
                        $conn->query($sql1);
                        $sql1="INSERT INTO team_ih_evaluation(teamId,ps_id,rubric_id,rubric_marks,jd_id) VALUES('$teamid','$buttonvalue','3','$mk13','1')";  
                        $conn->query($sql1);
                        $sql1="INSERT INTO team_ih_evaluation(teamId,ps_id,rubric_id,rubric_marks,jd_id) VALUES('$teamid','$buttonvalue','4','$mk14','1')";  
                        $conn->query($sql1);
                        $sql1="INSERT INTO team_ih_evaluation(teamId,ps_id,rubric_id,rubric_marks,jd_id) VALUES('$teamid','$buttonvalue','5','$mk15','1')";  
                        $conn->query($sql1);
                        $sql1="INSERT INTO team_ih_evaluation(teamId,ps_id,rubric_id,rubric_marks,jd_id) VALUES('$teamid','$buttonvalue','6','$mk16','1')";  
                        $conn->query($sql1);
                        $sql1="INSERT INTO team_ih_evaluation(teamId,ps_id,rubric_id,rubric_marks,jd_id) VALUES('$teamid','$buttonvalue','7','$mk17','1')";  
                        $conn->query($sql1);
                         $sql1="UPDATE team_ideas SET avgmarks = (SELECT SUM(rubric_marks)/3 AS avg_marks FROM team_ih_evaluation  where ps_id= '$buttonvalue' ) WHERE teamIdeasId = '$buttonvalue';";
                        $updateResult = mysqli_query($conn, $sql1);
                       
                    }
                 
                    // $sql="INSERT INTO judge1(jid,teamid,mps1,mps2,mps3,addinf) VALUES ('$jid','$teamid','$mps1','$mps2','$mps3','$addinf')";
                    //  $conn->query($sql);
                   
                     
                     
                }
                
            ?>
  
  
  
        

	

</body>

