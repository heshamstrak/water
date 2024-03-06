@extends('frontend.index') @section('content')
<article id="post-112" class="post-112 post type-post status-publish format-standard has-post-thumbnail hentry category-protein category-uncategorized tag-healthy tag-warming blog-single-entry post-minimal">
	<!-- Post Header -->
	<div class="post-header">
		<!-- Entry Categories -->
		<div class="single-entry-categories">
			<a href="" rel="category tag">{{$blog->title}}</a>
		</div>
		<!-- Entry Categories -->
		<!-- Entry Date -->
		<div class="single-entry-date">{{date('d M Y',strtotime($blog->created_at))}}</div>
		<!-- Entry Date -->
	</div>
	<!-- Post Header -->

	<!-- Featured Image -->
	<div class="entry-thumb single-preview-img">
		<div class="blog-image">
			<img
				width="1440"
				height="1600"
				src="{{$blog->poster_path}}"
				class="attachment-full size-full wp-post-image"
				alt=""
				decoding="async"
				fetchpriority="high"
				sizes="(max-width: 1440px) 100vw, 1440px"
			/>
		</div>

		<!-- Post Format -->
		<div class="entry-format">
			<a class="ico-format" href=""></a>
		</div>
		<!-- Post Format -->
	</div>
	<!-- Featured Image -->
	<!-- Post Meta -->
	<div class="post-meta">
		<!-- Meta Left -->
		<div class="meta-left">
			<!-- Entry Author -->
			<div class="single-entry-author">
				<div class="meta-author-img">
					<img
						alt=""
						src="https://secure.gravatar.com/avatar/453a59a0552b87df037b3c87a0b2c562?s=40&amp;d=mm&amp;r=g"
						class="avatar avatar-40 photo"
						height="40"
						width="40"
						decoding="async"
					/>
				</div>
				<div class="meta-author-info">
					<span>Written by</span>
					<a href="#" title="View all posts by Admin">Admin</a>
				</div>
			</div>
			<!-- Entry Author -->
		</div>
		<!-- Meta Left -->
		<!-- Meta Right -->
        @php
            $routeName = route('blog', ['slug' => str_replace(' ', '-', $blog->title), 'blog' => $blog->id]);
        @endphp 
		<div class="meta-right">
			<!-- Entry Social Share -->
			<div class="single-entry-social-share">
				<div class="share">
					<i class="mfxicon-share-alt-square"></i>
					<ul class="mfx-share-list">
						<li>
							<a
								href="http://www.facebook.com/sharer.php?u={{$routeName}}"
								class="mfxicon-facebook"
								target="_blank"
							></a>
						</li>
						<li>
							<a
								href="http://twitter.com/share?url={{$routeName}}"
								class="mfxicon-twitter"
								target="_blank"
							></a>
						</li>
						<li><a href="http://plus.google.com/share?url={{$routeName}}" class="mfxicon-google" target="_blank"></a></li>
						<li>
							<a
								href="http://pinterest.com/pin/create/button/?url={{$routeName}}&amp;media={{$blog->poster_path}}"
								class="mfxicon-pinterest"
								target="_blank"
							></a>
						</li>
					</ul>
				</div>
			</div>
			<!-- Entry Social Share -->
		</div>
		<!-- Meta Right -->
	</div>
	<!-- Post Meta -->

	<!-- Post Dynamic -->

	<!-- Entry Content -->
	<div class="single-entry-body">
		<div data-elementor-type="wp-post" data-elementor-id="112" class="elementor elementor-112" data-elementor-settings="[]">
			<div class="elementor-section-wrap">
				<section class="elementor-section elementor-top-section elementor-element elementor-element-7f89a16 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7f89a16" data-element_type="section">
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-81808d0" data-id="81808d0" data-element_type="column">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-f188cae elementor-widget elementor-widget-text-editor" data-id="f188cae" data-element_type="widget" data-widget_type="text-editor.default">
									<div class="elementor-widget-container">
									{{$blog->description}}
									</div>
								</div>
								<div class="elementor-element elementor-element-0fd8fa5 elementor-widget elementor-widget-spacer" data-id="0fd8fa5" data-element_type="widget" data-widget_type="spacer.default">
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
	<!-- Entry Content -->

</article>
@endsection
@push('css')
<link rel="stylesheet" id="wpacu-combined-css-head-1" href="https://milmaa.wpengine.com/wp-content/cache/asset-cleanup/css/head-c49574b9d2f1ebaf7500c5f9db90bef478fce0d3.css" type="text/css" media="all" />
<link rel="stylesheet" id="woocommerce-smallscreen-css" href="https://milmaa.wpengine.com/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=6.2.2" type="text/css" media="only screen and (max-width: 768px)" />

<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/blog-detail.css')}}">

@endpush