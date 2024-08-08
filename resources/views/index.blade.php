<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{ __('messages.welcome') }}</title>
	<base />
	<meta name="description" content="My Store" />
	<link rel="stylesheet" href="catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/custom/lang.css">
	<script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js"></script>
	<script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js"></script>

	<!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script> -->
	<link href="https://fonts.googleapis.com/css2?family=Playball&amp;family=Poppins:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

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


	<link href="catalog/view/javascript/jquery/swiper/css/swiper.min.css" type="text/css" rel="stylesheet" media="screen" />
	<link href="catalog/view/javascript/jquery/swiper/css/opencart.css" type="text/css" rel="stylesheet" media="screen" />

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
	<script src="catalog/view/javascript/jquery/swiper/js/swiper.jquery.js"></script>

	<script src="{{ ('catalog/language/js/lang.js') }}"></script>
	<link rel="stylesheet" href="catalog/language/css/lang.css">
	<link rel="alternate" href="{{ route('app.index', ['locale' => 'en']) }}" hreflang="en">
    <link rel="alternate" href="{{ route('app.index', ['locale' => 'fr']) }}" hreflang="fr">
</head>

<body class="common-home">
	<!-- <div class="tbloading-bg tbloader"></div> -->
	<div id="page">
		@include('part.header')
		<div class="header-content-title">
		</div>

		<div id="tb-home-slideshow" class="content-top">
			<div class="tbpopupclose"></div>
			<div class="slideshow swiper-viewport">
				<div id="slideshow0" class="swiper-container clearfix">
					<div class="swiper-wrapper">
						<div class="swiper-slide text-center Slider-01">
							<a href="#URL">
								<img src="image/cache/catalog/demo/banners/slider-01-1731x1063.png" alt="Slider-01" class="img-responsive" />
							</a>
							<div class="slider-description">
								<div class="tb-slider-title">It's Fruit Madness</div>
								<div class="tb-slider-slider-button"><a href="#" class="btn-secondary">Shop Now</a></div>
							</div>
						</div>
						<div class="swiper-slide text-center Slider-02">
							<a href="#URL">
								<img src="image/cache/catalog/demo/banners/slider-01-1731x1063.png" alt="Slider-02" class="img-responsive" />
							</a>
							<div class="slider-description">
								<div class="tb-slider-title">Test of the Delicious</div>
								<div class="tb-slider-slider-button"><a href="#" class="btn-secondary">Shop Now</a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-pagination slideshow0"></div>

				<div class="slider-custom-after-before"></div>
				<script type="text/javascript">
					var mydir = $("html").attr("dir");

					if (mydir == 'rtl') {
						var rtlVal = true
					} else {
						var rtlVal = false
					}

					var tb_slider = $('.slideshow .swiper-wrapper').owlCarousel({
						items: 2, //1 items above 1000px browser width
						nav: true,
						dots: false,
						loop: true,
						center: false,
						autoplayHoverPause: true,
						autoplay: true,
						rtl: rtlVal,
						mouseDrag: false,
						animateIn: 'fadeIn',
						animateOut: 'fadeOut',
						responsive: {
							0: {
								items: 1
							},
							544: {
								items: 1
							},
							768: {
								items: 1
							},
							992: {
								items: 1
							},
							1200: {
								items: 1
							}
						}
					});
				</script>

			</div>
			<div class="tb-home-bg">
				<div class="tb-home">
					<div id="content" class="col-lg-12">
						<div class="html-content">
							<div class="box-content">
								<div id="tb-banner-cms">
									<div class="container">
										<div class="row tb-banner-row tb-flex">
											<div class="col-lg-6 tb-banner-cms-col">
												<div class="tb-banner-bg wow fadeInLeft" data-wow-delay="0.3s">
													<div class="tb-banner-img">
														<img src="image/catalog/demo/banners/banner-01.jpg" class="img-fluid" alt="banner-img">
													</div>
												</div>
											</div>
											<div class="col-lg-6 tb-banner-cms-col">
												<div class="tb-banner-bg wow fadeInRight" data-wow-delay="0.3s">
													<div class="tb-banner-img">
														<img src="image/catalog/demo/banners/banner-02.jpg" class="img-fluid" alt="banner-img">
													</div>
													<div class="tb-banner-text">
														<h2>Plum jam</h2>
														<p>Lorem Ipsum is simply dummy text of the printing </p>
														<button class="btn-secondary">Shop Now</button>
													</div>
												</div>
												<div class="tb-banner-bg tb-banner-image wow fadeInRight" data-wow-delay="0.3s">
													<div class="tb-banner-img">
														<img src="image/catalog/demo/banners/banner-03.jpg" class="img-fluid" alt="banner-img">
													</div>
													<div class="tb-banner-text">
														<h2>Homemade </h2>
														<p>Lorem Ipsum is simply dummy text of the printing </p>
														<button class="btn-secondary">Shop Now</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="html-content">
							<div class="box-content">
								<div id="tb-services-cms">
									<div class="container">
										<div class="tb-services-cms-wrapper wow fadeInUp" data-wow-offset="100">
											<div class="tb-services-cms-col">
												<div class="tb-services-cms-content tb-services-cms-content-01">
													<h4>Free Delivery</h4>
													<p>Worldwide From $75</p>
												</div>
											</div>
											<div class="tb-services-cms-col">
												<div class="tb-services-cms-content tb-services-cms-content-02">
													<h4>Payment</h4>
													<p>100% Secure</p>
												</div>
											</div>
											<div class="tb-services-cms-col">
												<div class="tb-services-cms-content tb-services-cms-content-03">
													<h4>Returns</h4>
													<p>24*7 Free Returns</p>
												</div>
											</div>
											<div class="tb-services-cms-col">
												<div class="tb-services-cms-content tb-services-cms-content-04">
													<h4>Support</h4>
													<p>24*7 Support</p>
												</div>
											</div>
											<div class="tb-services-cms-col">
												<div class="tb-services-cms-content tb-services-cms-content-05">
													<h4>Gift Service</h4>
													<p>Support gift service</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>

	<script>
		jQuery(document).ready(function($) {
			$(".item-countdown").each(function() {
				var date = $(this).data('date');
				$(this).lofCountDown({
					TargetDate: date,
					DisplayFormat: "<div>%%D%% <span>Days</span></div><div>%%H%% <span>Hours</span></div><div>%%M%% <span>Min</span></div><div>%%S%% <span>Sec</span></div>"
				});
			});
		});
	</script>

	<script>
		$('.TBProduct-Tab > .tab-box-heading > ul > li:first-child').addClass('active');
		$('.TBProduct-Tab > .tab-content > .tab-pane:first-child').addClass('active');
	</script>
	<div class="html-content">
		<div class="box-content">
			<div id="tb-sub-banner-cms" class="sub-banner">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.3s">
							<div class="tb-sub-banner-img">
								<img src="image/catalog/demo/banners/sub-banner-img.jpg" class="img-fluid" alt="sub-banner-img">
							</div>
						</div>
						<div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
							<div class="tb-sub-banner-text">
								<h2>Delicious Jam </h2>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
								<a href="#" class="btn-secondary">Shop Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="TB-category-tab">
		<div class="container">
			<div class="tb-row">
				<div class="tb-category-Tab">
    				<div class="TB-Commen-Heading">
        				<h3>Categories Products</h3>
    				</div>
    				<div class="categoryslider-content">
						<div class="tbcat-tab">
							<div id="TBCTab-" class="tab-box-heading">
								<ul class="nav nav-tabs">
									@foreach($categories as $category)
										<li class="{{ $loop->first ? 'active' : '' }}">
											<a href="#" data-toggle="tab" class="category-tab" data-category-id="{{ $category->id }}">
												<h3 class="tab-title">{{ $category->name }}</h3>
											</a>
										</li>
									@endforeach
								</ul>
							</div>
						</div>

						<div class="tab-content wow fadeInLeft" data-wow-delay="0.3s">
							<div class="tab-pane fade active in" id="tab-1">
								<div class="tb-category-tab-carousel" id="product-container">
									<!-- Les produits seront chargés ici via AJAX -->
								</div>
							</div>
						</div>
    				</div>
				</div>
				<script>
					document.addEventListener('DOMContentLoaded', function() {
						function loadProducts(categoryId) {
							fetch(`/category/products/${categoryId}`)
								.then(response => response.json())
								.then(products => {
									let productContainer = document.getElementById('product-container');
									productContainer.innerHTML = '';

									products.forEach(product => {
										productContainer.innerHTML += `
											<div class="product-layouts">
												<div class="product-thumb transition">
													<div class="image">
														<a href="#">
															<img class="image_thumb" src="/storage/${product.main_image}" title="${product.name}" alt="${product.name}" />
														</a>
														<div class="button-group">
															<button class="btn-cart" type="button" title="Add to Cart" onclick="cart.add('${product.id}')">
																<i class="icofont-shopping-cart"></i><span class="hidden-xs hidden-sm hidden-md">Add to Cart</span><span class="loading"><i class="icofont-refresh"></i></span>
															</button>
															<button class="btn-wishlist" title="Add to Wish List" onclick="wishlist.add('${product.id}');">
																<i class="icofont-heart"></i><span title="Add to Wish List">Add to Wish List</span><span class="loading"><i class="icofont-refresh"></i></span>
															</button>
															<button class="btn-compare" title="Add to compare" onclick="compare.add('${product.id}');">
																<i class="icofont-signal"></i><span title="Add to compare">Add to compare</span><span class="loading"><i class="icofont-refresh"></i></span>
															</button>
															<button class="btn-quickview" type="button" title="Quick view" onclick="tb_quickview.ajaxView('#')">
																<i class="icofont-eye-alt"></i><span title="Quick view">Quick view</span><span class="loading"><i class="icofont-refresh"></i></span>
															</button>
														</div>
													</div>
													<div class="thumb-description">
														<div class="caption">
															<h4><a href="#">${product.name}</a></h4>
															<div class="price">
																<span class="price-new">$${product.price}</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										`;
									});
								})
								.catch(error => console.error('Error loading products:', error));
						}

						document.querySelectorAll('.category-tab').forEach(tab => {
							tab.addEventListener('click', function(e) {
								e.preventDefault();
								let categoryId = this.getAttribute('data-category-id');
								loadProducts(categoryId);
							});
						});

						// Charger les produits de la première catégorie au chargement de la page
						let firstCategoryId = document.querySelector('.category-tab').getAttribute('data-category-id');
						loadProducts(firstCategoryId);
					});
				</script>

			</div>
		</div>
	</div>
	<div class="html-content">
		<div class="box-content">
			<div id="tb-testimonial-cms" class="parallex">
				<div class="container">
					<div class="row align-items-center justify-end wow fadeInRight" data-wow-delay="0.3s">
						<div class="tb-testimonial-flex">
							<div class="tb-testimonial-section">
								<div class="tb-testimonial-text">
									<p>Just say anything, George, say what ever's natural, the first thing that comes to your mind. Take that you mutated Bunya nuts black-eyed pea prairie turnip.</p>
								</div>
								<div class="tb-testimonial-img">
									<img src="#" class="img-fluid" alt="tb-testimonial-img">
								</div>
								<div class="tb-testimonial-img-text">
									<h2>XXX XXX</h2>
									<h3>CEO - Founder</h3>
								</div>
								<div class="custom-shape-divider-top-1698822697"></div>
							</div>
							<div class="tb-testimonial-section">
								<div class="tb-testimonial-text">
									<p>Nori grape silver beet broccoli kombu beet greens fava bean potato quandong celery. Bunya nuts black-eyed pea prairie turnip leek lentil turnip greens parsnip. </p>
								</div>
								<div class="tb-testimonial-img">
									<img src="#" class="img-fluid" alt="tb-testimonial-img">
								</div>
								<div class="tb-testimonial-img-text">
									<h2>XXX XXX</h2>
									<h3>Marketing Manager</h3>
								</div>
								<div class="custom-shape-divider-top-1698822697"></div>
							</div>
							<div class="tb-testimonial-section">
								<div class="tb-testimonial-text">
									<p>Cheese on toast airedale the big cheese. Danish fontina cheesy grin airedale danish fontina taleggio the big cheese macaroni cheese port-salut.</p>
								</div>
								<div class="tb-testimonial-img">
									<img src="#" class="img-fluid" alt="tb-testimonial-img">
								</div>
								<div class="tb-testimonial-img-text">
									<h2>XXX XXX</h2>
									<h3>Web Designer</h3>
								</div>
								<div class="custom-shape-divider-top-1698822697"></div>
							</div>
							<div class="tb-testimonial-section">
								<div class="tb-testimonial-text">
									<p>The first mate and his Skipper too will do their very best to make the others comfortable in their tropic island nest others comfortable in their tropic islan. </p>
								</div>
								<div class="tb-testimonial-img">
									<img src="#" class="img-fluid" alt="tb-testimonial-img">
								</div>
								<div class="tb-testimonial-img-text">
									<h2>XXX XXX</h2>
									<h3>Producer</h3>
								</div>
								<div class="custom-shape-divider-top-1698822697"></div>
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>

	<div id="TB-special-products" class="special-carousel products-list wow fadeInLeft" data-wow-delay="0.3s">
		<div class="homebg-main">
			<div class="container">
				<div class="tb-row">
					<div class="TB-Commen-Heading">
						<h3>Special Products</h3>
					</div>
					<div class="tb-special-products">
						@foreach ($products as $product)
						<div class="product-layouts">
							<div class="product-thumb transition">
								<div class="image">
									<a href="{{ route('product.productDetail', ['product' => $product->id, 'locale' => app()->getLocale()]) }}">
										<img class="image_thumb" src="{{ Storage::url($product->main_image) }}" title="Bhuira Strawberry Jam" alt="Bhuira Strawberry Jam" />
										<img class="image_thumb_swap" src="image/cache/catalog/demo/product/03-02-330x432.jpg" title="Bhuira Strawberry Jam" alt="Bhuira Strawberry Jam" />
									</a>
									<!-- <div class="sale-icon">Sale</div>
								<span class="percent">-10%</span>                -->
									<!-- <div class="product-countdown">
									<div id="countdown4_47" class="item-countdown" data-date="2024-12-31"></div>
								</div> -->
									<div class="button-group">
										<button class="btn-cart add_card" data-product-id="{{ $product->id }}" type="button" title="Add to Cart">
											<i class="icofont-shopping-cart"></i>
											<span class="hidden-xs hidden-sm hidden-md">
												Add to Cart
											</span>
											<span class="loading">
												<i class="icofont-refresh"></i>
											</span>
										</button>
										<button class="btn-wishlist " title="Add to Wish List" onclick="wishlist.add('47');"><i class="icofont-heart"></i>
											<span title="Add to Wish List">Add to Wish List</span>
											<span class="loading"><i class="icofont-refresh"></i></span>
										</button>
										<button class="btn-compare" title="Add to compare" onclick="compare.add('47');"><i class="icofont-signal"></i>
											<span title="Add to compare">Add to compare</span>
											<span class="loading"><i class="icofont-refresh"></i></span>
										</button>
										<button class="btn-quickview" type="button" title="Quick view" onclick="tb_quickview.ajaxView('#')"><i class="icofont-eye-alt"></i>
											<span title="Quick view">Quick view</span>
											<span class="loading"><i class="icofont-refresh"></i></span>
										</button>
									</div>
								</div>
								<div class="thumb-description">
									<div class="caption">
										<h4><a href="#">{{ $product->name }}</a></h4>
										<div class="price">
											<span class="price-new">CFA{{ $product->price }}</span>
											<!-- <span class="price-old">$122.00</span>   -->
											<span class="price-tax"></span>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endforeach

					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="TB-home-blog">
		<div class="container">
			<div class="TB-Commen-Heading">
				<h3>
					Blog
				</h3>
			</div>
			<div class="block_content">
				<div class="tb-row row">
					<div class="blog-left col-xl-4 col-md-6 wow fadeInLeft" data-wow-delay="0.3s">
						<div class="blog-img">
							<img src="image/catalog/demo/banners/tb-blog.jpg" class="img-fluid" alt="blog-img" />
						</div>
					</div>
					<div class="blog-right col-xl-8 col-md-6 wow fadeInRight" data-wow-delay="0.3s">
						<ul class="tb-home-blog-carousel">
							<li>
								<div class="blog-content">
									<div class="tbhomeblog_image_holder blog_image_holder">
										<a href="#">
											<img class="image_thumb" src="image/cache/catalog/demo/banners/blog-05-870x576.jpg" alt="Blog" title="Blog" />
											<div class="tb-black-shadow"></div>
										</a>
										<span class="bloglinks">
											<a class="icon zoom" data-lightbox="example-set" href="image/cache/catalog/demo/banners/blog-05-870x576.jpg" title="Click to view Full Image">
												<i class="icofont-search-1"></i>
											</a>
										</span>
									</div>

									<div class="blog-caption blog-sub-content">
										<div class="blog_inner">
											<span class="blog-date">
												<i class="icofont-calendar"></i>
												<span class="date">18</span>
												<span class="month">Aug-2022</span>
											</span>
											<h5 class="post_title"><a href="#">Nam liber tempor cum</a></h5>
											<p class="blog-description"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequa...</p>
											<div class="tb-blog-bottom">
												<a href="#" class="read-more btn-primary">Read More <i class="icofont-simple-right"></i></a>
												<div class="comment"> <a href="#"> <i class="icofont-comment"></i> 0 Comments</a> </div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="blog-content">
									<div class="tbhomeblog_image_holder blog_image_holder">
										<a href="#">
											<img class="image_thumb" src="image/cache/catalog/demo/banners/blog-04-870x576.jpg" alt="Blog" title="Blog" />
											<div class="tb-black-shadow"></div>
										</a>
										<span class="bloglinks">
											<a class="icon zoom" data-lightbox="example-set" href="image/cache/catalog/demo/banners/blog-04-870x576.jpg" title="Click to view Full Image">
												<i class="icofont-search-1"></i>
											</a>
										</span>
									</div>

									<div class="blog-caption blog-sub-content">
										<div class="blog_inner">
											<span class="blog-date">
												<i class="icofont-calendar"></i>
												<span class="date">18</span>
												<span class="month">Aug-2022</span>
											</span>
											<h5 class="post_title"><a href="#">Tincidunt ut laoreet dolore</a></h5>
											<p class="blog-description"> Mirum est notare quam littera gothica, quam putamus parum claram aliquam volutpat.
												...</p>
											<div class="tb-blog-bottom">
												<a href="#" class="read-more btn-primary">Read More <i class="icofont-simple-right"></i></a>
												<div class="comment"> <a href="#"> <i class="icofont-comment"></i> 0 Comments</a> </div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="blog-content">
									<div class="tbhomeblog_image_holder blog_image_holder">
										<a href="#">
											<img class="image_thumb" src="image/cache/catalog/demo/banners/blog-03-870x576.jpg" alt="Blog" title="Blog" />
											<div class="tb-black-shadow"></div>
										</a>
										<span class="bloglinks">
											<a class="icon zoom" data-lightbox="example-set" href="image/cache/catalog/demo/banners/blog-03-870x576.jpg" title="Click to view Full Image">
												<i class="icofont-search-1"></i>
											</a>
										</span>
									</div>

									<div class="blog-caption blog-sub-content">
										<div class="blog_inner">
											<span class="blog-date">
												<i class="icofont-calendar"></i>
												<span class="date">18</span>
												<span class="month">Aug-2022</span>
											</span>
											<h5 class="post_title"><a href="#">Magna aliquam volutpat</a></h5>
											<p class="blog-description"> Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.
												...</p>
											<div class="tb-blog-bottom">
												<a href="#" class="read-more btn-primary">Read More <i class="icofont-simple-right"></i></a>
												<div class="comment"> <a href="#"> <i class="icofont-comment"></i> 0 Comments</a> </div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="blog-content">
									<div class="tbhomeblog_image_holder blog_image_holder">
										<a href="#">
											<img class="image_thumb" src="image/cache/catalog/demo/banners/blog-02-870x576.jpg" alt="Blog" title="Blog" />
											<div class="tb-black-shadow"></div>
										</a>
										<span class="bloglinks">
											<a class="icon zoom" data-lightbox="example-set" href="image/cache/catalog/demo/banners/blog-02-870x576.jpg" title="Click to view Full Image">
												<i class="icofont-search-1"></i>
											</a>
										</span>
									</div>

									<div class="blog-caption blog-sub-content">
										<div class="blog_inner">
											<span class="blog-date">
												<i class="icofont-calendar"></i>
												<span class="date">18</span>
												<span class="month">Aug-2022</span>
											</span>
											<h5 class="post_title"><a href="#">Eodem modo typi qui nunc</a></h5>
											<p class="blog-description"> Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
												...</p>
											<div class="tb-blog-bottom">
												<a href="i#" class="read-more btn-primary">Read More <i class="icofont-simple-right"></i></a>
												<div class="comment"> <a href="#"> <i class="icofont-comment"></i> 0 Comments</a> </div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="blog-content">
									<div class="tbhomeblog_image_holder blog_image_holder">
										<a href="#">
											<img class="image_thumb" src="image/cache/catalog/demo/banners/blog-01-870x576.jpg" alt="Blog" title="Blog" />
											<div class="tb-black-shadow"></div>
										</a>
										<span class="bloglinks">
											<a class="icon zoom" data-lightbox="example-set" href="image/cache/catalog/demo/banners/blog-01-870x576.jpg" title="Click to view Full Image">
												<i class="icofont-search-1"></i>
											</a>
										</span>
									</div>

									<div class="blog-caption blog-sub-content">
										<div class="blog_inner">
											<span class="blog-date">
												<i class="icofont-calendar"></i>
												<span class="date">18</span>
												<span class="month">Aug-2022</span>
											</span>
											<h5 class="post_title"><a href="#">Ut aliquip commodo </a></h5>
											<p class="blog-description"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.
												...</p>
											<div class="tb-blog-bottom">
												<a href="#" class="read-more btn-primary">Read More <i class="icofont-simple-right"></i></a>
												<div class="comment"> <a href="#"> <i class="icofont-comment"></i> 0 Comments</a> </div>
											</div>
										</div>
									</div>
								</div>
							</li>

						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		var mydir = $("html").attr("dir");

		if (mydir == 'rtl') {
			var rtlVal = true
		} else {
			var rtlVal = false
		}

		var tb_manufacture = $('#tb-manufacture .swiper-wrapper').owlCarousel({
			items: 5, //1 items above 1000px browser width
			nav: true,
			dots: false,
			loop: false,
			center: false,
			autoplayHoverPause: true,
			autoplay: true,
			rtl: rtlVal,
			responsive: {
				0: {
					items: 2
				},
				481: {
					items: 3
				},
				992: {
					items: 3
				},
				1200: {
					items: 5
				}
			}
		});
	</script>

	</div>

	</div>
	</div>
	<!-- footer -->

	@include('part.footer')
	</div>

	<script>
		var tb_live_search = {
			selector: '#search input[name=\'search\']',
			text_no_matches: 'There are no products to list in this category.',
			height: '50px'
		};

		$(document).ready(function() {
			var html = '';
			html += '<div class="live-search">';
			html += '  <ul>';
			html += '  </ul>';
			html += '<div class="result-text"></div>';
			html += '</div>';

			$(tb_live_search.selector).after(html);

			$(tb_live_search.selector).autocomplete({
				'source': function(request, response) {
					var filter_name = $(tb_live_search.selector).val();
					var module_tb_live_search_min_length = 1;

					if (filter_name.length < module_tb_live_search_min_length) {
						$('.live-search').css('display', 'none');
					} else {
						var html = '';
						html += '<li style="text-align: center;height:10px;">';
						html += '<img class="loading" src="{{ Storage::url($product->main_image) }}" />';
						html += '</li>';
						$('.live-search ul').html(html);
						$('.live-search').css('display', 'block');

						$.ajax({
							url: '/live-search',
							data: {
								filter_name: filter_name
							},
							dataType: 'json',
							success: function(result) {
								var products = result.products;
								$('.live-search ul li').remove();
								$('.result-text').html('');

								if (products.length > 0) {
									var show_image = true;
									var show_price = true;
									var show_description = true;

									$('.result-text').html('<a href="/search?query=' + filter_name + '" class="view-all-results">View all results (' + products.length + ')</a>');

									$.each(products, function(index, product) {
										var html = '';

										html += '<li>';
										html += '<a href="/product/' + product.id + '" title="' + product.name + '">';
										if (product.image && show_image) {
											html += '  <div class="product-image col-sm-4"><img alt="' + product.name + '" src="' + product.image + '"></div>';
										}
										html += '<div class="search-description col-sm-8 col-xs-8">';
										html += '  <div class="product-name">' + product.name;
										if (show_description) {
											html += '<p>' + (product.description ? product.description : '') + '</p>';
										}
										html += '</div>';
										if (show_price) {
											html += '  <div class="product-price"><span class="price">' + product.price + '</span></div>';
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
									html += tb_live_search.text_no_matches;
									html += '</li>';

									$('.live-search ul').html(html);
								}
								$('.live-search').css('display', 'block');
							},
							error: function(xhr, status, error) {
								console.error('Error loading products:', error);
							}
						});
					}
				},
				'select': function(product) {
					$(tb_live_search.selector).val(product.name);
				}
			});

			$(document).bind("mouseup touchend", function(e) {
				var container = $('.live-search');
				if (!container.is(e.target) && container.has(e.target).length === 0) {
					container.hide();
				}
			});
		});

	</script>

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
					cartHtml += '<p class="text-right"><a href="{{ route('cart', ['locale' => app()->getLocale()]) }}"><strong>View Cart</strong></a><a href="#"><strong>Checkout</strong></a></p>';
					cartHtml += '</div></li>';
				}

				$('#cart-items').html(cartHtml);
				$('#cart-total').text(Object.keys(cart).length);
			}
		});

	</script>
</body>

</html>