
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
<title>Latest Blog</title>
<base />
<script src="{{ asset('catalog/view/javascript/jquery/jquery-2.1.1.min.js') }}"></script>
<script src="{{ asset('catalog/view/javascript/bootstrap/js/bootstrap.min.js') }}"></script>

<link href="https://fonts.googleapis.com/css2?family=Playball&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

<!-- default CSS START -->

<link href="{{ asset('catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/icofont.min.css') }}" rel="stylesheet">
<link href="{{ asset('catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.css') }}" rel="stylesheet" media="screen" />
<link href="{{ asset('catalog/view/javascript/jquery/owl-carousel/owl.theme.default.min.css') }}" rel="stylesheet" media="screen" />
<link href="{{ asset('catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/bootstrap.min.css') }}" rel="stylesheet" media="screen" />
<link href="{{ asset('catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/animate.css') }}" rel="stylesheet" type="text/css" />

<!-- default CSS END -->

<!-- TemplateBunch Custom CSS Start -->

<link href="{{ asset('catalog/view/theme/OPCTB49_01/stylesheet/stylesheet.css') }}" rel="stylesheet">

<link href="{{ asset('catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/custom/tb-blog.css') }}" rel="stylesheet">
<link href="{{ asset('catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/custom/tb-category-feature.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/custom/tb-countdown.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/custom/tb-home.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/custom/tb-innerpage.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/custom/tb-lightbox.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/custom/tb-menu.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/custom/tb-newsletter.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/custom/tb-product.css') }}" rel="stylesheet" type="text/css" />

<!-- TemplateBunch Custom CSS End -->


<link href="{{ asset('catalog/view/javascript/jquery/swiper/css/swiper.min.css') }}" type="text/css" rel="stylesheet" media="screen" />
<link href="{{ asset('catalog/view/javascript/jquery/swiper/css/opencart.css') }}" type="text/css" rel="stylesheet" media="screen" />

<script src="{{ asset('catalog/view/javascript/common.js') }}"></script>


<!-- default JS START -->
<script src="{{ asset('catalog/view/javascript/TemplateBunch/default/inview.js') }}"></script>
<script src="{{ asset('catalog/view/javascript/TemplateBunch/default/parallex.js') }}"></script>
<script src="{{ asset('catalog/view/javascript/TemplateBunch/default/theia-sticky-sidebar.min.js') }}"></script>
<script src="{{ asset('catalog/view/javascript/TemplateBunch/default/lightbox-2.6.min.js') }}"></script>
<script src="{{ asset('catalog/view/javascript/TemplateBunch/default/waypoints.min.js') }}"></script>
<script src="{{ asset('catalog/view/javascript/TemplateBunch/default/wow.min.js') }}"></script>
<script src="{{ asset('catalog/view/javascript/TemplateBunch/default/bootstrap-notify.min.js') }}"></script>
<script src="{{ asset('catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.js') }}"></script>
<!-- default JS End -->

<!-- TemplateBunch custom JS START -->
<script src="{{ asset('catalog/view/javascript/TemplateBunch/actionscript.js') }}"></script>
<script src="{{ asset('catalog/view/javascript/TemplateBunch/menu.js') }}"></script>
<script src="{{ asset('catalog/view/javascript/TemplateBunch/tb_countdown.js') }}"></script>
<script src="{{ asset('catalog/view/javascript/TemplateBunch/tb_owl.js') }}"></script>
<!-- <script src="catalog/view/javascript/TemplateBunch/tb_quickview.js"></script> -->
<!-- TemplateBunch custom JS END -->

<script>
    new WOW().init();
</script>


<link href="image/catalog/cart.png" rel="icon" />
<script src="{{ asset('catalog/view/javascript/jquery/swiper/js/swiper.jquery.js') }}"></script>
<script src="{{ asset('catalog/view/javascript/TemplateBunch/default/jquery.bpopup.min.js') }}"></script>
<script src="{{ asset('catalog/view/javascript/TemplateBunch/default/jquery.cookie.js') }}"></script>

</head>
<body class="information-tb_blog-blogs">
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

