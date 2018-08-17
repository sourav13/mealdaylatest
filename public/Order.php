<?php require_once('../private/initialize.php'); ?>

<!DOCTYPE html>
<html lang="en" style="height: 100%;box-sizing: border-box;">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
<?php include("libbootandjq.php");?>
<link rel="stylesheet" type="text/css" href="css/order.css">

<?php include("header.php");?>
	
	   <?php include('SignIn.php');?>
	   <?php include('SignUpAction.php');?>
<style>

#footer {
   position:absolute;
   left:0px;
   bottom:0px;
   height:30px;
   width:100%;
}

/* IE 6 */
* html #footer {
   position:absolute;
   top:expression((0-(footer.offsetHeight)+(document.documentElement.clientHeight ? document.documentElement.clientHeight : document.body.clientHeight)+(ignoreMe = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop))+'px');
}

</style>
<script>
  //$( function() {
    //$( "#datepicker" ).datepicker();
	$( function() {
    var dateFormat = "mm/dd/yy",
      from = $( "#datepickerf" ) .datepicker({ minDate: 0});
        //  defaultDate: "+1d",
          //changeMonth: true,
          //numberOfMonths: 1
        
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#datepickert" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 1
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    }
  } );
	
 
  </script>
</head>



<body style=" position: relative;margin: 0;padding-bottom: 6rem;min-height: 100%;">

<form action="" method="POST">
<section style="padding:10px 0px 40px 0px;">
		
			<div class="row samplemenu">
				<div class = "whiteBackground col-xs-12 padding40" style="display:table;width:100%;">
					<div class="row ">
						<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
								<h2 style="text-align: center"><span >Sample menu</span></h2>
						</div>
					</div>
					<div class="row ">
						<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
							<p style="color: brown;text-align: center;">Though we strive to offer greater variety,the displayed menu is a sample only. Each restaurant menu may differ based on availability of items.</p>
						</div>
					</div>
					<div class="row samplemenu samplecenterdiv ">
							<div class="col-lg-4 col-md-12 col-xs-12 col-sm-12">
								<div style="background-color: lightblue;">
									<h4 style="color: red; text-align: center;">Monday</h4>
									<div class="imgsamplemenu iconsam1"><img class="alignnone size-full wp-image-156" src="http://35.193.58.110/wp-content/uploads/2018/06/day1-image.png" alt="" width="256" height="256" /></div>
									<div style="text-align: left; font-weight: bold; padding: 2px 30px; background-color: #fef2ea; border-top: 1px solid #bdbcbc; border-bottom: 1px solid #bdbcbc; color: #ff4200;">
											Lunch
									</div>
									<div>
									<ul>
									 	<li class="menu-items">Chapati :5</li>
									
									 	<li>Dish :
									 	<?php
									 			$sql = "Select Name from menu";	
										$data = $database->query($sql)->fetchAll();
// somewhere later:

							echo "<select  name='dish' style='display: inline' >";
												$selected = isset($_POST['dish']) ? $_POST['dish'] : '';
foreach ($data as $row) {

												echo '<option value="'. $row['Name'] .'"'.(($row['Name']==$selected)?' selected':'').'>'. $row['Name'] .'</option>';
}
echo "</select>";					
						 ?>	
										</li>
									 		<li>Dish :								
<?php

//try {
  //  $dbh = new PDO('mysql:host=localhost;dbname=mealoftheday;charset=utf8', 'phpmyadmin','navalsweet');  

  //  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

	$sql = "Select Name from menu";	
 $data = $database->query($sql)->fetchAll();
// somewhere later:

							echo "<select  name='dish1' style='display: inline' >";
												$selected = isset($_POST['dish1']) ? $_POST['dish1'] : '';
foreach ($data as $row) {

												echo '<option value="'. $row['Name'] .'"'.(($row['Name']==$selected)?' selected':'').'>'. $row['Name'] .'</option>';
}
echo "</select>";

//}
//catch(PDOException $err) {
  //  var_dump($err->getMessage());
    //die('...');
//}
//$dbh = null;
?>	
												</li>
									 	
									</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-12 col-xs-12 col-sm-12">
								<div style="background-color: lightblue;">
									<h4 style="color: red; text-align: center;">Tuesday</h4>
									<div class="imgsamplemenu iconsam1"><img class="alignnone size-full wp-image-156" src="http://35.193.58.110/wp-content/uploads/2018/06/thali.png" alt="" width="256" height="256" /></div>
									<div style="text-align: left; font-weight: bold; padding: 2px 30px; background-color: #fef2ea; border-top: 1px solid #bdbcbc; border-bottom: 1px solid #bdbcbc; color: #ff4200;">Lunch</div>
										<div>
										<ul>
										 	<li>Chapati :5 </li>
										 	<li>Dish :									
<?php


	$sql = "Select * from menu";	
 $data = $database->query($sql)->fetchAll();
