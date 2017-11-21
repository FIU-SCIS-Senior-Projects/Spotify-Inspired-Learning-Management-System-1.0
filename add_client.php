<? include 'db.php'; ?>

<?
//Create all variables
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$major = $_POST['major'];
$year = $_POST['year'];
$intro = $_POST['intro'];
$password = $_POST['password'];

$course_1 = $_POST['course_1'];
$course1_name = $_POST['course1_name'];

$course_2 = $_POST['course_2'];
$course2_name = $_POST['course2_name'];

$course_3 = $_POST['course_3'];
$course3_name = $_POST['course3_name'];

$course_4 = $_POST['course_4'];
$course4_name = $_POST['course4_name'];

$course_5= $_POST['course_5'];
$course5_name = $_POST['course5_name'];


//Execute the query
mysqli_query($connect,"INSERT INTO accounts (first_name, last_name, email, major, year, intro, password, course_1, course1_name, course_2, course2_name, course_3, course3_name, course_4, course4_name, course_5, course5_name)
		        VALUES ('$first_name','$last_name','$email','$major', '$year', '$intro', '$password', '$course_1', '$course1_name', '$course_2', '$course2_name', '$course_3', '$course3_name', '$course_4', '$course4_name', '$course_5', '$course5_name')");
				
//Check for client success
if(mysqli_affected_rows($connect) > 0){
	echo '<script type="text/javascript">window.location = "index.php"</script>';
	
//} else {
//	echo '<script type="text/javascript">window.location = "http://localhost/main-pages/signup_rejected.html"</script>';
//	echo mysqli_error ($connect);
//}

//Close database connection
$connect->close();
?>

