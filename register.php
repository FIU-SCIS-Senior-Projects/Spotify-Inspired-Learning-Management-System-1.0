<?php
/* Registration process, inserts user info into the database 
   and sends account confirmation email message
 */

// Set session variables to be used on profile.php page
$_SESSION['email'] = $_POST['email'];
$_SESSION['first_name'] = $_POST['firstname'];
$_SESSION['last_name'] = $_POST['lastname'];
$_SESSION['major'] = $_POST['major'];
$_SESSION['year'] = $_POST['year'];
$_SESSION['intro'] = $_POST['intro'];

$_SESSION['course_1'] = $_POST['course_1'];
$_SESSION['course1_name'] = $_POST['course1_name'];
$_SESSION['course1_due_date'] = $_POST['course1_due_date'];

$_SESSION['course_2'] = $_POST['course_2'];
$_SESSION['course2_name'] = $_POST['course2_name'];
$_SESSION['course2_due_date'] = $_POST['course2_due_date'];

$_SESSION['course_3'] = $_POST['course_3'];
$_SESSION['course3_name'] = $_POST['course3_name'];
$_SESSION['course3_due_date'] = $_POST['course3_due_date'];

$_SESSION['course_4'] = $_POST['course_4'];
$_SESSION['course4_name'] = $_POST['course4_name'];
$_SESSION['course4_due_date'] = $_POST['course4_due_date'];

$_SESSION['course_5'] = $_POST['course_5'];
$_SESSION['course5_name'] = $_POST['course5_name'];
$_SESSION['course5_due_date'] = $_POST['course5_due_date'];

// Escape all $_POST variables to protect against SQL injections
$first_name = $mysqli->escape_string($_POST['firstname']);
$last_name = $mysqli->escape_string($_POST['lastname']);
$email = $mysqli->escape_string($_POST['email']);
$password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));


$major = $mysqli->escape_string($_POST['major']);
$year = $mysqli->escape_string($_POST['year']);
$intro = $mysqli->escape_string($_POST['intro']);

$course_1 = $mysqli->escape_string($_POST['course_1']);
$course1_name = $mysqli->escape_string($_POST['course1_name']);
$course1_due_date = $mysqli->escape_string($_POST['course1_due_date']);

$course_2 = $mysqli->escape_string($_POST['course_2']);
$course2_name = $mysqli->escape_string($_POST['course2_name']);
$course2_due_date = $mysqli->escape_string($_POST['course2_due_date']);

$course_3 = $mysqli->escape_string($_POST['course_3']);
$course3_name = $mysqli->escape_string($_POST['course3_name']);
$course3_due_date = $mysqli->escape_string($_POST['course3_due_date']);

$course_4 = $mysqli->escape_string($_POST['course_4']);
$course4_name = $mysqli->escape_string($_POST['course4_name']);
$course4_due_date = $mysqli->escape_string($_POST['course4_due_date']);

$course_5 = $mysqli->escape_string($_POST['course_5']);
$course5_name = $mysqli->escape_string($_POST['course5_name']);
$course5_due_date = $mysqli->escape_string($_POST['course5_due_date']);

$hash = $mysqli->escape_string( md5( rand(0,1000) ) );
      
// Check if user with that email already exists
$result = $mysqli->query("SELECT * FROM users WHERE email='$email'") or die($mysqli->error());

// We know user email exists if the rows returned are more than 0
if ( $result->num_rows > 0 ) {
    
    $_SESSION['message'] = 'User with this email already exists!';
    header("location: error.php");
    
}
else { // Email doesn't already exist in a database, proceed...

    // active is 0 by DEFAULT (no need to include it here)
    $sql = "INSERT INTO users (first_name, last_name, email, password, major, year, intro,
			course_1, course1_name, course1_due_date, course_2, course2_name, course2_due_date, 
			course_3, course3_name, course3_due_date, course_4, course4_name, course4_due_date, 
			course_5, course5_name, course5_due_date,
			 hash) " 
            . "VALUES ('$first_name','$last_name','$email','$password','$major', '$year', '$intro',
			'$course_1','$course1_name','$course1_due_date','$course_2', '$course2_name', '$course2_due_date', 
			'$course_3', '$course3_name', '$course3_due_date', '$course_4', '$course4_name', '$course4_due_date',
			'$course_5', '$course5_name', '$course5_due_date',
			'$hash')";

    // Add user to the database
    if ( $mysqli->query($sql) ){

        $_SESSION['active'] = 0; //0 until user activates their account with verify.php
		$_SESSION['following'] = 0; //0 everyone starts with 0 following
		$_SESSION['followers'] = 0; //0 everyone starts with 0 following
		$_SESSION['view_posts'] = 1; //1 everyone can view posts
		$_SESSION['view_profile'] = 1; //1 everyone can view profile
		$_SESSION['view_playlist'] = 1; //1 everyone can view playlists
		$_SESSION['view_activities'] = 1; //1 everyone can view activites
		
        $_SESSION['logged_in'] = true; // So we know the user has logged in
        

    }

    else {
        $_SESSION['message'] = 'Registration failed!';
        header("location: error.php");
    }

}