<div class="container">
  <ul class="breadcrumb">
		<li><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=common/home"><i class="icofont-home"></i></a></li>
		<li><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/tb_blog">Latest Blog</a></li>
	  </ul>
  <div class="row"><aside id="column-left" class="col-lg-3 hidden-xs">
  <div class="left-right-inner">
        <div class="panel panel-default category-treeview">
<div class="panel-heading">Categories</div>
	<ul class="list-group">
	  	  	    <li class="category-li">
			  	<a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=product/category&amp;path=106" class="list-group-item">Fruit (6)</a>
				<!-- Display all category - child items list -->
							  </li>
	  	  	  	    <li class="category-li">
			  	<a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=product/category&amp;path=107" class="list-group-item">Mixed (5)</a>
				<!-- Display all category - child items list -->
							  </li>
	  	  	  	    <li class="category-li">
			  	<a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=product/category&amp;path=60" class="list-group-item">Flavor  (18)</a>
				<!-- Display all category - child items list -->
							  </li>
	  	  	  	    <li class="category-li">
			  	<a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=product/category&amp;path=61" class="list-group-item">Default (20)</a>
				<!-- Display all category - child items list -->
							  </li>
	  	  	</ul>
</div>
        <div class="swiper-viewport">
  <div id="banner0" class="swiper-container">
    <div class="swiper-wrapper">      <div class="swiper-slide">
                  <a href="#URL">
            <img src="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/image/cache/catalog/demo/banners/left-banner-253x450.jpg" alt="Left Banner" class="img-responsive" /><div class="left-description"><div class="tb-left-title"> New Collection </div>
<div class="tb-left-desc"> For the Online Order </div>
<div class="tb-left-button"><button>Shop Now</button></div></div></a>
              </div>
      </div>
  </div>
</div>
<script><!--
$('#banner0').swiper({
	effect: 'fade',
	autoplay: 2500,
    autoplayDisableOnInteraction: false
});
--></script> 
        <div class="featured-carousel products-list">
<div class="box-heading"><h3>Featured</h3></div>
<div class="featured-items products-carousel row">

 							<div class='single-column'>
				  <div class="product-layouts">
    <div class="product-thumb transition">
      <div class="image">
					<a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=product/product&amp;product_id=43">
				<img class="image_thumb" src="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/image/cache/catalog/demo/product/11-70x92.jpg" title="Natural Jam Bitter Orange" alt="Natural Jam Bitter Orange" />
				<img class="image_thumb_swap" src="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/image/cache/catalog/demo/product/11-02-70x92.jpg" title="Natural Jam Bitter Orange" alt="Natural Jam Bitter Orange" />
			</a>
						<div class="button-group">
          <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('43')">
       
        <i class="icofont-shopping-cart"></i><span class="hidden-xs hidden-sm hidden-md">Add to Cart
            </span><span class="loading"><i class="icofont-refresh"></i></span></button>
          <button class="btn-wishlist" title="Add to Wish List"  onclick="wishlist.add('43');"><i class="icofont-heart"></i>
          <span title="Add to Wish List">Add to Wish List</span>
          <span class="loading"><i class="icofont-refresh"></i></span>
          </button>
                  <button class="btn-compare" title="Add to compare"  onclick="compare.add('43');"><i class="icofont-signal"></i>
          <span title="Add to compare">Add to compare</span>
          <span class="loading"><i class="icofont-refresh"></i></span>
          </button>
        <button class="btn-quickview" type="button" title="Quick view" onclick="tb_quickview.ajaxView('https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=product/product&amp;product_id=43')"><i class="icofont-eye-alt"></i>
        <span title="Quick view">Quick view</span>
        <span class="loading"><i class="icofont-refresh"></i></span>
        </button>

