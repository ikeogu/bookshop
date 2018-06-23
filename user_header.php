<?php 
include_once('includes/session.php');
include_once('includes/orderdetails.php');
if(!($session->is_logged_in())) redirect('login.php');
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
<html lang="en">
    <head>
		<title>products</title>
        <!-- ALL STYLESHEET -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/style2.css" rel="stylesheet">
		
    </head>   
	<body>
		
		<!-- header -->
		<header class="header">
			
				
			<!-- logo and adds -->
			<div class="logo-add">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<div class="logo"><i class="fa fa-diamond"></i>Heldy - products</div>
						</div>
						
					</div>
				</div>
			</div>
			

			<!-- header bottom -->
			<div class="header-bottom">
				<div class="row">
					<div class="col-sm-12">
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
										<li class=""><a href="user_products.php"><i class="icon-flag"></i>products</a></li>
										<li class=""><a href="product_summary.php"><i class="icon-flag"></i> Chart</a></li>
										<li class=""><a href="logout.php"><i class="icon-flag"></i> Logout</a></li>
									<li><a href="contact.php">Contact Us</a></li>
									</ul>
									
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

		
 <!-- ALL JAVASCRIPT -->  
       
    <script src='js/jquery.js'></script>
    <script src='bootstrap/js/bootstrap.min.js'></script>
    <script src='js/custom.js'></script>
</body>
</html>