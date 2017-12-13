<?php 
/* Reset your password form, sends reset.php password link */
require 'db.php';
session_start();

// Check if form submitted with method="post"
if ( $_SERVER['REQUEST_METHOD'] == 'POST' )  //pverwrites password
{   
    $email = $mysqli->escape_string($_POST['email']);
    $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");  //finds if user's email exists

    if ( $result->num_rows == 0 ) // user doesn't exist
    { 
        $_SESSION['message'] = "User with that email doesn't exist!";
        header("location: error.php");
    }
    else { // User exists (num_rows != 0)

        $user = $result->fetch_assoc(); // $user becomes array with user data
        
        $email = $user['email'];
        $hash = $user['hash'];
        $first_name = $user['first_name'];

        // Session message to display on success.php
        $_SESSION['message'] = "<p>Please check your email <span>$email</span>"
        . " for a confirmation link to complete your password reset!</p>";

        // Send registration confirmation link (reset.php)
        $to      = $email;
        $subject = 'Password Reset Link ( scratchboard.co )';
        $message_body = '
        Hello '.$first_name.',

        You have requested password reset!

        Please click this link to reset your password:

        http://scratchboard.co/login-system/reset.php?email='.$email.'&hash='.$hash;  

        mail($to, $subject, $message_body);

        header("location: success.php");
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Reset Your Password</title>
    <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/scratchboard.css" rel="stylesheet">

  <!--Font Amazing link-->
   <!--Font Amazing link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <?php include 'css/css.html'; ?>
</head>

<body>
 <div id="login-wrapper">
    <div class="login-panel panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Reset Your Password</</h3>
      </div>
      <div class="panel-body"> 

    <form action="forgot.php" method="post">
     <div class="field-wrap">
	 <br>
      <label>Email Address<span class="req">*</span>
      </label>
      <input type="email"required autocomplete="off" input class="form-control" name="email"/>
    </div>
	<p class="cancel"><a href="index.php">Cancel</a></p>
	<br>
    <button class="btn btn-lg btn-success btn-block"/>Reset</button>
    </form>
	
</div>
</div>
</div>
          
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>
</body>

</html>