</div>
	  </div>
	  <div class="thumb-description">
      <div class="caption">
	  	        <h4><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=product/product&amp;product_id=43">Natural Jam Bitter Orange</a></h4>
						<div class="price">
						$602.00
			 
						<span class="price-tax">Ex Tax: $500.00</span>
						</div>
		          </div>
	 </div>
    </div>
  </div>
  						    						  <div class="product-layouts">
    <div class="product-thumb transition">
      <div class="image">
					<a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=product/product&amp;product_id=40">
				<img class="image_thumb" src="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/image/cache/catalog/demo/product/06-70x92.jpg" title="Hero Black Currant Jam" alt="Hero Black Currant Jam" />
				<img class="image_thumb_swap" src="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/image/cache/catalog/demo/product/06-02-70x92.jpg" title="Hero Black Currant Jam" alt="Hero Black Currant Jam" />
			</a>
						<div class="button-group">
          <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('40')">
       
        <i class="icofont-shopping-cart"></i><span class="hidden-xs hidden-sm hidden-md">Add to Cart
            </span><span class="loading"><i class="icofont-refresh"></i></span></button>
          <button class="btn-wishlist" title="Add to Wish List"  onclick="wishlist.add('40');"><i class="icofont-heart"></i>
          <span title="Add to Wish List">Add to Wish List</span>
          <span class="loading"><i class="icofont-refresh"></i></span>
          </button>
                  <button class="btn-compare" title="Add to compare"  onclick="compare.add('40');"><i class="icofont-signal"></i>
          <span title="Add to compare">Add to compare</span>
          <span class="loading"><i class="icofont-refresh"></i></span>
          </button>
        <button class="btn-quickview" type="button" title="Quick view" onclick="tb_quickview.ajaxView('https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=product/product&amp;product_id=40')"><i class="icofont-eye-alt"></i>
        <span title="Quick view">Quick view</span>
        <span class="loading"><i class="icofont-refresh"></i></span>
        </button>

</div>
	  </div>
	  <div class="thumb-description">
      <div class="caption">
	  	        <h4><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=product/product&amp;product_id=40">Hero Black Currant Jam</a></h4>
						<div class="price">
						$123.20
			 
						<span class="price-tax">Ex Tax: $101.00</span>
						</div>
		          </div>
	 </div>
    </div>
  </div>
  						    						  <div class="product-layouts">
    <div class="product-thumb transition">
      <div class="image">
					<a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=product/product&amp;product_id=42">
				<img class="image_thumb" src="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/image/cache/catalog/demo/product/01-70x92.jpg" title="Kissan Pineapple Jam" alt="Kissan Pineapple Jam" />
				<img class="image_thumb_swap" src="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/image/cache/catalog/demo/product/01-02-70x92.jpg" title="Kissan Pineapple Jam" alt="Kissan Pineapple Jam" />
			</a>
							<div class="sale-icon">Sale</div>
			<span class="percent">-10%</span>
				<div class="button-group">
          <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('42')">
       
        <i class="icofont-shopping-cart"></i><span class="hidden-xs hidden-sm hidden-md">Add to Cart
            </span><span class="loading"><i class="icofont-refresh"></i></span></button>
          <button class="btn-wishlist" title="Add to Wish List"  onclick="wishlist.add('42');"><i class="icofont-heart"></i>
          <span title="Add to Wish List">Add to Wish List</span>
          <span class="loading"><i class="icofont-refresh"></i></span>
          </button>
                  <button class="btn-compare" title="Add to compare"  onclick="compare.add('42');"><i class="icofont-signal"></i>
          <span title="Add to compare">Add to compare</span>
          <span class="loading"><i class="icofont-refresh"></i></span>
          </button>
        <button class="btn-quickview" type="button" title="Quick view" onclick="tb_quickview.ajaxView('https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=product/product&amp;product_id=42')"><i class="icofont-eye-alt"></i>
        <span title="Quick view">Quick view</span>
        <span class="loading"><i class="icofont-refresh"></i></span>
        </button>

