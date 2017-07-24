<?php
include ("config.php");
$user_id = $_SESSION['user_id'];

$vendor_id = $_GET['vendor_id'];
$view_vendor_info = mysqli_query($mysqli, "select * from vendors where vendor_id='".$vendor_id."'");
$fetch_vendor_details = mysqli_fetch_array ($view_vendor_info);

if(isset($_POST['update']))
{
	$salutation		= $_POST['sal'];
	$firstname		= $_POST['fname'];
	$lastname		= $_POST['lname'];
	$company_name	= $_POST['cname'];
	$email			= $_POST['email'];
	$work_phone		= $_POST['wphone'];
	$mobile			= $_POST['mobile'];
	$website		= $_POST['website'];
	$billing_street = $_POST['bstreet'];
	$billing_city	= $_POST['bcity'];
	$billing_state	= $_POST['bstate'];
	$billing_zip	= $_POST['bzip'];
	$shipping_street = $_POST['sstreet'];
	$shipping_city	= $_POST['scity'];
	$shipping_state = $_POST['sstate'];
	$shipping_zip	= $_POST['szip'];
	$notes			= $_POST['notes'];
	$date			= date();

	$update_vendor_details = mysqli_query($mysqli, "update vendors set salutation= '".$salutation."', firstname='".$firstname."', lastname='".$lastname."', company_name='".$company_name."', email='".$email."', work_phone='".$work_phone."', mobile='".$mobile."', website='".$website."', billing_street='".$billing_street."', billing_city='".$billing_city."', billing_state='".$billing_state."', billing_zip='".$billing_zip."',  shipping_street='".$shipping_street."', shipping_city='".$shipping_city."', shipping_state='".$shipping_state."', shipping_zip='".$shipping_zip."', date='".$date."', notes='".$notes."' where vendor_id='".$vendor_id."' ");
	if($update_vendor_details)
	{
		$data = "success";
	}
	else
	{
		$data = "error";
	}
}
?>


