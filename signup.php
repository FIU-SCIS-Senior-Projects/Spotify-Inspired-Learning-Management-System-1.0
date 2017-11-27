<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>ScratchBoard - Sign-Up Form</title>
  
  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/sb-admin.css" rel="stylesheet">

  <!--Font Amazing link-->
   <!--Font Amazing link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <!-- Custom CSS -->
  <link href="css/scratchboard.css" media="screen" rel="stylesheet" />



  

  
  <?php include 'css/css.html'; ?>
</head>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { //user logging in

        require 'login.php';
        
    }
    
    elseif (isset($_POST['register'])) { //user registering
        
        require 'register.php';
        
    }
}
?>
<body>
  <div id="login-wrapper">
    <div class="login-panel panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Please Sign Up</h3>
      </div>
      <div class="panel-body">
        
		<div id="signup">   
          
          <form action="index.php" method="post" autocomplete="off">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" input class="form-control" placeholder = "Jane" required autocomplete="off" name='firstname' />
            </div>
        
		<br>
		
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text" input class="form-control" placeholder = "Doe" required autocomplete="off" name='lastname' />
            </div>
          </div>

		  <br>
		  
          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" input class="form-control" placeholder = "example@mail.com" required autocomplete="off" name='email' />
          </div>
          
		  <br>
		  
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" input class="form-control" placeholder = "Password" required autocomplete="off" name='password'/>
          </div>
          
		  <br>
		  
          <div class="field-wrap">
            <label>Major<span class="req">*</span></label>
            <input type="text" input class="form-control" placeholder = "Business" required autocomplete="off" name='major'/>
          </div>		  
		  
		  <br>
		  
   <div class="field-wrap">
      <label >What year are you in?</label>
          <div class="radio"> <label><input type="radio" name="year" value="Freshman" /> Freshman </label></div>
          <div class="radio"><label><input type="radio" name="year" value="Sophomore" /> Sophomore </label></div>
		  <div class="radio"><label><input type="radio" name="year" value="Junior" /> Junior </label></div>
		  <div class="radio"><label><input type="radio" name="year" value="Senior" /> Senior </label></div>
   </div>
		  <br>
		  
          <div class="field-wrap">
            <label>Profile Intro<span class="req">*</span></label>
            <input type="text" input class="form-control" required autocomplete="off" name='intro'/>
          </div>		  
		  
<br><br>
		  
          <div class="field-wrap">
            <label>1st Course code<span class="req">*</span></label>
            <input type="text" input class="form-control" placeholder = "MAR 4505" required autocomplete="off" name='course_1'/>
          </div>	

          <div class="field-wrap">
            <label>1st Course name<span class="req">*</span></label>
            <input type="text" input class="form-control" placeholder = "Marketing Strategies" required autocomplete="off" name='course1_name'/>
          </div>	

          <div class="field-wrap">
            <label>course 1 due date<span class="req">*</span></label>
            <input type="date" input class="form-control" required autocomplete="off" name='course1_due_date'/>
          </div>			  
		  
		  <br><br>

          <div class="field-wrap">
            <label>course 2 code</label>
            <input type="text" input class="form-control"  placeholder = "MAT 3222" name='course_2'/>
          </div>	

          <div class="field-wrap">
            <label>course 2 name</label>
            <input type="text" input class="form-control" placeholder = "Organizational Behavior" name='course2_name'/>
          </div>	

          <div class="field-wrap">
            <label>course 2 due date</label>
            <input type="date" input class="form-control" name='course2_due_date' />
          </div>		  

	  
<br><br>

          <div class="field-wrap">
            <label>course 3 code</label>
            <input type="text" input class="form-control" placeholder = "MAR 4823" name='course_3'/>
          </div>
		  
		  <div class="field-wrap">
            <label>course 3 name</label>
            <input type="text" input class="form-control" placeholder = "Global Learning for Business" name='course3_name'/>
          </div>

		  
		<div class="field-wrap">
            <label>course 3 due date</label>
            <input type="date" input class="form-control" name='course3_due_date'/>
          </div>	
		  
<br><br>
		  
          <div class="field-wrap">
            <label>course 4 code</label>
            <input type="text" input class="form-control" placeholder = "STA 3005" name='course_4'/>
          </div>
		  
		 <div class="field-wrap">
            <label>course 4 name</label>
            <input type="text" input class="form-control" placeholder = "Probability and Statistics" name='course4_name'/>
          </div>
	
		<div class="field-wrap">
            <label>course 4 due date</label>
            <input type="date" input class="form-control" name='course4_due_date'/>
          </div>	

		  
	<br><br>	  
		 <div class="field-wrap">
            <label>course 5 code</label>
            <input type="text" input class="form-control" placeholder = "MAN 3115 " name='course_5'/>
          </div>
		  
		 <div class="field-wrap">
            <label>course 5 name</label>
            <input type="text" input class="form-control" placeholder = "Business Ethics" name='course5_name'/>
          </div>
		  
		<div class="field-wrap">
            <label>course 5 due date</label>
            <input type="date" input class="form-control" name='course5_due_date'/>
          </div>	
		  
		  <br>
		  
		  
          <button type="submit" class="btn btn-success" name="register" />Register</button>
		  <a href="index.php" class="btn btn-danger" role="button">Cancel</a>
          
          </form>

        </div>  
        
      </div><!-- tab-content -->
		
		

		</div>
		</div>
		</div>

  
  
  
          

        

      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
