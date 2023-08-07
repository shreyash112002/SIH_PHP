<?php include 'header.php';?>

<!DOCTYPE html>
<head lang="en">
	<title>Registeration</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<style>
    .panel-body{
        padding-top:40px;
        padding-left:50px;
    }
     .panel-heading{
       text-align:center;
       font-size:1.8rem;
       margin-top:50px;
       margin-bottom:50px;
       color:#275f94;
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
        background-color:#3586ff ;
        color:white;
        padding:10px;
        align-items:center;
        border-radius:5px;
        width:150px;
        height:40px;
      border:none;
    }
    .btn-info:hover{
    background-color:#275f94;
}
.alert{
    font-size:18px;
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


</style>
<body>
<?php require 'connect.php';?>
<div class="container-fluid col-md-12" >
<div class="row">


	<div class="col-md-12">
		<div class="panel panel-info ">
		<div class="panel-heading"> <h3> <p class="font-weight-italic">Register Team for Internal Hackathon</p> </h3> </div>
	
		<div class="panel-body">
		<form  class="form-horizontal" method="post" >
        
            
            <div class="alert alert-info" role="alert">
                <strong> Note : </strong>
                
                <ul>
                    <li> First member will be considered as Team Leader </li>
                    <li> Ensure Your team has atleast one Female member, recommended to have more than one.</li>
                </ul>
            </div>
            <br></br>

            <div id="div_mem0" class="form-group required ">
            	    <label > Team Leader Name  <span class="asteriskField">*</span> </label>
                <div>
                    <input id="mem0_fname" class="textfield" maxlength="50" name="mem0_fname" required  placeholder="Leader First Name" style="margin-bottom: 10px" type="text" />
                	<input id="mem0_lname" class="textfield" maxlength="50" name="mem0_lname"  required placeholder="Leader Last Name" style="margin-bottom: 10px" type="text" />
                	<input  id="mem0_email" class="textfield" maxlength="50" name="mem0_email"  required placeholder="Email-id" style="margin-bottom: 10px" type="text" />
                	<input id="mem0_mobile" class="textfield" maxlength="10" name="mem0_mobile" required  placeholder="Mobile No." style="margin-bottom: 10px" type="text" />
                	<br>
                
                	<select id="mem0_dept"   name="mem0_dept" required style="margin-bottom: 10px" class="textfield" >
                        <option value="" disabled  selected="selected">Department </option>
                        <option value="1" >EXTC</option>
                        <option value="2" >Mech</option>
                        <option value="3" >IT</option>
                        <option value="4" >Computer</option>
                    </select>
                    <select  id="mem0_class"   name="mem0_class" required style="margin-bottom: 10px" class="textfield" >
                        <option value="" disabled  selected="selected">Class </option>
                        <option value="4" >BE</option>
                        <option value="3" >TE</option>
                        <option value="2" >SE</option>
                    </select><br>
                    	<input id="mem0_gender" class="radiobtn" name="mem0_gender" value="M"  required style="margin-bottom: 10px" type="radio" /> Male
                	<input id="mem0_gender" name="mem0_gender" value="F" required  style="margin-bottom: 10px" type="radio" /> Female <br>
                </div>
            </div>
<br></br>
            <div id="div_mem1" class="form-group  ">
                    <label > Member 1  <span class="asteriskField">*</span> </label>
                <div>
                    <input id="mem1_fname" class="textfield" maxlength="50" name="mem1_fname" required  placeholder="Member 1 First Name" style="margin-bottom: 10px" type="text" />
                    <input id="mem1_lname" class="textfield" maxlength="50" name="mem1_lname" required  placeholder="Member 1 Last Name" style="margin-bottom: 10px" type="text" />
                    <input  id="mem1_email" class="textfield" maxlength="50" name="mem1_email" required  placeholder="Email-id" style="margin-bottom: 10px" type="text" />
                    <input id="mem1_mobile"class="textfield" maxlength="10" name="mem1_mobile" required  placeholder="Mobile No." style="margin-bottom: 10px" type="text" />
                    <br>
                   
                    <select id="mem1_dept"   name="mem1_dept" required style="margin-bottom: 10px" class="textfield">
                        <option value="" disabled  selected="selected">Department </option>
                        <option value="1" >EXTC</option>
                        <option value="2" >Mech</option>
                        <option value="3" >IT</option>
                        <option value="4" >Computer</option>
                    </select>
                    <select  id="mem1_class"   name="mem1_class" required style="margin-bottom: 10px" class="textfield">
                        <option value="" disabled  selected="selected">Class </option>
                        <option value="4" >BE</option>
                        <option value="3" >TE</option>
                        <option value="2" >SE</option>
                    </select><br>
                     <input id="mem1_gender" name="mem1_gender" value="M"  required style="margin-bottom: 10px" type="radio" /> Male
                    <input id="mem1_gender" name="mem1_gender" value="F"  required style="margin-bclass="textfield"ottom: 10px" type="radio" /> Female <br>
                </div>
            </div>
<br></br>
            <div id="div_mem2" class="form-group  ">
                    <label > Member 2 <span class="asteriskField">*</span> </label>
                <div>
                    <input id="mem2_fname" class="textfield" maxlength="50" name="mem2_fname" required  placeholder="Member 2 First Name" style="margin-bottom: 10px" type="text" />
                    <input id="mem2_lname" class="textfield" maxlength="50" name="mem2_lname"  required placeholder="Member 2 Last Name" style="margin-bottom: 10px" type="text" />
                    <input  id="mem2_email" class="textfield" maxlength="50" name="mem2_email" required  placeholder="Email-id" style="margin-bottom: 10px" type="text" />
                    <input id="mem2_mobile" class="textfield" maxlength="10" name="mem2_mobile" required  placeholder="Mobile No." style="margin-bottom: 10px" type="text" /><br>
                    
                    <select id="mem2_dept"   name="mem2_dept" required style="margin-bottom: 10px"class="textfield" >
                        <option value="" disabled  selected="selected">Department </option>
                        <option value="1" >EXTC</option>
                        <option value="2" >Mech</option>
                        <option value="3" >IT</option>
                        <option value="4" >Computer</option>
                    </select>
                    <select  id="mem2_class"   name="mem2_class" required style="margin-bottom: 10px" class="textfield">
                        <option value="" disabled  selected="selected">Class </option>
                        <option value="4" >BE</option>
                        <option value="3" >TE</option>
                        <option value="2" >SE</option>
                    </select><br>
                    <input id="mem2_gender" name="mem2_gender" value="M" required  style="margin-bottom: 10px" type="radio" /> Male
                    <input id="mem2_gender" name="mem2_gender" value="F"  required style="margin-bottom: 10px" type="radio" /> Female <br>
                </div>
            </div>
<br></br>
            <div id="div_mem3" class="form-group  ">
                    <label > Member 3 <span class="asteriskField">*</span> </label>
                <div>
                    <input id="mem3_fname" class="textfield" maxlength="50" name="mem3_fname" required  placeholder="Member 3 First Name" style="margin-bottom: 10px" type="text" />
                    <input id="mem3_lname" class="textfield" maxlength="50" name="mem3_lname"  required placeholder="Member 3 Last Name" style="margin-bottom: 10px" type="text" />
                    <input  id="mem3_email" class="textfield" maxlength="50" name="mem3_email" required  placeholder="Email-id" style="margin-bottom: 10px" type="text" />
                    <input id="mem3_mobile" class="textfield" maxlength="10" name="mem3_mobile" required  placeholder="Mobile No." style="margin-bottom: 10px" type="text" /><br>
                   
                    <select id="mem3_dept"   name="mem3_dept" required style="margin-bottom: 10px" class="textfield" >
                        <option value="" disabled  selected="selected">Department </option>
                        <option value="1" >EXTC</option>
                        <option value="2" >Mech</option>
                        <option value="3" >IT</option>
                        <option value="4" >Computer</option>
                    </select>
                    <select  id="mem3_class"   name="mem3_class" required style="margin-bottom: 10px"class="textfield" >
                        <option value="" disabled  selected="selected">Class </option>
                        <option value="4" >BE</option>
                        <option value="3" >TE</option>
                        <option value="2" >SE</option>
                    </select><br>
                     <input id="mem3_gender" name="mem3_gender" value="M" required  style="margin-bottom: 10px" type="radio" /> Male
                    <input id="mem3_gender" name="mem3_gender" value="F"  required style="margin-bottom: 10px" type="radio" /> Female <br>
                </div>
            </div>
<br></br>

            <div id="div_mem4" class="form-group  ">
                    <label > Member 4 <span class="asteriskField">*</span> </label>
                <div>
                    <input id="mem4_fname" class="textfield" maxlength="50" name="mem4_fname" required  placeholder="Member 4 First Name" style="margin-bottom: 10px" type="text" />
                    <input id="mem4_lname" class="textfield" maxlength="50" name="mem4_lname" required  placeholder="Member 4 Last Name" style="margin-bottom: 10px" type="text" />
                    <input  id="mem4_email" class="textfield" maxlength="50" name="mem4_email"  required placeholder="Email-id" style="margin-bottom: 10px" type="text" />
                    <input id="mem4_mobile" class="textfield" maxlength="10" name="mem4_mobile" required  placeholder="Mobile No." style="margin-bottom: 10px" type="text" /><br>
                   
                    <select id="mem4_dept"   name="mem4_dept" required style="margin-bottom: 10px" class="textfield">
                        <option value="" disabled  selected="selected">Department </option>
                        <option value="1" >EXTC</option>
                        <option value="2" >Mech</option>
                        <option value="3" >IT</option>
                        <option value="4" >Computer</option>
                    </select>
                    <select  id="mem4_class"   name="mem4_class" required style="margin-bottom: 10px" class="textfield">
                        <option value="" disabled  selected="selected">Class </option>
                        <option value="4" >BE</option>
                        <option value="3" >TE</option>
                        <option value="2" >SE</option>
                    </select><br>
                     <input id="mem4_gender" name="mem4_gender" value="M"  required style="margin-bottom: 10px" type="radio" /> Male
                    <input id="mem4_gender" name="mem4_gender" value="F"  required style="margin-bottom: 10px" type="radio" /> Female <br>
                </div>
            </div>

<br></br>
            <div id="div_mem5" class="form-group  ">
                    <label > Member 5 <span class="asteriskField">*</span> </label>
                <div>
                    <input id="mem5_fname" class="textfield" maxlength="50" name="mem5_fname" required   placeholder="Member 5 First Name" style="margin-bottom: 10px" type="text" />
                    <input id="mem5_lname" class="textfield" maxlength="50" name="mem5_lname"  required placeholder="Member 5 Last Name" style="margin-bottom: 10px" type="text" />
                    <input  id="mem5_email" class="textfield" maxlength="50" name="mem5_email"  required placeholder="Email-id" style="margin-bottom: 10px" type="text" />
                    <input id="mem5_mobile" class="textfield" maxlength="10" name="mem5_mobile"  required placeholder="Mobile No." style="margin-bottom: 10px" type="text" /><br>
                    
                    <select id="mem5_dept"   name="mem5_dept" required style="margin-bottom: 10px"class="textfield" >
                        <option value="" disabled  selected="selected">Department </option>
                        <option value="1" >EXTC</option>
                        <option value="2" >Mech</option>
                        <option value="3" >IT</option>
                        <option value="4" >Computer</option>
                    </select>
                    <select  id="mem5_class"   name="mem5_class" required style="margin-bottom: 10px"class="textfield" >
                        <option value="" disabled  selected="selected">Class </option>
                        <option value="4" >BE</option>
                        <option value="3" >TE</option>
                        <option value="2" >SE</option>
                    </select><br>
                    <input id="mem5_gender" name="mem5_gender" value="M" required  style="margin-bottom: 10px" type="radio" /> Male
                    <input id="mem5_gender" name="mem5_gender" value="F" required  style="margin-bottom: 10px" type="radio" /> Female <br>
                </div>
            </div>
            <br></br>

            <div class="alert alert-info" role="alert">
            <ul style="line-height:1.5rem;">
                <li> Problem statement Number (PS Number) for both software and hardware edition are available at <a href='https://sih.gov.in/sih2022PS' style="color: #275f94;font-weight:bold;text-decoration:underline;" target='_blank'> https://sih.gov.in/sih2022PS </a> </li>
            </ul>
            </div>
            
<br></br>
        <label> Idea 1:  <span class="asteriskField">*</span> </label><br>
        <input id="ps1" maxlength="10" class="textfield" name="ps1" required  placeholder="Problem Statement Number" style="margin-bottom: 10px" type="text" >
        <select id="cat1"   name="cat1" required style="margin-bottom: 10px" class="textfield" >
            <option value="" disabled  selected="selected">Category </option>
            <option value="1" >Software</option>
            <option value="2" >Hardware</option>
        </select>
<br></br>
        <label> Idea 2: </label><br>
        <input id="ps2" maxlength="10" class="textfield" name="ps2" placeholder="Problem Statement Number" style="margin-bottom: 10px;margin-left:22px;" type="text" >
        <select id="cat2" name="cat2" style="margin-bottom: 10px" class="textfield">
            <option value="" disabled  selected="selected">Category </option>
            <option value="1" >Software</option>
            <option value="2" >Hardware</option>
        </select>
<br></br>
        <label> Idea 3: </label><br>
        <input id="ps3" maxlength="10" name="ps3" class="textfield" placeholder="Problem Statement Number" style="margin-bottom: 10px; margin-left:22px;" type="text" >
        <select id="cat3"   name="cat3" style="margin-bottom: 10px" class="textfield">
            <option value="" disabled  selected="selected">Category </option>
            <option value="1" >Software</option>
            <option value="2" >Hardware</option>
        </select>
       
        <div class="form-group">
            <div class="aab controls col-md-4 "></div>
            <div class="controls col-md-8 ">
                <input type="submit" name="submit" value="Submit" class="btn btn-primary btn btn-info" style="margin-top:50px; margin-left:40%;" id="submit-id-submit" />
            </div>
        </div>
   

		</form>

           

        </div>
        </div>
        </div>
        </div>

</div>


</div>


 <?php
                if(isset($_POST['submit']))
                {
                    global $logts;
             //       $mem='$mem';
                    

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
                    

                    //logic to generate Id
                    $sqlspcl1 = "SELECT max(teamId) as a ,max(teamName)as b FROM team_detail";
                    $resultspcl1 = $conn->query($sqlspcl1);
                    if ($resultspcl1->num_rows > 0)
                    {
                        $row1 = $resultspcl1->fetch_assoc();
                        $teamId=$row1["a"]+1;



                        
                    }
                    else
                    {
                        $teamId=1;
                    }
                    // end of   logic to generate Id

                	$sql="INSERT INTO team_detail(teamId,teamName,dateOfCreation,lastModifiedDate) VALUES('$teamId','1','$logts','$logts')";  
              		  //    echo "HI";
                    if($conn->query($sql) === TRUE)
                    {

                        $_SESSION['teamId']=$teamId;
                        $sql1="UPDATE team_detail SET teamname = CONCAT('2023T', '$teamId') where teamId='$teamId';";
                        $updateResult = mysqli_query($conn, $sql1);
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

                         $sql1="INSERT INTO student_detail(sd_id,sd_dept,sd_class,sd_fname,sd_lname,sd_email,sd_contact,teamId,sd_gender,isTeamLeader,dateOfCreation,lastModifiedDate) VALUES('$sd_id','$mem0_dept','$mem0_class','$mem0_fname','$mem0_lname','$mem0_email','$mem0_mobile','$teamId','$mem0_gender','1','$logts','$logts')";  
                         $conn->query($sql1);
                         $sqlspcl1 = "SELECT (max(sd_id)) as uid FROM student_detail";
                        $resultspcl1 = $conn->query($sqlspcl1);
                        if ($resultspcl1->num_rows > 0)
                        {
                            $row1 = $resultspcl1->fetch_assoc();
                            $uid=$row1['uid'];
                            $pwd = intval($uid."00");
                            
                        }
                         $sql1="INSERT INTO user_login_details(uid,pwd,uld_role) VALUES('$uid','$pwd',4)";
                         $conn->query($sql1);
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

                         $sql1="INSERT INTO student_detail(sd_id,sd_dept,sd_class,sd_fname,sd_lname,sd_email,sd_contact,teamId,sd_gender,isTeamLeader,dateOfCreation,lastModifiedDate) VALUES('$sd_id','$mem1_dept','$mem1_class','$mem1_fname','$mem1_lname','$mem1_email','$mem1_mobile','$teamId','$mem1_gender','0','$logts','$logts')";  
                         $conn->query($sql1);

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

                         $sql1="INSERT INTO student_detail(sd_id,sd_dept,sd_class,sd_fname,sd_lname,sd_email,sd_contact,teamId,sd_gender,isTeamLeader,dateOfCreation,lastModifiedDate) VALUES('$sd_id','$mem2_dept','$mem2_class','$mem2_fname','$mem2_lname','$mem2_email','$mem2_mobile','$teamId','$mem2_gender','0','$logts','$logts')";  
                         $conn->query($sql1);



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

                         $sql1="INSERT INTO student_detail(sd_id,sd_dept,sd_class,sd_fname,sd_lname,sd_email,sd_contact,teamId,sd_gender,isTeamLeader,dateOfCreation,lastModifiedDate) VALUES('$sd_id','$mem3_dept','$mem3_class','$mem3_fname','$mem3_lname','$mem3_email','$mem3_mobile','$teamId','$mem3_gender','0','$logts','$logts')";  
                         $conn->query($sql1);


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

                         $sql1="INSERT INTO student_detail(sd_id,sd_dept,sd_class,sd_fname,sd_lname,sd_email,sd_contact,teamId,sd_gender,isTeamLeader,dateOfCreation,lastModifiedDate) VALUES('$sd_id','$mem4_dept','$mem4_class','$mem4_fname','$mem4_lname','$mem4_email','$mem4_mobile','$teamId','$mem4_gender','0','$logts','$logts')";  
                         $conn->query($sql1);


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

                         $sql1="INSERT INTO student_detail(sd_id,sd_dept,sd_class,sd_fname,sd_lname,sd_email,sd_contact,teamId,sd_gender,isTeamLeader,dateOfCreation,lastModifiedDate) VALUES('$sd_id','$mem5_dept','$mem5_class','$mem5_fname','$mem5_lname','$mem5_email','$mem5_mobile','$teamId','$mem5_gender','0','$logts','$logts')";  
                         $conn->query($sql1);
                         

                         //$teamId;
						if(isset($_POST["ps1"]) && $_POST["ps1"]!= null)
						{							

                        $ps1 = $_POST["ps1"]; 
                        $cat1 = $_POST["cat1"]; 
                           //logic to generate Id
                        $sqlspcl1 = "SELECT max(teamIdeasId) as a FROM team_ideas";
                        $resultspcl1 = $conn->query($sqlspcl1);
                        if ($resultspcl1->num_rows > 0)
                        {
                            $row1 = $resultspcl1->fetch_assoc();
                            $teamIdeasId=$row1["a"]+1;
                        }
                        else
                        {
                            $teamIdeasId=1;
                        }
                        // end of   logic to generate Id

                         $sql1="INSERT INTO team_ideas(teamIdeasId,teamPSCode,teamIdeasCategory,teamId,dateOfCreation,lastModifiedDate) VALUES('$teamIdeasId','$ps1','$cat1','$teamId','$logts','$logts')";  
                         $conn->query($sql1);
                         }

						
						if(isset($_POST["ps2"]) && $_POST["ps2"]!= null)
						{							

                        $ps2 = $_POST["ps2"]; 
                        $cat2 = $_POST["cat2"]; 
                           //logic to generate Id
                        $sqlspcl1 = "SELECT max(teamIdeasId) as a FROM team_ideas";
                        $resultspcl1 = $conn->query($sqlspcl1);
                        if ($resultspcl1->num_rows > 0)
                        {
                            $row1 = $resultspcl1->fetch_assoc();
                            $teamIdeasId=$row1["a"]+1;
                        }
                        else
                        {
                            $teamIdeasId=1;
                        }
                        // end of   logic to generate Id

                         $sql1="INSERT INTO team_ideas(teamIdeasId,teamPSCode,teamIdeasCategory,teamId,dateOfCreation,lastModifiedDate) VALUES('$teamIdeasId','$ps2','$cat2','$teamId','$logts','$logts')";  
                         $conn->query($sql1);
                         }


						if(isset($_POST["ps3"]) && $_POST["ps3"]!= null)
						{							

                        $ps3 = $_POST["ps3"]; 
                        $cat3 = $_POST["cat3"]; 
                           //logic to generate Id
                        $sqlspcl1 = "SELECT max(teamIdeasId) as a FROM team_ideas";
                        $resultspcl1 = $conn->query($sqlspcl1);
                        if ($resultspcl1->num_rows > 0)
                        {
                            $row1 = $resultspcl1->fetch_assoc();
                            $teamIdeasId=$row1["a"]+1;
                        }
                        else
                        {
                            $teamIdeasId=1;
                        }
                        // end of   logic to generate Id

                         $sql1="INSERT INTO team_ideas(teamIdeasId,teamPSCode,teamIdeasCategory,teamId,dateOfCreation,lastModifiedDate) VALUES('$teamIdeasId','$ps3','$cat3','$teamId','$logts','$logts')";  
                         $conn->query($sql1);
                         
                         
                         }


                         
                    }
                    else
                    {
                        echo " $sql. " . $conn->error;
                    }

                }
            ?>

	</div>

	</div>
	</div>
	</div>


				<br style="clear: both;" />
			</div>
		</div>


	</div>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
<script>
    // navbar
    // define all UI variable
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
  
</script>
::  <!--<?php include 'footer.php';?> -->