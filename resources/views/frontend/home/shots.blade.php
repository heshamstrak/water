<section class="elementor-section elementor-top-section elementor-element elementor-element-33fd3d7 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="33fd3d7" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1c4093d" data-id="1c4093d" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-1778a67 elementor-widget elementor-widget-spacer" data-id="1778a67" data-element_type="widget" data-widget_type="spacer.default">
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
<section class="elementor-section elementor-top-section elementor-element elementor-element-4257b6f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4257b6f" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d3049f7" data-id="d3049f7" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-9b19641 has-primary-color big-title animated-slow elementor-widget elementor-widget-heading" data-id="9b19641" data-element_type="widget" data-settings='{"_animation":"none","_animation_delay":500}' data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">{{setting('title_shots')}}</h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-e2a7277 gallery-spacing-custom elementor-widget elementor-widget-image-gallery" data-id="e2a7277" data-element_type="widget" data-widget_type="image-gallery.default">
                    <div class="elementor-widget-container">
                        <style>
                          
                        </style>
                        <div class="elementor-image-gallery">
                            <div id="gallery-1" class="gallery galleryid-7 gallery-columns-4 gallery-size-shop_catalog">
                                @foreach ($galleries as $key => $gallery)
                                    <figure class="gallery-item">
                                        <div class="gallery-icon portrait">
                                            <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="e2a7277" data-elementor-lightbox-title="gallery-{{$key+1}}" href="{{$gallery->image_path}}">
                                                <img loading="lazy" decoding="async" width="1000" height="1000" src="{{$gallery->image_path}}" class="attachment-shop_catalog size-shop_catalog" sizes="(max-width: 1000px) 100vw, 1000px" />
                                            </a>
                                        </div>
                                    </figure>
                                @endforeach
                      
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-7aa5705 elementor-widget elementor-widget-heading" data-id="7aa5705" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default"><a href="{{route('contact')}}">follow us @water</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>