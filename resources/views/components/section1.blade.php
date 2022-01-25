<div class="section section-bg-1 pt-17 pb-17">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="property-box-meta">
                    <div class="property-box-meta-content">
                        <span class="property-status">{{$item->contract}}</span>
                        <div class="item-head">
                            <h1 class="item-title">
                                <a href="property-fullwidth.html" title="Store Space Greenville">
                                    {{$item->title}}
                                </a>
                            </h1>
                            <span class="location">{{$item->address}}</span>
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
												<i class="icon-bath"></i> <span>{{$item->bath_number}} <small>سرویس بهداشتی</small></span>
											</span>
                        </div>
                        <div class="price">
                            <span class="before-price"></span>
                            <span class="amount">{{number_format($item->price)}}) تومان</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
        </div>
    </div>
</div>
