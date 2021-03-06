@extends('layouts.masterPages.landmark')
@section('content')

<div id="main">
    <div class="section pt-7">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 p-0">
                    <div class="mb-5 text-center">
                        <h2 class="color-2 text-uppercase mb-3">گالری تصاویر</h2>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در</p>
                    </div>
                    <div class="galleries">
                    @foreach($items as $item)
                        <div class="col-md-3 col-sm-4 col-xs-6 p-0">
                            <a href="{{$item->avatar_path}}" class="mfp-image gallery-item">
                                <div class="gallery-content">
                                    <img src="{{$item->avatar_path}}">
                                </div>
                                <i class="fa fa-search-plus"></i>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
