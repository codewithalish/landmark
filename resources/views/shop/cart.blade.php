@extends('layouts.masterPages.landmark')
@section('content')

<div id="main">
    <div class="section pt-7 pb-7">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title mb-2">
                        <div class="wrap-title">
                            <h3 class="title">
                                <span class="first-word">سبد خرید</span>
                            </h3>
                        </div>
                    </div>
                    <div class="commerce-cart">
                        <table class="shop-table" cellspacing="0">
                            <thead>
                            <tr>
                                <th class="product-remove">حذف</th>
                                <th class="product-thumbnail">تصویر</th>
                                <th class="product-name">محصول</th>
                                <th class="product-price">قیمت</th>
                                <th class="product-quantity">تعداد</th>
                                <th class="product-subtotal">جمع</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="product-remove">
                                    <a href="#" class="remove" title="حذف این آیتم">
                                        <i class="ion-close"></i>
                                    </a>
                                </td>
                                <td class="product-thumbnail">
                                    <a href="shop-detail.html">
                                        <img src="images/shop/shop_5.jpg" alt="">
                                    </a>
                                </td>
                                <td class="product-name" data-title="محصول">
                                    <a href="shop-detail.html">لورم ایپسوم متن</a>
                                </td>
                                <td class="product-price" data-title="قیمت">600,000 تومان</td>
                                <td class="product-quantity" data-title="تعداد">
                                    <div class="quantity">
                                        <div class="quantity-attr">
                                            <button class="qty-decrease" onclick="var qty_el = document.getElementById('quantity'); var qty = qty_el.value; if( !isNaN( qty ) && qty > 1 ) qty_el.value--;return false;" type="button"><i class="fa fa-angle-down"></i></button>
                                            <input id="quantity" type="text" step="1" min="1" max="" name="quantity" value="1" title="تعداد" class="input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric">
                                            <button class="qty-increase" onclick="var qty_el = document.getElementById('quantity'); var qty = qty_el.value; if( !isNaN( qty )) qty_el.value++;return false;" type="button"><i class="fa fa-angle-up"></i></button>
                                        </div>
                                    </div>
                                </td>
                                <td class="product-subtotal" data-title="جمع">600,000 تومان</td>
                            </tr>

                            <tr>
                                <td class="product-remove">
                                    <a href="#" class="remove" title="حذف این آیتم">
                                        <i class="ion-close"></i>
                                    </a>
                                </td>
                                <td class="product-thumbnail">
                                    <a href="shop-detail.html">
                                        <img src="images/shop/shop_7.jpg" alt="">
                                    </a>
                                </td>
                                <td class="product-name" data-title="محصول">
                                    <a href="shop-detail.html">لورم ایپسوم متن ساختگی</a>
                                </td>
                                <td class="product-price" data-title="قیمت">900,000 تومان</td>
                                <td class="product-quantity" data-title="تعداد">
                                    <div class="quantity">
                                        <div class="quantity-attr">
                                            <button class="qty-decrease" onclick="var qty_el = document.getElementById('quantity2'); var qty = qty_el.value; if( !isNaN( qty ) && qty > 1 ) qty_el.value--;return false;" type="button"><i class="fa fa-angle-down"></i></button>
                                            <input id="quantity2" type="text" step="1" min="1" max="" name="quantity2" value="1" title="تعداد" class="input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric">
                                            <button class="qty-increase" onclick="var qty_el = document.getElementById('quantity2'); var qty = qty_el.value; if( !isNaN( qty )) qty_el.value++;return false;" type="button"><i class="fa fa-angle-up"></i></button>
                                        </div>
                                    </div>
                                </td>
                                <td class="product-subtotal" data-title="جمع">900,000 تومان</td>
                            </tr>
                            <tr>
                                <td colspan="6" class="actions">
                                    <div class="coupon">
                                        <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="کد تخفیف">
                                        <input type="submit" class="apply-coupon" name="apply_coupon" value="اعمال تخفیف">
                                    </div>
                                    <input type="submit" class="button" name="update_cart" value="به روز رسانی سبد">
                                    <input type="hidden" id="_wpnonce" name="_wpnonce" value="65a1f5971b"><input type="hidden" name="_wp_http_referer" value="/landmark/cart/">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="cart-collaterals">
                        <div class="cart-totals">
                            <div class="section-title mb-2">
                                <div class="wrap-title">
                                    <h3 class="title">
                                        <span class="first-word">جمع</span> سبد خرید
                                    </h3>
                                </div>
                            </div>
                            <table cellspacing="0" class="shop-table">
                                <tbody>
                                <tr class="cart-subtotal">
                                    <td>زیر مجموعه
                                    </td><td data-title="زیر مجموعه">1,500,000 تومان</td>
                                </tr>
                                <tr class="order-total">
                                    <td>جمع
                                    </td><td data-title="جمع"><strong>1,500,000 تومان</strong></td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="proceed-to-checkout">
                                <a href="#" class="button">پرداخت</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
