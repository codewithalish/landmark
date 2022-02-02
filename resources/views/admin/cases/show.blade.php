@extends('layouts.masterPages.admin')
@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="callout callout-info bg-white">اطلاعات پست
            </div>
            <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header">{{$titleCard ?? ''}}</div>
                <div class="card-body">
                    <img src="{{$item->image_path }}" alt="{{$item->title}}">
                    <hr>
                    <strong>id:</strong>
                    <span>{{$item->id}}</span>
                    <hr>
                    <strong>title:</strong>
                    <span>{{$item->title}}</span>
                    <hr>
                    <strong>address:</strong>
                    <span>{{$item->address}}</span>
                    <hr>
                    <strong>user_id:</strong>
                    <span>{{$item->user_id}}</span>

                    <hr>
                    <strong>area:</strong>
                    <span>{{$item->area}}</span>
                    <hr>
                    <strong>room_number:</strong>
                    <span>{{$item->room_number}}</span>
                    <hr>
                    <strong>parking_number:</strong>
                    <span>{{$item->parking_number}}</span>
                    <hr>
                    <strong>parking_number:</strong>
                    <span>{{$item->parking_number}}</span>

                    <hr>
                    <strong>price:</strong>
                    <span>{{$item->price}}</span>
                    <hr>
                    <strong>deposit:</strong>
                    <span>{{$item->deposit}}</span>
                    <hr>
                    <strong>rent:</strong>
                    <span>{{$item->rent}}</span>
                    <hr>
                    <strong>type:</strong>
                    <span>{{$item->type}}</span>

                    <hr>
                    <strong>contract:</strong>
                    <span>{{$item->contract}}</span>
                    <hr>
                    <strong>is_vip:</strong>
                    <span>{{$item->is_vip}}</span>
                    <hr>
                    <strong>description:</strong>
                    <span>{{$item->description}}</span>
                    <hr>
                    <strong>detail:</strong>
                    <span>{{$item->detail}}</span>

                    <hr>
                    <strong>avatar_path:</strong>
                    <span>{{$item->avatar_path}}</span>
                    <hr>
                    <strong>video_path:</strong>
                    <span>{{$item->video_path}}</span>
                </div>
            </div>
        </div>
    </div>
@endsection
