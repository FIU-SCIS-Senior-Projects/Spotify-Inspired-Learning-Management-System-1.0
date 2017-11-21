
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
        }


      ];
      $scope.newTaskCategory = $scope.categories;
      $scope.addNew = function() {
        if ($scope.newTaskDate == null || $scope.newTaskDate == '') {
          $scope.taskItem.push({
            description: $scope.newTask,
            date: "No deadline",
            complete: false,
            category: $scope.newTaskCategory.name
          })
        } else {
          $scope.taskItem.push({
            description: $scope.newTask,
            date: $scope.newTaskDate,
            complete: false,
            category: $scope.newTaskCategory.name
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
      }
    });

 
    (function(i, s, o, g, r, a, m) {
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
    ga('send', 'pageview');
 