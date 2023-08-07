// This file is used to search the user in the system before allowing the user to reset password

<?php
    require '../connect.php';

     if (isset($_POST['submit'])) {

			$condition = "";

			if(!empty($_POST["user-login-name"])){

                $condition = " username = '" . $_POST["user-login-name"] . "'";
                if(!empty($condition)) {
                    $condition = " where " . $condition;
                }
                $sql = "Select * from usercredential " . $condition;
                $result = mysqli_query($conn,$sql);
                $user = mysqli_fetch_array($result);
                if(!empty($user)) {
                    require_once("forgot-password-recovery-mail.php");
                } else {
                    $error_message = 'No User Found';
                }
            }

			if(!empty($_POST["user-email"])) {
            	$condition = " where email1 = '" . $_POST["user-email"] . "'";
                $sql = "Select * from userdetail  " . $condition;
    			$result = mysqli_query($conn,$sql);
    			$user = mysqli_fetch_array($result);
    			if(!empty($user)) {
    				require_once("forgot-password-recovery-mail.php");
    			} else {
    				$error_message = 'No User Found';
    			}
			}

	 }
?>

<script>
function validate_forgot() {
	if((document.getElementById("user-login-name").value == "") && (document.getElementById("user-email").value == "")) {
		document.getElementById("validation-message").innerHTML = "Login name or Email is required!"
		return false;
	}
	return true
}
</script>

<!DOCTYPE html>
<head lang="en">
    <title>Request Password Reset</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel = "stylesheet" type = "text/css" href = "../login.css">      <!-- Stylesheet only for login form -->
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

</head>

<body padding-top: 80px>   <!-- This inline css is for fixed to top type header -->

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Please enter your details to recover password</h1>
            <div class="account-wall">
                <img class="profile-img" src="../images/writcelllogo.png" alt="Writ cell logo">

                    <?php if(!empty($success_message)) { ?>
                    <div class="success_message"><?php echo $success_message; ?></div>
                    <?php } ?>

                    <div id="validation-message">
                        <?php if(!empty($error_message)) { ?>
                    <?php echo $error_message; ?>
                    <?php } ?>
                    </div>

                <form class="form-signin" name="resetpassword" action="" method="POST" onSubmit="return validate_forgot();" >
                <input type="text" class="form-control" name="user-login-name" id="user-login-name" placeholder="Username" autofocus><br>
                <h4 class="text-center">Or</h4>
                <input type="text" class="form-control" name="user-email" placeholder="Email">
                <br>
                <button class="btn btn-lg btn-primary btn-block" type="submit" id="forgot-password" name="submit" value="Submit" >
                    Reset Password </button>
                </form>

            </div>
            <br><br> <br><br> <br><br>

        </div>
    </div>
</div>

</body>

<?php include '../footer.php';?>
