<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Port Me</title>
  <!-- Favicon -->
<?php
include("meta_links.php");
?>
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
      from {
        -webkit-transform:scale(0)}
      to {
        -webkit-transform:scale(1)}
    }
    @keyframes zoom {
      from {
        transform:scale(0)}
      to {
        transform:scale(1)}
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
    .headShake:hover {
      animation: pulse 0.82s cubic-bezier(.36,.07,.19,.97) both;
      transform: translate3d(0, 0, 0);
      backface-visibility: hidden;
      perspective: 1000px;
    }
    .headShake:hover:before {
      animation: pulse 0.82s cubic-bezier(.36,.07,.19,.97) both;
      transform: translate3d(0, 0, 0);
      backface-visibility: hidden;
      perspective: 1000px;
    }
  </style>
</head>
<body>

  <header class="header-wrapper solid-bg" style="">
    <nav class="navbar navbar-default navbar-fixed white bootsnav">
      <div class="container-fluid"> 

        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
            <i class="fa fa-bars">
            </i>
          </button>
          <a class="navbar-brand" href="#brand">
            <img src="images/logo_dark.png" class="logo logo-display" alt="">
            <img src="images/logo_dark.png" class="logo logo-scrolled" alt="">
          </a>
        </div>

        <div class="collapse navbar-collapse" id="navbar-menu">
          <ul class="nav navbar-nav navbar-right" data-in="fadeOutUp" data-out="fadeInDown">
            <li>
              <a href="index.php" class="btn btn-outline-primary hvr-underline-from-center">Home
              </a>
            </li>
            <li>
              <a href="features.php" class="btn btn-outline-primary hvr-underline-from-center">Features
              </a>
            </li>
            <li>
              <a href="pricing.php" class="btn btn-outline-primary hvr-underline-from-center">Pricing
              </a>
            </li>
            <li>
              <a href="contact.php" class="btn btn-outline-primary hvr-underline-from-center">Contact
              </a>
            </li>
            <li>
              <a href="login.php" class="btn btn-outline-primary hvr-underline-from-center">Log In
              </a>
            </li>
            <button type="button" style="border: 0px none;color:#fff; margin-top:15px !important;" class="btn btn-danger btn-lg hvr-underline-from-center">
              <a href="signup.php" style="color:#fff !important;">Get Started
              </a>
            </button>
          </ul>
        </div>

      </div>

    </nav>

  </header>

  <!-- End Section -->
  <!-- gst -->			
  <!-- End Container -->
  <div class="section_top " style="background: url('images/newdd2.png') no-repeat bottom center;background-size: contain;height:70% !important;">
    <div class="cont_top">				
      <div class="top_cont_heading  cont_wrap">
        <div id="home-news" style="margin-top:-13% !important">
          <div class="home_header">
            <span>The 
              <br>
              <strong style="color:#ff3333">operating system
              </strong> for business.
            </span>
          </div>
          <div class="home_header">
            <span>Simple 
              <br>
              <strong style="color:#ff3333"> accounting/Bookkeeping 
              </strong> software
            </span>
          </div>
          <div class="home_header">
            <span>Shockingly 
              <strong style="color:#ff3333"> easy.
              </strong> to use
            </span>
          </div>
        </div>
      </div>
    </div>	
    <!-- Trigger the Modal -->
    <div class="arrow bounce"></div>
    <div class="clear" ></div>

    <div class="cont_top ">
      <div class="row" >
		<div class="col-md-8 col-md-offset-2"  style="margin-top:10%;">

			<div class="col-md-3 col-sm-3 col-xs-3">
			  <div class="iconbox-center  headShake">
				<img  id="myImg" src="images/account.png" class="rounded mx-auto d-block img-responsive" alt="image">
				<h5 style="margin-top:10px; color:#232321;">ACCOUNTS
				</h5>
				<p>
				</p>
				<div class="clear" ></div>
			  </div>
			  <div class="clear" ></div>
			</div>

			<div class="col-md-3 col-sm-3 col-xs-3">
			  <div class="iconbox-center  headShake">
				<img  id="myImg" src="images/reports.png" class="rounded mx-auto d-block img-responsive" style="position:relative;" alt="image">
				<h5 style="margin-top:10px; color:#232321;">REPORTS
				</h5>
				<p>
				</p>
				<div class="clear" ></div>
			  </div>
			  <div class="clear" ></div>
			</div>

			<div class="col-md-3 col-sm-3 col-xs-3">
			  <div class="iconbox-center  headShake">
				<img  id="myImg" src="images/sales.png" class="rounded mx-auto d-block img-responsive" style="position:relative;" alt="image">
				<h5 style="margin-top:10px; color:#232321;">SALES
				</h5>
				<p>
				</p>
				<div class="clear" ></div>
			  </div>
			  <div class="clear" ></div>
			</div>

			<div class="col-md-3 col-sm-3 col-xs-3">
			  <div class="iconbox-center  headShake">
				<img  id="myImg" src="images/inventory.png" class="rounded mx-auto d-block img-responsive" style="position:relative;" alt="image">
				<h5 style="margin-top:10px; color:#232321;">INVENTORY
				</h5>
				<p>
				</p>
				<div class="clear" ></div>
			  </div>
			  <div class="clear" ></div>
			</div>

			<div class="clear" ></div>
		 </div>
      </div>

    </div>
  </div>
  <div class="clear" >
  </div>
  <section class="demo-request ">
    <div class="container text-center">
      <div class="request-title" style="padding:25px;">
        <h2>Start 
          <span>free
          </span> Fedrex trial!
        </h2>
        <p>5-minute setup, test out the Fedrex features for 30 days, no credit card required.
        </p>
      </div>
    </div>
  </section>
  <section id="features" class="fw-section layout-boxed without-overlay without-parallax" data-offset-top="10" style="margin-top:40px;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2 class="block-title text-dark text-center">GST Compliance Made Easy
            <small class="h4">
              <br>A powerful solution designed to automate your GST Compliance. 
            </small>
          </h2>
        </div>
      </div>
    </div>
  </section>
  <!-- Store Types Start -->
  <li style="width: 100%">
    <div class="row" style="margin-left:50px; margin-right:50px; margin-top:20px;">
      <div class="col-xs-12 col-sm-3 col-md-2 col-xl-2" >
        <div class="hd-shop-type-card" >
          <a href="javascript:void(0);">
            <div class="shop-type" style="background-image: url(images/pos-grocery-shop.jpg); ">
              <div class="shop-type-curtain">
              </div>
              <div class="store-title">
                <div class="hd-card-title">
                  <h5 style="color:white;"> 
                    Retails &nbsp;&nbsp; 
                    <i class="fa fa-play-circle">
                    </i>
                  </h5>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-xs-12 col-sm-3 col-md-2 col-xl-2">
        <div class="hd-shop-type-card">
          <a href="javascript:void(0);">
            <div class="shop-type" style="background-image: url(images/pos-garment-store.jpg);">
              <div class="shop-type-curtain">
              </div>
              <div class="store-title">
                <div class="hd-card-title">
                  <h5 style="color:white;">
                    Garments &nbsp;&nbsp; 
                    <i class="fa fa-play-circle">
                    </i>
                  </h5>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-xs-12 col-sm-3 col-md-2 col-xl-2">
        <div class="hd-shop-type-card">
          <a href="javascript:void(0);">
            <div class="shop-type" style="background-image: url(images/pos-appliance-store.jpg);">
              <div class="shop-type-curtain">
              </div>
              <div class="store-title">
                <div class="hd-card-title">
                  <h5 style="color:white;">
                    Electronics &nbsp;&nbsp; 
                    <i class="fa fa-play-circle">
                    </i>
                  </h5>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-xs-12 col-sm-3 col-md-2 col-xl-2">
        <div class="hd-shop-type-card">
          <a href="javascript:void(0);">
            <div class="shop-type" style="background-image: url(images/pos-Computer-Shop.jpg);">
              <div class="shop-type-curtain">
              </div>
              <div class="store-title">
                <div class="hd-card-title">
                  <h5 style="color:white;">
                    Computers &nbsp;&nbsp; 
                    <i class="fa fa-play-circle">
                    </i>
                  </h5>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-xs-12 col-sm-3 col-md-2 col-xl-2">
        <div class="hd-shop-type-card">
          <a href="javascript:void(0);">
            <div class="shop-type" style="background-image: url(images/pos-restaurent.jpg);">
              <div class="shop-type-curtain">
              </div>
              <div class="store-title">
                <div class="hd-card-title">
                  <h5 style="color:white;">
                    Restaurant &nbsp;&nbsp; 
                    <i class="fa fa-play-circle">
                    </i>
                  </h5>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-xs-12 col-sm-3 col-md-2 col-xl-2">
        <div class="hd-shop-type-card">
          <a href="javascript:void(0);">
            <div class="shop-type" style="background-image: url(images/pos-shoe-shop.jpg);">
              <div class="shop-type-curtain">
              </div>
              <div class="store-title">
                <div class="hd-card-title">
                  <h5 style="color:white;">
                    Shoes &nbsp;&nbsp; 
                    <i class="fa fa-play-circle">
                    </i>
                  </h5>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-xs-12 col-sm-3 col-md-2 col-xl-2">
        <div class="hd-shop-type-card">
          <a href="javascript:void(0);">
            <div class="shop-type" style="background-image: url(images/pos-book-store.jpg);">
              <div class="shop-type-curtain">
              </div>
              <div class="store-title">
                <div class="hd-card-title">
                  <h5 style="color:white;">
                    Books &nbsp;&nbsp; 
                    <i class="fa fa-play-circle">
                    </i>
                  </h5>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-xs-12 col-sm-3 col-md-2 col-xl-2">
        <div class="hd-shop-type-card">
          <a href="javascript:void(0);">
            <div class="shop-type" style="background-image: url(images/pos-sports-shop.jpg);">
              <div class="shop-type-curtain">
              </div>
              <div class="store-title">
                <div class="hd-card-title">
                  <h5 style="color:white;">
                    Sports &nbsp;&nbsp; 
                    <i class="fa fa-play-circle">
                    </i>
                  </h5>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-xs-12 col-sm-3 col-md-2 col-xl-2">
        <div class="hd-shop-type-card">
          <a href="javascript:void(0);">
            <div class="shop-type" style="background-image: url(images/pos-jewelry-shop.jpg);">
              <div class="shop-type-curtain">
              </div>
              <div class="store-title">
                <div class="hd-card-title">
                  <h5 style="color:white;">
                    Jewellery &nbsp;&nbsp; 
                    <i class="fa fa-play-circle">
                    </i>
                  </h5>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-xs-12 col-sm-3 col-md-2 col-xl-2">
        <div class="hd-shop-type-card">
          <a href="javascript:void(0);">
            <div class="shop-type" style="background-image: url(images/pos-sweets-shop.jpg);">
              <div class="shop-type-curtain">
              </div>
              <div class="store-title">
                <div class="hd-card-title">
                  <h5 style="color:white;">
                    Sweets &nbsp;&nbsp; 
                    <i class="fa fa-play-circle">
                    </i>
                  </h5>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-xs-12 col-sm-3 col-md-2 col-xl-2">
        <div class="hd-shop-type-card">
          <a href="javascript:void(0);">
            <div class="shop-type" style="background-image: url(images/pos-Pizza-store.jpg);">
              <div class="shop-type-curtain">
              </div>
              <div class="store-title">
                <div class="hd-card-title">
                  <h5 style="color:white;">
                    Pizza &nbsp;&nbsp; 
                    <i class="fa fa-play-circle">
                    </i>
                  </h5>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-xs-12 col-sm-3 col-md-2 col-xl-2">
        <div class="hd-shop-type-card">
          <a href="javascript:void(0);">
            <div class="shop-type" style="background-image: url(images/Pos-Cake-store.jpg);">
              <div class="shop-type-curtain">
              </div>
              <div class="store-title">
                <div class="hd-card-title">
                  <h5 style="color:white;">
                    Bakery &nbsp;&nbsp; 
                    <i class="fa fa-play-circle">
                    </i>
                  </h5>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </li>
  <section class="demo-request ">
    <div class="container text-center">
      <div class="request-title" style="padding:25px;">
        <h2>Start 
          <span>free
          </span> Fedrex trial!
        </h2>
        <p>5-minute setup, test out the Fedrex features for 30 days, no credit card required.
        </p>
      </div>
    </div>
  </section>
  <section class="ptb-100 functionalities bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="main-title">
            <h3 style="margin-top:px;">How GST Work
            </h3>
            <div class="seperator">
            </div>
          </div>
          <p style="font-family:'Montserrat', sans-serif;">The new tax regime follows a multi-stage collection mechanism wherein tax is collected at every stage and the credit of tax paid (input tax credit) at the previous stage is available as a set-off at the next stage of transaction. This helps to eliminate "tax on tax" or the cascading impact of tax.
          </p>
          <!-- <div class="row">
<div class="col-md-6 col-xs-12">
<ul>
<li>Ut lacinia ligula tristique tempus.</li>
<li>In ornare nisl vitae pulvinar posuere.</li>
</ul>
</div>
<div class="col-md-6 col-xs-12">
<ul>
<li>In et orci sit amet leo consequat.</li>
<li>Nullam pellentesque arcu vitae congue.</li>
</ul>
</div>
</div>  -->
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <img src="images/Zero-rated-supplies-2.png" class="img-responsive" alt="image">
        </div>
      </div>
    </div>
    <!-- End Container -->
  </section>
  <!-- End Section -->
  <section class="demo-request ">
    <div class="container text-center">
      <div class="request-title" style="padding:25px;">
        <h2>Start 
          <span>free
          </span> Fedrex trial!
        </h2>
        <p>5-minute setup, test out the Fedrex features for 30 days, no credit card required.
        </p>
      </div>
    </div>
  </section>
  <section class="ptb-100 functionalities bg-gray" style="">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <img src="images/itb.png" class="img-responsive" alt="image" style="margin-top:;">
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="main-title">
            <h3>Advantages of E-Filling 
            </h3>
            <div class="seperator">
            </div>
          </div>
          <p style="font-family:'Montserrat', sans-serif;">
            <b>1. Error free submission 
            </b>- Real time error check is possible through income tax authorities. Validations are helpful to ensure the return perfect
            <br/>
            <b>2. Quick refund 
            </b>- Online filing enables the department to process the return with minimum time and therefore refund become very easy.
            <br/>
            <b>3. Avoid delays 
            </b>- Paper filing of return always depends the time of office, queues, spot self-correction, holidays, presence of officer, etc. Regardless of these matters any person can file their income at anytime from anywhere.
            <br/>
            <b>4. Effortless and efficient 
            </b>- Controlled and guided entry set by the utility or software pave the way to proper and fast completion of IT return. Filling in paper return always brings confusion and error, but a neat and clean return can be given through online filing.
          </p>
          <!-- <div class="row">
<div class="col-md-6 col-xs-12">
<ul>
<li> Prompt processing.</li>
<li>Better accuracy.</li>
<li>Convenience.</li>
<li>Confidentiality.</li>
<li>Accessibility to past data.</li>
</ul>
</div>
<div class="col-md-6 col-xs-12">
<ul>
<li>Proof of receipt.</li>
<li>Ease of use.</li>
<li>Donec nec odio a tellus eleifend.</li>
</ul>
</div>
</div> -->
        </div>
      </div>
    </div>
    <!-- End Container -->
  </section>
  <!-- End Section -->
  <section class="demo-request ">
    <div class="container text-center">
      <div class="request-title" style="padding:25px;">
        <h2>Start 
          <span>free
          </span> Fedrex trial!
        </h2>
        <p>5-minute setup, test out the Fedrex features for 30 days, no credit card required.
        </p>
      </div>
    </div>
  </section>
  <section class="ptb-100 functionalities bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-sm-6 col-xs-12">
          <div class="main-title">
            <h3>Criteria for Billing and Invoices
            </h3>
            <div class="seperator">
            </div>
          </div>
          <p style="font-family:'Montserrat', sans-serif;">Under GST invoicing rules and formats have been notified covering details such as supplier's name, shipping and billing address, HSN Code, place of supply, rate. In this article we will be covering all aspects of invoicing under GST.
          </p>
          <div class="row">
            <div class="col-md-6 col-xs-12">
              <ul>
                <li style="font-family:'Montserrat', sans-serif;">Invoice number and date.
                </li>
                <li style="font-family:'Montserrat', sans-serif;">Customer name.
                </li>
                <li style="font-family:'Montserrat', sans-serif;">Shipping and billing address.
                </li>
                <li style="font-family:'Montserrat', sans-serif;">Customer and taxpayer's GSTIN.
                </li>
                <li style="font-family:'Montserrat', sans-serif;">Place of supply.
                </li>
                <li style="font-family:'Montserrat', sans-serif;">HSN code.
                </li>
              </ul>
            </div>
            <div class="col-md-6 col-xs-12">
              <ul>
                <li style="font-family:'Montserrat', sans-serif;">Taxable value and discounts.
                </li>
                <li style="font-family:'Montserrat', sans-serif;">Rate and amount of taxes i.e. CGST/ SGST/ IGST.
                </li>
                <li style="font-family:'Montserrat', sans-serif;">Item details i.e. description, unit price, quantity.
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-5 col-sm-6 col-xs-12">
          <img src="images/Blog-post-07-1024x512.png" class="img-responsive" alt="image">
        </div>
      </div>
    </div>
    <!-- End Container -->
  </section>
  <!-- End Section -->
  <section class="demo-request ">
    <div class="container text-center">
      <div class="request-title" style="padding:25px;">
        <h2>Start 
          <span>free
          </span> Fedrex trial!
        </h2>
        <p>5-minute setup, test out the Fedrex features for 30 days, no credit card required.
        </p>
      </div>
    </div>
  </section>
  <section class="ptb-100 functionalities bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-sm-6 col-xs-12">
          <img src="images/WellSpent10TaxPuzzle-620x300.jpg" alt="image">
        </div>
        <div class="col-md-7 col-sm-6 col-xs-12">
          <div class="main-title">
            <h3>How to submit ITR returns
            </h3>
            <div class="seperator">
            </div>
          </div>
          <p style="font-family:'Montserrat', sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pellentesque efficitur turpis, vitae dictum dolor tristique in. Mauris tristique id urna at cursus. Aliquam maximus, ligula nec commodo maximus, felis metus sagittis ligula, lobortis consequat ante risus ut elit.
          </p>
          <div class="row">
            <div class="col-md-6 col-xs-12">
              <ul>
                <li style="font-family:'Montserrat', sans-serif;">Ut lacinia ligula tristique tempus.
                </li>
                <li style="font-family:'Montserrat', sans-serif;">In ornare nisl vitae pulvinar posuere.
                </li>
                <li style="font-family:'Montserrat', sans-serif;">Cras dapibus felis vel euismod gravida.
                </li>
              </ul>
            </div>
            <div class="col-md-6 col-xs-12">
              <ul>
                <li style="font-family:'Montserrat', sans-serif;">In et orci sit amet leo consequat.
                </li>
                <li style="font-family:'Montserrat', sans-serif;">Nullam pellentesque arcu vitae congue.
                </li>
                <li style="font-family:'Montserrat', sans-serif;">Donec nec odio a tellus eleifend.
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Container -->
  </section>
  <!-- End Section -->
  <?php
include('footer.php');
?>
  <!-- End Footer -->
</body>
</html>
