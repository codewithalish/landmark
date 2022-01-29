@extends('layouts.masterPages.landmark')
@section('content')

<div id="main">
    <div class="section pt-7 pb-7">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>ورود</h2>
                    <div class="my-account-wrap">
                        <form class="login-form">
                            <div class="item-wrap">
                                <label>نام کاربری یا ایمیل <span class="required">*</span></label>
                                <input type="text" id="keyword" name="keyword">
                            </div>
                            <div class="item-wrap">
                                <label>رمز عبور <span class="required">*</span></label>
                                <input type="password" name="password" id="password">
                            </div>
                            <div class="item-wrap form-submit">
                                <input type="submit" class="button-2" name="login" value="ورود">
                                <input class="checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">
                                <span class="fw-bolder">به خاطر سپاری</span>
                            </div>
                        </form>
                        <div class="lost-password">
                            <a href="#">رمز عبور خود را فراموش کرده اید؟</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
