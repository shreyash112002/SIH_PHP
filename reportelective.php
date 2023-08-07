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
	<script src="csv.js"></script>

</head>
<body>

	<div class="container-fluid col-md-12" >
		<div class="row">

			<?php include 'notices.php';?>
			<?php include 'sidebar.php';?>

      <?php require 'connect.php'; ?>
      <?php require 'generatePDF.php';?>
        <?php include 'top_header.php'; ?>
      <script type="text/javascript">
        $(document).ready(function(){
  $("#id_sem").change(function(){
        var semid = $(this).val();
     //   var deptid = $(this).attr("deptid");
       // alert(deptid);
       // alert(semid);
        $.ajax({
            url: 'getsemelectives.php',
            type: 'post',
            data: {semid:semid},
            dataType: 'json',
            success:function(response){

                var len = response.length;
              // alert(response);
                $("#id_elect").empty();
                 $("#id_elect").append("<option value='' disabled selected='selected'>Select an option </option>");
                for( var i = 0; i<len; i++){
                    var id = response[i]['id'];
                    var name = response[i]['name'];
                    
                    $("#id_elect").append("<option value='"+id+"'>"+name+"</option>");

                }
            }
        });
    });
  });

      </script>

<div class="col-md-10">
<div class="col-md-12">
<div class="panel panel-default ">
<div class="panel-heading">  <p class="font-weight-italic" style="text-align: center; font-size:24px"> Reports</p></div>
<div class="panel-body">

<div class="container col-md-12" id="users">
  <form  class="form-horizontal" method="post" >
          <div id="div_id_report" class="form-group required">

      Semester :
        <select  required id="id_sem" name="sem" style="margin-bottom: 10px" >
            <option value="" disabled selected="selected">Select an option </option>
           
              <option value="8">8</option>
              <option value="7">7</option>
               <?php 
                if($_SESSION["user_role_id"] == 3)
                {
              ?>
                 
              <option value="6">6</option>
              <option value="5">5</option>
              <?php 
                }
              ?>
            
           ?>
        </select>
  
 
  Elective :
          <select  id="id_elect" name="elect" required style="margin-bottom: 10px" >
              <option value="" disabled  selected="selected">Select an option </option>
             
          </select>

 <?php
              if($_SESSION['user_dept_id'] == 1)
              {
         ?>
  Department :
  <select  id="id_dept" name="dept" style="margin-bottom: 10px" >
      <?php
         $mysqlquery="SELECT dept_id,dept_name FROM dept_master WHERE isDelete=0 and isDisabled=0";
         $mysqlresult=$conn->query($mysqlquery);
         if($mysqlresult->num_rows>0)
         {
             while($myrow = $mysqlresult->fetch_assoc())
             {
                 echo "<option value='".$myrow['dept_id']."'>".$myrow['dept_name']."</option>";

             }
         }

     ?>
  </select>
<?php
            }
            else
            {
            ?>
            <input class="input-md textinput form-control" id="id_dept"  maxlength="150" name="dept" placeholder="department" value="<?php echo $_SESSION['user_dept_id']; ?>" style="margin-bottom: 10px" type="hidden" />

            <?php
            }
            ?>

            <input type="submit" name="submit" value="Search" class="btn btn-primary btn btn-info" id="submit-id-submit" onclick="myFunction()"/>
  </div>
</form>

                              

<?php

