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
                     **MAIN HEADER**
        =============================================== -->
				<?php
					include('header.php');
				?>
        <!-- ==============================================
                             **MAIN BANNER**
        =============================================== -->
       

		<section class="demo-request ">
			<div class="whtscoch" id="whtscoch">
				<div class="container">
				  <h1>Port-ME <span style="color:#c0392b;">Registration/span></h1> 
				  <p>Register for get the Features and Attractions</p>
				</div>
			</div>
		</section>
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

        <div class="container">
			<div class="row main">
				<div class="col-md-9 main-login main-center">
				
					<form autocomplete="off" novalidate="novalidate" id="ContactForm" name="contact-form">
                            <h3>Sign Up</h3>
                            <div class="row">
							
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding:5px;">
                                <div class="input-group">
									<span class="input-group-addon" style="background:white;"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" style="background:#f0f0f0;" name="name" id="name"  placeholder="Enter your Name"/>
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
									<input type="text" class="form-control" style="background:#EEEEEE;" name="entrprice" id="entrprice"  placeholder="Enter your Enterprice name"/>
								</div>
                                </div>
								
							
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding:5px;">
                                <div class="input-group">
									<span class="input-group-addon" style="background:white;"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" style="background:#EEEEEE;" name="phone" id="phone"  placeholder="Enter your phone number"/>
								</div>
                                </div>
								
						
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding:5px;">
                            <div class="input-group">
								<span class="input-group-addon" style="background:white;"><i class="fa fa-building fa" aria-hidden="true"></i></span>
								<input type="text" class="form-control" name="Business" style="background:#EEEEEE;" id="Business"  placeholder="Enter your Business"/>
							</div>
							</div>


					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding:5px;">
					 <div class="input-group">
					<span class="input-group-addon" style="background:white;"><i class="fa fa-building fa" aria-hidden="true"></i></span>
					<div class="form-group  feedback-left">
					
						<select name="type" class="form-control" style="background:#EEEEEE;">
							<option value="" selected disabled> Type of your business </option>
							<option value="Accounting Services"> Accounting Services </option>
							<option value="Administrative Services "> Administrative Services </option>
							<option value="Advertising, Creative Design, Media and Marketing Services"> Advertising, Creative Design, Media and Marketing Services </option>
							<option value="Agriculture, Farming, Fishing and Forestry"> Agriculture, Farming, Fishing and Forestry </option>
							<option value="Amusement, Gambling, and Recreation"> Amusement, Gambling, and Recreation </option>
							<option value="Animal Services"> Animal Services </option>
							<option value="Architectural, Engineering, Design and Related Services"> Architectural, Engineering, Design and Related Services </option>
							<option value="CA/TAX Consultant"> CA/TAX Consultant </option>
							<option value="Care Givers"> Care Givers </option>
							<option value="Charity, Nonprofits and Similar Groups"> Charity, Nonprofits and Similar Groups </option>
							<option value="Church"> Church </option>
							<option value="Computer Systems Design and Related Services"> Computer Systems Design and Related Services </option>
							<option value="Construction"> Construction </option>
							<option value="Consulting, Professional and Technical Services"> Consulting, Professional and Technical Services </option>
							<option value="Educational Services"> Educational Services </option>
							<option value="Finance and Insurance"> Finance and Insurance </option>
							<option value="Food & Beverage Establishments"> Food & Beverage Establishments </option>
							<option value="Freelancer"> Freelancer </option>
							<option value="General Service-Based Business"> General Service-Based Business </option>
							<option value="Hair Salons, Barbers and Spas"> Hair Salons, Barbers and Spas </option>
							<option value="Healthcare Services"> Healthcare Services </option>
							<option value="Human Resources and Placement Consulting"> Human Resources and Placement Consulting </option>
							<option value="IT & Telecommunications"> IT & Telecommunications </option>
							<option value="Land and Property including Management"> Land and Property including Management </option>
							<option value="Landscaping and Gardening Services"> Landscaping and Gardening Services </option>
							<option value="Learning Institutes"> Learning Institutes </option>
							<option value="Legal Services"> Legal Services </option>
							<option value="Manufacturers"> Manufacturers </option>
							<option value="Manufacturing and Mining"> Manufacturing and Mining </option>
							<option value="Performing Arts, Spectator Sports, and Related Industries"> Performing Arts, Spectator Sports, and Related Industries </option>
							<option value="Repair and Maintenance Services"> Repair and Maintenance Services </option>
							<option value="Retail Shops, Mail Order and Online"> Retail Shops, Mail Order and Online </option>
							<option value="Transportation and Warehousing"> Transportation and Warehousing </option>
							<option value="Travel and Tourism Services"> Travel and Tourism Services </option>
							<option value="Vehicle Sales, Maintenance and Repairs"> Vehicle Sales, Maintenance and Repairs </option>
							<option value="Whole-sellers"> Whole-sellers </option>
							<option value="Wholesale Trade and Distributors"> Wholesale Trade and Distributors </option>
						</select>
						<span class="gcon gcon-box f-s-xs form-control-feedback" aria-hidden="true"></span>
					</div><!-- /.form-group -->
							
				</div>
                                </div>

                            </div>
                            <a href="index.php"><button class="btn btn-theme-primary btn-left" style="padding:5px; background:#f73347;" type="submit" name="submit">Register</button></a>
							<p class="text-center text-muted small m-a-0" style="align:center;">
							Already have an account? <a href="https://portme.co/app">Login here</a>
							</p>
                        </form>
					
				</div>
				
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="background:#f73347; padding:10px;margin-top:29px;">
                        <div class="contact-address">
                            <div class="single-content">
                                <i class="ti-map-alt" ></i>
                                <h5>OFFICE ADDRESS</h5>
                                <p>Head office 12 sector 7, Ada Rood-15 H#12 Texas, USA</p>
                            </div>
                            <div class="single-content">
                                <i class="ti-mobile"></i>
                                <h5>Phone</h5>
                                <p>+01 87676646</p>
                            </div>
                            <div class="single-content">
                                <i class="ti-email"></i>
                                <h5>Email</h5>
                                <p>info@fedrex.com</p>
                            </div>
                        </div>
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
        
        <!--Style Switcher Script-->
        <script src="js/style-switcher.js"></script>
        <!--End Style Switcher-->
    </body>
</html>
