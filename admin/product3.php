<?php
include ("header2.php");
include_once '../includes/product.php';
//include_once '../includes/session.php';
include_once '../includes/function.php';
//if(!($session->is_logged_in())) redirect('login.php');

    //$product = Product::find($product_id);
    // $product = Product::delete($product_id);
     $product = Product::All();
  
?>
<body class="container">


	<table class=" table table-hover table-striped table-border table-responsive">
		<?php
		
			$table ='
				<thead>
				<th ><strong>S/NO</strong></th>
				<th><strong>Title</strong></th>
				<th><strong>File</strong></th>
				<th><strong>Category</strong></th>
				<th><strong>Quantity</strong></th>
				</thead>
			';
			if ($product)
				foreach ($product as $product) {
					# code...

					$table.= "<tr>
									<td>{$product->getProductId()}</td>
									<td>{$product->title}</td>
									<td>{$product->file}</td>
									<td>{$product->category}</td>
									<td>{$product->quantity}</td>
									<td><a class= 'btn btn-info btn-fill' href='editproduct.php?id={$product->getProductId()}'>Edit</a></td>
 										<td><a class= 'btn btn-danger btn-fill' href='product_delete.php?product_id=".str_replace('/'
 										, '_', $product->getProductId())."&opt=0'>Delete</a></td>
							</tr>";
				}
				echo $table;
			

		?>
	</table>


	<?php include_once 'footer2.php';?>
</body>