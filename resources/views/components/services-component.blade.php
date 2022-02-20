<div class="section">
    <div class="container">

        <div class="row">
            <div class="section-title">
                <div class="wrap-title">
                    <h3 class="title">
                        <span class="first-word">خدمات </span>ما
                    </h3>
                    <p class="sub-title">
                        <i class="icon-decotitle"></i>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                    </p>
                </div>
            </div>
            @foreach($items as $item)
            <div class="col-md-3 col-sm-6">
                <div class="service-item">
                    <div class="service-icon icon-mapmarker">
                        <span class="icon icon-price-house"></span>
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
                    <a class="readmore" href="/services">بیشتر بخوانید </a>
                </div>
            </div>
        </div>
    </div>
</div>
