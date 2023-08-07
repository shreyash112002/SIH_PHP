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

<?php include 'notices.php';?>
<?php include 'sidebar.php';?>
<?php require 'connect.php';?>


	
<div class="col-md-10">
	<div class="col-md-12">
	
	<div class="container col-md-12" id="users">
	<ul class="nav nav-tabs">
	<li class="active"> <a href="#1" data-toggle="tab">Upload Student</a> </li>
	<li><a href="#2" data-toggle="tab">View Attendance</a> </li>
	</ul>
	<div class="tab-content clearfix ">
		<div class="tab-pane active" id="1">

   		<div class="container">
        <div id="adduser"  class="mainbox col-md-6 col-md-offset-2 col-sm-8 col-sm-offset-2">
      

        <?php

if (isset($_POST["import"])) {
	global $logts;

	$sdc = $_POST["sdc"];
    $adate = $_POST['adate']; 
    $fileName = $_FILES["file"]["tmp_name"];                         


    //logic to generate Id
    $sqlspcl1 = "SELECT max(ar_id) as a FROM attendance_record";
    $resultspcl1 = $conn->query($sqlspcl1);
    if ($resultspcl1->num_rows > 0)
    {
        $row1 = $resultspcl1->fetch_assoc();
        $ar_id=$row1["a"]+1;
    }
    else
    {
        $ar_id=1;
    }
    // end of   logic to generate Id

    $sqlInsert = "INSERT INTO attendance_record(ar_id,ar_sdc_id, ar_date,dateOfCreation,lastModifiedDate) VALUES ($ar_id,$sdc,'".$adate."','$logts','$logts')";

   // echo "<br>".$sqlInsert;

    $result = $conn->query($sqlInsert);

    if (! empty($result)) {
    
        if ($_FILES["file"]["size"] > 0) {
                
            $file = fopen($fileName, "r");
            while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {

            // logic to generate Id
            $sqlspcl1 = "SELECT max(a_id) as a FROM attendance_detail";
            $resultspcl1 = $conn->query($sqlspcl1);
            if ($resultspcl1->num_rows > 0)
            {
                $row1 = $resultspcl1->fetch_assoc();
                $a_id=$row1["a"]+1;
            }
            else
            {
                $a_id=1;
            }
            // end of   logic to generate Id
            
            $sqlSelect = "SELECT sd_id FROM student_detail where sdc_id='".$sdc."' and sd_roll=".$column[0];
            $mysqlresult=$conn->query($sqlSelect);
            $myrow = $mysqlresult->fetch_assoc();
            //echo "<br>".$adate;
            $sqlInsert = "INSERT INTO attendance_detail(a_id, a_date,a_sd_id,dateOfCreation,lastModifiedDate) VALUES ($a_id,'".$adate."','" . $myrow['sd_id'] . "','$logts','$logts')";

           // echo "<br>".$sqlInsert;
            $result = $conn->query($sqlInsert);
                       
            if (! empty($result)) {
                 
                $type = "success";
                $message = "CSV Data Imported into the Database";
            }
            else {
                // echo "<BR> NOT INSERTED";
                $type = "error";
                $message = "Problem in Importing CSV Data";
            }
          
			
            }
            }
             }
            else {
                // echo "<BR> NOT INSERTED";
                $type = "error";
                $message = "Problem in Importing CSV Data";
            }
}
?>
        <div class="panel-body" >
         <h2>Upload using CSV</h2>
    
   
    <div class="outer-scontainer">
        <div class="row">

            <form class="form-horizontal" action="" method="post"
                name="frmCSVImport" id="frmCSVImport" enctype="multipart/form-data">
                <div id="div_id_sdc" class="form-group required">
                <label for="id_sdc" class="control-label col-md-4  requiredField">Std<span class="asteriskField">*</span> </label>
                <div class="controls col-md-4 ">
                    <select class="input-md select form-control" id="id_sdc" name="sdc" style="margin-bottom: 10px" >
                        <option value="notallowed" disabled selected="selected">Select an option </option>
                        <?php
                           $mysqlquery="SELECT sdc.sdc_id as sdc_id,s.std_name as std_name,d.div_name as div_name FROM std_div_ct sdc, standard s, division d WHERE sdc.std_id=s.std_id and sdc.div_id=d.div_id and sdc.isDelete=0 and sdc.isDisabled=0";
                           $mysqlresult=$conn->query($mysqlquery);
                           if($mysqlresult->num_rows>0)
                           {
                               while($myrow = $mysqlresult->fetch_assoc())
                               {

                                 echo "<option value='".$myrow['sdc_id']."' > STD-DIV : ".$myrow['std_name']." - ".$myrow['div_name']."</option>";

                               }
                           }

                       ?>
                    </select>
                </div>
            </div>
            <div id="div_id_adate" class="form-group required">
                <label for="id_adate" class="control-label col-md-4  requiredField"> Date  <span class="asteriskField">*</span> </label>
                <div class="controls col-md-4 ">
                    <input class="input-md textinput form-control" id="id_adate" maxlength="30" name="adate" required  style="margin-bottom: 10px" type="date" max="<?php echo date('Y-m-d'); ?>"/>
                </div>
            </div>
                <div class="input-row">
                    <label class="col-md-4 control-label">Choose CSV
                        File</label> <input type="file" name="file"
                        id="file" accept=".csv">
                    <br />
                     <button type="submit" id="submit" name="import"
                        class="col-md-4 col-md-offset-3 btn-submit">Import</button>
					<br />
                    
                </div>

            </form>
             <div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"><?php if(!empty($message)) { echo $message; } ?></div>
        </div>

    </div>


            </div>
            
            </div>
            </div>





</div>
<div class="tab-pane" id="2">

<div class="col-md-11">
<div class="panel panel-default ">

<div class="panel-body">






</div	>
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