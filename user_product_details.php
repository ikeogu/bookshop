<?php 
  include('includes/session.php');
  include_once 'includes/product.php';
  include_once ('user_header.php');

  if(isset($_GET) & !empty($_GET)){
    $product_id = $_GET['id'];
    $product = Product::find($product_id);
    $_SESSION['product_id'] = $product->getProductId();
  }else{
    header('location: user_products.php');
  }
?>
    
<div class="container">  
  <div class="row">
    <div id="gallery" class="span3 col-lg-4 col-md-4 col-sm-4">
      <img src="images/product/<?php echo $product->logo; ?>" width="100%" />    
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <h3><?php echo $product->title; ?></h3>
      <h4> <?php echo $product->publisher;?></h4>
      <h4> <?php echo $product->category;?></h4>
      <div>
              <p><?php echo $product->descr;?></p>
      </div>
      <hr class="soft"/>
    </div>
    <div class="col-lg-4 col-sm-4 col-md-4">
      <form class="form-horizontal qtyFrm" method="post" action="product_summary.php">
          <input type="hidden" id="username" name="product_id" value="<?php echo($product->getProductid());?>" 
          />
          <div class="control-group">
            <label>
              <h3><span>Price: N<?php echo $product->price;?></span></h3>
            </label>
          </div>  
          <br/>
           
          <div class="control-group">
            <label><h4> Qty:</h4></label>
            <input name='quantity' type='number' max="1"  color="green" class="form-group form-control" ">
            <div>
               <button type="submit" name="submit" class="btn btn-md btn-default btn-fill" role='button'>
                <i class="icon-shopping-cart"></i> Add to cart
              </button>
            </div>
          </div>    
        </form>
      </div>  
    </div>  
  </div>
</div>
<hr class='soft'>
  <div  id='footerSection' class='thumbnail'>
    <?php include_once('footer.php');?>
  </div>