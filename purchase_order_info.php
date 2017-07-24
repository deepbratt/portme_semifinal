<!DOCTYPE html>
<html lang=en>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Port-ME | Purchase Order</title>
	<?php include("metalinks.php");?>
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
									New Purchase Order :
									<div style="float:right;">
										<!--<span style="padding:10px 10px;font-size:15px;font-weight:normal;color:#4a89dc;cursor:pointer;border-right:1px solid #CCC;"> <i class="fa fa-lightbulb-o"></i> &nbsp;&nbsp;Page Tutorial</span>-->

										<span style="padding:10px 5px;font-size:25px;font-weight:normal;color:#000;cursor:pointer;" style="float:-right;" onclick="window.location.href='customer.php'"> <i class="fa fa-remove"></i> </span>
									</div>
								</h3>
								
							</div>
							
						</div><!-- /.rs-dashhead-content -->
						<!-- Begin Breadcrumb -->

						<!-- End Breadcrumb -->
					</div><!-- /.rs-dashhead -->
					<!-- End Dashhead -->

					<!-- Begin default content width -->
					<div class="container-fluid" style="padding:0px;margin-top:-20px;margin-right:5px;margin-left:-5px;">
					<div class="col-md-12 col-sm-12">					
						<!-- Begin Panel -->
							<div class="panel panel-plain panel-rounded">
								<div class="panel-body">
								<div class="col-md-7 col-sm-12">
									<form name="vendor_form" method="POST" enctype="multipart/form-data" id="rs-validation-login-page">							
											<div class="row">
											<div class="col-sm-9">
											<div class="form-group">
												<select class="rs-selectize-single">
													<option value=""selected disabled>Vendor Name</option>
													<option value="4">Thomas Edison</option>
													<option value="1">Nikola</option>
													<option value="3">Nikola Tesla</option>
													<option value="5">Arnold Schwarzenegger</option>
												</select>
											</div><!-- /.form-group -->
											</div>
											<div class="form-group" style="">
												<button style="height:34px;width:132px;text-align:center;padding:2px;" class="btn btn-success btn-wide"
												data-toggle="modal"
												data-target="#myModal" type="button"><i class="fa fa-plus"></i> Add Vendor</button>
												
											</div>
											</div>

											<div class="form-group">
												<input type="tel" class="form-control"  placeholder="Order Number" name="orderno">
												<p class="help-block with-errors"></p>
											</div><!-- /.form-group -->

											<div class="form-group">
												<input type="tel" class="form-control rs-datepicker" placeholder="Sales Date" name="invoicedate">
												<p class="help-block with-errors"></p>
											</div><!-- /.form-group -->

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

									

							</div><!-- /.panel -->
							</div>


						</div>

							<div class="col-md-12" style="margin-top:-50px;">
							<!-- Begin Panel -->
								<div class="panel panel-plain panel-rounded">
									<div class="panel-body" style="background:" >

									<div class="add-more-contz">
												<div class="row atrri_add_cont">
														<div class="ache_ekta">
														</div>


								<div class="col-md-12">
									<table class="table table-bordered table-b-t table-b-b">
										<thead>
											<tr>
												<th>Product Name</th>
												<th>Quantity</th>
												<th>Rate <i class="fa fa-inr" aria-hidden="true"></i></th>
												<th>TAX %</th>
												<th>TAX Value <i class="fa fa-inr" aria-hidden="true"></i></th>
												<th>Amount <i class="fa fa-inr" aria-hidden="true"></i></th>

											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="col-sm-4">												
													<div class="form-group">
														 <select class="rs-selectize-single">
															  <option value=""selected disabled>Product Name</option>
															  <option value="4">Thomas Edison</option>
														      <option value="1">Nikola</option>
															  <option value="3">Nikola Tesla</option>
															  <option value="5">Arnold Schwarzenegger</option>
														 </select>
													</div><!-- /.form-group -->
													<p class="help-block with-errors"></p>
												
											</td>
												<td class="col-sm-1">												
													<div class="form-group">																
														<input type="text" name="attri[]" class="form-control" placeholder=" Qty " required>
														<p class="help-block with-errors"></p>
													</div>
												</td>

												<td class="col-sm-1">												
													<div class="form-group" style="font-size:15px;margin-top:10px;">
														<b>00.00</b>
														<p class="help-block with-errors"></p>
													</div>
												</td>

												<td class="col-sm-2">
													<div class="form-group">
														<div class="input-group">
															<select class="rs-selectize-optgroup" multiple>
																<option value="">Choose</option>
																<option value="CGST">CGST</option>
																<option value="SGST">SGST</option>
																<option value="VAT">VAT</option>
															</select>
																<span class="input-group-btn">
																	<button type="button" class="btn btn-success btn-wide" data-toggle="modal" data-target="#myModal1"
																	style="height:34px;width:50px;text-align:center;padding:2px;" type="button"><i class="fa fa-plus"></i> New</button>
																</span>
														</div><!-- /input-group -->
													</div>
												</td>

												<td class="col-sm-2">
													<div class="form-group" style="font-size:15px;margin-top:10px;">
														<b style="color:#ef5350;">00.00</b>
														<p class="help-block with-errors"></p>
													</div>
												</td>

												<td class="col-sm-2">
													<div class="form-group" style="font-size:15px;margin-top:10px;">
														<b style="color:#5dc26a;">00.00</b>
														<p class="help-block with-errors"></p>
													</div>
													<div class="col-sm-1" style="margin-top:-20px;">
													&nbsp;
													</div>
												</td>
											</tr>
												</tbody>
									</table>
								</div>													
							</div>
						</div>
										
											<div class="row atrri" style="margin-top:0px;">
												<div class="col-sm-12">
													<div class="form-group">
														<a href="#" class="add-more" style="font-size:15px;">
															<i class="fa fa-plus"></i> Add More Product
														</a>
													</div><!-- /.form-group -->
												</div><!-- /.col-sm-4 -->
											</div><!-- /.row -->

											<div class="row col-sm-offset-9">
												<div class="col-sm-8">
													<label style="font-size:15px;">
														Sub Total <i class="fa fa-inr" aria-hidden="true"></i>
													</label>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<label style="font-size:17px;">
															<b>00.00</b>
														</label>	
														<p class="help-block with-errors"></p>
													</div>
												</div>
											</div>

											<div class="row col-sm-offset-9">
												<div class="col-sm-4">
													<label style="font-size:15px;margin-top:5px;">
														Discount
													</label>
												</div>												 
											<div class="col-sm-8">
													<div class="form-group">
														<div class="input-group">
													<div class="input-group-btn">
														<select  class="btn btn-default dropdown-toggle" style="height:34px;padding:2px;"
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

											<div class="row col-sm-offset-9">
												<div class="col-sm-8">
													<label style="font-size:20px;">
														TOTAL <i class="fa fa-inr" aria-hidden="true"></i>
													</label>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<label style="font-size:20px;">
															<b style="color:#5dc26a;">00.00</b>
														</label>															
														<p class="help-block with-errors"></p>
													</div>
												</div>
											</div>											
										</div>

										<div class="panel-footer">
											<div class="form-group m-a-0" style="padding-left:0px;">
												<button type="reset" class="btn btn-default btn-wide">Reset</button>
												<button type="submit" class="btn btn-success btn-wide">Submit</button>
											</div>
										</div><!-- /.panel-footer -->
									</div>
							</form>
						</div><!-- /.panel -->						
					</div><!-- /.container-fluid -->

				</div><!-- /.rs-inner -->
			</div><!-- /.rs-content -->
		</article><!-- /.rs-content-wrapper -->
		<!-- END MAIN CONTENT -->

	<?php include("footer.php");?>


	<div class="modal fade" id="myModal" role="dialog" >
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="width:130%">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">New Vendor</h4>
        </div>
        <div class="modal-body">
         <!-- Begin default content width -->
					<div class="container-fluid" style="padding:0px;margin-top:-20px;margin-right:5px;margin-left:-5px;">
						<div class="col-sm-12">
						<!-- Begin Panel -->
							<div class="panel panel-plain panel-rounded">
								<div class="panel-body" style="margin-top:10px;">
									<form >
											<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<select class="rs-selectize-single" required>
															<option value="">Salutation</option>
															<option value="4">Mr.</option>
															<option value="1">Mrs.</option>
															<option value="3">Ms.</option>
															<option value="5">Miss.</option>
															<option value="6">Dr.</option>
														</select>
													</div><!-- /.form-group -->
												</div><!-- /.col-sm-4 -->
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" class="form-control" id="rs-form-example-fname" placeholder="First Name" required>
														<p class="help-block with-errors"></p>
													</div><!-- /.form-group -->
												</div><!-- /.col-sm-4 -->
												<div class="col-sm-4">
													<div class="form-group">
														<input type="text" class="form-control" id="rs-form-example-lname" placeholder="Last Name" required>
														<p class="help-block with-errors"></p>
													</div><!-- /.form-group -->
												</div><!-- /.col-sm-4 -->
											</div><!-- /.row -->

											<div class="form-group">
												<input type="email" class="form-control" id="rs-form-example-email" placeholder="Company Name" required>
												<p class="help-block with-errors"></p>
											</div><!-- /.form-group -->

											<div class="form-group">
												<input type="email" class="form-control" id="rs-form-example-email" placeholder="Email" required>
												<p class="help-block with-errors"></p>
											</div><!-- /.form-group -->

											<div class="form-group">
												<input type="tel" class="form-control" id="rs-form-example-tel" placeholder="Work Phone" required>
												<p class="help-block with-errors"></p>
											</div><!-- /.form-group -->

											<div class="form-group">
												<input type="tel" class="form-control" id="rs-form-example-tel" placeholder="Mobile" required>
												<p class="help-block with-errors"></p>
											</div><!-- /.form-group -->

											<div class="form-group">
												<input type="tel" class="form-control" id="rs-form-example-tel" placeholder="Website" required>
												<p class="help-block with-errors"></p>
											</div><!-- /.form-group -->

								</div><!-- /.panel-body -->
							</div><!-- /.panel -->
						</div>

						<div class="col-md-5 col-sm-12">
							<!-- Begin Panel 
							<div class="panel panel-plain panel-rounded" >
								<iframe width="100%" height="100%" src="https://www.youtube.com/embed/5GZ3fP71Bzg" style="padding:10px;min-height:300px;" frameborder="0" allowfullscreen></iframe>
							</div> panel -->
						</div>
						
						<div class="col-md-12" style="margin-top:-50px;">
							<!-- Begin Panel -->
								<div class="panel panel-plain panel-rounded">
									<div class="panel-body">
										<!-- Nav tabs -->
										<ul class="nav nav-tabs" role="tablist">
											<li role="presentation" class="active"><a href="#rs-tab-01" aria-controls="rs-tab-01" role="tab" data-toggle="tab">Address</a></li>
											<li role="presentation"><a href="#rs-tab-02" aria-controls="rs-tab-02" role="tab" data-toggle="tab">Notes</a></li>
										</ul>

										<!-- Tab panes -->
										<div class="tab-content p-t-md">
											<div role="tabpanel" class="tab-pane fade in active" id="rs-tab-01">
												<div class="col-md-12" style="margin:0px;padding:0px;">
													<div class="col-md-6 col-sm-12" style="padding:5px;">
														<h3 style="margin-bottom:15px;font-size:17px;">Billing Address</h3>
														
														<div class="form-group">
															<textarea class="form-control billstreet" placeholder="Street" required></textarea>
															<p class="help-block with-errors"></p>
														</div><!-- /.form-group -->

														<div class="form-group">
															<input type="text" class="form-control billcity" id="rs-form-example-email" placeholder="City" required>
															<p class="help-block with-errors"></p>
														</div><!-- /.form-group -->

														<div class="form-group">
															<input type="text" class="form-control billstate" id="rs-form-example-tel" placeholder="State" required>
															<p class="help-block with-errors"></p>
														</div><!-- /.form-group -->

														<div class="form-group">
															<input type="tel" class="form-control bilzip" id="rs-form-example-tel" placeholder="Zip" required>
															<p class="help-block with-errors"></p>
														</div><!-- /.form-group -->

														<div class="form-group">
															<select name="country" class="form-control billcountry">
																<option value="" selected disabled>Choose Country</option>
																<option value="Afghanistan">Afghanistan</option>
																<option value="Albania">Albania</option>
																<option value="Algeria">Algeria</option>
																<option value="American Samoa">American Samoa</option>
																<option value="Andorra">Andorra</option>
																<option value="Angola">Angola</option>
																<option value="Anguilla">Anguilla</option>
																<option value="Antartica">Antarctica</option>
																<option value="Antigua and Barbuda">Antigua and Barbuda</option>
																<option value="Argentina">Argentina</option>
																<option value="Armenia">Armenia</option>
																<option value="Aruba">Aruba</option>
																<option value="Australia">Australia</option>
																<option value="Austria">Austria</option>
																<option value="Azerbaijan">Azerbaijan</option>
																<option value="Bahamas">Bahamas</option>
																<option value="Bahrain">Bahrain</option>
																<option value="Bangladesh">Bangladesh</option>
																<option value="Barbados">Barbados</option>
																<option value="Belarus">Belarus</option>
																<option value="Belgium">Belgium</option>
																<option value="Belize">Belize</option>
																<option value="Benin">Benin</option>
																<option value="Bermuda">Bermuda</option>
																<option value="Bhutan">Bhutan</option>
																<option value="Bolivia">Bolivia</option>
																<option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
																<option value="Botswana">Botswana</option>
																<option value="Bouvet Island">Bouvet Island</option>
																<option value="Brazil">Brazil</option>
																<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
																<option value="Brunei Darussalam">Brunei Darussalam</option>
																<option value="Bulgaria">Bulgaria</option>
																<option value="Burkina Faso">Burkina Faso</option>
																<option value="Burundi">Burundi</option>
																<option value="Cambodia">Cambodia</option>
																<option value="Cameroon">Cameroon</option>
																<option value="Canada">Canada</option>
																<option value="Cape Verde">Cape Verde</option>
																<option value="Cayman Islands">Cayman Islands</option>
																<option value="Central African Republic">Central African Republic</option>
																<option value="Chad">Chad</option>
																<option value="Chile">Chile</option>
																<option value="China">China</option>
																<option value="Christmas Island">Christmas Island</option>
																<option value="Cocos Islands">Cocos (Keeling) Islands</option>
																<option value="Colombia">Colombia</option>
																<option value="Comoros">Comoros</option>
																<option value="Congo">Congo</option>
																<option value="Congo">Congo, the Democratic Republic of the</option>
																<option value="Cook Islands">Cook Islands</option>
																<option value="Costa Rica">Costa Rica</option>
																<option value="Cota D'Ivoire">Cote d'Ivoire</option>
																<option value="Croatia">Croatia (Hrvatska)</option>
																<option value="Cuba">Cuba</option>
																<option value="Cyprus">Cyprus</option>
																<option value="Czech Republic">Czech Republic</option>
																<option value="Denmark">Denmark</option>
																<option value="Djibouti">Djibouti</option>
																<option value="Dominica">Dominica</option>
																<option value="Dominican Republic">Dominican Republic</option>
																<option value="East Timor">East Timor</option>
																<option value="Ecuador">Ecuador</option>
																<option value="Egypt">Egypt</option>
																<option value="El Salvador">El Salvador</option>
																<option value="Equatorial Guinea">Equatorial Guinea</option>
																<option value="Eritrea">Eritrea</option>
																<option value="Estonia">Estonia</option>
																<option value="Ethiopia">Ethiopia</option>
																<option value="Falkland Islands">Falkland Islands (Malvinas)</option>
																<option value="Faroe Islands">Faroe Islands</option>
																<option value="Fiji">Fiji</option>
																<option value="Finland">Finland</option>
																<option value="France">France</option>
																<option value="France Metropolitan">France, Metropolitan</option>
																<option value="French Guiana">French Guiana</option>
																<option value="French Polynesia">French Polynesia</option>
																<option value="French Southern Territories">French Southern Territories</option>
																<option value="Gabon">Gabon</option>
																<option value="Gambia">Gambia</option>
																<option value="Georgia">Georgia</option>
																<option value="Germany">Germany</option>
																<option value="Ghana">Ghana</option>
																<option value="Gibraltar">Gibraltar</option>
																<option value="Greece">Greece</option>
																<option value="Greenland">Greenland</option>
																<option value="Grenada">Grenada</option>
																<option value="Guadeloupe">Guadeloupe</option>
																<option value="Guam">Guam</option>
																<option value="Guatemala">Guatemala</option>
																<option value="Guinea">Guinea</option>
																<option value="Guinea-Bissau">Guinea-Bissau</option>
																<option value="Guyana">Guyana</option>
																<option value="Haiti">Haiti</option>
																<option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
																<option value="Holy See">Holy See (Vatican City State)</option>
																<option value="Honduras">Honduras</option>
																<option value="Hong Kong">Hong Kong</option>
																<option value="Hungary">Hungary</option>
																<option value="Iceland">Iceland</option>
																<option value="India">India</option>
																<option value="Indonesia">Indonesia</option>
																<option value="Iran">Iran (Islamic Republic of)</option>
																<option value="Iraq">Iraq</option>
																<option value="Ireland">Ireland</option>
																<option value="Israel">Israel</option>
																<option value="Italy">Italy</option>
																<option value="Jamaica">Jamaica</option>
																<option value="Japan">Japan</option>
																<option value="Jordan">Jordan</option>
																<option value="Kazakhstan">Kazakhstan</option>
																<option value="Kenya">Kenya</option>
																<option value="Kiribati">Kiribati</option>
																<option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
																<option value="Korea">Korea, Republic of</option>
																<option value="Kuwait">Kuwait</option>
																<option value="Kyrgyzstan">Kyrgyzstan</option>
																<option value="Lao">Lao People's Democratic Republic</option>
																<option value="Latvia">Latvia</option>
																<option value="Lebanon">Lebanon</option>
																<option value="Lesotho">Lesotho</option>
																<option value="Liberia">Liberia</option>
																<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
																<option value="Liechtenstein">Liechtenstein</option>
																<option value="Lithuania">Lithuania</option>
																<option value="Luxembourg">Luxembourg</option>
																<option value="Macau">Macau</option>
																<option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
																<option value="Madagascar">Madagascar</option>
																<option value="Malawi">Malawi</option>
																<option value="Malaysia">Malaysia</option>
																<option value="Maldives">Maldives</option>
																<option value="Mali">Mali</option>
																<option value="Malta">Malta</option>
																<option value="Marshall Islands">Marshall Islands</option>
																<option value="Martinique">Martinique</option>
																<option value="Mauritania">Mauritania</option>
																<option value="Mauritius">Mauritius</option>
																<option value="Mayotte">Mayotte</option>
																<option value="Mexico">Mexico</option>
																<option value="Micronesia">Micronesia, Federated States of</option>
																<option value="Moldova">Moldova, Republic of</option>
																<option value="Monaco">Monaco</option>
																<option value="Mongolia">Mongolia</option>
																<option value="Montserrat">Montserrat</option>
																<option value="Morocco">Morocco</option>
																<option value="Mozambique">Mozambique</option>
																<option value="Myanmar">Myanmar</option>
																<option value="Namibia">Namibia</option>
																<option value="Nauru">Nauru</option>
																<option value="Nepal">Nepal</option>
																<option value="Netherlands">Netherlands</option>
																<option value="Netherlands Antilles">Netherlands Antilles</option>
																<option value="New Caledonia">New Caledonia</option>
																<option value="New Zealand">New Zealand</option>
																<option value="Nicaragua">Nicaragua</option>
																<option value="Niger">Niger</option>
																<option value="Nigeria">Nigeria</option>
																<option value="Niue">Niue</option>
																<option value="Norfolk Island">Norfolk Island</option>
																<option value="Northern Mariana Islands">Northern Mariana Islands</option>
																<option value="Norway">Norway</option>
																<option value="Oman">Oman</option>
																<option value="Pakistan">Pakistan</option>
																<option value="Palau">Palau</option>
																<option value="Panama">Panama</option>
																<option value="Papua New Guinea">Papua New Guinea</option>
																<option value="Paraguay">Paraguay</option>
																<option value="Peru">Peru</option>
																<option value="Philippines">Philippines</option>
																<option value="Pitcairn">Pitcairn</option>
																<option value="Poland">Poland</option>
																<option value="Portugal">Portugal</option>
																<option value="Puerto Rico">Puerto Rico</option>
																<option value="Qatar">Qatar</option>
																<option value="Reunion">Reunion</option>
																<option value="Romania">Romania</option>
																<option value="Russia">Russian Federation</option>
																<option value="Rwanda">Rwanda</option>
																<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
																<option value="Saint LUCIA">Saint LUCIA</option>
																<option value="Saint Vincent">Saint Vincent and the Grenadines</option>
																<option value="Samoa">Samoa</option>
																<option value="San Marino">San Marino</option>
																<option value="Sao Tome and Principe">Sao Tome and Principe</option> 
																<option value="Saudi Arabia">Saudi Arabia</option>
																<option value="Senegal">Senegal</option>
																<option value="Seychelles">Seychelles</option>
																<option value="Sierra">Sierra Leone</option>
																<option value="Singapore">Singapore</option>
																<option value="Slovakia">Slovakia (Slovak Republic)</option>
																<option value="Slovenia">Slovenia</option>
																<option value="Solomon Islands">Solomon Islands</option>
																<option value="Somalia">Somalia</option>
																<option value="South Africa">South Africa</option>
																<option value="South Georgia">South Georgia and the South Sandwich Islands</option>
																<option value="Span">Spain</option>
																<option value="SriLanka">Sri Lanka</option>
																<option value="St. Helena">St. Helena</option>
																<option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
																<option value="Sudan">Sudan</option>
																<option value="Suriname">Suriname</option>
																<option value="Svalbard">Svalbard and Jan Mayen Islands</option>
																<option value="Swaziland">Swaziland</option>
																<option value="Sweden">Sweden</option>
																<option value="Switzerland">Switzerland</option>
																<option value="Syria">Syrian Arab Republic</option>
																<option value="Taiwan">Taiwan, Province of China</option>
																<option value="Tajikistan">Tajikistan</option>
																<option value="Tanzania">Tanzania, United Republic of</option>
																<option value="Thailand">Thailand</option>
																<option value="Togo">Togo</option>
																<option value="Tokelau">Tokelau</option>
																<option value="Tonga">Tonga</option>
																<option value="Trinidad and Tobago">Trinidad and Tobago</option>
																<option value="Tunisia">Tunisia</option>
																<option value="Turkey">Turkey</option>
																<option value="Turkmenistan">Turkmenistan</option>
																<option value="Turks and Caicos">Turks and Caicos Islands</option>
																<option value="Tuvalu">Tuvalu</option>
																<option value="Uganda">Uganda</option>
																<option value="Ukraine">Ukraine</option>
																<option value="United Arab Emirates">United Arab Emirates</option>
																<option value="United Kingdom">United Kingdom</option>
																<option value="United States">United States</option>
																<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
																<option value="Uruguay">Uruguay</option>
																<option value="Uzbekistan">Uzbekistan</option>
																<option value="Vanuatu">Vanuatu</option>
																<option value="Venezuela">Venezuela</option>
																<option value="Vietnam">Viet Nam</option>
																<option value="Virgin Islands (British)">Virgin Islands (British)</option>
																<option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
																<option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
																<option value="Western Sahara">Western Sahara</option>
																<option value="Yemen">Yemen</option>
																<option value="Yugoslavia">Yugoslavia</option>
																<option value="Zambia">Zambia</option>
																<option value="Zimbabwe">Zimbabwe</option>
															</select>
															<p class="help-block with-errors"></p>
														</div><!-- /.form-group -->
													</div>

													<div class="col-md-6 col-sm-12" style="margin-left:0px;padding:5px;">
														<h3 style="margin-bottom:15px;font-size:17px;">Shipping Address <span style="font-size:15px;float:right;color:#4a89dc;font-weight:normal;cursor:pointer;padding:5px;" onclick="copybillingaddr();"><i class="fa fa-hand-o-down"></i> Copy billing address</span></h3>
														
														<div class="form-group">
															<textarea class="form-control billstreet2" placeholder="Street" required></textarea>
															<p class="help-block with-errors"></p>
														</div><!-- /.form-group -->

														<div class="form-group">
															<input type="text" class="form-control billcity2" id="rs-form-example-email" placeholder="City" required>
															<p class="help-block with-errors"></p>
														</div><!-- /.form-group -->

														<div class="form-group">
															<input type="text" class="form-control billstate2" id="rs-form-example-tel" placeholder="State" required>
															<p class="help-block with-errors"></p>
														</div><!-- /.form-group -->

														<div class="form-group">
															<input type="tel" class="form-control bilzip2" id="rs-form-example-tel" placeholder="Zip" required>
															<p class="help-block with-errors"></p>
														</div><!-- /.form-group -->

														<div class="form-group">
															<select name="country" class="form-control billcountry2">
																<option value="" selected disabled>Choose Country</option>
																<option value="Afghanistan">Afghanistan</option>
																<option value="Albania">Albania</option>
																<option value="Algeria">Algeria</option>
																<option value="American Samoa">American Samoa</option>
																<option value="Andorra">Andorra</option>
																<option value="Angola">Angola</option>
																<option value="Anguilla">Anguilla</option>
																<option value="Antartica">Antarctica</option>
																<option value="Antigua and Barbuda">Antigua and Barbuda</option>
																<option value="Argentina">Argentina</option>
																<option value="Armenia">Armenia</option>
																<option value="Aruba">Aruba</option>
																<option value="Australia">Australia</option>
																<option value="Austria">Austria</option>
																<option value="Azerbaijan">Azerbaijan</option>
																<option value="Bahamas">Bahamas</option>
																<option value="Bahrain">Bahrain</option>
																<option value="Bangladesh">Bangladesh</option>
																<option value="Barbados">Barbados</option>
																<option value="Belarus">Belarus</option>
																<option value="Belgium">Belgium</option>
																<option value="Belize">Belize</option>
																<option value="Benin">Benin</option>
																<option value="Bermuda">Bermuda</option>
																<option value="Bhutan">Bhutan</option>
																<option value="Bolivia">Bolivia</option>
																<option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
																<option value="Botswana">Botswana</option>
																<option value="Bouvet Island">Bouvet Island</option>
																<option value="Brazil">Brazil</option>
																<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
																<option value="Brunei Darussalam">Brunei Darussalam</option>
																<option value="Bulgaria">Bulgaria</option>
																<option value="Burkina Faso">Burkina Faso</option>
																<option value="Burundi">Burundi</option>
																<option value="Cambodia">Cambodia</option>
																<option value="Cameroon">Cameroon</option>
																<option value="Canada">Canada</option>
																<option value="Cape Verde">Cape Verde</option>
																<option value="Cayman Islands">Cayman Islands</option>
																<option value="Central African Republic">Central African Republic</option>
																<option value="Chad">Chad</option>
																<option value="Chile">Chile</option>
																<option value="China">China</option>
																<option value="Christmas Island">Christmas Island</option>
																<option value="Cocos Islands">Cocos (Keeling) Islands</option>
																<option value="Colombia">Colombia</option>
																<option value="Comoros">Comoros</option>
																<option value="Congo">Congo</option>
																<option value="Congo">Congo, the Democratic Republic of the</option>
																<option value="Cook Islands">Cook Islands</option>
																<option value="Costa Rica">Costa Rica</option>
																<option value="Cota D'Ivoire">Cote d'Ivoire</option>
																<option value="Croatia">Croatia (Hrvatska)</option>
																<option value="Cuba">Cuba</option>
																<option value="Cyprus">Cyprus</option>
																<option value="Czech Republic">Czech Republic</option>
																<option value="Denmark">Denmark</option>
																<option value="Djibouti">Djibouti</option>
																<option value="Dominica">Dominica</option>
																<option value="Dominican Republic">Dominican Republic</option>
																<option value="East Timor">East Timor</option>
																<option value="Ecuador">Ecuador</option>
																<option value="Egypt">Egypt</option>
																<option value="El Salvador">El Salvador</option>
																<option value="Equatorial Guinea">Equatorial Guinea</option>
																<option value="Eritrea">Eritrea</option>
																<option value="Estonia">Estonia</option>
																<option value="Ethiopia">Ethiopia</option>
																<option value="Falkland Islands">Falkland Islands (Malvinas)</option>
																<option value="Faroe Islands">Faroe Islands</option>
																<option value="Fiji">Fiji</option>
																<option value="Finland">Finland</option>
																<option value="France">France</option>
																<option value="France Metropolitan">France, Metropolitan</option>
																<option value="French Guiana">French Guiana</option>
																<option value="French Polynesia">French Polynesia</option>
																<option value="French Southern Territories">French Southern Territories</option>
																<option value="Gabon">Gabon</option>
																<option value="Gambia">Gambia</option>
																<option value="Georgia">Georgia</option>
																<option value="Germany">Germany</option>
																<option value="Ghana">Ghana</option>
																<option value="Gibraltar">Gibraltar</option>
																<option value="Greece">Greece</option>
																<option value="Greenland">Greenland</option>
																<option value="Grenada">Grenada</option>
																<option value="Guadeloupe">Guadeloupe</option>
																<option value="Guam">Guam</option>
																<option value="Guatemala">Guatemala</option>
																<option value="Guinea">Guinea</option>
																<option value="Guinea-Bissau">Guinea-Bissau</option>
																<option value="Guyana">Guyana</option>
																<option value="Haiti">Haiti</option>
																<option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
																<option value="Holy See">Holy See (Vatican City State)</option>
																<option value="Honduras">Honduras</option>
																<option value="Hong Kong">Hong Kong</option>
																<option value="Hungary">Hungary</option>
																<option value="Iceland">Iceland</option>
																<option value="India">India</option>
																<option value="Indonesia">Indonesia</option>
																<option value="Iran">Iran (Islamic Republic of)</option>
																<option value="Iraq">Iraq</option>
																<option value="Ireland">Ireland</option>
																<option value="Israel">Israel</option>
																<option value="Italy">Italy</option>
																<option value="Jamaica">Jamaica</option>
																<option value="Japan">Japan</option>
																<option value="Jordan">Jordan</option>
																<option value="Kazakhstan">Kazakhstan</option>
																<option value="Kenya">Kenya</option>
																<option value="Kiribati">Kiribati</option>
																<option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
																<option value="Korea">Korea, Republic of</option>
																<option value="Kuwait">Kuwait</option>
																<option value="Kyrgyzstan">Kyrgyzstan</option>
																<option value="Lao">Lao People's Democratic Republic</option>
																<option value="Latvia">Latvia</option>
																<option value="Lebanon">Lebanon</option>
																<option value="Lesotho">Lesotho</option>
																<option value="Liberia">Liberia</option>
																<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
																<option value="Liechtenstein">Liechtenstein</option>
																<option value="Lithuania">Lithuania</option>
																<option value="Luxembourg">Luxembourg</option>
																<option value="Macau">Macau</option>
																<option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
																<option value="Madagascar">Madagascar</option>
																<option value="Malawi">Malawi</option>
																<option value="Malaysia">Malaysia</option>
																<option value="Maldives">Maldives</option>
																<option value="Mali">Mali</option>
																<option value="Malta">Malta</option>
																<option value="Marshall Islands">Marshall Islands</option>
																<option value="Martinique">Martinique</option>
																<option value="Mauritania">Mauritania</option>
																<option value="Mauritius">Mauritius</option>
																<option value="Mayotte">Mayotte</option>
																<option value="Mexico">Mexico</option>
																<option value="Micronesia">Micronesia, Federated States of</option>
																<option value="Moldova">Moldova, Republic of</option>
																<option value="Monaco">Monaco</option>
																<option value="Mongolia">Mongolia</option>
																<option value="Montserrat">Montserrat</option>
																<option value="Morocco">Morocco</option>
																<option value="Mozambique">Mozambique</option>
																<option value="Myanmar">Myanmar</option>
																<option value="Namibia">Namibia</option>
																<option value="Nauru">Nauru</option>
																<option value="Nepal">Nepal</option>
																<option value="Netherlands">Netherlands</option>
																<option value="Netherlands Antilles">Netherlands Antilles</option>
																<option value="New Caledonia">New Caledonia</option>
																<option value="New Zealand">New Zealand</option>
																<option value="Nicaragua">Nicaragua</option>
																<option value="Niger">Niger</option>
																<option value="Nigeria">Nigeria</option>
																<option value="Niue">Niue</option>
																<option value="Norfolk Island">Norfolk Island</option>
																<option value="Northern Mariana Islands">Northern Mariana Islands</option>
																<option value="Norway">Norway</option>
																<option value="Oman">Oman</option>
																<option value="Pakistan">Pakistan</option>
																<option value="Palau">Palau</option>
																<option value="Panama">Panama</option>
																<option value="Papua New Guinea">Papua New Guinea</option>
																<option value="Paraguay">Paraguay</option>
																<option value="Peru">Peru</option>
																<option value="Philippines">Philippines</option>
																<option value="Pitcairn">Pitcairn</option>
																<option value="Poland">Poland</option>
																<option value="Portugal">Portugal</option>
																<option value="Puerto Rico">Puerto Rico</option>
																<option value="Qatar">Qatar</option>
																<option value="Reunion">Reunion</option>
																<option value="Romania">Romania</option>
																<option value="Russia">Russian Federation</option>
																<option value="Rwanda">Rwanda</option>
																<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
																<option value="Saint LUCIA">Saint LUCIA</option>
																<option value="Saint Vincent">Saint Vincent and the Grenadines</option>
																<option value="Samoa">Samoa</option>
																<option value="San Marino">San Marino</option>
																<option value="Sao Tome and Principe">Sao Tome and Principe</option> 
																<option value="Saudi Arabia">Saudi Arabia</option>
																<option value="Senegal">Senegal</option>
																<option value="Seychelles">Seychelles</option>
																<option value="Sierra">Sierra Leone</option>
																<option value="Singapore">Singapore</option>
																<option value="Slovakia">Slovakia (Slovak Republic)</option>
																<option value="Slovenia">Slovenia</option>
																<option value="Solomon Islands">Solomon Islands</option>
																<option value="Somalia">Somalia</option>
																<option value="South Africa">South Africa</option>
																<option value="South Georgia">South Georgia and the South Sandwich Islands</option>
																<option value="Span">Spain</option>
																<option value="SriLanka">Sri Lanka</option>
																<option value="St. Helena">St. Helena</option>
																<option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
																<option value="Sudan">Sudan</option>
																<option value="Suriname">Suriname</option>
																<option value="Svalbard">Svalbard and Jan Mayen Islands</option>
																<option value="Swaziland">Swaziland</option>
																<option value="Sweden">Sweden</option>
																<option value="Switzerland">Switzerland</option>
																<option value="Syria">Syrian Arab Republic</option>
																<option value="Taiwan">Taiwan, Province of China</option>
																<option value="Tajikistan">Tajikistan</option>
																<option value="Tanzania">Tanzania, United Republic of</option>
																<option value="Thailand">Thailand</option>
																<option value="Togo">Togo</option>
																<option value="Tokelau">Tokelau</option>
																<option value="Tonga">Tonga</option>
																<option value="Trinidad and Tobago">Trinidad and Tobago</option>
																<option value="Tunisia">Tunisia</option>
																<option value="Turkey">Turkey</option>
																<option value="Turkmenistan">Turkmenistan</option>
																<option value="Turks and Caicos">Turks and Caicos Islands</option>
																<option value="Tuvalu">Tuvalu</option>
																<option value="Uganda">Uganda</option>
																<option value="Ukraine">Ukraine</option>
																<option value="United Arab Emirates">United Arab Emirates</option>
																<option value="United Kingdom">United Kingdom</option>
																<option value="United States">United States</option>
																<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
																<option value="Uruguay">Uruguay</option>
																<option value="Uzbekistan">Uzbekistan</option>
																<option value="Vanuatu">Vanuatu</option>
																<option value="Venezuela">Venezuela</option>
																<option value="Vietnam">Viet Nam</option>
																<option value="Virgin Islands (British)">Virgin Islands (British)</option>
																<option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
																<option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
																<option value="Western Sahara">Western Sahara</option>
																<option value="Yemen">Yemen</option>
																<option value="Yugoslavia">Yugoslavia</option>
																<option value="Zambia">Zambia</option>
																<option value="Zimbabwe">Zimbabwe</option>
															</select>
															<p class="help-block with-errors"></p>
														</div><!-- /.form-group -->
													</div>
												</div>
											</div><!-- /.tab-pane -->

											<div role="tabpanel" class="tab-pane fade" id="rs-tab-02">
												<h3 style="margin-bottom:15px;font-size:17px;">Notes</h3>	
												<div class="form-group">
													<textarea class="form-control" placeholder="Notes" style="min-height:250px;" required></textarea>
													<p class="help-block with-errors"></p>
												</div><!-- /.form-group -->
											</div><!-- /.tab-pane -->

										</div><!-- /.tab-content -->
									</div><!-- .panel-body -->

									<div class="panel-footer">
											<div class="form-group m-a-0">
												<button type="reset" class="btn btn-default btn-wide">Reset</button>
												<button type="submit" class="btn btn-success btn-wide">Submit</button>
											</div>
										</div><!-- /.panel-footer -->
									</form>
								</div><!-- /.panel -->

								<!-- End Panel -->

						</div>
					</div><!-- /.container-fluid -->
				</div>


       
		
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		 </div>						  
	</div>
 </div> <!--/ end pop up-->


					  <div class="modal fade" id="myModal1" role="dialog">
						<div class="modal-dialog">
						
						  <!-- Modal content-->
						  <div class="modal-content">
							<div class="modal-header">
							  <button type="button" class="close" data-dismiss="modal">&times;</button>
							  <h4 class="modal-title">Add Tax</h4>
							</div>
							<div class="modal-body">

							<div class="col-sm-12">
							 <div class="col-sm-4">             
								Product Category              
									 </div>
									<div class="col-sm-8">
								   <div class="form-group">                
									<select class="rs-selectize-single">
									  <option value=""selected disabled>Product Category</option>
									  <option value="4">Thomas Edison</option>
									  <option value="1">Nikola</option>
									  <option value="3">Nikola Tesla</option>
									  <option value="5">Arnold Schwarzenegger</option>
									</select>
								   </div><!-- /.form-group -->
								  </div>
								  </div>

					   <div class="col-sm-12">
						<div class="col-sm-4">
								 
						 Tax Name <i class="fa fa-inr" aria-hidden="true"></i>
								 
						</div>
						<div class="col-sm-8">
						 <div class="form-group">
						  <input type="tel" class="form-control"  placeholder="Tax Name" name="orderno">
						  <p class="help-block with-errors"></p>
						 </div>
						</div>
					   </div>

					   <div class="col-sm-12">
						<div class="col-sm-4">             
						 Tax Rate <b>%</b>             
						</div>
						<div class="col-sm-8">
						 <div class="form-group has-feedback">
								
						  <div class="input-group">
						   <span class="input-group-addon">%</span>
						   <input type="text" class="form-control" placeholder="Tax Rate">
						  </div>
						 </div>
						</div>
					   </div>
						<div class="panel-body"></div>
					   <div class="form-group m-a-0" style="padding-left:207px;">
						<button type="reset" class="btn btn-default btn-wide">Reset</button>
						<button type="submit" class="btn btn-success btn-wide">Submit</button>
					   </div>

							   
							</div>
							<div class="modal-footer">
							  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						  </div>
						  
						</div>
					  </div>

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
		<script>

		$(document).ready(function() {
		  $(".add-more").click(function(){ 
			  var htmlz = "<div class='row atrri_add_cont'><div class='col-sm-3'><div class='form-group'><label style='font-size:13px;'>Product Name</label><input type='text' name='attri[]' class='form-control' placeholder=' Product ' required><p class='help-block with-errors'></p></div></div><div class='col-sm-2'><div class='form-group'><label style='font-size:13px;'>Quantity</label><input type='text' name='attri[]' class='form-control' placeholder=' Qty ' required><p class='help-block with-errors'></p></div></div><div class='col-sm-2'><div class='form-group'><label style='font-size:13px;'>Rate</label><input type='text' name='attri[]' class='form-control' placeholder=' Rs.' required><p class='help-block with-errors'></p></div></div><div class='col-sm-2'><div class='form-group'><label style='font-size:13px;'>TAX</label><input type='text' name='attri[]' class='form-control' placeholder='TAX %' required><p class='help-block with-errors'></p></div></div><div class='col-sm-2'><div class='form-group'><label style='font-size:13px;'>Amount</label><input type='text' name='optn[]' class='form-control' placeholder='Rs.' required><p class='help-block with-errors'></p></div></div><div class='col-sm-1' style='margin-top:30px;'><a href='#' class='remove' style='color:#ef5350;'><i class='fa fa-trash'></i></a></div></div></div></div></div>";
			  //alert(htmlz);
			  $(".add-more-contz").append(htmlz);
		  });

		  $("body").on("click",".remove",function(){ 
			  
			  $(this).parents(".atrri_add_cont").remove();
		  });

		});
	</script>

	<script>
		function copybillingaddr(){
			var billstreet = $(".billstreet").val();
			var billcity = $(".billcity").val();
			var billstate = $(".billstate").val();
			var bilzip = $(".bilzip").val();
			var billcountry = $(".billcountry option:selected").val();
			
			$(".billstreet2").val(billstreet);
			$(".billcity2").val(billcity);
			$(".billstate2").val(billstate);
			$(".bilzip2").val(bilzip);
			$(".billcountry2 select").val(billcountry)
			$('.billcountry2 option[value='+billcountry+']').prop('selected',true);
		}
	</script>
	
</body>
</html>