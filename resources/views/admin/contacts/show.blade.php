@extends('layouts.masterPages.admin')
@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">

            <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header">{{$titleCard ?? ''}}</div>
                <div class="card-body">
                    <img src="{{$item->image_path }}" alt="{{$item->title}}">
                    <hr>
                    <strong>id:</strong>
                    <span>{{$item->id}}</span>
                    <hr>
                    <strong>name:</strong>
                    <span>{{$item->name}}</span>
                    <hr>
                    <strong>mobile:</strong>
                    <span>{{$item->mobile}}</span>
                    <hr>
                    <strong>email:</strong>
                    <span>{{$item->email}}</span>
                    <hr>
                    <strong>message:</strong>
                    <span>{{$item->message}}</span>
                </div>
            </div>
        </div>
    </div>
@endsection
