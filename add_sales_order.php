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
            <!-- Begin Dashhead -->
            <div class="rs-dashhead m-b-lg" style="background:#f5f5f5">
              <div class="rs-dashhead-content">
                <div class="rs-dashhead-titles">
                  <h3 class="rs-dashhead-title m-t">
                    New Sales Order :
                    <div style="float:right;">
                      <!--<span style="padding:10px 10px;font-size:15px;font-weight:normal;color:#4a89dc;cursor:pointer;border-right:1px solid #CCC;"> <i class="fa fa-lightbulb-o"></i> &nbsp;&nbsp;Page Tutorial</span>-->
                      <span style="padding:10px 5px;font-size:25px;font-weight:normal;color:#000;cursor:pointer;" style="float:-right;" onclick="window.location.href='view_sales_order.php'"> 
                        <i class="fa fa-remove">
                        </i> 
                      </span>
                    </div>
                  </h3>
                </div>
              </div>
              <!-- /.rs-dashhead-content -->
              <!-- Begin Breadcrumb -->
              <!-- End Breadcrumb -->
            </div>
            <!-- /.rs-dashhead -->
            <!-- End Dashhead -->
            <!-- Begin default content width -->
            <div class="container-fluid" style="padding:0px;margin-top:-20px;margin-right:5px;margin-left:-5px;">
              <div class="col-md-12 col-sm-12">					
                <!-- Begin Panel -->
                <div class="panel panel-plain panel-rounded">
                  <div class="panel-body">
                    <div class="col-md-7 col-sm-12">
                      <form name="vendor_form" method="POST" enctype="multipart/form-data" id="rs-validation-login-page">
                        <div class="form-group">
                          INVOICE No : 
                          <label style="font-size:20px;font-weight:bold;"> #
                            <?php echo date("dmy");?>
                            <?php echo $invoice_no;?>
                          </label>
                          <p class="help-block with-errors">
                          </p>
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
                            <!-- /.form-group -->
                          </div>
                          <div class="form-group" style="">
                            <button style="height:34px;width:132px;text-align:center;padding:2px;" class="btn btn-success btn-wide"
                                    data-toggle="modal"
                                    data-target="#myModal" type="button">
                              <i class="fa fa-plus">
                              </i> Add Customer
                            </button>
                          </div>
                        </div>	
                        <div class="row">
                          <div class="col-sm-3">
                            Sales Date
                          </div>
                          <div class="form-group col-sm-9">
                            <input type="tel" class="form-control rs-datepicker" placeholder="Sales Date" name="invoicedate">
                            <p class="help-block with-errors">
                            </p>
                          </div>
                          <!-- /.form-group -->
                        </div>
                      </form>
                    </div>
                    <div class="col-md-5 col-sm-12" style="text-align:right;">
                      <form name="vendor_form" method="POST" enctype="multipart/form-data" id="rs-validation-login-page">
                        <div class="col-sm-12">
                          <label style="font-size:20px;">
                            Indrajit Ghosh
                          </label>
                        </div>
                        <div class="col-sm-12">
                          <label style="font-size:15px;">
                            Dukbanglow
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
                    <!-- /.panel -->
                  </div>
                </div>
                <div class="col-md-12" style="margin-top:-50px;">
                  <div class="panel panel-plain panel-rounded">
                    <div class="panel-body" style="background:" >										
                    </div>
                    <div class="panel-footer">
                      <div class="form-group m-a-0" style="padding-left:0px;">
                        <button type="reset" class="btn btn-default btn-wide">Reset
                        </button>
                        <button type="submit" class="btn btn-success btn-wide">Submit
                        </button>
                      </div>
                    </div>
                    <!-- /.panel-footer -->
                  </div>
                  </form>
              </div>
              <!-- /.panel -->						
            </div>
            <!-- /.container-fluid -->
          </div>
          <!-- /.rs-inner -->
        </div>
        <!-- /.rs-content -->
      </article>
      <!-- /.rs-content-wrapper -->
      <!-- END MAIN CONTENT -->
      <?php include("footer.php");?>
      <!-- Page Plugins -->
      <script src="js/bootstrap-switch.min.js">
      </script>
      <script src="js/bootstrap-switch-example.js">
      </script>
      <script src="js/cleave.min.js">
      </script>
      <script src="js/cleave-phone.au.js">
      </script>
      <!-- Example -->
      <script src="js/cleave-example.js">
      </script>
      <!-- Example -->
      <script src="js/bootstrap-datepicker.min.js">
      </script>
      <script src="js/datepicker-example.js">
      </script>
      <!-- Example -->
      <script src="js/jquery.maskedinput.min.js">
      </script>
      <script src="js/maskedinput-example.js">
      </script>
      <!-- Example -->
      <script src="js/bootstrap-maxlength.min.js">
      </script>
      <script src="js/maxlength-example.js">
      </script>
      <!-- Example -->
      <script src="js/selectize.min.js">
      </script>
      <script src="js/selectize-example.js">
      </script>
      <!-- Example -->
      <!-- Page Plugins -->
      <script src="js/validator.min.js"></script>
	  
      </body>
    </html>
