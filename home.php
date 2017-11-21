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
  <link href="css/sb-admin.css" media="screen" rel="stylesheet" />
  <link href="css/demo.css" media="screen" rel="stylesheet" />
  <link href="css/todo.css" media="screen" rel="stylesheet" />

  
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
          <li class="active">
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

  <br>
  <!--Home page banner -->
  <div id="move-wrapper-top">
    <div class="mid darken-home">
      <h1>Hey <?= $first_name ?>,welcome back :)</h1>
    </div>
  </div>
  <!--end of home banner -->
  <div id="move-wrapper">
    <div id="page-wrapper-home">
      <div class="container-fluid">
        <!-- Page Heading -->
        <div class="col-lg-12">
          <h5 class="overviewText">OVERVIEW</h5>
          <br />
          <br />
          <br />

          <!--Course 1 image and description -->
          <?php if(!empty($course1)){ ?>
          <!--Checks if user has a 1st course -->
          <div class="course1">
            <div class="img-1 darken-1">
              <h2 class="style1"><?= $course1 ?></h2>
            </div>

            <div class="course1Wells">
              <span class="caption "><?=$course1_name?></span>
              <p class="h4style1">Next Due:</p>
              <p class="h4style1">
                <?=$course1_due_date?>
              </p>
            </div>
          </div>
          <?php }?>
          <!--End of Course 1 image and description -->

          <!--Course 2 image and description -->
          <?php if(!empty($course2)){ ?>
          <!--Checks if user has a 2nd course -->
          <div class="course2">
            <div class="img-2 darken-2">
              <h2 class="style2"><?= $course2 ?></h2>
            </div>

            <div class="course2Wells">
              <span class="caption"><?=$course2_name?></span>
              <p class="h4style1">Next Due:</p>
              <p class="h4style1">
                <?=$course2_due_date?>
              </p>
            </div>
          </div>
          <?php }?>
          <!--End of Course 2 image and description -->

          <!--Course 3 image and description -->
          <?php if(!empty($course3)){ ?>
          <!--Checks if user has a 3rd course -->
          <div class="course3">
            <div class="img-3 darken-3">
              <h2 class="style3"><?= $course3 ?></h2>
            </div>
            <div class="course3Wells">
              <span class="caption"><?=$course3_name?></span>
              <p class="h4style1">Next Due:</p>
              <p class="h4style1">
                <?=$course3_due_date?>
              </p>
            </div>
          </div>

          <?php }?>
          <!--End of Course 3 image and description -->

          <!--Course 4 image and description -->
          <?php if(!empty($course4)){ ?>
          <!--Checks if user has a 4th course -->
          <div class="course4">
            <div class="img-4 darken-4">
              <h2 class="style4"><?= $course4 ?></h2>
            </div>
            <div class="course4Wells">
              <span class="caption"><?=$course4_name?></span>
              <p class="h4style1">Next Due:</p>
              <p class="h4style1">
                <?=$course4_due_date?>
              </p>
            </div>
          </div>
          <?php }?>
          <!--End of Course 4 image and description -->

          <!--Course 5 image and description -->
          <?php if(!empty($course5)){ ?>
          <!--Checks if user has a 5th course -->
          <div class="course5">
            <!--If not this dissapears -->
            <div class="img-5 darken-5">
              <h2 class="style5"><?= $course5?></h2>
            </div>
            <div class="course5Wells">
              <span class="caption"><?=$course5_name?></span>
              <p class="h4style1">Next Due:</p>
              <p class="h4style1">
                <?=$course5_due_date?>
              </p>
            </div>
          </div>
          <?php }?>

          <!--End of Course 5 image and description -->

          <br>
          <br>
          <br>
          <br>
          <!--***********TODO LIST SECTION CODE********** -->
          <div class="wellToDo">

			<h2 class="todoText">
			<div class="fa fa-check-square-o fa fa-1x">
			</div> TO-DO LIST</h2>

            <!--From here the tasks are displayed below -->




  <div ng-app="ToDoList" style="margin-top:-1px; margin-bottom:10px;">
    <div class="container">
      <div class="content" ng-controller="taskController">
<br>
	  
	  
   	
			

			  
   <div class ="addingTask">
        <a href="javascript:showhide('uniquename')">Add To-Do</a>
		 
		 <!--Begin: Help tip-->
              <i class="fa fa-question-circle fa-lg" 
			  data-toggle="tooltip" 
			  data-placement="right" 
			  title="To delete click the check mark first then the x icon, only crossed out
			  tasks will be deleted" 
			  data-original-title="To delete click the check mark first then the x icon, only crossed out
			  tasks will be deleted"></i>
          
            <!--End: Help tip-->
