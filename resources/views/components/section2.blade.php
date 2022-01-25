<div class="section section-overlay section-bg-4 mt-12 mb-27 featured_property">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="featured-item">
                    <div class="featured-main">
                        <div class="meta">
                            <h3 class="title">{{$item->title}}</h3>
                            <span class="location">
												<i class="fa fa-map-marker"></i>
												{{$item->address}}
											</span>
                            <span class="price">{{$item->price}} تومان</span>
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
                        <div class="box-image">
                            <div class="box-image-inner">
                                <div class="box-image-content"></div>
                            </div>
                        </div>
                        <div class="view">
                            <p>{{$item->description}}</p>
                            <a class="readmore" href="#">بیشتر بخوانید</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
