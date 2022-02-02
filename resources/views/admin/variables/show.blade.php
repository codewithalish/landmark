@extends('layouts.masterPages.admin')
@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="callout callout-info bg-white">variable
            </div>
            <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header">{{$titleCard ?? ''}}</div>
                <div class="card-body">
                    <hr>
                    <strong>id:</strong>
                    <span>{{$item->id}}</span>
                    <hr>
                    <strong>key:</strong>
                    <span>{{$item->key}}</span>
                    <hr>
                    <strong>value:</strong>
                    <span>{{$item->value}}</span>

                </div>
            </div>
        </div>
    </div>
@endsection
