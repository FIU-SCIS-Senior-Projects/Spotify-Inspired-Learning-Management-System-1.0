<?php

   //Grab client information from the database
   include('db.php');
   session_start();
   
   $user_check = $_SESSION['email'];
   
   $ses_sql = mysqli_query($connect, "SELECT * FROM accounts
		        WHERE email = '$user_check'");
   
   $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
   
   $login_session = $row['email']; 
   

?>