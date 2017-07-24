<!DOCTYPE html>
<html lang=en>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Dashboard | Port-ME</title>
	<?php include("metalinks.php");?>
	
</head>


<body>

	<!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<div id="rs-wrapper">

		<!-- BEGIN MAIN HEADER NAV -->
		<?php include("header.php");?>
		<!-- END MAIN HEADER NAV -->


		<!-- BEGIN SIDEBAR NAV -->
		<?php include("sidebar.php");?>
		<!-- END SIDEBAR NAV -->


		<!-- BEGIN MAIN CONTENT -->
		<article class="rs-content-wrapper">
			<div class="rs-content">
				<div class="rs-inner">

					<!-- Begin Dashhead -->
					<div class="rs-dashhead m-b-lg">
						<div class="rs-dashhead-content">
							<div class="rs-dashhead-titles">
								<h6 class="rs-dashhead-subtitle text-uppercase">Dashboard</h6>
								<h3 class="rs-dashhead-title m-t">Good Day, Mister!</h3>
								<!-- Begin Toolbar toggle button on mobile -->
								<div class="toggle-toolbar-btn">
									<span class="fa fa-sort"></span>
								</div><!-- /.toggle-toolbar-btn -->
								<!-- End Toolbar toggle button on mobile -->
							</div><!-- /.rs-dashhead-titles -->
							<div class="rs-dashhead-toolbar">
								<button type="button" class="btn btn-success btn-wide rs-btn-icon block-on-mobile">
									<span class="gcon gcon-upload-to-cloud icon-btn"></span>
									Upload Item
								</button>
							</div><!-- /.rs-dashhead-toolbar -->
						</div><!-- /.rs-dashhead-content -->
						<!-- Begin Breadcrumb -->
						<ol class="breadcrumb">
							<li><a href="javascript:void(0);"><i class="fa fa-home m-r"></i> Home</a></li>
							<li><a href="javascript:void(0);">Library</a></li>
							<li class="active">Data</li>
						</ol>
						<!-- End Breadcrumb -->
					</div><!-- /.rs-dashhead -->
					<!-- End Dashhead -->

					<!-- Begin default content width -->
					<div class="container-fluid">

						<div class="alert alert-success alert-simple alert-dismissible fade in iconic-alert m-b-lg" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><span class="mcon mcon-close"></span></span></button>
							<div class="alert-icon">
								<span class="gcon gcon-emoji-happy centered-xy"></span>
							</div>
							<p><strong>You have received a payment</strong>. Click <a href="javascript:void(0);" class="alert-link">here</a> to review your payment page.</p>
						</div>

						<div class="row">
							<div class="col-lg-12">

								<div class="row">
									<div class="col-sm-3">
										<!-- Begin Panel -->
										<div class="quick-stat panel panel-rounded bg-grad bg-grad-05 borderless">
											<div class="panel-heading borderless">
												<p class="subtitle text-lighten text-uppercase m-b-xs">Page Views</p>
												<h3 class="m-a-0 p-a-0">254K</h3>
												<div class="panel-toolbar">
													<span class="badge bg-lightest text-white p-x"><i class="gcon gcon-chevron-up m-r-xs"></i>2.5%</span>
												</div><!-- /.panel-toolbar -->
												<!-- End Panel Toolbar -->
											</div><!-- /.panel-heading -->
											<div class="panel-body p-a">
												<span class="spark-dash-01"></span>
											</div><!-- .panel-body -->
										</div><!-- /.panel -->
										<!-- End Panel -->
									</div><!-- /.col-sm-4 -->
									<div class="col-sm-3">
										<!-- Begin Panel -->
										<div class="quick-stat panel panel-rounded bg-grad bg-grad-03 borderless">
											<div class="panel-heading borderless">
												<p class="subtitle text-lighten text-uppercase m-b-xs">Demo Views</p>
												<h3 class="m-a-0 p-a-0">50,254</h3>
												<div class="panel-toolbar">
													<span class="badge bg-lightest text-white p-x"><i class="gcon gcon-chevron-down m-r-xs"></i>0.5%</span>
												</div><!-- /.panel-toolbar -->
												<!-- End Panel Toolbar -->
											</div><!-- /.panel-heading -->
											<div class="panel-body p-a">
												<span class="spark-dash-02"></span>
											</div><!-- .panel-body -->
										</div><!-- /.panel -->
										<!-- End Panel -->
									</div><!-- /.col-sm-4 -->
									<div class="col-sm-3">
										<!-- Begin Panel -->
										<div class="quick-stat panel panel-rounded bg-grad bg-grad-15 borderless">
											<div class="panel-heading borderless">
												<p class="subtitle text-lighten text-uppercase m-b-xs">Referral</p>
												<h3 class="m-a-0 p-a-0">$1,548</h3>
												<div class="panel-toolbar">
													<span class="badge bg-lightest text-white p-x"><i class="gcon gcon-chevron-up m-r-xs"></i>3.68%</span>
												</div><!-- /.panel-toolbar -->
												<!-- End Panel Toolbar -->
											</div><!-- /.panel-heading -->
											<div class="panel-body p-a">
												<span class="spark-dash-03"></span>
											</div><!-- .panel-body -->
										</div><!-- /.panel -->
										
										<!-- End Panel -->
									</div><!-- /.col-sm-4 -->
									<div class="col-sm-3">
										<!-- Begin Panel -->
										<div class="quick-stat panel panel-rounded bg-grad bg-grad-15 borderless">
											<div class="panel-heading borderless">
												<p class="subtitle text-lighten text-uppercase m-b-xs">Referral</p>
												<h3 class="m-a-0 p-a-0">$1,548</h3>
												<div class="panel-toolbar">
													<span class="badge bg-lightest text-white p-x"><i class="gcon gcon-chevron-up m-r-xs"></i>3.68%</span>
												</div><!-- /.panel-toolbar -->
												<!-- End Panel Toolbar -->
											</div><!-- /.panel-heading -->
											<div class="panel-body p-a">
												<span class="spark-dash-03"></span>
											</div><!-- .panel-body -->
										</div><!-- /.panel -->
										
										<!-- End Panel -->
									</div><!-- /.col-sm-4 -->
								</div><!-- /.row -->

								<!-- Begin Panel -->
								<div class="panel panel-plain panel-rounded">
									<div class="panel-heading borderless">
										<h3 class="panel-title">Top Item Sales</h3>
										<p class="subtitle text-uppercase m-t">Last 10 Months</p>
										<!-- Begin Panel Toolbar -->
										<div class="panel-toolbar mobile-block">
											<button class="btn btn-default btn-sm block-on-mobile"><i class="gcon gcon-print m-r"></i> Print</button>
											<button class="btn btn-default btn-sm block-on-mobile"><i class="fa fa-file-pdf-o"></i>  PDF</button>
											<button class="btn btn-default btn-sm block-on-mobile"><i class="fa fa-file-excel-o"></i> Excel</button>
											<button class="btn btn-default btn-sm block-on-mobile"><i class="fa fa-table"></i>  CSV</button>
											<button class="btn btn-default btn-sm block-on-mobile"><i class="fa fa-files-o"></i>  Copy</button>
										</div><!-- /.panel-toolbar -->
										<!-- End Panel Toolbar -->
									</div><!-- /.panel-heading -->
									<div class="panel-body">
										<div id="morris-hero-area" style="width: 105%; height: 300px;"></div>
									</div><!-- .panel-body -->
									<div class="panel-body p-t-0">
										<div class="rs-col-stacked full-width-on-mobile borderless border-items m-a-0">
											<div class="stacked-item p-a text-center">
												<p class="text-muted m-a-0">Total Sales</p>
												<h3 class="m-t-0 f-w-400">213,015</h3>
											</div><!-- /.stacked-item -->
											<div class="stacked-item p-a text-center">
												<p class="text-muted m-a-0">Total Revenue</p>
												<h3 class="m-t-0 f-w-400 text-success">$2.5M</h3>
											</div><!-- /.stacked-item -->
											<div class="stacked-item p-a text-center">
												<p class="text-muted m-a-0">This Year Sales</p>
												<h3 class="m-t-0 f-w-400 text-info">57,760</h3>
											</div><!-- /.stacked-item -->
											<div class="stacked-item p-a text-center">
												<p class="text-muted m-a-0">Today Revenue</p>
												<h3 class="m-t-0 f-w-400 text-warning">$2,257</h3>
											</div><!-- /.stacked-item -->
										</div><!-- /.rs-col-stacked -->
									</div><!-- .panel-body -->
								</div><!-- /.panel -->
								<!-- End Panel -->

							</div><!-- /.col-md-9 -->

							<div class="col-lg-4">
							
					<!-- /.panel -->
								<!-- End Panel -->

							</div><!-- /.col-md-3 -->

						</div><!-- /.row -->

						<!-- Begin Stacked Informations -->
						<div class="rs-col-stacked full-width-on-tablet border-items bg-white b-r-a">
							<div class="stacked-item panel panel-plain">
								<div class="panel-heading borderless">
									<h3 class="panel-title">Sales by Type</h3>
									<div class="panel-toolbar v-centered">
										<p class="subtitle text-uppercase m-a-0">Themeforest</p>
									</div><!-- /.panel-toolbar -->
								</div><!-- /.panel-heading -->
								<div class="panel-body">
									<canvas id="chart-donut" style="width: 70%"></canvas>
								</div><!-- /.panel-body -->
							</div><!-- /.stacked-item -->
							<div class="stacked-item panel panel-primary bg-primary">
								<div class="panel-heading borderless">
									<h3 class="panel-title">Conversion Rate</h3>
									<p class="subtitle text-uppercase m-t-xs">USD<i class="fa fa-long-arrow-right m-x"></i>IDR</p>
									<div class="panel-toolbar">
										<ul class="list-inline m-a-0">
										<li><i class="rs-refresh-panel icon-toolbar gcon gcon-cycle"></i></li>
										<li><i class="icon-toolbar gcon gcon-cog"></i></li>
										</ul>
									</div><!-- /.panel-toolbar s -->
								</div><!-- /.panel-heading -->
								<div class="panel-body p-t-0">
									<h3 class="m-t-0 f-w-300">1.00 USD</h3>
									<h1 class="text-warning f-w-300 m-t-0 m-b-md">13,254.21 IDR</h1>
									<div class="alert alert-success alert-block iconic-alert bg-lightest borderless text-lighten" role="alert">
										<div class="alert-icon bg-lightest">
											<span class="gcon gcon-credit centered-xy"></span>
										</div>
										Your converted earnings <strong class="text-white">29,914,751 IDR</strong>
									</div>
									<small class="text-lighten"><em>* Conversion rate based on <a href="javascript:void(0);"><strong class="text-white">Paypal</strong></a> today at 05:45pm</em></small>
								</div><!-- /.panel-body -->
							</div><!-- /.stacked-item -->
							
						</div><!-- /.rs-col-stacked -->
						<!-- End Stacked Informations -->
							
						<!-- Begin Panel -->
						<div class="panel panel-plain panel-rounded">
							<div class="panel-heading">
								<h3 class="panel-title">Statement Summary</h3>
								<p class="subtitle text-uppercase m-t-xs">Top Markets</p>
								<div class="panel-toolbar v-centered mobile-block">
									<button class="btn btn-success block-on-mobile"><i class="gcon gcon-archive icon-btn m-r"></i>View Statement</button>
								</div><!-- /.panel-toolbar -->
							</div><!-- /.panel-heading -->
							<div class="panel-body p-a-0">
								<div class="rs-col-stacked full-width-on-mobile border-items borderless m-a-0">
									<div class="text-center stacked-item p-a-md p-b-lg">
										<p>ThemeForest</p>
										<div class="easypiechart easypie-info text-muted" data-percent="55">
											<span class="text-info">35</span>
											<small>Items</small>
										</div><!-- /.easypiechart -->
									</div><!-- /.stacked-item -->
									<div class="text-center stacked-item p-a-md p-b-lg">
										<p>CodeCanyon</p>
										<div class="easypiechart easypie-warning text-muted" data-percent="35">
											<span class="text-warning">17</span>
											<small>Items</small>
										</div><!-- /.easypiechart -->
									</div><!-- /.stacked-item -->
									<div class="text-center stacked-item p-a-md p-b-lg">
										<p>VideoHive</p>
										<div class="easypiechart easypie-danger text-muted" data-percent="15">
											<span class="text-danger">3</span>
											<small>Items</small>
										</div><!-- /.easypiechart -->
									</div><!-- /.stacked-item -->
									<div class="text-center stacked-item p-a-md p-b-lg">
										<p>AudioJungle</p>
										<div class="easypiechart easypie-danger text-muted" data-percent="18">
											<span class="text-danger">4</span>
											<small>Items</small>
										</div><!-- /.easypiechart -->
									</div><!-- /.stacked-item -->
									<div class="text-center stacked-item p-a-md p-b-lg">
										<p>GraphicRiver</p>
										<div class="easypiechart easypie-success text-muted" data-percent="75">
											<span class="text-success">125</span>
											<small>Items</small>
										</div><!-- /.easypiechart -->
									</div><!-- /.stacked-item -->
									<div class="text-center stacked-item p-a-md p-b-lg">
										<p>PhotoDune</p>
										<div class="easypiechart easypie-success text-muted" data-percent="98">
											<span class="text-success">2.3K</span>
											<small>Items</small>
										</div><!-- /.easypiechart -->
									</div><!-- /.stacked-item -->
								</div><!-- /.rs-col-stacked -->
								<div class="table-responsive">
									<table class="table rs-table table-striped table-hover table-b-t">
										<thead>
											<tr>
												<th style="width: 120px;">Date</th>
												<th style="width: 120px;">Order ID</th>
												<th style="width: 150px;">Market</th>
												<th style="width: 120px;">Type</th>
												<th>Detail</th>
												<th style="width: 120px;">Amount</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><samp class="text-muted">24 Dec 2016</samp></td>
												<td>00001234</td>
												<td><strong>ThemeForest</strong></td>
												<td><span class="label label-danger">Author Fee</span></td>
												<td><a href="javascript:void(0);">Author Fee for included support sale IVIP00001234</a></td>
												<td><strong class="text-danger">-$1.75</strong></td>
											</tr>
											<tr>
												<td><samp class="text-muted">24 Dec 2016</samp></td>
												<td>00001234</td>
												<td><strong>ThemeForest</strong></td>
												<td><span class="label label-danger">Author Fee</span></td>
												<td><a href="javascript:void(0);">Author Fee for sale IVIP00001234</a></td>
												<td><strong class="text-danger">-$2.75</strong></td>
											</tr>
											<tr>
												<td><samp class="text-muted">24 Dec 2016</samp></td>
												<td>00001234</td>
												<td><strong>ThemeForest</strong></td>
												<td><span class="label label-success">Sale</span></td>
												<td><a href="javascript:void(0);">Roosa - Just Another Dashboard Template</a></td>
												<td><strong class="text-success">$12.75</strong></td>
											</tr>
											<tr>
												<td><samp class="text-muted">24 Dec 2016</samp></td>
												<td>00001234</td>
												<td><strong>ThemeForest</strong></td>
												<td><span class="label label-danger">Author Fee</span></td>
												<td><a href="javascript:void(0);">Author Fee for included support sale IVIP00001234</a></td>
												<td><strong class="text-danger">-$1.75</strong></td>
											</tr>
											<tr>
												<td><samp class="text-muted">24 Dec 2016</samp></td>
												<td>00001234</td>
												<td><strong>ThemeForest</strong></td>
												<td><span class="label label-danger">Author Fee</span></td>
												<td><a href="javascript:void(0);">Author Fee for sale IVIP00001234</a></td>
												<td><strong class="text-danger">-$2.75</strong></td>
											</tr>
											<tr>
												<td><samp class="text-muted">24 Dec 2016</samp></td>
												<td>00001234</td>
												<td><strong>ThemeForest</strong></td>
												<td><span class="label label-success">Sale</span></td>
												<td><a href="javascript:void(0);">Roosa - Just Another Dashboard Template</a></td>
												<td><strong class="text-success">$12.75</strong></td>
											</tr>
										</tbody>
									</table>
								</div><!-- /.table-responsive -->
							</div><!-- .panel-body -->
						</div><!-- /.panel -->
						<!-- End Panel -->

					</div><!-- /.container-fluid -->

				</div><!-- /.rs-inner -->
			</div><!-- /.rs-content -->
		</article><!-- /.rs-content-wrapper -->
		<!-- END MAIN CONTENT -->


		<?php include("footer.php");?>

</body>
</html>