if(isset($_POST['submit']))
{
  	
    $sem=$_POST["sem"];
    $elect=$_POST["elect"];
    $dept=$_POST["dept"];

		$query = "SELECT sd.sd_id as sd_id,dm.dept_sc as dept, sd.sd_roll as roll , sd.sd_fname as fname,sd.sd_lname as lname FROM student_detail sd, dept_master dm,student_elective se where";

	
  	
    if ($dept !=1) 
    {
        $query .= " sd.sd_dept='".$dept."' and";
    }
    else
    {
      $query .= " ";
    }

    if ($elect) {
        $query .= " se.choice=1 and se.elect_id='".$elect."' and sd.sd_id=se.sd_id and";
    }
    else
    {
      $query .= " ";
    }

   $query .=" sd.sd_dept=dm.dept_id and sd.sd_sem='".$sem."' and sd.isDelete=0 and sd.isDisabled=0 ORDER BY sd.sd_dept asc , sd.sd_roll asc";

  // echo $query;
		$data = array();


    $result = $conn->query($query);

}


 ?>

 <div class="container">
   <div id="adduser" style=" margin-top:50px" class="mainbox col-md-10">
       <div class="panel panel-info" >
           <div class="panel-heading">
               <div class="panel-title"> Student </div>
           </div>
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
									<table id="trnxlist_table " border="2" style="table-layout: fixed;font-size:12px;" class="table table-bordred table-striped ">
								 <tr>
                    <th width="03%">
                       Sr. No.
                    </th>
										<th width="7%">
											 Dept
										</th>
										<th width="5%">
											 Roll No.
										</th>
										<th width="15%">
												Name
										</th >
									
								</tr>
							<tbody>';
			$header=array('Sr. No.', 'Dept', 'Roll No.', 'Name');
      $i=1;
      while($row=$result->fetch_assoc())
       {

       	$p1= array($row["dept"], $row["roll"], $row["fname"].' '.$row["lname"]);
            //print_r($p1);
				$outputtopdfhtml.='<tr>
														<td width="03%">'.$i.'</td>
														<td width="7%" style="word-wrap: break-word">'.$row["dept"].'</td>
                            <td width="5%">'. $row["roll"].' </td>
														<td width="15%" style="word-wrap: break-word">'.$row["fname"].' '.$row["lname"].' </td>';
			
				$outputtopdfhtml.='</tr>';
        $data[]= $p1;
        
                       //  print_r($data);
                         
       $i++;
       }
			 }
     else {
       echo "No details";
     }

$outputtopdfhtml.='
                </tbody>
             </table>';
						 echo $outputtopdfhtml;
?>


						 <form method="post" style="text-align: center;">
										<input type="submit" name="create_pdf"  class="btn btn-warning" value="Export to PDF" />
										<input type="hidden" name="topdf" value="<?php echo print base64_encode(serialize($outputtopdfhtml)) ?> " />
										<input type="hidden" name="filename" value="Electives" />
										<input type="hidden" name="head" value="<?php print base64_encode(serialize($header)) ?> " />
										<input type="hidden" name="dat" value="<?php print base64_encode(serialize($data)) ?> " />
									  <input type="submit" name="create_csv" class="btn btn-success " value="export to excel"/>
							</form>

           </div>
       </div>



       </div>
     </div>


						</div>
			   </div>
       </div>

		</div>
	</div>
</div>


				<br style="clear: both;" />
			</div>
		</div>


	</div>


</body>
<?php include 'footer.php';?>

<?php
if(isset($_POST["create_pdf"])){
$content=unserialize(base64_decode($_POST["topdf"]));

$filename=$_POST["filename"];
$fn=$filename.".pdf";

$title=$filename;

genPDF($title,$content,$fn);
}
?>


<?php
if(isset($_POST["create_csv"])){

	$header=unserialize(base64_decode($_POST["head"]));
  $data = array();
	$data =unserialize(base64_decode($_POST["dat"]));

	$filename=$_POST["filename"];
	$fn=$filename.".csv";

	header('Content-Type: text/csv; charset=utf-8');
	header('Content-Disposition: attachment; filename='.$fn);
	$output = fopen("php://output", "w");
	ob_end_clean();
	fputcsv($output,$header);

	$i=1;
	if (count($data) > 0) {
	    foreach ($data as $eachrecord) {
					$k=array_values($eachrecord);
					array_unshift($k, $i);
				  fputcsv($output, $k);
					$i++;
			}
	}
 fclose($output);

}

 ?>
