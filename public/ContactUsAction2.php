<?php

try {
    $dbh = new PDO('mysql:host=localhost;dbname=mealoftheday;charset=utf8', 'phpmyadmin','navalsweet');  

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

$sql = "INSERT INTO ContactUs ( Name,Email,Message,Phone) VALUES(:Name,:Email,:Message,:Phone)";
 
 
$statement = $dbh->prepare($sql);
 
$statement->bindValue(':Name',$_REQUEST['Name']);
$statement->bindValue(':Email',$_REQUEST['Email']);
$statement->bindValue(':Message',$_REQUEST['Message']);
$statement->bindValue(':Phone',$_REQUEST['Phone']);

$inserted = $statement->execute();
 
if($inserted){        
$to_email = 'souravsachdeva13@gmail.com';
$subject = 'Regarding your website';
$message = 'Name'.$_REQUEST['Name'].'<br>'.'Phone number'.$_REQUEST['Phone'].$_REQUEST['Message'];
$headers = 'From:'.$_REQUEST['Email'];
mail($to_email,$subject,$message,$headers);


$customer_email = $_REQUEST['Email'];
$customersubject = 'confirmation of your message to mealoftheday';
$customermessage = 'Dear'.$_REQUEST['Name'].'Your message to mealoftheday is successfully recieved and we will contact you as soon as possible';
$customerheaders = 'From:souravsachdeva13@gmail.com';
mail($customer_email,$customersubject,$customermessage,$customerheaders);


   
   
header("location: index.php");
}

}
catch(PDOException $err) {
    var_dump($err->getMessage());
    die('...');
}
$dbh = null;
?>
