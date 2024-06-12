
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
<title>Register Account</title>
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


<link href="{{ asset('catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css.tmp') }}" type="text/css" rel="stylesheet" media="screen" />

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


<link href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/image/catalog/cart.png" rel="icon" />

<script src="catalog/view/javascript/jquery/datetimepicker/moment/moment.min.js"></script>
<script src="catalog/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js"></script>
<script src="catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js"></script>
<script src="catalog/view/javascript/TemplateBunch/default/jquery.bpopup.min.js"></script>
<script src="catalog/view/javascript/TemplateBunch/default/jquery.cookie.js"></script>

</head>
<body class="account-register">
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
                                                        <span data-key="header.home">Home</span>
                                                        </a>
                                                        <!-- Mega Menu -->        
                                                        <div class="mega-menu-container sub-menu-container ">                                                                                                                                                                                                                                                        
                                                            <div class="col-sm-12 sub-item2-content" data-cols="12">
                                                                <h4><strong>TB-megamenu</strong></h4>
                                                                    <p>
                                                                        <div class="banner-static static-menu">
                                                                            <div class="column layout-1">
                                                                                <div class="menu-title">
                                                                                    <a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/">Real Jam</a>
                                                                                </div>
                                                                                <div class="image">
                                                                                <a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/">
                                                                                    <img src="image/catalog/demo/banners/demo-01.jpg" alt="image">
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="column layout-4">
                                                                            <div class="menu-title">
                                                                                <a href="#">coming soon</a>
                                                                            </div>
                                                                            <div class="image">
                                                                                <a href="#">
                                                                                    <img src="image/catalog/demo/banners/demo-02.jpg" alt="image">
                                                                                </a>
                                                                            </div>
                                                                        </div>

                                                                        </div>
                                                                    </p>
                                                            </div>
                                                                        
                                                        </div>
                                                                                                                        
                                                        <!-- Flyout Menu -->
                                                    </li>                                                    
                        						
                                                    <li class="li-top-item mega-menu">
                                                        <a class="a-top-link" href="index73b3.php?route=product/category&amp;path=59">
                                                            <span>Jam</span>
                                                        </a>
                                                        <!-- Mega Menu -->                                                                                                                
                                                        <div class="mega-menu-container sub-menu-container ">
                                                            <div class="col-sm-2 sub-item2-content" data-cols="2">
                                                                <a class="a-mega-second-link" href="index0854.html?route=product/category&amp;path=62">
                                                                    <h4><strong>Orange Jam</strong></h4>
                                                                </a>
                                                                <div class="sub_item3-content">
                                                                    <a class="a-mega-third-link" href="indexa09b.html?route=product/category&amp;path=62_71"><h5>Blackberry</h5></a>
                                                                    <a class="a-mega-third-link" href="indexbf9e.html?route=product/category&amp;path=62_69"><h5>Marmalade</h5></a>
                                                                    <a class="a-mega-third-link" href="index66ab.html?route=product/category&amp;path=62_70"><h5>Rasberry </h5></a>
                                                                    <a class="a-mega-third-link" href="index6180.html?route=product/category&amp;path=62_92"><h5>Seville</h5></a>
                                                                    <a class="a-mega-third-link" href="index9b82.html?route=product/category&amp;path=62_67"><h5>Margaret</h5></a>
                                                                </div>
                                                            </div>                                                                                                                                                                                                            
                                                            <div class="col-sm-2 sub-item2-content" data-cols="2">
                                                                <a class="a-mega-second-link" href="indexcd29.html?route=product/category&amp;path=63">
                                                                    <h4><strong>Mango Jam</strong></h4>
                                                                </a>
                                                                <div class="sub_item3-content">
                                                                    <a class="a-mega-third-link" href="indexad06.html?route=product/category&amp;path=63_76"><h5>Ambika</h5></a>
                                                                    <a class="a-mega-third-link" href="index9ff0.html?route=product/category&amp;path=63_75"><h5>Abusamaka</h5></a>
                                                                    <a class="a-mega-third-link" href="indexd710.html?route=product/category&amp;path=63_74"><h5>Chausa</h5></a>
                                                                    <a class="a-mega-third-link" href="index2936.html?route=product/category&amp;path=63_90"><h5>Magloba</h5></a>
                                                                    <a class="a-mega-third-link" href="indexb527.html?route=product/category&amp;path=63_68"><h5>GulbAltour</h5></a>
                                                                </div>
                                                            </div>                                                                                                                                                                                                            
                                                            <div class="col-sm-2 sub-item2-content" data-cols="2">
                                                                <a class="a-mega-second-link" href="index2b30.html?route=product/category&amp;path=64">
                                                                    <h4><strong>Mixed Fruit</strong></h4>
                                                                </a>
                                                                <div class="sub_item3-content">
                                                                    <a class="a-mega-third-link" href="index6f9f.html?route=product/category&amp;path=64_80"><h5>Exotic Jam </h5></a>
                                                                    <a class="a-mega-third-link" href="indexc67e.html?route=product/category&amp;path=64_77"><h5>Flavor</h5></a>
                                                                    <a class="a-mega-third-link" href="index10a2.html?route=product/category&amp;path=64_79"><h5>Lion Jam</h5></a>
                                                                    <a class="a-mega-third-link" href="index5d6c.html?route=product/category&amp;path=64_93"><h5>Mantra </h5></a>
                                                                    <a class="a-mega-third-link" href="index6d1b.html?route=product/category&amp;path=64_78"><h5>Orchard </h5></a>
                                                                </div>
                                                            </div>                                                                                                                                                                                                
                                                            <div class="col-sm-2 sub-item2-content" data-cols="2">
                                                                <a class="a-mega-second-link" href="index4eb1.html?route=product/category&amp;path=65">
                                                                    <h4><strong>Berryblast </strong></h4>
                                                                </a>
                                                                <div class="sub_item3-content">
                                                                    <a class="a-mega-third-link" href="indexee47.html?route=product/category&amp;path=65_83"><h5>Blast Jam</h5></a>
                                                                    <a class="a-mega-third-link" href="index8df1.html?route=product/category&amp;path=65_84"><h5>Orange </h5></a>
                                                                    <a class="a-mega-third-link" href="indexeeaf.html?route=product/category&amp;path=65_82"><h5>Jambo Jam </h5></a>
                                                                    <a class="a-mega-third-link" href="index75e9.html?route=product/category&amp;path=65_91"><h5>Strwberry </h5></a>
                                                                    <a class="a-mega-third-link" href="index1812.html?route=product/category&amp;path=65_81"><h5>Tropical</h5></a>
                                                                </div>
                                                            </div>                                                                                                                                                                                                            
                                                            <div class="col-sm-2 sub-item2-content" data-cols="2">
                                                                <a class="a-mega-second-link" href="index78aa.html?route=product/category&amp;path=66">
                                                                    <h4><strong>Pineapple</strong></h4>
                                                                </a>
                                                                <div class="sub_item3-content">
                                                                    <a class="a-mega-third-link" href="index223e.html?route=product/category&amp;path=66_89"><h5>Dalfour </h5></a>
                                                                    <a class="a-mega-third-link" href="indexcd39.html?route=product/category&amp;path=66_85"><h5>Mala’s Jam </h5></a>
                                                                    <a class="a-mega-third-link" href="indexe127.html?route=product/category&amp;path=66_88"><h5>Kissan </h5></a>
                                                                    <a class="a-mega-third-link" href="indexccd2.html?route=product/category&amp;path=66_86"><h5>Preservatives</h5></a>
                                                                    <a class="a-mega-third-link" href="index086f.html?route=product/category&amp;path=66_87"><h5>Splitz Jam</h5></a>
                                                                </div>
                                                            </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
                                                            <div class="col-sm-12 sub-item2-content" data-cols="12">
                                                                <h4><strong>Menubanner</strong></h4>
                                                                <p>
                                                                    <div class="menu-banner">
                                                                        <a href="#URL">
                                                                            <img src="image/catalog/demo/banners/menu-banner.jpg" alt="menu-banner">
                                                                        </a>
                                                                    </div>
                                                                </p>
                                                            </div>                                                                    
                                                        </div>                                                                                                                        
                                                        
                                                        <!-- Flyout Menu -->
                                                    </li>
                                                    
                                                    <li class="li-top-item ">
                                                        <a class="a-top-link" href="{{ route('products.index') }}">
                                                            <span>Products</span>
                                                        </a>
                                                    </li>

                                                    <li class="li-top-item ">
                                                        <a class="a-top-link" href="{{ route('category.index') }}">
                                                            <span>Category</span>
                                                        </a>
                                                    </li>

                                                    <li class="li-top-item mega-menu">
                                                        <a class="a-top-link" href="index6067.html?route=product/category&amp;path=60">
                                                            <span>Flavor </span>
                                                        </a>
                                                        <!-- Mega Menu -->
                                                        <!-- Flyout Menu -->                            
                                                        <div class="flyout-menu-container sub-menu-container">
                                                            <ul class="ul-second-items">
                                                                <li class="li-second-items">
                                                                    <a href="indexf684.html?route=product/category&amp;path=60_95" class="a-second-link a-item">
                                                                        <span class="a-second-title">Natureland</span>
                                                                    </a>
                                                                </li>
                                                                <li class="li-second-items">
                                                                    <a href="index00a5.html?route=product/category&amp;path=60_96" class="a-second-link a-item">
                                                                        <span class="a-second-title">Organics</span>
                                                                    </a>
                                                                </li>
                                                                <li class="li-second-items">
                                                                    <a href="indexcefd.html?route=product/category&amp;path=60_98" class="a-second-link a-item">
                                                                        <span class="a-second-title">Fruit butters</span>
                                                                        <i class="icofont-simple-right"></i>
                                                                    </a>
                                                                    <div class="flyout-third-items">
                                                                        <ul class="ul-third-items">
                                                                            <li class="li-third-items">
                                                                                <a href="indexacee.html?route=product/category&amp;path=60_98_100" class="a-third-link">
                                                                                    <span class="a-third-title">blueberry</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="li-third-items">
                                                                                <a href="indexf5b4.html?route=product/category&amp;path=60_98_99" class="a-third-link"><span class="a-third-title">Marmalade</span></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li class="li-second-items">
                                                                    <a href="indexbf7b.html?route=product/category&amp;path=60_97" class="a-second-link a-item">
                                                                        <span class="a-second-title">Jelly</span>
                                                                    </a>
                                                                </li>
                                                                <li class="li-second-items">
                                                                    <a href="indexedd1.html?route=product/category&amp;path=60_94" class="a-second-link a-item">
                                                                        <span class="a-second-title">Kissan</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                        						
                                                                            						
                                                                            						
                                                    <li class="li-top-item ">
                                                        <a class="a-top-link" href="{{ route('contact.index') }}">
                                                            <span>Contact us</span>
                                                        </a>
                                                    </li>                        						
                    								<li class="li-top-item">
                                                        <a class="a-top-link" href="indexfea3.html?route=information/tb_blog/blogs">
						                                    <span data-hover="Blogs">Blogs</span>
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
                                                    <a href="indexe223.html?route=account/wishlist" id="wishlist-total" title="Wish List (0)"><i class="icofont-heart"></i> 
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
                                                                        <option lang="en" value="en-gb" data-image="catalog/language/en-gb/en-gb.png"selected>English</option>
                                                                        <option lang="fr" value="fr-fr" data-image="catalog/language/fr-fr/fr.svg" >Français</option>
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

