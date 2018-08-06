<?php 
include('includes/session.php');
include('includes/product.php');
include ('includes/function.php');
include ('includes/orderdetails.php');
    require 'vendor/autoload.php';
    include_once('includes/session.php');
include_once('includes/orderdetails.php');
include_once "includes/customer.php";
if(!($session->is_logged_in())) redirect('login.php');

 //if(isset($_GET) & !empty($_GET))
  //$product = Product::find($product_id);
 if(isset($_POST) & !empty($_POST)){
   $order = Orderdetails::instantiate($_POST);
   $product = Product::find($order->product_id);
   $order->computeOrderDetails($product->price);
   $order->customer_id = $session->user_id;
   $order->save();
   }
if (isset($_GET['product_id']) && isset($_GET['opt'])){
    $product = Product::find($_GET['product_id']);
    if($_GET['opt']==0 && $product)
      $product->delete();
    redirect ('product_summary.php');
  }
   $ordered_items = Orderdetails::where(array('customer_id' =>$session->user_id ));
   

   ?>






<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="en" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="en" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" lang="en">
<!--<![endif]-->
  <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Booksellers -HELDY_BOOKS  FOR UNIPORT STUDENTS Nigeria</title>
  <meta name="viewport" content="width=device-width" />

        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">
      <meta name="description" content="we are here to serve basically stude ts of uniport and possibly other higher institutions for lecture notes, past question and More. " />
  <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>
  <script src="catalog/view/javascript/jquery/jquery-ui.js" type="text/javascript"></script> 
  <link href="catalog/view/javascript/jquery/css/jquery-ui.css" rel="stylesheet" media="screen" />
  <link href="catalog/view/theme/default/stylesheet/opentheme/oclayerednavigation/css/oclayerednavigation.css" 
  rel="stylesheet"> 
  <meta name="viewport" content="width=device-width" />

        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">
    
  <script src="js/oclayerednavigation.js" type="text/javascript"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen" />
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link href="css/simple-line-icons.css" rel="stylesheet" type="text/css" />
  <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Josefin+Sans" />
  <link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700' rel='stylesheet' type='text/css' />
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet"> 
  <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css' />
  <link href='https://fonts.googleapis.com/css?family=Raleway:400,600,700,800,900,500' rel='stylesheet' type='text/css' />
  <link href="css/stylesheet2.css" rel="stylesheet">
  <link href="css/custommenu.css" rel="stylesheet">
  <script src="js/customenu.js" type="text/javascript"></script>
  <script src="js/custommenu.js" type="text/javascript"></script>
  <script src="js/mobile_menu.js" type="text/javascript"></script>
  <link href="css/owl.carousel.css" rel="stylesheet">
  <script src="js/owl.carousel.js" type="text/javascript"></script>
  <script src="js/jquery.elevatezoom.js" type="text/javascript"></script>
  <script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
  <link href="css/animate.css" rel="stylesheet" type="text/css">
  <link href="css/ocslideshow.css" rel="stylesheet">
  <script src="js/main.js" type="text/javascript"></script>
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
  <link href="css/featuredslider.css" type="text/css" rel="stylesheet" media="screen" />
  <link href="css/owl.theme.css" type="text/css" rel="stylesheet" media="screen" />
  <link href="css/ocsvegamenu.css" type="text/css" rel="stylesheet" media="screen" />
  <link href="css/ocslideshow.css" type="text/css" rel="stylesheet" media="screen" />
  <script src="js/common9.js" type="text/javascript"></script>
  <link href="https://booksellers.ng/image/catalog/favicon1.png" rel="icon" />
  <script src="js/jquery.bpopup.min.js" type="text/javascript"></script>
    
    </head>   
  <body>
    
    <!-- header -->
    <header class="header">
      
    <div id="top">
      <div class="container">
        <div class="row hidden-xs">
        <div class="col-md-6 col-sm-12 col-sms-12">
          <div class="text-welcome">
            <p> Welcome to Heldy bookshop.</p>
          </div>
        </div>
        <div>
        <?php 

                  $count = count(Orderdetails::where(array('customer_id' => $session->user_id )));
    
                echo "<div class='pull-right'> <br/>
                  <a title='Click to view your cart!' href='product_summary.php'> <span class='btn btn-mini btn-success'> <i class='icon-shopping-cart icon-white'></i> <small>your cart has $count items</small> </span> </a>
                  <a title='Click to view your cart!' href='product_summary.php'>
                    <span class='btn btn-mini active btn'>check cart</span></a>
                </div>";
                ?>
        </div>
        </div>
      </div>
    </div>
      
      <!-- logo and adds -->
      <div class="logo-add">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <div class="logo"><i class="fa fa-diamond"></i>Heldy-Books</div>
            </div>
          </div>
        </div>
      </div>
      

      <!-- header bottom -->
      <div class="header-bottom">
        <div class="row">
          <div class="col-sm-12 col-md-12">
            <nav class="navbar navbar-default" class="navbar navbar-default pull-left">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div id="mobile-menu">
                  
                    <div class="container-fluid">
                      <div class="navbar-header">
                        <button id="ChangeToggle" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu-navbar-collapse" aria-expanded="false">
                          <div id="navbar-hamburger">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </div>
                          <div id="navbar-close" class="hidden">
                            <span class="glyphicon glyphicon-remove"></span>
                          </div>
                        </button>
                      </div>
                     </div>
                </div>       
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div id="main-menu-navbar-collapse">
                  <div class="nav-container visible-lg visible-md visible-xs">
                    <div class="nav1">
                      <div class="nav2">
                        <div id="pt_custommenu" class="pt_custommenu">
                          <div id="pt_menu_home" class="pt_menu">
                            <div class="parentMenu">
                              <a href="index.php"><span>Home</span></a>
                            </div>
                          </div>
                          <div id ="pt_menu_cms" class ="pt_menu"><div class="parentMenu" ><a href="about_us.php"><span>About Us</span></a>
                          </div>
                          </div>
                          <div id ="pt_menu_link64" class ="pt_menu">
                            <div class="parentMenu" ><a href="index.php?route=newsblog/category&amp;newsblog_path=1"><span>Publishing</span></a>
                            </div>
                          </div>
                          <div id ="pt_menu_link63" class ="pt_menu">
                            <div class="parentMenu" ><a href="index.php?route=blog/blog"><span>Events &amp; News</span></a></div></div>
                          <div id ="pt_menu_cms" class ="pt_menu">
                            <div class="parentMenu" ><a href="https://booksellers.ng/fqas"><span>FAQs</span></a>
                            </div>
                          </div>
                          <div id ="pt_menu_link55" class ="pt_menu">
                            <div class="parentMenu" >
                              <a href="index.php?route=information/contact"><span>Contact Us</span></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </nav>  
          </div>  
        </div>  
      </div>  
    </header>
    <section>
      <form class="navbar-form navbar-right" role="search">
        <div class="search-box form-group">
           <input type="text" autocomplete="off" placeholder="Search book..." class="form-control" />
          
             <div class="result"></div>
        </div>

      </form>
    </section>



