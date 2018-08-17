

﻿<?php require_once('../private/initialize.php'); ?>
<?php 

if(isset($_POST['submit'])){
	
	$args=[];
	$args['Price'] = $_POST['Price'] ?? NULL;
	$args['Name'] = $_POST['Name'] ?? NULL;
	$args['Category'] = $_POST['Category'] ?? NULL;
	
		
	$menu = new Menu($args);
	
    $result = 	$menu->create();
	
	if($result ===true){
//		$new_id = $custorder->OrderId;
	header("location: index.php");
	}else{
		header("location:customerorders.php");
	//	echo "hello";
	}
	
}
?>
