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


<body>

<div class="container-fluid col-md-12" >
<div class="row">

<?php include 'notices.php';?>
<?php include 'sidebar.php';?>

<?php require 'connect.php';?>
<?php require 'util.php';?>


<div class="col-md-10">
<div class="col-md-6">
<div class="panel panel-default ">
<div class="panel-heading"> <strong> <p class="text-center">Add Elective </p></strong></div>
<div class="panel-body">


<form  class="form-horizontal" method="post" enctype="" >

<!-- <div id="div_id_dept" class="form-group required">
  <label for="id_dept" class="control-label col-md-4  requiredField">Dept<span class="asteriskField">*</span> </label>
  <div class="controls col-md-6 ">
      <select class="input-md select form-control" required id="id_dept" name="dept" style="margin-bottom: 10px" >
          <option value="notallowed" disabled selected="selected">Select an option </option>
          <?php
             // $mysqlquery="SELECT dept_id,dept_name FROM dept_master WHERE dept_id='".$_SESSION["user_dept_id"]."' and isDelete=0 and isDisabled=0";
             // $mysqlresult=$conn->query($mysqlquery);
             // if($mysqlresult->num_rows>0)
             // {
             //     while($myrow = $mysqlresult->fetch_assoc())
             //     {

             //       echo "<option value='".$myrow['dept_id']."' >".$myrow['dept_name']."</option>";

             //     }
             // }

         ?>
      </select>
  </div>
</div> -->

<div id="div_id_sem" class="form-group required">
    <label for="id_sem" class="control-label col-md-4  requiredField">Semester<span class="asteriskField">*</span> </label>
    <div class="controls col-md-6 ">
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


<div id="div_id_elective_sc" class="form-group required">
<label for="id_elective_sc" class="control-label col-md-4  requiredField"> Elective Short Code<span class="asteriskField">*</span> </label>
<div class="controls col-md-8 ">
<input class="input-md textinput form-control" required id="id_elective_sc" maxlength="10" name="elective_sc" placeholder="Elective Short Code" style="margin-bottom: 10px" type="text" />
</div>
</div>


<div id="div_id_elective" class="form-group required">
<label for="id_elective" class="control-label col-md-4  requiredField"> Elective <span class="asteriskField">*</span> </label>
<div class="controls col-md-8 ">
<input class="input-md textinput form-control" id="id_elective" required maxlength="150" name="elective" placeholder="Elective" style="margin-bottom: 10px" type="text" />
</div>
</div>


<div class="form-group">
<div class="aab controls col-md-6 "></div>
<div class="controls col-md-6 ">
<input type="submit" name="nsubmit" value="Submit" class="btn btn-primary btn btn-info" id="submit-id-submit" />
</div>
</div>
</form>


<?php
if(isset($_POST['nsubmit']))
{

// logic to generate Id
$sqlspcl1 = "SELECT max(elect_id) as a FROM elective_master";
$resultspcl1 = $conn->query($sqlspcl1);
if ($resultspcl1->num_rows > 0)
{
$row1 = $resultspcl1->fetch_assoc();
$elect_id=$row1["a"]+1;
}
else
{
$elect_id=1;
}

$sem=$_POST["sem"];
//$dept=$_POST["dept"];
$dept=$_SESSION['user_dept_id'];
$elective_sc=$_POST["elective_sc"];
$elective=$_POST["elective"];

$sql1="INSERT INTO elective_master(elect_id,elect_shortcode,elect_name,elect_sem,dept_id,dateOfCreation,dateOfDeletion) VALUES('$elect_id','$elective_sc','$elective','$sem','$dept',now(),now())";

if($conn->query($sql1)=== TRUE)
{
	echo "<br>Elective added successfully";
}
else
{
	if ($conn->errno == 1062) {
    echo "<script> alert('Duplicate Record!') </script>". $conn->query($sql1);
	}
	else
	echo "<br>Error: " . $sql2 . "<br>" . $conn->error;
}

}
?>







</div>
</div>
</div>

<div class="col-md-6">
<div class="panel panel-default">
<div class="panel-heading">  <strong> <p class="text-center ">Electives </p> </strong></div>
<div class="panel-body">

<table id="video_table" class="table table-bordred table-striped ">
       <tbody>
       	<tr>
       		<td>
       			Sr. No.
       		</td>
       		<td>
       			ShortCode
       		</td>
       		<td>
       			Elective
       		</td>
          <td>
            Sem
          </td>
       		<td>
       			Delete
       		</td>
       	</tr>
         <?php


                $sql3="SELECT elect_id,elect_shortcode,elect_name,elect_sem FROM elective_master where dept_id='".$_SESSION['user_dept_id']."' and isDelete = 0 and isDisabled = 0 order by elect_sem desc";
                $result3=$conn->query($sql3);
                if (!$result3)
                {
                    trigger_error('Invalid query: ' . $conn->error);
                }
                if($result3->num_rows>0)
                {
                    $i=1;
                    while($row=$result3->fetch_assoc())
                    {
        ?>
        <tr>
           <td>
                <?php echo $i ?>
            </td>
            <td>
                <?php echo $row["elect_shortcode"] ?>
            </td>
            <td>
                <?php echo $row["elect_name"] ?>
            </td>
             <td>
                <?php echo $row["elect_sem"] ?>
            </td>
            <td>
                <button class="btn btn-danger btn-xs delete_data1" data-title="Delete" data-toggle="modal" data-target="#delete" id="<?php echo $row["elect_id"]; ?>"	 ><span class="glyphicon glyphicon-trash"></span></button>
            </td>

          </tr>
          <?php
          $i++;
          }
        }
        else {
        ?>
        <tr>
        	<td>
        		<?php
          		echo " No Data";
        		?>
    		</td>
    	</tr>
        <?php
        }
        
        ?>
       </tbody>
</table>

<script>
$('.delete_data1').click(function(e)
{

	e.preventDefault();
		var pid = $(this).attr("id");
			//alert(pid);
		var parent = $(this).parent("td").parent("tr");
	//bootbox.alert('Error....');
	bootbox.dialog(
	{
	message: "<div class='alert alert-danger'><span class='glyphicon glyphicon-warning-sign'></span> Are you sure you want to delete this elective ? </div>",
	title: "<i class='glyphicon glyphicon-trash'></i> Delete !",
	buttons:
	{
		success:
		{
			label: "No",
			className: "btn-success",
			callback: function()
			{
				$('.bootbox').modal('hide');
			}
		},

		danger:
		{
			label: "Delete",
			className: "btn-danger",
			callback: function()
			{
				$.ajax(
				{
				type: 'POST',
				url: 'deleteelective.php',
				data: 'pid='+pid
				})

				.done(function(response)
				{
          parent.fadeOut('fast');
          window.location=window.location;
          //window.location.reload();
				})

				.fail(function()
				{
					bootbox.alert('Error....');
				})
			}
		}
	}
	});

});
</script>





</div>
</div>

</div>

<br style="clear: both;" />
</div>
</div>


</div>

</body>
<?php include 'footer.php';?>