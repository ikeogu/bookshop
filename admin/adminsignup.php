<?php
    include_once 'includes/admin.php';
    $result = '';
  
    if(isset($_POST['create'])){
      $admin = Admin::instantiate($_POST);
      $header = 'Registration Status ';
      $message ='Your registration was successsfully.';
      $message2= 'Oops! seems somthing was missing .';
      if($admin){ $admin->attach_file($_FILES['passport']);

            if ($admin->save_with_file()) {
                 $result = '<div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <strong>Success!</strong>'." $header ".'<hr/>'." $message".'</div>';
            }else {
                    $result = '<div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <strong>Oops! </strong>'." $header ".'<hr/>'." $message2 ".'</div>';
        }
      }
    }
?>

<!doctype php>
<php lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

    <title>signup</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>

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
     
   
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
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
                            <div class="logo"><i class="fa fa-diamond"></i>Adim signup</div>
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
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Signup</h4>
                                <div class="" >
                                        <?php echo $result;?>
                                </div>
                            </div>
                            <div class="content">
                                <form action="adminsignup.php" method="POST" enctype="multipart/form-data">
                                    
                                    <div class="row" style="padding-left: 20px">
                                       <div class="col-md-5 col-lg-3">
                                            <div class="form-group">
                                                <label>passport</label>
                                                <input type="file" class="form-control"   name="passport"  required="" style="height: 150px; width: 150px;">
                                            </div> 
                                        </div>
                                        <div class="row">    
                                           <div class="col-md-3  col-lg-4">
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input type="text" class="form-control" placeholder="Username"  name="username">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-lg-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email address</label>
                                                    <input type="email" class="form-control" placeholder="Email" name="email">
                                                </div>
                                            </div>
                                        </div>

                                    <div class="row" style="padding-left: 25px">
                                        <div class="col-md-4 col-lg-4">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" placeholder="First Name"  name="fname">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-4">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" placeholder="Last Name" name="lname">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-4">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" placeholder="Home Address" name="address" >
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <div class="row" style="padding-left: 25px">
                                        <div class="col-md-4 col-lg-4">
                                            <div class="form-group">
                                                <label>DOB</label>
                                                <input type="date" class="form-control" placeholder="date of birth" name="dob" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="padding-left: 25px">
                                        <div class="col-md-12 col-lg-4">
                                            <div class="form-group">
                                                <label>password</label>
                                                <input type="password" class="form-control" placeholder="password" name="hash" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="padding-left: 25px">
                                        <div class="col-md-12 col-lg-4">
                                            <div class="form-group">
                                                <label>confirm password</label>
                                                <input type="password" class="form-control" placeholder="confirm password" name="" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="padding-left: 25px">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" class="form-control" placeholder="City" name="city" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" class="form-control" placeholder="Country" name="country" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="number" class="form-control" placeholder="phone" name="phone" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="padding-left: 25px">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>About Me</label>
                                                <textarea rows="5" class="form-control" placeholder="Here can be your description" name="aboutme" ></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right" name="create" >Sign up</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>               
</body>
</html>              