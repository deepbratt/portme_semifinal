<?php
	include("../config.php");

	/*item fields */
	$product_id = $_POST['p_id'];
	$hsn = $_POST['hsn'];
	$qty = $_POST['qty'];
	$unit_price = $_POST['unit_price'];
	$tax_rate = $_POST['tax_rate'];
	$cgst = $_POST['cgst'];
	$sgst = $_POST['sgst'];
	$igst = $_POST['igst'];
	$cess = $_POST['cess'];
	$tax_val = $_POST['tax_val'];
	$discount = $_POST['discount'];
	$total = $_POST['total'];
	$cus_state = $_POST['cus_state'];
	$business_id = $_SESSION['business_id'];
	$get_business_stateid = mysqli_query($mysqli,"SELECT * FROM tbl_business WHERE business_id='$business_id'");
	$fetch_business_stateid = mysqli_fetch_array($get_business_stateid);
	$business_state = $fetch_business_stateid['state'];
	
	if($tax_val != '0' || $tax_val == ''){
		if($business_state == $cus_state){
			$cgst = "";
			$sgst = "";
			$igst = "00.00";
		}else{
			$cgst = "00.00";
			$sgst = "00.00";
			$igst = "";
		}
	}else{
		$tax_val = "0";
		$cgst = "00.00";
		$sgst = "00.00";
		$igst = "00.00";
	}
	/*item fields ends */

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



	$response = array("product_id"=> $product_id ,"productcat_id"=> $productcat_id , "business_id" => $business_id , "name" => $name ,"selling_price" => $selling_price , "attr_name" => $attr_name , "attr_value" => $attr_value , "HSN_code" => $HSN_code);
	header("Content-Type: application/json");
	echo json_encode($response);
?>