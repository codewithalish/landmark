@extends('layouts.masterPages.admin')
@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="callout callout-info bg-white">نمایش دسته
            </div>
            <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header">{{$titleCard ?? ''}}</div>
                <div class="card-body">
                    <img src="{{$item->title }}" alt="{{$item->title}}">
                    <hr>
                    <strong>title:</strong>
                    <span>{{$item->title}}</span>
                </div>
            </div>
        </div>
    </div>
@endsection
