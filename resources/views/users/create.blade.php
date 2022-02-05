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
                            <form class="login-form" method="post" action="/users/create">
                                @csrf
                                <div class="item-wrap">
                                    <label>نام کاربری <span class="required">*</span></label>
                                    <input type="text" id="name" name="name">
                                </div>
                                <div class="item-wrap">
                                    <label>رمز عبور <span class="required">*</span></label>
                                    <input type="text" id="room_number" name="password">
                                </div>
                                <div class="item-wrap">
                                    <label>تلفن همراه <span class="required">*</span></label>
                                    <input type="text" id="mobile" name="mobile">
                                </div>
                                <div class="item-wrap">
                                    <label>ایمیل <span class="required">*</span></label>
                                    <input type="text" id="email" name="email">
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
