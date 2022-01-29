@extends('layouts.masterPages.landmark')
@section('content')
<div id="main">
    <div class="section pt-5 pb-8">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="section-title">
                        <div class="wrap-title">
                            <h3 class="title">
                                <span class="first-word">شرکای</span> ما
                            </h3>
                            <p class="sub-title">
                                <i class="icon-decotitle"></i>
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                            </p>
                        </div>
                    </div>
                    <div class="partner-carousel owl-carousel owl-theme" data-auto-play="false" data-desktop="6" data-laptop="4" data-tablet="3" data-mobile="2">
                        @foreach($items as $item)
                        <div class="item">
                            <a href="#">
                                <img src="/landmark/images/partners/partner_1.jpg" alt="">
                            </a>
                            <a href="#">
                                <img src="/landmark/images/partners/partner_2.jpg" alt="">
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
