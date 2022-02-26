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
                    <strong>user_id:</strong>
                    <span>{{$item->user_id}}</span>
                    <hr>
                    <strong>commentable_id:</strong>
                    <span>{{$item->commentable_id}}</span>
                    <hr>
                    <strong>commentable_type:</strong>
                    <span>{{$item->commentable_type}}</span>
                    <hr>
                    <strong>body:</strong>
                    <span>{{$item->body}}</span>

                </div>
            </div>
        </div>
    </div>
@endsection
