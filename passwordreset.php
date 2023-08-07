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
            <h1 class="text-center login-title">Sign in to continue to <br><font color="red"><?php echo $VendorName; ?></font></h1>
            <div class="account-wall">
                <img class="profile-img" src="<?php echo $HomePage_Logo; ?>" style = "height : 100px ; width : 100px " alt="<?php echo $VendorName; ?>"


                    <h6 class="text-center" style="color: red">
                        <?php

                            if($_GET["status"]!="")
                                echo $_GET["status"];

                        ?>

                    </h6>

                <form class="form-signin" name="loginform" action="resetpassword.php" method="POST">
                <input type="text" class="form-control" name="user" placeholder="Username" required autofocus><br>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button>

                <span class="clearfix"></span>
                </form>
            </div>
        </div>
    </div>
</div>

</body>

<?php include 'footer.php';?>
