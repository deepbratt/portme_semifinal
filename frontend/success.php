<?php
include('config.php'); 
$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$salt="aa9AA2JetB";


If (isset($_POST["additionalCharges"])) {
       $additionalCharges=$_POST["additionalCharges"];
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
        
                  }
	else {	  

        $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;

         }
		 $hash = hash("sha512", $retHashSeq);
		 
       if ($hash != $posted_hash) {
	       echo "Invalid Transaction. Please try again";
		   }
	   else {
			$user_id = $_SESSION['user_id'];
		   $date = time();
		   $get_subscribe_query = mysqli_query($mysqli,"insert into subscribed_list values('','".$productinfo."','".$user_id."','".$date."','".$txnid."','".$status."')");

		   if($get_subscribe_query)
		   {
				unset($_SESSION['cart']);
				echo "<script>window.location.href='subscribe.php?data=success'</script>";
		   }

				
           	   
         
           
		   }         
?>	



<!DOCTYPE html>
	<html lang="en-US">
	<head>
	  <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <title>Port-ME | Business Operating Software</title>
	  <?php include ('metalinks.php')?>
	  
	</head>
<body>

<div class="header">
    <div class="cont_top">
		  <div class="logo flt-left" style="margin-top:-15px;">
			<a href=""> <img src="images/logo.png" alt="Logo" style="height:70px;"/></a>
			<div class="mob_manu"><b></b><b></b><b></b></div>
		  </div>
		 
		  <div class="top_link flt-right ">
				<ul class="nav home-menu">
				  <li style="border: 0px none;"> <a href=>login</a></li>
				  <li style="border: 0px none;"> <a href="cntct_us.php" target="_target">Contact Us</a></li>
				  <li style="border: 0px none;"> <a href="blog.php" target="_target">Blog</a></li>
				  <li style="border: 0px none;"> <a href="pricing.php" target="_target">Pricing</a></li>
				  <li style="border: 0px none;"> <a href="features.php" target="_target">Features</a></li>
				  <li style="border: 0px none;"> <a href="">Support</a></li> 
				  <li style="border: 0px none;color:#fff !important;padding:3px 10px !important;" class="btn btn-danger"> <a href="" style="color:#fff !important;">Get Started</a></li>
				</ul>
		  </div>
	</div>
		  <div class="clear" ></div>
<div class="section" style="position:relative;">		  
		
<header class="header">
    <div class="ft-btm-sec">
      <div class="row">
        
		 <div class="col-md-6" style="text-align:left;">
          <ul class="hmeftr">
            <li role="presentation" class="disabled"><a href="#">Payment Success</a></li>
          </ul>
        </div>
		
		<div class="col-md-6" style="text-align:right;">
          <ul class="hmeftr">
            <li role="presentation" class="disabled"><a href="#">HOME</a></li>
			<span>&raquo;</span>
            <li role="presentation" class="disabled"><a href="#"> Trunsuction</a></li>
          </ul>
        </div>
		
      </div>
    </div>
</header>
		
		<div class="top-colges-sec block-pading1">
           <div class="container">
              
				<div class="col-lg-2 col-md-2 col-sm-12">
				</div>
               <div class="col-lg-8 col-md-8 col-sm-12">
                   <article style="border-top:10px solid #008a32;">
                       <div>
                           <h1 class="price_tit" style="color:#4286f4;">Thank You For Choosing PORT-ME</h1>
                           <h5 class="price_subtitl" style="font-weight:bold;">Congratulation Your Transaction Is successfull...</h5>
						   <h5 class="price_subtitl"style="font-weight:bold;">Your Product price rs.<h1 class="price_txt"><span class="price_amt" style="color:#66cc33;">4999.00</span></h1></h5>
						   <h5 class="price_subtitl"style="font-weight:bold;">is successfully paid.</h5>
						   <p style="margin-top:-5px;">&nbsp;</p>
						   <h5 class="invent_item" style="margin-top:30px;">To be frank, most requests from customers are very reasonable, and every effort should be made to make them happy.</h5>
						   <li style="border: 0px none;color:#fff !important;padding:3px 10px !important;" class="btn btn-primary"> <a href="" style="color:#fff !important;">Log in</a></li>
                       </div>
                   </article>
               </div>
			   
			<div class="col-lg-2 col-md-2 col-sm-12">
			</div>
			
           </div>
        </div>
		  
    </div>
</div>
  <div class="clear" ></div>
  

   
 <?php
	include ("footer.php");
 ?>
</body>

</html>

