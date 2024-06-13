
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
<title>Contact Us</title>
<base>
<link rel="stylesheet" href="{{ asset('catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/custom/lang.css') }}">
<script src="{{ asset('catalog/view/javascript/jquery/jquery-2.1.1.min.js') }}"></script>
<script src="{{ asset('catalog/view/javascript/bootstrap/js/bootstrap.min.js') }}"></script>

<link href="https://fonts.googleapis.com/css2?family=Playball&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

<!--<link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />-->
<!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
<!--<link href="catalog/view/theme//stylesheet/TemplateBunch/bootstrap.min.css" rel="stylesheet" media="screen" />-->

<!-- default CSS START -->

<link href="catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/icofont.min.css" rel="stylesheet">
<link href="catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.css" rel="stylesheet" media="screen" />
<link href="catalog/view/javascript/jquery/owl-carousel/owl.theme.default.min.css" rel="stylesheet" media="screen" />
<link href="catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/bootstrap.min.css" rel="stylesheet" media="screen" />
<link href="catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/animate.css" rel="stylesheet" type="text/css" />

<!-- default CSS END -->

<!-- TemplateBunch Custom CSS Start -->

<link href="catalog/view/theme/OPCTB49_01/stylesheet/stylesheet.css" rel="stylesheet">

<link href="catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/custom/tb-blog.css" rel="stylesheet">
<link href="catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/custom/tb-category-feature.css" rel="stylesheet" type="text/css" />
<link href="catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/custom/tb-countdown.css" rel="stylesheet" type="text/css" />
<link href="catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/custom/tb-home.css" rel="stylesheet" type="text/css" />
<link href="catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/custom/tb-innerpage.css" rel="stylesheet" type="text/css" />
<link href="catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/custom/tb-lightbox.css" rel="stylesheet" type="text/css" />
<link href="catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/custom/tb-menu.css" rel="stylesheet" type="text/css" />
<link href="catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/custom/tb-newsletter.css" rel="stylesheet" type="text/css" />
<link href="catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/custom/tb-product.css" rel="stylesheet" type="text/css" />

<!-- TemplateBunch Custom CSS End -->



<script src="catalog/view/javascript/common.js"></script>


<!-- default JS START -->
<script src="catalog/view/javascript/TemplateBunch/default/inview.js"></script>
<script src="catalog/view/javascript/TemplateBunch/default/parallex.js"></script>
<script src="catalog/view/javascript/TemplateBunch/default/theia-sticky-sidebar.min.js"></script>
<script src="catalog/view/javascript/TemplateBunch/default/lightbox-2.6.min.js"></script>
<script src="catalog/view/javascript/TemplateBunch/default/waypoints.min.js"></script>
<script src="catalog/view/javascript/TemplateBunch/default/wow.min.js"></script>
<script src="catalog/view/javascript/TemplateBunch/default/bootstrap-notify.min.js"></script>
<script src="catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.js"></script>
<!-- default JS End -->

<!-- TemplateBunch custom JS START -->
<script src="catalog/view/javascript/TemplateBunch/actionscript.js"></script>
<script src="catalog/view/javascript/TemplateBunch/menu.js"></script>
<script src="catalog/view/javascript/TemplateBunch/tb_countdown.js"></script>
<script src="catalog/view/javascript/TemplateBunch/tb_owl.js"></script>
<!-- <script src="catalog/view/javascript/TemplateBunch/tb_quickview.js"></script> -->
<!-- TemplateBunch custom JS END -->

<script>
    new WOW().init();
</script>


<link href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/image/catalog/cart.png" rel="icon" />

<script src="catalog/view/javascript/TemplateBunch/default/jquery.bpopup.min.js"></script>
<script src="catalog/view/javascript/TemplateBunch/default/jquery.cookie.js"></script>

