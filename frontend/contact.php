<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Portme</title>
        <!-- Favicon -->
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
                            <h2>Contact Us</h2>
                            <ul class="breadcrumbs">
                                <li><a href="#">Home</a></li>
                                <li>Contact Us</li>
                            </ul>
                            <p>Get touch with us</p>
                        </div>
                    </div>
                </div>
            </div><!-- End Container -->
        </section><!-- End Section -->
        <!-- ==============================================
                             **CONTACT SECTION**
        =============================================== -->
        <section class="contact ptb-100">
            <div class="container">
                <div class="super-title">
                    <h2>Get in Touch</h2>
                    <div class="seperator"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pellentesque efficitur turpis, vitae dictum dolor tristique in.</p>
                </div>
                <div class="row">

                    <div class="col-lg-9 col-md-8 col-sm-6 col-xs-12">
                        <form autocomplete="off" novalidate="novalidate" id="ContactForm" name="contact-form">
                            <h5>SEND US EMAIL</h5>
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
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group ptb-10">
                                        <input placeholder="Subject" name="subject" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group ptb-10">
                                        <textarea placeholder="Write your message" class="form-control" name="message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-theme-primary">Send Message</button>
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
                             **GOOGLE MAP**
        =============================================== -->
        <div id="google-map-area" >
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58869.46323363896!2d88.3341462428161!3d22.75270623300934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89aefcc6fe3a7%3A0x6a6d434ac504dbc5!2sBarrackpore%2C+West+Bengal!5e0!3m2!1sen!2sin!4v1501497639230" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
         <!-- ==============================================
                             **FOOTER STARTS**
        =============================================== -->        
				<?php
					include('footer.php');
				?><!-- End Footer -->
        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Modenizer JS -->
        <script src="js/modernizr-custom.js"></script>
        <!-- Bootsvav Menu -->
        <script src="js/bootsnav.js" type="text/javascript"></script>
        <!-- Parallax -->
        <script src="js/paraxify.min.js" type="text/javascript"></script>
        <!-- Custom JS -->
        <script src="js/custom.js"></script>
        <!-- ==============================================
                ** STYLE SWITCHER-ONLY FOR DEMO PURPOSE**
        =============================================== -->
       
        <!--Style Switcher Script-->
        <script src="js/style-switcher.js"></script>
        <!--End Style Switcher-->
    </body>
</html>