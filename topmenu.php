<ul class="nav navbar-nav" style="max-height:5px; padding-bottom: 50px;">
<?php
if($_SESSION['user_dept_id'] == 1)
{
?>
<li class="active"><a href="reports.php">Reports</a></li>
<?php
}
else
{
?>
<li class="active"><a href="reportdept.php">Reports</a></li>
<?php	
}
?>
<li><a href="reportelective.php"> Report (Elective) </a></li>
<li><a href="listregstudent.php"> Registered Student</a></li>
</ul>