// somewhere later:

							echo "<select  name='dish2' style='display: inline' >";
												$selected = isset($_POST['dish2']) ? $_POST['dish2'] : '';
foreach ($data as $row) {

												echo '<option value="'. $row['Name'] .'"'.(($row['Name']==$selected)?' selected':'').'>'. $row['Name'] .'</option>';
}
echo "</select>";


?>
												</li>
									 		<li>Dish :									
<?php

	$sql = "Select Name from menu";	
 $data = $database->query($sql)->fetchAll();
// somewhere later:

							echo "<select  name='dish3' style='display: inline' >";
												$selected = isset($_POST['dish3']) ? $_POST['dish3'] : '';
foreach ($data as $row) {

												echo '<option value="'. $row['Name'] .'"'.(($row['Name']==$selected)?' selected':'').'>'. $row['Name'] .'</option>';
}
echo "</select>";


?>
												</li>
												
										 	
										</ul>
										</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-12 col-xs-12 col-sm-12">
								<div style="background-color: lightblue;">
									<h4 style="color: red; text-align: center;">Wednesday</h4>
									<div class="imgsamplemenu iconsam1"><img class="alignnone size-full wp-image-238" src="http://35.193.58.110/wp-content/uploads/2018/06/day3.jpg" alt="" width="256" height="256" /></div>
									<div style="text-align: left; font-weight: bold; padding: 2px 30px; background-color: #fef2ea; border-top: 1px solid #bdbcbc; border-bottom: 1px solid #bdbcbc; color: #ff4200;">

									Lunch

									</div>
									<div>
									<ul>
									 	<li>Chapati :5</li>
									<li>Dish :									
<?php


	$sql = "Select Name from menu";	
 $data = $database->query($sql)->fetchAll();
// somewhere later:

							echo "<select  name='dish4' style='display: inline' >";
												$selected = isset($_POST['dish4']) ? $_POST['dish4'] : '';
foreach ($data as $row) {

												echo '<option value="'. $row['Name'] .'"'.(($row['Name']==$selected)?' selected':'').'>'. $row['Name'] .'</option>';
}
echo "</select>";

?>
												</li>
									 		<li>Dish :									
<?php

	$sql = "Select Name from menu";	
 $data = $database->query($sql)->fetchAll();
// somewhere later:

							echo "<select  name='dish5' style='display: inline' >";
												$selected = isset($_POST['dish5']) ? $_POST['dish5'] : '';
foreach ($data as $row) {

												echo '<option value="'. $row['Name'] .'"'.(($row['Name']==$selected)?' selected':'').'>'. $row['Name'] .'</option>';
}
echo "</select>";

?>
												</li>
									 
									</ul>
									</div>
								</div>
							</div>
					</div>
					<div class = "row samplemenu samplecenterdiv">
							<div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
								<div style="background-color: lightblue;">
									<h4 style="color: red; text-align: center;">Thursday</h4>
									<div class="imgsamplemenu iconsam1"><img class="alignnone size-full wp-image-240" src="http://35.193.58.110/wp-content/uploads/2018/06/day4.jpg" alt="" width="256" height="256" /></div>
									<div style="text-align: left; font-weight: bold; padding: 2px 30px; background-color: #fef2ea; border-top: 1px solid #bdbcbc; border-bottom: 1px solid #bdbcbc; color: #ff4200;">
									Lunch
									</div>
									<div>
										<ul>
										 	<li>Chapati :5</li>
										 	<li>Dish :								
<?php
;

	$sql = "Select Name from menu";	
 $data = $database->query($sql)->fetchAll();
// somewhere later:

							echo "<select  name='dish6' style='display: inline' >";
												$selected = isset($_POST['dish6']) ? $_POST['dish6'] : '';
foreach ($data as $row) {

												echo '<option value="'. $row['Name'] .'"'.(($row['Name']==$selected)?' selected':'').'>'. $row['Name'] .'</option>';
}
echo "</select>";

?>
												</li>
									 		<li>Dish :									
<?php

	$sql = "Select Name from menu";	
 $data = $database->query($sql)->fetchAll();
// somewhere later:

							echo "<select  name='dish7' style='display: inline' >";
												$selected = isset($_POST['dish7']) ? $_POST['dish7'] : '';
foreach ($data as $row) {

												echo '<option value="'. $row['Name'] .'"'.(($row['Name']==$selected)?' selected':'').'>'. $row['Name'] .'</option>';
}
echo "</select>";

?>
												</li>
										 
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
								<div style="background-color: lightblue;">
									<h4 style="color: red; text-align: center;">Friday</h4>
									<div class="imgsamplemenu iconsam1"><img class="alignnone size-full wp-image-241" src="http://35.193.58.110/wp-content/uploads/2018/06/day5.jpg" alt="" width="256" height="256" /></div>
									<div style="text-align: left; font-weight: bold; padding: 2px 30px; background-color: #fef2ea; border-top: 1px solid #bdbcbc; border-bottom: 1px solid #bdbcbc; color: #ff4200;">

									Lunch

									</div>
										<div>
											<ul>
											 	<li>Chapati : 5</li>
											 	<li>Dish :									
