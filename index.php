 <?php require_once('private/initialize.php'); ?> 
<?php
include('public/login.php');


/*if(isset(($_SESSION['login_persons']))){
	$persons_check = $_SESSION['login_persons'];
			$sql = "select * from users where email='$persons_check'";
			$result = $connection->query($sql);
			$row = $result->fetch_assoc();
}
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5a1a7986bb0c3f433d4cb466/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
		<title></title>
		  <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
 <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		  <!-- Latest compiled and minified CSS -->
		  
		<?php include("libbootandjq.php");?>
		<?php include("header.php");?>
		
		<?php include("Slideshowstyle.php");?>
			
	   <?php include('SignIn.php');?>
	   <?php include('SignUpAction.php');?>
	   

</head>
<body>

<?php include('public/Slideshow.php');?>
<?php include('public/SignInModal.php');?>
<?php include('public/SignUpModal.php');?>
<br>
	 
		<!-- append this to ul and remove login and signup from header if possible. or include a different headers for both pages.!-->
	
<p>
	<div class="quotations" style= "padding-left:10px;padding-top:10px; margin:auto;">
				Welcome to Meal of the Day which means community kitchen, a
				place for the best Indian food in Brampton. We bring delicious traditional Indian
				Vegetarian and Nonvegetarian food to the Brampton area. We offer Tiffin delivery
				service which is a relief for students away from home, workers or anyone looking
				for hot, healthy and homely food at lowest possible price served on the daily
				basis. Our mission is to be a developing a new website for offering home cooked,
				quality food. Our Tiffin is served hot and fresh daily which comes with vegetables,
				rotisserie, rice along with delicious cool raita. As introductory offer, it has 2
				sweets at no additional cost. Everyday our tiffin comes with freshly prepared
				different vegetables and is always a surprise for you. 
				</div>
</p>

         <!-- Testimonials -->
        <div class="testimonials-container section-container section-container-image-bg">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 testimonials section-description">
	                	<h2>Customer Response</h2>
	                    <p class="medium-paragraph">Take a look below to learn what our clients are saying about us:</p>
	                </div>
	            </div>
	            <div class="row">
	                <div class="col-sm-10 col-sm-offset-1 testimonial-list">
	                	<div role="tabpanel">
	                		<!-- Tab panes -->
	                		<div class="tab-content">
	                			<div role="tabpanel" class="tab-pane fade in active" id="tab1">
	                				<div class="testimonial-image">
	                					<img src="assets/img/testimonials/11.jpg" alt="t1">
	                				</div>
	                				<div class="testimonial-text">
		                                <p>
		                                	The food of mealofday give the homefelling.<br>
		                                	
		                                </p>
	                                </div>
	                			</div>
	                			<div role="tabpanel" class="tab-pane fade" id="tab2">
	                				<div class="testimonial-image">
	                					<img src="assets/img/testimonials/22.jpg" alt="t2">
	                				</div>
	                				<div class="testimonial-text">
		                                <p>
		                                	It deliver the food on time.<br>
		                                	
		                                </p>
	                                </div>
	                			</div>
	                			<div role="tabpanel" class="tab-pane fade" id="tab3">
	                				<div class="testimonial-image">
	                					<img src="assets/img/testimonials/33.jpg" alt="t3">
	                				</div>
	                				<div class="testimonial-text">
		                                <p>
		                                	i love the food of this tiffin service...<br>
		                                	
		                                </p>
	                                </div>
	                			</div>
	                			<div role="tabpanel" class="tab-pane fade" id="tab4">
	                				<div class="testimonial-image">
	                					<img src="assets/img/testimonials/44.jpg" alt="t4">
	                				</div>
	                				<div class="testimonial-text">
		                                <p>
		                                	love to eat.....<br>
		                                	
		                                </p>
	                                </div>
	                			</div>
	                		</div>
	                		<!-- Nav tabs -->
	                		<ul class="nav nav-tabs" role="tablist">
	                			<li role="presentation" class="active">
	                				<a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"></a>
	                			</li>
	                			<li role="presentation">
	                				<a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"></a>
	                			</li>
	                			<li role="presentation">
	                				<a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab"></a>
	                			</li>
	                			<li role="presentation">
	                				<a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab"></a>
	                			</li>
	                		</ul>
	                	</div>
	                </div>
	            </div>
	        </div>
        </div>
        
  


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>


<?php include("public/footer.php");?>
</body>
</html>
