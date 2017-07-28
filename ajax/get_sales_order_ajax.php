<?php
	include("../config.php");
	$product_id = $_POST['suggest'];

	$get_pro_details = mysqli_query($mysqli,"SELECT * FROM tbl_products JOIN tbl_productcat WHERE tbl_products.productcat_id = tbl_productcat.productcat_id AND tbl_products.product_id='$product_id'");
	$fetch_product_details = mysqli_fetch_array($get_pro_details);
	
	$product_id = $fetch_product_details['product_id'];
	$productcat_id = $fetch_product_details['productcat_id'];
	$business_id = $fetch_product_details['business_id'];
	$name = $fetch_product_details['name'];
	$selling_price = $fetch_product_details['selling_price'];
	$attr_name = $fetch_product_details['attr_name'];
	$attr_value = $fetch_product_details['attr_value'];
	$HSN_code = $fetch_product_details['HSN_code'];

	$customer_business_id = 

	$response = array("product_id"=> $product_id ,"productcat_id"=> $productcat_id , "business_id" => $business_id , "name" => $name ,"selling_price" => $selling_price , "attr_name" => $attr_name , "attr_value" => $attr_value , "HSN_code" => $HSN_code);
	header("Content-Type: application/json");
	echo json_encode($response);
?>