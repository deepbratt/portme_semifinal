<?php
	include("../config.php");
	$value = $_POST['suggest'];

	$get_cust_query = mysqli_query($mysqli,"SELECT * FROM customers WHERE customer_id='$value'");
	$fetch_cust_query = mysqli_fetch_array($get_cust_query);
	
?>

<div class="col-sm-12">
	<label style="font-size:20px;" class="fname_lname">
		<?php echo $fetch_cust_query['firstname'];?>&nbsp;<?php echo $fetch_cust_query['lastname'];?>
	</label>
</div>
<div class="col-sm-12" class="street_city">
	<label style="font-size:15px;">
		<?php echo $fetch_cust_query['mobile'];?> , <?php echo $fetch_cust_query['email'];?>
	</label>
</div>
<div class="col-sm-12" class="state_zip">
	<label style="font-size:15px;">
		<?php echo $fetch_cust_query['billing_street'];?><br /> <?php echo $fetch_cust_query['billing_city'];?> ,<?php echo $fetch_cust_query['billing_state'];?>-<?php echo $fetch_cust_query['billing_zip'];?>
	</label>
</div>