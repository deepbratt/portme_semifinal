<?php
	include ('config.php');
	$business_id = $_SESSION['business_id'];
	$select_me = mysqli_query($mysqli,"select * from tbl_business where business_id='$business_id'");
	$fetch_me = mysqli_fetch_array($select_me);
?>

<!DOCTYPE html>
<html lang=en>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Port-ME | Purchase Order
    </title>
    <?php include("metalinks.php");?>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVEqoCsKgUMmAcDVX9OAwVMDewLI6yOAQ&sensor=false&libraries=places&language=en"></script>
    <style>
      .padmar{
        margin:0px !important;
        padding:0px !important;
		
      }
	  .form-control{
		height:40px !important;
	  }
    </style>
  </head>
  <body>
    <!--[if lt IE 8]>s
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
            <div class="rs-dashhead m-b-lg" style="background:#f5f5f5">
              <div class="rs-dashhead-content">
                <div class="rs-dashhead-titles">
                  <h3 class="rs-dashhead-title m-t">
                    New Purchase Order :
                    <div style="float:right;">
                      <span style="padding:10px 5px;font-size:25px;font-weight:normal;color:#000;cursor:pointer;" style="float:-right;" onclick="window.location.href='view_sales_order.php'"> 
                        <i class="fa fa-remove">
                        </i> 
                      </span>
                    </div>
                  </h3>
                </div>
              </div>

            </div>

            <div class="container-fluid" style="padding:0px;margin:0px;">
              <div class="col-md-12 col-sm-12" style="padding:0px;margin:0px;">	
			    <form name="vendor_form" method="POST" enctype="multipart/form-data" id="rs-validation-login-page">

                <!-- Begin Panel -->
                <div class="panel panel-plain panel-rounded">
                  <div class="panel-body">
                    <div class="col-md-7 col-sm-12" style="padding:0px;margin:0px;">
						<?php
							$get_last_sales_id = mysqli_query($mysqli,"SELECT * FROM tbl_transactions WHERE business_id='$business_id' ORDER BY tbl_transaction_id DESC");
							$fetch_last_sales = mysqli_fetch_array($get_last_sales_id);

							$invoice_no = $fetch_last_sales['tbl_transaction_id']+1;
						?>
						<div class="row">
                          <div class="col-sm-3">
                           <b> INVOICE No</b>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group" style="font-size:20px;font-weight:bold;">
							  <?php 
								$invoice_num_gene = "INV-".date('dmy')."000".$invoice_no."";
							  ?>
                              #<?php echo $invoice_num_gene;?>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-sm-3">
                            <b>Vendor Name</b>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <select class="form-control selectpicker"  onchange="show_customer_data(this);">
								 <option selected disabled>Choose Vendor</option>
                                 <?php
									
									$get_fetch_details = mysqli_query($mysqli,"SELECT * FROM tbl_contacts WHERE business_id='$business_id' and customer_type='vendor'");

									while($fetch_cust_details = mysqli_fetch_array($get_fetch_details)){
								?>
									<option value="<?php echo $fetch_cust_details['customer_id'];?>" <?php echo((isset($_GET['custid']) && $fetch_cust_details['customer_id']==$_GET['custid'])?'selected':'');?>><?php echo ucfirst($fetch_cust_details['first_name']);?>&nbsp;<?php echo ucfirst($fetch_cust_details['last_name']);?> - <?php echo $fetch_cust_details['mobile'];?></option>
								<?php
									}
								?>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-3">
                            <button style="text-align:center;font-size:16px;" class="btn btn-success btn-wide" data-toggle="modal" data-target="#myModal" type="button">
									<i class="fa fa-plus" style=""></i> Add
                            </button>
                          </div>
                        </div>
						
						<div class="row">
                          <div class="col-sm-3">
                            <b>Sales Date</b>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <input type="text" class="form-control rs-datepicker" placeholder="Sales Date" name="invoicedate">
                            </div>
                          </div>
                        </div>

						<div class="row">
                          <div class="col-sm-3">
                            <b>Place of supply</b>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
							  <select class="form-control cus_states" name="cust_states">
								  <?php
									$get_all_states = mysqli_query($mysqli,"SELECT * FROM states");
									while($fetch_all_states = mysqli_fetch_array($get_all_states)){
								  ?>
							      <option value="<?php echo $fetch_all_states['states_code'];?>"><?php echo $fetch_all_states['states_name'];?> (<?php echo $fetch_all_states['states_code'];?>)</option>
								  <?php
									}
								  ?>
							  </select>
                            </div>
                          </div>
                        </div>

                        <!--<div class="row">
                          <div class="col-sm-3">
                            <b>E-com GSTIN</b>
                          </div>
                          <div class="form-group col-sm-6">
                            <input type="text" class="form-control" placeholder="GST IN" name="invoicedate">
                            <p class="help-block with-errors"></p>
                          </div>
                        </div>-->

                    </div>

					<!-- customer details fetch -->
                    <div class="col-md-5 col-sm-12 custo_det" style="text-align:right;margin-top:40px;">
                        
                    </div>
					<!-- customer details fetch ends -->
                  </div>
                </div>
				
				<!-- table starts -->
				<div class="panel panel-plain panel-rounded table-responsive sales_chart" style="padding:15px;">
					<table class="table table-b-t table-b-b datatable-default rs-table table-striped table-bordered" style="border-right:1px solid #f5f5f5;border-left:1px solid #f5f5f5;">
						<thead>
						   <tr style="font-size:15px;">
								<th style="text-align:center;">Product</th>
								<th style="text-align:center;">HSN</th>
								<th style="text-align:center;">Qty</th>
								<th style="text-align:center;">Unit Price</th>										
								<th style="text-align:center;">Tax rate</th>
								<th colspan="3" style="text-align:center;">TAX</th>
								<th style="text-align:center;">Cess</th>
								<th style="text-align:center;">Tax value</th>
								<th style="text-align:center;">Discount</th>
								<th style="text-align:center;">Total</th>
								<th>&nbsp;</th>
							</tr>
						</thead>
						<tbody class="table_dats">
							<tr>
								<th style="text-align:center;"><i class="fa fa-shopping-bag" aria-hidden="true"></i></th>
								<th style="text-align:center;"><i class="fa fa-table" aria-hidden="true"></i></th>
								<th style="text-align:center;"><i class="fa fa-balance-scale" aria-hidden="true"></i></th>
								<th style="text-align:center;"><i class="fa fa-inr" aria-hidden="true"></i></th>										
								<th style="text-align:center;"><i class="fa fa-percent" aria-hidden="true"></i></th>								
								<th style="text-align:center;">CGST</th>
								<th style="text-align:center;">SGST</th>
								<th style="text-align:center;">IGST</th>
								<th style="text-align:center;"><i class="fa fa-inr" aria-hidden="true"></i></th>
								<th style="text-align:center;"><i class="fa fa-inr" aria-hidden="true"></i></th>
								<th style="text-align:center;"><i class="fa fa-inr" aria-hidden="true"></i></th>
								<th style="text-align:center;"><i class="fa fa-inr" aria-hidden="true"></i></th>
								<th></th>
							</tr>

							<tr class="rocks">
								<th class="a" style="width:150px;">
									  <select class="form-control selectpicker pid" name="product_id[]" style="width:90px;margin:0px;padding:0px;" onchange="complete_value(this)">
										 <option selected disabled>Choose</option>
										 <?php
											$business_id = $_SESSION['business_id'];
											
											$get_prodcut = mysqli_query($mysqli,"SELECT * FROM tbl_products WHERE business_id='$business_id'");
											while($fetch_product = mysqli_fetch_array($get_prodcut)){
										 ?>
											<option data-tokens="<?php echo $fetch_product['name'];?>" value="<?php echo $fetch_product['product_id'];?>"><?php echo $fetch_product['name'];?></option>
										 <?php
											}
										 ?>
									  </select>
								</th>
								<th class="b"><input type="text" class="form-control hsn" value="" name="hsn[]" style="width:80px;text-align:center"></th>
								<th class="c"><input type="text" class="form-control qty" value="1" name="qty[]" style="width:40px;margin:0px;padding:5px;" onchange="complete_value(this)"></th>
								<th class="d"><input type="text" class="form-control unit_price" value="00.00" name="unit_price[]" style="width:120px;" onchange="complete_value(this)"></th>		

								<th class="e" >
									<select class="form-control selectpicker tax_rate" name="tax_rate[]" onchange="complete_value(this)" style="width:70px;margin:0px;padding:5px;">
											<option value="">Choose</option>
										 <?php
											$get_tax = mysqli_query($mysqli,"SELECT * FROM tax_rates");
											while($fetch_tax = mysqli_fetch_array($get_tax)){
										 ?>
											<option value="<?php echo $fetch_tax['tax_rate'];?>"  ><?php echo $fetch_tax['tax_rate'];?></option>
										 <?php
											}
										 ?>
									  </select>
								</th>
								<th class="f"><input type="text" class="form-control cgst" id="cgst"  value="00.00" style="width:50px;margin:0px;padding:5px;" name="cgst[]" onchange="complete_value(this)"></th>
								<th class="g"><input type="text" class="form-control sgst" id="sgst" value="00.00" style="width:50px;margin:0px;padding:5px;" name="sgst[]" onchange="complete_value(this)"></th>
								<th class="h"><input type="text" class="form-control igst" id="igst" value="00.00" style="width:50px;margin:0px;padding:5px;" name="igst[]" onchange="complete_value(this)"></th>
								<th class="i"><input type="text" class="form-control cess" id="cess" value="00.00" style="width:50px;margin:0px;padding:5px;" name="cess[]" onchange="complete_value(this)"></th>
								<th class="j"><input type="text" class="form-control tax_val"  value="00.00" style="width:50px;margin:0px;padding:5px;" name="tax_val[]" onchange="complete_value(this)"></th>
								<th class="k" ><input type="text" class="form-control disount" value="00.00" name="discount[]" style="text-align:center;width:50px" onchange="complete_value(this)"></th>
								<th class="l" ><input type="text" class="form-control total" value="00.00" readonly style="text-align:center;width:100px" name="total[]"  onchange="complete_value(this)"></th>
								<th><a href="javascript:void(0);" class="add-more" onclick="add_more_fun();"><i class="fa fa-plus" style="font-size:20px;margin-top:10px;"></i></a></th>
							</tr>

							<tr>
								<th colspan="9"></th>
								
								<th style="" colspan="4">

									<div class="row col-sm-12">
										<div class="col-sm-7">
											<label style="font-size:15px;">
												Sub Total <i class="fa fa-inr" aria-hidden="true"></i>
											</label>
										</div>
										<div class="col-sm-5">
											<div class="form-group">
												<label style="font-size:17px;">
													<b class="subtotal">00.00</b>
												</label>	
												<p class="help-block with-errors"></p>
											</div>
										</div>
									</div>

									<div class="row col-sm-12">
										<div class="col-sm-7">
											<label style="font-size:15px;">
												Discount <i class="fa fa-inr" aria-hidden="true"></i>
											</label>
										</div>
										<div class="col-sm-5">
											<div class="form-group">
												<label style="font-size:17px;">
													<b class="total_discount">00.00</b>
												</label>	
												<p class="help-block with-errors"></p>
											</div>
										</div>
									</div>

									<div class="row col-sm-12">
										<div class="col-sm-7">
											<label style="font-size:15px;">
												Tax <i class="fa fa-inr" aria-hidden="true"></i>
											</label>
										</div>
										<div class="col-sm-5">
											<div class="form-group">
												<label style="font-size:17px;">
													<b class="total_tax">00.00</b>
												</label>	
												<p class="help-block with-errors"></p>
											</div>
										</div>
									</div>

									<div class="row col-sm-12">
										<div class="col-sm-7">
											<label style="font-size:20px;">
												TOTAL <i class="fa fa-inr" aria-hidden="true"></i>
											</label>
										</div>
										<div class="col-sm-5">
											<div class="form-group">
												<label style="font-size:20px;">
													<b style="color:#5dc26a;" class="complete_total">00.00</b>
												</label>															
												<p class="help-block with-errors"></p>
											</div>
										</div>
									</div>

								</th>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- table starts -->

                 <div class="col-md-12">
					  <div class="panel panel-plain panel-rounded">
						<div class="panel-footer">
						  <div class="form-group m-a-0" style="padding-left:0px;">
							<button type="reset" class="btn btn-default btn-wide">Reset
							</button>
							<button type="submit" class="btn btn-success btn-wide">Submit
							</button>
						  </div>
						</div>
					  </div>
				  </div>

			   </form>		
            </div>

          </div>

        </div>
