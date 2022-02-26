@extends('layouts.masterPages.admin')
@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">

                        <div class="callout callout-info bg-white">ویرایش اطلاعات کاربر</div>
            <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header">{{$cardTitle ?? ''}}</div>
                @include('layouts.partials.auth.alert')

                <form action="/admin/users/{{$item->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="name">نام کاربری</label>
                            <input class="form-control" id="name" type="text" placeholder="name" name="name" value="{{$item->name}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="email">ایمیل</label>
                            <input class="form-control" id="email" type="email" placeholder="email" name="email" value="{{$item->email}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="mobile">شماره همراه</label>
                            <input class="form-control" id="mobile" type="number" placeholder="mobile" name="mobile" value="{{$item->mobile}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="password">رمز عبور</label>
                            <input class="form-control" id="password" type="text" placeholder="password" name="password" value="{{$item->password}}">
                        </div>

                        <button type="submit" class="btn btn-primary active" >ویرایش</button>

                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
