<?php include 'header.php';?>

<!DOCTYPE html>

<head lang="en">
  <title>Elective</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel = "stylesheet" type = "text/css" href = "loginform.css">    <!-- Stylesheet only for login form -->
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

    <script src="bootbox.min.js"></script>
</head>


<body>

<div class="container-fluid col-md-12" >
<div class="row">

<?php include 'notices.php';?>
<?php include 'sidebar1.php';?>
<?php require 'connect.php';?>
<?php require 'util.php';?>

<script type="text/javascript">
  
$(document).ready(function(){

    // $("#id_dept").change(function(){
    //     var deptid = $(this).val();
    //     var semid = $(this).attr("semid");
    //     //alert(deptid);
    //     //alert(semid);
    //     $.ajax({
    //         url: 'getallelectives.php',
    //         type: 'post',
    //         data: {deptid:deptid,semid:semid},
    //         dataType: 'json',
    //         success:function(response){

    //             var len = response.length;
    //            // alert(response);
    //             $("#id_elect1").empty();
    //             $("#id_elect1").append("<option value='notallowed' disabled selected='selected'>Select an option </option>");
    //             for( var i = 0; i<len; i++){
    //                 var id = response[i]['id'];
    //                 var name = response[i]['name'];
                      
    //                 $("#id_elect1").append("<option value='"+id+"'>"+name+"</option>");

    //             }
    //         }
    //     });
    // });

    $("#id_elect1").change(function(){
        var electid = $(this).val();
       //var semid = $(this).attr("semid");
        //alert(deptid);
        //alert(semid);
        $.ajax({
            url: 'getelectives.php',
            type: 'post',
            data: {electid:electid,ch:1},
            dataType: 'json',
            success:function(response){

                var len = response.length;
                //alert(response);
                $("#id_elect2").empty();
                 $("#id_elect2").append("<option value='notallowed' disabled selected='selected'>Select an option </option>");
                for( var i = 0; i<len; i++){
                    var id = response[i]['id'];
                    var name = response[i]['name'];
                    
                    $("#id_elect2").append("<option value='"+id+"'>"+name+"</option>");

                }
            }
        });
    });



    $("#id_elect2").change(function(){
        var electid = $(this).val();
       //var semid = $(this).attr("semid");
        //alert(deptid);
        //alert(semid);
        $.ajax({
            url: 'getelectives.php',
            type: 'post',
            data: {electid:electid,ch:2},
            dataType: 'json',
            success:function(response){

                var len = response.length;
                //alert(response);
                $("#id_elect3").empty();
                 $("#id_elect3").append("<option value='notallowed' disabled selected='selected'>Select an option </option>");
                for( var i = 0; i<len; i++){
                    var id = response[i]['id'];
                    var name = response[i]['name'];
                    
                    $("#id_elect3").append("<option value='"+id+"'>"+name+"</option>");

                }
            }
        });
    });


    $("#id_elect3").change(function(){
        var electid = $(this).val();
       //var semid = $(this).attr("semid");
        //alert(deptid);
        //alert(semid);
        $.ajax({
            url: 'getelectives.php',
            type: 'post',
            data: {electid:electid,ch:3},
            dataType: 'json',
            success:function(response){

                var len = response.length;
                //alert(response);
                $("#id_elect4").empty();
                 $("#id_elect4").append("<option value='notallowed' disabled selected='selected'>Select an option </option>");
                for( var i = 0; i<len; i++){
                    var id = response[i]['id'];
                    var name = response[i]['name'];
                    
                    $("#id_elect4").append("<option value='"+id+"'>"+name+"</option>");

                }
            }
        });
    });


    $("#id_elect4").change(function(){
        var electid = $(this).val();
       //var semid = $(this).attr("semid");
        //alert(deptid);
        //alert(semid);
        $.ajax({
            url: 'getelectives.php',
            type: 'post',
            data: {electid:electid,ch:4},
            dataType: 'json',
            success:function(response){

                var len = response.length;
              // alert(response);
                $("#id_elect5").empty();
                 $("#id_elect5").append("<option value='notallowed' disabled selected='selected'>Select an option </option>");
                for( var i = 0; i<len; i++){
                    var id = response[i]['id'];
                    var name = response[i]['name'];
                    
                    $("#id_elect5").append("<option value='"+id+"'>"+name+"</option>");

                }
            }
        });
    });

    $("#id_elect5").change(function(){
        var electid = $(this).val();
       //var semid = $(this).attr("semid");
        //alert(deptid);
        //alert(semid);
        $.ajax({
            url: 'getelectives.php',
            type: 'post',
            data: {electid:electid,ch:5},
            dataType: 'json',
            success:function(response){

                var len = response.length;
              // alert(response);
                $("#id_elect6").empty();
                 $("#id_elect6").append("<option value='notallowed' disabled selected='selected'>Select an option </option>");
                for( var i = 0; i<len; i++){
                    var id = response[i]['id'];
                    var name = response[i]['name'];
                    
                    $("#id_elect6").append("<option value='"+id+"'>"+name+"</option>");

                }
            }
        });
    });

});