<div id="account-register" class="container">
  <ul class="breadcrumb">
        <li><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=common/home"><i class="icofont-home"></i></a></li>
        <li><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=account/account">Account</a></li>
        <li><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=account/register">Register</a></li>
      </ul>
    <div class="row">
                <div id="content" class="col-sm-12">
      <h1>Register Account</h1>
      <p>If you already have an account with us, please login at the <a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=account/login">login page</a>.</p>
      <form action="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=account/register" method="post" enctype="multipart/form-data" class="form-horizontal">
        <fieldset id="account">
          <legend>Your Personal Details</legend>
          <div class="form-group required" style="display:  none ;">
            <label class="col-sm-2 control-label">Customer Group</label>
            <div class="col-sm-10">                            <div class="radio">
                <label>
                  <input type="radio" name="customer_group_id" value="1" checked="checked" />
                  Default</label>
              </div>
                            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-firstname">First Name</label>
            <div class="col-sm-10">
              <input type="text" name="firstname" value="" placeholder="First Name" id="input-firstname" class="form-control" />
               </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-lastname">Last Name</label>
            <div class="col-sm-10">
              <input type="text" name="lastname" value="" placeholder="Last Name" id="input-lastname" class="form-control" />
               </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
            <div class="col-sm-10">
              <input type="email" name="email" value="" placeholder="E-Mail" id="input-email" class="form-control" />
               </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-telephone">Telephone</label>
            <div class="col-sm-10">
              <input type="tel" name="telephone" value="" placeholder="Telephone" id="input-telephone" class="form-control" />
               </div>
          </div>
                  </fieldset>
        <fieldset>
          <legend>Your Password</legend>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-password">Password</label>
            <div class="col-sm-10">
              <input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control" />
               </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-confirm">Password Confirm</label>
            <div class="col-sm-10">
              <input type="password" name="confirm" value="" placeholder="Password Confirm" id="input-confirm" class="form-control" />
               </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>Newsletter</legend>
          <div class="form-group">
            <label class="col-sm-2 control-label">Subscribe</label>
            <div class="col-sm-10">               <label class="radio-inline">
                <input type="radio" name="newsletter" value="1" />
                Yes</label>
              <label class="radio-inline">
                <input type="radio" name="newsletter" value="0" checked="checked" />
                No</label>
               </div>
          </div>
        </fieldset>
        
                <div class="buttons clearfix">
          <div class="pull-right">I have read and agree to the <a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/information/agree&amp;information_id=3" class="agree"><b>Privacy Policy</b></a>
                        <input type="checkbox" name="agree" value="1" />
                        &nbsp;
            <input type="submit" value="Continue" class="btn btn-primary" />
          </div>
        </div>
              </form>
      </div>
    </div>
