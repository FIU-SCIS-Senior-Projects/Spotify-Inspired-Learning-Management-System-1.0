<?php
/* Registration process, inserts user info into the database 
   and sends account confirmation email message
 */

// Set session variables to be used on profile.php page
$_SESSION['email'] = $_POST['email'];
$_SESSION['first_name'] = $_POST['firstname'];
$_SESSION['last_name'] = $_POST['lastname'];

$_SESSION['course_1'] = $_POST['class1'];
$_SESSION['course_2'] = $_POST['class2'];
$_SESSION['course_3'] = $_POST['class3'];
$_SESSION['course_4'] = $_POST['class4'];
$_SESSION['course_5'] = $_POST['class5'];

$_SESSION['following'] = $_POST['following'];
$_SESSION['followers'] = $_POST['followers'];

$_SESSION['major'] = $_POST['major'];
$_SESSION['year'] = $_POST['year'];

$_SESSION['intro'] = $_POST['intro'];

$_SESSION['userimage'] = $_POST['userimage'];

// Escape all $_POST variables to protect against SQL injections
$first_name = $mysqli->escape_string($_POST['firstname']);
$last_name = $mysqli->escape_string($_POST['lastname']);
$email = $mysqli->escape_string($_POST['email']);
$password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
$hash = $mysqli->escape_string( md5( rand(0,1000) ) );

$course_1 = $mysqli->escape_string($_POST['class1']);
$course_2 = $mysqli->escape_string($_POST['class2']);
$course_3 = $mysqli->escape_string($_POST['class3']);
$course_4 = $mysqli->escape_string($_POST['class4']);
$course_5 = $mysqli->escape_string($_POST['class5']);

$major = $mysqli->escape_string($_POST['major']);
$year = $mysqli->escape_string($_POST['year']);

$following = $mysqli->escape_string($_POST['following']);
$followers = $mysqli->escape_string($_POST['followers']);

$intro = $mysqli->escape_string($_POST['intro']);

$userimage = $mysqli->escape_string($_POST['userimage']);

      
// Check if user with that email already exists
$result = $mysqli->query("SELECT * FROM users WHERE email='$email'") or die($mysqli->error());

// We know user email exists if the rows returned are more than 0
if ( $result->num_rows > 0 ) {
    
    $_SESSION['message'] = 'User with this email already exists!';
    header("location: error.php");
    
}
else { // Email doesn't already exist in a database, proceed...

    // active is 0 by DEFAULT (no need to include it here)
    $sql = "INSERT INTO users (first_name, last_name, email, password, hash) " 
            . "VALUES ('$first_name','$last_name','$email','$password', '$hash')";

    // Add user to the database
    if ( $mysqli->query($sql) ){

        $_SESSION['active'] = 0; //0 until user activates their account with verify.php
        $_SESSION['logged_in'] = true; // So we know the user has logged in
        

    }


}