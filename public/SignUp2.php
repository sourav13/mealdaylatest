<?php
 require_once('../private/initialize.php'); 

	$args=[];
	//$args['Id'] = '43';//$_POST['customerID'] ?? NULL;
	$args['Name'] = $_REQUEST['name'] ?? '';
	$args['Email'] = $_REQUEST['email'] ?? '';
	$args['Address'] = $_REQUEST['address'] ?? '';
	$args['Phone'] = $_REQUEST['phone'] ?? '';
	$args['Password'] = $_REQUEST['password'] ?? '';	
	$user = new User($args);

    $result = 	$user->create();
	echo "hello";
	if($result ===true){
	//	$new_id = $user->Id;
	//	header("location: index.php");
	}else{
		header("Location:index.php");
		echo " uSER cREATED";
	}


?>
