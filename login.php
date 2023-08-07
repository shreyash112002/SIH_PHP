<?php include 'header.php';?>

<!DOCTYPE html>
<head lang="en">
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<style>
form{
    height: 520px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 60%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
    z-index: -1;

}
form *{
    font-family: 'Poppins',sans-serif;
    color: 275f94;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: grey;
}
button{
    
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}




   </style>

<body>
  

    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="post">
        <h3>User Login</h3>

        <label for="uid"></label>
        <!--<input type="text" placeholder="User ID" id="uid" name="uid">-->
        <input type="text" placeholder="User ID" id="uid" name="uid" style="border: 1px solid black;">

        

        <label for="pwd"></label>
        <input type="password" placeholder="Password" id="pwd" name="pwd" style="border: 1px solid black;">
        <br><br>
        
        <div class="controls col-md-8 ">
<input type="submit" name="submit" value="Submit" class="btn btn-primary btn btn-info" id="submit-id-submit" style="background-color: #007bff; color: #fff; border-color: #007bff; border-radius: 5px; padding: 10px 20px; font-size: 16px; font-weight: bold; cursor: pointer;">
            </div>
        

</form>

<?php require 'connect.php';?>

        
 <?php
 

                        if(isset($_POST['submit']))
{
                  $uid=$_POST["uid"];
                  $pwd=$_POST["pwd"];
                //   $judgelist=$_POST["judgelist"];
                
                        $sql="SELECT * FROM `user_login_details` WHERE uid='$uid' AND pwd='$pwd' AND uld_role=1";
                        $result = mysqli_query($conn, $sql);  
                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                        $count = mysqli_num_rows($result);  
                  
                        if($count == 1){  
                            ?>
                            <script>window.location = "judge1.php";</script>
                            <?php
                            
                        }  
                        
                        else{
                            $sql="SELECT * FROM `user_login_details` WHERE uid='$uid' AND pwd='$pwd' AND uld_role=2 ";
                            //   $conn->query($sql);
                            $result = mysqli_query($conn, $sql);  
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count1 = mysqli_num_rows($result);  
                      
                            if($count1 == 1){  
                                ?>
                            <script>window.location = "judge2.php";</script>
                            <?php
                            }  
                            else{
                                
                          $sql="SELECT * FROM `user_login_details` WHERE uid='$uid' AND pwd='$pwd' AND uld_role=3";
                            //   $conn->query($sql);
                            $result = mysqli_query($conn, $sql);  
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count2 = mysqli_num_rows($result);  
                      
                            if($count2 == 1){  
                                ?>
                            <script>window.location = "judge3.php";</script>
                            <?php
                            }  
                            else{
                                
                                $sql="SELECT * FROM `user_login_details` WHERE uid='$uid' AND pwd='$pwd' AND uld_role=5";
                            //   $conn->query($sql);
                            $result = mysqli_query($conn, $sql);  
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count2 = mysqli_num_rows($result);  
                      
                            if($count2 == 1){  
                                ?>
                            <script>window.location = "settings.php";</script>
                            <?php
                            }  
                            
                            else{
                                
                          $sql="SELECT * FROM `user_login_details` WHERE uid='$uid' AND pwd='$pwd' AND uld_role=4";
                            //   $conn->query($sql);
                            $result = mysqli_query($conn, $sql);  
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count3 = mysqli_num_rows($result);  
                      
                            if($count3 == 1){ 
                                ?>
                                <script>window.location = "EditMember.php?sid=<?php echo urlencode($uid); ?>";</script>
                                <?php

                            }  
                            else{
                                header("location: login.php");
                            }
                        }
                            }
                            }
                        }
                        
                        }
                         
                
            ?>

</body>
<script>
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


<!--/*.social{*/-->
<!--/*  margin-top: 30px;*/-->
<!--/*  display: flex;*/-->
<!--/*}*/-->
<!--/*.social div{*/-->
<!--/*  background: red;*/-->
<!--/*  width: 150px;*/-->
<!--/*  border-radius: 3px;*/-->
<!--/*  padding: 5px 10px 10px 5px;*/-->
<!--/*  background-color: rgba(255,255,255,0.27);*/-->
<!--/*  color: eaf0fb;*/-->
<!--/*  text-align: center;*/-->
<!--/*}*/-->
<!--/*.social div:hover{*/-->
<!--/*  background-color: rgba(255,255,255,0.47);*/-->
<!--/*}*/-->
<!--/*.social .fb{*/-->
<!--/*  margin-left: 25px;*/-->
<!--/*}*/-->
<!--/*.social i{*/-->
<!--/*  margin-right: 4px;*/-->
<!--/*}*/-->

