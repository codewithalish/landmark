@extends('layouts.masterPages.landmark')
@section('content')

<div id="main">
    <div class="section mt-7">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <div class="wrap-title">
                            <h3 class="title">
                                <span class="first-word">خدمات</span> ما
                            </h3>
                            <p class="sub-title">
                                <i class="icon-decotitle"></i>
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($services as $item)
                <div class="col-md-3 col-sm-6">
                    <div class="service-item">
                        <div class="service-icon icon-mapmarker">
                            <span class="{{$item->thumbnail_path}}"></span>
                        </div>
                        <h4 class="service-title">{{$item->title}}</h4>
                        <p>{{$item->body}}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="btlink">
{{--                        <a class="readmore" href="#">بیشتر بخوانید </a>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section mt-7 mb-7">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <div class="wrap-title">
                            <h3 class="title">
                                <span class="first-word">ثبت</span> ملک
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
                <div class="col-md-4 col-sm-6">
                    <div class="service-item style-2">
                        <div class="service-icon">
                            <span class="icon icon-user-add"></span>
                        </div>
                        <h4 class="service-title">عضویت / ثبت نام</h4>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-item style-2">
                        <div class="service-icon">
                            <span class="icon icon-vertification"></span>
                        </div>
                        <h4 class="service-title">اطلاعات ملک را وارد کنید</h4>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-item style-2">
                        <div class="service-icon">
                            <span class="icon icon-worldmap"></span>
                        </div>
                        <h4 class="service-title">به همین راحتی!</h4>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center mt-1">
                        <a class="button" href="/cases/create">ثبت ملک شما </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
