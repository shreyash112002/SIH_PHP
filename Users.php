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

<div class="col-md-10">
	<div class="col-md-12">
	
	<div class="panel panel-default ">
	
	<div class="panel-heading">  <p class="font-weight-italic">Register Team for Internal Hackathon</p></div>
	
	<div class="panel-body">

	<div class="container col-md-12" id="users">
	<ul class="nav nav-tabs">
	<li class="active"> <a href="#1" data-toggle="tab">Create User Account</a> </li>
	<li><a href="#2" data-toggle="tab">Update & Delete User Account</a> </li>
	
	</ul>
	<div class="tab-content clearfix ">
		<div class="tab-pane active" id="1">

   		<div class="container">
        <div id="adduser" style=" margin-top:50px" class="mainbox col-md-10">
        <div class="panel panel-info">
        
        <div class="panel-heading">
            <div class="panel-title"> Create User Account </div>
        </div>
        
        <div class="panel-body" >
        <form  class="form-horizontal" method="post" >
            <div id="div_id_fname" class="form-group required">
                <label for="id_fname" class="control-label col-md-4  requiredField"> Team Name  <span class="asteriskField">*</span> </label>
                <div class="col-md-8 ">
                    <input class="input-md textinput form-control" id="id_fname" maxlength="50" name="fname" required placeholder="Your First Name" style="margin-bottom: 10px" type="text" />
                </div>
            </div>


            <div id="div_id_fname" class="form-group required">
                <div class="controls col-md-8 ">
                    <input class="input-md textinput form-control" id="id_fname" maxlength="50" name="fname" required placeholder="Leader First Name" style="margin-bottom: 10px" type="text" />
                	<input class="input-md textinput form-control" id="id_lname" maxlength="50" name="lname" required placeholder="Leader Last Name" style="margin-bottom: 10px" type="text" />
                	<input class="input-md textinput form-control" id="id_lname" maxlength="50" name="lname" required placeholder="Email-id" style="margin-bottom: 10px" type="text" />
                	<input class="input-md textinput form-control" id="id_lname" maxlength="50" name="lname" required placeholder="Mobile No." style="margin-bottom: 10px" type="text" />
                </div>
            </div>


            <div id="div_id_lname" class="form-group required">
                <label for="id_lname" class="control-label col-md-4  requiredField"> Last Name  <span class="asteriskField">*</span> </label>
                <div class="controls col-md-8 ">
                    
                </div>
            </div>

               <div id="div_id_dept" class="form-group required">
                <label for="id_dept" class="control-label col-md-4  requiredField">Dept<span class="asteriskField">*</span> </label>
                <div class="controls col-md-8">
                    <select class="input-md select form-control" id="id_dept" required name="dept" style="margin-bottom: 10px" >
                        <option value="" disabled selected="selected">Select an option </option>
                        <?php
                           $mysqlquery="SELECT dept_id,dept_name FROM dept_master WHERE isDelete=0 and isDisabled=0";
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
             

            <div id="div_id_role" class="form-group required">
                <label for="id_role" class="control-label col-md-4  requiredField">Role<span class="asteriskField">*</span> </label>
                <div class="controls col-md-8 ">
                    <select class="input-md select form-control" required id="id_role" name="role" style="margin-bottom: 10px" >
                        <option value="" disabled selected="selected">Select an option </option>
                        <?php
                           $mysqlquery="SELECT role_id,role_name FROM role_master WHERE isDelete=0 and isDisabled=0";
                           $mysqlresult=$conn->query($mysqlquery);
                           if($mysqlresult->num_rows>0)
                           {
                               while($myrow = $mysqlresult->fetch_assoc())
                               {
                                   echo "<option value='".$myrow['role_id']."'>".$myrow['role_name']." </option>";

                               }
                           }

                       ?>
                    </select>
                </div>
            </div>

            <div id="div_id_emailof" class="form-group required">
                <label for="id_emailof" class="control-label col-md-4  requiredField"> Email </label>
                <div class="controls col-md-8 ">
                    <input class="input-md emailinput form-control" id="id_emailof" name="emailof" placeholder="Enter Official Email" style="margin-bottom: 10px" type="email" />
                </div>
            </div>


            <div id="div_id_contactnooff" class="form-group required">
                <label for="id_contactnooff" class="control-label col-md-4  requiredField"> Contact No. <span class="asteriskField">*</span> </label>
                <div class="controls col-md-8 ">
                    <input class="input-md textinput form-control" id="id_contactnooff" maxlength="10" name="contactnooff" required placeholder="Enter Official Contact " style="margin-bottom: 10px" pattern="[0-9]{10}" type="text" />
                </div>
            </div>


            <div class="form-group">
                <div class="aab controls col-md-4 "></div>
                <div class="controls col-md-8 ">
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary btn btn-info" id="submit-id-submit" />
                </div>
            </div>
       

    		</form>

            <?php
                if(isset($_POST['submit']))
                {
                  	global $logts;
                    $fname=ucwords($_POST["fname"]);
                    $lname=ucwords($_POST["lname"]);
                    $dept=$_POST["dept"];
                    $role=$_POST["role"];
                    $emailof=isset($_POST["emailof"]) ? $_POST["emailof"] : NULL;
                    $contactnooff=$_POST["contactnooff"];
                   

					//logic to generate Id
                    $sqlspcl1 = "SELECT max(emp_id) as a FROM employee_detail";
                    $resultspcl1 = $conn->query($sqlspcl1);
                    if ($resultspcl1->num_rows > 0)
                    {
                        $row1 = $resultspcl1->fetch_assoc();
                        $emp_id=$row1["a"]+1;
                    }
                    else
                    {
                        $emp_id=1;
                    }
                    // end of   logic to generate Id


                    $sql2="INSERT INTO employee_detail(emp_id,emp_fname,emp_lname,emp_mobile,emp_email,role_id,dept_id,dateOfCreation,lastModifiedDate) VALUES('$emp_id','$fname','$lname','$contactnooff','$emailof','$role','$dept','$logts','$logts')";  

                    if($conn->query($sql2) === TRUE)
                    {
						echo "Records added successfully !!!";
					}
                    else
                    {
                        echo " $sql2. " . $conn->error;
                    }

                }
            ?>

            </div>
            </div>
            </div>
            </div>





