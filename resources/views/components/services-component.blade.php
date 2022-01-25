<div class="section">
    <div class="container">

        <div class="row">
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
                    <a class="readmore" href="#">بیشتر بخوانید </a>
                </div>
            </div>
        </div>
    </div>
</div>
