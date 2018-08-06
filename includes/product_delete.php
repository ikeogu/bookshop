<?php
	include_once '../includes/product.php';

	if(isset($_GET['id']) && isset($_GET['opt'])){
		$product_id = $_GET['id'];
		// $product = Product::find($product_id);
     	
  //    	if($_GET['opt']==0 && $product)
  //    		$product->delete();
		echo "$product_id";
     	//redirect ('product3.php');
     }
?>