</div><br>
        <div id="uniquename" style="display:none;">
          <form>
            <div class="inputContainer">
              <input type="text" id="description" class="taskName" placeholder="What do you need to do?" ng-model="newTask" />
              <label for="description">Description</label>
            </div>
            <div class="inputContainer half last">
              <i class="fa fa-caret-down selectArrow"></i>
              <select id="category" class="taskCategory" ng-model="newTaskCategory" ng-options="obj.name for obj in categories">
                <option class="disabled" value="">Choose a category</option>
              </select>
              <label for="category">Journal</label>
            </div>
            <div class="inputContainer half last right">
              <input type="date" id="dueDate" class="taskDate" ng-model="newTaskDate" />
              <label for="dueDate">Due Date</label>
            </div>
            <div class="row">
              <button class="taskAdd" ng-click="addNew()">
                <i class="fa fa-plus icon"></i>Add</button>
                <!--    <button class="taskDelete" ng-click="deleteTask()">
                <i class="fa fa-trash-o icon"></i>Delete</button>-->
            </div>
          </form>
        </div>
        <!--From here the tasks are displayed below -->
		
		
        <br>
        <br>
        <br>
  <div class ="task">
  <p>Task</p>
  </div>
  <div class ="journal">
  <p>Journal</p>
  </div>
    <div class ="due">
  <p>Due</p>
  </div>
 <ul class="taskList">
          <li class="taskItem" ng-repeat="taskItem in taskItem track by $index" ng-model="taskItem">
            <!--<i class="fa fa-check fa-2x"></i>-->
            <label class="fancy-checkbox">
              <input type="checkbox" class="taskCheckbox" ng-model="taskItem.complete" ng-change="save()" />
              <i class="fa fa-fw fa-check fa-2x unchecked"></i>
              <i class="fa fa-fw fa-check fa-2x checked"></i>
            </label>
            <!-- ng-click="deleteTask()"
			<input type="checkbox" class="taskCheckbox" ng-model="taskItem.complete" ng-change="save()" /> -->
			
			<span class="description complete-{{taskItem.complete}}">{{taskItem.description}}</span> 
			<button class="taskDelete" ng-click="deleteTask()"><i class="fa fa-times"></i></button>	
			<span class="taskDate complete-{{taskItem.complete}}"><i class="date"></i>{{taskItem.date | date : 'shortDate'}}</span>
		  
			
		
			<span class="category-{{taskItem.category}}">{{taskItem.category}}</span> 
             
		  </li>
        </ul>
		
		
		<!--fsssssssssssssssssssssssssssssssssssssssssss --->


		
		
		
        <!-- taskList -->
      </div>
      <!-- content -->
    </div>
    <!-- container -->
  </div>



  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular.min.js"></script>
  <script>
    function showhide(id) {
      var e = document.getElementById(id);
      e.style.display = (e.style.display == 'block') ? 'none' : 'block';
    }


    //Define angular app
    var app = angular.module('ToDoList', []);

    //controllers
    app.controller('taskController', function($scope) {
      $scope.today = new Date();
      $scope.saved = localStorage.getItem('taskItems');
      $scope.taskItem = (localStorage.getItem('taskItems') !== null) ?
        JSON.parse($scope.saved) : [{
          description: "Why not add a task?",
          date: $scope.today,
		  categories:'Miscellaneous',
          complete: false
        }];
      localStorage.setItem('taskItems', JSON.stringify($scope.taskItem));

      $scope.newTask = null;
      $scope.newTaskDate = null;
      $scope.categories = [{
		 <?php if(!empty($course1)){ ?>
          
          name: '<?= $course1 ?>'
		  <?php }?>
        }, {
			<?php if(!empty($course2)){ ?>
          name: '<?= $course2 ?>'
		  <?php }?>
        }, {
			<?php if(!empty($course3)){ ?>
          name: '<?= $course3 ?>'
		  <?php }?>
        }, {
			<?php if(!empty($course4)){ ?>
          name: '<?= $course4 ?>'
		  <?php }?>
        },{
			<?php if(!empty($course5)){ ?>
          name: '<?= $course5 ?>'
		  <?php }?>
        },
		{
          name: 'Miscellaneous'
        }


      ];
      $scope.newTaskCategory = $scope.categories;
      $scope.addNew = function() {
        if ($scope.newTaskDate == null || $scope.newTaskDate == '') {
          $scope.taskItem.push({
            description: "No Description",
            date: $scope.today,
            category: "Miscellaneous",
			
			complete: false
          })
        } else {
          $scope.taskItem.push({
            description: $scope.newTask,
            date: $scope.newTaskDate,
            category: $scope.newTaskCategory.name,
			complete: false
          })
        };
        $scope.newTask = '';
        $scope.newTaskDate = '';
        $scope.newTaskCategory = $scope.categories;
        localStorage.setItem('taskItems', JSON.stringify($scope.taskItem));
      };
      $scope.deleteTask = function() {
        var completedTask = $scope.taskItem;
        $scope.taskItem = [];
        angular.forEach(completedTask, function(taskItem) {
          if (!taskItem.complete) {
            $scope.taskItem.push(taskItem);
          }
        });
        localStorage.setItem('taskItems', JSON.stringify($scope.taskItem));
      };

      $scope.save = function() {
        localStorage.setItem('taskItems', JSON.stringify($scope.taskItem));
		$("#email").val(email);
		$("#taskname").val($scope.newTask);
		$("#journal").val(newTaskDate);
		$("#duedate").val(newTaskCategory);
		
      }
    });
  </script>
  <script>
 /*   (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-46156385-1', 'cssscript.com');
    ga('send', 'pageview');*/
  </script>
  
  <!--***********TODO LIST SECTION CODE END********** -->			
	
          </div>
          <!-- content -->

          <!--***********TODO LIST SECTION CODE END********** -->










        </div>
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
        <a href="FAQ.html">FAQ</a> 
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