@extends('layout')
@section('body') <body class="full-width grid-view columns-4 archive woocommerce-page"> @endsection
@section('content')
    <div id="content" class="site-content" tabindex="-1">
        <div class="col-full">

            <div id="primary" class="content-area">
                <main id="main" class="site-main" >
                    <div class="columns-4">
                        <ul class="products">
                            <li class="product first">
                                <div class="product-outer">
                                    <div class="product-inner">
                                        <div class="product-image-wrapper">
                                            <a href="{{route('single')}}" class="woocommerce-LoopProduct-link">
                                                <img src="assets/images/products/p1.jpg" class="img-responsive" alt="">
                                            </a>
                                        </div>
                                        <div class="product-content-wrapper">
                                            <a href="{{route('single')}}" class="woocommerce-LoopProduct-link">
                                                <h3>Pepperoni Pizza</h3>
                                                <div itemprop="description">
                                                    <p style="max-height: none;">Extra-virgin olive oil, garlic, mozzarella, mushrooms and olives.</p>
                                                </div>
                                                <div  class="yith_wapo_groups_container">
                                                    <div  class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                                        <h3><span>Pick Size</span></h3>
                                                        <div class="ywapo_input_container ywapo_input_container_radio">

                                                            <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">22 cm</span></span>
                                                            <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>19</span></span>
                                                        </div>
                                                        <div class="ywapo_input_container ywapo_input_container_radio">

                                                            <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">29 cm</span></span>
                                                            <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>25</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="hover-area">
                                                <a rel="nofollow" href="{{route('single')}}" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.product-outer -->
                            </li>
                            <!-- /.products -->
                        </ul>
                    </div>

                </main>
                <!-- #main -->
            </div>
            <!-- #primary -->
        </div>
        <!-- .col-full -->
    </div>

@endsection
