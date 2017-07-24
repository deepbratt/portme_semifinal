<?php
include ("config.php");

$sales_order_id = $_GET['sales_order_id'];
$sale_order_info = mysqli_query($mysqli, "select * from sales_order where sales_order_id='".$sales_order_id."'");
$fetch_sale_order_details = mysqli_fetch_array ($sale_order_info);
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Port-ME | Invoice | Print</title>
	<?php include("metalinks.php");?>
	<style>
		.dt-buttons a{
			border:1px solid #CCC;
			padding:3px 8px;
			margin:5px;
			color:#000;
			font-size:12px;
			border-radius:3px;
			float:right;
			margin-bottom:10px;
			background:#f6f6f6;
		}
		.dt-buttons a:hover{
			background:#fff;
		}
		div.dataTables_wrapper div.dataTables_filter{
			text-align:left !important;
			padding:5px;
		}
		div.dataTables_wrapper div.dataTables_filter input{
			width:300px !important;
		}
	</style>
    
    
    <style>
    .invoice-box{
        max-width:800px;
        margin:auto;
        padding:30px;
        border:1px solid #eee;
        box-shadow:0 0 10px rgba(0, 0, 0, .15);
        font-size:16px;
        line-height:24px;
        font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color:#555;
    }
    
    .invoice-box table{
        width:100%;
        line-height:inherit;
        text-align:left;
    }
    
    .invoice-box table td{
        padding:5px;
        vertical-align:top;
    }
    
    .invoice-box table tr td:nth-child(2){
        text-align:left;
    }
    
    .invoice-box table tr.top table td{
        padding-bottom:0px;
    }
    
    .invoice-box table tr.top table td.title{
        font-size:45px;
        line-height:25px;
        color:#333;
    }
    
    .invoice-box table tr.information table td{
        padding-bottom:40px;
    }
    
    .invoice-box table tr.heading td{
        background:#eee;
        border-bottom:1px solid #ddd;
        font-weight:bold;
    }
    
    .invoice-box table tr.details td{
        padding-bottom:20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom:1px solid #eee;
    }
    
    .invoice-box table tr.item.last td{
        border-bottom:none;
    }
    
    .invoice-box table tr.total td:nth-child(2){
        border-top:2px solid #eee;
        font-weight:bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td{
            width:100%;
            display:block;
            text-align:center;
        }
        
        .invoice-box table tr.information table td{
            width:100%;
            display:block;
            text-align:center;
        }
    }
    </style>
</head>
<body>
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
					<div class="rs-dashhead m-b-lg" style="background:#f5f5f5" >
						<div class="rs-dashhead-content" >
							
								<div style="margin-left:800px;">
									<button type="button" class=" fa fa-file-pdf-o btn btn-success " onclick="pdf_document();">  PDF</button>	
									<button type="button" class=" fa fa-print btn btn-success " onclick="javascript:printDiv('printablediv')"> PRINT </button>
								</div>								
						</div>
					</div>


<div id="printablediv" >
			<form id="" runat="server">
    <div class="invoice-box">
	
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="12">
                    <table >
                        <tr>
                            <td class="title" style="text-align:left;width:33%;">
							 <h2 style="font-size:20px;">Port-me</h2>
							<h5>Barrackpore
							Kolkata
							700120</h5>
							</td>
							<td class="title" style="text-align:center;width:33%;">
                               <h2 style="font-size:20px;">
							   <?php
									$customer_id = $fetch_sale_order_details['customer_id'];
									$get_sales_order_query = mysqli_query($mysqli,"select * from customers where customer_id='".$customer_id."'");
									$get_fetch_sales_order_name = mysqli_fetch_array($get_sales_order_query);
									echo $get_fetch_sales_order_name['salutation'];
									echo "&nbsp;&nbsp;";
									echo $get_fetch_sales_order_name['firstname'];
									echo "&nbsp;&nbsp;";
									echo $get_fetch_sales_order_name['lastname'];
									?></h2>
                                <h5>
								<?php
									$customer_id = $fetch_sale_order_details['customer_id'];
									$get_sales_order_query = mysqli_query($mysqli,"select * from customers where customer_id='".$customer_id."'");
									$get_fetch_sales_order_name = mysqli_fetch_array($get_sales_order_query);
									echo $get_fetch_sales_order_name['billing_street'];
									echo "&nbsp;&nbsp;";
									echo $get_fetch_sales_order_name['billing_city'];
									echo "&nbsp;&nbsp;";
									echo $get_fetch_sales_order_name['billing_state'];
									echo "&nbsp;&nbsp;";
									echo $get_fetch_sales_order_name['billing_zip'];
								?>
								</h5>
                            </td>
							 <td class="title" style="text-align:right;width:33%;">
							 <h2 style="font-size:25px;">Invoice</h2>
							<h5>Invoice No.: 0000000123</h5>
							<h5>date :<?php echo date("d/m/y");?> </h5>
							</td>  
                            
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="12">
                    <table>
                        <tr>						
                            <td	>
                            </td>                           
                           
                        </tr>
                    </table>
                </td>
            </tr>

								
									<table class="table" border="3">
										<thead>
											<tr>
												<th>Saler Person</th>
												<th>P.O Number</th>
												<th>Sale Date </th>												
												<th>F.O.B Point </th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>item</td>
												<td>item</td>
												<td><?php echo date("d/m/y");?></td>												
												<td>item</td>
											</tr>
										</tbody>
									</table><br>
								
            
								
									<table class="table" border="3">
											<thead>
												<tr>
													<th>Product Name</th>
													<th>Quantity</th>
													<th>Rate</th>
													<th>Tax Value </th>
													<th>Amount</th>												
												</tr>
											</thead>
												<tbody>
													<tr>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>												
													</tr>
												</tbody>
										</table><br>

										<table class="table" style="width:300px;margin-left:450px;">
											<thead>
												<tr>
													<th>Sub Total</th>
													<th>00.00</th>
												</tr>
											</thead>
												<tbody>
													<tr style="font-size:15px;">
														<td>Discount</td>
														<td>00.00</td>
													</tr>
													<tr class="title" style="font-size:25px;">
														<td>Total</td>
														<td>00.00</td>
													</tr>
												</tbody>
										</table>
          
            
        </table>
    </div>
	</form>
	</div>
	

		</div>
					</div>
		</article>
<?php include("footer.php");?><!-- start pop up-->
  <!--/ end pop up-->


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