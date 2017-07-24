<!DOCTYPE html>
<html lang=en>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Add Vendor | Port-ME</title>
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
									New Vendor
									<div style="float:right;">
										<!--<span style="padding:10px 10px;font-size:15px;font-weight:normal;color:#4a89dc;cursor:pointer;border-right:1px solid #CCC;"> <i class="fa fa-lightbulb-o"></i> &nbsp;&nbsp;Page Tutorial</span>-->

										<span style="padding:10px 5px;font-size:25px;font-weight:normal;color:#000;cursor:pointer;" style="float:-right;" onclick="window.location.href='customer.php'"> <i class="fa fa-remove"></i> </span>
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
						<div class="col-md-7 col-sm-12">
						<!-- Begin Panel -->
							<div class="panel panel-plain panel-rounded">

								<div class="panel-body">
									<form >
										<div class="row">
											<div class="col-sm-3">
													<div class="form-group">
														<label><b>Customer Name : </b></label>
													</div><!-- /.form-group -->
												</div><!-- /.col-sm-4 -->

												<div class="col-sm-3">
													<div class="form-group">
														<select class="rs-selectize-single" required>
															<option value="">Salutation</option>
															<option value="4">Mr.</option>
															<option value="1">Mrs.</option>
															<option value="3">Ms.</option>
															<option value="5">Miss.</option>
															<option value="5">Dr.</option>
														</select>
													</div><!-- /.form-group -->
												</div><!-- /.col-sm-4 -->
												<div class="col-sm-3">
													<div class="form-group">
														<input type="text" class="form-control" id="rs-form-example-fname" placeholder="First Name" required>
														<p class="help-block with-errors"></p>
													</div><!-- /.form-group -->
												</div><!-- /.col-sm-4 -->
												<div class="col-sm-3">
													<div class="form-group">
														<input type="text" class="form-control" id="rs-form-example-lname" placeholder="Last Name" required>
														<p class="help-block with-errors"></p>
													</div><!-- /.form-group -->
												</div><!-- /.col-sm-4 -->
											</div><!-- /.row -->

											<div class="row">
											<div class="col-sm-3">
													<div class="form-group">
														<label><b>Company Name : </b></label>
													</div><!-- /.form-group -->
												</div><!-- /.col-sm-4 -->
											<div class="col-sm-9">
											<div class="form-group">
												<input type="text" class="form-control"placeholder="Company Name" required>
												<p class="help-block with-errors"></p>
											</div>
											</div><!-- /.form-group -->
											</div>

											<div class="row">
											<div class="col-sm-3">
													<div class="form-group">
														<label><b>Email : </b></label>
													</div><!-- /.form-group -->
												</div><!-- /.col-sm-4 -->
											<div class="col-sm-9">
											<div class="form-group">
												<input type="email" class="form-control"placeholder="Enter Email Address" required>
												<p class="help-block with-errors"></p>
											</div>
											</div><!-- /.form-group -->
											</div>

											<div class="row">
											<div class="col-sm-3">
													<div class="form-group">
														<label><b>Work Phone : </b></label>
													</div><!-- /.form-group -->
												</div><!-- /.col-sm-4 -->
											<div class="col-sm-9">
											<div class="form-group">
												<input type="integer" class="form-control"placeholder="Enter Work Phone Number">
												<p class="help-block with-errors"></p>
											</div>
											</div><!-- /.form-group -->
											</div>

											<div class="row">
											<div class="col-sm-3">
													<div class="form-group">
														<label><b>Mobile : </b></label>
													</div><!-- /.form-group -->
												</div><!-- /.col-sm-4 -->
											<div class="col-sm-9">
											<div class="form-group">
												<input type="integer" class="form-control"placeholder="Enter Mobile Number" required>
												<p class="help-block with-errors"></p>
											</div>
											</div><!-- /.form-group -->
											</div>

											<div class="row">
											<div class="col-sm-3">
													<div class="form-group">
														<label><b>GSTIN / PAN No : </b></label>
													</div><!-- /.form-group -->
												</div><!-- /.col-sm-4 -->
											<div class="col-sm-9">
											<div class="form-group">
												<input type="text" class="form-control"placeholder="Enter GSTIN/PAN No." required>
												<p class="help-block with-errors"></p>
											</div>
											</div><!-- /.form-group -->
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
											<li role="presentation" class="active"><a href="#rs-tab-01" aria-controls="rs-tab-01" role="tab" data-toggle="tab">Address</a></li>
											<li role="presentation"><a href="#rs-tab-02" aria-controls="rs-tab-02" role="tab" data-toggle="tab">Notes</a></li>
										</ul>

										<!-- Tab panes -->
										<div class="tab-content p-t-md">
											<div role="tabpanel" class="tab-pane fade in active" id="rs-tab-01">
												<div class="col-md-12" style="margin:0px;padding:0px;">
													<div class="col-md-6 col-sm-12" style="padding:5px;">
														<h3 style="margin-bottom:15px;font-size:17px;">Billing Address</h3>
														
														<div class="row">
															<div class="col-sm-3">
																<div class="form-group">
																	<label>Street : </label>
																</div><!-- /.form-group -->
															</div><!-- /.col-sm-4 -->
															<div class="col-sm-8">
																<div class="form-group">
																	<textarea class="form-control billstreet" placeholder="Street" required></textarea>
																	<p class="help-block with-errors"></p>
																</div><!-- /.form-group -->
															</div>
														</div>

														<div class="row">
															<div class="col-sm-3">
																<div class="form-group">
																	<label> City :<label>
																</div>
															</div>
															<div class="col-sm-8">
																<div class="form-group">
																	<input type="text" class="form-control billcity" id="rs-form-example-email" placeholder="City" required>
																	<p class="help-block with-errors"></p>
																</div><!-- /.form-group -->
															</div>
														</div>

														<div class="row">
															<div class="col-sm-3">
																<div class="form-group">
																	<label> State :<label>
																</div>
															</div>
															<div class="col-sm-8">
																<div class="form-group">
																	<select class="rs-selectize-single" required>
																		<option value="">State</option>
																	</select>
																	<p class="help-block with-errors"></p>
																</div><!-- /.form-group -->
															</div>
														</div>

														<div class="row">
															<div class="col-sm-3">
																<div class="form-group">
																	<label> Zip :<label>
																</div>
															</div>
															<div class="col-sm-8">
																<div class="form-group">
																	<input type="text" class="form-control bilzip" id="rs-form-example-email" placeholder="Enter Zip Code" required>
																	<p class="help-block with-errors"></p>
																</div><!-- /.form-group -->
															</div>
														</div>
													</div>

													<div class="col-md-6 col-sm-12" style="margin-left:0px;padding:5px;">
														<h3 style="margin-bottom:15px;font-size:17px;">Shipping Address <span style="font-size:15px;float:right;color:#4a89dc;font-weight:normal;cursor:pointer;padding:5px;" onclick="copybillingaddr();"><i class="fa fa-hand-o-down"></i> Copy billing address</span></h3>
														
														<div class="row">
															<div class="col-sm-3">
																<div class="form-group">
																	<label>Street : </label>
																</div><!-- /.form-group -->
															</div><!-- /.col-sm-4 -->
															<div class="col-sm-8">
																<div class="form-group">
																	<textarea class="form-control billstreet2" placeholder="Street" required></textarea>
																	<p class="help-block with-errors"></p>
																</div><!-- /.form-group -->
															</div>
														</div>
														<div class="row">
															<div class="col-sm-3">
																<div class="form-group">
																	<label> City :<label>
																</div>
															</div>
															<div class="col-sm-8">
																<div class="form-group">
																	<input type="text" class="form-control billcity2" id="rs-form-example-email" placeholder="City" required>
																	<p class="help-block with-errors"></p>
																</div><!-- /.form-group -->
															</div>
														</div>

														<div class="row">
															<div class="col-sm-3">
																<div class="form-group">
																	<label> State :<label>
																</div>
															</div>
															<div class="col-sm-8">
																<div class="form-group">
																	<select class="rs-selectize-single" required>
																		<option value="">State</option>
																	</select>
																	<p class="help-block with-errors"></p>
																</div><!-- /.form-group -->
															</div>
														</div>

														<div class="row">
															<div class="col-sm-3">
																<div class="form-group">
																	<label> Zip :<label>
																</div>
															</div>
															<div class="col-sm-8">
																<div class="form-group">
																	<input type="text" class="form-control bilzip2" id="rs-form-example-email" placeholder="Enter Zip Code" required>
																	<p class="help-block with-errors"></p>
																</div><!-- /.form-group -->
															</div>
														</div>
													</div>
												</div>
											</div><!-- /.tab-pane -->

											<div role="tabpanel" class="tab-pane fade" id="rs-tab-02">
												<h3 style="margin-bottom:15px;font-size:17px;">Notes</h3>	
												<div class="form-group">
													<textarea class="form-control" placeholder="Notes" style="min-height:250px;" required></textarea>
													<p class="help-block with-errors"></p>
												</div><!-- /.form-group -->
											</div><!-- /.tab-pane -->

										</div><!-- /.tab-content -->
									</div><!-- .panel-body -->

									<div class="panel-footer">
											<div class="form-group m-a-0">
												<button type="reset" class="btn btn-default btn-wide">Reset</button>
												<button type="submit" class="btn btn-success btn-wide">Submit</button>
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

	<script src="js/jquery.maskedinput.min.js"></script>
	<script src="js/maskedinput-example.js"></script><!-- Example -->

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