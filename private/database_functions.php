<?php
function db_connect(){
	    $connection = new PDO('mysql:host=localhost;dbname=mealoftheday;charset=utf8', 'phpmyadmin','navalsweet');  

    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
//confirm_db_connect($connection);
//print_r($connection);
return $connection;
}
function confirm_db_connect($connection){

if($connection->connect_errno){
echo "hello";
$msg = "Database connection failed";
$msg .= $connection->connect_error;
$msg .= $connection->connect_errno;
exit($msg);
}
}
?>
