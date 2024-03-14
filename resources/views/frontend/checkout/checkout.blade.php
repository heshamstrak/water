@extends('frontend.index') @section('content')

<div id="post-21" class="post-21 page type-page status-publish hentry">
    <div class="woocommerce">
        <div class="woocommerce-notices-wrapper"></div>
        <div class="woocommerce-checkout-header">
            <div class="woocommerce-notices-wrapper"></div>
        </div>
        <form name="checkout" method="post" class="checkout woocommerce-checkout" action="{{route('order')}}" enctype="multipart/form-data">
            @csrf @method('post')
            <div class="col2-set" id="customer_details">
                <div class="col-1">
                    <div class="woocommerce-billing-fields">
                        <h3>Check Out</h3>
                    </div>
                </div>
                <div class="col-2">
                    <div class="woocommerce-additional-fields">
                        <div class="woocommerce-additional-fields__field-wrapper">
                            <p class="form-row notes" id="order_comments_field" data-priority="">
                                <label for="order_comments" class="">Order notes&nbsp;<span class="optional">(optional)</span></label>
                                <span class="woocommerce-input-wrapper">
                                    <textarea name="notes" class="input-text" id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="5"></textarea>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="woocommerce-checkout-order-review-wrap">
                <h3 id="order_review_heading">Your order</h3>
                <div id="order_review" class="woocommerce-checkout-review-order">
                    <table class="shop_table woocommerce-checkout-review-order-table">
                        <tbody>
                            @foreach(auth()->user()->carts as $cart)
                            <tr class="cart_item">
                                <td class="product-name">
                                    <img fetchpriority="high" decoding="async" width="488" height="1000" src="{{ Storage::url('uploads/products/'.$cart->product_id.'/'.$cart->product->images->first()->image) }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"   />
                                    <div class="checkout-review-order-details">
                                        <span class="checkout-review-order-title">{{$cart->product->name . ' - ' . $cart->product->category->name}}{{ $cart->weight != null ? ', ' . $cart->weight->name : ''}}</span> <strong class="product-quantity">&times;&nbsp;{{$cart->quantity}}</strong>
                                        <div class="product-total">cart
                                            <span class="woocommerce-Price-amount amount">
                                                <bdi><span class="woocommerce-Price-currencySymbol"> EGP </span>{{$cart->price * $cart->quantity}}</bdi>
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td class="product-total">
                                    <span class="woocommerce-Price-amount amount">
                                        <bdi><span class="woocommerce-Price-currencySymbol"> EGP </span>{{$cart->price * $cart->quantity}}.00</bdi>
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="cart-subtotal">
                                <th>Subtotal</th>
                                <td>
                                    <span class="woocommerce-Price-amount amount">
                                        <bdi><span class="woocommerce-Price-currencySymbol"> EGP </span>{{$totalPrice}}</bdi>
                                    </span>
                                </td>
                            </tr>
                            <tr class="order-total">
                                <th>Total</th>
                                <td>
                                    <strong>
                                        <span class="woocommerce-Price-amount amount">
                                            <bdi><span class="woocommerce-Price-currencySymbol"> EGP </span>{{$totalPrice}}</bdi>
                                        </span>
                                    </strong>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    <div id="payment" class="woocommerce-checkout-payment" style="background: transparent;">
                        <button type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Place order" data-value="Place order">Place order</button>
                        <input type="hidden" id="woocommerce-process-checkout-nonce" name="woocommerce-process-checkout-nonce" value="cc1b0365b2" />
                        <input type="hidden" name="_wp_http_referer" value="/checkout/" />
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
@push('css')
<link rel='stylesheet' id='wp-block-library-css' href='https://milmaa.wpengine.com/wp-includes/css/dist/block-library/style.min.css?ver=6.4.3' type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-vendors-style-css' href='https://milmaa.wpengine.com/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-style.css?ver=6.7.3' type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-css' href='https://milmaa.wpengine.com/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-style.css?ver=6.7.3' type='text/css' media='all' />
<link rel='stylesheet' id='jquery-selectBox-css' href='https://milmaa.wpengine.com/wp-content/plugins/yith-woocommerce-wishlist/assets/css/jquery.selectBox.css?ver=1.2.0' type='text/css' media='all' />
<link rel='stylesheet' id='yith-wcwl-font-awesome-css' href='https://milmaa.wpengine.com/wp-content/plugins/yith-woocommerce-wishlist/assets/css/font-awesome.css?ver=4.7.0' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce_prettyPhoto_css-css' href='//milmaa.wpengine.com/wp-content/plugins/woocommerce/assets/css/prettyPhoto.css?ver=3.1.6' type='text/css' media='all' />
<link rel='stylesheet' id='yith-wcwl-main-css' href='https://milmaa.wpengine.com/wp-content/plugins/yith-woocommerce-wishlist/assets/css/style.css?ver=3.6.0' type='text/css' media='all' />
<link rel='stylesheet' id='select2-css' href='https://milmaa.wpengine.com/wp-content/plugins/woocommerce/assets/css/select2.css?ver=6.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-layout-css' href='https://milmaa.wpengine.com/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=6.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-smallscreen-css' href='https://milmaa.wpengine.com/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=6.2.2' type='text/css' media='only screen and (max-width: 768px)' />
<link rel='stylesheet' id='woocommerce-general-css' href='https://milmaa.wpengine.com/wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=6.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css' href='https://milmaa.wpengine.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.5.5' type='text/css' media='all' />
<link rel='stylesheet' id='milmaa-plus-elementor-css' href='https://milmaa.wpengine.com/wp-content/plugins/milmaa-plus/elementor/assets/css/elementor.css?ver=1.0.2' type='text/css' media='all' />
<link rel='stylesheet' id='milmaa-plus-common-css' href='https://milmaa.wpengine.com/wp-content/plugins/milmaa-plus/assets/css/common.css?ver=1.0.2' type='text/css' media='all' />
<link rel='stylesheet' id='milmaa-pro-widget-css' href='https://milmaa.wpengine.com/wp-content/plugins/milmaa-pro/assets/css/widget.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='bf420a116b69a7b8244224c70b72a816-css' href='//fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800,900&#038;subset=latin-ext' type='text/css' media='all' />
<link rel='stylesheet' id='e9a1e001934af7121d3283b538999bad-css' href='//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&#038;subset=latin-ext' type='text/css' media='all' />
<link rel='stylesheet' id='1d9aa0e7b7a043548d134f3d89fd753b-css' href='//fonts.googleapis.com/css?family=Merriweather:400&#038;subset=latin-ext' type='text/css' media='all' />
<link rel='stylesheet' id='61f180e65cb9280b339502ab077d40fc-css' href='//fonts.googleapis.com/css?family=Sen:400,700,800&#038;subset=latin-ext' type='text/css' media='all' />
<link rel='stylesheet' id='f562e241c1c8b24ab7a4dd36af4e492b-css' href='//fonts.googleapis.com/css?family=Lilita+One:400&#038;subset=latin-ext' type='text/css' media='all' />
<link rel='stylesheet' id='5d5cd0aadc8ea00aad005f6044700045-css' href='//fonts.googleapis.com/css?family=Sen:400&#038;subset=latin-ext' type='text/css' media='all' />
<link rel='stylesheet' id='milmaa-css' href='https://milmaa.wpengine.com/wp-content/themes/milmaa/style.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='milmaa-icons-css' href='https://milmaa.wpengine.com/wp-content/themes/milmaa/assets/css/icons.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='milmaa-base-css' href='https://milmaa.wpengine.com/wp-content/themes/milmaa/assets/css/base.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='milmaa-grid-css' href='https://milmaa.wpengine.com/wp-content/themes/milmaa/assets/css/grid.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='milmaa-layout-css' href='https://milmaa.wpengine.com/wp-content/themes/milmaa/assets/css/layout.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='milmaa-widget-css' href='https://milmaa.wpengine.com/wp-content/themes/milmaa/assets/css/widget.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='site-breadcrumb-css' href='https://milmaa.wpengine.com/wp-content/plugins/milmaa-plus/modules/breadcrumb/assets/css/breadcrumb.css?ver=6.4.3' type='text/css' media='all' />
<link rel='stylesheet' id='site-header-css' href='https://milmaa.wpengine.com/wp-content/plugins/milmaa-plus/modules/header/assets/css/header.css?ver=6.4.3' type='text/css' media='all' />
<link rel='stylesheet' id='site-loader-css' href='https://milmaa.wpengine.com/wp-content/plugins/milmaa-plus/modules/site-loader/layouts/loader-1/assets/css/loader-1.css?ver=1.0.2' type='text/css' media='all' />
<link rel='stylesheet' id='site-to-top-css' href='https://milmaa.wpengine.com/wp-content/plugins/milmaa-plus/modules/site-to-top/assets/css/totop.css?ver=1.0.2' type='text/css' media='all' />
<link rel='stylesheet' id='site-sidebar-css' href='https://milmaa.wpengine.com/wp-content/plugins/milmaa-pro/modules/sidebar/assets/css/sidebar.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='mfx-blog-css' href='https://milmaa.wpengine.com/wp-content/themes/milmaa/modules/blog/assets/css/blog.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='jquery-bxslider-css' href='https://milmaa.wpengine.com/wp-content/themes/milmaa/modules/blog/assets/css/jquery.bxslider.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='milmaa-breadcrumb-css' href='https://milmaa.wpengine.com/wp-content/themes/milmaa/modules/breadcrumb/assets/css/breadcrumb.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='milmaa-comments-css' href='https://milmaa.wpengine.com/wp-content/themes/milmaa/modules/comments/assets/css/comments.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='milmaa-footer-css' href='https://milmaa.wpengine.com/wp-content/themes/milmaa/modules/footer/assets/css/footer.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='milmaa-header-css' href='https://milmaa.wpengine.com/wp-content/themes/milmaa/modules/header/assets/css/header.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='milmaa-pagination-css' href='https://milmaa.wpengine.com/wp-content/themes/milmaa/modules/pagination/assets/css/pagination.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='milmaa-magnific-popup-css' href='https://milmaa.wpengine.com/wp-content/themes/milmaa/modules/post/assets/css/magnific-popup.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='milmaa-secondary-css' href='https://milmaa.wpengine.com/wp-content/themes/milmaa/modules/sidebar/assets/css/sidebar.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='milmaa-woo-css' href='https://milmaa.wpengine.com/wp-content/themes/milmaa/modules/woocommerce/assets/css/default.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='milmaa-plus-blog-css' href='https://milmaa.wpengine.com/wp-content/plugins/milmaa-plus/modules/blog/assets/css/blog.css?ver=1.0.2' type='text/css' media='all' />
<link rel='stylesheet' id='mfx-blog-archive-boxed-css' href='https://milmaa.wpengine.com/wp-content/plugins/milmaa-plus/modules/blog/templates/boxed/assets/css/blog-archive-boxed.css?ver=1.0.2' type='text/css' media='all' />
<link rel='stylesheet' id='dtplugin-nav-menu-animations-css' href='https://milmaa.wpengine.com/wp-content/plugins/milmaa-plus/modules/menu/assets/css/nav-menu-animations.css?ver=1.0.2' type='text/css' media='all' />
<link rel='stylesheet' id='dtplugin-nav-menu-css' href='https://milmaa.wpengine.com/wp-content/plugins/milmaa-plus/modules/menu/assets/css/nav-menu.css?ver=1.0.2' type='text/css' media='all' />
<link rel='stylesheet' id='milmaa-pro-blog-css' href='https://milmaa.wpengine.com/wp-content/plugins/milmaa-pro/modules/blog/assets/css/blog.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='jquery-select2-css' href='https://milmaa.wpengine.com/wp-content/themes/milmaa/assets/lib/select2/select2.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='milmaa-theme-css' href='https://milmaa.wpengine.com/wp-content/themes/milmaa/assets/css/theme.css?ver=1.0.0' type='text/css' media='all' />
<script type="text/javascript" src="https://milmaa.wpengine.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
<script type="text/javascript" src="https://milmaa.wpengine.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>


<link rel="stylesheet" href="{{asset('frontend/css/checkout.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

@endpush