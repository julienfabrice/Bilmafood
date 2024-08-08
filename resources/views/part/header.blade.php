<header>
            <div class="header">
	            <div class="full-header">
	                <div class="container">
	                    <div class="header-row">
		                    <div class="header-left">
			                    <div id="logo">
                                    <a href="{{ route('app.index', ['locale' => app()->getLocale()]) }}">
                                        <img src="{{ asset('image/catalog/logo.png') }}" title="Address" alt="Address" class="img-responsive" />
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
                                                        <a class="a-top-link" href="{{ route('app.index', ['locale' => app()->getLocale()]) }}">
                                                        <span data-key="header.home">{{ __('messages.home') }}</span>
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
                                                        <a class="a-top-link" href="{{ route('society.index', ['locale' => app()->getLocale()]) }}">
                                                            <span>{{ __('messages.society') }}</span>
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
                                                        <a class="a-top-link" href="{{ route('quality.index', ['locale' => app()->getLocale()]) }}">
                                                            <span>{{ __('messages.quality') }} </span>
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
                                                        <a class="a-top-link" href="{{ route('jam.index', ['locale' => app()->getLocale()]) }}">
                                                            <span data-key="header.jam">{{ __('messages.jam') }}</span>
                                                        </a>
                                                    </li>                   						
                                                                            						
													<li class="li-top-item">
														<a class="a-top-link" href="{{ route('blog.index', ['locale' => app()->getLocale()]) }}">
															<span data-hover="Blogs">{{ __('messages.blogs') }}</span>
														</a>
													</li>       
                                                    <li class="li-top-item ">
                                                        <a class="a-top-link" href="{{ route('contact.index', ['locale' => app()->getLocale()]) }}">
                                                            <span>{{ __('messages.contact') }}</span>
                                                        </a>
                                                    </li>  
                                                    <script>
                                                        // Définissez vos traductions dans une variable JavaScript
                                                        window.translations = {
                                                            moreText: '{{ __('messages.more') }}'
                                                        };
                                                    </script>                      						
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
                                            <a href="{{ route('account.index', ['locale' => app()->getLocale()]) }}" title="my Account" class="dropdown-toggle" data-toggle="dropdown"><i class="icofont-user-alt-7"></i>
                                                <span class="tbuserheading">my Account</span><i class="icofont-simple-down"></i>
                                            </a>
						                    <ul class="dropdown-menu dropdown-menu-right account-link-toggle">
												<li>
                                                    <a href="{{ route('client.login', ['locale' => app()->getLocale()]) }}"><i class="icofont-lock"></i> {{ __('messages.login') }}</a>
                                                </li>
							                    <li>
                                                    <a href="#" id="wishlist-total" title="Wish List (0)"><i class="icofont-heart"></i> 
                                                        <span class="hidden-sm hidden-md">Wish List (0)</span>
                                                    </a>
                                                </li>
							                    <li>
                                                    <a href="{{ route('client.register', ['locale' => app()->getLocale()]) }}"><i class="icofont-user-alt-7"></i> 
                                                    {{ __('messages.register') }}
                                                    </a>
                                                </li>
                                                @if(session('client'))
							                    <li>
                                                    <a href="{{ route('client.logout', ['locale' => app()->getLocale()]) }}"><i class="icofont-user-alt-7"></i> 
                                                    {{ __('messages.logout') }}
                                                    </a>
                                                </li>
                                                @endif
							                    <li class="tblanguage clearfix">
                                                    <div class="btn-group shadow-0">
                                                    <button type="button" class="btn btn-link dropdown-toggle" data-mdb-dropdown-init data-mdb-ripple-init aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="{{ route('app.index', ['locale' => 'fr']) }}">{{ __('messages.langfr') }}</a></li>
                                                        <li><a class="dropdown-item" href="{{ route('app.index', ['locale' => 'en']) }}">{{ __('messages.langen') }}</a></li>
                                                    </ul>
                                                    </div>
                                                </li>
											</ul>
					                    </li> 
                                            <li class="tbcart">
                                                <div id="cart" class="btn-group">
                                                    <button type="button" data-toggle="dropdown" data-loading-text="Loading..."
                                                            class="btn btn-inverse btn-block btn-lg dropdown-toggle">
                                                        <i class="icofont-shopping-cart"></i>
                                                        <span id="cart-total">{{ count((array) session('cart')) }}</span>
                                                        <span class="cart-heading">Cart</span>
                                                    </button>
                                                    <ul class="dropdown-menu pull-right header-cart-toggle" id="cart-items">
                                                        @if(session('cart'))
                                                            @foreach (Session::get('cart', []) as $productId => $item)
                                                                <li class="cart-product" data-product-id="{{ $productId }}">
                                                                    <table class="table table-striped">
                                                                        <tr>
                                                                            <td class="text-center image">
                                                                                <a href="#">
                                                                                    <img src="{{ Storage::url($item['main_image']) }}" />
                                                                                </a>
                                                                            </td>
                                                                            <td class="text-left name">
                                                                                <a href="#">{{ $item['name'] }}</a>
                                                                            </td>
                                                                            <td class="text-right">x{{ $item['quantity'] }}</td>
                                                                            <td class="text-right amount">{{ $item['price'] * $item['quantity'] }}</td>
                                                                            <td class="text-center button">
                                                                                <button type="button" class="remove_card" style="background:none; border:none" data-product-id="{{ $productId }}" title="Remove" class="btn btn-danger btn-xs" >
                                                                                    <i class="icofont-close"></i>
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </li>
                                                            @endforeach
                                                            <li id="cart-total-section">
                                                                <div>
                                                                    <table class="table table-bordered">
                                                                        @php $total = 0 @endphp
                                                                        @foreach((array) session('cart') as $id => $item)
                                                                            @php $total += $item['price'] * $item['quantity'] @endphp
                                                                        @endforeach
                                                                        <tr>
                                                                            <td class="text-right"><strong>Total</strong></td>
                                                                            <td class="text-right price-total">cfa {{ $total }}</td>
                                                                        </tr>
                                                                    </table>
                                                                    <p class="text-right">
                                                                        <a href="{{ route('cart', ['locale' => app()->getLocale()]) }}"><strong>View Cart</strong></a>
                                                                        <a href="#"><strong>Checkout</strong></a>
                                                                    </p>
                                                                </div>
                                                            </li>
                                                        @else
                                                            <li>
                                                                <p class="text-center">Your shopping cart is empty!</p>
                                                            </li>
                                                        @endif
                                                    </ul>
                                                </div>

                                            </li>
                                        <!-- 
                                            <li class="tbcart">
                                                <div id="cart" class="btn-group">
                                                    <button type="button" data-toggle="dropdown" data-loading-text="Loading..."
                                                            class="btn btn-inverse btn-block btn-lg dropdown-toggle">
                                                        <i class="icofont-shopping-cart"></i>
                                                        <span id="cart-total">{{ count(Session::get('cart', [])) }}</span>
                                                        <span class="cart-heading">Cart</span>
                                                    </button>
                                                    <ul class="dropdown-menu pull-right header-cart-toggle">
                                                        <li>
                                                            <p class="text-center">Your shopping cart is empty!</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                         -->
				                    </ul>
			                    </div>
		                    </div>
	                    </div>
	                </div>
	            </div>
            </div>
        </header>