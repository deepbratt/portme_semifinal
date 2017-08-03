    <style type="text/css">
  

	  .arrow {
		position: absolute;
		bottom: 2%;
		left: 50%;
		margin-left: -20px;
		width: 40px;
		height: 40px;
		background-image: url(images/down-arrow.svg);
		background-size: contain;
		z-index: 9;
	}
	.bounce {
		-webkit-animation-name: bounce;
		animation-name: bounce;
		-webkit-transform-origin: center bottom;
		transform-origin: center bottom;
	}
	.bounce {
		-webkit-animation: bounce 2s infinite;
		animation: bounce 2s infinite;
	}
.mob_manu {
    display: none;
}

/* Style the Image Used to Trigger the Modal */
#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
	color: #e52d2d;
}

#myImg:hover 
{
	opacity: 0.5;


}



@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #e52d2d;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #e52d2d;
    text-decoration: none;
    cursor: pointer;
}

.hvr-underline-from-center {
    display: inline-block;
    vertical-align: middle;
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
    box-shadow: 0 0 1px rgba(0, 0, 0, 0);
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -moz-osx-font-smoothing: grayscale;
    position: relative;
    overflow: hidden;
}
.hvr-underline-from-center:before {
    content: "";
    position: absolute;
    z-index: -1;
    left: 50%;
    right: 50%;
    bottom: 0;
    background: #e52d2d;
    height: 4px;
    -webkit-transition-property: left, right;
    transition-property: left, right;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out;
}
.hvr-underline-from-center:hover:before, .hvr-underline-from-center:focus:before, .hvr-underline-from-center:active:before {
    left: 0;
    right: 0;
}


	</style>

	   <header class="header-wrapper solid-bg">
            <nav class="navbar navbar-default navbar-fixed white no-background bootsnav">
               
                <div class="container-fluid"> 
                    <!-- Start Atribute Navigation -->
                         
                    <!-- End Atribute Navigation -->
                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="#brand">

                            <img src="images/logo_light.png" class="logo logo-display" alt="">
                            <img src="images/logo_dark.png" class="logo logo-scrolled" alt="">

                        </a>
                    </div>
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">

                        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">

                            <li><a href="index.php" class="btn btn-outline-primary hvr-underline-from-center">Home</a></li>
                            <li><a href="features.php" class="btn btn-outline-primary hvr-underline-from-center">Features</a></li>
                            <li><a href="pricing.php" class="btn btn-outline-primary hvr-underline-from-center">Pricing</a></li>
                            <li><a href="contact.php" class="btn btn-outline-primary hvr-underline-from-center">Contact</a></li>
							<li><a href="login.php" class="btn btn-outline-primary hvr-underline-from-center">Log In</a></li>
                           
							<button type="button" style="border: 0px none;color:#fff; margin-top:15px !important;" class="btn btn-danger btn-lg hvr-underline-from-center"><a href="signup.php" style="color:#fff !important;">Get Started</a></button>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- End Container-->
              
            </nav>
            <!-- End Navigation -->

        </header>