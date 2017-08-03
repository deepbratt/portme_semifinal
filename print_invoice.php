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

								
							</tr>
						</thead>
						<tbody>

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

							</tr>

					
							

							<tr>
								<th colspan="9"></th>
								

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

								
							

					</table>
				</div>
				<!-- table starts -->                	
            </div>
        </div>
		
	</div>

      </article>
      <?php include("footer.php");?>

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
