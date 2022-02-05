@extends('layouts.masterPages.landmark')
@section('content')
    <div id="main">
        <div class="section section-bg-12 section-overlay-4 section-fixed pt-8 pb-8">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wrap-page-title">
                            <h1 class="page-title">{{$item->title}}</h1>
                            <div class="page-breadcrumb">
										<span>
											<a title="بازگشت به خانه" href="../pages" class="home"><span>خانه</span></a>
										</span>
                                <i class="icon ion-ios-arrow-forward"></i>
                                <span><a title="بازگشت به لیست ملک ها" href="#"><span>ملک ها</span></a></span>
                                <i class="icon ion-ios-arrow-forward"></i>
                                <span><span>منزل ویلایی دو طبقه</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section mt-7">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="header-control tabs">
                            <li class="active">
                                <a data-toggle="tab" href="#tab-gallery" aria-expanded="true"><i class="fa fa-picture-o" aria-hidden="true"></i> تصاویر</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab-map" aria-expanded="false"><i class="fa fa-map-marker" aria-hidden="true"></i> موقعیت مکانی</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="tab-gallery">
                                <div class="property-detail-carousel owl-carousel owl-theme" data-auto-play="false" data-desktop="1" data-laptop="1" data-tablet="1" data-mobile="1">
                                    <div class="item">
                                        <img src="images/property/slides/property_1.jpg" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="images/property/slides/property_2.jpg" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="images/property/slides/property_3.jpg" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="images/property/slides/property_4.jpg" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="images/property/slides/property_5.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div id="tab-map" class="tab-pane fade">
                                <div id="googleMap2" data-icon="images/icon_location.png" data-lat="38.066082" data-lon="46.323638"></div>
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
                        <div class="single-property-detail tab">
                            <div class="detail-header style-2">
                                <div class="action-post">
                                    <a data-toggle="tooltip" data-placement="top" title="" data-original-title="چاپ" class="compare" href="#">
                                        <i class="ion-printer"></i>
                                    </a>
                                    <a data-toggle="tooltip" data-placement="top" title="" data-original-title="علاقه‌مندی‌ها" href="#">
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                    <div class="property-sharing">
                                        <a data-toggle="tooltip" data-placement="top" title="" data-original-title="اشتراک گذاری" class="like" href="#">
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
                                </div>
                                <h3 class="detail-title">{{$item->title}}</h3>
                                <span class="property-status">{{__('custom.contract')[$item->contract]}}</span>
                                <div class="info">
                                    <span class="location">{{$item->address}}</span>
                                    <div class="price">{{$item->price}} تومان</div>
                                </div>
                            </div>
                            <div class="detail-content">
                                <ul class="detail-tabs tabs">
                                    <li class="active">
                                        <a data-toggle="tab" href="#tab-desc" aria-expanded="true">توضیحات</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#tab-address" aria-expanded="false">{{$item->address}}</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#tab-detail" aria-expanded="false">{{$item->description}}</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#tab-video" aria-expanded="false">{{$item->video_path}}</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="tab-desc">
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                                        <h3>لورم ایپسوم متن ساختگی با تولید</h3>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود</p>
                                    </div>
                                    <div id="tab-address" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="content-box-item">
                                                    <label>آدرس</label>
                                                    <span>{{$item->address}}</span>
                                                </div>
                                                <div class="content-box-item">
                                                    <label>کشور</label>
                                                    <span>ایران</span>
                                                </div>
                                                <div class="content-box-item">
                                                    <label>شهر</label>
                                                    <span>اراک</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="content-box-item">
                                                    <label>منطقه</label>
                                                    <span>فاطمیه</span>
                                                </div>
                                                <div class="content-box-item">
                                                    <label>کدپستی</label>
                                                    <span>07305</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-detail" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="detail-header">
                                                    <h3 class="detail-title">اطلاعات تکمیلی</h3>
                                                </div>
                                                <div class="content-box">
                                                    <div class="content-box-item">
                                                        <label>دسترسی</label>
                                                        <span>آماده </span>
                                                    </div>
                                                    <div class="content-box-item">
                                                        <label>وضعیت</label>
                                                        <span><a href="#">{{__('custom.contract')[$item->contract]}}</a></span>
                                                    </div>
                                                    <div class="content-box-item">
                                                        <label>نوع</label>
                                                        <span><a href="#">{{$item->type}}</a></span>
                                                    </div>
                                                    <div class="content-box-item">
                                                        <label>قیمت</label>
                                                        <span>{{$item->price}}</span>
                                                    </div>
                                                    <div class="content-box-item">
                                                        <label>مساحت</label>
                                                        <span>{{$item->area}}</span>
                                                    </div>
                                                    <div class="content-box-item">
                                                        <label>اتاق خواب</label>
                                                        <span>{{$item->room_number}}</span>
                                                    </div>
                                                    <div class="content-box-item">
                                                        <label>سرویس بهداشتی</label>
                                                        <span>{{$item->bath_number}}</span>
                                                    </div>
                                                    <div class="content-box-item">
                                                        <label>پارکینگ</label>
                                                        <span>{{$item->parking_number}}</span>
                                                    </div>
                                                    <div class="content-box-item">
                                                        <label>سال ساخت</label>
                                                        <span>2015</span>
                                                    </div>
                                                    <div class="content-box-item">
                                                        <label>کفپوش</label>
                                                        <span>موکت</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="detail-header">
                                                    <h3 class="detail-title">ویژگی ها</h3>
                                                </div>
                                                <div class="content-box row">
                                                    <div class="col-xs-6">
                                                        <div class="content-box-item">
                                                            <i class="fa fa-check" aria-hidden="true"></i>
                                                            زیرزمین
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="content-box-item">
                                                            <i class="fa fa-check" aria-hidden="true"></i>
                                                            استخر شنا
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="content-box-item">
                                                            <i class="fa fa-check" aria-hidden="true"></i>
                                                            سیستم سرمایش
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="content-box-item">
                                                            <i class="fa fa-check" aria-hidden="true"></i>
                                                            گرمایش گازی
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="content-box-item">
                                                            <i class="fa fa-check" aria-hidden="true"></i>
                                                            بالکن
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="content-box-item">
                                                            <i class="fa fa-check" aria-hidden="true"></i>
                                                            تهویه مرکزی
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="content-box-item">
                                                            <i class="fa fa-check" aria-hidden="true"></i>
                                                            سیستم امنیتی
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="content-box-item">
                                                            <i class="fa fa-check" aria-hidden="true"></i>
                                                            تلویزیون کابلی
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="content-box-item">
                                                            <i class="fa fa-check" aria-hidden="true"></i>
                                                            منظره دریاچه
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="content-box-item">
                                                            <i class="fa fa-check" aria-hidden="true"></i>
                                                            اتاق زیر شیروانی
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="content-box-item">
                                                            <i class="fa fa-check" aria-hidden="true"></i>
                                                            گرمایش خورشیدی
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="content-box-item">
                                                            <i class="fa fa-check" aria-hidden="true"></i>
                                                            رخت شویی
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="content-box-item">
                                                            <i class="fa fa-check" aria-hidden="true"></i>
                                                            حیاط خلوت
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="content-box-item">
                                                            <i class="fa fa-check" aria-hidden="true"></i>
                                                            پنجره های سقنی
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="content-box-item">
                                                            <i class="fa fa-check" aria-hidden="true"></i>
                                                            جعبه آتش نشانی
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-video" class="tab-pane fade">
                                        <iframe height="420" src="https://www.youtube.com/embed/BR-x5eoYkw8" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
{{--                            <div class="detail-header">--}}
{{--                                <h3 class="detail-title">نقشه ملک</h3>--}}
{{--                            </div>--}}
{{--                            <div class="detail-content">--}}
{{--                                <div class="floor-plan-carousel owl-carousel owl-theme" data-auto-play="false" data-desktop="1" data-laptop="1" data-tablet="1" data-mobile="1">--}}
{{--                                    <div class="item text-center">--}}
{{--                                        <a href="images/floor_plan/plan_1.jpg" class="mfp-image gallery-item">--}}
{{--                                            <img src="images/floor_plan/plan_1.jpg" alt="">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="item text-center">--}}
{{--                                        <a href="images/floor_plan/plan_2.jpg" class="mfp-image gallery-item">--}}
{{--                                            <img src="images/floor_plan/plan_2.jpg" alt="">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="item text-center">--}}
{{--                                        <a href="images/floor_plan/plan_3.jpg" class="mfp-image gallery-item">--}}
{{--                                            <img src="images/floor_plan/plan_3.jpg" alt="">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="item text-center">--}}
{{--                                        <a href="images/floor_plan/plan_4.jpg" class="mfp-image gallery-item">--}}
{{--                                            <img src="images/floor_plan/plan_4.jpg" alt="">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="detail-header">--}}
{{--                                <h3 class="detail-title">موقعیت مکانی</h3>--}}
{{--                            </div>--}}
{{--                            <div class="detail-content">--}}
{{--                                <div id="googleMap" data-icon="images/icon_location.png" data-lat="38.066082" data-lon="46.323638"></div>--}}
{{--                            </div>--}}
                        </div>
                        <div class="property-agent-contact">
                            <div> @include('layouts.partials.auth.alert')</div>
                            <h3 class="box-title">تماس با نماینده </h3>
                            <div class="box-content col-md-6">
                                <div class="thumbnail col-md-6">
                                    <img src="/landmark/images/team/team_1.png" alt="">
                                </div>
                                <div class="box-info col-md-6">
                                    <h4 class="agent-name">
                                        <a href="/agent_detail" title="Bruck Banner">{{$item->name}}</a>
                                    </h4>
                                    <div class="item-info">
                                        @foreach($item->agent->roles() as $roles)
                                        <span class="position">{{$roles->title}}</span>
                                        @endforeach
                                    </div>
                                    <ul class="item-info">
                                        <li class="agent-email">
                                            <a href="mailto:contact.usa@landmark.com" target="_top">{{$item->agent()->email}}</a>
                                        </li>
                                        <li class="agent-phone">
                                            <a href="tel:123456789" target="_top" class="ltr_text">{{$item->agent()->mobile}}</a>
                                        </li>
                                        <li class="agent-address">{{$item->agent()->address}}</li>
                                    </ul>
                                    <div class="agent-about">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله
                                    </div>
                                </div>
                            </div>
                            <div class="box-contact-property col-md-6">
                                <div class="box-contact">
                                    <div class="box-form">
                                        <form class="box-contact-agent" method="post" action="/agents/{{$item->user_id}}/contacts">
                                            @csrf
                                            <div class="item-wrap">
                                                <input type="text" name="name" placeholder="نام *">
                                            </div>
                                            <div class="item-wrap">
                                                <input type="text" name="mobile" placeholder="0912 *">
                                            </div>
                                            <div class="item-wrap">
                                                <textarea name="message" placeholder="پیام شما *"></textarea>
                                            </div>
                                            <div class="form-action">
                                                <button type="submit" class="button">
                                                    <span>ارسال پیام</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <x-related-case :cases="$related_cases" ></x-related-case>

    </div>
@endsection

