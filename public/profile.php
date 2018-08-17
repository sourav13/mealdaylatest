<?php
	include('session.php');
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		  <!-- Latest compiled and minified CSS -->
		<?php include("libbootandjq.php");?>
		<?php include("header.php");?>
			<?php 
				$sql = "select * from users where email='$login_session'";
				$result = $connection->query($sql);
				$row = $result->fetch_assoc();
			?>
		<!-- append this to ul and remove login and signup from header if possible. or include a different headers for both pages.!-->
		
			<b>Welcome : <?php echo $row["Name"]?></b>
				<b><a href="logout.php">Log Out</a></b>
		
		<style>
			  .modal-header,#container h4, .closee {
			      background-color: #5cb85c;
			      color:white !important;
			      text-align: center;
			      font-size: 30px;
			  }
			  .modal-footer {
			      background-color: #f9f9f9;
			  }
			  
			  
			 * {box-sizing: border-box;} 
				body {font-family: Verdana, sans-serif;}
				.mySlides {display: none;}
				img {vertical-align: middle;}

				/* Slideshow container */
				.slideshow-container {
				  max-width: 100%;
				  position: relative;
				  margin: auto;
				  padding-top: 28px;
				}



					/* The dots/bullets/indicators */
				.dot {
				  height: 15px;
				  width: 15px;
				  margin: 0 2px;
				  background-color: #bbb;
				  border-radius: 50%;
				  display: inline-block;
				  transition: background-color 0.6s ease;
				}

				.active {
				  background-color: #717171;
				}

				/* Fading animation */
				.fade {
				  -webkit-animation-name: fade;
				  -webkit-animation-duration: 1.5s;
				  animation-name: fade;
				  animation-duration: 1.5s;
				}

				@-webkit-keyframes fade {
				  from {opacity: .4} 
				  to {opacity: 1}
				}

				@keyframes fade {
				  from {opacity: .4} 
				  to {opacity: 1}
				}

				/* On smaller screens, decrease text size */
				@media only screen and (max-width: 300px) {
				  .text {font-size: 11px}
				}
  		</style>
	    <script>
		    $(document).ready(function(){
		        $("#myBtn").click(function(){
		            $("#loginmyModal").modal();
		        });
		    });
	 	</script>
	    <script>
		    $(document).ready(function(){
		        $("#signupButton").click(function(){
		            $("#SignUpmyModal").modal();
		        });
		    });
	    </script>
</head>
<body>
<div class="slideshow-container">

  <div class="mySlides fade">
   
    <img src="images/photo.jpg" style="width:100%">
   
  </div>

  <div class="mySlides fade">
    
    <img src="images/photo1.jpg" style="width:100%">
    
  </div>

  <div class="mySlides fade">
    
    <img src="images/photo2.jpg" style="width:100%">
    
  </div>
</div>
<br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<script>
  var slideIndex = 0;
  showSlides();

  function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
         slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 1000); // Change image every 2 seconds
  }
</script>
<div class="container">
  <div class=" modal fade" id="loginmyModal" role="dialog">
    <div class="modal-dialog"> 
      <!-- Modal content-->
      <div class="modal-content">
          <div class="login-modal-header" style="padding:35px 50px;">
    
              <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
              </div>
                   <div class="modal-body" style="padding:40px 50px;">
                  <form role="form" action="" method="POST">
                    <div class="form-group">
                      <label for="usrname"><span class="glyphicon glyphicon-user"></span> Email</label>
                      <input type="text" class="form-control" id="usrname" name = "email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                      <input type="text" class="form-control" id="psw" name = "password" placeholder="Enter password">
                    </div>
                    <div class="checkbox">
                      <label><input type="checkbox" value="" checked>Remember me</label>
                    </div>
                      <button type="submit" name="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-log-in"></span> Login</button>                     
						<div>
							<?php
								echo $message;
							?>
						</div>
                  </form>
                </div>
            
          
             </div>
        </div> 
    </div>
</div>
<div class="container">
  <div class=" modal fade" id="SignUpmyModal" role="dialog">
     <div class="modal-dialog"> 
      <!-- Modal content-->
      <div class="modal-content">
      <div class="signUp-modal-header" style="padding:35px 50px;">
    
        <h4><span class="glyphicon glyphicon-lock"></span> Sign Up</h4>
      </div>
      <div class="modal-body" style="padding:40px 50px;">
        <form role="form">
            <div class="form-group">
                <label for="name"><span class="glyphicon glyphicon-user"></span>  Name</label>
                <input type="text" class="form-control" id="firstname" placeholder="Enter Name">
                <label for="username"><span class="glyphicon glyphicon-user"></span> User Name</label>
                <input type="text" class="form-control" id="lastname" placeholder="Enter User Name">
                <label for="email"><span class="glyphicon glyphicon-envelope"></span>  Email</label>
                <input type="text" class="form-control" id="email" placeholder="Enter Email">
            </div>
            <div class="form-group">
                  <label for="address"><span class="glyphicon glyphicon-home"></span>Address</label>
                <input type="text" class="form-control" id="address" placeholder="Enter Address">
                <label for="phone"> <span class="glyphicon glyphicon-phone"></span>Phone</label>
                <input type="text" class="form-control" id="psw" placeholder="Enter Phone">
                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                <input type="text" class="form-control" id="psw" placeholder="Enter password">
            </div>
            <div class="checkbox">
                <label><input type="checkbox" value="" checked>Remember me</label>
              </div>
                <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-log-in"></span> Sign Up</button>
        </form>
      </div>
        
      
    </div>
    </div> 
  </div>
</div>
<br>
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
<?php include("footer.php");?>
</body>
</html>



