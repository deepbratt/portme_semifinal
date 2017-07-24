<?php
include ("config.php");

$vendor_id = $_GET['vendor_id'];
$view_vendor_info = mysqli_query($mysqli, "select * from vendors where vendor_id='".$vendor_id."'");
$fetch_vendor_details = mysqli_fetch_array ($view_vendor_info);
?>

<!DOCTYPE html>
<html lang=en>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>View Customer Details | Port-ME</title>
	<?php include("metalinks.php");?>

</head>


<body>

	<!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<div id="rs-wrapper">
		<?php 
			include("header.php");
			include("sidebar.php");
		?>
			
		<!-- BEGIN MAIN CONTENT -->
		<article class="rs-content-wrapper">
			<div class="rs-content">
				<div class="rs-inner">

					<!-- Begin Dashhead -->
					<div class="rs-dashhead m-b-lg" style="background:#f5f5f5">
						<div class="rs-dashhead-content">
							<div class="rs-dashhead-titles">
								<h3 class="rs-dashhead-title m-t">
									View Supplier/Vendor Details
									<div style="float:right;">
										<!--<span style="padding:10px 10px;font-size:15px;font-weight:normal;color:#4a89dc;cursor:pointer;border-right:1px solid #CCC;"> <i class="fa fa-lightbulb-o"></i> &nbsp;&nbsp;Page Tutorial</span>-->

										<span style="padding:10px 5px;font-size:25px;font-weight:normal;color:#000;cursor:pointer;" style="float:-right;" onclick="window.location.href='vendor.php'"> <i class="fa fa-remove"></i> </span>
									</div>
								</h3>
								
							</div>
							
						</div><!-- /.rs-dashhead-content -->
						<!-- Begin Breadcrumb -->

						<!-- End Breadcrumb -->
					</div><!-- /.rs-dashhead -->
					<!-- End Dashhead -->

					<!-- Begin default content width -->
					<div class="container-fluid" style="padding:0px;margin-top:-20px;margin-right:5px;margin-left:-5px;">

						<!--<div class="col-md-5 col-sm-10" style="float:right;">
										<div class=""></div>
										<iframe width="400" height="300" src="https://www.youtube.com/embed/NPtjMMUWRos" frameborder="0" allowfullscreen></iframe>
									</div>-->

						<div class="col-md-10 col-sm-7">
						<!-- Begin Panel -->
							<div class="panel panel-plain panel-rounded">

								<div class="panel-body">
									<form >
											<div class="row">
												<div class="col-sm-2">
												Full Name:
												</div>
												<div class="col-sm-8">
													<div class="form-group" style="margin-bottom:-1px;">
														<label><?php echo $fetch_vendor_details['salutation']?></label>  <label><?php echo $fetch_vendor_details['firstname'];?></label>  <label><?php echo $fetch_vendor_details['lastname'];?></label>
													</div><!-- /.form-group -->
												</div><!-- /.col-sm-4 -->
											</div><!-- /.row -->

										<div class="row">
											<div class="col-sm-2">
													Company Name:
											</div>
												<div class="form-group">
													<div class="col-sm-8">
														<label><?php echo $fetch_vendor_details['company_name'];?> </label>
													</div><!-- /.form-group -->
												</div>
											</div>
										
										<div class="row">
											<div class="col-sm-2">
													Email:
											</div>
												<div class="form-group">
													<div class="col-sm-8">
													<label><?php echo $fetch_vendor_details['email'];?> </label>												
													</div><!-- /.form-group -->
												</div>
											</div>
											<div class="row">
											<div class="col-sm-2">
													Work Phone:
											</div>
												<div class="form-group">
													<div class="col-sm-8">
													<label><?php echo $fetch_vendor_details['work_phone'];?> </label>												
													</div><!-- /.form-group -->
												</div>
											</div>
											<div class="row">
											<div class="col-sm-2">
													Mobile:
											</div>
												<div class="form-group">
													<div class="col-sm-8">
													<label><?php echo $fetch_vendor_details['mobile'];?> </label>													
													</div><!-- /.form-group -->
												</div>
											</div>
											<div class="row">
											<div class="col-sm-2">
													Website:
											</div>
												<div class="form-group">
													<div class="col-sm-8" style="margin-bottom:20px;">
													<label><?php echo $fetch_vendor_details['website'];?> </label>	
													</div><!-- /.form-group -->
												</div>
											</div>
								</div><!-- /.panel-body -->
							</div><!-- /.panel -->
						</div>

						<div class="col-md-5 col-sm-12">
							<!-- Begin Panel 
							<div class="panel panel-plain panel-rounded" >
								<iframe width="100%" height="100%" src="https://www.youtube.com/embed/5GZ3fP71Bzg" style="padding:10px;min-height:300px;" frameborder="0" allowfullscreen></iframe>
							</div> panel -->
						</div>
						
						<div class="col-md-12" style="margin-top:-50px;">
							<!-- Begin Panel -->
								<div class="panel panel-plain panel-rounded">
									<div class="panel-body">
										<!-- Nav tabs -->
										<ul class="nav nav-tabs" role="tablist">
											<li role="presentation" class="active"><a href="#rs-tab-01" aria-controls="rs-tab-01" role="tab" data-toggle="tab" >Address</a></li>
											<li role="presentation"><a href="#rs-tab-02" aria-controls="rs-tab-02" role="tab" data-toggle="tab">Notes</a></li>
										</ul>

										<!-- Tab panes -->
										<div class="tab-content p-t-md">
											<div role="tabpanel" class="tab-pane fade in active" id="rs-tab-01">
												<div class="col-md-12" style="margin:0px;padding:0px;">
													<div class="col-md-6 col-sm-12" style="padding:5px;">
														<h3 style="margin-bottom:15px;font-size:17px;">Billing Address</h3>										
														<div class="form-group">
															<div class="col-sm-2">
																Street :
															</div>	
														<label><?php echo $fetch_vendor_details['billing_street'];?> </label>									
														</div><!-- /.form-group -->

														<div class="form-group">
															<div class="col-sm-2">
																City :
															</div>	
															<label><?php echo $fetch_vendor_details['billing_city'];?> </label>
														</div><!-- /.form-group -->

														<div class="form-group">
															<div class="col-sm-2">
																State :
															</div>	
														<label><?php echo $fetch_vendor_details['billing_state'];?> </label>
														</div><!-- /.form-group -->

														<div class="form-group">
															<div class="col-sm-2">
																Zip :
															</div>	
															<label><?php echo $fetch_vendor_details['billing_zip'];?> </label>
														</div><!-- /.form-group -->

														
													</div>

													<div class="col-md-6 col-sm-12" style="margin-left:0px;padding:5px;">
														<h3 style="margin-bottom:15px;font-size:17px;">Shipping Address </h3>
														
														<div class="form-group">
															<div class="col-sm-2">
																Street:
															</div>	
														<label><?php echo $fetch_vendor_details['shipping_street'];?> </label>
														</div><!-- /.form-group -->

														<div class="form-group">
															<div class="col-sm-2">
																City :
															</div>	
														<label><?php echo $fetch_vendor_details['shipping_city'];?> </label>
														</div><!-- /.form-group -->

														<div class="form-group">
															<div class="col-sm-2">
																State :
															</div>	
														<label><?php echo $fetch_vendor_details['shipping_state'];?> </label>
														</div><!-- /.form-group -->

														<div class="form-group">
															<div class="col-sm-2">
																Zip :
															</div>	
														<label><?php echo $fetch_vendor_details['shipping_zip'];?> </label>
														</div><!-- /.form-group -->

														</div>
												</div>
											</div><!-- /.tab-pane -->

											<div role="tabpanel" class="tab-pane fade" id="rs-tab-02">
												<h3 style="margin-bottom:15px;font-size:17px;">Notes</h3>	
												<div class="form-group">
													<label> <?php echo $fetch_vendor_details['notes'];?></label>
													<p class="help-block with-errors"></p>
												</div><!-- /.form-group -->
											</div><!-- /.tab-pane -->

										</div><!-- /.tab-content -->
									</div><!-- .panel-body -->
									

									<div class="panel-footer">
											<div class="form-group m-a-0">
												<button type="reset" class="btn btn-default btn-wide">Reset</button>
												<a href = "vendor.php"><button class="btn btn-success btn-wide">Back</button></a>
											</div>
										</div><!-- /.panel-footer -->
									</form>
								</div><!-- /.panel -->

								<!-- End Panel -->

						</div>
					</div><!-- /.container-fluid -->

				</div><!-- /.rs-inner -->
			</div><!-- /.rs-content -->
		</article><!-- /.rs-content-wrapper -->
		<!-- END MAIN CONTENT -->

	<?php include("footer.php");?>
	<!-- Page Plugins -->
	<script src="js/bootstrap-switch.min.js"></script>
	<script src="js/bootstrap-switch-example.js"></script>

	<script src="js/cleave.min.js"></script>
	<script src="js/cleave-phone.au.js"></script><!-- Example -->
	<script src="js/cleave-example.js"></script><!-- Example -->

	<script src="js/bootstrap-datepicker.min.js"></script>
	<script src="js/datepicker-example.js"></script><!-- Example -->

	<script src="js/jquery.maskedlabel.min.js"></script>
	<script src="js/maskedlabel-example.js"></script><!-- Example -->

	<script src="js/bootstrap-maxlength.min.js"></script>
	<script src="js/maxlength-example.js"></script><!-- Example -->

	<script src="js/selectize.min.js"></script>
	<script src="js/selectize-example.js"></script><!-- Example -->

	<!-- Page Plugins -->
	<script src="js/validator.min.js"></script>
	<script>
		function copybillingaddr(){
			var billstreet = $(".billstreet").val();
			var billcity = $(".billcity").val();
			var billstate = $(".billstate").val();
			var bilzip = $(".bilzip").val();
			var billcountry = $(".billcountry option:selected").val();
			
			$(".billstreet2").val(billstreet);
			$(".billcity2").val(billcity);
			$(".billstate2").val(billstate);
			$(".bilzip2").val(bilzip);
			//$(".billcountry2 select").val(billcountry)
			$('.billcountry2 option[value='+billcountry+']').prop('selected',true);
		}
	</script>
	
</body>
</html>