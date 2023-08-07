<?php include 'header.php';?>

<!DOCTYPE html>

<head lang="en">
	<title>Elective</title>
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
<?php include 'sidebar1.php';?>
<?php require 'connect.php';?>


<div class="col-md-10">
<?php
if($_SESSION["sem_id"] == 7 || $_SESSION["sem_id"] == 8)
{
?>
<div class="col-md-6">

<div class="panel panel-success ">
<div class="panel-heading"> <strong> <p class="text-center">Important Instructions for Institue Level Elective <br> <a href="asset/Institute_2016.pdf" target="_blank"> Syllabus </a></p> </strong></div>
<div class="panel-body">

<ol> 
<li> Kindly, fill up the choice of elective subjects based on your order of preference by <strong> November 15, 2019 </strong>.</li> 
<li> After due date, the elective subject will be allocated by the Institute and no claim whatsoever will be entertained.</li> 
<li> If you wish to change preferences before submitting, refresh the page or login again. Preferences once submitted cannot be changed.
</li> 
<li> In case of difficulty, contact Dr. Satishkumar Chavan (Dean - Academics).</li> 
</ol>
<hr>
<table class="table table-responsive table-bordered table-hover" border>
    <thead>
      <tr>
        <th>Subject </th>
        <th>Faculty</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Project Management</td>
        <td>Sandeep Sabnis</td>
        
      </tr>
      <tr>
        <td>Finance Management</td>
        <td>Yet to be decided</td>
      </tr>
      <tr>
        <td>Entrepreneurship Development and Management</td>
        <td>Yet to be decided</td> 
      </tr>
      <tr>
        <td>Research Methodology</td>
        <td>Dr. Amiya/Dr. Mande</td> 
      </tr>
      <tr>
        <td>IPR and Patenting</td>
        <td>Dr. Vinod</td> 
      </tr>
      <tr>
        <td>Environment Management</td>
        <td>Ms. Kartiki</td> 
      </tr>
    </tbody>
  </table>
</div>
</div>
</div>
<?php
}
  if($_SESSION["dept_id"] == 2)
{
?>

<div class="col-md-6">

<div class="panel panel-success ">
<div class="panel-heading"> <strong> <p class="text-center">Important Instructions for Department Level Elective <br> 
	<?php 
if($_SESSION["sem_id"] == 8)
{
	?>
	<a href="asset/BEIT_2016.pdf" target="_blank"> Syllabus </a>
<?php
}
if($_SESSION["sem_id"] == 6)
{
?>

<a href="asset/TEIT_2016.pdf" target="_blank"> Syllabus </a>
<?php
}
?>
</p></strong></div>
<div class="panel-body">

<ol> 
<li> Kindly, fill up the choice of elective subject based on your interest by <strong> October 25, 2019 </strong>. </li> 
<li> After due date, the elective subject will be allocated by the Department and no claim whatsoever will be entertained.</li> 
<li> If you wish to change preferences before submitting, refresh the page or login again. Preferences once submitted cannot be changed.
</li> 
<li> Elective will be offered subject to minimum batch of 20 students. </li> 
<li> In case of difficulty, contact Head of Department.</li> 

</div>
</div>
</div>

<?php
}
?>  

<br style="clear: both;" />
</div>
</div>


</div>

</body>
