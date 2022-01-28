@extends('layouts.masterPages.landmark')
@section('content')

<div id="main">
    <div class="section mt-7 mb-7">
        <div class="container">
            <div class="row">
                <div> @include('layouts.partials.auth.alert')</div>
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
                                                <a class="fa fa-instagram" title="instagram" href="#"></a>

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
                        <h2 class="white text-uppercase mb-3">ارسال پیام</h2>
                    </div>
                    <div class="agent-contact">
                        <div class="box-form">
                            <form class="box-contact-agent" method="post" action="/agent_detail">
                                @csrf
                                <div class="row">
                                    <div class="item-wrap col-sm-4 col-xs-12">
                                        <input type="text" name="name" placeholder="نام *">
                                    </div>
                                    <div class="item-wrap col-sm-4 col-xs-12">
                                        <input type="text" name="mobile" placeholder="تلفن" dir="ltr">
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
                                ملک های مرتبط با
                                {{$item->name}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="properties-carousel row owl-carousel owl-theme" data-auto-play="false" data-desktop="2" data-laptop="2" data-tablet="1" data-mobile="1">
                        @foreach($cases as $item)
                        <div class="item">
                            <div class="property-item">
                                <div class="property-item-wrap">
                                    <div class="item-head">
                                        <h4 class="item-title">
                                            <i class="ion-bookmark">{{$item->is_vip}}</i>
                                            <a href="/case_detail" title="Vilayi 2 tabage">{{$item->title}}</a>
                                        </h4>
                                        <span class="location">{{$item->address}}</span>
                                    </div>
                                    <div class="item-featured">
                                        <a href="/case_detail" title="Family House in Hudson">
                                            <img src="/landmark/images/property/property_3.jpg" alt="Family House in Hudson">
                                        </a>
                                        <span class="property-status">{{__('custom.contract')[$item->contract]}}</span>
                                    </div>
                                    <div class="info">
													<span class="primary-file-1">
														<i class="icon-ruler"></i> <span>{{$item->area}} متر مربع</span>
													</span>
                                        <span class="primary-file-2">
														<i class="icon-bed"></i> <span>{{$item->room_number}} خوابه</span>
													</span>
                                        <span class="primary-file-3">
														<i class="icon-storage"></i> <span>{{$item->parking_number}} پارکینگ</span>
													</span>
                                        <span class="primary-file-4">
														<i class="icon-bath"></i> <span>{{$item->bath_number}} سرویس بهداشتی</span>
													</span>
                                    </div>
                                    <div class="action">
                                        <div class="price">
                                            <span class="amount">{{number_format($item->price)}} تومان</span>
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
                                                    <a title="اشتراک‌گذاری در واتساپ" class="share">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a title="اشتراک‌گذاری در تلگرام" class="share">
                                                        <i class="fa fa-telegram"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
