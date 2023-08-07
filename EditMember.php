<?php include 'header.php';?>

<!DOCTYPE html>
<head lang="en">
	<title>Home</title>
	<meta charset="utf-8">
	<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
	<!--<link rel = "stylesheet" type = "text/css" href = "loginform.css">		<!-- Stylesheet only for login form -->
	<!--<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">-->
	 <!--<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">-->
	<!--<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>-->
	<!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>-->
 <!-- <script src="bootbox.min.js"></script>-->


</head>
<style>
    .panel-body{
        padding-top:40px;
        padding-left:50px;
    }
    input{
       margin:10px;
    }
    .alert-warning{
        margin-left:-15px;
    }
     .alert-info{
        margin-left:-15px;
    }
    select{
    
       margin:10px;
    
    }
    .btn-info{
        background-color:#31708f;
       margin:20px 0px 0px 120px;
    }
    
input::placeholder {
  color: gray;
}

.textfield{
  
  padding: 6px;
  padding-left:20px;
 border:none;
 width:240px;
  height: 30px;
  font-size: 13px;
  border-radius: 15px;
 box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
 border-top: 2px solid hsl(180, 62%, 55%);
}

/*.topnav a:hover {*/
/*  background-color:  #ffffff;*/
/*  color: black;*/
/*}*/

.active {
  background-color: #ffffff;
  color: white;
}
</style>
<body>
<?php require 'connect.php';?>
<div class="container-fluid col-md-12" >
<div class="row">


	<div class="col-md-12">
		<div class="panel panel-info ">
		<!--<div class="panel-heading"> <h3> <p class="font-weight-italic"></p> </h3> </div>-->
	
		<div class="panel-body">
		<form  class="form-horizontal" method="post" >
        
            
                 


</head>
<body>


<!--<style>-->
<!--body {margin: 0;}-->

<!--ul.topnav {-->
<!--  list-style-type: none;-->
<!--  margin: 0;-->
<!--  padding: 0;-->
<!--  overflow: hidden;-->
<!--  background-color: white-->
<!--  ;-->
<!--}-->

<!--ul.topnav li {float: left;}-->

<!--ul.topnav li a {-->
<!--  display: block;-->
<!--  color: black;-->
<!--  text-align: center;-->
<!--  padding: 14px 16px;-->
<!--  text-decoration: none;-->
<!--}-->

<!--ul.topnav li a:hover:not(.active) {background-color: white;}-->

<!--ul.topnav li a.active {background-color: white;}-->

<!--ul.topnav li.right {float: right;}-->

<!--@media screen and (max-width: 600px) {-->
<!--  ul.topnav li.right, -->
<!--  ul.topnav li {float: none;}-->
<!--}-->
<!--</style>-->

<!--<div  style="text-align: center;">-->
<!--<ul class="topnav" >-->
<!--  <li><a class="btn btn-default" href="EditMember.php?sid=<?php echo urlencode($sid); ?>">Edit Team members</a></li>-->
<!--  <li><a class="btn btn-default" href="bank.php?sid=<?php echo urlencode($sid); ?>">Edit Bank Details</a></li>-->
<!--</div>-->
<!--</ul>-->
<style>
/*body {*/
/*  font-family: Arial, Helvetica, sans-serif;*/
/*}*/

.mobile-container {
  max-width: auto;
  /*margin: auto;*/
  background-color: white;
  height: auto;
  color: black;
  border-radius: 30px;
}

.topnav {
  overflow: hidden;
  background-color: #333;
  position: relative;
}

.topnav #myLinks {
  display: none;
}