</script>


<?php 



  $sd_id=$_SESSION["std_id"]; 
  
  $stmt = $conn->prepare("SELECT sd_dept,sd_sem,sd_roll,sd_email,sd_contact,isDisabled FROM student_detail where sd_id=? and isDelete=0 ");
  $stmt->bind_param("s", $sd_id);
  $stmt->execute();
  $result = $stmt->get_result();

if ($result->num_rows > 0)
{
    $row = $result->fetch_assoc();

    if(!$row["isDisabled"])
    {



?>

<?php //echo $row['sd_sem'] ?>
<div class="col-md-10">
<div class="col-md-6">

<div class="panel panel-success ">
<div class="panel-heading"> <strong> <p class="text-center">Select Elective </p></strong></div>
<div class="panel-body">

<form  class="form-horizontal" method="post" enctype="" >
<?php
$dept_id =$row['sd_dept'];
$_SESSION["dept_id"]=$dept_id;
$_SESSION["sem_id"]=$row['sd_sem'];
$_SESSION["selected_elect"]=array(0,0,0,0,0,0);

    

?>
<!--
<div id="div_id_sem" class="form-group required">
<label for="id_sem" class="control-label col-md-4  requiredField">Sem<span class="asteriskField">*</span> </label>
<div class="controls col-md-6 ">
  <select class="input-md select form-control" required id="id_sem" name="sem" style="margin-bottom: 10px" >
      <option value="notallowed" disabled selected="selected">Select an option </option>
      <option value="7" disabled >7 </option>
      <option value="8" >8 </option>
       <?php
        // if($row['sd_sem']==7 || $row['sd_sem']==8 )
        //   echo "<option value='1' >Institute</option>";
        
        // $mysqlquery="SELECT dept_id,dept_name FROM dept_master WHERE dept_id='".$row['sd_dept']."' and isDelete=0 and isDisabled=0";
        // $mysqlresult=$conn->query($mysqlquery);
        // $myrow = $mysqlresult->fetch_assoc();
        // echo "<option value='".$myrow['dept_id']."' >".$myrow['dept_name']."</option>";

       
     ?> 
  </select>
</div>
</div>
-->

<div id="div_id_elect1" class="form-group required">
<label for="id_elect1" class="control-label col-md-4  requiredField">Choice 1<span class="asteriskField">*</span> </label>
<div class="controls col-md-6 ">
  <select class="input-md select form-control" required id="id_elect1" name="elect1" style="margin-bottom: 10px" >
      <option value="notallowed" disabled selected="selected">Select an option </option>
      
       <?php
       
        // $mysqlquery="SELECT dept_id,dept_name FROM dept_master WHERE dept_id='".$row['sd_dept']."' and isDelete=0 and isDisabled=0";
        // $mysqlresult=$conn->query($mysqlquery);
        // $myrow = $mysqlresult->fetch_assoc();

         $query = "SELECT elect_id,elect_shortcode,elect_name FROM elective_master WHERE dept_id='".$dept_id."' and elect_sem='".$row['sd_sem']."' and isDelete=0 and isDisabled=0";
     
      $resultquery = $conn->query($query);
      while( $rowqeury = mysqli_fetch_array($resultquery) ){
          $elect_id = $rowqeury['elect_id'];
          $elect_name = $rowqeury['elect_name'];

         echo "<option value='".$rowqeury['elect_id']."' >".$rowqeury['elect_name']."</option>";
      }
       

       
     ?> 
    
    </select>
</div>
</div>

<div id="div_id_elect2" class="form-group required">
<label for="id_elect2" class="control-label col-md-4  requiredField">Choice 2<span class="asteriskField">*</span> </label>
<div class="controls col-md-6 ">
  <select class="input-md select form-control" required id="id_elect2" name="elect2" style="margin-bottom: 10px" >
     
    </select>
</div>
</div>


<div id="div_id_elect3" class="form-group required">
<label for="id_elect3" class="control-label col-md-4  requiredField">Choice 3<span class="asteriskField">*</span> </label>
<div class="controls col-md-6 ">
  <select class="input-md select form-control" required id="id_elect3" name="elect3" style="margin-bottom: 10px" >
     
    </select>
</div>
</div>

<div id="div_id_elect4" class="form-group required">
<label for="id_elect4" class="control-label col-md-4  requiredField">Choice 4<span class="asteriskField">*</span> </label>
<div class="controls col-md-6 ">
  <select class="input-md select form-control" required id="id_elect4" name="elect4" style="margin-bottom: 10px" >
     
    </select>
</div>
</div>

<div id="div_id_elect5" class="form-group required">
<label for="id_elect5" class="control-label col-md-4  requiredField">Choice 5<span class="asteriskField">*</span> </label>
<div class="controls col-md-6 ">
  <select class="input-md select form-control" required id="id_elect5" name="elect5" style="margin-bottom: 10px" >
     
    </select>
</div>
</div>

<div id="div_id_elect6" class="form-group required">
<label for="id_elect6" class="control-label col-md-4  requiredField">Choice 6<span class="asteriskField">*</span> </label>
<div class="controls col-md-6 ">
  <select class="input-md select form-control" required id="id_elect6" name="elect6" style="margin-bottom: 10px" >
     
    </select>
</div>
</div>

<div class="form-group">
<div class="aab controls col-md-6 "></div>
<div class="controls col-md-6 ">
<input type="submit" name="nsubmit" value="Submit" class="btn btn-primary btn btn-info " id="id-submit" onclick="return confirm('Are you sure?')" />
</div>
</div>
</form>


</div>
</div>
</div>
<?php
if(isset($_POST['nsubmit']))
{



$elective_arr=array();

array_push($elective_arr, $_POST["elect1"]);
array_push($elective_arr, $_POST["elect2"]);
array_push($elective_arr, $_POST["elect3"]);
array_push($elective_arr, $_POST["elect4"]);
array_push($elective_arr, $_POST["elect5"]);
array_push($elective_arr, $_POST["elect6"]);

//// $elect1=$_POST["elect1"];
// $elect2=$_POST["elect2"];
// $elect3=$_POST["elect3"];
// $elect4=$_POST["elect4"];
// $elect5=$_POST["elect5"];
// $elect6=$_POST["elect6"];

foreach ($elective_arr as $key => $value){

  // logic to generate Id
$sqlspcl1 = "SELECT max(se_id) as a FROM student_elective";
$resultspcl1 = $conn->query($sqlspcl1);
if ($resultspcl1->num_rows > 0)
{
$row1 = $resultspcl1->fetch_assoc();
$se_id=$row1["a"]+1;
}
else
{
$se_id=1;
}

  $sql1="INSERT INTO student_elective(se_id,elect_id,choice,sd_id,dateOfCreation,dateOfDeletion) VALUES('".$se_id."','".$value."','".($key+1)."','".$sd_id."','".$logts."','".$logts."')";
 // echo $se_id;
  $conn->query($sql1);

  $sql2="Update student_detail set isDisabled=1 where sd_id = '".$sd_id."'";
 // echo $se_id;
  $conn->query($sql2);


} 
  echo "<br>Elective Recorded added successfully";
  
        header('Location: instelective.php');
        ob_end_flush();
        exit();


}
?>


<?php

}
else
{
?>

<div class="col-md-6">
<div class="panel panel-warning">
<div class="panel-heading">  <strong> <p class="text-center "> Warning !!! </p> </strong></div>
<div class="panel-body">
<div id="div_id_elect6" class="form-group required">
<label for="id_elect6" class="control-label col-md-10">You have already submitted your choice </label>
</div>
</div>
</div>
</div>

<?php
}


}