</head>
<body class="information-contact">
<div class="tbloading-bg tbloader"></div>
<div id="page">
		<header>
            <div class="header">
	            <div class="full-header">
	                <div class="container">
	                    <div class="header-row">
		                    <div class="header-left">
			                    <div id="logo">
                                    <a href="{{ route('app.index') }}">
                                        <img src="image/catalog/logo.png" title="Address" alt="Address" class="img-responsive" />
                                    </a>			
                                </div>
		                    </div>
		                    <div class="header-top-left">
						        <div class="header-left-cms">
			                        <aside id="header-left">
	                                    <div class="main-category-list">
			                                <div class="TB-panel-heading">
				                                <span>menu</span>
				                                <span class="icon"><i class="icofont-navigation-menu"></i></span>
			                                </div>
			                                <div class="tb-menu horizontal-menu tb-menu-bar" id="tb-menu-8426">
                                                <ul class="ul-top-items">
                                                    <li class="li-top-item mega-menu">
                                                        <a class="a-top-link" href="{{ route('app.index') }}">
                                                        <span data-key="header.home">Acceuil</span>
                                                        </a>
                                                        <!-- Mega Menu -->        
                                                        <div class="mega-menu-container sub-menu-container ">                                                                                                                                                                                                                                                        
                                                            <div class="col-sm-12 sub-item2-content" data-cols="12">
                                                                <h4><strong>TB-megamenu</strong></h4>
                                                                    <p>
                                                                        <div class="banner-static static-menu">
                                                                            <div class="column layout-1">
                                                                                <div class="menu-title">
                                                                                    <a href="#">Real Jam</a>
                                                                                </div>
                                                                                <div class="image">
                                                                                <a href="#">
                                                                                    <img src="image/catalog/demo/banners/demo-01.jpg" alt="image">
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <!-- <div class="column layout-4">
                                                                            <div class="menu-title">
                                                                                <a href="#">coming soon</a>
                                                                            </div>
                                                                            <div class="image">
                                                                                <a href="#">
                                                                                    <img src="image/catalog/demo/banners/demo-02.jpg" alt="image">
                                                                                </a>
                                                                            </div>
                                                                        </div> -->

                                                                        </div>
                                                                    </p>
                                                            </div>
                                                                        
                                                        </div>
                                                                                                                        
                                                        <!-- Flyout Menu -->
                                                    </li>

													<li class="li-top-item mega-menu">
                                                        <a class="a-top-link" href="{{ route('society.index') }}">
                                                            <span>Notre Societé </span>
                                                        </a>
                                                        <!-- Mega Menu -->
                                                        <!-- Flyout Menu -->                            
                                                        <div class="flyout-menu-container sub-menu-container">
                                                            <ul class="ul-second-items">
                                                                <li class="li-second-items">
                                                                    <a href="#" class="a-second-link a-item">
                                                                        <span class="a-second-title">Historique</span>
                                                                    </a>
                                                                </li>
                                                                <li class="li-second-items">
                                                                    <a href="#" class="a-second-link a-item">
                                                                        <span class="a-second-title">Notre dynamique</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
													
													<li class="li-top-item mega-menu">
                                                        <a class="a-top-link" href="{{ route('quality.index') }}">
                                                            <span>Qualité </span>
                                                        </a>
                                                        <!-- Mega Menu -->
                                                        <!-- Flyout Menu -->                            
                                                        <div class="flyout-menu-container sub-menu-container">
                                                            <ul class="ul-second-items">
                                                                <li class="li-second-items">
                                                                    <a href="#" class="a-second-link a-item">
                                                                        <span class="a-second-title">Qualité</span>
                                                                    </a>
                                                                </li>
                                                                <li class="li-second-items">
                                                                    <a href="#" class="a-second-link a-item">
                                                                        <span class="a-second-title">HACCP</span>
                                                                    </a>
                                                                </li>
                                                                <li class="li-second-items">
                                                                    <a href="#" class="a-second-link a-item">
                                                                        <span class="a-second-title">Certifications</span>                                                                        
                                                                    </a>
                                                                </li>
                                                                <li class="li-second-items">
                                                                    <a href="#" class="a-second-link a-item">
                                                                        <span class="a-second-title">RSE</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    
                                                    <li class="li-top-item ">
                                                        <a class="a-top-link" href="{{ route('jam.index') }}">
                                                            <span data-key="header.jam">confiture</span>
                                                        </a>
                                                    </li>
                                                    <!-- <li class="li-top-item ">
                                                        <a class="a-top-link" href="{{ route('products.index') }}">
                                                            <span data-key="header.products">Products</span>
                                                        </a>
                                                    </li> -->

                                                    <!-- <li class="li-top-item ">
                                                        <a class="a-top-link" href="{{ route('category.index') }}">
                                                            <span>Category</span>
                                                        </a>
                                                    </li> -->

                                                    <!-- <li class="li-top-item mega-menu">
                                                        <a class="a-top-link" href="#">
                                                            <span>Flavor </span>
                                                        </a>
                                                                                    
                                                        <div class="flyout-menu-container sub-menu-container">
                                                            <ul class="ul-second-items">
                                                                <li class="li-second-items">
                                                                    <a href="#" class="a-second-link a-item">
                                                                        <span class="a-second-title">Natureland</span>
                                                                    </a>
                                                                </li>
                                                                <li class="li-second-items">
                                                                    <a href="#" class="a-second-link a-item">
                                                                        <span class="a-second-title">Organics</span>
                                                                    </a>
                                                                </li>
                                                                <li class="li-second-items">
                                                                    <a href="#" class="a-second-link a-item">
                                                                        <span class="a-second-title">Fruit butters</span>
                                                                        <i class="icofont-simple-right"></i>
                                                                    </a>
                                                                    <div class="flyout-third-items">
                                                                        <ul class="ul-third-items">
                                                                            <li class="li-third-items">
                                                                                <a href="#" class="a-third-link">
                                                                                    <span class="a-third-title">blueberry</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="li-third-items">
                                                                                <a href="#" class="a-third-link"><span class="a-third-title">Marmalade</span></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li class="li-second-items">
                                                                    <a href="#" class="a-second-link a-item">
                                                                        <span class="a-second-title">Jelly</span>
                                                                    </a>
                                                                </li>
                                                                <li class="li-second-items">
                                                                    <a href="#" class="a-second-link a-item">
                                                                        <span class="a-second-title">Kissan</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li> -->
                        						
                                                                            						
                                                                            						
													<li class="li-top-item">
														<a class="a-top-link" href="{{ route('blog.index') }}">
															<span data-hover="Blogs">Blogs</span>
														</a>
													</li>       
                                                    <li class="li-top-item ">
                                                        <a class="a-top-link" href="{{ route('contact.index') }}">
                                                            <span>Contact</span>
                                                        </a>
                                                    </li>                        						
					                            </ul>
                    	                    </div>
		                                </div>
                                    </aside>
			                    </div>
					        </div>
		                    <div class="header-top-right">
			                    <div id="top-links" class="nav pull-right">
				                    <ul class="list-inline">
				                        <li class="tbsearch">
                                            <div id="search" class="input-group">
	                                            <span class="tbsearch_button">		
		                                            <i class="icofont-search-1"></i>
		                                            <i class="icofont-close"></i>
	                                            </span>
	                                            <div class="tbsearchtoggle">
	                                                <input type="text" name="search" value="" placeholder="Search" class="form-control input-lg" />
	                                                <span class="input-group-btn">
		                                                <button type="button" class="btn btn-default btn-lg"><i class="icofont-search-1"></i></button>
	                                                </span>
	                                            </div>
                                            </div>
                                        </li>
					                    <li class="account-nav dropdown header_user_info">
                                            <a href="{{ route('account.index') }}" title="my Account" class="dropdown-toggle" data-toggle="dropdown"><i class="icofont-user-alt-7"></i>
                                                <span class="tbuserheading">my Account</span><i class="icofont-simple-down"></i>
                                            </a>
						                    <ul class="dropdown-menu dropdown-menu-right account-link-toggle">
												<li>
                                                    <a href="{{ route('login') }}"><i class="icofont-lock"></i> Login</a>
                                                </li>
							                    <li>
                                                    <a href="#" id="wishlist-total" title="Wish List (0)"><i class="icofont-heart"></i> 
                                                        <span class="hidden-sm hidden-md">Wish List (0)</span>
                                                    </a>
                                                </li>
							                    <li>
                                                    <a href="{{ route('register') }}"><i class="icofont-user-alt-7"></i> 
                                                        Register
                                                    </a>
                                                </li>
							                    <li class="tblanguage clearfix">
                                                    <div class="js">
                                                        <div class="language-picker js-language-picker" data-trigger-class="btn btn--subtle">
                                                            <form action="" class="language-picker__form">
                                                                <label for="language-picker-select">Select your language</label>
                                                                <div class="custom-select-wrapper">
                                                                    <select name="language-picker-select" id="language-picker-select" >
                                                                        <option lang="fr" value="fr-fr" data-image="catalog/language/fr-fr/fr-fr.png" selected data-key="header.selectfr">French</option>
                                                                        <option lang="en" value="en-gb" data-image="catalog/language/en-gb/en-gb.png" data-key="header.selecten">English</option>
                                                                        <!-- Ajoutez d'autres options de langue ici si nécessaire -->
                                                                    </select>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>	
                                                </li>
											</ul>
					                    </li>
					                    <li class="tbcart">
                                            <div id="cart" class="btn-group">
                                                <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="btn btn-inverse btn-block btn-lg dropdown-toggle">
                                                    <i class="icofont-shopping-cart"></i>
                                                    <span id="cart-total">0</span>
                                                    <span class="cart-heading">Cart</span>
                                                </button>
                                                <ul class="dropdown-menu pull-right header-cart-toggle">
                                                    <li>
                                                        <p class="text-center">Your shopping cart is empty!</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
				                    </ul>
			                    </div>
		                    </div>
	                    </div>
	                </div>
	            </div>
            </div>
        </header>
