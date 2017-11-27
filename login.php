<?php
/* user login process, checks if user exists and password is correct */

// Escape email to protect against SQL injections
$email = $mysqli->escape_string($_POST['email']);
$result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

if ( $result->num_rows == 0 ){ // user doesn't exist
    $_SESSION['message'] = "user with that email doesn't exist!";
    header("location: error.php");
}
else { // user exists
    $user = $result->fetch_assoc();

    if ( password_verify($_POST['password'], $user['password']) ) {
        
        $_SESSION['email'] = $user['email'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
        $_SESSION['active'] = $user['active'];
		
		
		//Profile info
		$_SESSION['major'] = $user['major'];
        $_SESSION['year'] = $user['year'];
        $_SESSION['intro'] = $user['intro'];
		
		
		//Courses the user is taking
		$_SESSION['course_1'] = $user['course_1'];
		$_SESSION['course_2'] = $user['course_2'];
		$_SESSION['course_3'] = $user['course_3'];
		$_SESSION['course_4'] = $user['course_4'];
		$_SESSION['course_5'] = $user['course_5'];
	  	
		//1st course info
		$_SESSION['course1_name'] = $user['course1_name'];
		$_SESSION['course1_due_date'] = $user['course1_due_date'];
	

		//2nd course info
		$_SESSION['course2_name'] = $user['course2_name'];
		$_SESSION['course2_due_date'] = $user['course2_due_date'];
		
		//3rd course info
		$_SESSION['course3_name'] = $user['course3_name'];
		$_SESSION['course3_due_date'] = $user['course3_due_date'];


		//4th course info
 		$_SESSION['course4_name'] = $user['course4_name'];
		$_SESSION['course4_due_date'] = $user['course4_due_date'];


		//5th course info
		$_SESSION['course5_name'] = $user['course5_name'];
		$_SESSION['course5_due_date'] = $user['course5_due_date'];

		//Following count and followers count
		$_SESSION['following'] = $user['following'];
		$_SESSION['followers'] = $user['followers'];
		
		//Setting options
		$_SESSION['view_posts'] = $user['view_posts'];
		$_SESSION['view_profile'] = $user['view_profile'];
		$_SESSION['view_playlist'] = $user['view_playlist'];
		$_SESSION['view_activities'] = $user['view_activities'];
		
        
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;

        header("location: home.php");
    }
    else {
        $_SESSION['message'] = "You have entered wrong password, try again!";
        header("location: error.php");
    }
}

