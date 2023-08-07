// Logic to reset the actual password of te user who has actual account
// This page is open only when user clicks the link sent to him in his email id found in our DB
// Need to change the password to store and retrive in the md5 hash

<?php

	require '../connect.php';

	if(isset($_POST["reset-password"])) {

		$name = $_GET["name"];

		//echo "This is what we get in name : ".$name;

		//$name = substr($name, 1);  //to remove first $

		$sql = "SELECT * FROM tokendetail where token = '$".$_GET["name"]."'";

		//echo "This is what we searched ".$sql;

		$result = mysqli_query($conn,$sql);
		$row1 = mysqli_fetch_array($result);
		$username = $row1["username"];

		//echo "This is what we get from db".$row1["username"];

		//$sql = "UPDATE `blog_samples`.`members` SET `member_password` = '" . md5($_POST["member_password"]). "' WHERE `members`.`member_name` = '" . $_GET["name"] . "'";

		//$password = $_POST["user_password"];

		$sql1 = "UPDATE usercredential SET password = '". $_POST["user_password"] . "' WHERE username = '".$username."'";

		//echo $sql1;

		$result = mysqli_query($conn,$sql1);

		$success_message = "Password is reset successfully.";

	}
?>

<script>
function validate_password_reset() {
	if((document.getElementById("user_password").value == "") && (document.getElementById("confirm_password").value == "")) {
		document.getElementById("validation-message").innerHTML = "Please enter new password!"
		return false;
	}
	if(document.getElementById("user_password").value  != document.getElementById("confirm_password").value) {
		document.getElementById("validation-message").innerHTML = "Both password should be same!"
		return false;
	}

	return true;
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
            <h1 class="text-center login-title">Please Enter New password</h1>
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

                <form class="form-Reset" name="frmReset" id = "frmReset" method="post" onSubmit="return validate_password_reset();" >
                <input type="password" class="form-control" name="user_password" id="user_password" placeholder="New Password" autofocus><br>
				<input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="New Password" autofocus><br>
                <br>
                <button class="btn btn-lg btn-primary btn-block" type="submit" id="reset-password" name="reset-password" name="submit" value="Submit" >
                    Reset Password </button>
                </form>
            </div>
            <br><br> <br><br> <br><br>
        </div>
    </div>
</div>
</body>

<?php include '../footer.php';?>
