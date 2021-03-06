@extends('layouts.masterPages.admin')
@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">

                        <div class="callout callout-info bg-white">ویرایش منو{{$item->route}} </div>
            <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header">{{$cardTitle ?? ''}}</div>
                @include('layouts.partials.auth.alert')

                <form action="/admin/menu/{{$item->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="card-body">

                        <div class="mb-3">
                            <label class="form-label" for="route">اسم</label>
                            <input class="form-control" id="route" type="text" placeholder="route" name="route" value="{{$item->route}}">
                        </div>

                        <button type="submit" class="btn btn-primary active">ویرایش</button>

                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
