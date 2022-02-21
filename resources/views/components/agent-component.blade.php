<div class="section mb-11">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <div class="wrap-title">
                        <h3 class="title">
                            <span class="first-word">نماینده های</span> ما
                        </h3>
                        <p class="sub-title">
                            <i class="icon-decotitle"></i>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                        </p>
                    </div>
                </div>
                <div class="agent-carousel row owl-carousel owl-theme" data-auto-play="false" data-desktop="4" data-laptop="3" data-tablet="2" data-mobile="1">
                    @foreach($items as $item)
                        <div class="agent-item">
                            <div class="thumbnail">
                                <a href="/agents/{{$item->id}}" title="Kent Pather">
                                    <img src="{{$item->avatar_path ?? '/landmark/images/team/team_2.png'}}" alt="Kent Pather">
                                </a>
                                <span class="line"><span></span></span>
                            </div>
                            <div class="content">
                                <h4 class="name-agent">
                                    <a href="/agents/{{$item->id}}" title="Kent Pather">{{$item->name}}</a>
                                </h4>
                                <span class="position">body</span>
                                <div class="agent-social">
                                    <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                    <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                    <a class="google_plus" href="#"><i class="fa fa-telegram"></i></a>
                                    <a class="vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
