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
<?php require 'util.php';?>


	
<div class="col-md-10">
	<div class="col-md-12">
	
	<div class="panel panel-default ">
	
	<div class="panel-heading">  <p class="font-weight-italic">Student Account</p></div>
	
	<div class="panel-body">

	<div class="container col-md-12" id="users">
	<ul class="nav nav-tabs">
	<li class="active"> <a href="#1" data-toggle="tab">Add Mutliple Student (CSV)</a> </li>
	<li><a href="#2" data-toggle="tab">Add Individual Student</a> </li>
   
	</ul>
	<div class="tab-content clearfix ">
		<div class="tab-pane active" id="1">

   		<div class="container">
        <div id="adduser"  class="mainbox col-md-6 col-md-offset-2 col-sm-8 col-sm-offset-2">
      

        <?php

        

if (isset($_POST["import"])) {
	global $logts;

	$dept =$_POST["dept"];
 // $dept = $_SESSION["user_dept_id"];
    $sem = $_POST["sem"];

   // echo "<Script> alert('".$sem."')</script>";
    

    $fileName = $_FILES["file"]["tmp_name"];
    
    if ($_FILES["file"]["size"] > 0) {
        
        $file = fopen($fileName, "r");
        
       $rowcnt=0;
       $message ='';
        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {


			//logic to generate Id
            $sqlspcl1 = "SELECT max(sd_id) as a FROM student_detail";
            $resultspcl1 = $conn->query($sqlspcl1);
            if ($resultspcl1->num_rows > 0)
            {
                $row1 = $resultspcl1->fetch_assoc();
                $sd_id=$row1["a"]+1;
            }
            else
            {
                $sd_id=1;
            }

            // end of   logic to generate Id

            $sqlInsert = "INSERT INTO student_detail(sd_id, sd_dept, sd_sem, sd_roll, sd_fname,sd_lname,sd_email,sd_contact,dateOfCreation,lastModifiedDate) VALUES ($sd_id, $dept, $sem, '" . $column[0] . "', '" . $column[1] . "','" . $column[2] . "','" . $column[3] . "','" . $column[4] . "','$logts','$logts')";



            $result = $conn->query($sqlInsert);
            
           
            if (! empty($result)) {
            	 
                $type = "success";
                $rowcnt++;
                //$message = "CSV Data Imported into the Database. <strong> '"._csv_row_count($fileName)."' </strong> record added.";
            } else {
            	// echo "<BR> NOT INSERTED";
                $type = "error";
                $message.='<br> Not Uploded: Roll: '.$column[0].' Name :'.$column[4].'';
            }

        }
        $type = "success";
        $message.='<br>Total of <strong>'.$rowcnt.'</strong> records uploded out of '._csv_row_count($fileName).'.';
       // echo $message;
    }
}
?>
        <div class="panel-body" >
             
   
    <div class="outer-container">
        <div class="row">

          
            <form class="form-horizontal" action="" method="post"
                name="frmCSVImport" id="frmCSVImport" enctype="multipart/form-data">

              <?php
              if($_SESSION['user_dept_id'] == 1)
              {
              ?>
                <div id="div_id_dept" class="form-group required">
                <label for="id_dept" class="control-label col-md-6  requiredField">Dept<span class="asteriskField">*</span> </label>
                <div class="controls col-md-4">
                    <select class="input-md select form-control" required id="id_dept" name="dept" style="margin-bottom: 10px" >
                        <option value="" disabled selected="selected">Select an option </option>
                        <?php
                           $mysqlquery="SELECT dept_id,dept_name FROM dept_master WHERE dept_id>1 and isDelete=0 and isDisabled=0 ";
                           $mysqlresult=$conn->query($mysqlquery);
                           if($mysqlresult->num_rows>0)
                           {
                               while($myrow = $mysqlresult->fetch_assoc())
                               {

                                 echo "<option value='".$myrow['dept_id']."' >".$myrow['dept_name']."</option>";

                               }
                           }

                       ?>
                    </select>
                </div>
            </div> 

            <?php
            }
            else
            {
            ?>
            <input class="input-md textinput form-control" id="id_dept"  maxlength="150" name="dept" placeholder="department" value="<?php echo $_SESSION['user_dept_id']; ?>" style="margin-bottom: 10px" type="hidden" />

            <?php
            }
            ?>
 <div id="div_id_sem" class="form-group required">
    <label for="id_sem" class="control-label col-md-6  requiredField">Semester<span class="asteriskField">*</span> </label>
    <div class="controls col-md-4 ">
        <select class="input-md select form-control" required id="id_sem" name="sem" style="margin-bottom: 10px" >
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
    </div>
