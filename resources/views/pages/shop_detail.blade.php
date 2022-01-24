@extends('layouts.masterPages.landmark')
@section('content')

<div id="main">
    <div class="section pt-7 pb-7">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="single-product">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-product-images">
                                    <div class="shop-slider owl-carousel owl-theme" data-auto-play="false" data-desktop="1" data-laptop="1" data-tablet="1" data-mobile="1">
                                        <div class="item">
                                            <a href="/landmark/images/shop/shop_detail.jpg" class="mfp-image gallery-item">
                                                <img src="/landmark/images/shop/shop_detail.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="/landmark/images/shop/shop_detail_2.jpg" class="mfp-image gallery-item">
                                                <img src="/landmark/images/shop/shop_detail_2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="/landmark/images/shop/shop_detail_3.jpg" class="mfp-image gallery-item">
                                                <img src="/landmark/images/shop/shop_detail_3.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="/landmark/images/shop/shop_detail_4.jpg" class="mfp-image gallery-item">
                                                <img src="/landmark/images/shop/shop_detail_4.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="summary">
                                    <h1 class="product-title">{{$item->title}}</h1>
                                    <div class="price-stock">
                                        <div class="price"><span>قیمت:</span>{{$item->price}} تومان</div>
                                        <br>
                                        <div class=""> وضعیت:  <span class="">{{$item->status}}</span></div><br>
                                        <div class=""><span> وزن:</span>{{$item->weight}} کیلوگرم</div><br>
                                        <div class=""><span>سایز: </span>{{$item->size}} </div><br>
                                        <div class=""><span>رنگ: </span>{{$item->color}} </div><br>
                                        <div class=""><span>جنس: </span>{{$item->material}} </div><br>
                                        <div class=""><span>گارانتی: </span>{{$item->guaranty}}</div><br>
                                    </div>
                                    <hr>
                                    <p>{{$item->description}}</p>
                                    <br>
                                    <form class="mini-cart">
                                        <div class="quantity">
                                            <div class="quantity-attr">
                                                <button class="qty-decrease" onclick="var qty_el = document.getElementById('quantity'); var qty = qty_el.value; if( !isNaN( qty ) && qty > 1 ) qty_el.value--;return false;" type="button"><i class="fa fa-angle-down"></i></button>
                                                <input id="quantity" type="text" step="1" min="1" max="" name="quantity" value="1" title="تعداد" class="input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric">
                                                <button class="qty-increase" onclick="var qty_el = document.getElementById('quantity'); var qty = qty_el.value; if( !isNaN( qty )) qty_el.value++;return false;" type="button"><i class="fa fa-angle-up"></i></button>
                                            </div>
                                        </div>
                                        <button type="" name="add-to-cart" value="" class="button">
                                            <span class="hide_on_mobile">افزودن به سبد</span>
                                            <span class="show_on_mobile"><i class="icon ion-android-cart"></i></span>
                                        </button>
                                    </form>
                                    <div class="action">
                                        <a href="#" class="compare">
                                            <i class="icon ion-arrow-swap"></i>
                                        </a>
                                        <a href="#" class="wishlist">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                    </div>
                                    <div class="product-meta">
                                        <span class="posted_in">دسته: <a href="#">لامپ</a></span>
                                        <span class="tagged_as">برچسب: <a href="#">لامپ</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-product">
                        <div class="tabs">
                            <ul class="nav nav-tabs tabs">
                                <li class="active">
                                    <a data-toggle="tab" href="#tab-desc" aria-expanded="true">توضیحات</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab-specs" aria-expanded="false">مشخصات</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab-review" aria-expanded="false">نقد و بررسی ها</a>
                                </li>
                            </ul>
                            <div class="tab-content">

                                <div class="tab-pane fade active in" id="tab-desc">
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد. لورم</p>
                                </div>

                                <div id="tab-specs" class="tab-pane fade">
                                    <table class="table">
                                        <tr>
                                            <td>وزن</td>
                                            <td>35 کیلوگرم</td>
                                        </tr>
                                        <tr>
                                            <td>اندازه</td>
                                            <td>بزرگ</td>
                                        </tr>
                                        <tr>
                                            <td>جنس</td>
                                            <td>پلاستیک</td>
                                        </tr>
                                        <tr>
                                            <td>رنگ</td>
                                            <td>سبز، آبی، قرمز</td>
                                        </tr>
                                        <tr>
                                            <td>گارانتی</td>
                                            <td>12 سال</td>
                                        </tr>
                                    </table>
                                </div>

                                <div id="tab-review" class="tab-pane fade">
                                    <div class="property-comment">
                                        <ul class="list-comment">
                                            <li class="item-comment">
                                                <div class="item-comment-header">
                                                    <div class="item-comment-header-left">
                                                        <h4 class="name-user-comment">کرال </h4>
                                                        <span class="datetime">30 فروردین 1397 </span>
                                                    </div>
                                                    <div class="item-comment-header-right">
                                                        <div class="stars-rating">
                                                            <span style="width: 100%"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="item-comment-content">
                                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای
                                                </p>
                                            </li>
                                            <li class="item-comment">
                                                <div class="item-comment-header">
                                                    <div class="item-comment-header-left">
                                                        <h4 class="name-user-comment">الکس فرگوسن </h4>
                                                        <span class="datetime">30 فروردین 1397 </span>
                                                    </div>
                                                    <div class="item-comment-header-right">
                                                        <div class="stars-rating">
                                                            <span style="width: 100%"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="item-comment-content">
                                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                                </p>
                                            </li>
                                            <li class="item-comment">
                                                <div class="item-comment-header">
                                                    <div class="item-comment-header-left">
                                                        <h4 class="name-user-comment">جان اسنو </h4>
                                                        <span class="datetime">30 فروردین 1397 </span>
                                                    </div>
                                                    <div class="item-comment-header-right">
                                                        <div class="stars-rating">
                                                            <span style="width: 40%"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="item-comment-content">
                                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای
                                                </p>
                                            </li>
                                        </ul>
                                        <h3 class="box-title">نقد و بررسی شما</h3>
                                        <form class="form-comment-wrap">
                                            <div class="form-comment">
                                                <div class="form-item">
                                                    <input type="text" name="user_name" placeholder="نام" value="">
                                                </div>
                                                <div class="form-item">
                                                    <input type="text" name="user_email" placeholder="ایمیل" value="">
                                                </div>
                                                <div class="form-item form-textarea">
                                                    <textarea name="user_msg" placeholder="دیدگاه شما ..."></textarea>
                                                </div>
                                            </div>
                                            <button class="button" type="">ثبت</button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="section">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title">
                                    <div class="wrap-title">
                                        <h3 class="title">
                                            <span class="first-word">محصولات</span> مرتبط
                                        </h3>
                                        <p class="sub-title">
                                            <i class="icon-decotitle"></i>
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="product-item">
                                    <div class="featured-item">
                                        <a href="shop-detail.html">
                                            <img src="images/shop/shop_1.jpg" alt="">
                                        </a>
                                        <div class="action">
                                            <a href="#" class="add-cart">
                                                <i class="icon ion-android-cart"></i>
                                            </a>
                                            <a href="#" class="compare">
                                                <i class="icon ion-arrow-swap"></i>
                                            </a>
                                            <a href="#" class="wishlist">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a href="ajax/product-quickview.html" class="quick-view">
                                                <i class="icon ion-arrow-expand"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="info-item">
                                        <h2 class="product-title">
                                            <a href="shop-detail.html">لورم ایپسوم متن</a>
                                        </h2>
                                        <div class="stars-rating">
                                            <span style="width: 100%"></span>
                                        </div>
                                        <span class="price">215,000 تومان</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="product-item">
                                    <div class="featured-item">
                                        <a href="shop-detail.html">
                                            <img src="images/shop/shop_2.jpg" alt="">
                                        </a>
                                        <div class="action">
                                            <a href="#" class="add-cart">
                                                <i class="icon ion-android-cart"></i>
                                            </a>
                                            <a href="#" class="compare">
                                                <i class="icon ion-arrow-swap"></i>
                                            </a>
                                            <a href="#" class="wishlist">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a href="ajax/product-quickview.html" class="quick-view">
                                                <i class="icon ion-arrow-expand"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="info-item">
                                        <h2 class="product-title">
                                            <a href="shop-detail.html">صندلی سالن</a>
                                        </h2>
                                        <div class="stars-rating">
                                            <span style="width: 60%"></span>
                                        </div>
                                        <span class="price">890,000 تومان</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="product-item">
                                    <div class="featured-item">
                                        <a href="shop-detail.html">
                                            <img src="images/shop/shop_3.jpg" alt="">
                                        </a>
                                        <div class="action">
                                            <a href="#" class="add-cart">
                                                <i class="icon ion-android-cart"></i>
                                            </a>
                                            <a href="#" class="compare">
                                                <i class="icon ion-arrow-swap"></i>
                                            </a>
                                            <a href="#" class="wishlist">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a href="ajax/product-quickview.html" class="quick-view">
                                                <i class="icon ion-arrow-expand"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="info-item">
                                        <h2 class="product-title">
                                            <a href="shop-detail.html">لورم ایپسوم</a>
                                        </h2>
                                        <div class="stars-rating">
                                            <span style="width: 80%"></span>
                                        </div>
                                        <span class="price">605,000 تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sidebar">
                        <div class="widget">
                            <h3 class="widget-title">جستجو</h3>
                            <form class="form-search">
                                <input type="search" name="s" class="form-control" value="" placeholder="جستجو ...">
                            </form>
                        </div>
                        <div class="widget">
                            <h3 class="widget-title">دسته بندی ها</h3>
                            <ul class="sidebar-list">
                                <li><a href="#">لورم ایپسوم</a></li>
                                <li><a href="#">لورم ایپسوم</a></li>
                                <li><a href="#">لورم</a></li>
                                <li><a href="#">لورم ایپسوم</a></li>
                                <li><a href="#">لورم</a></li>
                                <li><a href="#">لامپ</a></li>
                                <li><a href="#">مبل</a></li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h3 class="widget-title">فیلتر</h3>
                            <div class="price_slider_wrapper widget_price_filter">
                                <div class="price_slider" style="display:none;"></div>
                                <div class="price_slider_amount" data-currency="تومان" data-step="1000">
                                    <input type="hidden" id="min_price" name="min_price" value="" data-min="5000" placeholder="حداقل قیمت">
                                    <input type="hidden" id="max_price" name="max_price" value="" data-max="600000" placeholder="حداکثر قیمت">
                                    <div class="price_label" style="display:none;">
                                        <span class="from"></span> - <span class="to"></span>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <button type="submit" class="button mt-2">فیلتر</button>
                            </div>
                        </div>
                        <div class="widget">
                            <h3 class="widget-title">محصولات اخیر</h3>
                            <ul class="recent-products">
                                <li>
                                    <img src="images/shop/thumb/shop_1.png" alt="">
                                    <h5><a href="blog-detail-sidebar.html">لورم ایپسوم متن</a></h5>
                                    <span class="post-date">489,000 تومان</span>
                                </li>
                                <li>
                                    <img src="images/shop/thumb/shop_1.png" alt="">
                                    <h5><a href="blog-detail-sidebar.html">لورم ایپسوم متن</a></h5>
                                    <span class="post-date">489,000 تومان</span>
                                </li>
                                <li>
                                    <img src="images/shop/thumb/shop_1.png" alt="">
                                    <h5><a href="blog-detail-sidebar.html">لورم ایپسوم متن</a></h5>
                                    <span class="post-date">489,000 تومان</span>
                                </li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h3 class="widget-title">برچسب ها</h3>
                            <div class="tagcloud">
                                <a href="#">لورم ایپسوم</a><a href="#">لورم ایپسوم</a><a href="#">لورم</a><a href="#">تخت خواب</a><a href="#">لورم ایپسوم متن</a><a href="#">لورم ایپسوم</a><a href="#">کلاسیک</a><a href="#">لورم</a><a href="#">لورم ایپسوم</a><a href="#">لورم ایپسوم</a><a href="#">لامپ</a><a href="#">لورم ایپسوم</a><a href="#">مدرن</a><a href="#">مبل</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
