<?php

session_start();

if(!isset($_SESSION['sdcid'])){
   header("Location:index.php");
}

session_destroy();

header("Location: index.php");
exit();
?>