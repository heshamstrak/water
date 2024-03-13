@extends('frontend.index')
@section('content')
@if (session('success'))
<div class="woocommerce-notices-wrapper">
    <div class="woocommerce-message" role="alert">{{session('success')}}</div>
</div>
@endif
<header class="woocommerce-products-header"></header>
<div class="woocommerce-notices-wrapper"></div>
{{-- <div class="product-loop-sorting"  style="display: inline; width 30%;">
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
</div> --}}
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
                                                            <img decoding="async" src="{{ Storage::url('uploads/products/'.$product->id.'/'.$product->images->first()->image) }}" alt="Shop Primary Image" title="Shop Primary Image" style="width: 100%; height:100%"/>
                                                        </div>
                                                        <div class="secondary-image">
                                                            <img decoding="async" src="{{ Storage::url('uploads/products/'.$product->id.'/'.$product->images->sortByDesc('id')->first()->image ) }}" alt="Latest Image" style="width: 100%; height:100%">
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="product-details">
                                                    <div class="product-title">
                                                        <h5><a href="{{$routeName}}">{{$product->name}}</a></h5>
                                                    </div>
                                                    <div class="product-price">
                                                        <span class="price">
                                                            @if($product->discount_type == 0)
                                                            <del aria-hidden="true">
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <bdi><span class="woocommerce-Price-currencySymbol"> EGP </span>{{$product->price}}</bdi>
                                                                </span>
                                                            </del>
                                                            <ins>
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <bdi><span class="woocommerce-Price-currencySymbol"> EGP </span>{{$product->calculate_discount}}</bdi>
                                                                </span>
                                                            </ins>
                                                            @else
                                                                <ins>
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <bdi><span class="woocommerce-Price-currencySymbol"> EGP </span>{{$product->price}}</bdi>
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
<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

@endpush