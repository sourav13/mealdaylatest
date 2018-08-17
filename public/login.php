
<?php

	 // Starting Session
	$message=''; // Variable To Store message Message
	
	if (isset($_POST['submit'])) 
	{
		if (empty($_POST['email']) || empty($_POST['password'])) 
		{
			$message = "email or Password is invalid";
		}
		else
		{
			$pass = $_POST['password'] ?? '';
			$email = $_POST['email']?? '';
			
			
			
		$user = User::find_by_email($email,$pass);	

	if(count($user)>0)
{
	$session->login($user);
	//header("Location:http://localhost/Capstone/mealday3/public/index.php");
	
    //  echo "implement session functionality here now";
}else{
	
	echo "no such user";
}

		
	
		}
	}
	
?>
