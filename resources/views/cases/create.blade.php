@extends('layouts.masterPages.landmark')
@section('content')

<div id="main">
    <div class="section pt-7 pb-7">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.partials.auth.alert')
                    <h2>ثبت ملک جدید</h2>
                    <div class="my-account-wrap">
                        <form class="login-form" method="post" action="/cases" enctype="multipart/form-data">
                            @csrf
                            <div class="item-wrap">
                                <label>عنوان <span class="required">*</span></label>
                                <input type="text" id="title" name="title" value="{{old('title') ?? ''}}">
                            </div>
                            <div class="item-wrap">
                                <label>تعداد اتاق <span class="required">*</span></label>
                                <input type="number" id="room_number" name="room_number" value="{{old('room_number') ?? ''}}">
                            </div>
                            <div class="item-wrap">
                                <label>مساحت <span class="required">*</span></label>
                                <input type="number" id="area" name="area" value="{{old('area') ?? ''}}">
                            </div>
                            <div class="item-wrap">
                                <label>تعداد پارکینگ <span class="required">*</span></label>
                                <input type="number" id="parking_number" name="parking_number" value="{{old('parking_number') ?? ''}}">
                            </div>
                            <div class="item-wrap">
                                <label>تعداد سرویس بهداشتی <span class="required">*</span></label>
                                <input type="number" id="bath_number" name="bath_number" value="{{old('bath_number') ?? ''}}">
                            </div>
                            <div class="item-wrap">
                                <label>قیمت فروش <span class="required">*</span></label>
                                <input type="number" id="price" name="price" value="{{old('price') ?? ''}}">
                            </div>
                            <div class="item-wrap">
                                <label>اجاره بها <span class="required">*</span></label>
                                <input type="number" id="rent" name="rent" value="{{old('rent') ?? ''}}">
                            </div>
                            <div class="item-wrap">
                                <label>ودیعه <span class="required">*</span></label>
                                <input type="number" id="deposit" name="deposit" value="{{old('deposit') ?? ''}}">
                            </div>
                            <div class="item-wrap">
                                <label>نوع ملک <span class="required">*</span></label>
                                <select  name="type">
                                    <option value="">همه انواع ملک</option>
                                    <option value="APARTMENT" >آپارتمان</option>
                                    <option value="VILLA" >ویلایی</option>
                                    <option value="FIELD" >زمین</option>
                                    <option value="ُSHARED_HOUSE" >منزل مشترک</option>
                                </select>
                            </div>
                            <div class="item-wrap">
                                <label>نوع قرارداد <span class="required">*</span></label>
                                <select  name="contract" >
                                    <option value="">نوع قرارداد</option>
                                    <option value="FOR_SALE" >برای فروش</option>
                                    <option value="FOR_RENT" >برای اجاره</option>
                                </select>
                            </div>
                            <div class="item-wrap">
                                <label>اپلود تصاویر <span class="required">*</span></label>
                                <input type="file" id="avatar_path" name="avatar_path" value="{{old('avatar_path') ?? ''}}">
                            </div>

                            <div class="item-wrap">
                                <label>توضیحات تکمیلی <span class="required">*</span></label>
                                <input type="text" id="description" name="description" value="{{old('description') ?? ''}}">
                            </div>
                            <div class="item-wrap">
                                <label>ادرس <span class="required">*</span></label>
                                <input type="text" id="address" name="address" value="{{old('address') ?? ''}}">
                            </div>
                            <div class="item-wrap form-submit">
                                <input type="submit" class="button-2"  value="ثبت">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
