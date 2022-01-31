<footer class="footer">
    <div class="main-footer">
        <div class="colophon wigetized">
            <div class="container">
                <div class="row">
                    <div class="footer-column-item col-md-3 col-sm-6">
                        <div class="widget widget_text">
                            <h4 class="widget-title">لندمارک</h4>
                            <div class="textwidget">
                                <p>{{getVariable('description')}}</p>
                                <ul class="contact-info">
                                    <li><i class="fa fa-map-marker"></i>{{getVariable('address')}}</li>
                                    <li><i class="fa fa-phone"></i><span
                                            class="ltr_text">{{getVariable('phone')}}</span></li>
                                    <li><i class="fa fa-envelope"></i>{{getVariable('email')}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer-column-item col-md-3 col-sm-6">
                        <div class="widget widget_text">
                            <h4 class="widget-title">ساعات کاری</h4>
                            <div class="textwidget">
                                <ul class="open-info">
                                    <li>{{getVariable('saturday_wednesday')}}</li>
                                    <li>{{getVariable('thursday')}}</li>
                                    <li>{{getVariable('friday')}}</li>
                                    <li>{{getVariable('week_slogan')}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer-column-item col-md-3 col-sm-6">
                        <div class="widget widget_nav_menu">
                            <h4 class="widget-title">لینک های مفید</h4>
                            <ul class="menu">
                                @foreach($links as $link)
                                    <li><a href="{{$link['href']}}">{{$link['title']}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="footer-column-item col-md-3 col-sm-6">
                        <div class="widget widget_recent_property">
                            <h4 class="widget-title">جدید ترین ملک ها</h4>
                            <div class="recent-property-wrap">
                                @foreach($cases as $case)
                                    <div class="recent-property-item">
                                        <div class="thumbnail">
                                            <a href="/cases/{{$case->id}}" title="Family House in Hudson">
                                                <img src="/landmark/images/property/thumb/property_1.jpg"
                                                     alt="Family House in Hudson">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <div class="item-title">
                                                <a href="property-fullwidth.html" title="Family House in Hudson">
                                                    {{$case->title}}
                                                </a>
                                            </div>
                                            <div class="price">
                                                <span class="amount">{{$case->price}} تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    ارائه شده در وب سایت <a href="https://www.rtl-theme.com" target="_blank">راست چین</a>
                </div>
                <div class="col-sm-6">
                    <div class="footer-social text-right text-center-sm">
                        <a href="#" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" target="_blank" class="google"><i class="fa fa-telegram"></i></a>
                        <a href="#" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" target="_blank" class="skype"><i class="fa fa-skype"></i></a>
                        <a href="#" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        <a href="#" target="_blank" class="telegram"><i class="fa fa-telegram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