</div>
<div class="tab-pane" id="2">

<div class="col-md-11">
<div class="panel panel-default ">
<div class="panel-heading">  <strong> <p class="text-center ">List of User Account</p> </strong></div>
<div class="panel-body">



<table id="userlist_table" class="table table-bordred table-striped ">
<tr>
<th >
Sr. No.
</th>
<th>
Name
</th>
<th>
Contact No.
</th>
<th>
Email Id
</th>
<th>
Role
</th>
<th>
Dept
</th>
<th>
Edit
</th>
<th>
Delete
</th>
</tr>
	 <tbody>
		 <tr>

		 	<td colspan="6">
		 			<input type="text" id="myInput" style="width:100%;" onkeyup="myFunction()" placeholder="Search for names..">
		 	</td>
		 </tr>

		 <script>

		 function myFunction() {
					 var input, filter, table, tr, td, i;
					 input = document.getElementById("myInput");
					 filter = input.value.toUpperCase();
					 table = document.getElementById("userlist_table");
					 tr = table.getElementsByTagName("tr");
					 for (i = 0; i < tr.length; i++) {
						 td = tr[i].getElementsByTagName("td")[1];
						 if (td) {
							 if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
								 tr[i].style.display = "";
							 } else {
								 tr[i].style.display = "none";
							 }
						 }
					 }
					 }

		 </script>
		 <?php


						$sql3="SELECT ed.emp_id as emp_id,ed.emp_fname as fname,ed.emp_lname as lname,ed.emp_mobile as mob,ed.emp_email as email, dm.dept_sc as dname, rm.role_name as rname FROM employee_detail ed,dept_master dm, role_master rm WHERE rm.role_id=ed.role_id and ed.dept_id = dm.dept_id and ed.isDelete=0 and ed.isDisabled=0";
						$result3=$conn->query($sql3);
						if (!$result3)
						{
								trigger_error('Invalid query: ' . $conn->error);
						}
						if($result3->num_rows>0)
						{
								$i=1;
								while($row3=$result3->fetch_assoc())
								{
		?>
		<tr>
			 <td>
						<?php echo $i ?>
				</td>
				<td>
					 <a  class="view_data" data-toggle="modal" id="<?php echo $row3["emp_id"] ?>" ><?php echo $row3["fname"]." ".$row3["lname"] ?> </a>
							 
				</td>
				<td>
					 <?php echo $row3["mob"] ?>
				</td>
				<td>
					 <?php echo $row3["email"] ?>
				</td>
				<td>
					<?php echo $row3["rname"] ?>
				</td>
				<td>
						<?php echo $row3["dname"] ?>
				</td>
				<td>
					  <button class="btn btn-primary btn-sm edit_data" data-title="Edit" data-toggle="modal" data-target="#edit" id="<?php echo $row3["emp_id"] ?>" ><span class="glyphicon glyphicon-pencil"></span></button>
				</td>
				<td>
						 <button class="btn btn-danger btn-sm delete_data" reg="#" data-title="Delete" data-toggle="modal" data-target="#delete" id="<?php echo $row3["emp_id"] ?>" ><span class="glyphicon glyphicon-trash"></span></button>
				 </td>
			</tr>
			<?php
			$i++;
			}
		}
		else {
			echo "No details..";
		}
			?>
	 </tbody>
