@extends('layouts.masterPages.landmark')
@section('content')

    <div id="main">
        <div class="section pt-7 pb-7">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>ویرایش اطلاعات کاربری</h2>
                        <div class="my-account-wrap">
                            @include('layouts.partials.auth.alert')
                            <form class="login-form" method="post" action="/users/{{$item->id}}">
                                @csrf
                                @method('put')
                                <div class="item-wrap">
                                    <label>نام کاربری <span class="required">*</span></label>
                                    <input type="text" id="name" name="name" value="{{$item->name}}">
                                </div>
                                <div class="item-wrap">
                                    <label>رمز عبور <span class="required">*</span></label>
                                    <input type="text" id="password" name="password" value="{{$item->password}}">
                                </div>
                                <div class="item-wrap">
                                    <label>تلفن همراه <span class="required">*</span></label>
                                    <input type="text" id="mobile" name="mobile" value="{{$item->mobile}}">
                                </div>
                                <div class="item-wrap">
                                    <label>ایمیل <span class="required">*</span></label>
                                    <input type="text" id="email" name="email" value="{{$item->email}}">
                                </div>

                                <br>
                                <br>
                                <button type="submit" class="btn btn-primary active">ویرایش</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
