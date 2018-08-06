
		
<div class="footer-container">
	<div class="footer">
		  <div class="container">
			<div class="container-inner">
			<div class="row">
			  <div class="col-lg-4 col-md-4 col-sm-4 col-sms-12 col col1">
					<div class="footer-title rgh"><h3>Heldy Books</h3></div>
					<div class="address">
						<h2><i class="fa fa-map-marker"></i><span>Head Office: <br> 67 Choba Junction East west Road, Choba, Port Harcourt</span></h2>
					</div>
					<div class="telephone">
						<h2><i class="fa fa-phone"></i><span>08033229113, 08078496332, 07040560876, 0700-Booksellers</span></h2>
					</div>
					<div class="email">
						<h2><i class="fa fa-envelope-o"></i><span><a href="mailto:info@booksellers.ng">info@Heldy-Books.com</a></span></h2>
					</div>
					<h3 class="footer-btn">Follow us on</h3>
					<ul class="link-follow">
						<li><a class="face" href="https://www.facebook.com/BooksellersNG" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li><a class="twitter" href="https://www.twitter.com/booksellersng" target="_blank"><i class="fa fa-twitter"></i></a></li>
						<li><a class="instagram" href="https://www.instagram.com/booksellers_ng" target="_blank"><i class="fa fa-instagram"></i></a></li>
						
					</ul>
			  </div>
			  <div class="col-lg-8 col-md-8 col-sm-8 col-sms-12">
				  <div class="footer-link">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-4 col-sms-12">
							<div class="col col2">
								<div class="footer-title footer-btn"><h3>Company Infomation</h3></div>
								<div class="footer-content">
									<ul class="list-unstyled">
									  <li><a href="aboutus.php">About Us</a></li>
									  <li><a href="#">Contact Us</a></li>
									  <li><a href="#">Publishing</a></li>
									  <li><a href="#">Events & News</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-sms-12">
							<div class="col col3">
								<div class="footer-title footer-btn"><h3>Customer Service</h3></div>
								<div class="footer-content">
									<ul class="list-unstyled">
										<li><a href="fags.php">Help & FAQ</a></li>
										<li><a href="#">Delivery Information</a></li>
										<li><a href="#">Payment Information</a></li>
										<li><a href="#">Terms & Conditions</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-sms-12">
							<div class="col col4">
								<div class="footer-title footer-btn"><h3>My Account</h3></div>
								<div class="footer-content">
									<ul class="list-unstyled">
									  <li><a href="index.php?route=account/login">Login/Register</a></li>
									  <li><a href="https://booksellers.ng/index.php?route=account/account">My Account</a></li>
									  <li><a href="https://booksellers.ng/index.php?route=account/order">Order History</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				  </div>
				  <div class="newsletter-payment">
					<div class="newletter-subscribe">
						<div id="boxes" class="newletter-container">
						 <div style="" id="dialog" class="window">
							<div class="box">
							  <div class="newletter-title"><h2>Newsletter</h2></div>
							  <div class="box-content newleter-content">
								<label>Follow us on</label>
								  <div id="frm_subscribe">
									<form name="subscribe" id="subscribe">
										<table>
											<tr>
												<td><span>Newsletter:</span><input type="text" value="" placeholder="Email address..." name="subscribe_email" id="subscribe_email">
												<input type="hidden" value="" placeholder="Email address..." name="subscribe_name" id="subscribe_name" />
												</td>
											</tr>
											<tr>
												<td>
													<a class="button" onclick="email_subscribe()"><span>Subscribe</span></a>
												</td>
					   						</tr>
					   					</table>
			  						</form>
		  						</div><!-- /#frm_subscribe -->
		  					<div id="notification"></div>
						</div><!-- /.box-content -->
 					</div>
				</div>	
				<div style="width: 2000px;top:-808px; height: 2000px; display: none; opacity: 0.7;" id="mask"> </div>
 		</div>
		<script type="text/javascript">
			function email_subscribe(){
				$.ajax({
						type: 'post',
						url: 'index.php?route=module/newslettersubscribe/subscribe',
						dataType: 'html',
			            data:$("#subscribe").serialize(),
						success: function (html) {
							eval(html);
						}}); 
				
				
			}
			function email_unsubscribe(){
				$.ajax({
						type: 'post',
						url: 'index.php?route=module/newslettersubscribe/unsubscribe',
						dataType: 'html',
			            data:$("#subscribe").serialize(),
						success: function (html) {
							eval(html);
						}}); 
				$('html, body').delay( 1500 ).animate({ scrollTop: 0 }, 'slow'); 
				
			}
		</script>
		<script type="text/javascript">
			$(document).ready(function() {
			$('#subscribe_email').keypress(function(e) {
			            if(e.which == 13) {
			                e.preventDefault();
			                email_subscribe();
			            }
						var name= $(this).val();
					  	$('#subscribe_name').val(name);
			        });
					$('#subscribe_email').change(function() {
					 var name= $(this).val();
					  		$('#subscribe_name').val(name);
					});
				
				 return ; 
			        function setCookie(cname,cvalue,exdays)
			        {
			            var d = new Date();
			            d.setTime(d.getTime()+(exdays*24*60*60*1000));
			            var expires = "expires="+d.toGMTString();
			            document.cookie = cname+"="+cvalue+"; "+expires;
			        }
			        function getCookie(cname)
			        {
			            var name = cname + "=";
			            var ca = document.cookie.split(';');
			            for(var i=0; i<ca.length; i++)
			            {
			                var c = ca[i].trim();
			                if (c.indexOf(name)==0) return c.substring(name.length,c.length);
			            }
			            return "";
			        }

			        //transition effect
			        if(getCookie("shownewsletter") != 1){
			            var id = '#dialog';
			            //Get the screen height and width
			            var maskHeight = $(document).height();
			            var maskWidth = $(window).width();
			            //Set heigth and width to mask to fill up the whole screen
			            //transition effect
			            //Get the window height and width
			            var winH = $(window).height();
			            var winW = $(window).width();
			            //Set the popup window to center
			            $(id).css('top',  winH/2-$(id).height()/2 -50);
			            $(id).css('left', winW/2-$(id).width()/2);
			            $('#mask').fadeIn(800);
			            $('#mask').fadeTo("slow",0.8);
			            $(id).fadeIn(500);
			      
			        }else {
			            $('#advice-required-entry-newsletter').remove();

			            $('#dialog').remove();
			            $('#boxes').remove();
			        }
			        //if close button is clicked
			        $('.window .close').click(function (e) {
			            //Cancel the link behavior
			            e.preventDefault();
			            $('#mask').hide();
			            $('.window').hide();
			            setCookie("shownewsletter",'1',1);
			        });

			//if mask is clicked
			        $('#mask').click(function () {
			            $(this).preventDefault();
			            $(this).hide();
			            $('.window').hide();
			            setCookie("shownewsletter",'1',1);
			        });
			    });
		</script>
				</div><!-- /.box -->
					
				</div>
			 </div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-sms-12">
						<div class="powered"><p>Copyright &copy;2018 – Heldy-Books. All right Reserved. <a href="#">eCommerce Website Design</a> by <a href="#">Dera Tech</a>.</p></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
	<div id="back-top" class="hidden-phone" style="display: block;"> </div>
	<!--
	OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
	Please donate via PayPal to donate@opencart.com
	//-->

	<!-- Theme created by Welford Media for OpenCart 2.0 www.welfordmedia.co.uk -->
	<script type="text/javascript">
		$(document).ready(function(){

		 // hide #back-top first
		 $("#back-top").hide();
		 
		 // fade in #back-top
		 $(function () {
		  $(window).scroll(function () {
		   if ($(this).scrollTop() > 100) {
			$('#back-top').fadeIn();
		   } else {
			$('#back-top').fadeOut();
		   }
		  });
		  // scroll body to 0px on click
		  $('#back-top').click(function () {
		   $('body,html').animate({
			scrollTop: 0
		   }, 800);
		   return false;
		  });
		 });

		});
	</script>
</footer>
			
 

    <!-- ALL JAVASCRIPT -->         
    <script src='js/jquery.js'></script>
    <script src='bootstrap/js/bootstrap.min.js'></script>
    <script src='js/custom.js'></script>
   
</body>
</html>

