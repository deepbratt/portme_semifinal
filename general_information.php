<?php
include("config.php");
$business_id = $_SESSION['business_id'];
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

						
						<?php
						$select_query = mysqli_query($mysqli,"select * from tbl_business where business_id='".$business_id."'");
						$fetch_query = mysqli_fetch_array($select_query);
						?>
						<div class="col-md-8 col-sm-7 ">
						<!-- Begin Panel -->
							<div class="panel panel-plain panel-rounded">

								<div class="panel-body">
									<form >
											<div class="row">
												<div class="col-sm-2">
												<b>Full Name:</b>
												</div>
												<div class="col-sm-7">
													<div class="form-group" style="margin-bottom:-1px;">
														<label style="color:#4a89dc;"><?php echo ucfirst($fetch_query['owners_firstname']);?></label>
														<label style="color:#4a89dc;"><?php echo ucfirst($fetch_query['owners_lastname']);?></label>
													</div><!-- /.form-group -->
												</div><!-- /.col-sm-4 -->												
											</div><!-- /.row -->
											<br/>
										<div class="row">
											<div class="col-sm-2">
													<b>Company Name:</b>
											</div>
												<div class="form-group">
													<div class="col-sm-8">
														<label style="color:#4a89dc;"><?php echo $fetch_query['enterprise_name'];?> </label>
													</div><!-- /.form-group -->
												</div>
										</div>
										<br/>
										<div class="row">
											<div class="col-sm-2">
												<b>	Email:</b>
											</div>
												<div class="form-group">
													<div class="col-sm-8">
													<label style="color:#4a89dc;"><?php echo $fetch_query['email'];?> </label>												
													</div><!-- /.form-group -->
												</div>
											</div>
											<br/>

											<div class="row">
											<div class="col-sm-2">
												<b>	Work Phone:</b>
											</div>
												<div class="form-group">
													<div class="col-sm-8">
													<label style="color:#4a89dc;"><?php echo $fetch_query['work_phone'];?> </label>												
													</div><!-- /.form-group -->
												</div>
											</div>
											<br/>

											<div class="row">
											<div class="col-sm-2">
													<b>Mobile:</b>
											</div>
												<div class="form-group">
													<div class="col-sm-8">
													<label style="color:#4a89dc;"><?php echo $fetch_query['mobile'];?> </label>													
													</div><!-- /.form-group -->
												</div>
											</div>
											<br/>

											<div class="row">
											<div class="col-sm-2">
													<b>GST / PAN No. :</b>
											</div>
												<div class="form-group">
													<div class="col-sm-8">
													<label style="color:#4a89dc;"><?php echo $fetch_query['gst_pan'];?> </label>													
													</div><!-- /.form-group -->
												</div>
											</div>
											<br/>

											<div class="row">
											<div class="col-sm-2">
												<b>	Business Type :</b>
											</div>
												<div class="form-group">
													<div class="col-sm-8">
													<label style="color:#4a89dc;"><?php echo $fetch_query['type_of_business'];?> </label>													
													</div><!-- /.form-group -->
												</div>
											</div>
											<br/>

											<div class="row">
											<div class="col-sm-2">
													<b>Address :</b>
											</div>
												<div class="form-group">
													<div class="col-sm-8">
													<label style="color:#4a89dc;"><?php echo $fetch_query['address'];?> </label>						
													</div><!-- /.form-group -->
												</div>
											</div>
											<br/>

											<div class="row">
											<div class="col-sm-2">
													<b>State :</b>
											</div>
												<div class="form-group">
													<div class="col-sm-8">
													<label style="color:#4a89dc;"><?php echo $fetch_query['state'];?> </label>													
													</div><!-- /.form-group -->
												</div>
											</div>
											<br/>

											<div class="row">
											<div class="col-sm-2">
													<b>Country :</b>
											</div>
												<div class="form-group">
													<div class="col-sm-8">
													<label style="color:#4a89dc;"><?php echo $fetch_query['country'];?> </label>													
													</div><!-- /.form-group -->
												</div>
											</div>
											<br/>

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
								
									</div><!-- /.form-group -->
								</div>
							</div>
						</div>
						
						<div class="col-md-12" style="margin-top:-50px;">
							<!-- Begin Panel -->
								<div class="panel panel-plain panel-rounded">
									

									<div class="panel-footer">
											<div class="form-group m-a-0">
												<a class="btn btn-success btn-wide" href="edit_general_information.php?business_id=<?php echo $fetch_query['business_id']?>" style="color:white;">Edit</a>
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