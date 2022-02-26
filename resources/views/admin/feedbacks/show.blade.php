@extends('layouts.masterPages.admin')
@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="callout callout-info bg-white">نمایش بازخورد
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
                    <span>{{$item->user_id}}</span>
                    <hr>
                    <strong>body:</strong>
                    <span>{{$item->body}}</span>
                    <hr>


                </div>
            </div>
        </div>
    </div>
@endsection
