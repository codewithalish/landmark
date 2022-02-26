@extends('layouts.masterPages.admin')
@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="callout callout-info bg-white">نمایش کامنت
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
                    <strong>avatar_path:</strong>
                    <a href="{{$item->avatar_path }}"> <img src="{{$item->avatar_path }}" alt="{{$item->title}}" width="100"></a>

                </div>
            </div>
        </div>
    </div>
@endsection
