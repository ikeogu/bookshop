<?php
 include('includes/session.php'); 
 include_once 'includes/product.php';
 include ('user_header.php');
 if(!($session->is_logged_in())) redirect('login.php');
 
?>

<section>
	<?php
		include_once 'includes/product.php';
		$products = Product::panel();
		 echo $products;
	 ?>
</section>
	<div  id='footerSection' class='thumbnail'>
  	<?php include('footer.php');?>
  </div>