<div class="header-content-title">
</div>

<div id="information-contact" class="container">
  <ul class="breadcrumb">
        <li><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=common/home"><i class="icofont-home"></i></a></li>
        <li><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/contact">Contact Us</a></li>
      </ul>
  <div class="row">
                <div id="content" class="col-lg-12">
      <h1>Contact Us</h1>
      <h3>Our Location</h3>
      <div class="panel panel-default contact-location">
        <div class="panel-body">
          <div class="row">
                        <div class="col-md-3 store-image"><img src="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/image/cache/catalog/location-312x212.jpg" alt="Address" title="Address" class="img-thumbnail" /></div>
                        <div class="col-md-3 store-address">
			<div class="location-title">
                <i class="icofont-home"></i> Address </div>
			  <address class="location-detail">
              A20 Green Hill Road,<br />
Fayetteville, California.
              </address>
                            <a href="https://maps.google.com/maps?q=28301&hl=en-gb&t=m&z=15" target="_blank" class="btn btn-info">
			  <i class="icofont-location-pin"></i> View Google Map</a>
                          </div>
            <div class="col-md-3 store-contact">
			<div class="location-title"><i class="icofont-phone"></i> Telephone </div>
			<div class="location-detail"> +1 209-223-2635 </div>
                            <div class="location-title"><i class="icofont-ui-note"></i> Fax </div>
			  <div class="location-detail">+1 209-223-2635 </div>
                          </div>

            <div class="col-md-3 store-status">
                            <div class="location-title"><i class="icofont-clock-time"></i>  Opening Times </div>
              <div class="location-detail"> Monday To Saturday : 9:00 AM TO 7:00 PM </div>
                                          <div class="location-title"><i class="icofont-comment"></i> Comments </div>
			  <div class="location-detail"> Aliquam dignissim odio non tincidunt. </div>
                          </div>

          </div>
        </div>
      </div>
            <form action="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/contact" method="post" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
          <legend>Contact Form</legend>
          <div class="form-group required">
            <label class="col-md-2 control-label" for="input-name">Your Name</label>
            <div class="col-md-10">
              <input type="text" name="name" value="" id="input-name" class="form-control" />
                          </div>
          </div>
          <div class="form-group required">
            <label class="col-md-2 control-label" for="input-email">E-Mail Address</label>
            <div class="col-md-10">
              <input type="text" name="email" value="" id="input-email" class="form-control" />
                          </div>
          </div>
          <div class="form-group required">
            <label class="col-md-2 control-label" for="input-enquiry">Enquiry</label>
            <div class="col-md-10">
              <textarea name="enquiry" rows="10" id="input-enquiry" class="form-control"></textarea>
                          </div>
          </div>
          
        </fieldset>
        <div class="buttons clearfix">
          <div class="pull-right">
            <input class="btn btn-primary" type="submit" value="Submit" />
          </div>
        </div>
      </form>
      </div>
    </div>
