<header class="header header-desktop">
    <div class="navbar-wrapper">
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 hidden-xs">
                        <div class="topmeta">
                            <i class="fa fa-mobile"></i>
                            هم اکنون تماس بگیرید <a href="tel:(+1)-800-555-6789" class="ltr_text">(+1)-800-555-6789</a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="topmeta topmeta-right pull-right">
                            <a class="popup-login" > {{\Illuminate\Support\Facades\Auth::user()->name ?? ''}} خوش امدید</a>


                            <div class="widget widget-social">
                                <div class="social">
                                    <div class="social-all">
                                        <a href=https://wa.me/whatsappphonenumber/?text=urlencodedtext" target="_blank"
                                           class="facebook"><i class="fa fa-whatsapp"></i></a>
                                        <a href="https://telegram.me/share/url?url=site&text=text" target="_blank"
                                           class="google"><i class="fa fa-telegram"></i></a>
                                        <a href="instagram/#" target="_blank" class="twitter"><i
                                                class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-default">
            <div class="container">
                <div class="navbar-content">
                    <div class="navbar-header pull-left">
                        <button data-target=".nav-collapse" class="btn-navbar icon-menu" type="button">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a href="./" class="navbar-brand" title="Real Estate HTML Template">
                            <img class="logo-img logo-normal" src="/landmark/images/logo.png"
                                 alt="Real Estate HTML Template">
                        </a>
                    </div>
                    <div class="pull-right navbar-meta meta-property">
                        <div class="meta-content">

                           @auth
                                <a href="/" class="meta-property button">
                                    <span><i class="fa fa-plus-circle"></i></span>ثبت ملک جدید
                                </a>
                            @endauth
                            @guest
                                <a class="meta-property button" href="#popup_01" data-init="magnificPopup"
                                   data-options='{"type":"inline","removalDelay":700}' data-effect="mfp-3d-unfold"
                                   title="">
                                    <span><i class="fa fa-plus-circle"></i></span>ورود کاربران
                                </a>
                               @endguest
                        </div>
                        <!-- popup-content mfp-with-anim mfp-hide -->
                        <div class="popup-content box-login mfp-with-anim mfp-hide" id="popup_01">
                            <h4 class="title">ورود</h4>
                            @include('layouts.partials.auth.alert')
                            <form class="login-member-container" method="post" action="/users/login">
                                @csrf
                                <div class="social-login-widget">

                                    <div class="social-login-provider-list">
                                        <a rel="nofollow" href="javascript:void(0);" title="ورود با فیسبوک"
                                           data-provider="Facebook">
                                            <img alt="Facebook" title="ورود با فیسبوک"
                                                 src="/landmark/images/icons/facebook.png">
                                        </a>
                                        <a rel="nofollow" href="javascript:void(0);" title="ورود با گوگل"
                                           data-provider="Google">
                                            <img alt="Google" title="ورود با گوگل"
                                                 src="/landmark/images/icons/google.png">
                                        </a>
                                        <a rel="nofollow" href="javascript:void(0);" title="ورود با توییتر"
                                           data-provider="Twitter">
                                            <img alt="Twitter" title="ورود با توییتر"
                                                 src="/landmark/images/icons/twitter.png">
                                        </a>
                                    </div>
                                </div>
                                <div class="login-member-wrap">
                                    <div class="register-member-left">
                                        <div class="item-wrap">
                                            <label>شماره موبایل</label>
                                            <input type="text" id="user_name_login" name="mobile" value=""
                                                   class="required">
                                        </div>
                                        <div class="item-wrap">
                                            <label>رمز عبور</label>
                                            <input type="password" id="password_login" name="password"
                                                   value="" class="required">
                                        </div>
                                    </div>
                                    <div class="login-member-action">
                                        <button type="submit" name="login-account" class="button">
                                            ورود <i class="fa-li fa fa-spinner fa-spin hide"></i>
                                        </button>
                                        <p>
                                            <span>حساب کاربری ندارید؟</span>
                                            <a class="color" href="/users/register" title="Register now!">هم اکنون
                                                ثبت نام کنید!</a>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- End / popup-content mfp-with-anim mfp-hide -->
                    </div>

                    <nav class="pull-right main-menu">
                        <ul class="nav-collapse navbar-nav">
                            <li class="current">
                                <a href="/">خانه</a>
                                <ul class="sub-menu">
                                    <li><a href="/">خانه</a></li>
                                    <li class="current"><a href="/cases">جستجوی پیشرفته</a></li>


                                </ul>
                                <i class="fa fa-angle-down"></i>
                            </li>
                            <li>
                                <a href="/cases">ملک ها</a>
                                <ul class="sub-menu">
                                    <li><a href="/cases">جستجو در ملک ها</a></li>
                                    <li><a href="/cases/create">ثبت ملک جدید</a></li>

                                </ul>
                                <i class="fa fa-angle-down"></i>
                            </li>
                            <li>
                                <a href="/agents">نمایندگان</a>
                                <ul class="sub-menu">
                                    <li><a href="/agents">لیست نمایندگان</a></li>

                                </ul>

                                <i class="fa fa-angle-down"></i>
                            </li>
                            <li>
                                <a href="#">صفحات</a>
                                <ul class="sub-menu">
                                    <li><a href="/users/create">عضویت در سایت</a></li>
                                    <li><a href="/gallery">گالری</a></li>
                                    <li><a href="/partner">شرکا</a></li>
                                    <li><a href="/services">خدمات</a></li>
                                    <li><a href="/abouts">درباره ما</a></li>

                                </ul>
                                <i class="fa fa-angle-down"></i>
                            </li>
                            <li>
                                <a href="/contacts">تماس با ما</a>
                            </li>

                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>
</header>
