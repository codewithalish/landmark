@extends('layouts.masterPages.admin')
@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="callout callout-info bg-white">ایجاد کیس جدید
            </div>

            {{--            <div class="callout callout-info bg-white">اطلاعات پیج</div>--}}
            <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header">{{$cardTitle ?? ''}}</div>

                @include('layouts.partials.auth.alert')

                <form action="/admin/cases" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="title">عنوان</label>
                            <input class="form-control" id="title" type="text" placeholder="title" name="title" value="{{old('title') ?? ''}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="room_number">تعداد اتاق</label>
                            <input class="form-control" id="room_number" type="number" placeholder="room_number" name="room_number" value="{{old('room_number') ?? ''}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="parking_number">تعداد پارکینگ</label>
                            <input class="form-control" id="parking_number" type="number" placeholder="parking_number" name="parking_number" value="{{old('parking_number') ?? ''}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="bath_number">تعداد سرویس بهداشتی</label>
                            <input class="form-control" id="bath_number" type="number" placeholder="bath_number" name="bath_number" value="{{old('bath_number') ?? ''}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="price">قیمت</label>
                            <input class="form-control" id="price" type="number" placeholder="price" name="price" value="{{old('price') ?? ''}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="rent">رهن</label>
                            <input class="form-control" id="rent" type="number" placeholder="rent" name="rent" value="{{old('rent') ?? ''}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="deposit">اجاره</label>
                            <input class="form-control" id="deposit" type="number" placeholder="deposit" name="deposit" value="{{old('deposit') ?? ''}}">
                        </div>
                        <div class="mb-3">
                            <label>نوع قرارداد <span class="required">*</span></label>
                            <select class="form-control" name="contract" >
                                <option value="">نوع قرارداد</option>
                                <option value="FOR_SALE" >برای فروش</option>
                                <option value="FOR_RENT" >برای اجاره</option>
                            </select>
                             </div>
                        <div class="mb-3">
                            <label class="form-label" for="area">متراژ</label>
                            <input class="form-control" id="area" type="text" placeholder="area" name="area" value="{{old('area') ?? ''}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="address">آدرس</label>
                            <input class="form-control" id="address" type="text" placeholder="address" name="address" value="{{old('address') ?? ''}}">
                        </div>
                        <div class="mb-3">
                            <label>نوع ملک <span class="required">*</span></label>
                            <select class="form-control" name="type" >
                                <option value="">همه انواع ملک</option>
                                <option value="APARTMENT" >آپارتمان</option>
                                <option value="VILLA" >ویلایی</option>
                                <option value="FIELD" >زمین</option>
                                <option value="ُSHARED_HOUSE" >منزل مشترک</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="is_vip">کیس vip</label>
                            <input class="form-control" id="is_vip" type="" placeholder="is_vip" name="is_vip">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="description">توضیحات</label>
                            <input class="form-control" id="description" type="text" placeholder="description" name="description" value="{{old('description') ?? ''}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="avatar_path">اپلود تصویر</label>
                            <input class="form-control" id="avatar_path" type="file" placeholder="avatar_path" name="avatar_path" value="{{old('avatar_path') ?? ''}}">
                        </div>
                        <button type="submit" class="btn btn-primary active">Send</button>

                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
