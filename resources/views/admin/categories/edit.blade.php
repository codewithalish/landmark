@extends('layouts.masterPages.admin')
@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">

                        <div class="callout callout-info bg-white">ویرایش دسته بندی</div>
            <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header">{{$cardTitle ?? ''}}</div>
                @include('layouts.partials.auth.alert')

                <form action="/admin/categories/{{$item->id}}" method="post">
                    @csrf
                    @method('put')

                        <div class="mb-3">
                            <label class="form-label" for="title">عنوان</label>
                            <input class="form-control" id="title" type="text" placeholder="title" name="title" value="{{$item->title}}">
                        </div>
                        <button type="submit" class="btn btn-primary active">ویرایش</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
