<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
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
  color: white;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  display: block;
}

.topnav a.icon {
  background: black;
  display: block;
  position: absolute;
  left: 0;
  top: 0;
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
</head>
<body>

<div class="mobile-container">

<div class="topnav">
  <a href="#home" class="active">Leader</a>
  <div id="myLinks"><?php
      $sid = $_GET['sid']; ?>
    <a class="btn btn-default" href="EditMember.php?sid=<?php echo urlencode($sid); ?>">Edit Team members</a>
    <a class="btn btn-default" href="guidelines.php">Edit Bank Details</a>
    <a class="btn btn-default" href="guidelines.php">Update Expenses</a>
  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>


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

</body>
</html>
