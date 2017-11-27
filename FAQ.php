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
  
    <!-- Custom CSS -->
  <link href="css/modern-business.css" rel="stylesheet">
  
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
          <li>
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
      

	  
	  <!-- Panel start-->
	  <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Contact Info</a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse">
              <div class="panel-body">
                Feel free to contact us at: scratchboard@gmail.com (Note: email is not up and running please refrain from using it)
              </div>
            </div>
          </div>
      <!-- /.panel end -->
	  
	  <!-- Panel start-->
	  <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">How to delete to-do tasks?</a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
              <div class="panel-body">
               Click on the check mark to mark the task complete, then click the close icon, warning all things marked complete will be deleted
              </div>
            </div>
          </div>
      <!-- /.panel end -->	  
	  
	  	  <!-- Panel start-->
	  <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
				Why does the search bar not work?</a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
              <div class="panel-body">
               Sorry that part is under construction.
              </div>
            </div>
          </div>
      <!-- /.panel end -->
	  
	  
	  
	  	  <!-- Panel start-->
	  <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse4">
				I want to delete my account how can I do that?</a>
              </h4>
            </div>
            <div id="collapse4" class="panel-collapse collapse">
              <div class="panel-body">
               If you are a part of the testing process please make a note of it in your form and we will delete it.
              </div>
            </div>
          </div>
      <!-- /.panel end -->
	  
	  	  <!-- Panel start-->
	  <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse5">
				When I edit my profile, the changes aren't shown on my profile</a>
              </h4>
            </div>
            <div id="collapse5" class="panel-collapse collapse">
              <div class="panel-body">
                The site is still under construction, so not all the parts working.
              </div>
            </div>
          </div>
      <!-- /.panel end -->

	  	  <!-- Panel start-->
	  <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse6">
				I forgot my password but I didn't get an email to change it</a>
              </h4>
            </div>
            <div id="collapse6" class="panel-collapse collapse">
              <div class="panel-body">
                The site is still under construction, so not all the parts are working.
              </div>
            </div>
          </div>
      <!-- /.panel end -->	  
	  
	  	  	  <!-- Panel start-->
	  <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse7">
				Why does the messaging/archives pages not work?</a>
              </h4>
            </div>
            <div id="collapse7" class="panel-collapse collapse">
              <div class="panel-body">
                The site is still under construction, so not all the parts work
              </div>
            </div>
          </div>
      <!-- /.panel end -->
<!--Start of Footer -->

  <br><br><br>
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
	
</div>
</div>






  <!-- jQuery -->
  <script src="js/jquery.js"></script>
  <script src="js/todoFunctions.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Moment js file-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.1/locale/af.js"></script>

</body>

</html>