</table>




<div id="add_data_Modal" class="modal fade">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Edit User Details</h4>
</div>
<div class="modal-body">
<form method="post" id="insert_form">
	 <div id="div_mid_fname" class="form-group required">
	 		<label for="mid_fname" class="control-label col-md-4  requiredField"> First Name  <span class="asteriskField">*</span> </label>
	 		<div class="controls col-md-8 ">
	 				<input class="input-md textinput form-control" id="mid_fname" maxlength="30" name="mid_fname" required placeholder="Your First Name" style="margin-bottom: 10px" type="text" />
	 		</div>
	 </div>

	 <div id="div_mid_lname" class="form-group required">
	 		<label for="mid_lname" class="control-label col-md-4  requiredField"> Last Name  <span class="asteriskField">*</span> </label>
	 		<div class="controls col-md-8 ">
	 				<input class="input-md textinput form-control" id="mid_lname" maxlength="30" name="mid_lname" required placeholder="Your Last Name" style="margin-bottom: 10px" type="text" />
	 		</div>
	 </div>

	 <div id="div_mid_department" class="form-group required">
	 		<label for="mid_department" class="control-label col-md-4  requiredField">Department<span class="asteriskField">*</span> </label>
	 		<div class="controls col-md-8 ">
	 				<select class="input-md select form-control" id="mid_department" name="mid_department" style="margin-bottom: 10px" >
	 						<option value="notallowed" disabled selected="selected">Select an option </option>
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
	 		</div>
	 </div>

	 	 <div id="div_mid_role" class="form-group required">
	 		<label for="mid_role" class="control-label col-md-4  requiredField">Role<span class="asteriskField">*</span> </label>
	 		<div class="controls col-md-8 ">
	 				<select class="input-md select form-control" id="mid_role" name="mid_role" style="margin-bottom: 10px" >
	 						<option value="notallowed" disabled selected="selected">Select an option </option>
	 						<?php
	 							 $mysqlquery="SELECT role_id,role_name FROM role_master WHERE isDelete=0 and isDisabled=0";
	 							 $mysqlresult=$conn->query($mysqlquery);
	 							 if($mysqlresult->num_rows>0)
	 							 {
	 									 while($myrow = $mysqlresult->fetch_assoc())
	 									 {
	 											 echo "<option value='".$myrow['role_id']."'>".$myrow['role_name']."</option>";

	 									 }
	 							 }

	 					 ?>
	 				</select>
	 		</div>
	 </div>


	 <div id="div_mid_emailof" class="form-group required">
	 		<label for="mid_emailof" class="control-label col-md-4  requiredField"> Email </label>
	 		<div class="controls col-md-8 ">
	 				<input class="input-md emailinput form-control" id="mid_emailof" name="mid_emailof" placeholder="Enter Official Email" style="margin-bottom: 10px" type="text" />
	 		</div>
	 </div>


	 <div id="div_mid_contactnooff" class="form-group required">
	 		<label for="mid_contactnooff" class="control-label col-md-4  requiredField"> Contact No. <span class="asteriskField">*</span> </label>
	 		<div class="controls col-md-8 ">
	 				<input class="input-md textinput form-control" id="mid_contactnooff" name="mid_contactnooff" maxlength="10" required placeholder="Enter Official Contact " style="margin-bottom: 10px" pattern="[0-9]{10}" type="number" />
	 		</div>
	 </div>


