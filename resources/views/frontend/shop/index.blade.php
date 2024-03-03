@extends('frontend.index')
@section('content')
<header class="woocommerce-products-header"></header>
<div class="woocommerce-notices-wrapper"></div>
<div class="product-loop-sorting"  style="display: inline; width 30%;">
    <div class="product-loop-sorting-item"  style="display: inline;">
        <form class="woocommerce-ordering" method="get" style="width: 30%; display: inline-block;">
            <select name="orderby" class="orderby select2-hidden-accessible" aria-label="Shop order" data-select2-id="select2-data-1-kuzj" tabindex="-1" aria-hidden="true">
                <option value="menu_order" selected="selected" data-select2-id="select2-data-3-eyiy">Default sorting</option>
                <option value="popularity">Sort by popularity</option>
                <option value="rating">Sort by average rating</option>
                <option value="date">Sort by latest</option>
                <option value="price">Sort by price: low to high</option>
                <option value="price-desc">Sort by price: high to low</option>
            </select>
            <input type="hidden" name="paged" value="1">
        </form>
    </div>
    <div class="product-loop-sorting-item" style="display:inline; float:right">
        <p class="woocommerce-result-count">
            Showing 1–6 of {{count($products)}} results
        </p>
    </div>
</div>
<section class="elementor-section elementor-top-section elementor-element elementor-element-533c407 elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="533c407" data-element_type="section" data-settings='{"stretch_section":"section-stretched","background_background":"classic"}'>
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-503b180" data-id="503b180" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-65bd9cc fullwidth-title animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="65bd9cc" data-element_type="widget" data-settings='{"_animation":"bounceIn","_animation_delay":600}' data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">Plant based milk for everyone at any age</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-2f257ac elementor-section-stretched fullwidth-shop elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2f257ac" data-element_type="section" data-settings='{"stretch_section":"section-stretched","background_background":"classic"}' >
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-be810ef" data-id="be810ef" data-element_type="column" data-settings='{"background_background":"classic"}' >
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-3370f20 elementor-widget elementor-widget-spacer" data-id="3370f20" data-element_type="widget" data-widget_type="spacer.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-spacer">
                            <div class="elementor-spacer-inner"></div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-11bc07d elementor-widget elementor-widget-mfx-shop-products" data-id="11bc07d" data-element_type="widget" data-widget_type="mfx-shop-products.default">
                    <div class="elementor-widget-container">
                        <div class="mfx-products-container woocommerce">
                            <ul class="products products-apply-isotope product-style-default product-hover-fade-skinborder product-hover-secimage-fade product-overlay-dark-bgcolor product-with-space product-padding-default default-shop false product-label-circle false product-thumb-alignment-top product-thumb-iconsgroup-style-simple product-thumb-buttonelement-style-bgfill-rounded product-content-alignment-center product-content-iconsgroup-style-simple product-content-buttonelement-style-simple">
                                <li class="product isotope-grid-sizer"><div class="mfx-col mfx-col-xs-12 mfx-col-sm-6 mfx-col-md-6 mfx-col-qxlg-4 mfx-col-hxlg-4 mfx-col-lg-4"></div></li>
                                @foreach($products as $product)
                                @php
                                    $routeName = route('shop.single', ['slug' => str_replace(' ', '-', $product->name), 'product' => $product->id] );
                                @endphp
                                    <li class="product-grid-view product-with-secondary-image product type-product post-22167 status-publish first instock product_cat-flavored-milk has-post-thumbnail sale shipping-taxable purchasable product-type-variable">
                                        <div class="mfx-col mfx-col-xs-12 mfx-col-sm-6 mfx-col-md-6 mfx-col-qxlg-4 mfx-col-hxlg-4 mfx-col-lg-4">
                                            <div class="product-wrapper">
                                                <div class="product-thumb">
                                                    <a class="image" href="{{$routeName}}" title="{{$product->name}}">
                                                        <div class="product-thumb-overlay"></div>
                                                        <div class="primary-image">
                                                            <img decoding="async" src="{{ Storage::url('uploads/products/'.$product->id.'/'.$product->images->first()->image) }}" alt="Shop Primary Image" title="Shop Primary Image"/>
                                                        </div>
                                                        <div class="secondary-image">
                                                            <img decoding="async" src="{{ Storage::url('uploads/products/'.$product->id.'/'.$product->images->first()->image) }}" alt="Shop Secondary Image" title="Shop Secondary Image"/>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="product-details">
                                                    <div class="product-title">
                                                        <h5><a href="{{$routeName}}">{{$product->name}}</a></h5>
                                                    </div>
                                                    <div class="product-price">
                                                        <span class="price">
                                                            @if($product->discount_type != null)
                                                            <del aria-hidden="true">
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <bdi><span class="woocommerce-Price-currencySymbol">&#8377;</span>{{$product->price}}</bdi>
                                                                </span>
                                                            </del>
                                                            <ins>
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <bdi><span class="woocommerce-Price-currencySymbol">&#8377;</span>{{$product->discount_type == 0 ? $product->discount : $product->price - $product->discount}}</bdi>
                                                                </span>
                                                            </ins>
                                                            @else
                                                                <ins>
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <bdi><span class="woocommerce-Price-currencySymbol">&#8377;</span>{{$product->price}}</bdi>
                                                                    </span>
                                                                </ins>
                                                            @endif
                                                  
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-6af58e2 elementor-widget elementor-widget-spacer" data-id="6af58e2" data-element_type="widget" data-widget_type="spacer.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-spacer">
                            <div class="elementor-spacer-inner"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('css')
        <link rel="dns-prefetch" href="//fonts.googleapis.com" />
        <link rel="alternate" type="application/rss+xml" title="Milmaa &raquo; Feed" href="https://milmaa.wpengine.com/feed/" />
        <link rel="alternate" type="application/rss+xml" title="Milmaa &raquo; Comments Feed" href="https://milmaa.wpengine.com/comments/feed/" />
        <link rel="alternate" type="application/rss+xml" title="Milmaa &raquo; Products Feed" href="https://milmaa.wpengine.com/shop/feed/" />
        <link rel="stylesheet" id="wpacu-combined-css-head-1" href="https://milmaa.wpengine.com/wp-content/cache/asset-cleanup/css/head-a59dbf73830404f1cf47d8b4217da8b65727af59.css" type="text/css" media="all" />
        <link rel="stylesheet" id="woocommerce-smallscreen-css" href="https://milmaa.wpengine.com/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=6.2.2" type="text/css" media="only screen and (max-width: 768px)" />
        <link rel="stylesheet" id="bf420a116b69a7b8244224c70b72a816-css" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800,900&#038;subset=latin-ext" type="text/css" media="all" />
        <link rel="stylesheet" id="e9a1e001934af7121d3283b538999bad-css" href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&#038;subset=latin-ext" type="text/css" media="all" />
        <link rel="stylesheet" id="1d9aa0e7b7a043548d134f3d89fd753b-css" href="//fonts.googleapis.com/css?family=Merriweather:400&#038;subset=latin-ext" type="text/css" media="all" />
        <link rel="stylesheet" id="61f180e65cb9280b339502ab077d40fc-css" href="//fonts.googleapis.com/css?family=Sen:400,700,800&#038;subset=latin-ext" type="text/css" media="all" />
        <link rel="stylesheet" id="f562e241c1c8b24ab7a4dd36af4e492b-css" href="//fonts.googleapis.com/css?family=Lilita+One:400&#038;subset=latin-ext" type="text/css" media="all" />
        <link rel="stylesheet" id="5d5cd0aadc8ea00aad005f6044700045-css" href="//fonts.googleapis.com/css?family=Sen:400&#038;subset=latin-ext" type="text/css" media="all" />
        <script id="wpacu-combined-js-head-group-1" type="text/javascript" src="https://milmaa.wpengine.com/wp-content/cache/asset-cleanup/js/head-12613d092f994a1d5c75d6f766f20c3ee4c2eb1c.js"></script>
        <link rel="https://api.w.org/" href="https://milmaa.wpengine.com/wp-json/" />
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://milmaa.wpengine.com/xmlrpc.php?rsd" />

        <link rel="icon" href="https://milmaa.wpengine.com/wp-content/uploads/2021/12/favicon.png" sizes="32x32" />
        <link rel="icon" href="https://milmaa.wpengine.com/wp-content/uploads/2021/12/favicon.png" sizes="192x192" />
        <link rel="apple-touch-icon" href="https://milmaa.wpengine.com/wp-content/uploads/2021/12/favicon.png" />
        <meta name="msapplication-TileImage" content="https://milmaa.wpengine.com/wp-content/uploads/2021/12/favicon.png" />
<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

@endpush