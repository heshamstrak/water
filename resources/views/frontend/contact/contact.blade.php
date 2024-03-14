@extends('frontend.index') @section('content')

<div id="post-1862" class="post-1862 page type-page status-publish hentry">
	<div data-elementor-type="wp-page" data-elementor-id="1862" class="elementor elementor-1862" data-elementor-settings="[]">
		@if (session('success'))
		<div class="woocommerce-notices-wrapper">
			<div class="woocommerce-message" role="alert"> {{session('success')}}</div>
		</div>
		@endif
		<div class="elementor-section-wrap">
			<section
				class="elementor-section elementor-top-section elementor-element elementor-element-f0fbbf9 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
				data-id="f0fbbf9"
				data-element_type="section"
			>
				<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-ee08579" data-id="ee08579" data-element_type="column">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-72ab736 has-primary-color big-title animated-slow elementor-widget elementor-widget-heading" data-id="72ab736" data-element_type="widget" data-settings='{"_animation":"none","_animation_delay":500}' data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h2 class="elementor-heading-title elementor-size-default">Come visit us</h2>
								</div>
							</div>
							<section class="elementor-section elementor-inner-section elementor-element elementor-element-b4bd2ef elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b4bd2ef" data-element_type="section">
								<div class="elementor-container elementor-column-gap-default">
									<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-9523308" data-id="9523308" data-element_type="column">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-5d01b15 elementor-widget elementor-widget-text-editor" data-id="5d01b15" data-element_type="widget" data-widget_type="text-editor.default">
												<div class="elementor-widget-container">
													<style>
														.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:#818a91;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap{color:#818a91;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor .elementor-drop-cap-letter{display:inline-block}
													</style>
													<strong>{{setting('address')}}</strong>
												</div>
											</div>
										</div>
									</div>
									<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-64ad4e8 elementor-hidden-tablet elementor-hidden-mobile_extra elementor-hidden-mobile" data-id="64ad4e8" data-element_type="column">
										<div class="elementor-widget-wrap"></div>
									</div>
								</div>
							</section>
							<div class="elementor-element elementor-element-f2fe26e elementor-widget elementor-widget-shortcode" data-id="f2fe26e" data-element_type="widget" data-widget_type="shortcode.default">
								<div class="elementor-widget-container">
									<div class="elementor-shortcode">
										<div role="form" class="wpcf7" id="wpcf7-f21997-p1862-o1" lang="en-US" dir="ltr">
											<div class="screen-reader-response">
												<p role="status" aria-live="polite" aria-atomic="true"></p>
												<ul></ul>
											</div>
											<form action="{{route('contact.store')}}" method="post" class="wpcf7-form cnt-form init" novalidate="novalidate" data-status="init">
                                                @csrf @method('post')
												<p>
													<span class="wpcf7-form-control-wrap text-671">
														<input type="text" name="name" value="{{old('name')}}" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Name" />
													</span>
													<br />
													<span class="wpcf7-form-control-wrap email-678">
														<input
															type="email"
															name="email"
															value="{{old('email')}}"
															size="40"
															class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
															aria-required="true"
															aria-invalid="false"
															placeholder="Email"
														/>
													</span>
													<br />
													<span class="wpcf7-form-control-wrap tel-99">
														<input type="tel" name="phone" value="{{old('phone')}}" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel" aria-invalid="false" placeholder="Phone" />
													</span>
													<br />
													<span class="wpcf7-form-control-wrap textarea-152">
														<textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message">{{old('message')}}</textarea>
													</span>
													<br />
													<input type="submit" value="Submit" class="wpcf7-form-control has-spinner wpcf7-submit" /><span class="wpcf7-spinner"></span>
												</p>
                                                @if (session('success'))
                                                <div class="woocommerce-notices-wrapper">
                                                    <div class="woocommerce-message" role="alert">{{session('success')}}</div>
                                                </div>
                                                @endif
												<div class="wpcf7-response-output" aria-hidden="true"></div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div
						class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-a315156 elementor-hidden-tablet elementor-hidden-mobile_extra elementor-hidden-mobile"
						data-id="a315156"
						data-element_type="column"
					>
						<div class="elementor-widget-wrap"></div>
					</div>
					<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-bdf5d16" data-id="bdf5d16" data-element_type="column">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-8b7a73e animated-slow elementor-widget elementor-widget-image animated fadeIn" data-id="8b7a73e" data-element_type="widget" data-settings='{"_animation":"fadeIn"}' data-widget_type="image.default">
								<div class="elementor-widget-container">
									<img decoding="async" width="654" height="865" src="{{Storage::url('public/uploads/settings/'.setting('contact_image'))}}" class="attachment-full size-full" sizes="(max-width: 654px) 100vw, 654px"/>
								</div>
							</div>
					
						</div>
					</div>
				</div>
			</section>
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

		</div>
	</div>
</div>

@endsection
@push('css')
<link rel="stylesheet" id="wpacu-combined-css-head-1" href="https://milmaa.wpengine.com/wp-content/cache/asset-cleanup/css/head-66ee7584b20a253bfb187308e073d9c1f7440f66.css" type="text/css" media="all" />
<link rel="stylesheet" id="woocommerce-smallscreen-css" href="https://milmaa.wpengine.com/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=6.2.2" type="text/css" media="only screen and (max-width: 768px)" />


<link rel="stylesheet" href="{{asset('frontend/css/contact-us.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

@endpush