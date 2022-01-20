@extends('layouts.masterPages.admin')
@section('content')

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>ایجاد پست</h2>
                        <div>
                            <form method="post" action="" >
                                <div class="item-wrap">
                                    <label>عنوان <span class="required">*</span></label>
                                    <input type="text" id="title" name="title">
                                </div>
                                <br>
                                <div class="item-wrap">
                                    <label>تعداد اتاق <span class="required">*</span></label>
                                    <input type="number" id="room_number" name="room_number">
                                </div><br>
                                <div class="item-wrap">
                                    <label>مساحت <span class="required">*</span></label>
                                    <input type="number" id="area" name="area">
                                </div><br>
                                <div class="item-wrap">
                                    <label>تعداد پارکینگ <span class="required">*</span></label>
                                    <input type="number" id="parking_number" name="parking_number">
                                </div><br>
                                <div class="item-wrap">
                                    <label>تعداد سرویس بهداشتی <span class="required">*</span></label>
                                    <input type="number" id="bath_number" name="bath_number">
                                </div><br>
                                <div class="item-wrap">
                                    <label>قیمت فروش <span class="required">*</span></label>
                                    <input type="number" id="price" name="price">
                                </div><br>
                                <div class="item-wrap">
                                    <label>اجاره بها <span class="required">*</span></label>
                                    <input type="number" id="rent" name="rent">
                                </div><br>
                                <div class="item-wrap">
                                    <label>ودیعه <span class="required">*</span></label>
                                    <input type="number" id="deposit" name="deposit">
                                </div><br>
                                <div class="item-wrap">
                                    <label>نوع ملک <span class="required">*</span></label>
                                    <input type="text" id="type" name="type">
                                </div><br>
                                <div class="item-wrap">
                                    <label>اپلود تصاویر <span class="required">*</span></label>
                                    <input type="text" id="avatar_path" name="avatar_path">
                                </div><br>
                                <div class="item-wrap">
                                    <label>ویژه <span class="required">*</span></label>
                                    <input type="text" id="is_vip" name="is_vip">
                                </div><br>
                                <div class="item-wrap">
                                    <label>توضیحات تکمیلی <span class="required">*</span></label>
                                    <input type="text" id="description" name="description">
                                </div><br>
                                <div class="item-wrap">
                                    <label>ادرس <span class="required">*</span></label>
                                    <input type="text" id="address" name="address">
                                </div><br>
                                <div class="item-wrap form-submit">
                                    <input class="checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">
                                    <span class="fw-bolder">به خاطر سپاری</span>
                                    <br> <br>
                                    <input type="submit" class="button-2" name="login" value="ثبت">
                                </div><br>
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
