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
                            @foreach($items as $item)
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item">
                                    <div class="featured-item">
                                        <a href="/shop_detail/{{$item->id}}">
                                            <img src="/landmark/images/shop/shop_2.jpg" alt="">
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
                                            <a href="/shop_detail/{{$item->id}}">{{$item->title}}</a>
                                        </h2>
                                        <div class="stars-rating">
                                            <span style="width: 60%"></span>
                                        </div>
                                        <span class="price">{{$item->price}}تومان</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
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
                        @include('widgets.shop_widgets.search')
                        @include('widgets.shop_widgets.categories')
                        @include('widgets.shop_widgets.filters')
                        @include('widgets.shop_widgets.last_products')
                        @include('widgets.shop_widgets.labels')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
