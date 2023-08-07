<?php
session_start();
require "settings.php";
?>
<!DOCTYPE html>
<head lang="en">
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel = "stylesheet" type = "text/css" href = "login.css">      <!-- Stylesheet only for login form -->
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

</head>

<body padding-top: 80px>   <!-- This inline css is for fixed to top type header -->

<div class="container"
 >   <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Student Login <br><font color="red"><?php echo $VendorName; ?></font></h1>
            <div class="account-wall">
                <img class="profile-img" src="<?php echo $HomePage_Logo; ?>" style = "height : 100px ; width : 100px " alt="<?php echo $VendorName; ?>"


                    <h6 class="text-center" style="color: red">
                        <?php

                            if($_GET["status"]!="")
                                echo $_GET["status"];

                        ?>

                    </h6>

                <form class="form-signin" name="loginform" action="resetpassword1.php" method="POST">
                <!-- <input type="email" class="form-control" name="email"  placeholder="Enter Registered Email-Id" required autofocus><br>

                <input type="text" class="form-control" name="mobile" maxlength="10" pattern="[0-9]{10}" placeholder="Enter Registered Mobile no." required><br>
                <button class="btn btn-lg btn-primary btn-block" type="submit" >
                    Send OTP</button> -->
                <!-- <div id="otp" style="display: none"> 
                 -->  
                 <label> New Password </label>
                 <input type="password" class="form-control" name="passwrd"  placeholder="Enter new password" required autofocus><br>

                 <label> OTP on <?php echo $_SESSION["email_id"] ?> </label>
                <input type="text" class="form-control" name="emailOTP"  placeholder="Enter OTP from Email-Id" required autofocus><br>
               <!--  <label> OTP on <?php //echo $_SESSION["mobileno"] ?> </label>
                <input type="text" class="form-control" name="mobileOTP" placeholder="Enter OTP from Mobile no." required><br>
 -->
                <button class="btn btn-lg btn-primary btn-block" type="Submit">
                    Submit</button>
                </div>
                <a href="#" class="pull-right need-help">Not Received? Resend OTP </a><span class="clearfix"></span>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function showOTPDiv() {
   document.getElementById('otp').style.display = "block";
}
</script>
</body>

<?php include 'footer.php';?>
