@extends('frontend.common.layout')

@section('content')

<section class="page_breadcrumbs cs background_cover section_padding_top_40 section_padding_bottom_40">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>Cart</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="./">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#">Gallery</a>
                    </li>
                    <li class="active">Gallery Right Sidebar 2 columns</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="ls section_padding_top_100 section_padding_bottom_75">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">

                <div class="table-responsive">
                    <table class="table shop_table cart cart-table">
                        <thead>
                            <tr>
                                <td class="product-info">Product</td>
                                <td class="product-price-td">Price</td>
                                <td class="product-quantity">Quantity</td>
                                <td class="product-subtotal">Subtotal</td>
                                <td class="product-remove">&nbsp;</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="cart_item">
                                <td class="product-info">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="product-right.html">
                                                <img class="media-object cart-product-image" src="images/shop/01.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">
                                                <a href="product-right.html">At vero eos et accusam</a>
                                            </h4>
                                            <span class="grey">Color:</span> Black
                                            <br>
                                            <span class="grey">Size:</span> M
                                        </div>
                                    </div>
                                </td>
                                <td class="product-price">
                                    <span class="currencies">$</span>
                                    <span class="amount">199.00</span>
                                </td>
                                <td class="product-quantity">
                                    <div class="quantity">
                                        <input type="button" value="-" class="minus">
                                        <input type="number" step="1" min="0" name="product_quantity" value="1" title="Qty" class="form-control">
                                        <input type="button" value="+" class="plus">
                                    </div>
                                </td>
                                <td class="product-subtotal">
                                    <span class="currencies">$</span>
                                    <span class="amount">199.00</span>
                                </td>
                                <td class="product-remove">
                                    <a href="#" class="remove fontsize_20" title="Remove this item">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr class="cart_item">
                                <td class="product-info">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="product-right.html">
                                                <img class="media-object cart-product-image" src="images/shop/02.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">
                                                <a href="product-right.html">Justo duo dolores et ea rebum</a>
                                            </h4>
                                            <span class="grey">Size:</span> XL
                                        </div>
                                    </div>
                                </td>
                                <td class="product-price">
                                    <span class="currencies">$</span>
                                    <span class="amount">100.00</span>
                                </td>
                                <td class="product-quantity">
                                    <div class="quantity">
                                        <input type="button" value="-" class="minus">
                                        <input type="number" step="1" min="0" name="product_quantity" value="1" title="Qty" class="form-control">
                                        <input type="button" value="+" class="plus">
                                    </div>
                                </td>
                                <td class="product-subtotal">
                                    <span class="currencies">$</span>
                                    <span class="amount">100.00</span>
                                </td>
                                <td class="product-remove">
                                    <a href="#" class="remove fontsize_20" title="Remove this item">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="cart-buttons">
                    <a class="theme_button" href="#">Countinue Shopping</a>

                    <input type="submit" class="theme_button color1" name="update_cart" value="Update Cart">

                    <button type="submit" class="theme_button color2">Proceed to Checkout</button>
                </div>

                <div class="cart-collaterals">
                    <div class="cart_totals">
                        <h4>Cart Totals</h4>
                        <table class="table">
                            <tbody>
                                <tr class="cart-subtotal">
                                    <td>Cart Subtotal</td>
                                    <td>
                                        <span class="currencies">$</span>
                                        <span class="amount">299.00</span>
                                    </td>
                                </tr>
                                <tr class="shipping">
                                    <td>Shipping and Handling</td>
                                    <td>
                                        Free Shipping
                                    </td>
                                </tr>
                                <tr class="order-total">
                                    <td class="grey">Order Total</td>
                                    <td>
                                        <strong class="grey">
                                            <span class="currencies">$</span>
                                            <span class="amount">299.00</span>
                                        </strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="coupon with_padding_small with_background">
                            <h3 class="topmargin_0">Discount Codes</h3>
                            <p>Enter coupon code if you have one</p>
                            <div class="form-group">
                                <label class="sr-only" for="coupon_code">Coupon:</label>
                                <input type="text" name="coupon_code" class="form-control" id="coupon_code" value="" placeholder="Coupon code">
                            </div>
                            <a class="theme_button" href="#">Apply Coupon</a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="shipping-calculator-form with_padding_small with_background">
                            <h3 class="topmargin_0">Shipping &amp; Tax</h3>
                            <p>Enter destination to get shipping</p>
                            <div class="form-group">
                                <select name="calc_shipping_country" id="calc_shipping_country" class="country_to_state form-control">
                                    <option value="">Select a country…</option>
                                    <option value="AX">Åland Islands</option>
                                    <option value="OM">Oman</option>
                                    <option value="GB" selected="selected">United Kingdom (UK)</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" value="" placeholder="State / county" name="calc_shipping_state" id="calc_shipping_state">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" value="" placeholder="Postcode / Zip" name="calc_shipping_postcode" id="calc_shipping_postcode">
                            </div>
                            <div>
                                <button type="submit" name="calc_shipping" class="theme_button" value="1">Update Totals</button>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!--eof .col-sm-8 (main content)-->


        </div>
    </div>
</section>

@endsection