<?php

	$sql = "Select Name from menu";	
 $data = $database->query($sql)->fetchAll();
// somewhere later:

							echo "<select  name='dish8' style='display: inline' >";
												$selected = isset($_POST['dish8']) ? $_POST['dish8'] : '';
foreach ($data as $row) {

												echo '<option value="'. $row['Name'] .'"'.(($row['Name']==$selected)?' selected':'').'>'. $row['Name'] .'</option>';
}
echo "</select>";


?>
												</li>
									 		<li>Dish :									
<?php


	$sql = "Select Name from menu";	
 $data = $database->query($sql)->fetchAll();
// somewhere later:

							echo "<select  name='dish9' style='display: inline' >";
												$selected = isset($_POST['dish9']) ? $_POST['dish9'] : '';
foreach ($data as $row) {

												echo '<option value="'. $row['Name'] .'"'.(($row['Name']==$selected)?' selected':'').'>'. $row['Name'] .'</option>';
}
echo "</select>";


?>
												</li>
											 
											</ul>
										</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
									<div style="background-color: lightblue;">
										<h4 style="color: red; text-align: center;">Saturday</h4>
										<div class="imgsamplemenu iconsam1"><img class="alignnone size-full wp-image-242" src="http://35.193.58.110/wp-content/uploads/2018/06/day6.png" alt="" width="256" height="256" /></div>
										<div style="text-align: left; font-weight: bold; padding: 2px 30px; background-color: #fef2ea; border-top: 1px solid #bdbcbc; border-bottom: 1px solid #bdbcbc; color: #ff4200;">

											Lunch
										</div>
											<div class= "mTopBot15 lunchbg">
												<ul>
												 	<li>Chapati : 5</li>
												 	<li>Dish :									
<?php

	$sql = "Select Name from menu";	
 $data = $database->query($sql)->fetchAll();
// somewhere later:

							echo "<select  name='dish10' style='display: inline' >";
												$selected = isset($_POST['dish10']) ? $_POST['dish10'] : '';
foreach ($data as $row) {

												echo '<option value="'. $row['Name'] .'"'.(($row['Name']==$selected)?' selected':'').'>'. $row['Name'] .'</option>';
}
echo "</select>";


?>
												</li>
									 		<li>Dish :									
<?php

	$sql = "Select Name from menu";	
 $data = $database->query($sql)->fetchAll();
// somewhere later:

							echo "<select  name='dish11' style='display: inline' >";
												$selected = isset($_POST['dish11']) ? $_POST['dish11'] : '';
foreach ($data as $row) {

												echo '<option value="'. $row['Name'] .'"'.(($row['Name']==$selected)?' selected':'').'>'. $row['Name'] .'</option>';
}
echo "</select>";

?>
												</li>
											
												</ul>
												</div>
											</div>
										</div>
									</div>
							</div>
					</div>
				</div>
			</div>	
</section>



<!-- <div>From: <input type="text" id="datepickerf"></div>
<div>To: <input type="text" id="datepickert"></div>
!-->

<input id="submit" type="submit" value="Book your meal" name ="submit">
</form>
<?php


//try {


   
if(isset($_POST['submit'])){
	
	
	$args=[];
	$args['CustomerId'] = $session->username;//$_POST['customerID'] ?? NULL;
	$args['Dish'] = $_POST['dish'] ?? NULL;
	$args['Dish1'] = $_POST['dish1'] ?? NULL;
	$args['Dish2'] = $_POST['dish2'] ?? NULL;
	$args['Dish3'] = $_POST['dish3'] ?? NULL;
	$args['Dish4'] = $_POST['dish4'] ?? NULL;
	$args['Dish5'] = $_POST['dish5'] ?? NULL;
	$args['Dish6'] = $_POST['dish6'] ?? NULL;
	$args['Dish7'] = $_POST['dish7'] ?? NULL;
	$args['Dish8'] = $_POST['dish8'] ?? NULL;
	$args['Dish9'] = $_POST['dish9'] ?? NULL;
	$args['Dish10'] = $_POST['dish10'] ?? NULL;
	$args['Dish11'] = $_POST['dish11'] ?? NULL;
	
	
	$custorder = new CustOrder($args);
	
    $result = 	$custorder->create();
	
	if($result ===true){
//		$new_id = $custorder->OrderId;
//	header("location: index.php");
	}else{
	//	header("location:customerorders.php");
	//	echo "hello";
	}
}
	

?>
	

			<?php include('SignInModal.php');?>
<?php include('SignUpModal.php');?>
	<?php include("footer.php");?>
</body>
</html>
