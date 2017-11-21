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
  
  //courses user is taking	
    $course1 = $_SESSION['course_1']; 
    $course2 = $_SESSION['course_2'];
	$course3 = $_SESSION['course_3'];
	$course4 = $_SESSION['course_4'];
	$course5 = $_SESSION['course_5'];

	//Following and Followers count
	$following = $_SESSION['following'];
    $followers = $_SESSION['followers'];
	
	//Year and major of student
	$major = $_SESSION['major'];
    $year = $_SESSION['year'];
	
	//profile image2
	$userimage = $_SESSION['userimage'];

	//Student's introduction sentence
	$intro = $_SESSION['intro'];
	
   //1st course info	
	$course1_name = $_SESSION["course1_name"];
	$course1_due_date = $_SESSION["course1_due_date"];

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
   
   
?>

<!DOCTYPE html>
<html ng-app="mwl.calendar.docs">
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
  <link href="css/sb-admin.css" media="screen" rel="stylesheet" />
  <link href="css/demo.css" media="screen" rel="stylesheet" />

  
  <!--Font Amazing link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <!-- Below links for calendar creation-->
<script src="https://unpkg.com/moment@2.17.1"></script>
    <script src="https://unpkg.com/interactjs@1"></script>    
	<script src="https://unpkg.com/angular@1.6.4/angular.js"></script>  
	<script src="https://unpkg.com/angular-animate@1.6.4/angular-animate.js"></script>   
	<script src="https://unpkg.com/angular-ui-bootstrap@2/dist/ui-bootstrap-tpls.js"></script>
    <script src="https://unpkg.com/rrule@2"></script>
  <script src="js/example.js"></script>
    <script src="js/helpers.js"></script>
  
	    <script src="https://unpkg.com/angular-bootstrap-colorpicker@3"></script>
    <script src="https://unpkg.com/angular-bootstrap-calendar"></script>
  <link href="https://unpkg.com/angular-bootstrap-colorpicker@3/css/colorpicker.min.css" rel="stylesheet">
    <link href="https://unpkg.com/angular-bootstrap-calendar/dist/css/angular-bootstrap-calendar.min.css" rel="stylesheet">
  
  
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
          <li class="active">
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
      
 
  <div ng-controller="KitchenSinkCtrl as vm">
  <h2 class="text-center">{{ vm.calendarTitle }}</h2>

  <div class="row">

    <div class="col-md-6 text-center">
      <div class="btn-group">

        <button
          class="btn btn-primary"
          mwl-date-modifier
          date="vm.viewDate"
          decrement="vm.calendarView"
          ng-click="vm.cellIsOpen = false">
          Previous
        </button>
        <button
          class="btn btn-default"
          mwl-date-modifier
          date="vm.viewDate"
          set-to-today
          ng-click="vm.cellIsOpen = false">
          Today
        </button>
        <button
          class="btn btn-primary"
          mwl-date-modifier
          date="vm.viewDate"
          increment="vm.calendarView"
          ng-click="vm.cellIsOpen = false">
          Next
        </button>
      </div>
    </div>

    <br class="visible-xs visible-sm">

    <div class="col-md-6 text-center">
      <div class="btn-group">
        <label class="btn btn-primary" ng-model="vm.calendarView" uib-btn-radio="'year'" ng-click="vm.cellIsOpen = false">Year</label>
        <label class="btn btn-primary" ng-model="vm.calendarView" uib-btn-radio="'month'" ng-click="vm.cellIsOpen = false">Month</label>
        <label class="btn btn-primary" ng-model="vm.calendarView" uib-btn-radio="'week'" ng-click="vm.cellIsOpen = false">Week</label>
        <label class="btn btn-primary" ng-model="vm.calendarView" uib-btn-radio="'day'" ng-click="vm.cellIsOpen = false">Day</label>
      </div>
    </div>

  </div>

  <br>

  <mwl-calendar
    events="vm.events"
    view="vm.calendarView"
    view-title="vm.calendarTitle"
    view-date="vm.viewDate"
    on-event-click="vm.eventClicked(calendarEvent)"
    on-event-times-changed="vm.eventTimesChanged(calendarEvent); calendarEvent.startsAt = calendarNewEventStart; calendarEvent.endsAt = calendarNewEventEnd"
    cell-is-open="vm.cellIsOpen"
    day-view-start="06:00"
    day-view-end="22:59"
    day-view-split="30"
    cell-modifier="vm.modifyCell(calendarCell)"
    cell-auto-open-disabled="true"
    on-timespan-click="vm.timespanClicked(calendarDate, calendarCell)">
  </mwl-calendar>

  <br><br><br>

  <h3 id="event-editor">
    Edit events
    <button
      class="btn btn-primary pull-right"
      ng-click="vm.addEvent()">
      Add new
    </button>
    <div class="clearfix"></div>
  </h3>

  <table class="table table-bordered">

    <thead>
      <tr>
        <th>Title</th>
        <th>Primary color</th>
        <th>Secondary color</th>
        <th>Starts at</th>
        <th>Ends at</th>
        <th>Remove</th>
      </tr>
    </thead>

    <tbody>
      <tr ng-repeat="event in vm.events track by $index">
        <td>
          <input
            type="text"
            class="form-control"
            ng-model="event.title">
        </td>
        <td>
          <input class="form-control" colorpicker type="text" ng-model="event.color.primary">
        </td>
        <td>
          <input class="form-control" colorpicker type="text" ng-model="event.color.secondary">
        </td>
        <td>
          <p class="input-group" style="max-width: 250px">
            <input
              type="text"
              class="form-control"
              readonly
              uib-datepicker-popup="dd MMMM yyyy"
              ng-model="event.startsAt"
              is-open="event.startOpen"
              close-text="Close" >
            <span class="input-group-btn">
              <button
                type="button"
                class="btn btn-default"
                ng-click="vm.toggle($event, 'startOpen', event)">
                <i class="fa fa-calendar"></i>
              </button>
            </span>
          </p>
          <div
            uib-timepicker
            ng-model="event.startsAt"
            hour-step="1"
            minute-step="15"
            show-meridian="true">
          </div>
        </td>
        <td>
          <p class="input-group" style="max-width: 250px">
            <input
              type="text"
              class="form-control"
              readonly
              uib-datepicker-popup="dd MMMM yyyy"
              ng-model="event.endsAt"
              is-open="event.endOpen"
              close-text="Close">
            <span class="input-group-btn">
              <button
                type="button"
                class="btn btn-default"
                ng-click="vm.toggle($event, 'endOpen', event)">
                <i class="fa fa-calendar"></i>
              </button>
            </span>
          </p>
          <div
            uib-timepicker
            ng-model="event.endsAt"
            hour-step="1"
            minute-step="15"
            show-meridian="true">
          </div>
        </td>
        <td>
          <button
            class="btn btn-danger"
            ng-click="vm.events.splice($index, 1)">
            Delete
          </button>
        </td>
      </tr>
    </tbody>

  </table>
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
        <a href="#">FAQ</a> 
		·
        <a href="#">Contact</a>
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