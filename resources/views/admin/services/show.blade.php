@extends('layouts.masterPages.admin')
@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="callout callout-info bg-white">نمایش سرویس
            </div>
            <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header">{{$titleCard ?? ''}}</div>
                <div class="card-body">
                    <hr>
                    <strong>id:</strong>
                    <span>{{$item->id}}</span>
                    <hr>
                    <strong>title:</strong>
                    <span>{{$item->title}}</span>
                    <hr>
                    <strong>body:</strong>
                    <span>{{$item->body}}</span>
                    <hr>
                    <strong>avatar_path:</strong>
                    <br>
                    <a href="{{$item->thumbnail_path }}"> <img src="{{$item->thumbnail_path }}" alt="{{$item->title}}" width="100"></a>
                    <hr>


                </div>
            </div>
        </div>
    </div>
@endsection