<input type="hidden" name="id_user" id="mid_user" />
<input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />
</form>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>


 <div id="dataModal" class="modal fade">
       <div class="modal-dialog">
            <div class="modal-content">
                 <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Retailer Fund Transfer Details</h4>
                 </div>
                 <div class="modal-body">
									 <div id="retailer_detail">

                  </div>
                 <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                 </div>
            </div>
       </div>
  	</div>
	</div>

	<script>
	$('.delete_data').click(function(e)
		{


				var uId = $(this).attr("id");
				//alert(uId);
				var parent = $(this).parent("td").parent("tr");
			//bootbox.alert('Error....');
			bootbox.dialog(
			{
			message: "<div class='alert alert-danger'><span class='glyphicon glyphicon-warning-sign'></span> Are you sure you want to delete this User?</div>",
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
						url: 'deleteUser.php',
						data: 'uid='+uId
						})

						.done(function(response)
						{


						 parent.fadeOut('fast');
						 //window.location.reload();
						 window.location=window.location;
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

	<script>
	 $(document).ready(function(){


	      $('#add').click(function(){
	           $('#insert').val("Insert");
	           $('#insert_form')[0].reset();
	      });



	    $(document).on('click', '.edit_data', function(){
	           var uId = $(this).attr("id");
	          //alert(uId);
	           $.ajax({
						   url:"fetchUser.php",
             method:"POST",
             data:{uid:uId},
             dataType:"json",
             success:function(data){
            // value in val(here) are the column names
       			//alert(data.employeedetails.role_id);
						 // alert(data.retailerdetails.retailerFName);
      $('#mid_user').val(data.employeedetails.emp_id);
	  $('#mid_fname').val(data.employeedetails.emp_fname);
      $('#mid_lname').val(data.employeedetails.emp_lname);
      $('#mid_contactnooff').val(data.employeedetails.emp_mobile);
	  $('#mid_emailof').val(data.employeedetails.emp_email);
      $('#mid_department').val(data.employeedetails.dept_id);
	  $('#mid_role').val(data.employeedetails.role_id);

    
      $('#insert').val("Update");
      $('#add_data_Modal').modal('show');
						},
						 error: function(XMLHttpRequest, textStatus, errorThrown) {
alert("Status: " + textStatus); alert("Error: " + errorThrown);
}
	           });
	      });

	      $('#insert_form').on("submit", function(event){
	           event.preventDefault();

	           if($('#mid_fname').val() == '')
	           {
	                alert("First name is required");
	           }
	           if($('#mid_lname').val() == '')
	           {
	                alert("Last name is required");
	           }
			  if($('#mid_department').val() == 'notallowed')
			  {
		 			 alert("Department is required");
			  }
			  if($('#mid_role').val() == 'notallowed')
			  {
		 			 alert("Role is required");
			  }
			  if($('#mid_contactnooff').val() == '')
	           {
	                alert("Contact is required");
	           }
				if($('#mid_emailof').val() == '')
	           {
	                alert("Email Id (Official) is required");
	           }
	          else
	           {
	                $.ajax({
	                     url:"updateUser.php",
	                     method:"POST",
	                     data:$('#insert_form').serialize(),
	                     beforeSend:function(){
	                          $('#insert').val("Inserting");
	                     },
	                     success:function(data){
												 //alert(data);
	                          $('#insert_form')[0].reset();
	                          $('#add_data_Modal').modal('hide');
	                       //   $('#user_table').html(data);
							//window.location.reload();
							window.location=window.location;
											 }
	                });
	           }
	      });

	      $(document).on('click', '.view_data', function(){
	           var id_user = $(this).attr("id");
						// alert(id_user);
	           if(id_user != '')
	           {
	                $.ajax({
	                     url:"Retailerbyid.php",
	                     method:"POST",
	                     data:{id_user:id_user},
	                     success:function(data){
												 //alert(data);
	                          $('#retailer_detail').html(data);
	                          $('#dataModal').modal('show');
	                     },
											 error: function(XMLHttpRequest, textStatus, errorThrown) {
alert("Status: " + textStatus); alert("Error: " + errorThrown);
}

	                });
	           }
	      });
});
	 </script>







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