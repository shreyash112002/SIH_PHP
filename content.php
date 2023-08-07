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
<?php include 'top_header.php';?>
<?php require 'connect.php';?>
<?php require 'util.php';?>


<div class="col-md-10">
<div class="col-md-6">
<div class="panel panel-default ">
<div class="panel-heading"> <strong> <p class="text-center">Add STD </p></strong></div>
<div class="panel-body">


<form  class="form-horizontal" method="post" enctype="" >

<div id="div_id_addstd" class="form-group required">
<label for="id_addstd" class="control-label col-md-4  requiredField"> Std <span class="asteriskField">*</span> </label>
<div class="controls col-md-8 ">
<input class="input-md textinput form-control" id="id_addstd" maxlength="30" name="addstd" placeholder="Standard" style="margin-bottom: 10px" type="text" />
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
$sqlspcl1 = "SELECT max(std_id) as a FROM standard";
$resultspcl1 = $conn->query($sqlspcl1);
if ($resultspcl1->num_rows > 0)
{
$row1 = $resultspcl1->fetch_assoc();
$std_id=$row1["a"]+1;
}
else
{
$std_id=1;
}

$addstd=$_POST["addstd"];

$sql1="INSERT INTO standard(std_id,std_name,dateOfCreation,dateOfDeletion) VALUES('$std_id','$addstd',now(),now())";

if($conn->query($sql1)=== TRUE)
{
	echo "<br>Standard added successfully";
}
else
{
	echo "<br>Error: " . $sql2 . "<br>" . $conn->error;
}

}
?>


<table id="video_table" class="table table-bordred table-striped ">
       <tbody>

         <?php


                $sql3="SELECT std_id,std_name FROM standard where isDelete =0";
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
                <?php echo $row["std_name"] ?>
            </td>
            <td>
                <button class="btn btn-danger btn-xs delete_data1" data-title="Delete" data-toggle="modal" data-target="#delete" id="<?php echo $row["std_id"]; ?>"	 ><span class="glyphicon glyphicon-trash"></span></button>
            </td>

          </tr>
          <?php
          $i++;
          }
        }
        else {
          echo " No Data";
        }
          ?>
       </tbody>
</table>

<script>
$('.delete_data1').click(function(e)
{

	e.preventDefault();
		var pid = $(this).attr("id");
		//	alert(pid);
		var parent = $(this).parent("td").parent("tr");
	//bootbox.alert('Error....');
	bootbox.dialog(
	{
	message: "<div class='alert alert-danger'><span class='glyphicon glyphicon-warning-sign'></span> Are you sure you want to delete this Standard ? </div>",
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
				url: 'deletestd.php',
				data: 'pid='+pid
				})

				.done(function(response)
				{


				 parent.fadeOut('fast');
                   window.location.reload();
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

<div class="col-md-6">
<div class="panel panel-default">
<div class="panel-heading">  <strong> <p class="text-center ">Add DIV </p> </strong></div>
<div class="panel-body">

<form  class="form-horizontal" method="post" enctype="" >

<div id="div_id_adddiv" class="form-group required">
<label for="id_adddiv" class="control-label col-md-4  requiredField"> Div <span class="asteriskField">*</span> </label>
<div class="controls col-md-8 ">
<input class="input-md textinput form-control" id="id_adddiv" maxlength="30" name="adddiv" placeholder="Standard" style="margin-bottom: 10px" type="text" />
</div>
</div>

<div class="form-group">
<div class="aab controls col-md-6 "></div>
<div class="controls col-md-6 ">
<input type="submit" name="vsubmit" value="Submit" class="btn btn-primary btn btn-info" id="submit-id-submit" />
</div>
</div>
</form>


<?php
if(isset($_POST['vsubmit']))
{

// logic to generate Id
$sqlspcl1 = "SELECT max(div_id) as a FROM division";
$resultspcl1 = $conn->query($sqlspcl1);
if ($resultspcl1->num_rows > 0)
{
$row1 = $resultspcl1->fetch_assoc();
$div_id=$row1["a"]+1;
}
else
{
$div_id=1;
}

$adddiv=$_POST["adddiv"];

$sql1="INSERT INTO division(div_id,div_name,dateOfCreation,dateOfDeletion) VALUES('$div_id','$adddiv',now(),now())";

if($conn->query($sql1)=== TRUE)
{
	echo "<br>Division added successfully";
}
else
{
	echo "<br>Error: " . $sql2 . "<br>" . $conn->error;
}


}
?>


<table id="video_table" class="table table-bordred table-striped ">
<tbody>
		 <?php
		        $sql3="SELECT div_id, div_name FROM division where isDelete =0";
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
						<?php echo $row["div_name"] ?>
				</td>
				<td>
						<button class="btn btn-danger btn-xs delete_data" data-title="Delete" data-toggle="modal" data-target="#delete" id="<?php echo $row["div_id"]; ?>"	 ><span class="glyphicon glyphicon-trash"></span></button>
				</td>

			</tr>
			<?php
			$i++;
	}
		}
		else {
			echo "No Data";
		}
			?>
	 </tbody>
</table>

<script>
$('.delete_data').click(function(e)
{


var vid = $(this).attr("id");
//alert(vid);
var parent = $(this).parent("td").parent("tr");
//bootbox.alert('Error....');
bootbox.dialog(
{
message: "<div class='alert alert-danger'><span class='glyphicon glyphicon-warning-sign'></span> Are you sure you want to delete this Division?</div>",
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
url: 'deletediv.php',
data: 'vid='+vid
})

.done(function(response)
{


 parent.fadeOut('fast');
   window.location.reload();
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