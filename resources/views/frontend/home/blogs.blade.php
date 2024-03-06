<section class="elementor-section elementor-top-section elementor-element elementor-element-963eda4 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="963eda4" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-24ce4dc" data-id="24ce4dc" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-784e7ed has-primary-color big-title animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="784e7ed" data-element_type="widget" data-settings='{"_animation":"fadeIn","_animation_delay":500}' data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">Our Blog</h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-41cd351 elementor-widget elementor-widget-spacer" data-id="41cd351" data-element_type="widget" data-widget_type="spacer.default">
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
<section class="elementor-section elementor-top-section elementor-element elementor-element-129718d elementor-section-full_width elementor-section-stretched home-blog elementor-section-height-default elementor-section-height-default" data-id="129718d" data-element_type="section" data-settings='{"stretch_section":"section-stretched"}'>
    <div class="elementor-container elementor-column-gap-no">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e8a8f7c" data-id="e8a8f7c" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <section class="elementor-section elementor-inner-section elementor-element elementor-element-61c21a1 elementor-section-full_width mfx-section-wrap-col elementor-section-height-default elementor-section-height-default" data-id="61c21a1" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                        @foreach ($blogs as $blog)
                        @php
                            $routeName = route('blog', ['slug' => str_replace(' ', '-', $blog->title), 'blog' => $blog->id]);
                        @endphp 
                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-29f2d18" data-id="29f2d18" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-b9cd3e9 animated-slow elementor-invisible elementor-widget elementor-widget-mfx-blog-posts" data-id="b9cd3e9" data-element_type="widget" data-settings='{"_animation":"fadeIn"}' data-widget_type="mfx-blog-posts.default">
                                    <div class="elementor-widget-container">
                                        <div class="mfx-posts-list-wrapper">
                                            <div class="tpl-blog-holder apply-isotope">
                                                <div class="grid-sizer entry-grid-layout mfx-boxed-style mfx-scalein-hover mfx-bt-gradient-overlay alignnone column mfx-one-column mfx-post-entry"></div>
                                                <div class="entry-grid-layout mfx-boxed-style mfx-scalein-hover mfx-bt-gradient-overlay alignnone column mfx-one-column mfx-post-entry">
                                                    <article id="post-22092" class="post-22092 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized blog-entry">
                                                        <!-- Featured Image -->
                                                        <div class="entry-thumb">
                                                            <a href="{{$routeName}}" title="{{$blog->title}}">
                                                                <img
                                                                    loading="lazy"
                                                                    decoding="async"
                                                                    width="1440"
                                                                    height="1600"
                                                                    src="{{$blog->poster_path}}"
                                                                    class="attachment-full size-full wp-post-image"
                                                                    sizes="(max-width: 1440px) 100vw, 1440px"
                                                                />
                                                            </a>
                                                        </div>
                                                        <!-- Featured Image -->
                                                        <!-- Entry Date -->
                                                        <div class="entry-date"><i class="mfxicon-calendar"> </i>{{date('d M Y',strtotime($blog->created_at))}}</div>
                                                        <!-- Entry Date -->
                                                        <!-- Entry Title -->
                                                        <div class="entry-title">
                                                            <h4>
                                                                <a href="{{$routeName}}" title="{{$blog->title}}">{{$blog->title}}</a>
                                                            </h4>
                                                        </div>
                                                        <!-- Entry Title -->
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
               
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>