<body>

  <div id="mainBody" class="container">
    <font color="black">

      <form method="post" action="product_summary.php">
        <h3>  SHOPPING CART [ <small><?php
          $count = count(Orderdetails::where(array('customer_id' => $session->user_id )));
          //var_dump($count); exit();
          echo $count;
          if ($count>1) {
            # code...
            echo "<div class='alert alert-danger alert-dismissible' role='alert'>
                        <button type='button' class='close' data-dismiss='alert'> <span aria-hidden='true'> &times; </span><span class='sr-only'>Close </span> </button>
                        <strong> Oop! you are not allowed to purchase more than a book at a time</strong></div>";
          }

          ?> </small>]
        </h3>  
        <hr class="soft"/>
        
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Product</th>
              <th>Description</th>
              <th  width="100">Quantity</th>
              <th  width="80">Price</th>
              <th width="80">Total</th>
              <th width="100">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              $row= '';
               $total = 0;
               if($ordered_items){
              foreach ($ordered_items as $key => $item) {
                # code...
                $item->Total/=100;
               $total += $item->Total;
               //$total/=100;
              
              $product = Product::find($item->product_id);
              $product->price/= 100;
              $strings =  $product->descr;
              $string = strip_tags($strings);

             if (strlen($string) > 20) {
                $stringCut = substr($string, 0, 10);
                $string = substr($stringCut, 0, strrpos($stringCut, ''))."... <a href='user_product_details.php?id=$item->product_id'><span style='color:blue'>Read More</span></a>";
              } 
              $row.= " <tr>
                            <td><img width='60' src='images/product/$product->logo'> </td>
                            <td>$product->title  <br/>   $string</td>
                            <td>$item->quantity</td>
                            <td>$product->price </td>
                            <td>$item->Total</td>
                            <td><a href='product_summary.php?id={$item->product_id}&opt=0'>
                              <button class='btn btn-default' type= 'button' role='button'>
                              <i class='icon-remove icon-white'></i> Remove</button></a></td>

                        </tr>    
              "; 
              }
              echo $row."<td colspan='5' align='right'><h4> TOTAL = $total</h4></td>";  
              }
                            
            ?> 
          </tbody>
        </table> 
        <div class="row"> 
          <div class="container">   
            
              <div class='col-lg-4 col-md-4  col-sm-4'>
                        <a href='user_products.php'  type= 'button' class='btn btn-large btn-fill btn-info'> Continue Shopping<i class='icon-arrow-left'></i> </a>
              </div>
     
                  
              <div class="col col-md-4  col-sm-4">
                <section class="thumbnail">
                  <h4> The choice is yours!</h4>
                </section>
              </div>
              <div class="col col-lg-2 col-md-4 col-sm-4">
                <a href="makepayment.php" type="button" class="btn btn-default btn-fill" role='button'> checkout</a>
              </div>
            </div>  
        </div>
      </form>
    </font>
  </div>
    <hr class="soft">
   <footer>
            <?php include_once'footer.php';?>
   </footer>
        

</body>  
