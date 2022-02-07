@extends('layouts.masterPages.landmark')
@section('content')

    <div id="main">
        <div class="section pt-7 pb-7">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>عضویت</h2>
                        <div class="my-account-wrap">
                            @include('layouts.partials.auth.alert')
                            <form class="login-form" method="post" action="/agents">
                                @csrf
                                <div class="item-wrap">
                                    <label>نام کاربری <span class="required">*</span></label>
                                    <input type="text" id="name" name="name" value="{{old('name') ?? ''}}">
                                </div>
                                <div class="item-wrap">
                                    <label>رمز عبور <span class="required">*</span></label>
                                    <input type="text" id="room_number" name="password" value="{{old('password') ?? ''}}">
                                </div>
                                <div class="item-wrap">
                                    <label>تلفن همراه <span class="required">*</span></label>
                                    <input type="text" id="mobile" name="mobile" value="{{old('mobile') ?? ''}}">
                                </div>
                                <div class="item-wrap">
                                    <label>ایمیل <span class="required">*</span></label>
                                    <input type="text" id="email" name="email" value="{{old('email') ?? ''}}">
                                </div>
                                <div class="item-wrap">
                                    <label>بیوگرافی <span class="required">*</span></label>
                                    <input type="text" id="email" name="bio" value="{{old('bio') ?? ''}}">
                                </div>
                                <div class="item-wrap">
                                    <label>ادرس <span class="required">*</span></label>
                                    <input type="text" id="email" name="address" value="{{old('address') ?? ''}}">
                                </div>

                                <div class="item-wrap">
                                    <label>ادرس تلگرامی <span class="required"></span></label>
                                    <input type="text" id="telegram" name="telegram" value="{{old('telegram') ?? ''}}">
                                </div>
                                <div class="item-wrap">
                                    <label>ادرس واتساپ<span class="required"></span></label>
                                    <input type="text" id="whatsapp" name="whatsapp" value="{{old('whatsapp') ?? ''}}">
                                </div>
                                <div class="item-wrap">
                                    <label>آپلود تصویر <span class="required"></span></label>
                                    <input type="file" id="avatar_path" name="avatar_path" value="{{old('avatar_path') ?? ''}}">
                                </div>

                                    <br>
                                    <br>
                                    <input type="submit" class="button-2" name="login" value="ثبت">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
