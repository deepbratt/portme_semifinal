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
                            <p>Get in touch with us</p>
                        </div>
                    </div>
                </div>
            </div><!-- End Container -->
        </section><!-- End Section -->
        <!-- ==============================================
                             **CONTACT SECTION**
        =============================================== -->
        <section class="contact ptb-80">
            <div class="container">
                <div class="super-title">
                    <h2>HAVE ANY QUERY</h2>
                    <div class="seperator"></div>
                    <p>Feel free to contact us with questions, partnership proposals, media inquiries, or just to say “hi.” .</p>
                </div>
                <div class="row">

                    <div class="col-lg-9 col-md-8 col-sm-6 col-xs-12">
                        <form autocomplete="off" novalidate="novalidate" id="ContactForm" name="contact-form">
                            <h5>SEND US EMAIL</h5>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding:5px;">
                                <div class="input-group">
									<span class="input-group-addon" style="background:white;"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" style="background:#f0f0f0;" name="name" id="name"  placeholder="Enter your Full Name"/>
								</div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding:5px;">
                                <div class="input-group">
									<span class="input-group-addon" style="background:white;"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" style="background:#EEEEEE;" name="email" id="email"  placeholder="Enter your Email"/>
								</div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding:5px;">
                                <div class="input-group">
									<span class="input-group-addon" style="background:white;"><i class="fa fa-pencil" aria-hidden="true"></i></span>
									<input type="text" class="form-control" style="background:#EEEEEE;" name="subject" id="subject"  placeholder="Enter subject"/>
								</div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding:5px;">
                                <div class="input-group">
									<span class="input-group-addon" style="background:white;"><i class="fa fa-envelope-open" aria-hidden="true"></i></span>
									<input type="text" class="form-control" style="background:#EEEEEE;" name="message" id="message"  placeholder="Enter your message"/>
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
                                <p>Head office 12 sector 7, Ada Rood-15 H#12 Texas, India</p>
                            </div>
                            <div class="single-content">
                                <i class="ti-mobile" aria-hidden="true"></i>
                                <h5>Phone</h5>
                                <p>+01 87676646</p>
                            </div>
                            <div class="single-content">
                                <i class="ti-email" aria-hidden="true"></i>
                                <h5>Email</h5>
                                <p>portme.co</p>
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
				
       
    </body>
</html>