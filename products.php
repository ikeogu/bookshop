<?php 
include_once 'header.php';?>

<!DOCTYPE html>
<html>
<head>
  <title>products</title>
</head>
<body>
    <h3><font color="green">List of Products</font> </h3> 
      <section>
        <?php 
    
        include_once 'includes/product.php';
        $show= Product::show();
        echo $show;
        ?>
      </section>
      <section>
        <?php  include_once 'footer.php';?>
       </section>
</body>
</html>
 