-
      </article>
      <?php include("footer.php");?>
	  <?php include("purchase_order_add_vendor.php");?>

      <script src="js/bootstrap-switch.min.js"></script>
      <script src="js/bootstrap-switch-example.js"></script>
      <script src="js/cleave.min.js"></script>
      <script src="js/cleave-phone.au.js"></script>
      <script src="js/cleave-example.js"></script>
      <script src="js/bootstrap-datepicker.min.js"></script>
      <script src="js/jquery.maskedinput.min.js"></script>
      <script src="js/maskedinput-example.js"></script>
      <script src="js/bootstrap-maxlength.min.js"></script>
      <script src="js/maxlength-example.js"></script>
      <script src="js/selectize.min.js"></script>
	  <script src="js/datepicker-example.js"></script>
      <script src="js/selectize-example.js"></script>
      <script src="js/validator.min.js"></script>

	  <script>
	  $( function() {
		$( ".rs-datepicker" ).datepicker();
	  });

		 function add_more_fun(){
			  //alert('zz');
			  var a = $(".a").html();
			  var b = $(".b").html();
			  var c = $(".c").html();
			  var d = $(".d").html();
			  var e = $(".e").html();
			  var f = $(".f").html();
			  var g = $(".g").html();
			  var h = $(".h").html();
			  var i = $(".i").html();
			  var j = $(".j").html();
			  var k = $(".k").html();
			  var l = $(".l").html();

			  var htmlz = "<th>"+a+"</th><th>"+b+"</th><th>"+c+"</th><th>"+d+"</th><th>"+e+"</th><th>"+f+"</th><th>"+g+"</th><th>"+h+"</th><th>"+i+"</th><th>"+j+"</th><th>"+k+"</th><th>"+l+"</th><th><a href='javascript:void(0);' class='add-more' onclick='remove_class(this);'><i class='fa fa-trash' style='font-size:20px;margin-top:10px;color:red;'></i></a></th>";
			  
			  //alert(newhtml);
			  
			  $(".rocks").after("<tr>"+htmlz+"</tr>");
		  };

		  function remove_class(e){
			
			$(e).parents("tr").remove();
		  }
	  </script>

	  <script type="text/javascript">
		 function ajax_add_cust() {
			//alert('ss');
			var salutation = $('.salutation option:selected').val();
			var fname = $('.fname').val();
			var lname = $('.lname').val();
			var cname = $('.cname').val();
			var email = $('.email').val();
			var wphone = $('.wphone').val();
			var mobile = $('.mobile').val();
			var gst = $('.gst').val();
			var billaddress1 = $('.billaddress1').val();
			var billstate1 = $('.billstate1').val();
			var billaddress2 = $('.billaddress2').val();
			var billstate2 = $('.billstate2').val();
			var notes = $('.notes').val();
			
				$.ajax({
				  type: 'post',
				  url: 'ajax/add_vendor_ajax.php',
				  data:{
					sal:salutation,
					fname:fname,
					lname:lname,
					cname:cname,
					email:email,
					wphone:wphone,
					mobile:mobile,
					gst:gst,
					address:billaddress1,
					bstate:billstate1,
					saddress:billaddress2,
					sstate:billstate2,
					notes:notes,
					
				  },
				  success: function (response){
					//document.getElementById("result").innerHTML=response;
					//alert(response);
					$('#myModal').modal('hide');
				  }
				});
			 }
		   
			function show_customer_data(e){
				var salutation = $(e).val();
				$.ajax({
				  type: 'post',
				  url: 'ajax/get_vendor_details.php',
				  data:{
					suggest:salutation,
				  },
				  success: function (response){
					//alert(response);
					$('.custo_det').html(response);
					if(response != ''){
						$('.sales_chart').show();
						var statez = $('.p_o_s_c').text();
						$('.cus_states option[value='+statez+']').prop('selected',true);
						//alert(n);
					}
				  }
				});
			}

			function get_sales_order_ajax(e){
				var product_id = $(e).val();
				//alert(product_id);
				$.ajax({
				  type: 'post',
				  url: 'ajax/get_purchase_order_ajax.php',
				  data:{
					suggest:product_id,
				  },
				  success: function (response){
					//alert(response.name);
					var price = response.selling_price;
					
					$(e).closest('tr').find('.hsn').val(response.HSN_code);
					$(e).closest('tr').find('.qty').val(1);
					$(e).closest('tr').find('.unit_price').val(price);
					$(e).closest('tr').find('.total').val(price);

				  }
				});
			}
			
			function complete_value(e){
				/*get the prev values */
				var p_id = $(e).closest('tr').find('.pid').val();
				var hsn  = $(e).closest('tr').find('.hsn').val();
				var qty  = $(e).closest('tr').find('.qty').val();
				var unit_price = $(e).closest('tr').find('.unit_price').val();
				var tax_rate = $(e).closest('tr').find('.tax_rate').val();
				var cgst = $(e).closest('tr').find('.cgst').val();
				var sgst = $(e).closest('tr').find('.sgst').val();
				var igst = $(e).closest('tr').find('.igst').val();
				var cess = $(e).closest('tr').find('.cess').val();
				var tax_val = $(e).closest('tr').find('.tax_val').val();
				var discount = $(e).closest('tr').find('.disount').val();
				var total =	$(e).closest('tr').find('.total').val();
				var cus_state = $('.cust_states').val();
				/* get the prev values ends */

				$.ajax({
				  type: 'post',
				  url: 'ajax/get_purchase_order_ajax.php',
				  data:{
					p_id:p_id,
					hsn:hsn,
					qty:qty,
					unit_price:unit_price,
					tax_rate:tax_rate,
					cgst:cgst,
					sgst:sgst,
					igst:igst,
					cess:cess,
					tax_val:tax_val,
					discount:discount,
					total:total,
					cus_state:cus_state
				  },
				  success: function (response){
					//alert(response.hsn);
					$(e).closest('tr').find('.hsn').val(response.hsn);
					$(e).closest('tr').find('.qty').val(response.qty);
					$(e).closest('tr').find('.unit_price').val(response.unit_price);
					$(e).closest('tr').find('.tax_rate').val(response.tax_rate);
					$(e).closest('tr').find('.cgst').val(response.cgst);
					$(e).closest('tr').find('.sgst').val(response.sgst);
					$(e).closest('tr').find('.igst').val(response.igst);
					$(e).closest('tr').find('.cess').val(response.cess);
					$(e).closest('tr').find('.tax_val').val(response.tax_val);
					$(e).closest('tr').find('.disount').val(response.disount);
					$(e).closest('tr').find('.total').val(response.total);
					$(e).closest('tr').find('.unit_price').val(response.unit_price);
				
					/*bottom main calculation*/
					$(e).closest('tr').find('.subtotal').val("00.00");
					$(e).closest('tr').find('.total_discount').val("00.00");
					$(e).closest('tr').find('.total_tax').val("00.00");
					$(e).closest('tr').find('.complete_total').val("00.00");
					/*bottom main calculation ends */
				  }
				});
				

				
			}
			function tax_change_same(t)
			{
				var unit_price = $('#unit_price').val();
				var yo = $(t).val();
				var val_cgst = yo/2;
				var val_sgst = yo/2;
				var final_cgst = unit_price * (val_cgst/100);
				var final_sgst = unit_price * (val_sgst/100);
				$(t).closest('tr').find('.cgst').val(final_cgst);
				$(t).closest('tr').find('.sgst').val(final_sgst);
				var final_tax = final_cgst + final_sgst ;
				$(t).closest('tr').find('.tax_val').val(final_tax);
				
			}
			function tax_change_other(v)
			{
				var unit_price = $('#unit_price').val();
				var val_igst = $(v).val();
				var final_igst = unit_price * (val_igst/100);
				$(v).closest('tr').find('.igst').val(final_igst);
				//var final_tax = final_igst;
				//$(t).closest('tr').find('.tax_val').val(final_tax);
				
			}

			/*function qty_mul(e){
				var unit_price = $(e).closest('tr').find('.unit_price').val();
				var qty = e.val();
			}

			*/


		 </script>
		 
		 
      </body>
    </html>
