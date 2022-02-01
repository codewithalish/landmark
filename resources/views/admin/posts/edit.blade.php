@extends('layouts.masterPages.admin')
@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">

            {{--            <div class="callout callout-info bg-white">اطلاعات پیج</div>--}}
            <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header">{{$cardTitle ?? ''}}</div>
                @include('layouts.partials.auth.alert')

                <form action="/admin/posts/{{$item->id}}" method="post">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="title">عنوان</label>
                            <input class="form-control" id="title" type="text" placeholder="title" name="title" value="{{$item->title}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="body">body</label>
                            <input class="form-control" id="body" type="" placeholder="body" name="body" value="{{$item->body}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="user_id">user_id</label>
                            <input class="form-control" id="user_id" type="text" placeholder="user_id" name="user_id" value="{{$item->user_id}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="avarat_path">اپلود تصویر</label>
                            <input class="form-control" id="avarat_path" type="file" placeholder="avarat_path" name="avarat_path" value="{{$item->avarat_path}}">
                        </div>

                        <button type="submit">ویرایش</button>

                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
