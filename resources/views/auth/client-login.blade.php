<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Login</title>
    
    <link rel="stylesheet" href="catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/custom/lang.css">
    <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js"></script>
    <script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Playball&amp;family=Poppins:wght@400;500;600;700&amp;display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;display=swap" rel="stylesheet"> 

    <!-- default CSS START -->
    <link rel="stylesheet" href="catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/icofont.min.css">
    <link rel="stylesheet" href="catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="catalog/view/javascript/jquery/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/bootstrap.min.css">
    <link rel="stylesheet" href="catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/animate.css">

    <!-- default CSS END -->
    <!-- TemplateBunch Custom CSS Start -->

    <link rel="stylesheet" href="catalog/view/theme/OPCTB49_01/stylesheet/stylesheet.css">

    <link rel="stylesheet" href="catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/custom/tb-blog.css">
    <link rel="stylesheet" href="catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/custom/tb-category-feature.css">
    <link rel="stylesheet" href="catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/custom/tb-countdown.css">
    <link rel="stylesheet" href="catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/custom/tb-home.css">
    <link rel="stylesheet" href="catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/custom/tb-innerpage.css">
    <link rel="stylesheet" href="catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/custom/tb-lightbox.css">
    <link rel="stylesheet" href="catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/custom/tb-menu.css">
    <link rel="stylesheet" href="catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/custom/tb-newsletter.css">
    <link rel="stylesheet" href="catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/custom/tb-product.css">

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

    <link href="image/catalog/cart.png" rel="icon" />

    <script src="catalog/view/javascript/TemplateBunch/default/jquery.bpopup.min.js"></script>
    <script src="catalog/view/javascript/TemplateBunch/default/jquery.cookie.js"></script>
</head>
<body class="account-login">
    <div class="tbloading-bg tbloader"></div>
    <div id="page">
        @include('part.header')
        <div class="header-content-title">
        </div>
        
        <div id="account-login" class="container">
            <ul class="breadcrumb">
                <li><a href="{{ route('app.index') }}"><i class="icofont-home"></i></a></li>
                <li><a href="{{ route('account.index') }}">Account</a></li>
                <li><a href="">Login</a></li>
            </ul>
            <div class="row">
                <div id="content" class="col-sm-12">
                    <h2 class="page-title">Login</h2>
            
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="well">
                                <h2>New Customer</h2>
                                <p><strong>Register Account</strong></p>
                                <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
                                <a href="{{ route('client.register') }}" class="btn btn-primary">Continue</a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="well">
                                <h2>Returning Customer</h2>
                                <p><strong>I am a returning customer</strong></p>
                                <!-- resources/views/auth/client-login.blade.php -->
                                <form action="{{ route('client.login') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="control-label" for="input-email">E-Mail Address</label>
                                        <input type="email" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" id="input-email" class="form-control" required/>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="input-password">Password</label>
                                        <input type="password" name="password" placeholder="Password" id="input-password" class="form-control" required/>
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <a href="#">Forgotten Password</a>
                                    </div>
                                    <input type="submit" value="Login" class="btn btn-primary" />
                                </form>

                                </div>
                            </div>
                        </div>
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
</body>
</html>