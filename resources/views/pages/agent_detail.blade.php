@extends('layouts.masterPages.landmark')
@section('content')

<div id="main">
    <div class="section mt-7 mb-7">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-agent">
                        <div class="row agent-detail">
                            <div class="thumbnail col-md-5">
                                <img src="/landmark/images/team/team_detail.png" alt="">
                            </div>
                            <div class="info-agent col-md-7">
                                <div class="box-content">
                                    <h3 class="title">
                                        <a href="/agent_detail">{{$item->name}} </a>
                                    </h3>
                                    <div class="box-info">
                                        <div class="item-info">
                                            <span class="position">{{$item->role}} </span>
                                        </div>
                                        <ul class="item-info">
                                            <li class="agent-email">
                                                <a href="mailto:{{$item->email}}" target="_top">{{$item->email}}</a>
                                            </li>
                                            <li class="agent-mobile">
                                                <a class="ltr_text" href="tel:0" target="_top">{{$item->mobile}}</a>
                                            </li>
                                            <li class="agent-address">{{$item->address}}</li>
                                        </ul>
                                        <div class="agent-about">
                                            {{$item->body}}
                                        </div>
                                        <div class="agent-action">
                                            <div class="col-sm-6 contact-now">
                                                <a href="#" title="Johnny Sanders" class="button">هم اکنون تماس بگیرید </a>
                                            </div>
                                            <div class="col-sm-6 agent-social text-right text-center-sm">
                                                <a class="fa fa-telegram" title="telegram" href="#"></a>
                                                <a class="fa fa-whatsapp" title="whatsapp" href="#"></a>
                                                <a class="fa fa-google" href="#"></a>
                                                <a class="fa fa-pinterest" href="#"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-overlay section-bg-10 pt-7 pb-9">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-11 text-center">
                        <h2 class="white text-uppercase mb-3">اطلاعات تماس</h2>
                    </div>
                    <div class="agent-contact">
                        <div class="box-form">
                            <form class="box-contact-agent">
                                <div class="row">
                                    <div class="item-wrap col-sm-4 col-xs-12">
                                        <input type="text" name="name" placeholder="نام *">
                                    </div>
                                    <div class="item-wrap col-sm-4 col-xs-12">
                                        <input type="text" name="phone" placeholder="تلفن" dir="ltr">
                                    </div>
                                    <div class="item-wrap col-sm-4 col-xs-12">
                                        <input type="text" name="email" placeholder="* ایمیل" dir="ltr">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="item-wrap form-textarea col-md-12">
                                        <textarea name="message" placeholder="پیام شما *"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="item-wrap form-action text-center col-md-12">
                                        <button type="submit" class="button-2">
                                            <span>ارسال پیام</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section mt-9 mb-9">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <div class="wrap-title">
                            <h3 class="title">
                                <span class="first-word">ملک های</span> مرتبط
                            </h3>
                            <p class="sub-title">
                                <i class="icon-decotitle"></i>
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="properties-carousel row owl-carousel owl-theme" data-auto-play="false" data-desktop="2" data-laptop="2" data-tablet="1" data-mobile="1">
                        <div class="item">
                            <div class="property-item">
                                <div class="property-item-wrap">
                                    <div class="item-head">
                                        <h4 class="item-title">
                                            <i class="ion-bookmark">ویژه</i>
                                            <a href="property-fullwidth.html" title="Vilayi 2 tabage">منزل ویلایی دو طبقه</a>
                                        </h4>
                                        <span class="location">تبریز، چهارراه شهناز</span>
                                    </div>
                                    <div class="item-featured">
                                        <a href="property-fullwidth.html" title="Family House in Hudson">
                                            <img src="images/property/property_1.jpg" alt="Family House in Hudson">
                                        </a>
                                        <span class="property-status">برای فروش</span>
                                    </div>
                                    <div class="info">
													<span class="primary-file-1">
														<i class="icon-ruler"></i> <span>2100 متر مربع</span>
													</span>
                                        <span class="primary-file-2">
														<i class="icon-bed"></i> <span>5 خوابه</span>
													</span>
                                        <span class="primary-file-3">
														<i class="icon-storage"></i> <span>1 پارکینگ</span>
													</span>
                                        <span class="primary-file-4">
														<i class="icon-bath"></i> <span>4 سرویس بهداشتی</span>
													</span>
                                    </div>
                                    <div class="action">
                                        <div class="price">
                                            <span class="amount">560,000,000 تومان</span>
                                        </div>
                                        <div class="action-post">
                                            <a data-toggle="tooltip" data-placement="top" title="" data-original-title="علاقه‌مندی‌ها" href="#">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <div class="property-sharing">
                                                <a data-toggle="tooltip" data-placement="top" title="" data-original-title="علاقه‌مندی‌ها" class="like" href="#">
                                                    <i class="ion-android-share-alt"></i>
                                                </a>
                                                <div class="social-property">
                                                    <a title="اشتراک‌گذاری در فیسبوک" class="share">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                    <a title="اشتراک‌گذاری در توییتر" class="share">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a title="اشتراک‌گذاری در تلگرام" class="share">
                                                        <i class="fa fa-telegram"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a data-toggle="tooltip" data-placement="top" title="" data-original-title="مقایسه" class="compare" href="#">
                                                <i class="ion-arrow-swap"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="property-item">
                                <div class="property-item-wrap">
                                    <div class="item-head">
                                        <h4 class="item-title">
                                            <i class="ion-bookmark">ویژه</i>
                                            <a href="property-fullwidth.html" title="Vilayi 2 tabage">منزل ویلایی دو طبقه</a>
                                        </h4>
                                        <span class="location">تبریز، چهارراه شهناز</span>
                                    </div>
                                    <div class="item-featured">
                                        <a href="property-fullwidth.html" title="Villa on Hollywood Boulevard">
                                            <img src="images/property/property_2.jpg" alt="Villa on Hollywood Boulevard">
                                        </a>
                                        <span class="property-status">برای فروش</span>
                                    </div>
                                    <div class="info">
													<span class="primary-file-1">
														<i class="icon-ruler"></i> <span>2075 متر مربع</span>
													</span>
                                        <span class="primary-file-2">
														<i class="icon-bed"></i> <span>3 خوابه</span>
													</span>
                                        <span class="primary-file-3">
														<i class="icon-storage"></i> <span>1 پارکینگ</span>
													</span>
                                        <span class="primary-file-4">
														<i class="icon-bath"></i> <span>3 سرویس بهداشتی</span>
													</span>
                                    </div>
                                    <div class="action">
                                        <div class="price">
                                            <span class="amount">560,000,000 تومان</span>
                                        </div>
                                        <div class="action-post">
                                            <a data-toggle="tooltip" data-placement="top" title="" data-original-title="علاقه‌مندی‌ها" href="#">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <div class="property-sharing">
                                                <a data-toggle="tooltip" data-placement="top" title="" data-original-title="علاقه‌مندی‌ها" class="like" href="#">
                                                    <i class="ion-android-share-alt"></i>
                                                </a>
                                                <div class="social-property">
                                                    <a title="اشتراک‌گذاری در فیسبوک" class="share">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                    <a title="اشتراک‌گذاری در توییتر" class="share">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a title="اشتراک‌گذاری در تلگرام" class="share">
                                                        <i class="fa fa-telegram"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a data-toggle="tooltip" data-placement="top" title="" data-original-title="مقایسه" class="compare" href="#">
                                                <i class="ion-arrow-swap"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="property-item">
                                <div class="property-item-wrap">
                                    <div class="item-head">
                                        <h4 class="item-title">
                                            <i class="ion-bookmark">ویژه</i>
                                            <a href="property-fullwidth.html" title="Vilayi 2 tabage">منزل ویلایی دو طبقه</a>
                                        </h4>
                                        <span class="location">تبریز، چهارراه شهناز</span>
                                    </div>
                                    <div class="item-featured">
                                        <a href="property-fullwidth.html" title="Park Avenue Apartment">
                                            <img src="images/property/property_3.jpg" alt="Park Avenue Apartment">
                                        </a>
                                        <span class="property-status">برای اجاره</span>
                                    </div>
                                    <div class="info">
													<span class="primary-file-1">
														<i class="icon-ruler"></i> <span>3450 متر مربع</span>
													</span>
                                        <span class="primary-file-2">
														<i class="icon-bed"></i> <span>6 اتاق خواب</span>
													</span>
                                        <span class="primary-file-3">
														<i class="icon-storage"></i> <span>2 پارکینگ</span>
													</span>
                                        <span class="primary-file-4">
														<i class="icon-bath"></i> <span>5 سرویس بهداشتی</span>
													</span>
                                    </div>
                                    <div class="action">
                                        <div class="price">
                                            <span class="amount">560,000,000 تومان</span>
                                        </div>
                                        <div class="action-post">
                                            <a data-toggle="tooltip" data-placement="top" title="" data-original-title="علاقه‌مندی‌ها" href="#">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <div class="property-sharing">
                                                <a data-toggle="tooltip" data-placement="top" title="" data-original-title="علاقه‌مندی‌ها" class="like" href="#">
                                                    <i class="ion-android-share-alt"></i>
                                                </a>
                                                <div class="social-property">
                                                    <a title="اشتراک‌گذاری در فیسبوک" class="share">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                    <a title="اشتراک‌گذاری در توییتر" class="share">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a title="اشتراک‌گذاری در تلگرام" class="share">
                                                        <i class="fa fa-telegram"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a data-toggle="tooltip" data-placement="top" title="" data-original-title="مقایسه" class="compare" href="#">
                                                <i class="ion-arrow-swap"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="property-item">
                                <div class="property-item-wrap">
                                    <div class="item-head">
                                        <h4 class="item-title">
                                            <a href="property-fullwidth.html" title="Vilayi 2 tabage">منزل ویلایی دو طبقه</a>
                                        </h4>
                                        <span class="location">تبریز، چهارراه شهناز</span>
                                    </div>
                                    <div class="item-featured">
                                        <a href="property-fullwidth.html" title="Loft Above The City">
                                            <img src="images/property/property_4.jpg" alt="Loft Above The City">
                                        </a>
                                        <span class="property-status">برای اجاره</span>
                                    </div>
                                    <div class="info">
													<span class="primary-file-1">
														<i class="icon-ruler"></i> <span>2800 متر مربع</span>
													</span>
                                        <span class="primary-file-2">
														<i class="icon-bed"></i> <span>6 اتاق خواب</span>
													</span>
                                        <span class="primary-file-3">
														<i class="icon-storage"></i> <span>2 پارکینگ</span>
													</span>
                                    </div>
                                    <div class="action">
                                        <div class="price">
                                            <span class="amount">560,000,000 تومان</span>
                                        </div>
                                        <div class="action-post">
                                            <a data-toggle="tooltip" data-placement="top" title="" data-original-title="علاقه‌مندی‌ها" href="#">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <div class="property-sharing">
                                                <a data-toggle="tooltip" data-placement="top" title="" data-original-title="علاقه‌مندی‌ها" class="like" href="#">
                                                    <i class="ion-android-share-alt"></i>
                                                </a>
                                                <div class="social-property">
                                                    <a title="اشتراک‌گذاری در فیسبوک" class="share">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                    <a title="اشتراک‌گذاری در توییتر" class="share">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a title="اشتراک‌گذاری در تلگرام" class="share">
                                                        <i class="fa fa-telegram"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a data-toggle="tooltip" data-placement="top" title="" data-original-title="مقایسه" class="compare" href="#">
                                                <i class="ion-arrow-swap"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="property-item">
                                <div class="property-item-wrap">
                                    <div class="item-head">
                                        <h4 class="item-title">
                                            <i class="ion-bookmark">ویژه</i>
                                            <a href="property-fullwidth.html" title="Vilayi 2 tabage">منزل ویلایی دو طبقه</a>
                                        </h4>
                                        <span class="location">تبریز، چهارراه شهناز</span>
                                    </div>
                                    <div class="item-featured">
                                        <a href="property-fullwidth.html" title="Villa in Melbourne">
                                            <img src="images/property/property_5.jpg" alt="Villa in Melbourne">
                                        </a>
                                        <span class="property-status">برای اجاره</span>
                                    </div>
                                    <div class="info">
													<span class="primary-file-1">
														<i class="icon-ruler"></i> <span>3450 متر مربع</span>
													</span>
                                        <span class="primary-file-2">
														<i class="icon-bed"></i> <span>6 اتاق خواب</span>
													</span>
                                        <span class="primary-file-3">
														<i class="icon-storage"></i> <span>2 پارکینگ</span>
													</span>
                                        <span class="primary-file-4">
														<i class="icon-bath"></i> <span>5 سرویس بهداشتی</span>
													</span>
                                    </div>
                                    <div class="action">
                                        <div class="price">
                                            <span class="amount">560,000,000 تومان</span>
                                        </div>
                                        <div class="action-post">
                                            <a data-toggle="tooltip" data-placement="top" title="" data-original-title="علاقه‌مندی‌ها" href="#">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <div class="property-sharing">
                                                <a data-toggle="tooltip" data-placement="top" title="" data-original-title="علاقه‌مندی‌ها" class="like" href="#">
                                                    <i class="ion-android-share-alt"></i>
                                                </a>
                                                <div class="social-property">
                                                    <a title="اشتراک‌گذاری در فیسبوک" class="share">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                    <a title="اشتراک‌گذاری در توییتر" class="share">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a title="اشتراک‌گذاری در تلگرام" class="share">
                                                        <i class="fa fa-telegram"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <a data-toggle="tooltip" data-placement="top" title="" data-original-title="مقایسه" class="compare" href="#">
                                                <i class="ion-arrow-swap"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
