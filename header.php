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
<html lang="en">
    <head>
		<title>products</title>
        <!-- ALL STYLESHEET -->
        <meta charset="utf-8" />
		<link rel="icon" type="image/png" href="assets/img/favicon.ico">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    	<meta name="viewport" content="width=device-width" />

        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/style2.css" rel="stylesheet">
		
    </head>   
	<body>
		
		<!-- header -->
		<header class="header">
			
			<!-- header top -->
			<div class="header-top">
				<div class="container">
					<div class="row">
						
						<div class="col-sm-8 col-md-4 ">
							<ul class="list-inline">
								<li><a href="#" ><i class="fa fa-mobile"></i> +88018374345</a></li>
								<li><a href="#" ><i class="fa fa-envelope-o"></i> example@gmail.com</a></li>
							</ul>	
						</div>
						<div class="col-sm-5 col-md-4">
							<ul class="list-inline pull-right">
								<li><a href="login.php" ><i class="fa fa-book"></i> Buy a Book</a></li>
								
								<li><a class="register" href="signup.php" >Register</a></li>
							</ul>	
						</div>	
					</div>	
				</div>
			</div>
			
			<!-- logo and adds -->
			<div class="logo-add">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-md-6">
							<div class="logo"><i class="fa fa-diamond"></i>Heldy-products</div>
						</div>
						<div class="col-sm-6 col-md-6">
							<h3 class="add bb-year-end-ribbon hidden-xs"><img src="images/re.jpg" width="40px;" alt="" /> 
							<span> We Can <span>Help</span> Your Research Work</span> <button class="btn btn-default"></button></h3>
						</div>
					</div>
				</div>
			</div>
			

			<!-- header bottom -->
			<div class="header-bottom">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<nav class="navbar navbar-default">
							<div class="container">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-bottom" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>

								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse" id="header-bottom">
									<ul class="nav navbar-nav">
										<li><a href="index.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home</a></span>
											
										</li>
										
										<li><a href="aboutus.php">About Us</a> <span class="label label-info text-center hidden-xs">New <i class="fa fa-caret-right"></i></span></li>
										<li><a href="products.php">Books</a></l>
									</ul>
									<ul class="nav navbar-nav">
										<li><a href=""> </a></li>
										<li><a href=""></a></li>
									</ul>
									
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