</div>
	  </div>
	  <div class="thumb-description">
      <div class="caption">
	  				<div class="rating">
									 <span class="fa fa-stack"><i class="icofont-star checked"></i></span>
												 <span class="fa fa-stack"><i class="icofont-star checked"></i></span>
												 <span class="fa fa-stack"><i class="icofont-star checked"></i></span>
												 <span class="fa fa-stack"><i class="icofont-star checked"></i></span>
												<span class="fa fa-stack"><i class="icofont-star"></i></span>
									</div>
		        <h4><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=product/product&amp;product_id=42">Kissan Pineapple Jam</a></h4>
						<div class="price">
						<span class="price-new">$110.00</span> 
			<span class="price-old">$122.00</span>
			 
						<span class="price-tax">Ex Tax: $90.00</span>
						</div>
		          </div>
	 </div>
    </div>
  </div>
  					</div>
						    							<div class='single-column'>
				  <div class="product-layouts">
    <div class="product-thumb transition">
      <div class="image">
					<a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=product/product&amp;product_id=30">
				<img class="image_thumb" src="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/image/cache/catalog/demo/product/02-70x92.jpg" title="Jam - Mango 1 kg Jar" alt="Jam - Mango 1 kg Jar" />
				<img class="image_thumb_swap" src="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/image/cache/catalog/demo/product/02-02-70x92.jpg" title="Jam - Mango 1 kg Jar" alt="Jam - Mango 1 kg Jar" />
			</a>
							<div class="sale-icon">Sale</div>
			<span class="percent">-20%</span>
				<div class="button-group">
          <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('30')">
       
        <i class="icofont-shopping-cart"></i><span class="hidden-xs hidden-sm hidden-md">Add to Cart
            </span><span class="loading"><i class="icofont-refresh"></i></span></button>
          <button class="btn-wishlist" title="Add to Wish List"  onclick="wishlist.add('30');"><i class="icofont-heart"></i>
          <span title="Add to Wish List">Add to Wish List</span>
          <span class="loading"><i class="icofont-refresh"></i></span>
          </button>
                  <button class="btn-compare" title="Add to compare"  onclick="compare.add('30');"><i class="icofont-signal"></i>
          <span title="Add to compare">Add to compare</span>
          <span class="loading"><i class="icofont-refresh"></i></span>
          </button>
        <button class="btn-quickview" type="button" title="Quick view" onclick="tb_quickview.ajaxView('https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=product/product&amp;product_id=30')"><i class="icofont-eye-alt"></i>
        <span title="Quick view">Quick view</span>
        <span class="loading"><i class="icofont-refresh"></i></span>
        </button>

</div>
	  </div>
	  <div class="thumb-description">
      <div class="caption">
	  	        <h4><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=product/product&amp;product_id=30">Jam - Mango 1 kg Jar</a></h4>
						<div class="price">
						<span class="price-new">$98.00</span> 
			<span class="price-old">$122.00</span>
			 
						<span class="price-tax">Ex Tax: $80.00</span>
						</div>
		          </div>
	 </div>
    </div>
  </div>
  						     

							</div>
		 
		</div>
</div>


 <script type="text/javascript">

 			var mydir = $("html").attr("dir");

	        if (mydir == 'rtl') {
	          var rtlVal=true
	        }
	        else{
	        var rtlVal=false
	    }

		   	var tbfeature = $('.featured-items.products-carousel').owlCarousel({
				items : 1, //1 items above 1000px browser width
				nav : true,
				dots : false,
				loop: false,
				autoplay:false,
				rtl: rtlVal,
				pagination:false,
				
				responsive: {
					0:{
						items:1
					},
					360:{
						items:1
					},
					544:{
						items:1
					},
					768:{
						items:1
					},
					1200:{
						items:1
					}
				}
			});
</script>


        <div class="sidebar panel panel-default information-list">
<div class="panel-heading">Information</div>
  <div class="list-group">
        <a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/information&amp;information_id=4" class="list-group-item">About Us</a>
        <a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/information&amp;information_id=6" class="list-group-item">Delivery Information</a>
        <a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/information&amp;information_id=3" class="list-group-item">Privacy Policy</a>
        <a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/information&amp;information_id=5" class="list-group-item">Terms &amp; Conditions</a>
        <a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/contact" class="list-group-item">Contact Us</a>
    <a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/sitemap" class="list-group-item">Site Map</a>
  </div>
</div>

      </div>
