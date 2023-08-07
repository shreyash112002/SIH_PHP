<?php
ob_start();
session_start();


require "connect.php";



$u=$_POST["user"];
$p=$_POST["pass"];


//echo $u;
//echo "<br>";
//echo $p;
//echo "<br>";


$sql = "SELECT  emp_fname, emp_lname, emp_mobile, emp_pwd, role_id,dept_id FROM employee_detail where emp_mobile='".$u."'";
$result = $conn->query($sql);


//echo "<br>";
//echo "Rows=".$result->num_rows;

if ($result->num_rows > 0)
{
        $row = $result->fetch_assoc();
    // output data of each row
    //	echo "Rows new=".$result1->num_rows;

	    	if($row["emp_pwd"]==$p)
        	{
            //echo "pwd matches";
            //echo "<h1> ".$row["password"]."==".$p."</h1>";
                $id=session_id();
                $_SESSION["sdcid"] = $id;
        		$_SESSION["userId"] = $row["emp_mobile"];
        		$_SESSION["user_role_id"] = $row["role_id"];
                $_SESSION["user_dept_id"] = $row["dept_id"];
                $_SESSION["userName"] = $row["emp_fname"]." ".$row["emp_lname"];
        		$_SESSION["logged_in"] = 1;


                //echo "<h1> something: ".$_SESSION["logged_in"]."</h1>";
        		header('Location: dashboard.php');
                ob_end_flush();
        		exit();

			//echo "<h1> GP User Id:".$_SESSION["userId"]." & UserRole:".$_SESSION["roleId"]."</h1>";
        	}
    		else
    		{
                //echo "invalid pwd";
        		 header("Location: lgn.php?status=Invalid Username or Password");
                 ob_end_flush();
			}

}
else
{
  //  echo "0  records";
   header("Location: lgn.php?status=Invalid Username or Password");
   ob_end_flush();
}
$conn->close();


?>
