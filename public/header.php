
		<header>
			<ul id="left-nav">
				<li><a href="">Logo</a></li>
			</ul>
			<ul id="right-nav">
				<li><a href="index.php">Home</a></li>
				
				
				<li><a href="fullmenu.php">Menu</a></li>			
				<li><a href="ContactUs.php">Contact US</a></li>
				<li><a href="AboutUS.php">About Us</a></li>
			
				
				
				<?php if(!$session->is_logged_in()){ ?>
						<li><a href="#" id="myBtn">Login</a> </li>
			<li><a href="#" id=signupButton>Sign Up</a></li>
		 <?php }?>
					<?php if($session->is_logged_in()){ ?>
				<li><a href="Order.php">Order</a></li>	
					<li><a href="customerorders.php">Cust Order</a></li>
					<li><a href="logout.php">Log Out</a></li>
					
				<?php }?>

				<style>
					/*	body{
						background: #bdf1dd;
						margin:0px;
						padding: 0px;
					}
					*/
					a{
						color:#fff;
						text-decoration: none;
					}
					header{
						background: #322a2a;
						height: 70px;
					}
					#left-nav{
						float:left;
					}
					#right-nav{
						float:right;
					}
					ul li{
						list-style-type: none;
					}
					#right-nav li{
					display:inline-block;
					margin:10px}


				/*	footer{
						clear:both;
						background: #322a2a;
						margin-top:50px;
						text-align: center;
						padding:10px;
						color : #fff;
					}
					*/
				</style>
		</header>
		
	
