<?php include'connnect.php'; ?>
<?php include 'header.php';?>

<!DOCTYPE html>
<head lang="en">
	<title>Registered Teams</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--<link rel = "stylesheet" type = "text/css" href = "loginform.css">		<!-- Stylesheet only for login form -->
	<!--<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">-->
	<!--<script src="http://code.jquery1.com/jquery-1.11.1.min.js"></script>-->
	<!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>-->
 <!-- <script src="bootbox.min.js"></script>-->

<script type="text/javascript">
$(document).ready(function() {
    $("#frmCSVImport").on("submit", function () {

	    $("#response").attr("class", "");
        $("#response").html("");
        var fileType = ".csv";
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + fileType + ")$");
        if (!regex.test($("#file").val().toLowerCase())) {
        	    $("#response").addClass("error");
        	    $("#response").addClass("display-block");
            $("#response").html("Invalid File. Upload : <b>" + fileType + "</b> Files.");
            return false;
        }
        return true;
    });
});
</script>


<html>
    <body>
        <br><br><br>
        
        <button onclick="showcode(1)"class="btn btn-default" >2020</button> 
        <button onclick="showcode(2)"class="btn btn-default" >2022</button> 
        <button onclick="showcode(3)"class="btn btn-default" >2023</button> 

        <br><br>
        <div id="insert-code1" style="display: none;">
                                                <?php
                                                $query = "SELECT  teamId, teamName  FROM team_detail where YEAR(dateOfCreation)=2020 ";
                                            $result = $conn->query($query);
                     
                                                $outputtopdfhtml='';
                                               if (!$result)
                                               {
                                                   trigger_error('Invalid query: ' . $conn->error);
                                               }
                                               if($result->num_rows>0)
                                               {
                                
                                                 $outputtopdfhtml.='
                                                    <table id="trnxlist_table " border="2" style="table-layout: fixed;font-size:12px;" class="table table-bordred table-hover table-striped table-responsive">
                                                 <tr>
                                                        <th width="05%">
                                                           Sr. No.
                                                        </th>
                                                        <th width="15%">
                                                           Team Name
                                                        </th>
                                                       
                                                        <th width="50%">
                                                                Team Details
                                                        </th>
                                                        
                                                        <th width="10%">
                                                                PS Number
                                                        </th>
                                                         <th width="10%">
                                                                Category
                                                        </th>
                                                    
                                                </tr>
                                            <tbody>';
                                
                                
                                      $i=1;
                                      while($row=$result->fetch_assoc())
                                       {
                                        $outputtopdfhtml.='<tr>
                                                        <td width="05%">'.$i.'</td>
                                                        <td width="15%" style="word-wrap: break-word">'.$row["teamName"].'</td>';
                                
                                
                                        $subquery = "SELECT  * FROM student_detail where teamId='".$row['teamId']."'  ";
                                        $subresult = $conn->query($subquery);
                                        $teamMembers="";
                                        while($subrow=$subresult->fetch_assoc())
                                       {
                                       	$deptName = getDeptName($subrow['sd_dept']);
                                    	$className = getClassName($subrow['sd_class']);
                                    	$teamMembers.=$subrow['sd_fname']." ".$subrow['sd_lname']." (".$className."-".$deptName.")<br>";
                                       }
                                
                                         $outputtopdfhtml.='<td width="50%">'. $teamMembers.' </td>';
                                
                                        $psnumbers ="";
                                         $pscats ="";
                                        $subquery = "SELECT  * FROM team_ideas where teamId='".$row['teamId']."' ";
                                        $subresult = $conn->query($subquery);
                                
                                        while($subrow=$subresult->fetch_assoc())
                                       {
                                       	$psnumbers.=$subrow['teamPSCode']."<br>";
                                      	
                                      	if($subrow['teamIdeasCategory'] ==1)
                                      	{
                                      		$pscats.=" Software <br>";
                                      	}
                                      	if($subrow['teamIdeasCategory'] ==2)
                                      	{
                                      		$pscats.=" Hardware <br>";
                                      	}
                                
                                       }
                                
                                         $outputtopdfhtml.='<td width="10%">'. $psnumbers.' </td>';
                                         $outputtopdfhtml.='<th width="10%">'. $pscats.'</th>';
                                
                                    
                                                $outputtopdfhtml.='</tr>';
                                        $data[]= $p1;
                                        $i++;
                                        }
                                      $outputtopdfhtml.='
                                                </tbody>
                                             </table>';
                                        }
                                     else {
                                       echo "No details";
                                     }
                                
                                
                                 echo $outputtopdfhtml;
                                
                                
                                 function getDeptName($deptId){
                                
                                 	if($deptId =="1"){
                                 		return "EXTC";
                                 	}
                                 	elseif($deptId =="2"){
                                 		return "MECH";
                                 	}
                                 	elseif($deptId =="3"){
                                 		return "IT";
                                 	}
                                 	elseif($deptId =="4"){
                                 		return "COMP";
                                 	}
                                 }
                                
                                
                                function getClassName($deptId){
                                
                                 	if($deptId =="4"){
                                 		return "BE";
                                 	}
                                 	elseif($deptId =="3"){
                                 		return "TE";
                                 	}
                                 	elseif($deptId =="2"){
                                 		return "SE";
                                 	}
                                 }
                    
                    ?>
                     
        </div>
        
        <div id="insert-code2" style="display: none;">
                                   <?php
                                                $query = "SELECT  teamId, teamName  FROM team_detail where YEAR(dateOfCreation)=2022 ";
                                            $result = $conn->query($query);
                     
                                                $outputtopdfhtml='';
                                               if (!$result)
                                               {
                                                   trigger_error('Invalid query: ' . $conn->error);
                                               }
                                               if($result->num_rows>0)
                                               {
                                
                                                 $outputtopdfhtml.='
                                                    <table id="trnxlist_table " border="2" style="table-layout: fixed;font-size:12px;" class="table table-bordred table-hover table-striped table-responsive">
                                                 <tr>
                                                        <th width="05%">
                                                           Sr. No.
                                                        </th>
                                                        <th width="15%">
                                                           Team Name
                                                        </th>
                                                       
                                                        <th width="50%">
                                                                Team Details
                                                        </th>
                                                        
                                                        <th width="10%">
                                                                PS Number
                                                        </th>
                                                         <th width="10%">
                                                                Category
                                                        </th>
                                                    
                                                </tr>
                                            <tbody>';
                                
                                
                                      $i=1;
                                      while($row=$result->fetch_assoc())
                                       {
                                        $outputtopdfhtml.='<tr>
                                                        <td width="05%">'.$i.'</td>
                                                        <td width="15%" style="word-wrap: break-word">'.$row["teamName"].'</td>';
                                
                                
                                        $subquery = "SELECT  * FROM student_detail where teamId='".$row['teamId']."'  ";
                                        $subresult = $conn->query($subquery);
                                        $teamMembers="";
                                        while($subrow=$subresult->fetch_assoc())
                                       {
                                       	$deptName = getDeptName1($subrow['sd_dept']);
                                    	$className = getClassName1($subrow['sd_class']);
                                    	$teamMembers.=$subrow['sd_fname']." ".$subrow['sd_lname']." (".$className."-".$deptName.")<br>";
                                       }
                                
                                         $outputtopdfhtml.='<td width="50%">'. $teamMembers.' </td>';
                                
                                        $psnumbers ="";
                                         $pscats ="";
                                        $subquery = "SELECT  * FROM team_ideas where teamId='".$row['teamId']."' ";
                                        $subresult = $conn->query($subquery);
                                
                                        while($subrow=$subresult->fetch_assoc())
                                       {
                                       	$psnumbers.=$subrow['teamPSCode']."<br>";
                                      	
                                      	if($subrow['teamIdeasCategory'] ==1)
                                      	{
                                      		$pscats.=" Software <br>";
                                      	}
                                      	if($subrow['teamIdeasCategory'] ==2)
                                      	{
                                      		$pscats.=" Hardware <br>";
                                      	}
                                
                                       }
                                
                                         $outputtopdfhtml.='<td width="10%">'. $psnumbers.' </td>';
                                         $outputtopdfhtml.='<th width="10%">'. $pscats.'</th>';
                                
                                    
                                                $outputtopdfhtml.='</tr>';
                                        $data[]= $p1;
                                        $i++;
                                        }
                                      $outputtopdfhtml.='
                                                </tbody>
                                             </table>';
                                        }
                                     else {
                                       echo "No details";
                                     }
                                
                                
                                 echo $outputtopdfhtml;
                                
                                
                                 function getDeptName1($deptId){
                                
                                 	if($deptId =="1"){
                                 		return "EXTC";
                                 	}
                                 	elseif($deptId =="2"){
                                 		return "MECH";
                                 	}
                                 	elseif($deptId =="3"){
                                 		return "IT";
                                 	}
                                 	elseif($deptId =="4"){
                                 		return "COMP";
                                 	}
                                 }
                                
                                
                                function getClassName1($deptId){
                                
                                 	if($deptId =="4"){
                                 		return "BE";
                                 	}
                                 	elseif($deptId =="3"){
                                 		return "TE";
                                 	}
                                 	elseif($deptId =="2"){
                                 		return "SE";
                                 	}
                                 }
                    
                    ?>
                                         
        </div>
        
        <div id="insert-code3" style="display: block;">
            
            <div class="counter-up">
    <div class="content">
                <div class="box">
        
        <div class="counter"data-val="564">000</div>
        <div class="text">Problem Statments</div>
      </div></div></div>
                                   <?php
                                                $query = "SELECT  teamId, teamName  FROM team_detail where YEAR(dateOfCreation)=2023 ";
                                            $result = $conn->query($query);
                     
                                                $outputtopdfhtml='';
                                               if (!$result)
                                               {
                                                   trigger_error('Invalid query: ' . $conn->error);
                                               }
                                               if($result->num_rows>0)
                                               {
                                
                                                 $outputtopdfhtml.='
                                                    <table id="trnxlist_table " border="2" style="table-layout: fixed;font-size:12px;" class="table table-bordred table-hover table-striped table-responsive">
                                                 <tr>
                                                        <th width="05%">
                                                           Sr. No.
                                                        </th>
                                                        <th width="15%">
                                                           Team Name
                                                        </th>
                                                       
                                                        <th width="50%">
                                                                Team Details
                                                        </th>
                                                        
                                                        <th width="10%">
                                                                PS Number
                                                        </th>
                                                         <th width="10%">
                                                                Category
                                                        </th>
                                                    
                                                </tr>
                                            <tbody>';
                                
                                
                                      $i=1;
                                      while($row=$result->fetch_assoc())
                                       {
                                        $outputtopdfhtml.='<tr>
                                                        <td width="05%">'.$i.'</td>
                                                        <td width="15%" style="word-wrap: break-word">'.$row["teamName"].'</td>';
                                
                                
                                        $subquery = "SELECT  * FROM student_detail where teamId='".$row['teamId']."'  ";
                                        $subresult = $conn->query($subquery);
                                        $teamMembers="";
                                        while($subrow=$subresult->fetch_assoc())
                                       {
                                       	$deptName = getDeptName2($subrow['sd_dept']);
                                    	$className = getClassName2($subrow['sd_class']);
                                    	$teamMembers.=$subrow['sd_fname']." ".$subrow['sd_lname']." (".$className."-".$deptName.")<br>";
                                       }
                                
                                         $outputtopdfhtml.='<td width="50%">'. $teamMembers.' </td>';
                                
                                        $psnumbers ="";
                                         $pscats ="";
                                        $subquery = "SELECT  * FROM team_ideas where teamId='".$row['teamId']."' ";
                                        $subresult = $conn->query($subquery);
                                
                                        while($subrow=$subresult->fetch_assoc())
                                       {
                                       	$psnumbers.=$subrow['teamPSCode']."<br>";
                                      	
                                      	if($subrow['teamIdeasCategory'] ==1)
                                      	{
                                      		$pscats.=" Software <br>";
                                      	}
                                      	if($subrow['teamIdeasCategory'] ==2)
                                      	{
                                      		$pscats.=" Hardware <br>";
                                      	}
                                
                                       }
                                
                                         $outputtopdfhtml.='<td width="10%">'. $psnumbers.' </td>';
                                         $outputtopdfhtml.='<th width="10%">'. $pscats.'</th>';
                                
                                    
                                                $outputtopdfhtml.='</tr>';
                                        $data[]= $p1;
                                        $i++;
                                        }
                                      $outputtopdfhtml.='
                                                </tbody>
                                             </table>';
                                        }
                                     else {
                                       echo "No details";
                                     }
                                
                                
                                 echo $outputtopdfhtml;
                                
                                
                                 function getDeptName2($deptId){
                                
                                 	if($deptId =="1"){
                                 		return "EXTC";
                                 	}
                                 	elseif($deptId =="2"){
                                 		return "MECH";
                                 	}
                                 	elseif($deptId =="3"){
                                 		return "IT";
                                 	}
                                 	elseif($deptId =="4"){
                                 		return "COMP";
                                 	}
                                 }
                                
                                
                                function getClassName2($deptId){
                                
                                 	if($deptId =="4"){
                                 		return "BE";
                                 	}
                                 	elseif($deptId =="3"){
                                 		return "TE";
                                 	}
                                 	elseif($deptId =="2"){
                                 		return "SE";
                                 	}
                                 }
                    
                    ?>
                                         
        
        </div>
       

        <script>
        
                function showcode(val) {
                 if (val==1){
                  var x = document.getElementById("insert-code1");
                  if (x.style.display === "none") {
                    x.style.display = "block";
                    
                    document.getElementById("insert-code2").style.display = "none";
                    document.getElementById("insert-code3").style.display="none";
                    
                  } else {
                    x.style.display = "none";
                  }
                 }
                 else if (val==2){
                  var x = document.getElementById("insert-code2");
                  if (x.style.display === "none") {
                    x.style.display = "block";
                    document.getElementById("insert-code1").style.display = "none";
                    document.getElementById("insert-code3").style.display="none";
                  } else {
                    x.style.display = "none";
                  }
                 }
                else if (val==3){
                  var x = document.getElementById("insert-code3");
                  if (x.style.display === "none") {
                    x.style.display = "block";
                    document.getElementById("insert-code2").style.display = "none";
                    document.getElementById("insert-code1").style.display="none";
                  } else {
                    x.style.display = "none";
                  }
                 }
                 
                 
                  
            
                    
                }
</script>
    </body>
    
    <style> 
/*.btn{*/
/*         background-color: #31708f ;*/
/*         color:#fff;*/
/*         border:none;*/
/*         font-size:15px;*/
/*         margin-right:30px;*/
         
     }
</style>
</html> 