</div>
        <footer id="tb-footer">
			<div class="footer-top-cms">
				<div class="container">
					<aside id="footer-top">
						<div id="TB-newletter-subscribe" class="newletter-subscribe wow fadeInRight" data-wow-delay="0.3s">
							<div id="newletter-boxes">
								<div id="dialog-normal" class="window">
									<div class="box">
										<div class="row align-items-center">
												<div class="col-lg-6">
													<div class="newletter-title"><h2 class="tb-title">Subscribe Our Newsletter</h2>
														<span class="newletter-desc">Get 20% off first order!</span>
													</div>
												</div>
											<div class="col-lg-6">
												<div class="box-content newleter-content">
													<div id="form_subscribe">
														<form name="subscribe" id="subscribe">
																<input type="text" placeholder="Your email address" value="" name="subscribe_email" id="subscribe_email">
																<input type="hidden" value="" name="subscribe_name" id="subscribe_name" />
																<a class="button btn btn-primary" onclick="email_subscribe()"><span>Subscribe</span><i class="icofont-location-arrow"></i></a>
																
														</form>
													</div><!-- /#form_subscribe -->
													<div id="notification-normal"></div>
												</div>
											</div><!-- /.box-content -->
										</div>
									</div>
								</div>
							</div>
	
							<script>
							function email_subscribe(){
								$.ajax({
										type: 'post',
										url: 'index.php?route=extension/module/tbnewslettersubscribe/subscribe',
										dataType: 'html',
										data:$("#subscribe").serialize(),
										success: function (html) {
										try {
										
											eval(html);
										
										} catch (e) {
										}
											
										}}); 
								
								
							}
							function email_unsubscribe(){
								$.ajax({
										type: 'post',
										url: 'index.php?route=extension/module/tbnewslettersubscribe/unsubscribe',
										dataType: 'html',
										data:$("#subscribe").serialize(),
										success: function (html) {
												try {
												
													eval(html);
												
												} catch (e) {
												}
										}}); 
								$('html, body').delay( 1500 ).animate({ scrollTop: 0 }, 'slow'); 
								
							}
							</script>
							<script>
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
								
								});
							</script>
						</div>
					</aside>

				</div>
			</div>
			<div class="container">
			    <div class="tb-comen-row wow fadeInLeft" data-wow-delay="0.3s">
		            <div class="row">
			            <div class="footer-left-cms col-lg-3">
				            <aside id="footer-left">
					            <div class="html-content">
						            <div class="box-content">
							            <div id="TB-Footer-cms" class="links">
								            <div class="tb-footer-logo">
									            <a href="index9328.html?route=common/home">
										            <img src="image/catalog/logo.png" alt="footer-logo">
									            </a>
								            </div>
								            <div class="tb-footer-desc">I use Lorem ipsum text all day long and spend hours formatting it, so I set this site up to make my day.</div>
							            </div>
						            </div>
					            </div>
				            </aside>
			            </div>
			            <div class="col-lg-7">
				            <div class="row">
				                <div class="col-lg-4">
				                    <div class="footer-commen footer-my-account">
					                    <h5>My Account</h5>
					                    <ul class="list-unstyled">
					                        <li><a href="{{ route('account.index') }}">My Account</a></li>
					                        <li><a href="#">Order History</a></li>
					                        <li><a href="#">Wish List</a></li>
					                        <li><a href="#">Newsletter</a></li>
					                    </ul>
				                    </div>
			                    </div>
			                    <div class="col-lg-4">
				                    <div class="footer-commen footer-information">
					                    <h5>Information</h5>
					                    <ul class="list-unstyled">
						                    <li><a href="#">About Us</a></li>
                                            <li><a href="#">Delivery Information</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Terms &amp; Conditions</a></li>
                                        </ul>
				                    </div>
			                    </div>
					            <div class="col-lg-4">
				                    <div class="footer-commen footer-Extras">
				                        <h5>Extras</h5>
				                        <ul class="list-unstyled">
					                        <li><a href="#">Brands</a></li>
					                        <li><a href="#">Gift Certificates</a></li>
			                                <li><a href="#">Affiliate</a></li>
			                                <li><a href="#">Specials</a></li>
			                            </ul>
			                        </div>
		                        </div>
		                    </div>
		                </div>   
				        <div class="footer-column footer-right-cms col-lg-2">
		                    <aside id="footer-right">
		                        <div class="html-content">
		                            <div class="box-content">
                                        <div id="Tb-contact-us">
		                                    <div class="tb-contact-us footer-commen">
			                                    <h5>Contact Us</h5>
			                                    <ul class="tb-contact-us-wrapper list-unstyled">
				                                    <div class="tb-contact-list">
					                                    <i class="icofont-location-pin"></i>
					                                    <p>A20 Green Hill Road, <br>Fayetteville, California.</p>
				                                    </div>
				                                    <div class="tb-contact-list">
					                                    <i class="icofont-ui-call"></i>
					                                    <p><a href="tel:+1 209-223-2635">+1 209-223-2635</a></p>
				                                    </div>
				                                    <div class="tb-contact-list">
					                                    <i class="icofont-ui-message"></i>
					                                    <p><a href="#">info@admin.com</a></p>
				                                    </div>
			                                    </ul>
		                                    </div>
	                                    </div>
                                    </div>
                                </div>
	                        </aside>
			            </div>
			        </div>
		        </div>
	        </div>
	    </footer>
