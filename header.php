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
			<meta name="description" content="we are here to serve basically students of uniport and possibly other higher institutions for lecture notes, past question and More. " />
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
				<div class="col-md-6 col-sm-12 col-sms-12 hidden-xs">
					<div id="top-links" class="nav pull-right">
						<div class="box-link">					
							<ul class="list-inline links">
							  <li><a class="login" href="login.php ">Login</a></li>
							  <li><a class="register" href="signup.php">Register</a></li>
							  	
							</ul>
						</div>
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
													<div id ="pt_menu_cms" class ="pt_menu"><div class="parentMenu" ><a href="aboutus.php"><span>About Us</span></a>
													</div>
													</div>
													<div id ="pt_menu_link64" class ="pt_menu">
														<div class="parentMenu" ><a href="blog.php"><span>Publishing</span></a>
														</div>
													</div>
													<div id ="pt_menu_link63" class ="pt_menu">
														<div class="parentMenu" ><a href="index.php?route=blog/blog"><span>Events &amp; News</span></a></div></div>
													<div id ="pt_menu_cms" class ="pt_menu">
														<div class="parentMenu" ><a href="seefaqs.php"><span>FAQs</span></a>
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
		
 <!-- ALL JAVASCRIPT -->         
    <script src='js/jquery.js'></script>
    <script src='bootstrap/js/bootstrap.min.js'></script>
    <script src='js/custom.js'></script>
</body>
</html>