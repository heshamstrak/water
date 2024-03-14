@extends('frontend.index')
@section('content')
<div id="post-7" class="post-7 page type-page status-publish hentry">
    <div data-elementor-type="wp-page" data-elementor-id="7" class="elementor elementor-7" data-elementor-settings="[]">
        <div class="elementor-section-wrap">
            <section class="elementor-section elementor-top-section elementor-element elementor-element-21edd76 elementor-section-stretched elementor-section-content-middle slider-section elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="21edd76" data-element_type="section" data-settings='{"stretch_section":"section-stretched","background_background":"classic"}'>
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e2e0fab" data-id="e2e0fab" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-d308647 animated-slow elementor-widget__width-inherit elementor-absolute elementor-invisible elementor-widget elementor-widge" data-element_type= data-settings='{"_animation":"pulse","_animation_delay":500,"_position":"abs data-widget_type="image.default"' >
                                <div class="elementor-widget-container">
                                    <img fetchpriority="high" decoding="async" width="1475" height="823" src="https://milmaa.wpengine.com/wp-content/uploads/2021/12/img-15.png" class="attachment-full size-full"/>
                                </div>
                            </div>
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-a35f967 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="a35f967" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4f1055f" data-id="4f1055f" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-07da9b6 animated-slow elementor-invisible elementor-widget elementor-widget-image" data-id="07da9b6" data-element_type="widget" data-settings='{"_animation":"fadeIn"}' data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img decoding="async" width="700" height="700" src="{{Storage::url('public/uploads/settings/'.setting('header_image'))}}" class="attachment-full size-full" sizes="(max-width: 700px) 100vw, 700px"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-b90200a" data-id="b90200a" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-5634cd7 has-primary-color big-title animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="5634cd7" data-element_type="widget" data-settings='{"_animation":"fadeInUp","_animation_delay":500}' data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h1 class="elementor-heading-title elementor-size-default">{{setting('title_home')}}</h1>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-82e6b4b animated-slow elementor-invisible elementor-widget elementor-widget-text-editor" data-id="82e6b4b" data-element_type="widget" data-settings='{"_animation":"fadeInUp","_animation_delay":600}' data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">{{setting('description_home')}}</div>
                                            </div>
                                            <div class="elementor-element elementor-element-d9026f4 default-btn animated-slow elementor-tablet-align-center elementor-invisible elementor-widget elementor-widget-button" data-id="d9026f4" data-element_type="widget" data-settings='{"_animation":"fadeInUp","_animation_delay":700}' data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a href="{{route('shop')}}" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                            <span class="elementor-button-content-wrapper">
                                                                <span class="elementor-button-text">Get Shop</span>
                                                            </span>
                                                        </a>
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
            </section>
     
            @include('frontend.home.product-main')
            @include('frontend.home.facts')
            
            <section class="elementor-section elementor-top-section elementor-element elementor-element-1d3f3a4 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1d3f3a4" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4c6e7d5" data-id="4c6e7d5" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-f5fc8f4 elementor-widget elementor-widget-spacer" data-id="f5fc8f4" data-element_type="widget" data-widget_type="spacer.default">
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
            <section class="elementor-section elementor-top-section elementor-element elementor-element-d0bdeed elementor-section-content-middle ico-box-1 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d0bdeed" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d135ede" data-id="d135ede" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-0b6e521 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0b6e521" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-4cc6632" data-id="4cc6632" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            @foreach($products->where('type', 3) as $product)
                                            @php
                                                $routeName = route('shop.single', ['slug' => str_replace(' ', '-', $product->name), 'product' => $product->id] );
                                            @endphp
                                            <div class="elementor-element elementor-element-d22edb7 elementor-position-left elementor-vertical-align-middle animated-slow elementor-invisible elementor-widget elementor-widget-image-box" data-id="d22edb7" data-element_type="widget" data-settings='{"_animation":"fadeInLeft","_animation_delay":500}' data-widget_type="image-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-image-box-wrapper">
                                                        <figure class="elementor-image-box-img">
                                                            <a href="{{$routeName}}">
                                                                <img loading="lazy" decoding="async" width="220" height="190" src="{{$product->icon_path}}" class="attachment-full size-full"/>
                                                            </a>
                                                        </figure>
                                                        <div class="elementor-image-box-content">
                                                            <h3 class="elementor-image-box-title"><a href="{{$routeName}}">{{$product->name}}</a></h3>
                                                            <p class="elementor-image-box-description">{{Str::words($product->main_description, 10, ' ....')}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-e5bf969" data-id="e5bf969" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-4c45b69 animated-slow elementor-invisible elementor-widget elementor-widget-image" data-id="4c45b69" data-element_type="widget" data-settings='{"_animation":"fadeIn"}' data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img loading="lazy" decoding="async" width="580" height="990" src="{{Storage::url('public/uploads/settings/'.setting('about_image'))}}" class="attachment-full size-full" alt=""/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-e375014" data-id="e375014" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-462baa5 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="462baa5" data-element_type="widget" data-settings='{"_animation":"fadeInRight","_animation_delay":600}' data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">{{setting('title_about')}}</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-c529b6a elementor-align-left animated-slow default-list elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-invisible elementor-widget elementor-widget-icon-list" data-id="c529b6a" data-element_type="widget" data-settings='{"_animation":"fadeInRight","_animation_delay":700}' data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <style>
                       
                                                    </style>
                                                        <div style="font-size:17px">
                                                            {!! setting('description_about') !!}
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
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-0c0bc16 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0c0bc16" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6d609a5" data-id="6d609a5" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-04a8e6c elementor-widget elementor-widget-spacer" data-id="04a8e6c" data-element_type="widget" data-widget_type="spacer.default">
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
            @include('frontend.home.products')
            <section class="elementor-section elementor-top-section elementor-element elementor-element-0a6c6c1 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0a6c6c1" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-540d567" data-id="540d567" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-51b9106 elementor-widget elementor-widget-spacer" data-id="51b9106" data-element_type="widget" data-widget_type="spacer.default">
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
            @include('frontend.home.blogs')
            @include('frontend.home.shots')
            
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-aa8da48 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="aa8da48"
                data-element_type="section"
            >
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ec874a3" data-id="ec874a3" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-c256b10 elementor-widget elementor-widget-spacer" data-id="c256b10" data-element_type="widget" data-widget_type="spacer.default">
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
        </div>
    </div>
</div>
@endsection
@push('css')
<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
@endpush