?>






<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-heading">  <strong> <p class="text-center ">Your Choice for Electives </p> </strong></div>
<div class="panel-body">

<table id="video_table" class="table table-bordred table-striped ">
       <tbody>
        <tr>
          <td>
            Sr. No.
          </td>
          <td>
            Elective
          </td>
          
        </tr>
         <?php


                $sql3="SELECT em.elect_name as elect_name FROM student_elective se,elective_master em where em.elect_id=se.elect_id and se.sd_id='".$sd_id."' and se.isDelete = 0 ORDER BY se.choice ASC";
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
                <?php echo $row["elect_name"] ?>
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
$('.btn-confirm').click(function(e)
{

  e.preventDefault();
    //var pid = $(this).attr("id");
    //  alert(pid);
    //var parent = $(this).parent("td").parent("tr");
  //bootbox.alert('Error....');
  bootbox.dialog(
  {
  message: "<div class='alert alert-danger'><span class='glyphicon glyphicon-warning-sign'></span> Are you sure you want to save ? </div>",
  title: "<i class='glyphicon glyphicon glyphicon-save'></i> Save ? ",
  buttons:
  {
    danger:
    {
      label: "No",
      className: "btn-danger",
      callback: function()
      {
        $('.bootbox').modal('hide');
      }
    },

    success:
    {
      label: "Save",
      className: "btn-success",
      callback: function()
      {
        $("#id-submit").attr("disabled", true);
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