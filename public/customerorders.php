<?php require_once('../private/initialize.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="about-us.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/order.css">
<?php include("libbootandjq.php");?>
<?php include("header.php");?>
 <?php include('SignIn.php');?>
      <?php include('SignUpAction.php');?>

<style>

* {box-sizing: border-box}

/* Set height of body and the document to 100% */
body, html {
    height: 100%;
    margin: 0;
    font-family: Arial;
}

/* Style tab links */
.tablink {
    background-color: #555;
    color: white;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    font-size: 17px;
    width: 25%;
}

.tablink:hover {
    background-color: #777;
}
table{
	border-collapse: separate;
	border-spacing: 100%;
}
table,th,td{
	
	
	
}
/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
    color: black;
    display: none;
    padding: 100px 20px;
    height: 100%;
}

#Vegetarion {background-color: beige;}
#Non-Vegetarion {background-color: beige;}
#Rices {background-color: beige;}

</style>


<style>
table {
  border-collapse: separate;
  border-spacing: 80px 0;
}

td {
  padding: 10px 0;
}


a {
    color: #00f;
}



</style>


</head>
<body>
   <?php include('SignInModal.php');?>
<?php include('SignUpModal.php');?>
<div class="ct-pageWrapper" id="ct-js-wrapper">
<section class="company-heading intro-type" id="parallax-one">
   <div class="container">
      <div class="row product-title-info">
         <div class="col-md-12">
            <h1>
              ....
            </h1>
         </div>
      </div>
   </div>
   <div class="parallax" id="parallax-cta" style="background-image:url(images/menu.png); width:100%; ">
      &nbsp;
   </div>
</section>


</section>



<section>

 <table class="table table-hover">
        <thead>
            <tr>
				<?php if($session->username==12){ echo "<td>Order Id</td>";echo "<td>Customer Id</td>";} ?>
          <!--      <td> Order Id</td>
				<td> Customer Id</td>
				!-->
                <td>Monday:</td>
				<td>Tuesday:</td>
				<td>Wednesday:</td>
				<td>Thursday:</td>
				<td>Friday:</td>
				<td>Saturday:</td>
			    <td>&nbsp;</td>
            </tr>
        </thead>
        <tbody>
									

										
<?php	
 if($session->username != 12){//admin id ss@gmail.com sss
$row = CustOrder::find_by_id($session->username);
if($row==0)
{
	echo "YOUR ORDER WILL BE HERE";
}else{
echo "<tr>";
									    		echo	"<td>". $row->Dish1."|".$row->Dish2."</td>";
												echo	"<td>". $row->Dish3."|".$row->Dish4."</td>";
												echo	"<td>". $row->Dish5."|".$row->Dish6."</td>";
												echo	"<td>". $row->Dish7."|".$row->Dish8."</td>";
												echo	"<td>". $row->Dish9."|".$row->Dish10."</td>";
												echo	"<td>". $row->Dish11."|".$row->Dish."</td>";
											    echo    "<td>"."<a href='delete.php?id=$row->OrderId'>Delete</a>"."</td>";
											    echo    "</tr>";
}
}
?>



												
<?php
if($session->username==12){
	
	$result = CustOrder::find_all();
												
foreach ($result as $row) {
	
echo  "<tr>";
											echo   "<td>".$row->OrderId."</td>";
											echo	"<td>". $row->CustomerId."</td>";
												echo	"<td>". $row->Dish1."|".$row->Dish2."</td>";
												echo	"<td>". $row->Dish3."|".$row->Dish4."</td>";
												echo	"<td>". $row->Dish5."|".$row->Dish6."</td>";
												echo	"<td>". $row->Dish7."|".$row->Dish8."</td>";
												echo	"<td>". $row->Dish9."|".$row->Dish10."</td>";
												echo	"<td>". $row->Dish11."|".$row->Dish."</td>";
												echo    "<td>"."<a href='delete.php?id=$row->OrderId'>Delete</a>"."</td>";
											    echo    "</tr>";
												
}
}
?>	


</tr>
            </tbody>
            </table>





</section>



<section class="culture-section company-sections ct-u-paddingBoth100 paddingBothHalf noTopMobilePadding">
   <div class="container">
      <div class="col-md-8 col-md-offset-2">
         <h2>
            Advice is like a food,Teaching is a Menu..
         </h2>
         
         <p class="ct-u-size22 ct-u-fontWeight300 ct-u-marginBottom60">
           “Mealoftheday combining great food, wine and atmosphere” .... Menu list is sumptous – lots of specials that vary weekly – wine list is awesome – the food ...... and I can only quote what one other customer said ” it is the best breakfast in town”.
      </p>
      
         
      </div>
     
    
   </div>
</section>




</main>

		
		<?php include("footer.php");?>
		

	</body>
	</html>