</aside>

			 	<div id="content" class="col-lg-9">
	  
	  <h1>All Blogs</h1>
	  	  	  <div class="panel-default blog-page cat-blog-content" id="module-tbblog-category">
		<h4 class="blog-cat-title">TB-Blog</h4>
		<div id="tbblogcat">
								<div class="blog-item col-xs-12 col-md-12">
			  <div class="tbblogpost">
				  				  <div class="article-content col-md-5">
					<a itemprop="url" href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/tb_blog&amp;tb_blog_id=5" title="Latest Blog" class="imageFeaturedLink">
						<img itemprop="image" alt="Latest Blog" src="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/image/cache/catalog/demo/banners/blog-05-870x576.jpg" class="imageFeatured" />
						<div class="blog-hover"></div>
					</a>
					<span class="bloglinks">
						<a class="icon zoom" data-lightbox="example-set" href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/image/cache/catalog/demo/banners/blog-05-870x576.jpg" title="Click to view Full Image" >
						<i class="icofont-search-1"></i></a> 
					</span>
				  </div>
				  				  <div class="out-content-blog col-md-7">
					<div class="article-header">
					  <h4 class="blog-title"><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/tb_blog&amp;tb_blog_id=5">Nam liber tempor cum</a></h4>
					  <div class="blog-tool">
					  <span class="date-time"><i class="icofont-calendar"></i>18/08/2022</span>
					  <span class="comment"><i class="icofont-comment"></i><a title="0 Comment" href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/tb_blog&amp;tb_blog_id=5">0 Comment</a> </span>
					  </div>
					</div>
					<div class="sdsarticle-des">
						<div itemprop="description" class="clearfix">
							<div class="blog-desc">					  					  Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequa...</div>
						</div>
					</div>
					<div class="sdsreadMore">
						<span class="more"><a title="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/tb_blog&amp;tb_blog_id=5" href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/tb_blog&amp;tb_blog_id=5" class="r_more">Read More</a></span>
					</div>
				  </div>
			  </div>
			</div>
						<div class="blog-item col-xs-12 col-md-12">
			  <div class="tbblogpost">
				  				  <div class="article-content col-md-5">
					<a itemprop="url" href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/tb_blog&amp;tb_blog_id=4" title="Latest Blog" class="imageFeaturedLink">
						<img itemprop="image" alt="Latest Blog" src="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/image/cache/catalog/demo/banners/blog-04-870x576.jpg" class="imageFeatured" />
						<div class="blog-hover"></div>
					</a>
					<span class="bloglinks">
						<a class="icon zoom" data-lightbox="example-set" href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/image/cache/catalog/demo/banners/blog-04-870x576.jpg" title="Click to view Full Image" >
						<i class="icofont-search-1"></i></a> 
					</span>
				  </div>
				  				  <div class="out-content-blog col-md-7">
					<div class="article-header">
					  <h4 class="blog-title"><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/tb_blog&amp;tb_blog_id=4">Tincidunt ut laoreet dolore</a></h4>
					  <div class="blog-tool">
					  <span class="date-time"><i class="icofont-calendar"></i>18/08/2022</span>
					  <span class="comment"><i class="icofont-comment"></i><a title="0 Comment" href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/tb_blog&amp;tb_blog_id=4">0 Comment</a> </span>
					  </div>
					</div>
					<div class="sdsarticle-des">
						<div itemprop="description" class="clearfix">
							<div class="blog-desc">					  					  Mirum est notare quam littera gothica, quam putamus parum claram aliquam volutpat.
		...</div>
						</div>
					</div>
					<div class="sdsreadMore">
						<span class="more"><a title="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/tb_blog&amp;tb_blog_id=4" href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/tb_blog&amp;tb_blog_id=4" class="r_more">Read More</a></span>
					</div>
				  </div>
			  </div>
			</div>
						<div class="blog-item col-xs-12 col-md-12">
			  <div class="tbblogpost">
				  				  <div class="article-content col-md-5">
					<a itemprop="url" href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/tb_blog&amp;tb_blog_id=3" title="Latest Blog" class="imageFeaturedLink">
						<img itemprop="image" alt="Latest Blog" src="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/image/cache/catalog/demo/banners/blog-03-870x576.jpg" class="imageFeatured" />
						<div class="blog-hover"></div>
					</a>
					<span class="bloglinks">
						<a class="icon zoom" data-lightbox="example-set" href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/image/cache/catalog/demo/banners/blog-03-870x576.jpg" title="Click to view Full Image" >
						<i class="icofont-search-1"></i></a> 
					</span>
				  </div>
				  				  <div class="out-content-blog col-md-7">
					<div class="article-header">
					  <h4 class="blog-title"><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/tb_blog&amp;tb_blog_id=3">Magna aliquam volutpat</a></h4>
					  <div class="blog-tool">
					  <span class="date-time"><i class="icofont-calendar"></i>18/08/2022</span>
					  <span class="comment"><i class="icofont-comment"></i><a title="0 Comment" href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/tb_blog&amp;tb_blog_id=3">0 Comment</a> </span>
					  </div>
					</div>
					<div class="sdsarticle-des">
						<div itemprop="description" class="clearfix">
							<div class="blog-desc">					  Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.
			...</div>
						</div>
					</div>
					<div class="sdsreadMore">
						<span class="more"><a title="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/tb_blog&amp;tb_blog_id=3" href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/tb_blog&amp;tb_blog_id=3" class="r_more">Read More</a></span>
					</div>
				  </div>
			  </div>
			</div>
						<div class="blog-item col-xs-12 col-md-12">
			  <div class="tbblogpost">
				  				  <div class="article-content col-md-5">
					<a itemprop="url" href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/tb_blog&amp;tb_blog_id=2" title="Latest Blog" class="imageFeaturedLink">
						<img itemprop="image" alt="Latest Blog" src="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/image/cache/catalog/demo/banners/blog-02-870x576.jpg" class="imageFeatured" />
						<div class="blog-hover"></div>
					</a>
					<span class="bloglinks">
						<a class="icon zoom" data-lightbox="example-set" href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/image/cache/catalog/demo/banners/blog-02-870x576.jpg" title="Click to view Full Image" >
						<i class="icofont-search-1"></i></a> 
					</span>
				  </div>
				  				  <div class="out-content-blog col-md-7">
					<div class="article-header">
					  <h4 class="blog-title"><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/tb_blog&amp;tb_blog_id=2">Eodem modo typi qui nunc</a></h4>
					  <div class="blog-tool">
					  <span class="date-time"><i class="icofont-calendar"></i>18/08/2022</span>
					  <span class="comment"><i class="icofont-comment"></i><a title="0 Comment" href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/tb_blog&amp;tb_blog_id=2">0 Comment</a> </span>
					  </div>
					</div>
					<div class="sdsarticle-des">
						<div itemprop="description" class="clearfix">
							<div class="blog-desc">					  Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
					...</div>
						</div>
					</div>
					<div class="sdsreadMore">
						<span class="more"><a title="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/tb_blog&amp;tb_blog_id=2" href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/tb_blog&amp;tb_blog_id=2" class="r_more">Read More</a></span>
					</div>
				  </div>
			  </div>
			</div>
						<div class="blog-item col-xs-12 col-md-12">
			  <div class="tbblogpost">
				  				  <div class="article-content col-md-5">
					<a itemprop="url" href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/tb_blog&amp;tb_blog_id=1" title="Latest Blog" class="imageFeaturedLink">
						<img itemprop="image" alt="Latest Blog" src="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/image/cache/catalog/demo/banners/blog-01-870x576.jpg" class="imageFeatured" />
						<div class="blog-hover"></div>
					</a>
					<span class="bloglinks">
						<a class="icon zoom" data-lightbox="example-set" href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/image/cache/catalog/demo/banners/blog-01-870x576.jpg" title="Click to view Full Image" >
						<i class="icofont-search-1"></i></a> 
					</span>
				  </div>
				  				  <div class="out-content-blog col-md-7">
					<div class="article-header">
					  <h4 class="blog-title"><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/tb_blog&amp;tb_blog_id=1">Ut aliquip commodo </a></h4>
					  <div class="blog-tool">
					  <span class="date-time"><i class="icofont-calendar"></i>18/08/2022</span>
					  <span class="comment"><i class="icofont-comment"></i><a title="0 Comment" href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/tb_blog&amp;tb_blog_id=1">0 Comment</a> </span>
					  </div>
					</div>
					<div class="sdsarticle-des">
						<div itemprop="description" class="clearfix">
							<div class="blog-desc">					  Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.
			...</div>
						</div>
					</div>
					<div class="sdsreadMore">
						<span class="more"><a title="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/tb_blog&amp;tb_blog_id=1" href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/tb_blog&amp;tb_blog_id=1" class="r_more">Read More</a></span>
					</div>
				  </div>
			  </div>
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
    <div class="box-content"><div id="TB-Footer-cms" class="links">
  <div class="tb-footer-logo"><a href="index.php?route=common/home"><img src="image/catalog/demo/banners/footer-logo.png" alt="footer-logo"></a></div>
  <div class="tb-footer-desc">I use Lorem ipsum text all day long and spend hours formatting it, so I set this site up to make my day.</div>
