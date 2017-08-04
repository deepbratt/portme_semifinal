<?php
include ("config.php");
$business_id = $_SESSION['business_id'];
$bill_info = mysqli_query($mysqli, "select * from tbl_transactions where business_id='".$business_id."' and tbl_transaction_type='sales'");
$fetch_sales_order_info = mysqli_fetch_array($bill_info);
?>

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
                     Sales Order :                    
                  </h3>
                </div>
              </div>

            </div>

	
					<?php
						$owner_id = $fetch_bill_info['business_id'];
						$get_owner_info = mysqli_query($mysqli, "select * from tbl_business where business_id = '".$owner_id."'");
						$fetch_owner_info = mysqli_fetch_array($get_owner_info);

						$owner_state_id = $fetch_owner_info['state'];
						$get_owner_state_info = mysqli_query($mysqli, "select * from states where states_id = '".$owner_state_id."'");
						$fetch_owner_state_info = mysqli_fetch_array($get_owner_state_info);

						
								
					?> 
                
                
				
				<!-- table starts -->
				<div class="panel panel-plain panel-rounded " style="padding:15px;">
					<table class="table table-b-t table-b-b datatable-default rs-table table-striped table-bordered" style="border-right:1px solid #f5f5f5;border-left:1px solid #f5f5f5;">				
						<thead>
						   <tr style="font-size:15px;">
								<th style="text-align:center;">Invoice Number</th>
								<th style="text-align:center;">Customer Name</th>
								<th style="text-align:center;">Place of Supply</th>
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
								<th style="text-align:center;"></th>
								<th style="text-align:center;"></th>
								<th style="text-align:center;"></th>
								<th style="text-align:center;"></th>
								<th style="text-align:center;"></th>
								<th style="text-align:center;"></th>
								<th style="text-align:center;"></th>
								<th style="text-align:center;"></th>
								<th style="text-align:center;">CGST</th>								
								<th style="text-align:center;">SGST</th>
								<th style="text-align:center;">IGST</th>
								<th style="text-align:center;"></th>
								<th style="text-align:center;"></th>
								<th style="text-align:center;"></th>
								<th style="text-align:center;"></th>
								<th style="text-align:center;"></i></th>

							
							</tr>
								<?php
								$i=1;
								 $count = sizeof($product_id);
								for($i=0;$i<$count; $i++)
									{
									
								?>
							
							<tr>
							<tr><?php echo $fetch_sales_order_info['invoice_no']?> </tr>	
							<tr>
							<?php
								$customer_id = $fetch_sales_order_info['customer_id'];
								$get_customer_query = mysqli_query($mysqli,"select * from tbl_contacts where customer_id='".$customer_id."'");
								$get_fetch_customer_name = mysqli_fetch_array($get_customer_query);
								echo ucfirst($get_fetch_customer_name['salutation']);
								echo "&nbsp;&nbsp;";
								echo ucfirst($get_fetch_customer_name['first_name']);
								echo "&nbsp;&nbsp;";
								echo ucfirst($get_fetch_customer_name['last_name']);
							?>
							</tr>
							<tr> 
							<?php
							$get_state_id = $fetch_sales_order_info['Place_of_supply'];
							$state_info = mysqli_query($mysqli, "select * from states where states_code = '".$get_state_id."'");
							$fetch_state_info = mysqli_fetch_array($state_info);
							echo ucfirst($fetch_state_info['states_name']);
							?>
							</tr>
								<tr style="text-align:center;">								
											<?php 
											$product_id = explode(",",$fetch_sales_order_info['product_id_array']);
											//print_r($product_id);
											$count = count($product_id);
											for($i=0;$i<$count; $i++)
											{
											?>
											<?php 																			
											$fetch_pro_name = mysqli_query($mysqli,"SELECT * FROM tbl_products WHERE product_id='$product_id[$i]'");
											$fetch_p_details = mysqli_fetch_array($fetch_pro_name);
											echo $fetch_p_details['name'];
											echo "<br />";
											?>											
											<?php
											}
											?>
										</tr>
								
										<tr style="text-align:center;">
											<?php
											$hsn_array = explode(",",$fetch_sales_order_info['hsn_array']);
											foreach($hsn_array as $hsn_name){
											echo $hsn_name;
											echo "<br />";
											}
											?>
										</tr>
								<tr style="text-align:center;">
											<?php
											$quantity_array = explode(",",$fetch_sales_order_info['qty_array']);
											foreach($quantity_array as $quantity_details){
											echo $quantity_details;
											echo "<br />";
											}
											?>
								</tr>
								<tr style="text-align:center;">
											<?php
											$unit_price_array = explode(",",$fetch_sales_order_info['unit_price_array']);
											foreach($unit_price_array as $unit_price_details){
											echo $unit_price_details;
											echo "<br />";
											}
											?>
								</tr>										
								<tr style="text-align:center;">
											<?php
											$tax_rate_array = explode(",",$fetch_sales_order_info['tax_rate_array']);
											foreach($tax_rate_array as $tax_rate_details){
											echo $tax_rate_details;
											echo "<br />";
											}
											?>
								</tr>
								<tr style="text-align:center;">
											<?php
											$cgst_array = explode(",",$fetch_sales_order_info['tax_cgst_array']);
											foreach($cgst_array as $cgst_details){
											echo $cgst_details;
											echo "<br />";
											}
											?>
								</tr>
								<tr style="text-align:center;">
										<?php
											$sgst_array = explode(",",$fetch_sales_order_info['tax_sgst_array']);
											foreach($sgst_array as $sgst_details){
											echo $sgst_details;
											echo "<br />";
											}
											?>
								</tr>
								<tr style="text-align:center;">
								<?php
											$igst_array = explode(",",$fetch_sales_order_info['tax_igst_array']);
											foreach($igst_array as $igst_details){
											echo $igst_details;
											echo "<br />";
											}
											?>
								</th>
								<th style="text-align:center;">
								<?php
											$cess_array = explode(",",$fetch_sales_order_info['tax_cess_array']);
											foreach($cess_array as $cess_details){
											echo $cess_details;
											echo "<br />";
											}
											?>
								</tr>
								<tr style="text-align:center;">
								<?php
											$tax_value= explode(",",$fetch_sales_order_info['tax_value_array']);
											foreach($tax_value as $tax_value_details){
											echo $tax_value_details;
											echo "<br />";
											}
											?>
								</tr>
								<tr style="text-align:center;">
								<?php
											$discount_info = explode(",",$fetch_sales_order_info['discount_array']);
											foreach($discount_info as $discount_details){
											echo $discount_details;
											echo "<br />";
											}
											?>
								</tr>
								<tr style="text-align:center;">
								<?php
											$total_array = explode(",",$fetch_sales_order_info['total_array']);
											foreach($total_array as $total_details){
											echo $total_details;
											echo "<br />";
											}
											?>
								</tr>
							<?php
							}
							?>
				
							</tbody>						

								
							

					</table>
				</div>
				<!-- table starts -->                



			  		
            </div>

          </div>

		</form>
		<?php include("footer.php");?>
        </div>
		
	</div>

      </article>
   
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
