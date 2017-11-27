<?
include('db.php');
include('session.php');

//Create all variables

$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$email = $_POST['email'];

$course_1 = $_POST['course_1']; 
$course_2 = $_POST['course_2'];
$course_3 = $_POST['course_3'];
$course_4 = $_POST['course_4'];
$course_5 = $_POST['course_5'];

 //1st course info	
	$course1_name = $_POST["course1_name"];
	$course1_due_date = $_POST["course1_due_date"];
	
   //2nd course info	
	$course2_name = $_POST["course2_name"];
	$course2_due_date = $_POST["course2_due_date"];
	
   //3rd course info
   	$course3_name = $_POST["course3_name"];
	$course3_due_date = $_POST["course3_due_date"];
   
   //4th course info
   	$course4_name = $_POST["course4_name"];
	$course4_due_date = $_POST["course4_due_date"];
   
   //5th course info
	$course5_name = $_POST["course5_name"];
	$course5_due_date = $_POST["course5_due_date"];
   
	
	//Year and major of student
	$major = $_POST['major'];
    $year = $_POST['year'];
	
	//Student's introduction sentence
	$intro = $_POST['intro'];
   

//Execute the query
mysqli_query($connect,"UPDATE users SET firstname='$first_name', lastname='$last_name', 
			course_1='$course_1', course_2='$course_2', course_3='$course_3', course_4='$course_4', course_5='$course_5', 
			course1_name='$course1_name', course2_name='$course2_name', course3_name='$course3_name', 
			course4_name='$course4_name', course5_name='$course5_name', course1_due_date='$course1_due_date',
			course2_due_date='$course2_due_date', course3_due_date='$course3_due_date', course4_due_date='$course4_due_date',
			course5_due_date='$course5_due_date', major='$major', year = '$year', intro='$intro'
			WHERE email='$login_session'");        
				
//Check for client success
if(mysqli_affected_rows($connect) > 0){
	k
	echo '<script type="text/javascript">
	           window.location = "success.php"
	      </script>';
	
} else {
	echo "Client NOT Added<br />";
	echo mysqli_error ($connect);
}

//Close database connection
$connect->close();
?>

