﻿<?php require_once('../private/initialize.php'); ?>
<?php
include('login.php');
?>
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
   <div class="parallax" id="parallax-cta" style="background-image:url(images/menu.png);">
      &nbsp;
   </div>
</section>

							

<section class="story-section company-sections ct-u-paddingBoth100 paddingBothHalf noTopMobilePadding" id="section">
   <div class="container text-center">
      <button class="tablink" onclick="openPage('Vegetarion', this, 'red')">Vegetarian</button>
<button class="tablink" onclick="openPage('Non-Vegetarion', this, 'green')" id="defaultOpen">Non-Vegetarian</button>
<button class="tablink" onclick="openPage('Rices', this, 'blue')">Rices</button>

<div id="Vegetarion" class="tabcontent">
 <center> <h3>Vegetarian</h3>
 
        
		<table style="width:100%">
		
		
           <tbody style="font-size: 20px !important;">
								 
						  <tr>
							<th>Name</th>
							
							<th>Prices</th>
							
						  </tr>
<?php
	$data = Menu::find_Veg();	
	foreach ($data as $row) {
		echo"<tr><td>".$row->Name."</td><td>"."$".$row->Price."</td></tr>"; 
	}
?>

			</tbody>
</table>	
 <?php if($session->username==12){?>
	<div>
		<form action="additem.php">
			  <input type="submit" value="AddItem">
		</form>

		</div>
		
	<?php }?>	
</center>
</div>
<div id="Non-Vegetarion" class="tabcontent">
  <center> <h3>Non-Vegetarian</h3>
 
  <table style="width:100%">

  <tbody style="font-size: 20px !important;">
  	  <tr>
							<th>Name</th>
							
							<th>Prices</th>
					
						  </tr>
							
<?php
	$data = Menu::find_Non_Veg();	
	foreach ($data as $row) {
		echo"<tr><td>".$row->Name."</td><td>"."$".$row->Price."</td></tr>"; 
	}
?>
	
  </tbody>
  </table>
 <?php if($session->username==12){?>
  	<div>
		<form action="additem.php">
			  <input type="submit" value="AddItem">
		</form>

		</div>
		<?php } ?>
		</center></div>


<div id="Rices" class="tabcontent">
 <center> <h3>Rice Dishes</h3>
  
  <table style="width:100%">
     <tbody style="font-size: 20px !important;">
  <tr>
							<th>Name</th>
							
							<th>Prices</th>
					
						  </tr>
							
<?php
	$data = Menu::find_Rice();	
	foreach ($data as $row) {
		echo"<tr><td>".$row->Name."</td><td>"."$".$row->Price."</td></tr>"; 
	}
?>
	
</tbody>
</table>
<?php if($session->username==12){?>
  	<div>
		<form action="additem.php">
			  <input type="submit" value="AddItem">
		</form>

		</div>
		<?php } ?>
</center>
</div>




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


<script>
function openPage(pageName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
     


</main>

		
		<?php include("footer.php");?>
		

	</body>
	</html>
