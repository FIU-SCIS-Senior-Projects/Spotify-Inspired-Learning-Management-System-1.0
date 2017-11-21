<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <title>ScratchBoard - Login Form</title>
  
  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/sb-admin.css" rel="stylesheet">

  <!--Font Amazing link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <?php include 'css/css.html'; ?>
</head>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { //user logging in

        require 'login.php';
        
    }
}
?>
<body>

  <div id="login-wrapper">
    <div class="login-panel panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Please Sign In</h3>
      </div>
      <div class="panel-body">

  <div class="form">      
         <div id="login">             
          <form action="index.php" method="post" autocomplete="off">
            <div class="field-wrap">
            <label>Email Address<span class="req">*</span></label>
            <input type="email" input class="form-control" placeholder="example@gmail.com" required autocomplete="off" name="email"/>
          </div>
          <br>
          <div class="field-wrap">
            <label>Password<span class="req">*</span></label>
            <input type="password" input class="form-control" placeholder="Password" required autocomplete="off" name="password"/>
          </div>
          <br>
		  <p class="signup"><a href="signup.html">Sign-Up</a></p>
		  
          <p class="forgot"><a href="forgot.php">Forgot Password?</a></p>
		  
          
          <button class="btn btn-lg btn-success btn-block" name="login" />Log In</button>
          
          </form>

        </div>
		</div>
		</div>
		</div>
		</div>



           
        

      
 <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
