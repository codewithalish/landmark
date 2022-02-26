@extends('layouts.masterPages.admin')
@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="callout callout-info bg-white">نمایش پیام ارسالی
            </div>
            <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header">{{$titleCard ?? ''}}</div>
                <div class="card-body">
                    <strong>id:</strong>
                    <span>{{$item->id}}</span>
                    <hr>
                    <strong>name:</strong>
                    <span>{{$item->name}}</span>
                    <hr>
                    <strong>mobile:</strong>
                    <span>{{$item->mobile}}</span>
                    <hr>
                    <strong>message:</strong>
                    <span>{{$item->message}}</span>
                </div>
            </div>
        </div>
    </div>
@endsection
