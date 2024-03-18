<footer id="footer">
    <div class="container">
        <div id="footer-139" class="mfx-footer-tpl footer-139">
            <div data-elementor-type="wp-post" data-elementor-id="139" class="elementor elementor-139" data-elementor-settings="[]">
                <div class="elementor-section-wrap">
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-e1cf60c elementor-section-content-middle elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="e1cf60c"
                        data-element_type="section"
                        data-settings='{"stretch_section":"section-stretched","background_background":"classic"}'
                    >
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d4cde30" data-id="d4cde30" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-96949c8 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="96949c8"
                                        data-element_type="section"
                                    >
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6c78291" data-id="6c78291" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div
                                                        class="elementor-element elementor-element-b9239d5 elementor-align-left animated-slow footer-links elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                        data-id="b9239d5"
                                                        data-element_type="widget"
                                                        data-settings='{"_animation":"none","_animation_delay":700}'
                                                        data-widget_type="icon-list.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <ul class="elementor-icon-list-items">
                                                                <li class="elementor-icon-list-item">
                                                                    <a href="{{route('home')}}">
                                                                        <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-circle"></i> </span>
                                                                        <span class="elementor-icon-list-text">Home</span>
                                                                    </a>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <a href="{{route('shop')}}">
                                                                        <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-circle"></i> </span>
                                                                        <span class="elementor-icon-list-text">Shop</span>
                                                                    </a>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <a href="{{route('about')}}">
                                                                        <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-circle"></i> </span>
                                                                        <span class="elementor-icon-list-text">About</span>
                                                                    </a>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <a href="{{route('blog.index')}}">
                                                                        <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-circle"></i> </span>
                                                                        <span class="elementor-icon-list-text">Blog</span>
                                                                    </a>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <a href="{{route('contact')}}">
                                                                        <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-circle"></i> </span>
                                                                        <span class="elementor-icon-list-text">Contact</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
        
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-33d4e6d" data-id="33d4e6d" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-9115bf6 animated-slow elementor-widget elementor-widget-image" data-id="9115bf6" data-element_type="widget" data-settings='{"_animation":"none","_animation_delay":700}' data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <img src="{{Storage::url('public/uploads/settings/'.setting('footer_logo_image'))}}" title="" alt="logo" />
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-6a2aaaf animated-slow elementor-widget elementor-widget-heading" data-id="6a2aaaf" data-element_type="widget" data-settings='{"_animation":"none","_animation_delay":800}' data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2 class="elementor-heading-title elementor-size-default">Follow Us:</h2>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-043a2ea elementor-shape-circle footer-social animated-slow e-grid-align-tablet-left elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons" data-id="043a2ea" data-element_type="widget" data-settings='{"_animation":"none","_animation_delay":900}' data-widget_type="social-icons.default">
                                                        <div class="elementor-widget-container">
                                
                                                            <div class="elementor-social-icons-wrapper elementor-grid">

                                                                @if(setting('facebook') != null)
                                                                <span class="elementor-grid-item">
                                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-be9923c" href="{{setting('facebook')}}" target="_blank">
                                                                        <span class="elementor-screen-only">Facebook</span>
                                                                        <i class="fab fa-facebook"></i>
                                                                    </a>
                                                                </span>
                                                                @endif
                                                                @if(setting('facebook') != null)
                                                                <span class="elementor-grid-item">
                                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-7103459" href="{{setting('twitter')}}" target="_blank">
                                                                        <span class="elementor-screen-only">Twitter</span>
                                                                        <i class="fab fa-twitter"></i>
                                                                    </a>
                                                                </span>
                                                                @endif
                                                                @if(setting('facebook') != null)
                                                                <span class="elementor-grid-item">
                                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin elementor-repeater-item-1a7e1fa" href="{{setting('linkedin')}}" target="_blank">
                                                                        <span class="elementor-screen-only">Linkedin</span>
                                                                        <i class="fab fa-linkedin"></i>
                                                                    </a>
                                                                </span>
                                                                @endif
                                                                @if(setting('facebook') != null)
                                                                <span class="elementor-grid-item">
                                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-12d0085" href="{{setting('instagram')}}" target="_blank">
                                                                        <span class="elementor-screen-only">Instagram</span>
                                                                        <i class="fab fa-instagram"></i>
                                                                    </a>
                                                                </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-e50dae3" data-id="e50dae3" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-d4f7429 animated-slow elementor-widget elementor-widget-text-editor" data-id="d4f7429" data-element_type="widget" data-settings='{"_animation":"none","_animation_delay":700}' data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            {{setting('address')}}
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-5ac8d63 animated-slow elementor-widget elementor-widget-text-editor" data-id="5ac8d63" data-element_type="widget" data-settings='{"_animation":"none","_animation_delay":700}' data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">Call us: <strong>{{setting('phone')}}</strong></div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-ac83ba4 animated-slow elementor-widget elementor-widget-text-editor" data-id="ac83ba4" data-element_type="widget" data-settings='{"_animation":"none","_animation_delay":700}' data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <a href="mailto:{{setting('email')}}">{{setting('email')}}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-c305448 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c305448" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-0f4cc35" data-id="0f4cc35" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-b48c336 animated-slow elementor-widget elementor-widget-text-editor" data-id="b48c336" data-element_type="widget" data-settings='{"_animation":"none","_animation_delay":900}' data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">© <a href="https://thetailorsdev.com">The Tailors Dev</a> 2024</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</footer>