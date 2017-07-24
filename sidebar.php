<?php
$page_name = BASENAME($_SERVER['PHP_SELF']);
$user_id = $_SESSION['user_id'];
$cu_info = mysqli_query($mysqli, "select * from users where user_id = '".$user_id."'");
$fetch_details = mysqli_fetch_array($cu_info);
?>
<aside class="rs-sidebar">
	
			<!-- Sidebar menu -->
			<ul class="rs-sidebar-nav default-sidebar-nav">
				<li class="rs-user-sidebar">
					<a href="my_account.php">
						<img src="uploads/<?php echo $fetch_details['logo_image'];?>" alt="Avatar" class="avatar img-circle">
						<?php echo $fetch_details['username']; ?>
						<span class="subname text-uppercase m-t" style="text-transform:normal;">
							<?php 
								echo $fetch_details['business_name'];
								$coun = strlen($user_data['business_name']);
								echo substr(ucfirst($user_data['business_name']),0,19);
								if($coun > 19){
									echo "..";
								}
							?>
						</span>

						<span class="subname text-uppercase m-t">
							<?php echo $user_data['country'];?>
						</span>
					</a>
					<ul>
						<li><a href="my_account.php">My Profile</a></li>
						<li><a href="javascript:void(0);">Account Settings</a></li>
						<li><a href="javascript:void(0);">Author Level<span class="label label-success p-x text-uppercase">Elite</span></a></li>
						<li><a href="logout.php">Log Out</a></li>
					</ul>
				</li>

				<li class="menu-block-divider"></li>

				<li class="nav-item start <?php if($page_name == 'dashboard.php'){ ?>active open<?php } ?>">
					<a href="dashboard.php">
						<span class="gcon gcon-gauge rs-icon-menu"></span>Dashboard
					</a>
				</li>
			


				<li class="nav-item start <?php if($page_name == 'vendor.php' ||  $page_name == 'customer.php') { ?>active open<?php } ?>">
					<a href="javascript:void(0);">
						<span class="badge badge-danger">6</span>
						<span class="fa fa-address-book rs-icon-menu"></span>Contacts
					</a>
					<ul>
						<li ><a href="vendor.php">Suppliers / Vendors</a></li>
						<li ><a href="customer.php">Customers</a></li>
					</ul>
				</li>

				<li class="nav-item start <?php if($page_name == 'product_group.php' ||  $page_name == 'product.php') { ?>active open<?php } ?>">
					<a href="javascript:void(0);">
						<span class="fa fa-shopping-cart rs-icon-menu"></span>Products / Services
					</a>
					<ul>
						<li><a href="product_group.php">Group / Category</a></li>
						<li><a href="product.php">Products</a></li>
					</ul>
				</li>

				<li class="nav-item start <?php if($page_name == 'view_sales_order.php'){ ?>active open<?php } ?>">
					<a href="sales_order.php">
						<span class="fa fa-usd rs-icon-menu"></span>Sales
					</a>
					<ul>
						<li><a href="add_sales_order.php">Create Sales</a></li>
						<li><a href="sales_order.php">View Sales</a></li>
					</ul>
				</li>


				<li class="nav-item start <?php if($page_name == 'add_bill.php' ||  $page_name == 'view_bill.php') { ?>active open<?php } ?>">
					<a href="javascript:void(0);">
						<span class="fa fa-table rs-icon-menu"></span>Expense Bills
					</a>
					<ul>
						<li><a href="add_bill.php">Add Bill</a></li>
						<li><a href="view_bill.php">View Bills</a></li>
					</ul>
				</li>
				
				<li class="nav-item start <?php if($page_name == 'reports.php') { ?>active open<?php } ?>">
					<a href="reports.php">
						<span class="fa fa-file-o rs-icon-menu"></span>Reports
					</a>
				</li>
				
				<!--<li class="nav-item start <?php if($page_name == 'tax.php') { ?>active open<?php } ?>">
					<a href="tax.php">
						<span class="fa fa-balance-scale rs-icon-menu"></span>Tax
					</a>
				</li>-->
								
				<li class="menu-block-divider"></li>
			</ul>
			<!-- End sidebar menu -->

		</aside>