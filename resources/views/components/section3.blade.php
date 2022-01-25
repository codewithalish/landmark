<div class="section section-overlay section-bg-5 pt-10 pb-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="testimonial-carousel owl-carousel owl-theme" data-auto-play="false" data-desktop="1"
                     data-laptop="1" data-tablet="1" data-mobile="1">
                    @foreach($items as $item)
                    <div class="testimonial-item text-center">
                        <div class="testimonial-wrap">
                            <div class="box-user">
                                <img width="95" height="95" src="/landmark/images/avatar/avatar_1.jpg" alt="">
                                <h3 class="testimonial-name white">{{$item->name}}</h3>
                                <span class="testimonial-position white">مجری فروش</span>
                            </div>
                            <p class="testimonial-content white">{{$item->mobile}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
