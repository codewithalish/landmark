<div class="section mb-9">
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
                                            <a href="/cases/{{$item->id}}" title="Vilayi 2 tabage">{{$item->title}}</a>
                                        </h4>
                                        <span class="location">{{$item->address}}</span>
                                    </div>
                                    <div class="item-featured">
                                        <a href="/cases" title="Family House in Hudson">
                                            <img src="/landmark/images/property/property_2.jpg" alt="Family House in Hudson">
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
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
