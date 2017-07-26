<!DOCTYPE html>
<html lang=en>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Port-ME | Sales Order
    </title>
    <?php include("metalinks.php");?>
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
                    New Sales Order :
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
                      
						<div class="row">
                          <div class="col-sm-3">
                            INVOICE No
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group" style="font-size:20px;font-weight:bold;">
                              #<?php echo date("dmy");?>
							  <?php echo $invoice_no;?>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-sm-3">
                            Customer Name
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <select class="form-control selectpicker">
                                 <option data-tokens="china">China</option>
								 <option data-tokens="malayasia">Malayasia</option>
								 <option data-tokens="singapore">Singapore</option>
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
                            Customer Name
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <input type="text" class="form-control rs-datepicker" placeholder="Sales Date" name="invoicedate">
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-sm-3">
                            E-com GSTIN
                          </div>
                          <div class="form-group col-sm-6">
                            <input type="text" class="form-control rs-datepicker" placeholder="Sales Date" name="invoicedate">
                            <p class="help-block with-errors"></p>
                          </div>
                        </div>

                    </div>


                    <div class="col-md-5 col-sm-12" style="text-align:right;">
                        <div class="col-sm-12">
                          <label style="font-size:20px;">Indrajit Ghosh</label>
                        </div>
                        <div class="col-sm-12">
                          <label style="font-size:15px;">Dukbanglow
                          </label>
                        </div>
                        <div class="col-sm-12">
                          <label style="font-size:15px;">
                            Murshidabad
                          </label>
                        </div>
                        <div class="col-sm-12">
                          <label style="font-size:15px;">
                            742132
                          </label>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
				
				<!-- table starts -->
				<div class="panel panel-plain panel-rounded table-responsive" style="padding:15px;">
					<table class="table table-b-t table-b-b datatable-default rs-table table-striped table-bordered" style="border-right:1px solid #f5f5f5;border-left:1px solid #f5f5f5;">
						<thead>
						   <tr>
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
								<th class="a">
									  <select class="form-control selectpicker">
										 <option data-tokens="china">China</option>
										 <option data-tokens="malayasia">Malayasia</option>
										 <option data-tokens="singapore">Singapore</option>
									  </select>
								</th>
								<th class="b"><input type="text" class="form-control" value="2345651" name=""></th>
								<th class="c"><input type="number" class="form-control" value="1" name=""></th>
								<th class="d"><input type="text" class="form-control" value="00.00" name=""></th>										
								<th class="e">
									<select class="form-control selectpicker">
										 <option data-tokens="china">China</option>
										 <option data-tokens="malayasia">Malayasia</option>
										 <option data-tokens="singapore">Singapore</option>
									  </select>
								</th>
								<th class="f"><input type="text" class="form-control" value="00.00" name=""></th>
								<th class="g"><input type="text" class="form-control" value="00.00" name=""></th>
								<th class="h"><input type="text" class="form-control" value="00.00" name=""></th>
								<th class="i"><input type="text" class="form-control" value="00.00" name=""></th>
								<th class="j" style="text-align:center;"><input type="text" class="form-control" value="00.00" name=""></th>
								<th class="k" style="text-align:center;"><input type="text" class="form-control" value="00.00" name=""></th>
								<th class="l" style="text-align:center;"><input type="text" class="form-control" value="00.00" readonly name=""></th>
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
													<b>00.00</b>
												</label>	
												<p class="help-block with-errors"></p>
											</div>
										</div>
									</div>

									<div class="row col-sm-12">
										<div class="col-sm-7">
											<label style="font-size:15px;margin-top:5px;">
												Discount
											</label>
										</div>												 
									<div class="col-sm-5">
											<div class="form-group">
												<div class="input-group">
											<div class="input-group-btn">
												<select  class="btn btn-default dropdown-toggle" style="height:40px;padding:2px;"
												data-toggle="dropdown"
												aria-haspopup="true" aria-expanded="false">			
													<option>Rs.</option>
													<option>%</option>															
												</select>
											</div><!-- /btn-group -->
											<input type="text" class="form-control" aria-label="...">
										</div><!-- /input-group -->
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
													<b style="color:#5dc26a;">00.00</b>
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
	  <?php include("sales_order_add_customer.php");?>

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

      </body>
    </html>