</div>

             
<div class="input-row">
<label class="col-md-6 control-label">Choose CSV
  File (<a href="asset/student_detail.csv" data-toggle="tooltip" title="RollNo,FirstName,LastName,EmailId,PhoneNo. Do not add column name in csv file">Format</a>)</label> <input type="file" required name="file"
  id="file" accept=".csv"> 
  

<br/>
<button type="submit" id="submit" name="import"
class="col-md-4 col-md-offset-3 btn-submit">Import</button>
<br/>

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
<form  class="form-horizontal" method="post" >
            <fieldset style="text-align:center;">
                <legend><b>Student Details</b></legend>

                    <div class="outer-scontainer">
        <div class="row">

            <form class="form-horizontal" action="" method="post"
                name="frmCSVImport" id="frmCSVImport" enctype="multipart/form-data">
            <?php
            if($_SESSION['user_dept_id'] == 1)
            {
            ?>
               <div id="div_id_dept" class="form-group required">
                <label for="id_dept" class="control-label col-md-4  requiredField">Dept<span class="asteriskField">*</span> </label>
                <div class="controls col-md-4">
                    <select class="input-md select form-control" required id="id_dept" name="dept" style="margin-bottom: 10px" >
                        <option value="" disabled selected="selected">Select an option </option>
                        <?php
                         $mysqlquery="SELECT dept_id,dept_name FROM dept_master WHERE dept_id>1 and isDelete=0 and isDisabled=0 ";
                           $mysqlresult=$conn->query($mysqlquery);
                           if($mysqlresult->num_rows>0)
                           {
                              while($myrow = $mysqlresult->fetch_assoc())
                               {

                                echo "<option value='".$myrow['dept_id']."' >".$myrow['dept_name']."</option>";

                               }
                           }

                       ?>
                    </select>
                </div>
            </div>
          <?php
            }
            else
            {
            ?>
            <input class="input-md textinput form-control" id="id_dept"  maxlength="150" name="dept" placeholder="department" value="<?php echo $_SESSION['user_dept_id']; ?>" style="margin-bottom: 10px" type="hidden" />

            <?php
            }
            ?>
 <div id="div_id_sem" class="form-group required">
    <label for="id_sem" class="control-label col-md-4  requiredField">Semester<span class="asteriskField">*</span> </label>
    <div class="controls col-md-4 ">
        <select class="input-md select form-control" required id="id_sem" name="sem" style="margin-bottom: 10px" >
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
    </div>