<!DOCTYPE html>
<html lang=en>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Add Supplier/Vendor | Port-ME</title>
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
									Edit Supplier/Vendor
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

						<div class="col-md-12 col-sm-12">
						<?php
								if(isset($data) && $data == "success")
						{
						?>
						<p style="text-align:center;background:#5cb85c;border:1px solid #CCC;border-radius:5px;padding:5px;color:#fff;font-weight:bold;margin-left:15px;"> Updated Successfully </p>
						<?php
						}else if(isset($data) && $data == "error"){
						?>
						<p style="text-align:center;background:#e54e53;border:1px solid #CCC;border-radius:5px;padding:5px;color:#fff;font-weight:bold;margin-left:15px;"> Error while updating </p>
						<?php
						}
						?>
						</div>

					<!-- Begin default content width -->
					<div class="container-fluid" style="padding:0px;margin-top:-20px;margin-right:5px;margin-left:-5px;">
					<?php
						$user_id = $_SESSION['user_id'];

						$vendor_id = $_GET['vendor_id'];
						$view_vendor_info = mysqli_query($mysqli, "select * from vendors where vendor_id='".$vendor_id."'");
						$fetch_vendor_details = mysqli_fetch_array ($view_vendor_info);
					?>
					

						<div class="col-md-7 col-sm-12">
						<!-- Begin Panel -->
							<div class="panel panel-plain panel-rounded">

								<div class="panel-body">
									<form method="POST">
											<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<select name="sal" class="rs-selectize-single" >
															<option selected disabled value=""><?php echo $fetch_vendor_details['salutation']?></option>
															<option value="Mr."<?php echo(($fetch_vendor_details['salutation']=='Mr.')?'selected':'');?>>Mr.</option>
															<option value="Mrs."<?php echo(($fetch_vendor_details['salutation']=='Mrs.')?'selected':'');?>>Mrs.</option>
															<option value="Ms."<?php echo(($fetch_vendor_details['salutation']=='Ms.')?'selected':'');?>>Ms.</option>
															<option value="Miss."<?php echo(($fetch_vendor_details['salutation']=='Miss.')?'selected':'');?>>Miss.</option>
															<option value="Dr."<?php echo(($fetch_vendor_details['salutation']=='Dr.')?'selected':'');?>>Dr.</option>
														</select>
													</div><!-- /.form-group -->
												</div><!-- /.col-sm-4 -->
												<div class="col-sm-4">
													<div class="form-group">
														<input name="fname" type="text" class="form-control" id="rs-form-example-fname" value=<?php echo $fetch_vendor_details['firstname']; ?> >
														<p class="help-block with-errors"></p>
													</div><!-- /.form-group -->
												</div><!-- /.col-sm-4 -->
												<div class="col-sm-4">
													<div class="form-group">
														<input name="lname" type="text" class="form-control" id="rs-form-example-lname" value=<?php echo $fetch_vendor_details['lastname']; ?> >
														<p class="help-block with-errors"></p>
													</div><!-- /.form-group -->
												</div><!-- /.col-sm-4 -->
											</div><!-- /.row -->

											<div class="form-group">
												<input name="cname" type="text" class="form-control" id="rs-form-example-email" value=<?php echo $fetch_vendor_details['company_name']; ?> >
												<p class="help-block with-errors"></p>
											</div><!-- /.form-group -->

											<div class="form-group">
												<input name="email" type="email" class="form-control" id="rs-form-example-email" value=<?php echo $fetch_vendor_details['email'];?> >
												<p class="help-block with-errors"></p>
											</div><!-- /.form-group -->

											<div class="form-group">
												<input name="wphone" type="integer" class="form-control" id="rs-form-example-tel" value=<?php echo $fetch_vendor_details['work_phone']; ?> >
												<p class="help-block with-errors"></p>
											</div><!-- /.form-group -->

											<div class="form-group">
												<input name="mobile" type="integer" class="form-control" id="rs-form-example-tel" value=<?php echo $fetch_vendor_details['mobile']; ?> >
												<p class="help-block with-errors"></p>
											</div><!-- /.form-group -->

											<div class="form-group">
												<input name="website" type="text" class="form-control" id="rs-form-example-tel" value=<?php echo $fetch_vendor_details['website']; ?> >
												<p class="help-block with-errors"></p>
											</div><!-- /.form-group -->

								</div><!-- /.panel-body -->
							</div><!-- /.panel -->
						</div>

						<div class="col-md-5 col-sm-12">
							 
							<div class="panel panel-plain panel-rounded" style="padding-top:10px;" >
								<iframe width="100%" height="50%" src="https://www.youtube.com/embed/5GZ3fP71Bzg" style="padding:10px;min-height:300px;" frameborder="0" allowfullscreen></iframe>
							</div>
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
														
														<div class="form-group">
															<textarea name="bstreet" class="form-control billstreet" ><?php echo $fetch_vendor_details['billing_street']; ?></textarea>
															<p class="help-block with-errors"></p>
														</div><!-- /.form-group -->

														<div class="form-group">
															<input name="bcity" type="text" class="form-control billcity" id="rs-form-example-email" value=<?php echo $fetch_vendor_details['billing_city']; ?> >
															<p class="help-block with-errors"></p>
														</div><!-- /.form-group -->

														<div class="form-group">
															<input name="bstate" type="text" class="form-control billstate" id="rs-form-example-tel" value=<?php echo $fetch_vendor_details['billing_state']; ?> >
															<p class="help-block with-errors"></p>
														</div><!-- /.form-group -->

														<div class="form-group">
															<input name="bzip" type="integer" class="form-control bilzip" id="rs-form-example-tel" value=<?php echo $fetch_vendor_details['billing_zip']; ?> >
															<p class="help-block with-errors"></p>
														</div><!-- /.form-group -->

														
														
													</div>

													<div class="col-md-6 col-sm-12" style="margin-left:0px;padding:5px;">
														<h3 style="margin-bottom:15px;font-size:17px;">Shipping Address <span style="font-size:15px;float:right;color:#4a89dc;font-weight:normal;cursor:pointer;padding:5px;" onclick="copybillingaddr();"><i class="fa fa-hand-o-down"></i> Copy billing address</span></h3>
														
														<div class="form-group">
															<textarea name="sstreet" class="form-control billstreet2"><?php echo $fetch_vendor_details['shipping_street']; ?></textarea>
															<p class="help-block with-errors"></p>
														</div><!-- /.form-group -->

														<div class="form-group">
															<input name="scity" type="text" class="form-control billcity2" id="rs-form-example-email" value=<?php echo $fetch_vendor_details['shipping_city']; ?> >
															<p class="help-block with-errors"></p>
														</div><!-- /.form-group -->

														<div class="form-group">
															<input name="sstate" type="text" class="form-control billstate2" id="rs-form-example-tel" value=<?php echo $fetch_vendor_details['shipping_state']; ?> >
															<p class="help-block with-errors"></p>
														</div><!-- /.form-group -->

														<div class="form-group">
															<input name="szip" type="integer" class="form-control bilzip2" id="rs-form-example-tel" value=<?php echo $fetch_vendor_details['shipping_zip']; ?> >
															<p class="help-block with-errors"></p>
														</div><!-- /.form-group -->
														
														

													</div>
												</div>
											</div><!-- /.tab-pane -->

											<div role="tabpanel" class="tab-pane fade" id="rs-tab-02">
												<h3 style="margin-bottom:15px;font-size:17px;">Notes</h3>	
												<div class="form-group">
													<textarea name="notes" class="form-control" style="min-height:250px;" ><?php echo $fetch_vendor_details['notes']; ?></textarea>
													<p class="help-block with-errors"></p>
												</div><!-- /.form-group -->
											</div><!-- /.tab-pane -->

										</div><!-- /.tab-content -->
									</div><!-- .panel-body -->								

									<div class="panel-footer">
											<div class="form-group m-a-0">
												<button type="reset" class="btn btn-default btn-wide">Reset</button>
												<button name="update" type="submit" class="btn btn-success btn-wide">Update</button>
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