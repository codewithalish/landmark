<div class="section pt-9 pb-9">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <div class="wrap-title">
                        <h3 class="title">
                            <span class="first-word">آخرین</span> ملک ها
                        </h3>
                        <p class="sub-title">
                            <i class="icon-decotitle"></i>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($items as $item)
                <div class="col-md-4 col-sm-6">
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
                                <a href="/cases/{{$item->id}}" title="Family House in Hudson">
                                    <img src="/landmark/images/property/property_1.jpg" alt="Family House in Hudson">
                                </a>
                                <span class="property-status">{{$item->contract}}</span>
                            </div>
                            <div class="info">
            											<span class="primary-file-1">
            												<i class="icon-ruler"></i> <span>{{$item->area}}</span><span> متر مربع</span>
            											</span>
                                <span class="primary-file-2">
            												<i class="icon-bed"></i> <span>{{$item->room_number}}</span><span> خوابه</span>
            											</span>
                                <span class="primary-file-3">
            												<i class="icon-storage"></i> <span>{{$item->parking_number}}</span><span> پارکینگ</span>
            											</span>
                                <span class="primary-file-4">
            												<i class="icon-bath"></i> <span>{{$item->bath_number}}</span><span> سرویس بهداشتی</span>
            											</span>
                            </div>
                            <div class="action">
                                <div class="price">
                                    <span class="amount">{{$item->price}} تومان</span>
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
            @endforeach
        </div>
    </div>
</div>