</div>

			<script><!--
				var tb_live_search = {
					selector: '#search input[name=\'search\']',
					text_no_matches: '',
					height: '50px'
				}

				$(document).ready(function() {
					var html = '';
					html += '<div class="live-search">';
					html += '	<ul>';
					html += '	</ul>';
					html += '<div class="result-text"></div>';
					html += '</div>';

					//$(tb_live_search.selector).parent().closest('div').after(html);
					$(tb_live_search.selector).after(html);

					$(tb_live_search.selector).autocomplete({
						'source': function(request, response) {
							var filter_name = $(tb_live_search.selector).val();
							var cat_id = 0;
							var module_tb_live_search_min_length = '1';
							if (filter_name.length < module_tb_live_search_min_length) {
								$('.live-search').css('display','none');
							}
							else{
								var html = '';
								html += '<li style="text-align: center;height:10px;">';
								html +=	'<img class="loading" src="image/catalog/demo/banners/loading.gif" />';
								html +=	'</li>';
								$('.live-search ul').html(html);
								$('.live-search').css('display','block');

								$.ajax({
									url: 'index.php?route=extension/module/tb_live_search&filter_name=' +  encodeURIComponent(filter_name),
									dataType: 'json',
									success: function(result) {
										var products = result.products;
										$('.live-search ul li').remove();
										$('.result-text').html('');
										if (!$.isEmptyObject(products)) {
											var show_image = 1;
											var show_price = 1;
											var show_description = 1;
											$('.result-text').html('<a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=product/search&amp;search='+filter_name+'" class="view-all-results">  View all results   ('+result.total+')</a>');

											$.each(products, function(index,product) {
												var html = '';

												html += '<li>';
												html += '<a href="' + product.url + '" title="' + product.name + '">';
												if(product.image && show_image){
													html += '	<div class="product-image col-sm-4"><img alt="' + product.name + '" src="' + product.image + '"></div>';
												}
												html += '<div class="search-description col-sm-8 col-xs-8">';
												html += '	<div class="product-name">' + product.name ;
												if(show_description){
													html += '<p>' + product.extra_info + '</p>';
												}
												html += '</div>';
												if(show_price){
													if (product.special) {
														html += '	<div class="product-price"><span class="price">' + product.special + '</span><span class="special">' + product.price + '</span></div>';
													} else {
														html += '	<div class="product-price"><span class="price">' + product.price + '</span></div>';
													}
												}
												html += '</div>';
												html += '<span style="clear:both"></span>';
												html += '</a>';
												html += '</li>';
												$('.live-search ul').append(html);
											});
										} else {
											var html = '';
											html += '<li style="text-align: center;height:10px;">';
											html +=	tb_live_search.text_no_matches;
											html +=	'</li>';

											$('.live-search ul').html(html);
										}
										$('.live-search').css('display','block');
										return false;
									}
								});
							}
						},
						'select': function(product) {
							$(tb_live_search.selector).val(product.name);
						}
					});

					$(document).bind( "mouseup touchend", function(e){
					  var container = $('.live-search');
					  if (!container.is(e.target) && container.has(e.target).length === 0)
					  {
					    container.hide();
					  }
					});
				});
			//--></script>
		
    <script src="catalog/language/js/language.js"></script>
    <script src="catalog/language/js/transcription.js"></script>
</body></html>
