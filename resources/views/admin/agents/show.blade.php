@extends('layouts.masterPages.admin')
@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="callout callout-info bg-white">{{$item->name}}نمایش کاربر
            </div>
            <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header">{{$titleCard ?? ''}}</div>
                <div class="card-body">
                    <a href="{{$item->avatar_path }}"> <img src="{{$item->avatar_path }}" alt="{{$item->title}}" width="100"></a>
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
                    <strong>address:</strong>
                    <span>{{$item->address}}</span>
                    <hr>
                    <strong>email:</strong>
                    <span>{{$item->email}}</span>
                    <hr>
                    <strong>body:</strong>
                    <span>{{$item->body}}</span>
                    <hr>
                    <strong>telegram:</strong>
                    <span>{{$item->telegram}}</span>
                    <hr>
                    <strong>whatsapp:</strong>
                    <span>{{$item->whatsapp}}</span>
                    <hr>


                </div>
            </div>
        </div>
    </div>
@endsection
