<div class="section section-bg-6 section-overlay section-fixed mt-5 newsletter">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mailchimp">
                    <h3 class="title">عضویت در خبرنامه</h3>
                    <span class="sub-title">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</span>
                    <form action="/welcome" method="post">
                        @csrf
                        <div class="mailchimp-main">
                            <input type="email" name="EMAIL" placeholder="ایمیل خود را وارد کنید" required="">
                            <input type="submit" value="Subscribe">
                            <i class="ion-ios-paperplane"></i>
                        </div>
                    </form>
                    <img src="/landmark/images/subscribe.png" alt="subscribe">
                </div>
            </div>
        </div>
    </div>
</div>
