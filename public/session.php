<?php 
	session_start();// Starting Session

	// Storing Session
	$persons_check = $_SESSION['login_persons'];

	
	
	// SQL Query To Fetch Complete Information Of User
	$ses_sql = mysqli_query($connection,"select email from users where email='$persons_check'");

	$row = mysqli_fetch_array($ses_sql);

	$login_session =$row['email'];

	if(!isset($login_session))
	{
		$connection->close(); // Closing Connection
	//	header('Location: profile.php'); // Redirecting To Home Page
	}
?>