</div></div>
  </div>

 </aside>

        </div>
        <div class="col-lg-7">
    <div class="row">
      <div class="col-lg-4">
      <div class="footer-commen footer-my-account">
        <h5>My Account</h5>
        <ul class="list-unstyled">
          <li><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=account/account">My Account</a></li>
          <li><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=account/order">Order History</a></li>
          <li><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=account/wishlist">Wish List</a></li>
          <li><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=account/newsletter">Newsletter</a></li>
        </ul>
         </div>
      </div>
            <div class="col-lg-4">
        <div class="footer-commen footer-information">
          <h5>Information</h5>
          <ul class="list-unstyled">
                      <li><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/information&amp;information_id=4">About Us</a></li>
                        <li><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/information&amp;information_id=6">Delivery Information</a></li>
                        <li><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/information&amp;information_id=3">Privacy Policy</a></li>
                        <li><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/information&amp;information_id=5">Terms &amp; Conditions</a></li>
                      </ul>
          </div>
      </div>
       
      <div class="col-lg-4">
      <div class="footer-commen footer-Extras">
        <h5>Extras</h5>
        <ul class="list-unstyled">
          <li><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=product/manufacturer">Brands</a></li>
          <li><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=account/voucher">Gift Certificates</a></li>
          <li><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=affiliate/login">Affiliate</a></li>
          <li><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=product/special">Specials</a></li>
        </ul>
         </div>
      </div>
      </div>
      </div>