</div>
<script type="text/javascript"><!--
// Sort the custom fields
// $('#account .form-group[data-sort]').detach().each(function() {
// 	if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#account .form-group').length) {
// 		$('#account .form-group').eq($(this).attr('data-sort')).before(this);
// 	}

// 	if ($(this).attr('data-sort') > $('#account .form-group').length) {
// 		$('#account .form-group:last').after(this);
// 	}

// 	if ($(this).attr('data-sort') == $('#account .form-group').length) {
// 		$('#account .form-group:last').after(this);
// 	}

// 	if ($(this).attr('data-sort') < -$('#account .form-group').length) {
// 		$('#account .form-group:first').before(this);
// 	}
// });

// $('input[name=\'customer_group_id\']').on('change', function() {
// 	$.ajax({
// 		url: 'index.php?route=account/register/customfield&customer_group_id=' + this.value,
// 		dataType: 'json',
// 		success: function(json) {
// 			$('.custom-field').hide();
// 			$('.custom-field').removeClass('required');

// 			for (i = 0; i < json.length; i++) {
// 				custom_field = json[i];

// 				$('#custom-field' + custom_field['custom_field_id']).show();

// 				if (custom_field['required']) {
// 					$('#custom-field' + custom_field['custom_field_id']).addClass('required');
// 				}
// 			}
// 		},
// 		error: function(xhr, ajaxOptions, thrownError) {
// 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
// 		}
// 	});
// });

