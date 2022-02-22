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
                @include('sections.case')
            @endforeach
        </div>
    </div>
</div>
