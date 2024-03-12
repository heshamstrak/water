<section class="elementor-section elementor-top-section elementor-element elementor-element-f0fbbf9 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f0fbbf9" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ee08579" data-id="ee08579" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-94c2264 elementor-widget elementor-widget-spacer" data-id="94c2264" data-element_type="widget" data-widget_type="spacer.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-spacer">
                            <div class="elementor-spacer-inner"></div>
                        </div>
                    </div>
                </div>
                <section class="elementor-section elementor-inner-section elementor-element elementor-element-97b89ac elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="97b89ac" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-bce84eb" data-id="bce84eb" data-element_type="column">
                            <div class="elementor-widget-wrap"></div>
                        </div>
                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-dbdab65" data-id="dbdab65" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-72ab736 has-primary-color big-title animated-slow elementor-widget elementor-widget-heading" data-id="72ab736" data-element_type="widget" data-settings='{"_animation":"none","_animation_delay":500}' data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">{{setting('main_title_product')}}</h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-60420e7 elementor-widget elementor-widget-spacer" data-id="60420e7" data-element_type="widget" data-widget_type="spacer.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-spacer">
                                            <div class="elementor-spacer-inner"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-4b51c0c" data-id="4b51c0c" data-element_type="column">
                            <div class="elementor-widget-wrap"></div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-acef86b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="acef86b" data-element_type="section">
    <div class="elementor-container elementor-column-gap-no">
        @foreach($products->where('type', 2) as $key => $product)
        @php
            $routeName = route('shop.single', ['slug' => str_replace(' ', '-', $product->name), 'product' => $product->id] );
        @endphp
        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-639d5db mfx-custom-image-caption" data-id="639d5db" data-element_type="column" style="background-color: #62b7d6">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-5a84dd2 animated-slow elementor-invisible elementor-widget elementor-widget-image" data-id="5a84dd2" data-element_type="widget" data-settings='{"_animation":"fadeIn"}' data-widget_type="image.default">
                    <div class="elementor-widget-container">
                        <figure class="wp-caption">
                            <img loading="lazy" decoding="async" width="500" height="500" src="{{$product->image_path}}" class="attachment-full size-full" alt="intro-img-1" sizes="(max-width: 500px) 100vw, 500px"/>
                            <figcaption class="widget-image-caption wp-caption-text">{{$key+1}}</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="elementor-element elementor-element-9048f95 animated-slow elementor-widget elementor-widget-heading" data-id="9048f95" data-element_type="widget" data-settings='{"_animation":"none"}' data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h5 class="elementor-heading-title elementor-size-default"><a href="{{$routeName}}">{{$product->name}}</a></h5>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>