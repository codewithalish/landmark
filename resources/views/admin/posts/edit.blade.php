@extends('layouts.masterPages.admin')
@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">

                        <div class="callout callout-info bg-white">ویرایش پست{{$item->title}} </div>
            <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header">{{$cardTitle ?? ''}}</div>
                @include('layouts.partials.auth.alert')

                <form action="/admin/posts/{{$item->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="title">عنوان</label>
                            <input class="form-control" id="title" type="text" placeholder="title" name="title" value="{{$item->title}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="body">body</label>
                            <input class="form-control" id="body" type="text" placeholder="body" name="body" value="{{$item->body}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="avatar_path">اپلود تصویر</label>
                            <input class="form-control" id="avatar_path" type="file" placeholder="avatar_path" name="avatar_path" value="{{$item->avatar_path}}">
                        </div>

                        <button type="submit" class="btn btn-primary active" >ویرایش</button>

                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
