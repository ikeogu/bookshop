<?php 
include_once 'header.php';?>

<!DOCTYPE html>
<html>
<head>
  <title>products</title>
</head>
<body>
    <h3><font color="#bb3239">Library</font> </h3> 
      <section>
        <?php 
    
        include_once 'includes/product.php';
        $show= Product::show();
        echo $show;
        ?>
      </section>
      <section style="padding-top: 1000px;">
        <?php  include_once 'footer.php';?>
       </section>
</body>
</html>
 