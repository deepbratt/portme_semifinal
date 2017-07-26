<?php
include("config.php");

$business_id = $_GET['business_id'];

if(isset($_POST['update_details']))
{
	$firstname		= $_POST['fname'];
	$lastname		= $_POST['lname'];
	$company_name	= $_POST['cname'];
	$email			= $_POST['email'];
	$work_phone		= $_POST['wphone'];
	$mobile			= $_POST['mobile'];
	$gstin		    = $_POST['gstin'];
	$business_type  = $_POST['business_type'];
	$address		= $_POST['address'];
	$state			= $_POST['state'];
	$country		= $_POST['country'];
	if($_FILES['image']['name'] == '')
	{
		$select_prev = mysqli_query($mysqli,"select * from tbl_business where business_id='$business_id'");
		$fetch_prev = mysqli_fetch_array($select_prev);
		$savdse_image = $fetch_prev['logo'];
	}
	else
	{
	$tmp_image = $_FILES['image']['tmp_name'];
	$image = $_FILES['image']['name'];
	$savdse_image = rand(99,9999).$image;

	move_uploaded_file($tmp_image,"uploads/".$savdse_image);
	}

	$update_customer_details = mysqli_query($mysqli, "update tbl_business set owners_firstname='".$firstname."', owners_lastname='".$lastname."', enterprise_name='".$company_name."', email='".$email."', work_phone='".$work_phone."', mobile='".$mobile."', 	gst_pan='".$gstin."', type_of_business='".$business_type."', address='".$address."', state='".$state."', country='".$country."', logo='".$savdse_image."'  where business_id='".$business_id."' ");
	if($update_customer_details)
	{
		$data = "success";
	}
	else
	{
		$data = "error" ;
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
	<title>View User Details | Port-ME</title>
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
									View User Details
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
						<div class="col-md-12 col-sm-12">

						<?php
								if(isset($data) && $data == "success")
						{
						?>
						<p style="text-align:center;background:#5cb85c;border:1px solid #CCC;border-radius:5px;padding:5px;color:#fff;font-weight:bold;margin-left:15px;"> Updated Successfully </p>
						<?php
						}else if(isset($data) && $data == "error"){
						?>
						<p style="text-align:center;background:#e54e53;border:1px solid #CCC;border-radius:5px;padding:5px;color:#fff;font-weight:bold;margin-left:15px;"> Error in updation </p>
						<?php
						}
						?>
						</div>

						
						<?php
						$select_query = mysqli_query($mysqli,"select * from tbl_business where business_id='".$business_id."'");
						$fetch_query = mysqli_fetch_array($select_query);
						?>
						<div class="col-md-8 col-sm-12">
						<!-- Begin Panel -->
							<div class="panel panel-plain panel-rounded">

								<div class="panel-body">
									<form  method="post" enctype="multipart/form-data">
										<div class="row">
											<div class="col-sm-3">
													<div class="form-group">
														<label><b>Owner Name : </b></label>
													</div><!-- /.form-group -->
												</div><!-- /.col-sm-4 -->

												<div class="col-sm-4">
													<div class="form-group">
														<input name="fname" type="text" class="form-control" id="rs-form-example-fname" value=<?php echo $fetch_query['owners_firstname']; ?>>
														<p class="help-block with-errors"></p>
													</div><!-- /.form-group -->
												</div><!-- /.col-sm-4 -->
												<div class="col-sm-4">
													<div class="form-group">
														<input name="lname" type="text" class="form-control" id="rs-form-example-fname" value=<?php echo $fetch_query['owners_lastname']; ?>>
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
											<div class="col-sm-8">
											<div class="form-group">
												<input name="cname" type="text" class="form-control" id="rs-form-example-fname" value=<?php echo $fetch_query['enterprise_name']; ?>>
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
											<div class="col-sm-8">
											<div class="form-group">
												<input name="email" type="text" class="form-control" id="rs-form-example-fname" value=<?php echo $fetch_query['email']; ?>>
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
											<div class="col-sm-8">
											<div class="form-group">
												<input name="wphone" type="text" class="form-control" id="rs-form-example-fname" value=<?php echo $fetch_query['work_phone']; ?>>
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
											<div class="col-sm-8">
											<div class="form-group">
												<input name="mobile" type="text" class="form-control" id="rs-form-example-fname" value=<?php echo $fetch_query['mobile']; ?>>
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
											<div class="col-sm-8">
											<div class="form-group">
												<input name="gstin" type="text" class="form-control" id="rs-form-example-fname" value=<?php echo $fetch_query['gst_pan']; ?>>
												<p class="help-block with-errors"></p>
											</div>
											</div><!-- /.form-group -->
											</div>

											<div class="row">
											<div class="col-sm-3">
													<div class="form-group">
														<label><b>Business Type : </b></label>
													</div><!-- /.form-group -->
												</div><!-- /.col-sm-4 -->
											<div class="col-sm-8">
											<div class="form-group">
												<select class="form-control selectpicker" name="business_type">
												<?php
												$select_business_type = mysqli_query($mysqli,"select * from business_type");
												while($fetch_type = mysqli_fetch_array($select_business_type)){
												?>
													 <option data-tokens="<?php echo $fetch_type['type_id'];?>" <?php echo(($fetch_type['type_id']==$fetch_query['type_of_business'])?'selected':'');?>><?php echo $fetch_type['name'];?></option>
												<?php
												}
												?>
												 </select>
											</div>
											</div><!-- /.form-group -->
											</div>

											<div class="row">
											<div class="col-sm-3">
													<div class="form-group">
														<label><b>Address : </b></label>
													</div><!-- /.form-group -->
												</div><!-- /.col-sm-4 -->
											<div class="col-sm-8">
											<div class="form-group">
												<input name="address" type="text" class="form-control" id="rs-form-example-fname" value=<?php echo $fetch_query['address']; ?>>
												<p class="help-block with-errors"></p>
											</div>
											</div><!-- /.form-group -->
											</div>

											<div class="row">
											<div class="col-sm-3">
													<div class="form-group">
														<label><b>State : </b></label>
													</div><!-- /.form-group -->
												</div><!-- /.col-sm-4 -->
											<div class="col-sm-8">
											<div class="form-group">
												<input name="state" type="text" class="form-control" id="rs-form-example-fname" value=<?php echo $fetch_query['state']; ?>>
												<p class="help-block with-errors"></p>
											</div>
											</div><!-- /.form-group -->
											</div>

											<div class="row">
												<div class="col-sm-3">
														<div class="form-group">
															<label><b>Country : </b></label>
														</div><!-- /.form-group -->
													</div><!-- /.col-sm-4 -->
												<div class="col-sm-8">
												<div class="form-group">
													<input name="country" type="text" class="form-control" id="rs-form-example-fname" value=<?php echo $fetch_query['country']; ?>>
													<p class="help-block with-errors"></p>
												</div>
												</div><!-- /.form-group -->
											</div>

								</div><!-- /.panel-body -->
							</div><!-- /.panel -->
						</div>


						<div class="col-md-4 col-sm-12">
							
							<div class="panel panel-plain panel-rounded" >
								<div class="row">
									<div class="col-sm-12">
											<div class="form-group">
												<label><b>Logo : </b></label>
											</div><!-- /.form-group -->
										</div><!-- /.col-sm-4 -->
									<div class="col-sm-12">
									<div class="" style="margin-left:70px;">
										<a href="javascript:void(0);">
										<?php
										$chobi = $fetch_query['logo'];
										?>
											<img src="uploads/<?php echo (($chobi == '')?'user.png':$chobi);?>" alt="Avatar" class="avatar img-circle">
										</a>
					
									</div>
								<div class="form-group">
												<label></label>
												<input type="file" name="image" class="filestyle" data-buttontext="Find file" id="filestyle-0" tabindex="-1"  style="height:40px !important;">
												
											</div>
									</div><!-- /.form-group -->
								</div>
							</div> 
						</div>
						
						<div class="col-md-12" style="margin-top:-50px;">
							<!-- Begin Panel -->
								<div class="panel panel-plain panel-rounded">
									

									<div class="panel-footer">
											<div class="form-group m-a-0">
												<button name="update_details" type="submit" class="btn btn-success btn-wide" style="color:white;">Update</button>
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
	
</body>
</html>