<?php require_once('../private/initialize.php'); ?>
<?php

	$id= $_GET['id'];
	print_r($id);
	$row = CustOrder::find_by_Order_id($id);
	print_r($row);
	$row->delete($row->OrderId);
 header("Location:index.php");
	
	
?>
