@extends('frontend.index') @section('content')
<div id="post-22239" class="post-22239 page type-page status-publish hentry">
	<div data-elementor-type="wp-page" data-elementor-id="22239" class="elementor elementor-22239" data-elementor-settings="[]">
		<div class="elementor-section-wrap">
			<section
				class="elementor-section elementor-top-section elementor-element elementor-element-3e00060 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
				data-id="3e00060"
				data-element_type="section"
			>
				<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0f92381" data-id="0f92381" data-element_type="column">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-82e19a3 elementor-widget elementor-widget-mfx-blog-posts" data-id="82e19a3" data-element_type="widget" data-widget_type="mfx-blog-posts.default">
								<div class="elementor-widget-container">
									<div class="mfx-posts-list-wrapper">
										<div class="tpl-blog-holder apply-isotope" style="position: relative; height: 1560px;">
											<div class="grid-sizer entry-grid-layout mfx-boxed-style mfx-scalein-hover mfx-bt-gradient-overlay alignnone column mfx-one-third mfx-post-entry" style="position: absolute; left: 0px; top: 0px;"></div>
                                            @foreach ($blogs as $blog)
                                            @php
                                                $routeName = route('blog', ['slug' => str_replace(' ', '-', $blog->title), 'blog' => $blog->id]);
                                            @endphp 
                                            <div class="entry-grid-layout mfx-boxed-style mfx-scalein-hover mfx-bt-gradient-overlay alignnone column mfx-one-third mfx-post-entry" style="position: absolute; left: 0px; top: 0px;">
                                                <article id="post-22092" class="post-22092 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized blog-entry">
                                                    <!-- Featured Image -->
                                                    <div class="entry-thumb">
                                                        <a href="{{$routeName}}" title="{{$blog->title}}">
                                                            <img fetchpriority="high" decoding="async" width="1440" height="1600" src="{{$blog->poster_path}}" class="attachment-mfx-blog-iii-column size-mfx-blog-iii-column wp-post-image" sizes="(max-width: 1440px) 100vw, 1440px"/>
                                                        </a>
                                                    </div>
                                                    <!-- Featured Image -->
                                                    <!-- Entry Date -->
                                                    <div class="entry-date"><i class="mfxicon-calendar"> </i>{{date('d M Y',strtotime($blog->created_at))}}</div>
                                                    <!-- Entry Date -->
                                                    <!-- Entry Title -->
                                                    <div class="entry-title">
                                                        <h4>
                                                            <a href="{{$routeName}}" title="{{$blog->title}}">
                                                                {{$blog->title}}
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <!-- Entry Title -->
                                                    <div class="entry-body"><p>{{Str::words($blog->description, 30, ' ....')}}</p></div>
                                                </article>
                                            </div>
                                            @endforeach
                                    
										</div>
										<div class="pagination blog-pagination">
											<div class="column one pager_wrapper">
												{{ $blogs->links() }}
											</div>
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

@endsection @push('css')
<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" />
<link rel="stylesheet" href="{{asset('frontend/css/blog.css')}}" />
@endpush
