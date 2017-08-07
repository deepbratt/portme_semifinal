<!DOCTYPE html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Portme</title>
        <!--  Favicon -->
		<?php
			include('meta_links.php');
		?>
    </head>
    <body>
        <!-- ==============================================
                     **PRE LOADER**
        =============================================== -->
        <div id="page-loader">
            <div class="loader-container">
                <div class="loader-logo">
                    <span>LOADING</span>
                </div>
                <div class="loader"></div>
            </div>
        </div>
        <!-- ==============================================
                     **MAIN HEADER**
        =============================================== -->
				<?php
					include('header.php');
				?>
        <!-- ==============================================
                             **MAIN BANNER**
        =============================================== -->
        <section class="main-banner paraxify banner-image-1 ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-banner-content text-center">
                            <h2>Registration</h2>
                            <ul class="breadcrumbs">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Registration</a></li>
                            </ul>
                            <p>Register for get the Features and Attractions</p>
                        </div>
                    </div>
                </div>
            </div><!-- End Container -->
        </section><!-- End Section -->
        <!-- ==============================================
                             **FUNCTIONALITIES**
        =============================================== -->
		
		<section class="contact ptb-80">
            <div class="container">
                <div class="row">
				
				<?php
				if(isset($data) && $data == "success"){
			?>
				<p style="text-align:center;background:#5cb85c;border:1px solid #CCC;border-radius:5px;padding:5px;color:#fff;font-weight:bold;"> Registration Successfull </p>
			<?php
			}else if(isset($data) && $data == "error"){
			?>
				<p style="text-align:center;background:#e54e53;border:1px solid #CCC;border-radius:5px;padding:5px;color:#fff;font-weight:bold;"> Something went wrong! please try again later. </p>

			<?php
			}else if(isset($data) && $data == "email"){
			?>
				<p style="text-align:center;background:#e54e53;border:1px solid #CCC;border-radius:5px;padding:5px;color:#fff;font-weight:bold;"> Email Already Exists! Try using another email. </p>
			<?php
			}
			?>

                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                        <form autocomplete="off" novalidate="novalidate" id="ContactForm" name="contact-form">
                            <h3>Sign Up</h3>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group ptb-10">
                                        <input placeholder="Enter your full name" class="form-control" name="full_name" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group ptb-10">
                                        <input placeholder="Enter your email" name="email" class="form-control" type="email">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group ptb-10">
                                        <input placeholder="Enter your Number" name="Phone" class="form-control" type="text">
                                    </div>
                                </div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group ptb-10">
                                        <input placeholder="Enter your Business Name" name="business" class="form-control" type="text">
                                    </div>
                                </div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group ptb-10">
                                        <input placeholder="Enter your Country" name="country" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group ptb-10">
                                        <input placeholder="Enter your GST Id" name="gstin" class="form-control" type="text">
                                    </div>
                                </div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group ptb-10">
                                        <input placeholder="Enter your password" name="password" class="form-control" type="text">
                                    </div>
                                </div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group ptb-10">
                                        <input placeholder="Confirm your password" name="confirm_password" class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-theme-primary btn-left" type="submit" name="submit">Register</button>
                        </form>
                    </div>
                    
					 <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="contact-address">
                            <div class="single-content">
                                <i class="ti-map-alt" aria-hidden="true"></i>
                                <h5>OFFICE ADDRESS</h5>
                                <p>Head office 12 sector 7, Ada Rood-15 H#12 Texas, USA</p>
                            </div>
                            <div class="single-content">
                                <i class="ti-mobile" aria-hidden="true"></i>
                                <h5>Phone</h5>
                                <p>+01 87676646</p>
                            </div>
                            <div class="single-content">
                                <i class="ti-email" aria-hidden="true"></i>
                                <h5>Email</h5>
                                <p>info@fedrex.com</p>
                            </div>
                        </div>
                    </div>
					
                </div>
            </div><!-- End Container -->
        </section><!-- End Section -->

        <!-- ==============================================
                             **FOOTER STARTS**
        =============================================== -->        
                <?php
					include('footer.php');
				?>  
				<!-- End Footer -->
				
        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Modenizer JS -->
        <script src="js/modernizr-custom.js"></script>
        <!-- Bootsvav Menu -->
        <script src="assets/bootsnav-master/js/bootsnav.js" type="text/javascript"></script>
        <!-- Parallax -->
        <script src="js/paraxify.min.js" type="text/javascript"></script>
        <!-- Way Points -->
        <script src="js/waypoints.min.js" type="text/javascript"></script>
        <!-- Conterup -->
        <script src="js/jquery.counterup.min.js" type="text/javascript"></script>
        <!-- Custom JS -->
        <script src="js/custom.js"></script>
        <!-- ==============================================
                ** STYLE SWITCHER-ONLY FOR DEMO PURPOSE**
        =============================================== -->
        <div id="style-switcher">
            <div id="toggle-switcher"><i class="fa fa-cog"></i></div>
            <h1>Change Color</h1>
            <ul>
                <li><img src="images/color_01.jpg" alt="" /></li>
                <li><img src="images/color_02.jpg" alt="" /></li>
                <li><img src="images/color_03.jpg" alt="" /></li>
                <li><img src="images/color_04.jpg" alt="" /></li>
                <li><img src="images/color_05.jpg" alt="" /></li>
                <li><img src="images/color_06.jpg" alt="" /></li>
            </ul>
        </div>
        <!--Style Switcher Script-->
        <script src="js/style-switcher.js"></script>
        <!--End Style Switcher-->
    </body>
</html>
