<?php
    include_once 'includes/admin.php';
    include_once 'includes/session.php';
     include_once 'includes/function.php';
    $result ='';
    if(isset($_POST['login'])){
      $password = $_POST['password'];
      $email = $_POST['email'];

      $admin = Admin::authenticate($password, $email);

      $header = 'Registration Status';
      $message ='Admin  Loggin successsfully.';
      $message2= "Admin  Loggin Failed.";

      if($admin){
        $session->login($admin);

        redirect('user.php');
      } else {
          $result = '<div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

        <strong> Oops!</strong>'."$header".'<hr/>'."$message2".'</div>';
      }
    }


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>admin login</title>
              <meta name="description" content="we are here to serve basically students of uniport and possibly other higher institutions for lecture notes, past question and More. " />
    <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script src="catalog/view/javascript/jquery/jquery-ui.js" type="text/javascript"></script> 
    <link href="catalog/view/javascript/jquery/css/jquery-ui.css" rel="stylesheet" media="screen" />
    <link href="catalog/view/theme/default/stylesheet/opentheme/oclayerednavigation/css/oclayerednavigation.css" 
    rel="stylesheet"> 
   

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
                
            </div>
          </div>
        </div>
            
            <!-- logo and adds -->
            <div class="logo-add">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="logo"><i class="fa fa-diamond"></i>Adim Login</div>
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
          <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8  col-sm-8">
                                <div class="card">
                                    <div class="header">
                                        <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                   <?php echo $result?> 
                                                </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <form action="login.php" method="POST" id="loginForm" name="loginForm">
                                            
                                            <div class="row">
                                               <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="email" class="form-control"   name="email"  required="" placeholder="your Email@example.com">
                                                    </div> 
                                                </div> 
                                            </div>
                                            <div class="row">       
                                               <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input type="password" class="form-control" placeholder="Password"  name="password" required="">
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row">   
                                                <div class="col col-lg-8 col-sm-6 col-md-6">
                                                    <button  type="submit" class="btn btn btn-default" role='button'"  name="login" style="color: white">Login </button>
                                                    <a href="signup.php" class="btn btn btn-default" role='button' " style="color: white" >Signup</a>
                                                 </div>
                                            </div>
                                        
                                        </form> 
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            <div>
              <?php include_once '../footer.php';?>  
            </div>
        
</body>
</html>





                                
                                                    
