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


</head>
<body>

<div class="container-fluid col-md-12" >
<div class="row">
<?php require 'connect.php';?>
<?php require 'util.php';?>

<style>
.card {
float: left;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 15%;
  border-radius: 5px;
  background-color: lightyellow;
  margin : 10px 8px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;

}
</style>



<div class="col-md-12">
	<div class="col-md-12">
	
	<div class="panel panel-info ">
	
	<div class="panel-heading"><h3>  <p class="font-weight-italic">Registered Teams</p></h3></div>
	
	<!--<div class="panel-body">-->
    <!-- <h3>Presentation schedule will be published here on 10th Mar, 2022. </h3> -->
 <!--   <h3 style="margin-bottom:30px;">Congratulation  to all the teams for Selected in Internal Hackhathon for Smart India Hackathon-2022</h3>-->
 <!--   <iframe src="asset/SIH_IH_Result.pdf" style="width:100%; height:900px; margin-bottom:40px" frameborder="0"></iframe>-->


	<div class="container col-md-12" id="users">
	
  <div class="row row-fluid">
<?php

$totalteams = 0;

	  $query = "SELECT sd_dept, COUNT(teamId) as cnt FROM student_detail where isTeamLeader=1 and isDelete=0 and isDisabled=0 GROUP BY sd_dept";
      $result = $conn->query($query);
      
         while($row=$result->fetch_assoc())
       {

       	$totalteams = $totalteams + $row['cnt'];
?>
	<div class="card">
	  <div class="container ">
	    <h4><b> <?php echo getDeptName($row['sd_dept']); ?> </b></h4> 
	    <p>  <?php echo $row['cnt']; ?>  </p> 
	  </div>
	</div>
<?
       }

?>
	
	<div class="card" style="background-color: lightblue;">
	  <div class="container ">
	    <h4><b>Total Teams</b></h4> 
	    <p><?php echo $totalteams; ?></p> 
	  </div>
	</div>

</div>
 <hr>

  <div class="row row-fluid">
<?php

$totalfemale = 0;

    $query = "SELECT count(*) as fcnt FROM `student_detail` where sd_gender='F' and isDisabled =0";
      $result = $conn->query($query);
      
    $row=$result->fetch_assoc();
    $totalmale = ($totalteams *6) - $row['fcnt'];
?>

  <div class="card">
    <div class="container ">
      <h4>Male </b></h4> 
      <p>  <?php echo $totalmale >0 ?  $totalmale : 0; ?>  </p> 
    </div>
  </div>

  <div class="card">
    <div class="container ">
      <h4>Female </b></h4> 
      <p>  <?php echo $row['fcnt'] >0 ?  $row['fcnt'] : 0;  ?>  </p> 
    </div>
  </div>

  
  <div class="card" style="background-color: lightblue;">
    <div class="container ">
      <h4><b>Total Students</b></h4> 
      <p><?php echo ($totalteams*6); ?></p> 
    </div>
  </div>

</div>
 <hr>


  <div class="row row-fluid">
<?php

	$totalteams = 0;
  	$query = "SELECT COUNT(teamIdeasId) as cnt FROM team_ideas where teamIdeasCategory=1 and isDelete=0 and isDisabled=0 ";
  	$result = $conn->query($query);
  	
  	$row=$result->fetch_assoc();
 	$totalteams = $totalteams + $row['cnt'];
?>
	<div class="card">
	  <div class="container ">
	    <h4><b> # PS (Software) </b></h4> 
	    <p>  <?php echo $row['cnt']; ?>  </p> 
	  </div>
	</div>

<?php

  	$query = "SELECT COUNT(teamIdeasId) as cnt FROM team_ideas where teamIdeasCategory=2 and isDelete=0 and isDisabled=0 ";
  	$result = $conn->query($query);
  	
  	$row=$result->fetch_assoc();
 	$totalteams = $totalteams + $row['cnt'];
?>
	<div class="card">
	  <div class="container ">
	    <h4><b> # PS (Hardware) </b></h4> 
	    <p>  <?php echo $row['cnt']; ?>  </p> 
	  </div>
	</div>

	
	<div class="card" style="background-color: lightblue;">
	  <div class="container ">
	    <h4><b># Total PS</b></h4> 
	    <p><?php echo $totalteams; ?></p> 
	  </div>
	</div>

</div>
<?php

        $query = "SELECT  teamId, teamName  FROM team_detail where isDelete=0 and isDisabled=0";
        $result = $conn->query($query);
 ?>

 <div class="container">
   <div id="adduser" style=" margin-top:50px" class="mainbox col-md-10">
     
           <div class="panel-body table-responsive" >
    <?php

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
                        <th width="20%">
                             Team Leader 
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


        $subquery = "SELECT  * FROM student_detail where teamId='".$row['teamId']."' and isDelete=0 and isDisabled=0";
        $subresult = $conn->query($subquery);

        $teamLeader="";
    	$subrow=$subresult->fetch_assoc();
    	$deptName = getDeptName($subrow['sd_dept']);
    	$className = getClassName($subrow['sd_class']);
    	$teamLeader =$subrow['sd_fname']." ".$subrow['sd_lname']." (".$className."-".$deptName.")";
    	$outputtopdfhtml.='<td width="20%" style="word-wrap: break-word">'.$teamLeader.'</td>';
        
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
        $subquery = "SELECT  * FROM team_ideas where teamId='".$row['teamId']."' and isDelete=0 and isDisabled=0";
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


                      <!--  <form method="post" style="text-align: center;">
                                        <input type="submit" name="create_pdf"  class="btn btn-warning" value="Export to PDF" />
                                        <input type="hidden" name="topdf" value="<?php echo print base64_encode(serialize($outputtopdfhtml)) ?> " />
                                        <input type="hidden" name="filename" value="Electives" />
                                        <input type="hidden" name="head" value="<?php print base64_encode(serialize($header)) ?> " />
                                        <input type="hidden" name="dat" value="<?php print base64_encode(serialize($data)) ?> " />
                                      <input type="submit" name="create_csv" class="btn btn-success " value="export to excel"/>
                            </form>-->
           </div>
       
</div>
</div>

 <a  class="btn btn-default" href="leaderlog.php">Edit</a>


</div>
 </div>
 </div>
</div>

           



				<br style="clear: both;" />
			</div>
		</div>


	</div>

</body>
-->