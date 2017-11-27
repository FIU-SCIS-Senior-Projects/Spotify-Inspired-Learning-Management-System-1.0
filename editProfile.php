<?php
/* Displays user information and some useful messages */
require 'db.php';
session_start();

// Check if user is  still logged
      if(!isset($_SESSION['logged_in'])){ 
      header("Location: index.php");  
	  }
	  
   //user name and email
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
  
  //courses user is taking	
    $course1 = $_SESSION['course_1']; 
    $course2 = $_SESSION['course_2'];
	$course3 = $_SESSION['course_3'];
	$course4 = $_SESSION['course_4'];
	$course5 = $_SESSION['course_5'];

   //1st course info	
	$course1_name = $_SESSION["course1_name"];
	$course1_due_date = $_SESSION["course1_due_date"];
	
   //2nd course info	
	$course2_name = $_SESSION["course2_name"];
	$course2_due_date = $_SESSION["course2_due_date"];
	
   //3rd course info
   	$course3_name = $_SESSION["course3_name"];
	$course3_due_date = $_SESSION["course3_due_date"];
   
   //4th course info
   	$course4_name = $_SESSION["course4_name"];
	$course4_due_date = $_SESSION["course4_due_date"];
   
   //5th course info
	$course5_name = $_SESSION["course5_name"];
	$course5_due_date = $_SESSION["course5_due_date"];
   
   //Following and Followers count
	$following = $_SESSION['following'];
    $followers = $_SESSION['followers'];
	
	//Year and major of student
	$major = $_SESSION['major'];
    $year = $_SESSION['year'];
	
	//Student's introduction sentence
	$intro = $_SESSION['intro'];
   
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>ScratchBoard - Home</title>
  <!-- Bootstrap Core CSS -->
  <!--Footer CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <!-- Custom CSS -->
  <link href="css/scratchboard.css" media="screen" rel="stylesheet" />
  <link href="css/demo.css" media="screen" rel="stylesheet" />
  <link href="theme/profile.css" media="screen" rel="stylesheet" />
  
  
  <!--Font Amazing link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <!-- Below links for due date filter-->
  <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
  <script type="text/javascript" src="moment.min.js"></script>
  
 
  <!-- Include Date Range Picker -->
  <script type="text/javascript" src="daterangepicker.js"></script>
  <link rel="stylesheet" type="text/css" href="daterangepicker.css" />

  
  
	
  
</head>

<body>
  <div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top top-nav" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html"></a>
      </div>
      <!-- Top Menu Items -->
      <div class="media">
        <ul class="nav navbar-right top-nav">
          <li class="nav-item">
            <form class="form-inline my-2 my-lg-5 mr-lg-2">
              <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." />
                <span class="input-group-btn">
                  </span>
              </div>
            </form>
          </li>
        </ul>
      </div>
      <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
          <li>
            <a href="home.php">
              <i class="fa fa-home fa-3x" data-toggle="tooltip" data-placement="right" title="Home" data-original-title="Home"></i>
            </a>
          </li>
          <li class="active">
            <a href="profile.php">
              <i class="fa fa-user fa-3x" data-toggle="tooltip" data-placement="right" title="Profile" data-original-title="Profile"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-comments fa-3x" data-toggle="tooltip" data-placement="right" title="Messages" data-original-title="Messages"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-folder-open-o fa-3x" data-toggle="tooltip" data-placement="right" title="Archives" data-original-title="Archives"></i>
            </a>
          </li>
          <li>
            <a href="calendar.php">
              <i class="fa fa-calendar fa-3x" data-toggle="tooltip" data-placement="right" title="Calendar" data-original-title="Calendar"></i>
            </a>
          </li>
          <li>
            <a href="settings.php" data-toggle="tooltip" data-placement="right" title="Settings" data-original-title="Settings">
              <i class="fa fa-cog fa-3x"></i>
            </a>
          </li>
          <li>
            <a href="logout.php" data-toggle="tooltip" data-placement="right" title="Log Out" data-original-title="Home">
              <i class="fa fa-power-off fa-3x"></i>
            </a>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </nav>
  </div>

  <br><br><br>
  <div id="move-wrapper">
    <div id="page-wrapper">
      

	  
	  
	  <div id="signup">   
          
          <form action="update_account.php" method="post" autocomplete="off">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" input class="form-control" placeholder = "<?php echo $first_name ?>" required autocomplete="off" name='firstname' />
            </div>
        
		<br>
		
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text" input class="form-control" placeholder = "<?php echo $last_name ?>" required autocomplete="off" name='lastname' />
            </div>
          </div>

		  <br>
		  
          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" input class="form-control" placeholder = "<?php echo $email ?>" required autocomplete="off" name='email' />
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
            <input type="text" input class="form-control" placeholder = "<?php echo $major ?>" required autocomplete="off" name='major'/>
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
            <input type="text" input class="form-control"  placeholder = "<?php echo $intro ?>" required autocomplete="off" name='intro'/>
          </div>		  
		  
