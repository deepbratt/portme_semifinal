<!-- start pop up-->
	<div class="modal fade" id="myModal" role="dialog" >
    <div class="modal-dialog">
    <form method="post" enctype="multipart/form-data">
      <!-- Modal content-->
      <div class="modal-content" style="width:130%">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">New Customer</h4>
        </div>
        <div class="modal-body">
         <!-- Begin default content width -->
					<div class="container-fluid" style="padding:0px;margin-top:-20px;margin-right:5px;margin-left:-5px;">
						<div class="col-md-12 col-sm-12">
						<?php
								if(isset($data) && $data == "success")
						{
						?>
						<p style="text-align:center;background:#5cb85c;border:1px solid #CCC;border-radius:5px;padding:5px;color:#fff;font-weight:bold;margin-left:15px;"> Added Successfully </p>
						<?php
						}else if(isset($data) && $data == "error"){
						?>
						<p style="text-align:center;background:#e54e53;border:1px solid #CCC;border-radius:5px;padding:5px;color:#fff;font-weight:bold;margin-left:15px;"> Error in Insertion </p>
						<?php
						}
						?>
						</div>
					

						<div class="col-md-12">
						<!-- Begin Panel -->
							<div class="panel panel-plain panel-rounded">

								<div class="panel-body"style="margin-top:10px;">
									<form method="POST">
										<div class="row">
											<div class="col-sm-3">
													<div class="form-group">
														<label><b>Customer Name : </b></label>
													</div><!-- /.form-group -->
												</div><!-- /.col-sm-4 -->

												<div class="col-sm-3">
													<div class="form-group">
														<select name="sal" class="rs-selectize-single" required>
															<option value="">Salutation</option>
															<option value="Mr.">Mr.</option>
															<option value="Mrs.">Mrs.</option>
															<option value="Ms.">Ms.</option>
															<option value="Miss.">Miss.</option>
															<option value="Dr.">Dr.</option>
														</select>
													</div><!-- /.form-group -->
												</div><!-- /.col-sm-4 -->
												<div class="col-sm-3">
													<div class="form-group">
														<input name="fname" type="text" class="form-control" id="rs-form-example-fname" placeholder="First Name" required>
														<p class="help-block with-errors"></p>
													</div><!-- /.form-group -->
												</div><!-- /.col-sm-4 -->
												<div class="col-sm-3">
													<div class="form-group">
														<input name="lname" type="text" class="form-control" id="rs-form-example-lname" placeholder="Last Name" required>
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
												<input name="cname" type="text" class="form-control"placeholder="Company Name" required>
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
												<input name="email" type="email" class="form-control"placeholder="Enter Email Address" required>
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
												<input name="wphone" type="integer" class="form-control"placeholder="Enter Work Phone Number">
												<p class="help-block with-errors" required></p>
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
												<input name="mobile" type="integer" class="form-control"placeholder="Enter Mobile Number">
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
												<input name="gst" type="text" class="form-control"placeholder="Enter GSTIN/PAN No.">
												<p class="help-block with-errors"></p>
											</div>
											</div><!-- /.form-group -->
											</div>

								</div><!-- /.panel-body -->
							</div><!-- /.panel -->
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
																	<label> Address :<label>
																</div>
															</div>
															<div class="col-sm-8">
																<div class="form-group">
																	<input name="address" type="text" id="cityz" class="form-control billaddress1" placeholder="Enter Address" required>
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
																	<select name="bstate" class="form-control billstate1" required>
																	
																		<option value="">Select State</option>
																		<?php
																	$state_info = mysqli_query($mysqli, "select * from states");
																	while ($fetch_state = mysqli_fetch_array($state_info))
																	{
																	?>
																	<option value= "<?php echo $fetch_state['states_id'];?>"><?php echo $fetch_state['states_name'];?>&nbsp;(<?php echo $fetch_state['states_code'];?>)
																	</option>
																	<?php
																	}
																	?>
																	</select>
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
																	<label> Address :<label>
																</div>
															</div>
															<div class="col-sm-8">
																<div class="form-group">
																	<input name="saddress" type="text" id="cityz1" class="form-control billaddress2" placeholder="Enter Address" >
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
																	<select name="sstate" class="form-control billstate2">
																		<option value="">Select State</option>
																		<?php
																	$state_info = mysqli_query($mysqli, "select * from states");
																	while ($fetch_state = mysqli_fetch_array($state_info))
																	{
																	?>
																	<option value= "<?php echo $fetch_state['states_id'];?>"><?php echo $fetch_state['states_name'];?>&nbsp;(<?php echo $fetch_state['states_code'];?>)
																	</option>
																	<?php
																	}
																	?>
																	</select>
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
													<textarea class="form-control" placeholder="Notes" style="min-height:250px;" ></textarea>
													<p class="help-block with-errors"></p>
												</div><!-- /.form-group -->
											</div><!-- /.tab-pane -->

										</div><!-- /.tab-content -->
									</div><!-- .panel-body -->

									<div class="panel-footer">
											<div class="form-group m-a-0">
												<button type="reset" class="btn btn-default btn-wide">Reset</button>
												<button name="submit_details" type="submit" class="btn btn-success btn-wide">Submit</button>
											</div>
										</div><!-- /.panel-footer -->
									</form>
								</div><!-- /.panel -->

								<!-- End Panel -->

						</div>
					</div><!-- /.container-fluid -->
				</div>


       
		
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		 </div>		
		 </form>
	</div>
 </div> <!--/ end pop up-->	
 <script>
		function copybillingaddr(){
			var billaddress1 = $(".billaddress1").val();
			var billstate = $(".billstate1 option:selected").val();	
			
			$(".billaddress2").val(billaddress1);
			$('.billstate2 option[value='+billstate+']').prop('selected',true);
			//$(".billcountry2 select").val(billcountry)
		}
	</script>
