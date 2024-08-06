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
    <title>Order History</title>
    <base />
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

<body class="account-order">
    <div class="tbloading-bg tbloader"></div>
    <div id="page">
        @include('part.header')
        <div class="header-content-title">
        </div>

        <div id="account-order" class="container">
            <ul class="breadcrumb">
                <li><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=common/home"><i class="icofont-home"></i></a></li>
                <li><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=account/account">Account</a></li>
                <li><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=account/order">Order History</a></li>
            </ul>
            <div class="row">
                <div id="content" class="col-sm-12">
                    <h1>Order History</h1>
                    @if($orders->isEmpty())
                        <p>Vous n'avez passé aucune commande pour le moment.</p>
                    @else
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <td class="text-right">Order ID</td>
                                        <td class="text-left">Customer</td>
                                        <td class="text-right">No. of Products</td>
                                        <td class="text-left">Status</td>
                                        <td class="text-right">Total</td>
                                        <td class="text-left">Date Added</td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orders as $order)
                                        <tr>
                                            <td class="text-right">#{{ $order->id }}</td>
                                            <td class="text-left">{{ $order->user->name }}</td>
                                            <td class="text-right">{{ $order->orderDetails->count() }}</td>
                                            <td class="text-left">{{ $order->status }}</td>
                                            <td class="text-right">{{ $order->total }} Cfa</td>
                                            <td class="text-left">{{ $order->created_at->format('d/m/Y') }}</td>
                                            <td class="text-right">
                                                <a href="#" data-toggle="tooltip" title="View" class="btn btn-info">
                                                    <i class="icofont-eye-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-sm-6 text-left"></div>
                        <div class="col-sm-6 text-right">Showing 1 to 1 of 1 (1 Pages)</div>
                    </div>
                    <div class="buttons clearfix">
                        <div class="pull-right"><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=account/account" class="btn btn-primary">Continue</a></div>
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
											<div class="newletter-title">
												<h2 class="tb-title">Subscribe Our Newsletter</h2>
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
							function email_subscribe() {
								$.ajax({
									type: 'post',
									url: 'index.php?route=extension/module/tbnewslettersubscribe/subscribe',
									dataType: 'html',
									data: $("#subscribe").serialize(),
									success: function(html) {
										try {

											eval(html);

										} catch (e) {}

									}
								});


							}

							function email_unsubscribe() {
								$.ajax({
									type: 'post',
									url: 'index.php?route=extension/module/tbnewslettersubscribe/unsubscribe',
									dataType: 'html',
									data: $("#subscribe").serialize(),
									success: function(html) {
										try {

											eval(html);

										} catch (e) {}
									}
								});
								$('html, body').delay(1500).animate({
									scrollTop: 0
								}, 'slow');

							}
						</script>
						<script>
							$(document).ready(function() {
								$('#subscribe_email').keypress(function(e) {
									if (e.which == 13) {
										e.preventDefault();
										email_subscribe();
									}
									var name = $(this).val();
									$('#subscribe_name').val(name);
								});
								$('#subscribe_email').change(function() {
									var name = $(this).val();
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

    


    <!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
    <script>
		$(document).ready(function() {
			// Update quantity
			$(document).on('click', '.update-quantity', function(e) {
				e.preventDefault();
				var ele = $(this);
				var productId = ele.data('product-id');
				var quantity = ele.closest('tr').find('.quantity-input').val();

				$.ajax({
					url: `/cart/update/${productId}`,
					method: "POST",
					data: {
						_token: '{{ csrf_token() }}',
						quantity: quantity
					},
					success: function(response) {
						if (response.success) {
						
							updateCart(response.cart);
						}
					},
					error: function(xhr) {
						alert('Erreur lors de la mise à jour de la quantité');
					}
				});
			});

			// Remove from cart
			$(document).on('click', '.remove_card', function(e) {
				e.preventDefault();
				var ele = $(this);
				var productId = ele.data('product-id');

				$.ajax({
					url: `/cart/remove/${productId}`,
					method: "POST",
					data: {
						_token: '{{ csrf_token() }}',
					},
					success: function(response) {
						if (response.success) {
							updateCart(response.cart);
						}
					},
					error: function(xhr) {
						alert('Erreur lors de la suppression du produit du panier');
					}
				});
			});

			// Add to cart
			$(".add_card").click(function(e) {
				e.preventDefault();
				var ele = $(this);
				var productId = ele.data('product-id');

				$.ajax({
					url: `/cart/add/${productId}`,
					method: "POST",
					data: {
						_token: '{{ csrf_token() }}',
					},
					success: function(response) {
						if (response.success) {
							updateCart(response.cart);
						}
					},
					error: function(xhr) {
						alert('Erreur lors de l\'ajout au panier');
					}
				});
			});

			function updateCart(cart) {
				var cartHtml = '';
				var total = 0;

				if ($.isEmptyObject(cart)) {
					cartHtml = '<li><p class="text-center">Your shopping cart is empty!</p></li>';
				} else {
					$.each(cart, function(id, item) {
						cartHtml += '<li class="cart-product" data-product-id="' + id + '">';
						cartHtml += '<table class="table table-striped">';
						cartHtml += '<tr>';
						cartHtml += '<td class="text-center image"><a href="#"><img src="/storage/' + item.main_image + '" /></a></td>';
						cartHtml += '<td class="text-left name"><a href="#">' + item.name + '</a></td>';
						cartHtml += '<td class="text-right">x ' + item.quantity + '</td>';
						cartHtml += '<td class="text-right amount">$' + (item.price * item.quantity) + '</td>';
						cartHtml += '<td class="text-center button"><button type="button" class="remove_card" style="background:none; border:none" data-product-id="' + id + '" title="Remove" class="btn btn-danger btn-xs"><i class="icofont-close"></i></button></td>';
						cartHtml += '</tr>';
						cartHtml += '</table>';
						cartHtml += '</li>';

						total += item.price * item.quantity;
					});

					cartHtml += '<li id="cart-total-section"><div><table class="table table-bordered">';
					cartHtml += '<tr><td class="text-right"><strong>Total</strong></td>';
					cartHtml += '<td class="text-right price-total">cfa ' + total + '</td>';
					cartHtml += '</tr></table>';
					cartHtml += '<p class="text-right"><a href="{{ route('cart') }}"><strong>View Cart</strong></a><a href="#"><strong>Checkout</strong></a></p>';
					cartHtml += '</div></li>';
				}

				$('#cart-items').html(cartHtml);
				$('#cart-total').text(Object.keys(cart).length);
			}
		});

	</script>
    <script src="catalog/language/js/language.js"></script>
    <script src="catalog/language/js/transcription.js"></script>
</body>

</html>