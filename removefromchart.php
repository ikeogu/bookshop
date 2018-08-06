<?php
	include_once '../includes/product.php';
	include_once '../includes/function.php';

	if(isset($_GET['product_id']) && isset($_GET['opt'])){
		$product_id = str_replace("_","/", $_GET['product_id']);
		$product = Product::find($product_id);
     	if($_GET['opt']==0 && $product)
     		$product->delete();
     	redirect ('product3.php');
     }
?>