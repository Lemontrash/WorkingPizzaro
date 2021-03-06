@extends('layout')
@section('body') <body class="woocommerce-cart"> @endsection
@section('content')
    <div id="content" class="site-content" tabindex="-1" >
        <div class="col-full">
            <div class="pizzaro-breadcrumb">
                <nav class="woocommerce-breadcrumb" >
                    <a href="index.html">Home</a>
                    <span class="delimiter"><i class="po po-arrow-right-slider"></i></span>Cart
                </nav>
            </div>
            <!-- .woocommerce-breadcrumb -->
            <div id="primary" class="content-area">
                <main id="main" class="site-main" >
                    <div class="pizzaro-order-steps">
                        <ul>
                            <li class="cart">
                                <span class="step">1</span>Shopping Cart
                            </li>
                            <li class="checkout">
                                <span class="step">2</span>Checkout
                            </li>
                            <li class="complete">
                                <span class="step">3</span>Order Complete
                            </li>
                        </ul>
                    </div>
                    <div id="post-8" class="post-8 page type-page status-publish hentry">
                        <div class="entry-content">
                            <div class="woocommerce">
                                <form>
                                    <table class="shop_table shop_table_responsive cart" >
                                        <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-thumbnail">&nbsp;</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="cart_item">
                                            <td class="product-remove">
                                                <a href="#" class="remove" >&times;</a>
                                            </td>
                                            <td class="product-thumbnail">
                                                <a href="single-product-v1.html">
                                                    <img width="180" height="180" src="assets/images/products/1.png" alt=""/>
                                                </a>
                                            </td>
                                            <td class="product-name" data-title="Product">
                                                <a href="single-product-v1.html">Bacon Burger</a>
                                                <dl class="variation">
                                                    <dt class="variation-Baseprice">Base price:</dt>
                                                    <dd class="variation-Baseprice">
                                                        <p><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>0.00</span></p>
                                                    </dd>
                                                    <dt class="variation-PickSizespanclasswoocommerce-Price-amountamountspanclasswoocommerce-Price-currencySymbol36span2590span">Pick Size ( <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>25.90</span> ):
                                                    </dt>
                                                    <dd class="variation-PickSizespanclasswoocommerce-Price-amountamountspanclasswoocommerce-Price-currencySymbol36span2590span">
                                                        <p>29  cm</p>
                                                    </dd>
                                                </dl>
                                            </td>
                                            <td class="product-price" data-title="Price">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>25.90</span>
                                            </td>
                                            <td class="product-quantity" data-title="Quantity">
                                                <div class="qty-btn">
                                                    <label>Quantity</label>
                                                    <div class="quantity">
                                                        <input type="number" value="1" title="Qty" class="input-text qty text"/>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="product-subtotal" data-title="Total">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>25.90</span>
                                            </td>
                                        </tr>
                                        <tr class="cart_item">
                                            <td class="product-remove">
                                                <a href="#" class="remove">&times;</a>
                                            </td>
                                            <td class="product-thumbnail">
                                                <a href="single-product-v1.html">
                                                    <img width="180" height="180" src="assets/images/products/2.jpg" alt="" />
                                                </a>
                                            </td>
                                            <td class="product-name" data-title="Product">
                                                <a href="single-product-v1.html">Pepperoni Pizza</a>
                                                <dl class="variation">
                                                    <dt class="variation-Baseprice">Base price:</dt>
                                                    <dd class="variation-Baseprice">
                                                        <p><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>0.00</span></p>
                                                    </dd>
                                                    <dt class="variation-PickSizespanclasswoocommerce-Price-amountamountspanclasswoocommerce-Price-currencySymbol36span2590span">Pick Size ( <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>25.90</span> ):
                                                    </dt>
                                                    <dd class="variation-PickSizespanclasswoocommerce-Price-amountamountspanclasswoocommerce-Price-currencySymbol36span2590span">
                                                        <p>29  cm</p>
                                                    </dd>
                                                </dl>
                                            </td>
                                            <td class="product-price" data-title="Price">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>25.90</span>
                                            </td>
                                            <td class="product-quantity" data-title="Quantity">
                                                <div class="qty-btn">
                                                    <label>Quantity</label>
                                                    <div class="quantity">
                                                        <input type="number"  value="1" title="Qty" class="input-text qty text" size="4" />
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="product-subtotal" data-title="Total">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>25.90</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" class="actions">
                                                <div class="coupon">
                                                    <label for="coupon_code">Coupon:</label>
                                                    <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code" />
                                                    <input type="submit" class="button" name="apply_coupon" value="Apply Coupon" />
                                                </div>
                                                <input type="submit" class="button" name="update_cart" value="Update Cart" />
                                                <div class="wc-proceed-to-checkout">
                                                    <a href="{{route('checkout')}}" class="checkout-button button alt wc-forward">Proceed to Checkout</a>
                                                </div>
                                                <input type="hidden" id="_wpnonce" name="_wpnonce" value="21ca9d92f8" /><input type="hidden" name="_wp_http_referer" value="/pizzaro/cart/" />
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </form>
                                <div class="cart-collaterals">
                                    <div class="cart_totals ">
                                        <h2>Cart Totals</h2>
                                        <table  class="shop_table shop_table_responsive">
                                            <tr class="cart-subtotal">
                                                <th>Subtotal</th>
                                                <td data-title="Subtotal">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>51.80</span>
                                                </td>
                                            </tr>
                                            <tr class="order-total">
                                                <th>Total</th>
                                                <td data-title="Total">
                                                    <strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>51.80</span></strong>
                                                </td>
                                            </tr>
                                        </table>
                                        <div class="wc-proceed-to-checkout">
                                            <a href="{{route('checkout')}}" class="checkout-button button alt wc-forward">Proceed to Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .entry-content -->
                </main><!-- #main -->
            </div>
            <!-- #post-## -->

        </div>
        <!-- #primary -->
    </div>
    <!-- .col-full -->
    </div>
@endsection