.topnav a {
  float: left;
  color: white;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a.icon {
  float: right;
}

.topnav a:hover {
  background-color: ;
  color: black;
}

.active {
  background-color: #007bff;
  color: white;
}
</style>


<!-- Simulate a smartphone / tablet look -->
<div class="mobile-container">

<!-- Top Navigation Menu -->
<div class="topnav">
  <a  class="active">Edit Team Details</a>
  <div id="myLinks">
    
        <a href="bank.php">Edit Bank Details</a>

  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<script>
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>       
                        

            
           <?php 
           
            global $sd_id1;
                         $sd_id1 = $_GET['sid']; 
                      
                          $query = "select sd_fname as f1,sd_lname as f2,sd_email as f3,sd_contact as f4,sd_class as f5,sd_gender as f6,sd_dept as f7  from student_detail where sd_id ='$sd_id1';";
                         
                          
                          $result = $conn->query($query);
                          $row = $result->fetch_assoc();
                         $ref1=$sd_id1;

                          ?>
                          
                          
            <div id="div_mem0" class="form-group required">
            	    <label > Team Leader Name  </label>
                <div>
                    <input class="textfield" id="mem0_fname" maxlength="50" value ="<?php echo $row['f1']; ?> " name="mem0_fname"   placeholder="Leader First Name" style="margin-bottom: 10px" type="text" />
                	<input class="textfield" id="mem0_lname" maxlength="50" value ="<?php echo $row['f2']; ?>" name="mem0_lname"   placeholder="Leader Last Name" style="margin-bottom: 10px" type="text" />
                	<input class="textfield"   id="mem0_email" maxlength="50" value ="<?php echo $row['f3']; ?>" name="mem0_email"   placeholder="Email-id" style="margin-bottom: 10px" type="text" />
                	<input class="textfield"  id="mem0_mobile" maxlength="10" value ="<?php echo $row['f4']; ?>" name="mem0_mobile"   placeholder="Mobile No." style="margin-bottom: 10px" type="text" />
                
                

                <?php $var=$row['f7'];  ?>
                <?php $var1=$row['f5'];  ?>
                <?php $var2=$row['f6'];  ?>
                
                        
                        <?php if ($var==1) {?>
                        <select class="textfield" id="mem0_dept"   name="mem0_dept"  style="margin-bottom: 10px" >
                        <option value=""  selected='selected'>Department </option>
                          <option value="1" selected >EXTC</option>
                        <option value="2" >Mech</option>
                        <option value="3" >IT</option>
                        <option value="4" >Computer</option>
                        </select>
                        <?php }?>
                        
                        <?php if ($var==2) {?>
                        <select class="textfield" id="mem0_dept"   name="mem0_dept"  style="margin-bottom: 10px" >
                        <option value=""  selected='selected'>Department </option>
                          <option value="1"  >EXTC</option>
                        <option value="2" selected>Mech</option>
                        <option value="3" >IT</option>
                        <option value="4" >Computer</option>
                        </select>
                        <?php }?>
                        <?php if ($var==3) {?>
                        <select class="textfield" id="mem0_dept"   name="mem0_dept"  style="margin-bottom: 10px" >
                        <option value=""  selected='selected'>Department </option>
                          <option value="1"  >EXTC</option>
                        <option value="2" >Mech</option>
                        <option value="3" selected>IT</option>
                        <option value="4" >Computer</option>
                        </select>
                        <?php }?>
                        <?php if ($var==4) {?>
                        <select  class="textfield" id="mem0_dept"   name="mem0_dept"  style="margin-bottom: 10px" >
                        <option value=""  selected='selected'>Department </option>
                          <option value="1"  >EXTC</option>
                        <option value="2" >Mech</option>
                        <option value="3" >IT</option>
                        <option value="4" selected >Computer</option>
                        </select>
                        <?php }?>
                      
                    <?php if ($var1==4) {?>
                    <select class="textfield" id="mem0_class"   name="mem0_class"  style="margin-bottom: 10px" >
                        <option value="" disabled  selected="selected">Class </option>
                        <option value="4" selected>BE</option>
                        <option value="3" >TE</option>
                        <option value="2" >SE</option>
                    </select>
                      <?php }?>
                      <?php if ($var1==3) {?>
                    <select class="textfield" id="mem0_class"   name="mem0_class"  style="margin-bottom: 10px" >
                        <option value="" disabled  selected="selected">Class </option>
                        <option value="4" >BE</option>
                        <option value="3" selected>TE</option>
                        <option value="2" >SE</option>
                    </select>
                      <?php }?>
                      <?php if ($var1==2) {?>
                    <select class="textfield" id="mem0_class"   name="mem0_class"  style="margin-bottom: 10px" >
                        <option value="" disabled  selected="selected">Class </option>
                        <option value="4" >BE</option>
                        <option value="3" >TE</option>
                        <option value="2" selected>SE</option>
                    </select>
                    <br>
                <?php if ($var2=="M") {?>
                	<input  id="mem0_gender" name="mem0_gender" value="M" checked  style="margin-bottom: 10px" type="radio" /> Male
                	       <input id="mem0_gender" name="mem0_gender" value="F"   style="margin-bottom: 10px" type="radio" /> Female
                <?php } if ($var2=="F") { ?>
                <input  id="mem0_gender" name="mem0_gender" value="M"   style="margin-bottom: 10px" type="radio" /> Male
                	<input id="mem0_gender" name="mem0_gender" value="F" checked  style="margin-bottom: 10px" type="radio" /> Female
                	<?php } ?>
                      <?php }?>
                </div>
            </div>
            <br><br>

            <div id="div_mem1" class="form-group  ">
                    <label > Member 1  <span class="asteriskField"></span> </label>
                <div>
                    <?php 
                    
                    $sd_id1=$sd_id1 + 1;
                    
                    $query = "select sd_fname as f1,sd_lname as f2,sd_email as f3,sd_contact as f4,sd_class as f5,sd_gender as f6,sd_dept as f7  from student_detail where sd_id ='$sd_id1';";
                          $result = $conn->query($query);
                          $row = $result->fetch_assoc(); 
                          $var=$row['f7'];  
                          $var1=$row['f5'];  
                          $var2=$row['f6'];  ?>
                         
                    <input class="textfield" id="mem1_fname" maxlength="50" name="mem1_fname"  value ="<?php echo $row['f1']; ?> " placeholder="Member 1 First Name" style="margin-bottom: 10px" type="text" />
                    <input class="textfield" id="mem1_lname" maxlength="50" name="mem1_lname"  value ="<?php echo $row['f2']; ?> " placeholder="Member 1 Last Name" style="margin-bottom: 10px" type="text" />
                    <input class="textfield" id="mem1_email" maxlength="50" name="mem1_email" value ="<?php echo $row['f3']; ?> "  placeholder="Email-id" style="margin-bottom: 10px" type="text" />
                    <input  class="textfield" id="mem1_mobile" maxlength="10" name="mem1_mobile" value ="<?php echo $row['f4']; ?> "  placeholder="Mobile No." style="margin-bottom: 10px" type="text" />
                    
                    
                    
                    
                    
                    <?php if ($var==1) {?>
                    <select class="textfield" id="mem1_dept"   name="mem1_dept"  style="margin-bottom: 10px" >
                        <option value="" disabled  selected="selected">Department </option>
                        <option value="1" selected >EXTC</option>
                        <option value="2" >Mech</option>
                        <option value="3" >IT</option>
                        <option value="4" >Computer</option>
                    </select>
                        <?php }?>
                        <?php if ($var==2) {?>
                        <select class="textfield" id="mem1_dept"   name="mem1_dept"  style="margin-bottom: 10px" >
                        <option value="" disabled  selected="selected">Department </option>
                        <option value="1" >EXTC</option>
                        <option value="2" selected>Mech</option>
                        <option value="3" >IT</option>
                        <option value="4" >Computer</option>
                    </select>
                        <?php }?>
                        
                        <?php if ($var==3) {?>
                        <select class="textfield" id="mem1_dept"   name="mem1_dept"  style="margin-bottom: 10px" >
                        <option value="" disabled  selected="selected">Department </option>
                        <option value="1" >EXTC</option>
                        <option value="2" >Mech</option>
                        <option value="3" selected >IT</option>
                        <option value="4" >Computer</option>
                    </select>
                        <?php }?>
                                                <?php if ($var==4) {?>
                                                <select class="textfield" id="mem1_dept"   name="mem1_dept"  style="margin-bottom: 10px" >
                        <option value="" disabled  selected="selected">Department </option>
                        <option value="1" >EXTC</option>
                        <option value="2" >Mech</option>
                        <option value="3" >IT</option>
                        <option value="4" selected >Computer</option>
                    </select>
                        <?php }?>
                    <?php if ($var1==4) {?>
                    
                    <select class="textfield" id="mem1_class"   name="mem1_class"  style="margin-bottom: 10px" >
                        <option value="" disabled  selected="selected">Class </option>
                        <option value="4" selected>BE</option>
                        <option value="3" >TE</option>
                        <option value="2" >SE</option>
                    </select>
                                <?php }?>
                      <?php if ($var1==3) {?>
                      <select class="textfield" id="mem1_class"   name="mem1_class"  style="margin-bottom: 10px" >
                        <option value="" disabled  selected="selected">Class </option>
                        <option value="4" >BE</option>
                        <option value="3" selected >TE</option>
                        <option value="2" >SE</option>
                    </select>
                                <?php }?>
                      <?php if ($var1==2) {?>
                      <select class="textfield" id="mem1_class"   name="mem1_class"  style="margin-bottom: 10px" >
                        <option value="" disabled  selected="selected">Class </option>
                        <option value="4" >BE</option>
                        <option value="3" >TE</option>
                        <option value="2" selected >SE</option>
                    </select>
                                <?php }?><br>
                                <?php if ($var2=="M") {?>
                    <input  id="mem1_gender" name="mem1_gender" value="M"  checked style="margin-bottom: 10px" type="radio" /> Male
                    <input  id="mem1_gender" name="mem1_gender" value="F"   style="margin-bottom: 10px" type="radio" /> Female
                    <?php } if ($var2=="F") { ?>
                    <input  id="mem1_gender" name="mem1_gender" value="M"   style="margin-bottom: 10px" type="radio" /> Male
                    <input  id="mem1_gender" name="mem1_gender" value="F"  checked style="margin-bottom: 10px" type="radio" /> Female
                    <?php } ?>
                    
                </div>
            </div>
            
            
            
            
                        <br><br>

             <div id="div_mem2" class="form-group  ">
                    <label > Member 2  <span class="asteriskField"></span> </label>
                <div>
                    <?php 
                  $sd_id1=$sd_id1 + 1;
                    $query = "select sd_fname as f1,sd_lname as f2,sd_email as f3,sd_contact as f4,sd_class as f5,sd_gender as f6,sd_dept as f7  from student_detail where sd_id ='$sd_id1';";
                          $result = $conn->query($query);
                          $row = $result->fetch_assoc(); 
                          $var=$row['f7'];  
                          $var1=$row['f5'];  
                          $var2=$row['f6'];  ?>
                         
                    <input class="textfield" id="mem2_fname" maxlength="50" name="mem2_fname"  value ="<?php echo $row['f1']; ?> " placeholder="Member 2 First Name" style="margin-bottom: 10px" type="text" />
                    <input class="textfield" id="mem2_lname" maxlength="50" name="mem2_lname"  value ="<?php echo $row['f2']; ?> " placeholder="Member 2 Last Name" style="margin-bottom: 10px" type="text" />
                    <input class="textfield"  id="mem2_email" maxlength="50" name="mem2_email" value ="<?php echo $row['f3']; ?> "  placeholder="Email-id" style="margin-bottom: 10px" type="text" />
                    <input class="textfield" id="mem2_mobile" maxlength="10" name="mem2_mobile" value ="<?php echo $row['f4']; ?> "  placeholder="Mobile No." style="margin-bottom: 10px" type="text" />
                    
                    
                    
                    
                    
                    <?php if ($var==1) {?>
                    <select class="textfield" id="mem2_dept"   name="mem2_dept"  style="margin-bottom: 10px" >
                        <option value="" disabled  selected="selected">Department </option>
                        <option value="1" selected >EXTC</option>
                        <option value="2" >Mech</option>
                        <option value="3" >IT</option>
                        <option value="4" >Computer</option>
                    </select>
                        <?php }?>
                        <?php if ($var==2) {?>
                        <select class="textfield" id="mem2_dept"   name="mem2_dept"  style="margin-bottom: 10px" >
                        <option value="" disabled  selected="selected">Department </option>
                        <option value="1" >EXTC</option>
                        <option value="2" selected>Mech</option>
                        <option value="3" >IT</option>
                        <option value="4" >Computer</option>
                    </select>
                        <?php }?>
                        
                        <?php if ($var==3) {?>
                        <select class="textfield" id="mem2_dept"   name="mem2_dept"  style="margin-bottom: 10px" >
                        <option value="" disabled  selected="selected">Department </option>
                        <option value="1" >EXTC</option>
                        <option value="2" >Mech</option>
                        <option value="3" selected >IT</option>
                        <option value="4" >Computer</option>
                    </select>
                        <?php }?>
                                                <?php if ($var==4) {?>
                                                <select class="textfield" id="mem2_dept"   name="mem2_dept"  style="margin-bottom: 10px" >
                        <option value="" disabled  selected="selected">Department </option>
                        <option value="1" >EXTC</option>
                        <option value="2" >Mech</option>
                        <option value="3" >IT</option>
                        <option value="4" selected >Computer</option>
                    </select>
                        <?php }?>
                    <?php if ($var1==4) {?>
                    
                    <select class="textfield" id="mem2_class"   name="mem2_class"  style="margin-bottom: 10px" >
                        <option value="" disabled  selected="selected">Class </option>
                        <option value="4" selected>BE</option>
                        <option value="3" >TE</option>
                        <option value="2" >SE</option>
                    </select>
                                <?php }?>
                      <?php if ($var1==3) {?>
                      <select class="textfield" id="mem2_class"   name="mem2_class"  style="margin-bottom: 10px" >
                        <option value="" disabled  selected="selected">Class </option>
                        <option value="4" >BE</option>
                        <option value="3" selected >TE</option>
                        <option value="2" >SE</option>
                    </select>
                                <?php }?>
                      <?php if ($var1==2) {?>
                      <select class="textfield" id="mem2_class"   name="mem2_class"  style="margin-bottom: 10px" >
                        <option value="" disabled  selected="selected">Class </option>
                        <option value="4" >BE</option>
                        <option value="3" >TE</option>
                        <option value="2" selected >SE</option>
                    </select>
                                <?php }?><br><?php if ($var2=="M") {?>
                    <input  id="mem2_gender" name="mem2_gender" value="M"  checked style="margin-bottom: 10px" type="radio" /> Male
                    <input id="mem2_gender" name="mem2_gender" value="F"   style="margin-bottom: 10px" type="radio" /> Female
                    <?php } if ($var2=="F") { ?>
                    <input  id="mem2_gender" name="mem2_gender" value="M"   style="margin-bottom: 10px" type="radio" /> Male
                    <input  id="mem2_gender" name="mem2_gender" value="F"  checked style="margin-bottom: 10px" type="radio" /> Female
                    <?php } ?>
                    
                </div>
            </div>
            
            
                          <br><br>

             <div id="div_mem3" class="form-group  ">
                    <label > Member 3  <span class="asteriskField"></span> </label>
                <div>
                    <?php 
              $sd_id1=$sd_id1 + 1;
                    $query = "select sd_fname as f1,sd_lname as f2,sd_email as f3,sd_contact as f4,sd_class as f5,sd_gender as f6,sd_dept as f7  from student_detail where sd_id ='$sd_id1';";
                          $result = $conn->query($query);
                          $row = $result->fetch_assoc(); 
                          $var=$row['f7'];  
                          $var1=$row['f5'];  
                          $var2=$row['f6'];  ?>
                         
                    <input class="textfield" id="mem3_fname" maxlength="50" name="mem3_fname"  value ="<?php echo $row['f1']; ?> " placeholder="Member 3 First Name" style="margin-bottom: 10px" type="text" />
                    <input  class="textfield" id="mem3_lname" maxlength="50" name="mem3_lname"  value ="<?php echo $row['f2']; ?> " placeholder="Member 3 Last Name" style="margin-bottom: 10px" type="text" />
                    <input class="textfield" id="mem3_email" maxlength="50" name="mem3_email" value ="<?php echo $row['f3']; ?> "  placeholder="Email-id" style="margin-bottom: 10px" type="text" />
                    <input class="textfield" id="mem3_mobile" maxlength="10" name="mem3_mobile" value ="<?php echo $row['f4']; ?> "  placeholder="Mobile No." style="margin-bottom: 10px" type="text" />
                    
                    
                    
                    
                    <?php if ($var==1) {?>
                    <select class="textfield" id="mem3_dept"   name="mem3_dept"  style="margin-bottom: 10px" >
                        <option value="" disabled  selected="selected">Department </option>
                        <option value="1" selected >EXTC</option>
                        <option value="2" >Mech</option>
                        <option value="3" >IT</option>
                        <option value="4" >Computer</option>
                    </select>
                        <?php }?>
                        <?php if ($var==2) {?>
                        <select class="textfield" id="mem3_dept"   name="mem3_dept"  style="margin-bottom: 10px" >
                        <option value="" disabled  selected="selected">Department </option>
                        <option value="1" >EXTC</option>
                        <option value="2" selected>Mech</option>
                        <option value="3" >IT</option>
                        <option value="4" >Computer</option>
                    </select>
                        <?php }?>
                        
                        <?php if ($var==3) {?>
                        <select class="textfield" id="mem3_dept"   name="mem3_dept"  style="margin-bottom: 10px" >
                        <option value="" disabled  selected="selected">Department </option>
                        <option value="1" >EXTC</option>
                        <option value="2" >Mech</option>
                        <option value="3" selected >IT</option>
                        <option value="4" >Computer</option>
                    </select>
                        <?php }?>
                                                <?php if ($var==4) {?>
                                                <select class="textfield" id="mem3_dept"   name="mem3_dept"  style="margin-bottom: 10px" >
                        <option value="" disabled  selected="selected">Department </option>
                        <option value="1" >EXTC</option>
                        <option value="2" >Mech</option>
                        <option value="3" >IT</option>
                        <option value="4" selected >Computer</option>
                    </select>
                        <?php }?>
                    <?php if ($var1==4) {?>
                    
                    <select class="textfield" id="mem3_class"   name="mem3_class"  style="margin-bottom: 10px" >
                        <option value="" disabled  selected="selected">Class </option>
                        <option value="4" selected>BE</option>
                        <option value="3" >TE</option>
                        <option value="2" >SE</option>
                    </select>
                                <?php }?>
                      <?php if ($var1==3) {?>
                      <select class="textfield" id="mem3_class"   name="mem3_class"  style="margin-bottom: 10px" >
                        <option value="" disabled  selected="selected">Class </option>
                        <option value="4" >BE</option>
                        <option value="3" selected >TE</option>
                        <option value="2" >SE</option>
                    </select>
                                <?php }?>
                      <?php if ($var1==2) {?>
                      <select class="textfield" id="mem3_class"   name="mem3_class"  style="margin-bottom: 10px" >
                        <option value="" disabled  selected="selected">Class </option>
                        <option value="4" >BE</option>
                        <option value="3" >TE</option>
                        <option value="2" selected >SE</option>
                    </select>
                                <?php }?>
                                <br>
                    <?php if ($var2=="M") {?>
                    <input  id="mem3_gender" name="mem3_gender" value="M"  checked style="margin-bottom: 10px" type="radio" /> Male
                    <input class= id="mem3_gender" name="mem3_gender" value="F"   style="margin-bottom: 10px" type="radio" /> Female
                    <?php } if ($var2=="F") { ?>
                    <input  id="mem3_gender" name="mem3_gender" value="M"   style="margin-bottom: 10px" type="radio" /> Male
                    <input  id="mem3_gender" name="mem3_gender" value="F"  checked style="margin-bottom: 10px" type="radio" /> Female
                    <?php } ?>
                    
                </div>
            </div>
             
             
                         <br><br>

                <div id="div_mem4" class="form-group  ">
                    <label > Member 4  <span class="asteriskField"></span> </label>
                <div>
                    <?php 
                    $sd_id1=$sd_id1 + 1;
                    $query = "select sd_fname as f1,sd_lname as f2,sd_email as f3,sd_contact as f4,sd_class as f5,sd_gender as f6,sd_dept as f7  from student_detail where sd_id ='$sd_id1';";
                          $result = $conn->query($query);
                          $row = $result->fetch_assoc(); 
                          $var=$row['f7'];  
                          $var1=$row['f5'];  
                          $var2=$row['f6'];  ?>
                         
                    <input  class="textfield" id="mem4_fname" maxlength="50" name="mem4_fname"  value ="<?php echo $row['f1']; ?> " placeholder="Member 4 First Name" style="margin-bottom: 10px" type="text" />
                    <input class="textfield" id="mem4_lname" maxlength="50" name="mem4_lname"  value ="<?php echo $row['f2']; ?> " placeholder="Member 4 Last Name" style="margin-bottom: 10px" type="text" />
                    <input class="textfield" id="mem4_email" maxlength="50" name="mem4_email" value ="<?php echo $row['f3']; ?> "  placeholder="Email-id" style="margin-bottom: 10px" type="text" />
                    <input class="textfield" id="mem4_mobile" maxlength="10" name="mem4_mobile" value ="<?php echo $row['f4']; ?> "  placeholder="Mobile No." style="margin-bottom: 10px" type="text" />
                    
                    
                    
                    
                    <?php if ($var==1) {?>
                    <select class="textfield" id="mem4_dept"   name="mem4_dept"  style="margin-bottom: 10px" >
                        <option value="" disabled  selected="selected">Department </option>
                        <option value="1" selected >EXTC</option>
                        <option value="2" >Mech</option>
                        <option value="3" >IT</option>
                        <option value="4" >Computer</option>
                    </select>
                        <?php }?>
                        <?php if ($var==2) {?>
                        <select class="textfield" id="mem4_dept"   name="mem4_dept"  style="margin-bottom: 10px" >
                        <option value="" disabled  selected="selected">Department </option>
                        <option value="1" >EXTC</option>
                        <option value="2" selected>Mech</option>
                        <option value="3" >IT</option>
                        <option value="4" >Computer</option>
                    </select>
                        <?php }?>
                       
                        <?php if ($var==3) {?>
                         <select class="textfield" id="mem4_dept"   name="mem4_dept"  style="margin-bottom: 10px" >
                        <option value="" disabled  selected="selected">Department </option>
                        <option value="1" >EXTC</option>
                        <option value="2" >Mech</option>
                        <option value="3" selected >IT</option>
                        <option value="4" >Computer</option>
                    </select>
                        <?php }?>
                                                <?php if ($var==4) {?>
                                                <select class="textfield" id="mem4_dept"   name="mem4_dept"  style="margin-bottom: 10px" >
                        <option value="" disabled  selected="selected">Department </option>
                        <option value="1" >EXTC</option>
                        <option value="2" >Mech</option>
                        <option value="3" >IT</option>
                        <option value="4" selected >Computer</option>
                    </select>
                        <?php }?>
                    <?php if ($var1==4) {?>
                    
                    <select class="textfield" id="mem4_class"   name="mem4_class"  style="margin-bottom: 10px" >
                        <option value="" disabled  selected="selected">Class </option>
                        <option value="4" selected>BE</option>
                        <option value="3" >TE</option>
                        <option value="2" >SE</option>
                    </select>
                                <?php }?>
                      <?php if ($var1==3) {?>
                      <select class="textfield" id="mem4_class"   name="mem4_class"  style="margin-bottom: 10px" >
                        <option value="" disabled  selected="selected">Class </option>
                        <option value="4" >BE</option>
                        <option value="3" selected >TE</option>
                        <option value="2" >SE</option>
                    </select>
                                <?php }?>
                      <?php if ($var1==2) {?>
                      <select class="textfield" id="mem4_class"   name="mem4_class"  style="margin-bottom: 10px" >
                        <option value="" disabled  selected="selected">Class </option>
                        <option value="4" >BE</option>
                        <option value="3" >TE</option>
                        <option value="2" selected >SE</option>
                    </select>
                                <?php }
                                
                                
                                ?><br>
                    <?php if ($var2=="M") {?>
                    <input  class="textfield" id="mem4_gender" name="mem4_gender" value="M"  checked style="margin-bottom: 10px" type="radio" /> Male
                    <input class="textfield" id="mem4_gender" name="mem4_gender" value="F"   style="margin-bottom: 10px" type="radio" /> Female
                    <?php } if ($var2=="F") { ?>
                    <input id="mem4_gender" name="mem4_gender" value="M"   style="margin-bottom: 10px" type="radio" /> Male
                    <input  id="mem4_gender" name="mem4_gender" value="F"  checked style="margin-bottom: 10px" type="radio" /> Female
                    <?php } ?>
                    
                </div>
            </div>
            
            
                        <br><br>

            
                            <div id="div_mem5" class="form-group  ">
                    <label > Member 5 <span class="asteriskField"></span> </label>
                <div>
                    <?php 
                    $sd_id1=$sd_id1 + 1;
                    $query = "select sd_fname as f1,sd_lname as f2,sd_email as f3,sd_contact as f4,sd_class as f5,sd_gender as f6,sd_dept as f7  from student_detail where sd_id ='$sd_id1';";
                          $result = $conn->query($query);
                          $row = $result->fetch_assoc(); 
                          $var=$row['f7'];  
                          $var1=$row['f5'];  
                          $var2=$row['f6'];  ?>
                         
                    <input class="textfield" id="mem5_fname" maxlength="50" name="mem5_fname"  value ="<?php echo $row['f1']; ?> " placeholder="Member 5 First Name" style="margin-bottom: 10px" type="text" />
                    <input class="textfield" id="mem5_lname" maxlength="50" name="mem5_lname"  value ="<?php echo $row['f2']; ?> " placeholder="Member 5 Last Name" style="margin-bottom: 10px" type="text" />
                    <input class="textfield" id="mem5_email" maxlength="50" name="mem5_email" value ="<?php echo $row['f3']; ?> "  placeholder="Email-id" style="margin-bottom: 10px" type="text" />
                    <input class="textfield" id="mem5_mobile" maxlength="10" name="mem5_mobile" value ="<?php echo $row['f4']; ?> "  placeholder="Mobile No." style="margin-bottom: 10px" type="text" />
                    
                    
                    
                    
                    
                    <?php if ($var==1) {?>
                    <select class="textfield" id="mem5_dept"   name="mem5_dept"  style="margin-bottom: 10px" >
                        <option value="" disabled  selected="selected">Department </option>
                        <option value="1" selected >EXTC</option>
                        <option value="2" >Mech</option>
                        <option value="3" >IT</option>
                        <option value="4" >Computer</option>
                    </select>
                        <?php }?>
                        <?php if ($var==2) {?>
                        <select class="textfield" id="mem5_dept"   name="mem5_dept"  style="margin-bottom: 10px" >
                        <option value="" disabled  selected="selected">Department </option>
                        <option value="1" >EXTC</option>
                        <option value="2" selected>Mech</option>
                        <option value="3" >IT</option>
                        <option value="4" >Computer</option>
                    </select>
                        <?php }?>
                        
                        <?php if ($var==3) {?>
                        <select class="textfield" id="mem5_dept"   name="mem5_dept"  style="margin-bottom: 10px" >
                        <option value="" disabled  selected="selected">Department </option>
                        <option value="1" >EXTC</option>
                        <option value="2" >Mech</option>
                        <option value="3" selected >IT</option>
                        <option value="4" >Computer</option>
                    </select>
                        <?php }?>
                                                <?php if ($var==4) {?>
                                                <select class="textfield" id="mem5_dept"   name="mem5_dept"  style="margin-bottom: 10px" >
                        <option value="" disabled  selected="selected">Department </option>
                        <option value="1" >EXTC</option>
                        <option value="2" >Mech</option>
                        <option value="3" >IT</option>
                        <option value="4" selected >Computer</option>
                    </select>
                        <?php }?>
                    <?php if ($var1==4) {?>
                    
                    <select class="textfield" id="mem5_class"   name="mem5_class"  style="margin-bottom: 10px" >
                        <option value="" disabled  selected="selected">Class </option>
                        <option value="4" selected>BE</option>
                        <option value="3" >TE</option>
                        <option value="2" >SE</option>
                    </select>
                                <?php }?>
                      <?php if ($var1==3) {?>
                      <select class="textfield" id="mem5_class"   name="mem5_class"  style="margin-bottom: 10px" >
                        <option value="" disabled  selected="selected">Class </option>
                        <option value="4" >BE</option>
                        <option value="3" selected >TE</option>
                        <option value="2" >SE</option>
                    </select>
                                <?php }?>
                      <?php if ($var1==2) {?>
                      <select class="textfield" id="mem5_class"   name="mem5_class"  style="margin-bottom: 10px" >
                        <option value="" disabled  selected="selected">Class </option>
                        <option value="4" >BE</option>
                        <option value="3" >TE</option>
                        <option value="2" selected >SE</option>
                    </select>
                                <?php  }
                                
                                
                                  
            
                          
                                ?>
                                 <br><?php if ($var2=="M") {?>
                    <input  id="mem5_gender" name="mem5_gender" value="M"  checked style="margin-bottom: 10px" type="radio" /> Male
                    <input  id="mem5_gender" name="mem5_gender" value="F"   style="margin-bottom: 10px" type="radio" /> Female
                    <?php } if ($var2=="F") { ?>
                    <input  id="mem5_gender" name="mem5_gender" value="M"   style="margin-bottom: 10px" type="radio" /> Male
                    <input  id="mem5_gender" name="mem5_gender" value="F"  checked style="margin-bottom: 10px" type="radio" /> Female
                    <?php } ?>
                                 
                                <div class="form-group"><br><br><br>
            <div class="aab controls col-md-4 "></div>
            <div class="controls col-md-8 " style="text-align: center;">
                <button  name="update" value='Update' style="background-color: #007bff; color: #fff; border-color: #007bff; border-radius: 5px; padding: 10px 20px; font-size: 16px; font-weight: bold; cursor: pointer;" id="submit-id-submit" />Update </button>
            </div>
        </div>
        <?php if(isset($_POST['update'])){
                      
                        // $0_fname1=$_POST['0_fname'];
                        // $0_lname1=$_POST['0_lname'];
                        // $0_email1=$_POST['0_email'];
                        // $0_mobile1=$_POST['0_mobile'];
                        // $0_gender1=$_POST['0_gender'];
                        // $0_dept1=$_POST['0_dept'];
                        // $0_class1=$_POST['0_class'];
                        
                        
                    

                    $mem0_fname=addslashes($_POST["mem0_fname"]);
                    $mem0_lname=addslashes($_POST["mem0_lname"]);
                    $mem0_email=addslashes($_POST["mem0_email"]);
                    $mem0_mobile=addslashes($_POST["mem0_mobile"]);
                    $mem0_gender=addslashes($_POST["mem0_gender"]);
                    $mem0_dept=addslashes($_POST["mem0_dept"]);
                    $mem0_class=addslashes($_POST["mem0_class"]);

                    $mem1_fname=addslashes($_POST["mem1_fname"]);
                    $mem1_lname=addslashes($_POST["mem1_lname"]);
                    $mem1_email=addslashes($_POST["mem1_email"]);
                    $mem1_mobile=addslashes($_POST["mem1_mobile"]);
                    $mem1_gender=addslashes($_POST["mem1_gender"]);
                    $mem1_dept=addslashes($_POST["mem1_dept"]);
                    $mem1_class=addslashes($_POST["mem1_class"]);

                    $mem2_fname=addslashes($_POST["mem2_fname"]);
                    $mem2_lname=addslashes($_POST["mem2_lname"]);
                    $mem2_email=addslashes($_POST["mem2_email"]);
                    $mem2_mobile=addslashes($_POST["mem2_mobile"]);
                    $mem2_gender=addslashes($_POST["mem2_gender"]);
                    $mem2_dept=addslashes($_POST["mem2_dept"]);
                    $mem2_class=addslashes($_POST["mem2_class"]);

                    $mem3_fname=addslashes($_POST["mem3_fname"]);
                    $mem3_lname=addslashes($_POST["mem3_lname"]);
                    $mem3_email=addslashes($_POST["mem3_email"]);
                    $mem3_mobile=addslashes($_POST["mem3_mobile"]);
                    $mem3_gender=addslashes($_POST["mem3_gender"]);
                    $mem3_dept=addslashes($_POST["mem3_dept"]);
                    $mem3_class=addslashes($_POST["mem3_class"]);

                    $mem4_fname=addslashes($_POST["mem4_fname"]);
                    $mem4_lname=addslashes($_POST["mem4_lname"]);
                    $mem4_email=addslashes($_POST["mem4_email"]);
                    $mem4_mobile=addslashes($_POST["mem4_mobile"]);
                    $mem4_gender=addslashes($_POST["mem4_gender"]);
                    $mem4_dept=addslashes($_POST["mem4_dept"]);
                    $mem4_class=addslashes($_POST["mem4_class"]);

                    $mem5_fname=addslashes($_POST["mem5_fname"]);
                    $mem5_lname=addslashes($_POST["mem5_lname"]);
                    $mem5_email=addslashes($_POST["mem5_email"]);
                    $mem5_mobile=addslashes($_POST["mem5_mobile"]);
                    $mem5_gender=addslashes($_POST["mem5_gender"]);
                    $mem5_dept=addslashes($_POST["mem5_dept"]);
                    $mem5_class=addslashes($_POST["mem5_class"]);
                           
                                
             //       $mem='$mem';
                    
                    
                    $sql = "UPDATE student_detail SET sd_fname=?, sd_lname=?, sd_email=?, sd_contact=?, sd_gender=?, sd_dept=?, sd_class=? WHERE sd_id=?";


                    $stmt = $conn->prepare($sql);
                    

                    $stmt->bind_param("sssssiii", $mem0_fname, $mem0_lname, $mem0_email, $mem0_mobile, $mem0_gender, $mem0_dept, $mem0_class, $ref1);
                    

                    
                    if ($stmt->execute()) {
                      
                    }
                    $sql = "UPDATE student_detail SET sd_fname=?, sd_lname=?, sd_email=?, sd_contact=?, sd_gender=?, sd_dept=?, sd_class=? WHERE sd_id=?";


                    $stmt = $conn->prepare($sql);
                    $ref1=$ref1 + 1;

                    $stmt->bind_param("sssssiii", $mem1_fname, $mem1_lname, $mem1_email, $mem1_mobile, $mem1_gender, $mem1_dept, $mem1_class, $ref1);
                    if ($stmt->execute()) {
                      
                    }
                    $sql = "UPDATE student_detail SET sd_fname=?, sd_lname=?, sd_email=?, sd_contact=?, sd_gender=?, sd_dept=?, sd_class=? WHERE sd_id=?";


                    $stmt = $conn->prepare($sql);
                    $ref1=$ref1 + 1;

                    $stmt->bind_param("sssssiii", $mem2_fname, $mem2_lname, $mem2_email, $mem2_mobile, $mem2_gender, $mem2_dept, $mem2_class, $ref1);
                    if ($stmt->execute()) {
                      
                    }
                    $sql = "UPDATE student_detail SET sd_fname=?, sd_lname=?, sd_email=?, sd_contact=?, sd_gender=?, sd_dept=?, sd_class=? WHERE sd_id=?";


                    $stmt = $conn->prepare($sql);
                    $ref1=$ref1 + 1;

                    $stmt->bind_param("sssssiii", $mem3_fname, $mem3_lname, $mem3_email, $mem3_mobile, $mem3_gender, $mem3_dept, $mem3_class, $ref1);
                    if ($stmt->execute()) {
                      
                    }
                    $sql = "UPDATE student_detail SET sd_fname=?, sd_lname=?, sd_email=?, sd_contact=?, sd_gender=?, sd_dept=?, sd_class=? WHERE sd_id=?";


                    $stmt = $conn->prepare($sql);
                    $ref1=$ref1 + 1;

                    $stmt->bind_param("sssssiii", $mem4_fname, $mem4_lname, $mem4_email, $mem4_mobile, $mem4_gender, $mem4_dept, $mem4_class, $ref1);
                    
                    if ($stmt->execute()) {
                      
                    }
                    $sql = "UPDATE student_detail SET sd_fname=?, sd_lname=?, sd_email=?, sd_contact=?, sd_gender=?, sd_dept=?, sd_class=? WHERE sd_id=?";


                    $stmt = $conn->prepare($sql);
                    $ref1=$ref1 + 1;

                    $stmt->bind_param("sssssiii", $mem5_fname, $mem5_lname, $mem5_email, $mem5_mobile, $mem5_gender, $mem5_dept, $mem5_class, $ref1);
                    
                    if ($stmt->execute()) {
                      
                    } 
           
                    $stmt->close();
                    $conn->close();





                   
        }
                    // echo $sd_id1;
                    
?>
        
                    
                </div>
            </div>
          

            

       
       
        
   

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
<!-- <?php include 'footer.php';?> -->