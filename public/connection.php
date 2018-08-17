<?php
function open_connection(){
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$conn = new mysqli($dbhost,$dbuser,$dbpass,"mealoftheday") or die("Cannot connect to the database: %s\n".$conn->error);
	return $conn;
}

function close_connection($conn){
	$conn->close();
}
$connection = open_connection();
if (!$connection) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}else{
	//echo "Connection established";
}
?>
