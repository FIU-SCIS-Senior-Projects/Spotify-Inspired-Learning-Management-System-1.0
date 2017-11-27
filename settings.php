<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is  still logged
      if(!isset($_SESSION['logged_in'])){ 
      header("Location: index.php");  
	  }
   //user name and email
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
	
	//Following and Followers
	$following = $_SESSION['following'];
	$followers = $_SESSION['followers'];
	


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>ScratchBoard - Settings</title>

    <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <!-- Custom CSS -->
  <link href="css/scratchboard.css" media="screen" rel="stylesheet" />

  
  <!--Font Amazing link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />


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
          <li class="active">
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

  <div id="move-wrapper">
    <div id="page-wrapper">
		  <br>
	  <br>
        <div class="col-lg-12">
      <h4 class = "subText">Privacy Settings</h2>

	  
      <p><small>Allow others to view your Posts:</small></p>
      <div class="onoffswitch">
        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch2">
        <label class="onoffswitch-label" for="switch2">
          <span class="onoffswitch-inner"></span>
          <span class="onoffswitch-switch"></span>
        </label>
      </div>

	  	  <br>
	  <br>
	  
      <p><small>Allow others to view your Profile:</small></p>
      <div class="onoffswitch">
        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch3" checked>
        <label class="onoffswitch-label" for="switch3">
          <span class="onoffswitch-inner"></span>
          <span class="onoffswitch-switch"></span>
        </label>
      </div>

	  	  <br>
	  <br>
	  
      <p><small>Allow others to view your Playlist:</small></p>
      <div class="onoffswitch">
        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch4" checked>
        <label class="onoffswitch-label" for="switch4">
          <span class="onoffswitch-inner"></span>
          <span class="onoffswitch-switch"></span>
        </label>
      </div>
	  
	  	  <br>
	  <br>
	  

  </div>
    </div>
	  </div>
		</div>
<>
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
		
  <!-- jQuery -->
  <script src="js/jquery.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Moment js file-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.1/locale/af.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

</body>

</html>