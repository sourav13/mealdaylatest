  <style>
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