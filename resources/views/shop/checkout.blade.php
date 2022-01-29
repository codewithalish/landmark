@extends('layouts.masterPages.landmark')
@section('content')

<div id="main">
    <div class="section pt-7 pb-7">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="customer-detail">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>جزئیات پرداخت</h3>
                                <div class="row">
                                    <div class="item-wrap col-md-6">
                                        <label>نام <span class="required">*</span></label>
                                        <input type="text" id="firstname" name="firstname" required>
                                    </div>
                                    <div class="item-wrap col-md-6">
                                        <label>نام خانوادگی <span class="required">*</span></label>
                                        <input type="text" id="lastname" name="lastname" required>
                                    </div>
                                    <div class="item-wrap col-md-12">
                                        <label>نام شرکت</label>
                                        <input type="text" id="companyname" name="companyname">
                                    </div>
                                    <div class="item-wrap col-md-12">
                                        <label>کشور <span class="required">*</span></label>
                                        <select name="country" id="country">
                                            <option value="">استرالیا</option>
                                            <option value="">لورم ایپسوم</option>
                                            <option value="">لورم ایپسوم</option>
                                            <option value="">لورم ایپسوم</option>
                                            <option value="">لورم ایپسوم متن</option>
                                            <option value="">لورم ایپسوم</option>
                                        </select>
                                    </div>
                                    <div class="item-wrap col-md-12">
                                        <label>آدرس <span class="required">*</span></label>
                                        <input type="text" id="address" name="address" required>
                                    </div>
                                    <div class="item-wrap col-md-12">
                                        <label>کدپستی</label>
                                        <input type="text" id="postcode" name="postcode">
                                    </div>
                                    <div class="item-wrap col-md-12">
                                        <label>شهر / شهرستان <span class="required">*</span></label>
                                        <input type="text" id="city" name="city" required>
                                    </div>
                                    <div class="item-wrap col-md-6">
                                        <label>تلفن <span class="required">*</span></label>
                                        <input type="text" id="phone" name="phone" required>
                                    </div>
                                    <div class="item-wrap col-md-6">
                                        <label>ایمیل <span class="required">*</span></label>
                                        <input type="text" id="email" name="email" required>
                                    </div>
                                    <div class="item-wrap col-md-12">
                                        <input class="input-checkbox" id="createaccount" type="checkbox" name="createaccount" value="1">
                                        <strong>ساخت حساب کاربری؟</strong>
                                    </div>
                                    <div class="item-wrap col-md-12 mt-4">
                                        <button class="button">ذخیره اطلاعات</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3>اطلاعات تکمیلی</h3>
                                <div class="row">
                                    <div class="item-wrap col-md-12">
                                        <label>توضیحات سفارش</label>
                                        <textarea name="order_comments" class="input-text " id="order_comments" rows="2" cols="5"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-title mt-4 mb-2">
                        <div class="wrap-title">
                            <h3 class="title">
                                <span class="first-word">سفارش شما</span>
                            </h3>
                        </div>
                    </div>
                    <div class="checkout-review-order">
                        <table class="shop-table mb-0">
                            <thead>
                            <tr>
                                <td class="product-name"><strong>محصول</strong>
                                </td><td class="product-total"><strong>جمع</strong>
                                </td></tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="product-name" data-title="محصول">
                                    لورم ایپسوم متن
                                    <strong class="product-quantity">× 1</strong>
                                </td>
                                <td class="product-total" data-title="جمع">600,000 تومان</td>
                            </tr>
                            <tr>
                                <td class="product-name" data-title="محصول">
                                    لورم ایپسوم متن ساختگی
                                    <strong class="product-quantity">× 1</strong>
                                </td>
                                <td class="product-total" data-title="جمع">900,000 تومان</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td><strong>زیر مجموعه</strong></td>
                                <td data-title="زیر مجموعه"><strong>1,500,000 تومان</strong></td>
                            </tr>
                            <tr>
                                <td><strong>جمع</strong></td>
                                <td data-title="جمع کل"><strong>1,500,000 تومان</strong></td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="checkout-payment mt-4">
                        <ul class="payment-methods">
                            <li>
                                <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="cheque" checked data-order_button_text="">
                                <label>بررسی پرداخت</label>
                                <div class="payment-box">
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها</p>
                                </div>
                            </li>
                            <li>
                                <input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method" value="paypal" data-order_button_text="ارتباط با پی پال">
                                <label>
                                    پرداخت آنلاین
                                    <img src="images/paypal.png" alt="PayPal acceptance mark">
                                    <a href="#" class="about_paypal">اطلاعات بیشتر</a>
                                </label>
                            </li>
                        </ul>
                        <div class="text-right text-center-sm">
                            <input type="submit" class="button" name="checkout_place_order" id="place_order" value="ثبت سفارش" data-value="ثبت سفارش">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
