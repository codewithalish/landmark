@extends('layouts.masterPages.landmark')
@section('content')

<div id="main">
    <div class="section pt-7 pb-7">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="toolbar-products">
                        <div class="product-style-control">
                            نمایش:
                            <span class="view-grid active"><i class="fa fa-th-large"></i></span>
                            <span class="view-list"><a href="shop-list.html"><i class="fa fa-th-list"></i></a></span>
                        </div>
                        <form class="commerce-ordering">
                            <label>مرتب سازی:</label>
                            <select name="orderby" class="orderby">
                                <option value="" selected>مرتب سازی پیشفرض</option>
                                <option value="">ارزان ترین</option>
                                <option value="">گران ترین</option>
                                <option value="">جدید ترین</option>
                                <option value="">قدیمی ترین</option>
                                <option value="">مجبوب ترین</option>
                            </select>
                        </form>
                        <form class="commerce-product_per">
                            <label>تعداد:</label>
                            <select name="product_per">
                                <option value="">6</option>
                                <option value="" selected>12</option>
                                <option value="">18</option>
                                <option value="">24</option>
                                <option value="">30</option>
                                <option value="">36</option>
                                <option value="">40</option>
                                <option value="">46</option>
                                <option value="">50</option>
                            </select>
                        </form>
                    </div>
                    <div class="product-grid">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
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
                                        <span class="price">$215</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
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
                                        <span class="price">$890</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
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
                                        <span class="price">
														<ins>$605</ins>
													</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item">
                                    <div class="featured-item">
                                        <a href="shop-detail.html">
                                            <img src="images/shop/shop_4.jpg" alt="">
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
                                        <span class="price">$456</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item">
                                    <div class="featured-item">
                                        <a href="shop-detail.html">
                                            <img src="images/shop/shop_5.jpg" alt="">
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
                                            <span style="width: 100%"></span>
                                        </div>
                                        <span class="price">$392</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item">
                                    <div class="featured-item">
                                        <a href="shop-detail.html">
                                            <img src="images/shop/shop_6.jpg" alt="">
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
                                            <span style="width: 0%"></span>
                                        </div>
                                        <span class="price">$800</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item">
                                    <div class="featured-item">
                                        <a href="shop-detail.html">
                                            <img src="images/shop/shop_7.jpg" alt="">
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
                                            <span style="width: 0%"></span>
                                        </div>
                                        <span class="price">$3000</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item">
                                    <div class="featured-item">
                                        <a href="shop-detail.html">
                                            <img src="images/shop/shop_8.jpg" alt="">
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
                                        <span class="price">
														<ins>$600</ins>
													</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item">
                                    <div class="featured-item">
                                        <a href="shop-detail.html">
                                            <img src="images/shop/shop_9.jpg" alt="">
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
                                            <span style="width: 80%"></span>
                                        </div>
                                        <span class="price">$1400</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item">
                                    <div class="featured-item">
                                        <a href="shop-detail.html">
                                            <img src="images/shop/shop_10.jpg" alt="">
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
                                            <a href="shop-detail.html">لورم ایپسوم متن ساختگی</a>
                                        </h2>
                                        <div class="stars-rating">
                                            <span style="width: 100%"></span>
                                        </div>
                                        <span class="price">$1550</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item">
                                    <div class="featured-item">
                                        <a href="shop-detail.html">
                                            <img src="images/shop/shop_11.jpg" alt="">
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
                                            <span style="width: 40%"></span>
                                        </div>
                                        <span class="price">$320</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item">
                                    <div class="featured-item">
                                        <a href="shop-detail.html">
                                            <img src="images/shop/shop_12.jpg" alt="">
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
                                        <span class="price">$550</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="pagination-loop">
									<a class="prev page-numbers" href="#"><i class="ion-ios-arrow-forward"></i></a>
									<a class="page-numbers" href="#">1</a>
									<span class="page-numbers current">2</span>
									<a class="page-numbers" href="#">3</a>
									<a class="next page-numbers" href="#"><i class="ion-ios-arrow-back"></i></a>
								</span>
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
                                    <span class="post-date">458,000 تومان</span>
                                </li>
                                <li>
                                    <img src="images/shop/thumb/shop_1.png" alt="">
                                    <h5><a href="blog-detail-sidebar.html">لورم ایپسوم متن</a></h5>
                                    <span class="post-date">458,000 تومان</span>
                                </li>
                                <li>
                                    <img src="images/shop/thumb/shop_1.png" alt="">
                                    <h5><a href="blog-detail-sidebar.html">لورم ایپسوم متن</a></h5>
                                    <span class="post-date">458,000 تومان</span>
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
