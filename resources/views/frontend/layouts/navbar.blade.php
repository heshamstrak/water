<header id="header">
    <div class="container">
        <div id="header-8" class="mfx-header-tpl header-8">
            <div data-elementor-type="wp-post" data-elementor-id="8" class="elementor elementor-8" data-elementor-settings="[]">
                <div class="elementor-section-wrap">
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-42dc83b elementor-section-content-middle header-on-slider elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="42dc83b" data-element_type="section" data-settings='{"stretch_section":"section-stretched","background_background":"classic"}' style="background-color: #fff">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-be8f0e0 logo-section" data-id="be8f0e0" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-51e6d15 elementor-align-left elementor-mobile-align-center elementor-mobile_extra-align-center elementor-widget elementor-widget-mfx-logo" data-id="51e6d15" data-element_type="widget" data-widget_type="mfx-logo.default" >
                                        <div class="elementor-widget-container">
                                            <div id="milmaa-51e6d15" class="mfx-logo-container">
                                                <a href="{{route('home')}}" rel="home"><img src="{{Storage::url('public/uploads/settings/'.setting('logo_image'))}}" alt="water" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-8a9b5b3 header-menu" data-id="8a9b5b3" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-6769bc3 elementor-align-center elementor-mobile_extra-align-left elementor-widget elementor-widget-mfx-header-menu" data-id="6769bc3" data-element_type="widget" data-widget_type="mfx-header-menu.default">
                                        <div class="elementor-widget-container">
                                            <div class="mfx-header-menu" data-menu="2">
                                                <div class="menu-container">
                                                    <ul id="menu-main-menu-1" class="mfx-primary-nav" data-menu="2">
                                                        <li class="close-nav"><a href="javascript:void(0);"></a></li>
                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home {{Route::is('home') ? 'current-menu-item current_page_item' : '' }} page-item-7 menu-item-14 menu-item-depth-0">
                                                            <a href="{{route('home')}}" aria-current="page"><span>Home</span></a>
                                                        </li>
                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1868 menu-item-depth-0 {{Route::is('about') ? 'current-menu-item current_page_item' : '' }}">
                                                            <a href="{{route('about')}}"><span>About us</span></a>
                                                        </li>
                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-22240 menu-item-depth-0 {{Route::is('blog.index') ? 'current-menu-item current_page_item' : '' }}">
                                                            <a href="{{route('blog.index')}}"><span>Blog</span></a>
                                                        </li>
                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-22212 menu-item-depth-0 {{Route::is('shop') ? 'current-menu-item current_page_item' : '' }}">
                                                            <a href="{{route('shop')}}"><span>Shop</span></a>
                                                        </li>
                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1870 menu-item-depth-0 {{Route::is('contact') ? 'current-menu-item current_page_item' : '' }}">
                                                            <a href="{{route('contact')}}"><span>Contact us</span></a>
                                                        </li>
                                                    </ul>
                                                    <div class="sub-menu-overlay"></div>
                                                </div>
                                                <div class="mobile-nav-container mobile-nav-offcanvas-right" data-menu="2">
                                                    <a href="#" class="menu-trigger menu-trigger-icon" data-menu="2"><i></i><span>Menu</span></a>
                                                    <div class="mobile-menu" data-menu="2"></div>
                                                    <div class="overlay"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-fdbbb52 header-icon-set" data-id="fdbbb52" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-3bb619b elementor-align-right elementor-mobile-align-center elementor-widget elementor-widget-mfx-header-icons" data-id="3bb619b" data-element_type="widget" data-widget_type="mfx-header-icons.default">
                                        <div class="elementor-widget-container">
                                            <div class="woocommerce mfx-header-icons-list">
                                                <div class="mfx-header-icons-list-item cart-item">
                                                    @if(auth()->check() && auth()->user()->carts()->count() > 0)
                                                    @php
                                                        $totalPrice = App\Models\Cart::where('user_id', auth()->user()->id)->sum(\DB::raw('price * quantity'));
                                                    @endphp
                                                    <div class="mfx-header-icons-list-item cart-item">
                                                        <div class="mfx-shop-menu-icon">
                                                            <a href="{{route('view_cart')}}">
                                                                <span class="mfx-shop-menu-icon-wrapper">
                                                                    <span class="mfx-shop-menu-cart-inner"><span class="mfx-shop-menu-cart-icon"></span><span class="mfx-shop-menu-cart-number">{{auth()->user()->carts()->count()}}</span></span>
                                                                    <span class="mfx-shop-menu-cart-totals">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <bdi><span class="woocommerce-Price-currencySymbol">EGP </span>{{$totalPrice}}</bdi>
                                                                        </span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                            <div class="mfx-shop-menu-cart-content-wrapper">
                                                                <div class="mfx-shop-menu-cart-content">
                                                                    <ul class="woocommerce-mini-cart cart_list product_list_widget">
                                                                        @foreach (auth()->user()->carts()->get() as $row)
                                                                        @php
                                                                            $routeName = route('shop.single', ['slug' => str_replace(' ', '-', $row->product->name), 'product' => $row->product->id] );
                                                                        @endphp
                                                                        <li class="woocommerce-mini-cart-item mini_cart_item">
                                                                            <a href="{{$routeName}}">
                                                                                <img width="488" height="1000" src="{{ Storage::url('uploads/products/'.$row->product->id.'/'.$row->product->images->first()->image) }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" sizes="(max-width: 488px) 100vw, 488px" /> {{$row->product->name}} - {{$row->product->category->name}}, {{$row->weight != null ? $row->weight->name : ''}}
                                                                            </a>
                                                                            <span class="quantity">
                                                                                {{$row->quantity}} ×
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <bdi><span class="woocommerce-Price-currencySymbol">EGP {{$row->price * $row->quantity}}</span></bdi>
                                                                                </span>
                                                                            </span>
                                                                        </li>
                                                                        @endforeach
                                                                
                                               
                                                                    </ul>
                                                    
                                                                    <div class="woocommerce-mini-cart-footer">
                                                                        <p class="woocommerce-mini-cart__total total">
                                                                            <strong>Subtotal:</strong>
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <bdi><span class="woocommerce-Price-currencySymbol">EGP </span>{{$totalPrice}}</bdi>
                                                                            </span>
                                                                        </p>
                                                    
                                                                        <p class="woocommerce-mini-cart__buttons buttons">
                                                                            <a href="{{route('view_cart')}}" class="button wc-forward">View cart</a>
                                                                            <a href="{{route('checkout')}}" class="button checkout wc-forward">Checkout</a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @else
                                                    <div class="mfx-shop-menu-icon">
                                                        <a href="{{route('view_cart')}}">
                                                            <span class="mfx-shop-menu-icon-wrapper">
                                                                <span class="mfx-shop-menu-cart-inner"><span class="mfx-shop-menu-cart-icon"></span><span class="mfx-shop-menu-cart-number"></span></span>
                                                                <span class="mfx-shop-menu-cart-totals"></span>
                                                            </span>
                                                        </a>
                                                        <div class="mfx-shop-menu-cart-content-wrapper"><div class="mfx-shop-menu-cart-content">No products added!</div></div>
                                                    </div>
                                                    @endif
                                                 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</header>

<style>
    .mfx-header-menu .mfx-primary-nav>li.current-menu-item>a, .mfx-header-menu .mfx-primary-nav>li.current-page-item>a, .mfx-header-menu .mfx-primary-nav>li.current-menu-ancestor>a, .mfx-header-menu .mfx-primary-nav>li.current-page-ancestor>a, .mfx-header-menu .mfx-primary-nav>li.current_menu_item>a, .mfx-header-menu .mfx-primary-nav>li.current_page_item>a, .mfx-header-menu .mfx-primary-nav>li.current_menu_ancestor>a, .mfx-header-menu .mfx-primary-nav>li.current_page_ancestor>a {
        background-color: #62b7d6
    }

    .woocommerce ul.products.default-shop li.product .product-thumb .image:before {
        background-color: #83d1d9;
    }

    .elementor-139 .elementor-element.elementor-element-e1cf60c:not(.elementor-motion-effects-element-type-background), .elementor-139 .elementor-element.elementor-element-e1cf60c > .elementor-motion-effects-container > .elementor-motion-effects-layer {
        background-image: none !important;
    }
</style>