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
	<title>My Products | Port-ME </title>
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
									Products
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

							<div class="rs-dashhead-toolbar">
								<button type="button" class="btn btn-success btn-wide rs-btn-icon block-on-mobile" onclick="window.location.href='add_products.php'">
									<span class="gcon gcon-upload-to-cloud icon-btn"></span>
									Add New
								</button>
							</div><!-- /.rs-dashhead-toolbar -->
							
						</div><!-- /.rs-dashhead-content -->
						
						

					</div><!-- /.rs-dashhead -->
					<!-- End Dashhead -->
						


					<!-- Begin default content width -->
					<div class="container-fluid">

						<!-- Begin Panel -->
						<div class="panel panel-plain panel-rounded table-responsive">
								<table class="table table-b-t table-b-b datatable-default rs-table table-default" style="border-right:1px solid #f5f5f5;border-left:1px solid #f5f5f5;">
									<thead>
							           <tr>
							                <th >Product Name</th>
							                <th >Product Category</th>
							                <th >Description</th>
							                <th >Quantity</th>										
											<th >Price</th>
											<th >Action</th>
							            </tr>
							        </thead>
							        <tbody>
							            <tr>
											<?php
											
											while ($fetch_product_info = mysqli_fetch_array($product_info))
											{
											?>
							                <td><?php echo ucfirst($fetch_product_info['name']);?></td>
											<td>
											<?php
											$category_id = $fetch_product_info['productcat_id'];
											$category_name = mysqli_query ($mysqli, "select * from tbl_productcat where productcat_id = '".$category_id."'");
											$fetch_category_info = mysqli_fetch_array($category_name);
											echo ucfirst($fetch_category_info['category_name']);
											?>
											</td>
											<td><?php echo ucfirst($fetch_product_info['description']);?></td>
							                <td><?php echo $fetch_product_info['qty'];?></td>
											<td>Rs.&nbsp;<?php echo ucfirst($fetch_product_info['selling_price']);?></td>						               
										
											<td>
												<a href="view_product.php?product_id=<?php echo $fetch_product_info['product_id'];?>" class="btn btn-default" style="height:35px;margin:5px;"> View </a><br>

												<a href="edit_product.php?product_id=<?php echo $fetch_product_info['product_id'];?>" class="fa fa-pencil" style="height:35px;margin:5px;"></a>

												<a href="?delete_id=<?php echo $fetch_product_info['product_id'];?>" class="fa fa-trash" style="height:10px;margin:5px;"></a>
											</td>
											</tr>
											
											
											<?php
												}
											?>
							            
							          							        
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

</body>
</html>