// $('input[name=\'customer_group_id\']:checked').trigger('change');
//--></script> 
<script type="text/javascript"><!--
$('button[id^=\'button-custom-field\']').on('click', function() {
	var element = this;

	$('#form-upload').remove();

	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');

	$('#form-upload input[name=\'file\']').trigger('click');

	if (typeof timer != 'undefined') {
    	clearInterval(timer);
	}

	timer = setInterval(function() {
		if ($('#form-upload input[name=\'file\']').val() != '') {
			clearInterval(timer);

			$.ajax({
				url: 'index.php?route=tool/upload',
				type: 'post',
				dataType: 'json',
				data: new FormData($('#form-upload')[0]),
				cache: false,
				contentType: false,
				processData: false,
				beforeSend: function() {
					$(element).button('loading');
				},
				complete: function() {
					$(element).button('reset');
				},
				success: function(json) {
					$(element).parent().find('.text-danger').remove();

					if (json['error']) {
						$(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');
					}

					if (json['success']) {
						alert(json['success']);

						$(element).parent().find('input').val(json['code']);
					}
				},
				error: function(xhr, ajaxOptions, thrownError) {
					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
				}
			});
		}
	}, 500);
});
//--></script> 
<script type="text/javascript"><!--
$('.date').datetimepicker({
	language: 'en-gb',
	pickTime: false
});

$('.time').datetimepicker({
	language: 'en-gb',
	pickDate: false
});

$('.datetime').datetimepicker({
	language: 'en-gb',
	pickDate: true,
	pickTime: true
});
//--></script> 
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