@extends('layouts.masterPages.landmark')
@section('content')
    <div id="main">
        <div class="section pt-7 pb-7">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            @foreach($items as $item)
                                <div class="col-sm-6">
                                    <div class="property-item">
                                        <div class="property-item-wrap">
                                            <div class="item-head">
                                                <h4 class="item-title">
                                                    <i class="ion-bookmark">{{$item->is_vip}}</i>
                                                    <a href="/cases/{{$item->id}}"
                                                       title="Vilayi 2 tabage">{{$item->title}}</a>
                                                </h4>
                                                <span class="location">{{$item->address}}</span>
                                            </div>
                                            <div class="item-featured">
                                                <a href="/cases/{{$item->id}}" title="Family House in Hudson">
                                                    <img src="/landmark/images/property/property_1.jpg"
                                                         alt="Family House in Hudson">
                                                </a>
                                                <span
                                                    class="property-status">{{__('custom.contract')[$item->contract]}}</span>
                                            </div>
                                            <div class="info">
													<span class="primary-file-1">
														<i class="icon-ruler"></i><span>{{$item->area}}</span> <span> متر مربع</span>
													</span>
                                                <span class="primary-file-2">
														<i class="icon-bed"></i> <span>{{$item->room_number}}</span><span> خوابه</span>
													</span>
                                                <span class="primary-file-3">
														<i class="icon-storage"></i>{{$item->parking_number}} <span> پارکینگ</span>
													</span>
                                                <span class="primary-file-4">
														<i class="icon-bath"></i> <span>{{$item->bath_number}}</span><span> سرویس بهداشتی</span>
													</span>
                                            </div>
                                            <div class="action">
                                                <div class="price">
                                                    <span class="amount">{{number_format($item->price)}} تومان</span>
                                                </div>
                                                <div class="action-post">
                                                    @if($item->liked)
                                                        <a data-toggle="tooltip" data-placement="top" title=""
                                                           data-original-title="علاقه‌مندی‌ها"
                                                           href="cases/{{$item->id}}/dislike">
                                                            <i class="fa fa-heart"></i>
                                                        </a>

                                                    @else
                                                        <a data-toggle="tooltip" data-placement="top" title=""
                                                           data-original-title="علاقه‌مندی‌ها"
                                                           href="cases/{{$item->id}}/like">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>

                                                    @endif
                                                    <div class="property-sharing">
                                                        <a data-toggle="tooltip" data-placement="top" title=""
                                                           data-original-title="علاقه‌مندی‌ها" class="like" href="#">
                                                            <i class="ion-android-share-alt"></i>
                                                        </a>
                                                        <div class="social-property">
                                                            <a title="اشتراک‌گذاری در فیسبوک" class="share">
                                                                <i class="fa fa-facebook"></i>
                                                            </a>
                                                            <a title="اشتراک‌گذاری در توییتر" class="share">
                                                                <i class="fa fa-twitter"></i>
                                                            </a>
                                                            <a title="اشتراک‌گذاری در تلگرام" class="share">
                                                                <i class="fa fa-telegram"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <a data-toggle="tooltip" data-placement="top" title=""
                                                       data-original-title="مقایسه" class="compare" href="#">
                                                        <i class="ion-arrow-swap"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <span class="pagination-loop" style="padding: 0 20%">
								 {{$items->links()}}
								</span>

                    </div>
                    <div class="col-md-3">
                        <div class="sidebar">
                            @include('widgets.case_search')
                            @include('widgets.agent_vip')
                            @include('widgets.last_cases')

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
