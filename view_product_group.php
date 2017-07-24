<?php
include ("config.php");

$category_id = $_GET['category_id'];
$view_category_info = mysqli_query($mysqli, "select * from product_category where category_id='".$category_id."'");
$fetch_category_details = mysqli_fetch_array($view_category_info);
?>


<!DOCTYPE html>
<html lang=en>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>View Product | Port-ME</title>
	<?php include("metalinks.php");?>
	<link rel="stylesheet" href="bootstrap.min.css">
	<script src="http://code.jquery.com/jquery.min.js"></script>
	<script src="bootstrap.min.js"></script>
	<style>
		.atrri{display:none;}
	</style>
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
									View Product Category
									<div style="float:right;">
										<!--<span style="padding:10px 10px;font-size:15px;font-weight:normal;color:#4a89dc;cursor:pointer;border-right:1px solid #CCC;"> <i class="fa fa-lightbulb-o"></i> &nbsp;&nbsp;Page Tutorial</span>-->

										<span style="padding:10px 5px;font-size:25px;font-weight:normal;color:#000;cursor:pointer;" style="float:-right;" onclick="window.location.href='product_group.php'"> <i class="fa fa-remove"></i> </span>
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
											
											<div class="row" style="margin-bottom:10px;">
												<div class="col-sm-3" style="margin-top:10px;">
													<span >
														Type
													</span>
												</div><!-- /.col-sm-4 -->

												<div class="col-sm-6">
													<div class="radio radio-custom">
													<label class="radio-inline">
														<input type="radio" name="cs_radio" id="cs-radio-04" value="Product" <?php echo(($fetch_category_details['category_type'] == 'Product')?'checked':'');?> disabled>
														<span class="checker"></span>
														Product
													</label>
													<label class="radio-inline">
														<input type="radio" name="cs_radio" id="cs-radio-05" value="Service" <?php echo(($fetch_category_details['category_type'] == 'Service')?'checked':'');?> disabled>
														<span class="checker"></span>
														Service
													</label>
												</div>

												</div><!-- /.col-sm-4 -->
											</div><!-- /.row -->


											<div class="row">
												<div class="col-sm-3">
													Product Name
												</div>
												<div class="col-sm-9">
													<div class="form-group">
														<label  id="rs-form-example-email" > <?php echo $fetch_category_details['category_name'];?></label>
														<p class="help-block with-errors"></p>
													</div>
												</div>
											</div>
											
											<div class="row">
												<div class="col-sm-3">
													Description
												</div>
												<div class="col-sm-9">
													<div class="form-group">
														<label> <?php echo $fetch_category_details['description'];?></label>
														<p class="help-block with-errors"></p>
													</div>
												</div>
											</div>
											
											

											<div class="row">
												<div class="col-sm-3">
													Item Type
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<label> <?php echo $fetch_category_details['item_type'];?> </label>
														<p class="help-block with-errors"></p>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-sm-3" style="margin-top:10px;">
													<div class="form-group">
														Multiple Items
													</div><!-- /.form-group -->
												</div><!-- /.col-sm-4 -->
		
											</div><!-- /.row -->

											<div class="row" >
													<div class="col-sm-3">
													</div>
													<div class="col-sm-4" style="margin-top:-35px;">
														<div class="form-group">
															<label style="font-size:13px;">
																<b>Attribute</b>
															</label>
															<br />
															<?php
																$data_atti = explode(",",$fetch_category_details['attribute_name']);
																
																foreach($data_atti As $data_atti_values){
			
																	echo $data_atti_values;
																?>
																<p class="help-block with-errors"></p>
															<?php
																}
															?>
															
														</div>
													</div>

													<div class="col-sm-5" style="margin-top:-35px;">
														<div class="form-group">
															
																<label style="font-size:13px;">
																	<b>Options</b>
																</label>
																<br />
															<?php
																$data_option = explode(",",$fetch_category_details['attribute_options']);
																
																foreach($data_option As $key => $data_option_values){
			
																	echo $data_option_values;
																?>
																<p class="help-block with-errors"></p>
															<?php
																}
															?>
														</div>
													</div>
											</div>			
								</div><!-- /.panel-body -->
							</div><!-- /.panel -->
						</div>
						
						<!-- right side -->
						<div class="col-md-5 col-sm-12">
							<div class="dropzone">
								
							</div>
						</div>
						<!-- right side ends -->
						
					</div><!-- /.container-fluid -->
					<div class="panel-footer" style="background:#fff;">
							<div class="form-group m-a-0">
								<button type="reset" class="btn btn-default btn-wide">Reset</button>
								<a class="btn btn-success btn-wide" href="product_group.php" style="color:white;">Back</a>
							</div>
						</div><!-- /.panel-footer -->
					</form>
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
	<script src="js/drag_file.js"></script>
	<script>
		function valueChanged()
		{
			if($('.attributes_options').is(":checked"))   
				$(".atrri").show();
			else
				$(".atrri").hide();
		}

		$(document).ready(function() {
		  $(".add-more").click(function(){ 
			  var htmlz = "<div class='row atrri_add_cont'><div class='col-sm-3 ache_ekta'></div><div class='col-sm-4'><div class='form-group'><label style='font-size:13px;'>Attribute</label><input type='text' name='attri[]' class='form-control' placeholder='Eg: color' required><p class='help-block with-errors'></p></div></div><div class='col-sm-5'><div class='form-group'><div class='col-sm-10'><label style='font-size:13px;'>Options</label><input type='text' name='optn[]' class='form-control' placeholder='Red' required><p class='help-block with-errors'></p></div><div class='col-sm-2' style='margin-top:30px;'><a href='#' class='remove' style='color:#ef5350;'><i class='fa fa-trash'></i></a></div></div></div></div>";
			  //alert(htmlz);
			  $(".add-more-contz").append(htmlz);
		  });

		  $("body").on("click",".remove",function(){ 
			  
			  $(this).parents(".atrri_add_cont").remove();
		  });

		});
	</script>
	
	<script>
		(function() {
			$(".dropzone").dropzone({
				url: 'upload.php',
				margin: 20,
				params:{
					'action': 'save'
				},
				success: function(res, index){
					console.log(res, index);
				}
			});

			$(".dropzone2").dropzone({
				url: 'upload.php',
				margin: 20,
				allowedFileTypes: 'image.*, pdf',
				params:{
					'action': 'save'
				},

				uploadOnDrop: true,
				uploadOnPreview: false,
				preview: true,
				success: function(res, index){
					console.log(res, index);
				}
			});
		}());
	</script>
	
</body>
</html>