</div>
          <!--   <div id="div_id_reg" class="form-group required">
                <label for="id_reg" class="control-label col-md-4  requiredField"> Registration Id  <span class="asteriskField">*</span> </label>
                <div class="controls col-md-4 ">
                    <input class="input-md textinput form-control" id="id_reg" maxlength="30" name="reg" required placeholder="Registration Id" style="margin-bottom: 10px" type="text" />
                </div>
            </div> -->

            <div id="div_id_roll" class="form-group required">
                <label for="id_roll" class="control-label col-md-4  requiredField"> Roll No.  <span class="asteriskField">*</span> </label>
                <div class="controls col-md-4 ">
                    <input class="input-md textinput form-control" id="id_roll" maxlength="30" name="roll" required placeholder="Roll No" style="margin-bottom: 10px" type="text" />
                </div>
            </div>

            <div id="div_id_fname" class="form-group required">
                <label for="id_fname" class="control-label col-md-4  requiredField"> First Name  <span class="asteriskField">*</span> </label>
                <div class="controls col-md-4 ">
                    <input class="input-md textinput form-control" id="id_fname" maxlength="50" name="fname" required placeholder="Your First Name" style="margin-bottom: 10px" type="text" />
                </div>
            </div>


            <!-- <div id="div_id_mname" class="form-group required">
                <label for="id_mname" class="control-label col-md-4  requiredField"> Middle Name  <span class="asteriskField">*</span> </label>
                <div class="controls col-md-4 ">
                    <input class="input-md textinput form-control" id="id_mname" maxlength="50" name="mname" required placeholder="Your Middle Name" style="margin-bottom: 10px" type="text" />
                </div>
            </div> -->

            <div id="div_id_lname" class="form-group required">
                <label for="id_lname" class="control-label col-md-4  requiredField"> Last Name  <span class="asteriskField">*</span> </label>
                <div class="controls col-md-4 ">
                    <input class="input-md textinput form-control" id="id_lname" maxlength="50" name="lname" required placeholder="Your Last Name" style="margin-bottom: 10px" type="text" />
                </div>
            </div>

     
           <div id="div_id_emailof" class="form-group required">
                <label for="id_emailof" class="control-label col-md-4  requiredField"> Email <span class="asteriskField">*</span></label>
                <div class="controls col-md-4 ">
                    <input class="input-md emailinput form-control"  id="id_emailof" name="emailof" required placeholder="Enter Official Email" style="margin-bottom: 10px" type="email" />
                </div>
            </div>


            <div id="div_id_contactnooff" class="form-group required">
                <label for="id_contactnooff" class="control-label col-md-4  requiredField"> Contact No. <span class="asteriskField">*</span> </label>
                <div class="controls col-md-4">
                    <input class="input-md textinput form-control" id="id_contactnooff" maxlength="10" name="contactnooff" required placeholder="Enter Official Contact " style="margin-bottom: 10px" pattern="[0-9]{10}" type="text" />
                </div>
            </div>

   </fieldset>
            <div class="form-group">
                <div class="aab controls col-md-4 "></div>
                <div class="controls col-md-4 ">
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary btn btn-info" id="submit-id-submit" />
                </div>
            </div>
       

            </form>

            <?php
                if(isset($_POST['submit']))
                {
                    global $logts;
                    $dept=ucwords($_POST["dept"]);
                    // $dept=ucwords($_SESSION["user_dept_id"]);
                    $sem=ucwords($_POST["sem"]);
                    $reg=ucwords($_POST["reg"]);
                    $roll=ucwords($_POST["roll"]);
                     
                    $fname=ucwords($_POST["fname"]);
                    $mname=ucwords($_POST["mname"]);
                    $lname=ucwords($_POST["lname"]);
                    $emailof=$_POST["emailof"];
                    $contactnooff=$_POST["contactnooff"];
                   
                    //logic to generate Id
                    $sqlspcl1 = "SELECT max(sd_id) as a FROM student_detail";
                    $resultspcl1 = $conn->query($sqlspcl1);
                    if ($resultspcl1->num_rows > 0)
                    {
                        $row1 = $resultspcl1->fetch_assoc();
                        $sd_id=$row1["a"]+1;
                    }
                    else
                    {
                        $sd_id=1;
                    }
                    // end of   logic to generate Id


                 
                    $stmt = $conn->prepare("INSERT INTO student_detail (sd_id, sd_regId,sd_dept, sd_sem,sd_roll,sd_fname,sd_mname,sd_lname, sd_email, sd_contact,dateOfCreation,lastModifiedDate) VALUES ('$sd_id',?, ?, ?,?, ?, ?,?, ?, ?,'$logts','$logts')");
                    $stmt->bind_param("sssssssss", $reg, $dept, $sem, $roll, $fname, $mname, $lname, $emailof, $contactnooff);
                    $stmt->execute();
                        echo "Records added successfully !!!";

                }
            ?>


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