<!--   
    <div class="col-lg-4">
        <div class="footer-commen footer-Customer Service">
          <h5>Customer Service</h5>
          <ul class="list-unstyled">
            <li><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/contact">Contact Us</a></li>
            <li><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=account/return/add">Returns</a></li>
            <li><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/sitemap">Site Map</a></li>
          </ul>
          </div>
      </div>
    --> 
              <div class="footer-column footer-right-cms col-lg-2">
      <aside id="footer-right">
	  <div class="html-content">
    <div class="box-content"><div id="Tb-contact-us">
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
                <p><a href="mailto:info@hurzanorze.com">info@admin.com</a></p>
            </div>
        </ul>
    </div>
</div></div>
  </div>

 </aside>

        </div>
          </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="footer-bottom-left col-lg-6">
          <p>Powered By <a href="http://www.opencart.com">OpenCart</a> Address &copy; 2024</p>
        </div>
        <div class="block-social col-lg-6">
                  <div class="footer-bottom-cms">
        <aside id="footer-bottom">
	  <div class="html-content">
    <div class="box-content"><div id="Tb-social-media-cms">
    <div class="Tb-social-media-wrapper">
        <div class="Tb-social-media-icon">
            <a href="#URL" class="facebook"><i class="icofont-facebook"></i></a>
          	<a href="#URL" class="instagram"><i class="icofont-instagram"></i></a>
            <a href="#URL" class="twitter"> <i class="icofont-twitter"></i></a>
            <a href="#URL" class="skype"><i class="icofont-skype"></i></a>
          	<a href="#URL" class="vimeo"><i class="icofont-vimeo"></i></a>
            <a href="#URL" class="youtube"><i class="icofont-youtube-play"></i></a>
        </div>
    </div>
</div></div>
  </div>

 </aside>

        </div>
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
		



</body>
</html>