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
                            <form class="login-form" method="post" action="/create_user">
                                @csrf
                                <div class="item-wrap">
                                    <label>نام کاربری <span class="required">*</span></label>
                                    <input type="text" id="name" name="name">
                                </div>
                                <div class="item-wrap">
                                    <label>رمز عبور <span class="required">*</span></label>
                                    <input type="number" id="room_number" name="room_number">
                                </div>
                                <div class="item-wrap">
                                    <label>تلفن همراه <span class="required">*</span></label>
                                    <input type="text" id="mobile" name="mobile">
                                </div>
                                <div class="item-wrap">
                                    <label>ایمیل <span class="required">*</span></label>
                                    <input type="text" id="email" name="email">
                                </div>
                                <div class="item-wrap">
                                    <label>ادرس تلگرامی <span class="required">*</span></label>
                                    <input type="text" id="telegram" name="telegram">
                                </div>
                                <div class="item-wrap">
                                    <label>ادرس واتساپ<span class="required">*</span></label>
                                    <input type="text" id="whatsapp" name="whatsapp">
                                </div>
                                <div class="item-wrap">
                                    <label>آپلود تصویر <span class="required">*</span></label>
                                    <input type="file" id="avatar_path" name="avatar_path">
                                </div>

                                <div class="item-wrap form-submit">
                                    <input class="checkbox" name="rememberme" type="checkbox" id="rememberme"
                                           value="forever">
                                    <span class="fw-bolder">به خاطر سپاری</span>
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
