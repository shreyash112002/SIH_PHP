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



</head>
<body>

	<div class="container-fluid col-md-12" >
		<div class="row">

			<?php include 'notices.php';?>
			<?php include 'sidebar.php';?>
			
            <?php require 'connect.php';?>

<style>
.square {
    float:left;
    position: relative;
		width:25%;
    height:25%;
		margin:1.66%;
    background-color:#DCDCDC;
    overflow:hidden;
}

.content {
    position:absolute;
    height:90%; /* = 100% - 2*5% padding */
    width:90%; /* = 100% - 2*5% padding */
    padding: 5%;
		font-weight:200;
    font-size:25px;
}
.table{
    display:table;
    width:100%;
    height:100%;
}
.table-cell{
		text-align: center;
    display:table-cell;
    vertical-align:middle;
}

.label_mod{
	font-weight:200;
	font-size:25px;

}
</style>

<div class="col-md-10">
<div class="col-md-12">
<div class="panel panel-default ">
<div class="panel-heading">  <p class="font-weight-italic">Control Panel</p></div>
<div class="panel-body">

<?php 
if(isset($_SESSION['user_role_id']) && $_SESSION['user_role_id'] == 2)
{
?>

<div class="col-md-4">
<div class="panel panel-info">
<div class="panel-heading"># Student (Dept-wise)</div>
<div class="panel-body"> 

<?php
$cnt=0;
$sql = "SELECT dm.dept_name as dname, count(sd.isInstSubmitted) as instcount FROM student_detail sd, dept_master dm where sd.isInstSubmitted=1  and sd.sd_sem = 8 and sd.sd_dept=dm.dept_id  GROUP by sd.sd_dept asc";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
while($row = $result->fetch_assoc())
{
  $cnt+=$row['instcount'];
  echo $row['dname']." -- <span class='badge'>".$row['instcount']."</span> <hr>";
}

echo "<strong> Total : $cnt </strong>";
}
else
{
echo "No  details..";
}

?>

</div>
</div>
</div>

<style>
.panel-body1 {
height: 425px;

}
</style>

<div class="col-md-4">
<div class="panel panel-info">
<div class="panel-heading"># Student with First choice (Elective-wise)</div>
<div class="panel-body1">
<?php
$cnt=0;
$sql = "select em.elect_name as electname, count(se.sd_id) as electcount from student_elective se, elective_master em WHERE se.choice=1 and se.elect_id =em.elect_id and em.dept_id=1 GROUP by se.elect_id";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
while($row = $result->fetch_assoc())
{
   $cnt+=$row['electcount'];
echo $row['electname']." -- <span class='badge'>".$row['electcount']."</span> <hr/>";
}
echo "<strong> Total : $cnt </strong>";
}
else
{
echo "No  details..";
}

?>
</div>
</div>
</div>

<?php
}

?>



<?php 
if(isset($_SESSION['user_role_id']) && $_SESSION['user_role_id'] == 3 && $_SESSION['user_dept_id'] == 2)
{
?>



<div class="col-md-4">
<div class="panel panel-info">
<div class="panel-heading">SEM 6 : # Student (Departement Elective)</div>
<div class="panel-body">
<?php
$cnt=0;

$sql = "select em.elect_name as electname, count(se.sd_id) as electcount from student_elective se, elective_master em WHERE se.choice=1 and se.elect_id =em.elect_id and em.dept_id='".$_SESSION['user_dept_id']."' and elect_sem ='6'  GROUP by se.elect_id";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
while($row = $result->fetch_assoc())
{
  $cnt+=$row['electcount'];
echo $row['electname']." -- <span class='badge'>".$row['electcount']."</span> <hr>";
}

echo "<strong> Total : $cnt </strong>";
}
else
{
echo "No  details..";
}

?>
</div>
</div>
</div>




<div class="col-md-6">
<div class="panel panel-info">
<div class="panel-heading">SEM 8 : # Student (Departement Elective)</div>
<div class="panel-body">


<?php

$cnt=0;
$datastring="[['Electives','No of Students'],";
$sql = "select em.elect_name as electname, count(se.sd_id) as electcount from student_elective se, elective_master em WHERE se.choice=1 and se.elect_id =em.elect_id and em.dept_id='".$_SESSION['user_dept_id']."' and elect_sem ='8' GROUP by se.elect_id";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
while($row = $result->fetch_assoc())
{
$cnt+=$row['electcount'];
echo $row['electname']." -- <span class='badge'>".$row['electcount']."</span> <hr>";
$datastring.="['".$row['electname']."',".$row['electcount']."],";
}
$datastring=rtrim($datastring, ',');
$datastring.="]";
echo "<strong> Total : $cnt </strong>";
}
else
{
echo "No  details..";
}

?>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable(<?php echo $datastring ?>);

        var options = {
          title: 'SEM 8 (Departement Elective)',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
<div id="piechart_3d" style="width: 80%; height: 300px;"></div>

</div>
</div>
</div>

  
  
<div class="col-md-6">
<div class="panel panel-info">
<div class="panel-heading">SEM 8 : # Student (Institute Elective) </div>
<div class="panel-body">
<?php
$cnt=0;
//$sql = "select em.elect_name as electname, count(se.sd_id) as electcount from student_elective se, elective_master em WHERE se.choice=1 and se.elect_id =em.elect_id and em.dept_id='1' and em.elect_sem ='8'  GROUP by se.elect_id";
  
  $dataPoints = array();
  

  $sql = "select em.elect_name as electname, count(se.sd_id) as electcount from student_elective se, elective_master em, student_detail sd WHERE se.choice=1 and se.elect_id =em.elect_id and em.dept_id='1' and em.elect_sem ='8' and se.sd_id=sd.sd_id and sd.sd_dept='".$_SESSION['user_dept_id']."'  GROUP by se.elect_id";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
while($row = $result->fetch_assoc())
{
  $cnt+=$row['electcount'];
  echo $row['electname']." -- <span class='badge'>".$row['electcount']."</span> <hr>";
  array_push($dataPoints, array("label"=>"".$row['electname'], "y"=>"".$row['electcount']));
}

echo "<strong> Total : $cnt </strong>";
}
else
{
echo "No  details..";
}

?>


<script>
window.onload = function() {
 
 var today = new Date();
var dd = today.getDate();

var mm = today.getMonth()+1; 
var yyyy = today.getFullYear();

var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  title: {
    text: "SEM 8 (Institute Elective)"
  },
  subtitles: [{
    text: dd+"/"+mm+"/"+yyyy
  }],
  data: [{
    type: "pie",
    yValueFormatString: "#,##\"%\"",
    indexLabel: "{label} ({y})",
    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
  }]
});
chart.render();
 
}
</script>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</div>
</div>
</div>  

<?php
}

?>

</div>
</div>
</div>


		

<br style="clear: both;" />
</div>
</div>
</div>

</body>
<?php include 'footer.php';?>
