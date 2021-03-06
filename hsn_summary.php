<?php
include ("config.php");
$business_id = $_SESSION['business_id'];
$product_info = mysqli_query ($mysqli,"select * from tbl_products where status='active'");

if(isset($_GET['delete_id']))
{
	$delete_id = $_GET['delete_id'];
	$delete_product = mysqli_query($mysqli,"update tbl_products set status='inactive' where product_id = '".$delete_id."'");
	if($delete_product)
		{
			$data = "success";
			echo "<script>window.location.href='product.php'</script>";

		}
		else
	{
			$data = "error";
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
	<title>HSN Summary | Port-ME </title>
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
      .padmar{
        margin:0px !important;
        padding:0px !important;
		
      }
	  .form-control{
		height:30px !important;
		margin-top:3px !important;
	  }


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
									HSN-wise summary of outward supplies - 12
									<!--<div style="float:right;">
										<span style="padding:10px 10px;font-size:15px;font-weight:normal;color:#4a89dc;cursor:pointer;border-right:1px solid #CCC;"> <i class="fa fa-lightbulb-o"></i> &nbsp;&nbsp;Page Tutorial</span>

										<span style="padding:10px 5px;font-size:25px;font-weight:normal;color:#000;cursor:pointer;" style="float:-right;"> <i class="fa fa-remove"></i> </span>
									</div>-->
								</h3>
								
							</div>

							<div class="col-md-12 col-sm-12">
						<?php
								if(isset($data) && $data == "success")
						{
						?>
						<p style="text-align:center;background:#5cb85c;border:1px solid #CCC;border-radius:5px;padding:5px;color:#fff;font-weight:bold;margin-left:15px;"> Deleted Successfully </p>
						<?php
						}else if(isset($data) && $data == "error"){
						?>
						<p style="text-align:center;background:#e54e53;border:1px solid #CCC;border-radius:5px;padding:5px;color:#fff;font-weight:bold;margin-left:15px;"> Error while deleting </p>
						<?php
						}
						?>
						</div>							
						</div><!-- /.rs-dashhead-content -->
						
						

					</div><!-- /.rs-dashhead -->
					<!-- End Dashhead -->
						


					<!-- Begin default content width -->
					<div class="container-fluid">

						<!-- Begin Panel -->
						<div class="panel panel-plain panel-rounded table-responsive">
								<table class="table table-b-t table-b-b datatable-default rs-table table-default table-bordered" style="border-right:1px solid #f5f5f5;border-left:1px solid #f5f5f5;">
						<thead>
						   <tr>
								<th>HSN</th>
								<th>Description</th>
								<th>UQC</th>
								<th>Total Quantity</th>	
								<th>Total Value</th>
								<th>Total Taxable Value</th>
								<th colspan="4" style="text-align:center;" >Amount</th>
								<th>Action</th>
								
							</tr>
						</thead>
						<tbody>
							<tr>
								<th style="text-align:center;"><i class="fa fa-table" aria-hidden="true"></i></th>
								<th style="text-align:center;"><i class="fa fa-bars"></i></th>
								<th style="text-align:center;"><i class="fa fa-balance-scale" aria-hidden="true"></i></th>
								<th style="text-align:center;"><i class="fa fa-balance-scale" aria-hidden="true"></i></th>										
								<th style="text-align:center;"><i class="fa fa-inr" aria-hidden="true"></i></th>
								<th style="text-align:center;"><i class="fa fa-inr" aria-hidden="true"></i></th>								
								<th style="text-align:center;">IGST</th>
								<th style="text-align:center;">SGST</th>
								<th style="text-align:center;">CGST</th>
								<th style="text-align:center;">CESS</th>								
								<th></th>

							</tr>
							<tr>
								<td> <input type="text" placeholder="(₹) 0.00" name="" style="width:120px;margin:5px;"> </td>
								<td> <input type="text" placeholder="" name="" style="width:120px;margin:5px;"> </td>
								<td>
								<select name="" class="form-control" style="width:120px;margin:5px;">													
											<option value="" selected Disabled>Select State</option>
											<?php
										$uqc_info = mysqli_query($mysqli, "select * from dimension_uqc");
										while ($fetch_uqc = mysqli_fetch_array($uqc_info))
										{
										?>
										<option value= "<?php echo $fetch_uqc['code'];?>"><?php echo $fetch_uqc['name'];?></option>
										<?php
										}
										?>
								</select>
								</td>
								<td> <input type="number" placeholder="quantity" name="" style="width:120px;margin:5px;"> </td>
								<td> <input type="integer" placeholder="value" name="" style="width:120px;margin:5px;"> </td>
								<td> <input type="integer" placeholder="taxable value" name="" style="width:120px;margin:5px;"> </td>
								<td> <input type="integer" placeholder="IGST" name="" style="width:120px;margin:5px;"> </td>
								<td> <input type="integer" placeholder="SGST" name="" style="width:120px;margin:5px;"> </td>
								<td> <input type="integer" placeholder="CGST" name="" style="width:120px;margin:5px;"> </td>
								<td> <input type="integer" placeholder="CESS" name="" style="width:120px;margin:5px;"> </td>							
								<td>
									<a href="?add_id=" class="fa fa-floppy-o" style="font-size:2em;"></a>
								</td>
							</tr>				          							        
						</tbody>
					</table>
				</div><!-- /.panel -->
				<!-- End Panel -->
			</div><!-- /.container-fluid -->

		</div><!-- /.rs-inner -->
	</div><!-- /.rs-content -->
</article><!-- /.rs-content-wrapper -->
<!-- END MAIN CONTENT -->

	<?php include("footer.php");?>
	<!-- Page Plugins -->
	<script src="js/datatables.min.js"></script>
	<!--<script src="js/datatables-example.js"></script>-->
     <script src="js/bootstrap-datepicker.min.js"></script>
	 <script src="js/bootstrap-datepicker.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
	<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
	<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>

	<script>
		$(document).ready(function() {
			$('.datatable-default').DataTable( {
				dom: 'Bfrtip',
				columnDefs: [{ 
					  "targets": -1
				}],
				buttons: [
					'copy', 'csv', 'excel', 'pdf', 'print'
				]
			} );
		} );
	</script>

	
</html>