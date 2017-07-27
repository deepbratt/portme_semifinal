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
                    Print Sales Order :
                    <div style="float:right;">
                      <button type="button" class=" fa fa-file-pdf-o btn btn-success " onclick="pdf_document();">  PDF</button>	
					  <button type="button" class=" fa fa-print btn btn-success " onclick="javascript:printDiv('printablediv')"> PRINT </button>
                    </div>
                  </h3>
                </div>
              </div>

            </div>

	<div id="printablediv" >
		<form id="" runat="server">
<<<<<<< HEAD
            
                
                
				
				<!-- table starts -->
				<div class="panel panel-plain panel-rounded " style="padding:15px;">
					<table class="table table-b-t table-b-b datatable-default rs-table table-striped table-bordered" style="border-right:1px solid #f5f5f5;border-left:1px solid #f5f5f5;">

						<thead colspan="12">
						   <tr style="font-size:15px;">
								<th colspan="4" style="text-align:left;">
									<div class="col-sm-12">
									  <label style="font-size:30px;">Company Name</label>
									</div>
									<div class="col-sm-12">
									  <label style="font-size:17px;">Owner Name
									  </label>
									</div> 
									<div class="col-sm-12">
									  <label style="font-size:17px;">Address,State,Zip.
									  </label>
									</div>
								</th>

								<th colspan="5" style="text-align:center;">
									<div class="col-sm-12">
									  <label style="font-size:30px;">Customer Name</label>
									</div>
									<div class="col-sm-12">
									  <label style="font-size:17px;">Phone No.
									  </label>
									</div> 
									<div class="col-sm-12">
									  <label style="font-size:17px;">Address,State,Zip.
									  </label>
									</div> 
								</th>

								<th colspan="3" style="text-align:right;">
									<div class="col-sm-12">
									  <label style="font-size:30px;">Invoice</label>
									</div>
									<div class="col-sm-12">
									  <label style="font-size:19px;">Invoice No. :0201202
									  </label>
									</div>
									<div class="col-sm-12">
									  <label style="font-size:17px;">
										Date : <?php echo date("d/m/y");?>
									  </label>
									</div> 
								</th>						
								
							</tr>
						</thead>
						
						
=======
            <div class="container-fluid" style="padding:0px;margin:0px;">
              <div class="col-md-12 col-sm-12" style="padding:0px;margin:0px;">	 
                <!-- Begin Panel -->
                <div class="panel panel-plain panel-rounded">
                  <div class="panel-body">

                    <div class="col-md-4 col-sm-12" style="padding:0px;margin:0px;">						
						 <div class="col-sm-12">
                          <label style="font-size:30px;">Company Name</label>
                        </div>
						<div class="col-sm-12">
                          <label style="font-size:17px;">Owner Name
                          </label>
                        </div> 
                        <div class="col-sm-12">
                          <label style="font-size:17px;">Address,State,Zip.
                          </label>
                        </div> 
                   </div>

					  <div class="col-md-4 col-sm-12" style="text-align:center;">												
						 <div class="col-sm-12">
						  <label style="font-size:30px;">Customer Name</label>
						</div>
						<div class="col-sm-12">
						  <label style="font-size:17px;">Phone No.
						  </label>
						</div> 
						<div class="col-sm-12">
						  <label style="font-size:17px;">Address,State,Zip.
						  </label>
						</div> 
                   </div>	

                    <div class="col-md-4 col-sm-12" style="text-align:right;">
                        <div class="col-sm-12">
                          <label style="font-size:30px;">Invoice</label>
                        </div>
                        <div class="col-sm-12">
                          <label style="font-size:19px;">Invoice No. :0201202
                          </label>
                        </div>
                        <div class="col-sm-12">
                          <label style="font-size:17px;">
                            Date : <?php echo date("d/m/y");?>
                          </label>
                        </div>  
                    </div>
                  </div>
                </div>
				
				<!-- table starts -->
				<div class="panel panel-plain panel-rounded table-responsive" style="padding:15px;">
					<table class="table table-b-t table-b-b datatable-default rs-table table-striped table-bordered" style="border-right:1px solid #f5f5f5;border-left:1px solid #f5f5f5;">
>>>>>>> 32250720937b6a46fedad4a2cf5f8b25a91bc31d
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
<<<<<<< HEAD
								
							</tr>
						</thead>
						<tbody>
=======
								<th>&nbsp;</th>
							</tr>
						</thead>
						<tbody class="table_dats">
>>>>>>> 32250720937b6a46fedad4a2cf5f8b25a91bc31d
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
<<<<<<< HEAD
							
							</tr>

							<tr>
								<th style="text-align:center;">Product</th>
								<th style="text-align:center;">21211214</th>
								<th style="text-align:center;">25</th>
								<th style="text-align:center;">00.00</th>										
								<th style="text-align:center;">00%</th>
								<th style="text-align:center;">00.00</th>
								<th style="text-align:center;">00.00</th>
								<th style="text-align:center;">00.00</th>
								<th style="text-align:center;">00.00</th>
								<th style="text-align:center;">00.00</th>
								<th style="text-align:center;">00.00</th>
								<th style="text-align:center;">00.00</th>
=======
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
>>>>>>> 32250720937b6a46fedad4a2cf5f8b25a91bc31d
							</tr>

							<tr>
								<th colspan="9"></th>
								
<<<<<<< HEAD
								<th colspan="1" style="text-align:center;font-size:18px;">SubTotal</th>
								<th colspan="2" style="text-align:center;font-size:18px;"><i class="fa fa-inr"></i> 00.00</th>			
							</tr>

							<tr>
								<th colspan="9"></th>
								
								<th colspan="1" style="text-align:center;font-size:18px;">Discount</th>
								<th colspan="2" style="text-align:center;font-size:18px;"><i class="fa fa-inr"></i> 00.00</th>			
							</tr>

							<tr>
								<th colspan="9"></th>
								
								<th colspan="1" style="text-align:center;font-size:25px;">Total</th>
								<th colspan="2" style="text-align:center;font-size:25px;"><i class="fa fa-inr"></i> 00.00</th>			
							</tr>

						</tbody>						
=======
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
>>>>>>> 32250720937b6a46fedad4a2cf5f8b25a91bc31d
					</table>
				</div>
				<!-- table starts -->                

<<<<<<< HEAD
			</form>  		
            </div>

        </div>
          </div>

		</div>
		
	

=======
			  		
            </div>

          </div>

		</form>
        </div>
		
	</div>
-
>>>>>>> 32250720937b6a46fedad4a2cf5f8b25a91bc31d
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

	

		 <script language="javascript" type="text/javascript">
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;

          
        }
    </script>

      </body>
    </html>