<br><br>
		  
          <div class="field-wrap">
            <label>1st Course code<span class="req">*</span></label>
            <input type="text" input class="form-control" placeholder = "<?php echo $course1 ?>" required autocomplete="off" name='course_1'/>
          </div>	

          <div class="field-wrap">
            <label>1st Course name<span class="req">*</span></label>
            <input type="text" input class="form-control" placeholder = "<?php echo $course1_name ?>" required autocomplete="off" name='course1_name'/>
          </div>	

          <div class="field-wrap">
            <label>course 1 due date<span class="req">*</span></label>
            <input type="date" input class="form-control"  required autocomplete="off" name='course1_due_date'/>
          </div>			  
		  
		  <br><br>

          <div class="field-wrap">
            <label>course 2 code</label>
            <input type="text" input class="form-control"  placeholder = "<?php echo $course2 ?>" name='course_2'/>
          </div>	

          <div class="field-wrap">
            <label>course 2 name</label>
            <input type="text" input class="form-control" placeholder = "<?php echo $course2_name ?>" name='course2_name'/>
          </div>	

          <div class="field-wrap">
            <label>course 2 due date</label>
            <input type="date" input class="form-control" name='course2_due_date' />
          </div>		  

	  
<br><br>

          <div class="field-wrap">
            <label>course 3 code</label>
            <input type="text" input class="form-control" placeholder = "<?php echo $course3?>" name='course_3'/>
          </div>
		  
		  <div class="field-wrap">
            <label>course 3 name</label>
            <input type="text" input class="form-control" placeholder = "<?php echo $course3_name?>" name='course3_name'/>
          </div>

		  
		<div class="field-wrap">
            <label>course 3 due date</label>
            <input type="date" input class="form-control" name='course3_due_date'/>
          </div>	
		  
<br><br>
		  
          <div class="field-wrap">
            <label>course 4 code</label>
            <input type="text" input class="form-control" placeholder = "<?php echo $course4?>" name='course_4'/>
          </div>
		  
		 <div class="field-wrap">
            <label>course 4 name</label>
            <input type="text" input class="form-control" placeholder = "<?php echo $course4_name?>" name='course4_name'/>
          </div>
	
		<div class="field-wrap">
            <label>course 4 due date</label>
            <input type="date" input class="form-control" name='course4_due_date'/>
          </div>	

		  
	<br><br>	  
		 <div class="field-wrap">
            <label>course 5 code</label>
            <input type="text" input class="form-control" placeholder = "<?php echo $course5?>" name='course_5'/>
          </div>
		  
		 <div class="field-wrap">
            <label>course 5 name</label>
            <input type="text" input class="form-control" placeholder = "<?php echo $course5_name?>" name='course5_name'/>
          </div>
		  
		<div class="field-wrap">
            <label>course 5 due date</label>
            <input type="date" input class="form-control" name='course5_due_date'/>
          </div>	
		  
		  <br>
		  
		  
          <button type="submit" class="btn btn-success" name="register" />Save changes</button>
		    <a href="profile.php" class="btn btn-danger" role="button">Cancel</a>
          
          </form>

        </div>  
        

	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
</div>
</div>





<!--Start of Footer -->  
  <footer class="footer">
   <hr>
<div class="footer-right">

      <a><i class="fa fa-facebook"></i></a>
      <a><i class="fa fa-twitter"></i></a>
      <a><i class="fa fa-linkedin"></i></a>
      <a href="https://github.com/FIU-SCIS-Senior-Projects/Spotify-Inspired-Learning-Management-System-1.0/blob/master/README.md"><i class="fa fa-github"></i></a>

    </div>

    <div class="footer-left">

      <p class="footer-links">
        <a href="home.php">Home</a> 
		·
        <a href="FAQ.php">FAQ</a> 
		·
        <a href="FAQ.php">Contact</a>
      </p>

      <p>ScratchBoard &copy; 2017-2018</p>
	  <br>
    </div>
    </footer>
<!--End of Footer-->		
  <!-- /#wrapper -->
  <!-- jQuery -->
  <script src="js/jquery.js"></script>
  <script src="js/todoFunctions.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Moment js file-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.1/locale/af.js"></script>

</body>

</html>